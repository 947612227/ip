<?php
// sleep(1);
header("location: ./res.php");

if ($_POST['clean'] == "清除") {
    clean();
}
if($_POST['reshow'] == "恢复") {
    reshow();
}

function clean()
{
    // echo "执行清除";
    include "db_mysql.php" ;
    mysqli_query($con,'SET NAMES UTF8');
    $sql = "update ips set show_ip = 0;";
    mysqli_query($con,$sql);
    mysqli_close($con);
}

function reshow()
{
    // echo "执行恢复";
    include "db_mysql.php" ;
    mysqli_query($con,'SET NAMES UTF8');
    $sql = "update ips set show_ip = 1;";
    mysqli_query($con,$sql);
    mysqli_close($con);
}
