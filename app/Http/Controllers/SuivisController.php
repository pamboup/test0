<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuivisController extends Controller
{
    public function autoComplession()
    {
        // return $_GET['sujet'];\App\Suivis::
        return \App\Suivis::where('idenfant', $_GET['sujet'])->orderBy('id', 'desc')->limit(1)->get();
        //return \App\Enfants::where('id', $_GET['sujet'])->get();
    }
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
        $errorpam = false;
        if( ! \App\Enfants::where('id', $request->idenfant)->get()->isEmpty()){
            $all_ok_test = \App\Suivis::create($request->all());
            if($all_ok_test)
                \MercurySeries\Flashy\Flashy::success('Enrégistrement de suivi effectué avec succès');
            else{
                $errorpam = true;
                \MercurySeries\Flashy\Flashy::error("L'enrégistrement de suivi n'a pas about. Merci de recommencer.");
            }
        }else{
            $errorpam = true;
            \MercurySeries\Flashy\Flashy::error("Cet enfant n'est pas encore enrégistré. Merci de vérifier.");
        }
        if($errorpam)
            return redirect('http://localhost/edensenegal/public/?param=suivi')->withInput();


        return back();
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
}
