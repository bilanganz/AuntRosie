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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false]);

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

Route::get('/recipes', 'RecipeController@index');
Route::post('/recipes','RecipeController@store');
Route::get('/recipes/create', 'RecipeController@create');
Route::get('/recipes/{recipe}', 'RecipeController@show');
Route::get('/recipes/{recipe}/edit', 'RecipeController@edit');
Route::put('/recipes/{recipe}','RecipeController@update');
Route::delete('/recipes/destroy/{recipe}','RecipeController@destroy');

Route::get('/stocks', 'StockController@index');
Route::post('/stocks','StockController@store');
Route::get('/stocks/create', 'StockController@create');
Route::post('/stocks/reduction', 'StockController@reduction');
Route::get('/stocks/reduce', 'StockController@reduce');

Route::get('/inventories', 'InventoryController@index');
Route::post('/inventories','InventoryController@store');
Route::get('/inventories/create', 'InventoryController@create');
Route::get('/inventories/{inventory}', 'InventoryController@show');
Route::get('/inventories/{inventory}/edit', 'InventoryController@edit');
Route::put('/inventories/{inventory}','InventoryController@update');
Route::delete('/inventories/destroy/{inventory}','InventoryController@destroy');

Route::get('/sales', 'SalesController@index');
Route::post('/sales','SalesController@store');
Route::get('/sales/create', 'SalesController@create');
Route::get('/sales/{sale}', 'SalesController@show');
Route::get('/sales/{sale}/edit', 'SalesController@edit');
Route::put('/sales/{sale}','SalesController@update');
Route::delete('/sales/destroy/{sale}','SalesController@destroy');
