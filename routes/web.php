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
//一覧表示
Route::get('list','HelloController@lists');

//追加
Route::get('infomation','HelloController@add');
Route::post('questions', 'HelloController@create');

//更新
Route::get('edit', 'HelloController@edit');
Route::post('edit', 'HelloController@update');

//検索フォーム
// Route::get('find','HelloController@find');
// Route::post('find','HelloController@search');


 if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
 } 
 
 
 
 // Route::get('edit{id}','HelloController@edit');
 // Route::post('edit','HelloController@edit');
 // // Route::patch('edit/{id}','HelloController`update');
?>

