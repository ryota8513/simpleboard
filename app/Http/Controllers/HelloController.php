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
public function create(Request $request)
    {
        // $this -> validate($request,question ::$rules);
        $question=new question();
        $question->name=$request->name;
        $question->email=$request->email;
        $question->age=$request->age;
        $question->gender=$request->gender;
        $question->message=$request->message;
        // $form = $request->all();
        // $question->fill($form)->save();
        $question->save();
        return redirect('question'); 
        // $form=$request->all();
        // unset($form['_token']);
}


  //all();でテーブルないとデータを全て取得　
  //$dateにテーブルのquestionsを代入
  //viewでRouteのlistを定義して、$dateでquestionsのテーブル中身を表示させる
  
//list一覧表示
public function lists(){
    $questions = question ::all();
    $date=['questions'=>$questions];
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
// public function edit(){
//     return view('edit');
// }
// public function edit($id){
//     $questions=question::find($id);
//     return view('edit');
// }



public function edit(Request $request){
    $question=question ::find($request->id);
        // $question->name=$request->name;
        // $question->email=$request->email;
        // $question->age=$request->age;
        // $question->gender=$request->gender;
        // $question->message=$request->message;
        // $question->save();
    return view('edit',['form'=>$question]);
}
//更新
public function update(Request $request){
        $questions = question::find($id);
        $question->name=$request->name;
        $question->email=$request->email;
        $question->age=$request->age;
        $question->gender=$request->gender;
        $question->message=$request->message;
        $questions ->save();
        return redirect('question');
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

