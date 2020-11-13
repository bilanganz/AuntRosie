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

Route::get('/ingredients', 'IngredientsController@index');
Route::get('/ingredients/create', 'IngredientsController@create');
Route::get('/ingredients/{ingredients}', 'IngredientsController@show');
Route::get('/ingredients/{ingredients}/edit', 'IngredientsController@edit');
Route::put('/ingredients/{ingredients}','IngredientsController@update');

Route::get('/medicalConditions', 'MedicalConditionsController@index');
Route::get('/medicalConditions/create', 'MedicalConditionsController@create');

Route::post('/ingredients','App\Http\Controllers\IngredientsController@store');
