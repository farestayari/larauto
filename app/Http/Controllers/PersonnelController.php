<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class PersonnelController extends Controller
{

    public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
//        $personnels = Personnel::all();
         $personnels = Personnel :: where('user_id', Auth::id())->get();
        return view('modules.personnel.index',['personnels'=>$personnels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modules.personnel.create');
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
        Personnel::create($request->all());
        return redirect('personnel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        //
       $personnel = Personnel::find($personnel->id);
        return view('modules.personnel.edit',['personnels'=>$personnel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $personnel)
    {
        //
            $personnels = Personnel :: find($personnel->id)->update($request->all());

            Session::flash('success_msg', 'the personnel is edited !');

            return redirect('personnel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy($personnel)
    {
        //
//        Personnel::delete();

         if($personnel->delete()) {
    return redirect('personnel')->with('success', 'The image has been successfully deleted!');
  } else {
    return redirect('personnel')->with('error', 'Please try again!');
  }
    // $personnel = Personnel::find($id)
    // $personnel->delete()





    }
}
