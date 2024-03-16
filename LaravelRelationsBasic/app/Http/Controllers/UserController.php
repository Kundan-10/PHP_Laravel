<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    //    if(User::find($id)->profile){
    //       $profile=new Profile;
    //    }
        $batch = User::find($id)->profile;
        // return view('Users.show',['Users'=> $User]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // $batch= Batch::find($id);

        // $name = $request->input('name');
        // $starting = $request->input('starting');

        // $batch->name = $name;
        // $batch->starting = $starting;

        // $batch->save();


        //  return redirect()->route('batches.show',['batch'=> $batch]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $batch = Batch::find($id);
        // $batch->delete();
        // return redirect()->route('batches.index');

    }
}
