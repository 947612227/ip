<?php
ini_set("date.timezone","Asia/Shanghai");
// mysqli_query('SET NAMES UTF8');
header("content-type:text/html;charset=utf-8");
define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'my_db');
define ('DB_USER', 'root');
define ('DB_PASS', '123456');
define ('DB_CHARSET', 'UTF-8');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
// echo $con;
if(!$con)
    {
    var_dump (mysqli_error($con));
    }
else
    {
     mysqli_select_db($con,DB_NAME);
    //  echo "欢迎使用MySql<br>";
    }
?>
