<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $users = DB::table('users')->count();
        $batches=DB::table('batches')->count();
        $quizzes=DB::table('quizzes')->count();
        $questions=DB::table('questions')->count();

      
        return view('dashboard.index',['counts'=>[$users, $batches, $quizzes,$questions]]);

    }
    public function bulk(){
        $affected=DB::table('users')
         ->where('password','12345')
        -> delete();
        return $affected;
    }
    public function url_private(){
         return 'private';
     }
        public function url_public(){
            return 'public';
        }
}
