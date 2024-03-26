<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage; 
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // $data=$request->session()->all();
        // // return $data; 


        if (Cache::has("key")) {
            $counts = Cache::get('key');
        } else {
            $users = DB::table('users')->count();
            $batches = DB::table('batches')->count();
            $quizzes = DB::table('quizzes')->count();
            $questions = DB::table('questions')->count();

            $counts = [$users, $batches, $quizzes, $questions];
            Cache::put('stats', $counts, $seconds = 60);

        }

        $visits = session('visits', 0);
        return view('dashboard.index', ['counts' => $counts, 'visits' => $visits]);

    }
    public function bulk()
    {
        $affected = DB::table('users')
            ->where('password', '12345')
            ->delete();
        return $affected;
    }
    public function url_private()
    {
        $contents = Storage::get('file.txt');
        return $contents;
    }
    public function url_public()
    {
        $resource ="i am learing laravel php";
        Storage::put('file.txt', $resource);
        return 'public';
    }
}
