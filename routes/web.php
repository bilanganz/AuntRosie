<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/credit', function() {return view('credit');});

Route::get('/ingredients', 'App\Http\Controllers\IngredientsController@index');
Route::get('/ingredients/create', 'App\Http\Controllers\IngredientsController@create');
Route::get('/ingredients/{ingredients}', 'App\Http\Controllers\IngredientsController@show');
Route::get('/ingredients/{ingredients}/edit', 'App\Http\Controllers\IngredientsController@edit');
Route::put('/ingredients/{ingredients}','App\Http\Controllers\IngredientsController@update');

Route::get('/medicalConditions', 'App\Http\Controllers\MedicalConditionsController@index');

Route::post('/ingredients','App\Http\Controllers\IngredientsController@store');
