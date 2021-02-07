<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question; //modelの指定
// use\DB;
class HelloController extends Controller
{


public function into(){
  return view('introduction');
}

public function info(){
  return view('infomation');
}

public function store(Request $request)
    {
        $question=new question();
        $question->name=$request->name;
        $question->email=$request->email;
        $question->age=$request->age;
        $question->gender=$request->gender;
        $question->message=$request->message;
        $question->save();
        return redirect('infomation');
}



  //all();でテーブルないとデータを全て取得　
  //$dateにテーブルのquestionsを代入
  //viewでRouteのlistを定義して、$dateでquestionsのテーブル中身を表示させる

public function lists(){
    $questions = question ::all();
    $date=['questions'=>$questions];
    return view('list',$date);
}

// public function edit($id){
//     $questions = question ::find($id);
//     // if(is_null($questions)){
//     //     return redirect('');
//     // }
//     return view('edit',['question'=>$questions]);
// }

//特定の物を見つける時にしよう　find();1
// public function lists(){
//     $questions = question ::find([1]);
//     $date=['questions'=>$questions];
//     return view('list',$date);
// }
//特定の物を見つける時にしよう　where();1
// public function lists(){
//     $questions = question ::where('id',6)->get();
//     $date=['questions'=>$questions];
//     return view('list',$date);
// }
 
 //特定のカラムを取得
// public function lists(){
//     $questions = question ::get(['name']);
//     $date=['questions'=>$questions];
//     return view('list',$date);
// }

// protected $question;

// public function __construct(question $question){
//   $this->question=$question;
// }


}
 
?>

