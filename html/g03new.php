<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>建立資料連接</title>
    <meta http-equiv="refresh" content="5 ;url=index.html" />
  </head>
  <body>
    <?php
    // 1. 連結資料庫

      //require("connectLogin.php");
      $link = mysqli_connect("localhost", "root", "MAPLE0911407181", "tb_password") or die("無法建立資料連接");
      $username = $_POST["username"];
      $passwd = $_POST["passwd"];
    // 3. 建立查詢語句

    if(! $link )
{
  die('連線錯誤: ' . mysqli_error($conn));
}
echo '連線成功<br />';
    
    
    // // 建立資料表
    //   $str = "CREATE TABLE tb_account(";
    //   $str = $str."id int NOT NULL AUTO_INCREMENT PRIMARY KEY,";
    //   $str = $str."username VARCHAR(10),";
    //   $str = $str."passwd VARCHAR(20));";
    
    //   echo $str."<br>";
      
    //   $result = mysqli_query($link, $str);
      
      echo "資料表建立成功"."<br>";
    // 新增資料
      $str = "INSERT INTO `tb_account` (username, passwd) VALUES ";
      $user1 = "('$username','$passwd');";
      
      $str = $str.$user1;
      
      echo $str."<br>";

    // 4. 使用函數查詢
      $result = mysqli_query($link, $str);
      echo "帳密建立完畢"."<br>";;
         
    // // 6. 釋放記憶體
    //   mysqli_free_result($result);
    
 
    
    // 7. 關閉資料庫
      mysqli_close($link);
      
      
    ?> 
  </body>
</html>