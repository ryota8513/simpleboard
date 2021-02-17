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

//編集
Route::get('edit', 'HelloController@edit');
Route::post('edit', 'HelloController@edit');
Route::post('editform', 'HelloController@update');

//削除
Route::get('delete','HelloController@delete');
Route::post('delete','HelloController@delete');
Route::post('deleteform','HelloController@remove');


//検索フォーム
// Route::get('find','HelloController@find');
// Route::post('find','HelloController@search');


 if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
 } 
 
 
 
 // Route::get('edit{id}','HelloController@edit');
 // Route::post('edit','HelloController@edit');
 // // Route::patch('edit/{id}','HelloController`update');

//method="post" action="editform"でweb.phpのRoute::('editform','HelloController@update')の'editform'に
//アクセスして、'HelloController@updateはHelloControllerのupdateを呼び出す。



?>