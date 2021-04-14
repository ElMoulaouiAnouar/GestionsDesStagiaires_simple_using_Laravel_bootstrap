<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stgiaires=Stagiaire::all();
        return view('stagiaires.index',[
            "stagiaires"=>$stgiaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stgiaires=Stagiaire::all();
        return view('stagiaires.create',[
            "stagiaires"=>$stgiaires
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $stagiaire=new Stagiaire();
        $stagiaire->cin=$request->input('cin');
        $stagiaire->nom=$request->input('nom');
        $stagiaire->prenom=$request->input('prenom');
        $stagiaire->age=$request->input('age');
        $stagiaire->Ville=$request->input('ville');
        $stagiaire->specialite=$request->input('specialite');
        $stagiaire->save();
        $request->session()->flash("status","adding seccess");
        return redirect('/stagiaire');
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
        $stagiaire=Stagiaire::find($id);
        $stagiaires=Stagiaire::all();
        return view('stagiaires.show',["stagiaire"=>$stagiaire,"stagiaire"=>$stagiaires]);
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
        $stagiaire=Stagiaire::find($id);
        return view('stagiaires.edit',["stagiaire"=>$stagiaire]);
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
        //$stagiaire=new Stagiaire();
        $stagiaire=Stagiaire::find($id);
        $stagiaire->cin=$request->input('cin');
        $stagiaire->nom=$request->input('nom');
        $stagiaire->prenom=$request->input('prenom');
        $stagiaire->age=$request->input('age');
        $stagiaire->Ville=$request->input('ville');
        $stagiaire->specialite=$request->input('specialite');
        $stagiaire->save();
        $request->session()->flash("status","updating seccess");
        return redirect('/stagiaire');
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
        $stagiaire=Stagiaire::find($id);
        $stagiaire->delete();
        return redirect('/stagiaire');
    }

    public function find(Request $request){
        $nom=$request->input('nom');
        $stgiaires=Stagiaire::where('nom','like',"%$nom%")->get();
        return view('stagiaires.index',[
            "stagiaires"=>$stgiaires
        ]);
    }
}
