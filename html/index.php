<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
<title>會員登入面板</title>

	

    <style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

/* Page Content */
.content {padding:40px;}
    </style>
  </head>
  
  
  <body>
      
<div class="header">
  <h1>會員登入面板</h1>
</div>
    
    <span style="font-family:Microsoft JhengHei;color: #008B8B;">
    <form method="post" action="check01.php">
   <div class="content"> 
    <h3>
      請輸入帳號：<input type="text" name="username">   <br><br>
      請輸入密碼：<input type="password" name="passwd">   <br><br>
      <br>
 <input name="submit" type="submit" value="登入">
 
<input type="button" value="加入會員" onclick="location.href='go03.php'">
    </h3>  
    </div>
    </span>
    </form>
    
	</body>
</html>