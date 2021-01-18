<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
//     public function index(){
// 	return <<<EOF
// <html>
// <body>
// <h1>hello</h1>
// <p>My name is Yuki</p> 
// </body>
// </html>
// EOF;
// }

//  public function index2(){
// 	return <<<EOF
// <html>
// <body>
// <h1>goodmorning</h1>
// <p>GoodMorning</p> 
// </body>
// </html>
// EOF;
// }


// // homework1-1
// public function hello(){
// return <<<EOF
// <html>
// <body>
// <h1>Hello</h1>
// </body>
// </html>
// EOF;
// }


// public function morning(){
// return <<<EOF
// <html>
// <body>
// <h1>GoodMorning</h1>
// </body>
// </html>
// EOF;
// }
// }


// homework1-2

// public function hello1(){
//     return view('index');
// }

// public function yuuki(){
// return view('yuuki');

// }

public function into(){
  return view('introduction');

}
}


 
?>

