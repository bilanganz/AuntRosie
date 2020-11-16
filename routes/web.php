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
Route::post('/ingredients','IngredientsController@store');
Route::get('/ingredients/create', 'IngredientsController@create');
Route::get('/ingredients/{ingredient}', 'IngredientsController@show');
Route::get('/ingredients/{ingredient}/edit', 'IngredientsController@edit');
Route::put('/ingredients/{ingredient}','IngredientsController@update');
Route::delete('/ingredients/destroy/{ingredient}','IngredientsController@destroy');

Route::get('/medicalConditions', 'MedicalConditionsController@index');
Route::post('/medicalConditions','MedicalConditionsController@store');
Route::get('/medicalConditions/create', 'MedicalConditionsController@create');
Route::get('/medicalConditions/{medicalCondition}', 'MedicalConditionsController@show');
Route::get('/medicalConditions/{medicalCondition}/edit', 'MedicalConditionsController@edit');
Route::put('/medicalConditions/{medicalCondition}','MedicalConditionsController@update');
Route::delete('/medicalConditions/destroy/{medicalCondition}','MedicalConditionsController@destroy');

