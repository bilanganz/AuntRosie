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

Route::get('/ingredients', 'IngredientController@index');
Route::post('/ingredients','IngredientController@store');
Route::get('/ingredients/create', 'IngredientController@create');
Route::get('/ingredients/{ingredient}', 'IngredientController@show');
Route::get('/ingredients/{ingredient}/edit', 'IngredientController@edit');
Route::put('/ingredients/{ingredient}','IngredientController@update');
Route::delete('/ingredients/destroy/{ingredient}','IngredientController@destroy');

Route::get('/medicalConditions', 'MedicalConditionController@index');
Route::post('/medicalConditions','MedicalConditionController@store');
Route::get('/medicalConditions/create', 'MedicalConditionController@create');
Route::get('/medicalConditions/{medicalCondition}', 'MedicalConditionController@show');
Route::get('/medicalConditions/{medicalCondition}/edit', 'MedicalConditionController@edit');
Route::put('/medicalConditions/{medicalCondition}','MedicalConditionController@update');
Route::delete('/medicalConditions/destroy/{medicalCondition}','MedicalConditionController@destroy');

Route::get('/customers', 'CustomerController@index');
Route::post('/customers','CustomerController@store');
Route::get('/customers/create', 'CustomerController@create');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::put('/customers/{customer}','CustomerController@update');
Route::delete('/customers/destroy/{customer}','CustomerController@destroy');

