<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccueilFormRequest;

class AccueilController extends Controller
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
    public function store(AccueilFormRequest $request)
    {
       // dd($_POST['dateAccueil']);
       // $pam  = \DB::select("select * from typeorphelins");
       //dd($_POST['accompagne']);
        //dd(strtolower($request->accompagne));


       // \App\Accueil::create(['dateAccueil'=>$request->dateAccuei


      $message_d_erreur = "";

      try {

       if(strtolower($request->accompagne == 'oui'))
            $accompagnateurs_id = \App\Accompagnateurs::create($request->only('prenomacom', 'nomacom', 'ageacom', 'adresseacom','telephoneacom', 'professionacom'))->id;
        else $accompagnateurs_id = 0;


        $enfants_id = \App\Enfants::create($request->only('prenomenf', 'nomenf', 'surnomsenf', 'ageenf','sexeenf', 'datenaisEnf', 'lieunaisEnf', 'ethnieenf', 'profilenf', 'rangFratrieEnf', 'inscriEtaCivenf', 'adresActuenf', 'nationaliteenf', 'paysOrigenf', 'vilVillagOrigenf', 'scolariseenf', 'niveauScolarenf', 'autrEnseignenf', 'autrEnseignNbrAnenf'))->id;


        $situationfamiliales_id = \App\Situationfamiliales::create($request->only('pereVivant', 'mereVivante', 'parenSepare', 'parenVivanEns', 'typeorphelin_id', 'sitFamAutr', 'vitAvecPere', 'vitAvecMere', 'vitAvecGrandParent', 'vitAveOncle', 'vitAvecTante', 'vitAvecAutre'))->id;


        $identificationparents_id = \App\Identificationparents::create($request->only('pere', 'occupationPere', 'agepere', 'adressepere', 'telephonepere', 'mere', 'occupationmere', 'agemere', 'adressemere', 'telephonemere'))->id;


        //// Prisesoins
        $dataPrisesoins = $request->only('typUrgTypInfr', 'typUrgAutr', 'besoinImmeAutr', 'mesurPriseautr', 'resumeSituationEnfant');

        $typUrgS ='';
        for($i = 1; $i <= 8; $i++){

            isset($_POST['typUrg' . $i]) ? $typUrgS .= $_POST['typUrg' . $i] . ',' : '';

        }
        $dataPrisesoins['typeurgence_ids'] = $typUrgS;

        $besoinImmeS ='';
        for($i = 1; $i <= 9; $i++){

            isset($_POST['besoinImme' . $i]) ? $besoinImmeS .= $_POST['besoinImme' . $i] . ',' : '';

        }
        $dataPrisesoins['typebesoinimmedia_ids'] = $besoinImmeS;

        $mesurPriseS ='';
        for($i = 1; $i <= 9; $i++){

            isset($_POST['mesurPrise' . $i]) ? $mesurPriseS .= $_POST['mesurPrise' . $i] . ',' : '';

        }
        $dataPrisesoins['typemesuresprises_ids'] = $mesurPriseS;

        $prisesoin_id = \App\Prisesoins::create($dataPrisesoins)->id;


        $all_ok_test = true;
        if($enfants_id and $accompagnateurs_id and $situationfamiliales_id and $identificationparents_id and $prisesoin_id){

            $dataAccueil = $request->only('dateAccueil', 'heureAccueil');
            $dataAccueil['enfants_id'] = $enfants_id;
            $dataAccueil['accompagnateurs_id'] = $accompagnateurs_id;
            $dataAccueil['situationfamiliales_id'] = $situationfamiliales_id;
            $dataAccueil['identificationparents_id'] = $identificationparents_id;
            $dataAccueil['prisesoin_id'] = $prisesoin_id;

            $result = \App\Accueil::create($dataAccueil);

            \MercurySeries\Flashy\Flashy::success('Enrégistrement effectué avec succès');

        }else   $all_ok_test = false;
      }
      catch(\Illuminate\Database\QueryException $e) {

            $all_ok_test = false;

            $message_d_erreur = "<b>Merci de photographier ces messages et de contacter le développer pour le en faire part : +221 77 271 76 55</b>" .'<br><br><br> <font color="red">'. $e->errorInfo[2] .'<br><br>'. $e->getMessage()."</font>";

      }
      finally {
          if($message_d_erreur != ""){ // ie  $all_ok_test

            if(isset($enfants_id))                 \App\Enfants::destroy($enfants_id);
            if(isset($accompagnateurs_id))         \App\Accompagnateurs::destroy($accompagnateurs_id);
            if(isset($situationfamiliales_id))     \App\Situationfamiliales::destroy($situationfamiliales_id);
            if(isset($identificationparents_id))   \App\Identificationparents::destroy($identificationparents_id);
            if(isset($prisesoin_id))               \App\Prisesoins::destroy($prisesoin_id);

            if($message_d_erreur != "") echo $message_d_erreur;

          } else {
              if($all_ok_test)
                \MercurySeries\Flashy\Flashy::success('Enrégistrement effectué avec succès');
              else{
                if(isset($enfants_id))                \App\Enfants::destroy($enfants_id);
                if(isset($accompagnateurs_id))        \App\Accompagnateurs::destroy($accompagnateurs_id);
                if(isset($situationfamiliales_id))    \App\Situationfamiliales::destroy($situationfamiliales_id);
                if(isset($identificationparents_id))  \App\Identificationparents::destroy($identificationparents_id);
                if(isset($prisesoin_id))              \App\Prisesoins::destroy($prisesoin_id);
                \MercurySeries\Flashy\Flashy::error("L'Enrégistrement n'a pas about. Merci de recommencer.");
              }
              return back();
          }
      }
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
    public function update(AccueilFormRequest $request, $id)
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
}
