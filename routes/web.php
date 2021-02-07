<?php

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


Route::get('introduction','HelloController@into');

Route::get('infomation','HelloController@info');
Route::post('questions', 'HelloController@store');
Route::get('list','HelloController@lists');


 if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
 } 
 
 
 
 // Route::get('edit{id}','HelloController@edit');
 // Route::post('edit','HelloController@edit');
 // // Route::patch('edit/{id}','HelloController`update');
?>

