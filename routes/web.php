<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes(['register' => false,'reset' => false]);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
});

// Route::get('leads/create','HomeController@create')->name('leads.create');

// Route::get('leads/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::group(['middleware'=>'auth'],function(){

// Route::get('create', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('leads/create', [App\Http\Controllers\LeadController::class, 'create'])->name('leads.create');

Route::get('notes/create', [App\Http\Controllers\NoteController::class, 'create'])->name('notes.create');

});
















>>>>>>> 53b490c753df696b78f90ead71c8723a293ad995
