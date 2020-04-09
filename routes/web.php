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

 //Route::get("users/{id}",'users@index');
 //Route::view('/mobiles','mobiles');

 //Route::view('/userview',"user");
 //Route::post('usercontroller'."User@submit");
 //Route::get('db','users@index');
// Route::get('list','Users@list');
//Route::view('form','companyform');
//Route::post('submit','companies@save');

Route::view('form','companyform');
Route::post('update','companies@update');