<?php
    
    
    if (isset($_POST["username"]) AND isset($_POST["passwd"])){
    
    
    // 1. 連結資料庫
    
    //require("connectLogin.php");
    $link = mysqli_connect("localhost", "root", "MAPLE0911407181", "tb_password") or die("無法建立資料連接");

    $username = $_POST["username"];
    $passwd = $_POST["passwd"];
    echo "帳號：".$username."<br>";
    echo "密碼：".$passwd."<br>";
 
    // 3. 建立查詢語句
      //$str = $_POST["item"]." ".$_POST["rownum"].";";   
      $str = 'SELECT * FROM tb_account WHERE username="'.$username.'";';
  
      echo $str."<br>";
 
      
    // 4. 使用函數查詢
      $result = mysqli_query($link, $str);
      echo "比對正確個數：".mysqli_num_rows($result)."<br>";

      // 檢查
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_row($result);
        echo "資料庫密碼".$row[2]."<br>";
        if ($row[2] == $passwd) {
          echo "帳密正確";
          header("location:index.html");
        } else {
          echo "帳號錯誤";
          header("location:index.php");
        
        }
      } else {
        echo "無此帳號";
        header("location:index.php");
      }
      
      
     // 6. 釋放記憶體
      mysqli_free_result($result);
 
 
    
    // 7. 關閉資料庫
      mysqli_close($link);
    
    
    } //if (isset)
?> 