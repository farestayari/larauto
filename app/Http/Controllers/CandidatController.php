<?php

namespace App\Http\Controllers;


use Auth;
use App\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $candidats = Candidat :: where('user_id',Auth::id())->get();
        return view ('modules.candidat.index',['candidats'=>$candidats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('modules.candidat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidat = Candidat::create([
          'nom'=>$request->nom,
          'prenom' => $request->prenom,
          'cin' => $request->cin,
          'date_naissance' => $request->date_naissance,
          'adress' => $request->adress,
          'nationalité' => $request->nationalité_id,
          'categorie' => $request->categorie_id,
          'telephone' => $request->telephone,
          'type' => $request->type_id,
          'user_id' => Auth::id()
        ]);

       return Redirect()->route('candidats');
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
        $candidat = Candidat::find($id);
        $candidat->delete();
        return redirect()->back();
    }
}
