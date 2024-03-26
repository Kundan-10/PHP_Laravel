<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('batches', BatchController::class);
Route::resource('users', UserController::class);
Route::resource('quizzes', QuizController::class);
Route::resource('questions', QuestionController::class);
Route::resource('questions', DashboardController::class);


Route::get('/dash', [DashboardController::class, 'index']);
Route::get('/bulk', [DashboardController::class, 'bulk']);
Route::get('/private-url', [DashboardController::class, 'url_private'])->middleware('auth');
Route::get('/public-url', [DashboardController::class, 'url_public']);
require __DIR__ . '/auth.php';

