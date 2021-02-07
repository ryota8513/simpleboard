<html lang="en">
<head>
    <!--<meta charset="UTF-8">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <!--<title>お問い合わせlist</title>-->
    <!--<link rel="stylesheet"  href="info.css">-->
    <!--<script type="text/javascript" src="contact.js"></script>-->
   
    <title>@yield('title')</title>
    <style>
    th,td{
    border-bottom:solid;
    }
    </style>
 </head>
    
    <body>
      <h1>@yield('title')</h1>
      @section('menubar')
      <h2 class="menutitle"></h2>
      <ul>
       <li>@show</li>
      </ul>
      <hr size="1">
      
      <div class="content">
       @yield('content')
      </div>
      
      <div class="footer">
       @yield('footer')
      </div>
    </body>
    </html>
    
    <!--<table>-->
     <!--  <tr>-->
     <!--   <th>ID</th>-->
     <!--   <th>名前</th>-->
     <!--   <th>メールアドレス</th>-->
     <!--   <th>年齢</th>-->
     <!--   <th>性別</th>-->
     <!--   <th>問い合わせ</th><br>-->
     <!--  </tr>-->
    
     <!--   @foreach($questions as $question)-->
     <!--   <tr>-->
     <!--    <td>{{$question->id}}</td>-->
     <!--    <td>{{$question->name}}</td>-->
     <!--    <td>{{$question->email}}</td>-->
     <!--    <td>{{$question->age}}</td>-->
     <!--    <td>{{$question->gender}}</td>-->
     <!--    <td>{{$question->message}}</td><br>-->
     <!--    <button type="submit">更新</button>-->
     <!--   </tr>-->
     <!--   @endforeach -->
        
     <!--</tabley>-->