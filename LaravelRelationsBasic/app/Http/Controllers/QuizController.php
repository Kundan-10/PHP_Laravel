<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $quizzes =Quiz::with(['batch','user'])->paginate(30);
            $message = session('message', '');
           return view('quizzes.index', ['quizzes'=>$quizzes,'message'=>$message]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           $batches = Batch::all();

           return view('quizzes.create',['batches' => $batches]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $title = $request->input('title');
       $starting = $request->input('starting');
       $ending = $request->input('ending');
       $duration = $request->input('duration');
       $batch_id = $request->input('batch_id');

       $quiz =new Quiz;
       $quiz->title=$title;
       $quiz->starting = $starting;
       $quiz->ending = $ending;
       $quiz->duration = $duration;
       $quiz->batch_id = $batch_id;
       $quiz->user_id = Auth::id();

       $quiz->save();
      //  $request->session()->flash('message', 'batch created successful!');
       return redirect()->route('quizzes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    
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

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
     
       $quiz = Quiz::find($id);
       $quiz->delete();

      //  $request->session()->flash('message', 'quiz deleted successful!');
       return redirect()->route('quizzes.index');
    }
}
