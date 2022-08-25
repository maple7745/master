<?php
$dbhost = 'localhost:3306';  // mysql伺服器主機地址
$dbuser = 'root';            // mysql使用者名稱
$dbpass = 'maple0911407181';          // mysql使用者名稱密碼
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('連線錯誤: ' . mysqli_error($conn));
}
echo '連線成功<br />';
$sql = 'CREATE DATABASE ITREAD01';
$retval = mysqli_query($conn,$sql );
if(! $retval )
{
    die('新增資料庫失敗: ' . mysqli_error($conn));
}
echo "資料庫 ITREAD01 新增成功\n";
mysqli_close($conn);
?>