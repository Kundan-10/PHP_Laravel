<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $batches=Batch::all();
        return view("batches.index",["batches" => $batches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("batches.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $starting = $request->input('starting');

        $batch = new Batch;
        $batch->name = $name;
        $batch->starting = $starting;
        $batch->save();
        return redirect()->route('batches.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batch = Batch::find($id);
        return view('batches.show',['batch'=> $batch]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batch = Batch::find($id);

        return view('batches.edit',['batch'=> $batch]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $batch= Batch::find($id);

        $name = $request->input('name');
        $starting = $request->input('starting');

        $batch->name = $name;
        $batch->starting = $starting;

        $batch->save();
        

         return redirect()->route('batches.show',['batch'=> $batch]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batch = Batch::find($id);
        $batch->delete();
        return redirect()->route('batches.index');

    }
}
