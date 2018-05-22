<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiecesJointesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idenfant = \App\Enfants::where('id', $request->idenfant)->get();
        if( ! $idenfant->isempty() ){

           /* $file = $request->file('photo');
            $file = $request->photo;
            if ($request->hasFile('photo')) {}
            if ($request->file('photo')->isValid()) {}
            $path = $request->photo->path();
            $extension = $request->photo->extension();
            $extension = strrchr($_FILESphoto['name'], '.');*/
            if ($request->hasFile('photo')) {
                $extension = $request->file('photo')->extension();
                $extensions = array('png', 'gif', 'jpg', 'jpeg');

                $photoSizeOk =  $request->file('photo')->getSize() <= 5242880; //5242880 == 5Mo
                //Début des vérifications de sécurité...
                if(in_array($extension, $extensions) ||  $photoSizeOk){
                        //Si l'extension ou la taille n'est pas bonnes

                    $idPJ = \App\PiecesJointes::create($request->except('photo'))->id;

                    $photoName = $idPJ."-".$request->photo->getClientOriginalName();
                    $path = $request->photo->storeAs('/piecesJointes/'.$idenfant[0]->id, $photoName);
                    $ok = false;
                    if($path){
                        if(  \App\PiecesJointes::whereId($idPJ)->update(['photo' => $photoName])  ){
                           $ok =  true;
                           \MercurySeries\Flashy\Flashy::success('Pièce jointe ajoutée avec succès');
                           return back();
                        }
                        //else il faut supprimer la photo du dossier (y revenir)
                    }
                    if( ! $ok){
                        \App\PiecesJointes::destroy($idPJ);
                        $errorMessages = "Impossible de charger la photo.";
                    }
                }else
                    $errorMessages = "La taille et/ou le format de la photo n'est(sont) pas bon(s).";
            }else
                $errorMessages = "Ceci n'est pas une bonne pièce jointe.";
        }else
            $errorMessages = "Cette matriculation ne correspond à aucun enfant.";

        \MercurySeries\Flashy\Flashy::error($errorMessages." Veiller recommancer !");

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function testUploadPhoto($_FILESphoto){
        $taille_maxi = 1073741824;
        $taille = filesize($_FILESphoto['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILESphoto['name'], '.');
        $erreur = "";
        //Début des vérifications de sécurité...
        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
            $erreur = '<font color="#a94442">Vous devez uploader un fichier de type png, gif, jpg ou jpeg.</font>';
        }
        if($taille > $taille_maxi){

            if($erreur != "") $erreur .= "<br/>";

            $erreur .= '<font color="#a94442">Le fichier est trop gros ! (> 1 Mo)</font>';
        }
        return $erreur;
    }

    public function uploadPhoto($_FILESphoto, $idenfant){
        $dossier = 'piecesJointes/id'.$idenfant;
        $fichier = basename($_FILESphoto['name']);

        $newIdPiecesJointes = \App\PiecesJointes::where('idenfant',  $idenfant)->orderBy('id', 'desc')->limit(1)->get() + 1;


        //On formate le nom du fichier ici...
        $fichier = strtr($fichier,
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = $newIdPiecesJointes . preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

        $uploaded = move_uploaded_file($_FILESphoto['tmp_name'], $dossier . $fichier);
        if($uploaded){
            return $dossier . $fichier;
        }
        else{
            return "";
        }
    }
}
