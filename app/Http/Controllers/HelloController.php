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

public function add(){
    return view('infomation');
}

//storeでデータ保存
public function create(Request $request){
        $questions=new question();
        $questions->name=$request->name;
        $questions->email=$request->email;
        $questions->age=$request->age;
        $questions->gender=$request->gender;
        $questions->message=$request->message;
        $questions->save();
        return redirect('infomation'); 
}


  //all();でテーブル内データを全て取得　
  //$dateにテーブルのquestionsを代入
  //viewでRouteのlistを定義して、$dateでquestionsのテーブル中身を表示させる
  
//list一覧表示
public function lists(){
    $questions = question ::all();
    $date=['questions'=>$questions];
    // $question=question ::find($request->id);
    return view('list',$date);
}

//検索フォーム
// public function find(Request $request){
//     return view('find',['input'=>'']);
// }
// public function search(Request $request){
//     $question = question ::find($request->input);
//     $param =['input' => $request->input,'question'=>$questions];
//     return view('question.find',$param);
// }

//compactを使用する時はbladeと名前を同じにする
//findはプライマリーキーで検索している

public function edit(Request $request){
    $questions=question ::find($request->id);
        return view('edit',compact('questions'));
}

//更新
//redirectはRouteを呼び出す
public function update(Request $request){
        // dd($request);
        $questions = question::find($request->id);
        $questions->name=$request->name;
        $questions->email=$request->email;
        $questions->age=$request->age;
        $questions->gender=$request->gender;
        $questions->message=$request->message;
        $questions ->save();
        return redirect('list');
}

//削除
public function delete(Request $request){
    $questions = question::find($request->id);
    return view('delete',compact('questions'));
}

public function remove(Request $request){
        $questions = question::find($request->id)->delete();
        // $questions->name=$request->name;
        // $questions->email=$request->email;
        // $questions->age=$request->age;
        // $questions->gender=$request->gender;
        // $questions->message=$request->message;
        // $questions ->save();
     return redirect('list');
}










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

