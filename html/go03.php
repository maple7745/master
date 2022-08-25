<!DOCTYPE html>
  <html>
  <head>

  <meta charset="UTF-8">
    <title>新增會員資料</title>
    
   
    
    </head>	
    
    <body background="business.jpg"
    style=
      " background-repeat:no-repeat;
  background-size:100% 100%;
  background-attachment: fixed;"
    text="black" >
    
      <span style="font-family:Microsoft JhengHei;color: #008B8B;">
      <div style="border:5px #F0FFFF solid;border-radius:8px;
      width:380px;height:280px;
      text-align:center;
      font-size:12px;
      display:inline-block;
      background-color:#FFFFFF;
      box-shadow:0px 0px 7px blue;
      position: absolute;
      top: 20%;
      left: 40%;">
      
      <?php setcookie("info","");   ?>
      <h1>加入會員 </h1><br>
      <h3>
      <form method="post" action="g03new.php">
      請輸入帳號：<input type="text" name="username">   <br><br>
      請輸入密碼：<input type="password" name="passwd">   <br><br>
      <br>
       <input name="submit" type="submit" value="加入會員">
      
      </h3>  
      </form>
      </span>
      </div>
      </body>
      </html>