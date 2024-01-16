<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduktyCont;
use App\Http\Controllers\DzialyCont;
use App\Http\Controllers\DostawcyCont;
use App\Http\Controllers\LookCont;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('site.home');
});

Route::get('/produkty', function () {
    return view('produkty.index');
});

Route::get('/dzialy', function () {
    return view('dzialy.index');
});

Route::get('/dostawcy', function () {
    return view('dostawcy.index');
});

Route::get('/look', function () {
    return view('look.index');
});


Route::resource('produkty',ProduktyCont::class);
Route::resource('dzialy',DzialyCont::class);
Route::resource('dostawcy',DostawcyCont::class);
Route::resource('look',LookCont::class);

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
