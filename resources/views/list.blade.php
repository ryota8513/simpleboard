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
       <form name="form1" method="POST" action='infomation'>
        {{ csrf_field() }}
       
       <tr>
        <th>ID</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>年齢</th>
        <th>性別</th>
        <th>問い合わせ</th><br>
       </tr>
    
       <!--Gitの練習-->
        @foreach($questions as $question)
        <tr>
         <td>{{$question->id}}</td>
         <td>{{$question->name}}</td>
         <td>{{$question->email}}</td>
         <td>{{$question->age}}</td>
         <td>{{$question->gender}}</td>
         <td>{{$question->message}}</td><br>
         <button type="submit">更新2</button>
        </tr>
        @endforeach 
     </form>   
     </tabley>

</html>
 
