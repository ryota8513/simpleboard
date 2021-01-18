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

//Route::get('morning',function(){return '<html><body><h1>GoodMorning</h1><p>Hi!How are you?</p></body></html>';});
// Route::get('hello','HelloController@index');
// Route::get('morning','HelloController@index2');

//Route::get('Hello',function(){return '<html><body><h1>Heloo</h1><p>hello yuki</p></body></html>';});

// homework1-2-1
// Route::get('hello', function () {
//     return '<html><bod><h1>hello</h1><p>My name is Yuki</p></body></html>';
// });

// // // homework1-2-2
// Route::get('morning', function () {
//     return '<html><bod><h1>GoodMorning</h1><p>Hi!How are you</p></body></html>';
// });

// homework1-3-1

// Route::get('hello',function(){
// $html=<<<EOF

// <html>
// <body>
// <h1>hello</h1>
// <p>My name is yuki </p>
// </body>
// </html>
// EOF;
// return $html;
// });

// homework1-3-2

// Route::get('morning',function(){
// $html=<<<EOF
// <html>
// <body>
// <h1>GoodMorning</h1>
// <p>Hi! How are you </p>
// </body>
// </html>
// EOF;
// return $html;
// })


// homework1-4-1

// Route::get('hello/{msg}',function($msg){
// $html=<<<EOF
// <html>
// <body>
// <h1>hello</h1>
// <p>My name is {$msg}</p>
// </body>
// </html>
// EOF;
// return $html;
// })

// Route::get('morning/{msg}',function($msg){
// $html=<<<EOF
// <html>
// <body>
// <h1>GoodMorning</h1>
// <p>Hi! {$msg}</p>
// <p>How are you</p>
// </body>
// </html>
// EOF;
// return $html;
// })


// homework1-1

// Route::get('hello','HelloController@hello');

// Route::get('morning','HelloController@morning');


// // homework1-2
// Route::get('hello1','HelloController@hello1');
// Route::get('yuuki','HelloController@yuuki');
Route::get('introduction','HelloController@into');

?>

