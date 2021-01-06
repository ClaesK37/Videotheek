<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/keuze', function () {
    return view('keuze');
})->middleware('auth');


Route::get('/titels', 'App\Http\Controllers\TitelController@index');
Route::get('/titels/create', 'App\Http\Controllers\TitelController@create');
Route::post('titels', 'App\Http\Controllers\TitelController@store');
Route::get('/titels/{id}', 'App\Http\Controllers\TitelController@show');
Route::delete('/titels/{id}', 'App\Http\Controllers\TitelController@destroy')->name('titels.destroy');

Route::get('films', 'App\Http\Controllers\FilmController@index');
Route::get('/films/create', 'App\Http\Controllers\FilmController@list');
Route::get('/films/zoeken', 'App\Http\Controllers\FilmController@search');
Route::post('films', 'App\Http\Controllers\FilmController@store');
Route::get('/films/{id}', 'App\Http\Controllers\FilmController@show');
Route::get('/films/edit/{id}', 'App\Http\Controllers\FilmController@edit');
Route::post('/films/edit/{id}', 'App\Http\Controllers\FilmController@update')->name('films.update');
Route::delete('/films/{id}', 'App\Http\Controllers\FilmController@destroy')->name('films.destroy');

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');