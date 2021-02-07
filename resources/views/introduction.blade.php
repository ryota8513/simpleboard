<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>introduction</title>
    <!--<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">-->
    <!--<script src="https://kit.fontawesome.com/1694725129.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="{{ secure_asset('/css/introduction.css') }}">
    
    <img alt="workの写真" src="{{ secure_asset('/image/pc.jpg') }}">
    <img id="work" alt="workの写真" src="{{ secure_asset('/image/pc1.jpg') }}">
    <img class="photo" alt="仕事の写真" src="{{ secure_asset('/image/work.jpg') }}"width=200px height=200>
   
</head>
<body>
   
    <header>
            <div class="header">
                <h1>WELCOME   TO <br>PORTFOLIO</h1>
            </div>
           <div class="main">
              <ul id="menu">
                
              <!--  <li id="about">-->
              <!--  <a href="#about>-->
              <!--  <img src="about.jpg" alt="aboutの写真">-->
              <!--  <span>about</span>-->
              <!--  </a>-->
              <!--</li>-->
              
                <li id="work">
                <a href="#work">
                <img src="pc1.jpg" alt="workの写真">
                <span>work</span>
                </a>
              </li>
              
              <!--  <li id="contact">-->
              <!--  <a href="#contact"><img src="contact.jpg" alt="contactの写真">-->
              <!--  <span>contact</span>-->
              <!--  </a>-->
              <!--</li>-->
              
            </ul>
    </div> 
        
        
    </header>
　　　　
       <div class="contants" id="about">
          <a href="about/about.html"></a>
     　<div class="inner">
     　    <h1>about</h1>
     　    <section>
     　     <!--<img class="photo" src="4486.jpg" alt="旅行の写真">-->
            <h1>畑本亮太</h1>
            <p>1996/05/13</p>
           
            <p>
                血液型　A型<br>
            　  趣味　旅行　映画鑑賞<br>
            　  群馬県在住
            </p>
      　　 
      　　 　<p>
                北海道倶知安町という小さな町出身です。<br>
                将来自分のスキルを活かして仕事がしたいと思い、<br>
                プログラミングを勉強中。
                夢は、フリーランス
           </p>
           </section>
       </div>
       </div>
       
      <div class="contants1">
     　<div class="inner1">
            <h1>work</h1>
        <div class="works">
          <ul>
              
            <li>
              <a href="#">
               <img class="photo" src="work.jpg" alt="仕事の写真" width=200px height=200>
              </a>
              <p>work1</p>
            </li>  
            
            <li>
              <a href="#">
               <img class="photo" src="work.jpg" alt="仕事の写真" width=200px height=200>
              </a>
              <p>work2</p>
            </li>  
            
            <li>
              <a href="#">
               <img class="photo" src="work.jpg" alt="仕事の写真" width=200px height=200>
              </a>
              <p>work3</p>
            </li>  
            
            <li>
              <a href="#">
               <img class="photo" src="work.jpg" alt="仕事の写真" width=200px height=200>
              </a>
              <p>work4</p>
            </li>  
          </ul>
          
        </div> 
       </div>
       </div> 
       <div class="contants2">
         <div class="info">
        <h1>contact</h1>
       <form name="form1">
        <ul>
            <li>
               <i class="fas fa-user">名前</i>
               <input class="search" name="name" type="text" placeholder="氏名入力">
            </li>
            
            <li>
               <i class="fas fa-envelope">メールアドレス</i>
               <input class="search" name="email" type="text" placeholder="info@email.com">
            </li>
            
            <li>
               <i class="fas fa-user">年齢</i>
               <input class="search" name="age" type="text" placeholder="年齢">
            </li>  
            
            <li>
              <i class="fas fa-edit">お問い合わせ内容</i>
              <textarea   placeholder="お問い合わせ内容を入力して下さい" name="message"></textarea>
         
            </li>  
            
            <li>
              <input type="submit" onclick="return check();" value="送信">
            </li>
        </ul>
       </from>
       </div>
       </div>
<footer>
    
    <div class="footer">
    　　<p> Ryota Hatamoto</p> 
    </div>
    
</footer> 
       
</body>
</html>