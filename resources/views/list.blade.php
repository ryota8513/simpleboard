<html>
 <head>
    <!--<meta charset="UTF-8">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <!--<title>お問い合わせlist</title>-->
    <!--<link rel="stylesheet"  href="info.css">-->
    <!--<script type="text/javascript" src="contact.js"></script>-->
    <style>
    th,td{
    border-bottom:solid;
    }
    </style>
 </head>
     <table>
       <form name="form1" method="POST" action="edit">
        {{ csrf_field() }}
       
       <tr>
        <th>ID</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>年齢</th>
        <th>性別</th>
        <th>問い合わせ</th><br>
       </tr>
 
        @foreach($questions as $question)
        <tr>
         <td>{{$question->id}}</td>
         <td>{{$question->name}}</td>
         <td>{{$question->email}}</td>
         <td>{{$question->age}}</td>
         <td>{{$question->gender}}</td>
         <td>{{$question->message}}</td><br>
        </tr>
        @endforeach 
        <input type="text" name="id" >
        <button type="submit">編集</button>
       </form> 
       
       <form name="form2" method="POST" action="delete">
         {{ csrf_field() }}
        <input type="text" name="id" >
        <button type="submit">削除</button>
       </form>
       
     </tabley>

</html>
 
