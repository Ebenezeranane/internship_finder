<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply_form;

class ApplyController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    /**
     * 
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
        return view('apply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validate the user form data 
         $request->validate([
            'firstname'=>'required',  
            'lastname'=>'required',
            'email'=>'required',
            'phone'=> 'required',
            'institution'=>'required',
            'location'=>'required',
            
                      ]);

      






      //inserting data into the database 
      $apply = new Apply_form();
      $apply->first_name = $request->input('firstname');
      $apply->last_name = $request->input('lastname');
      $apply->email = $request->input('email');
      $apply->phone = $request->input('phone');
      $apply->location = $request->input('location');
      $apply->institution = $request->input('institution');
      
    

      
      $apply->save();

      //redirecting to the user dashboard after creating a new member
      return redirect('/home');
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
