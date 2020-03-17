<html>
<head>
<title>结果查询</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body { color:"#ffffff";
font-family: "宋体";
font-size: 12px;
margin-top : 4;
}
.t {
border: #000000; border-style: solid; border-width: 1px
}
td {
font-family: "Tahoma", "MS Shell Dlg"; font-size: 18px
}
textarea {border: 1 solid #000000}
</style>

</head>
<body bgcolor="#DCDCDC" text="#000000"></body>

<center>
<!-- <h2 style="color:red; font-size:20px">手机QQ可以获取手机型号和网络类型,手机微信可以获取网络类型,浏览器可以获取基本信息<br>手机型号会慢慢收集添加,出于隐私考虑，仅显示最近10条数据<br>网站硬件配置是虚拟主机，渣渣配置访问很慢</h2> -->
<h2 style="color:red; font-size:20px">单个IP网络类型和设备仅允许访问3次</h2>
<h2 style="color:red; font-size:20px">如果你对本项目感兴趣https://github.com/947612227/ip.git</h2>
<h2 style="color:red; font-size:20px">维护时间：2020年03月17日14:45:48</h2>

<!-- height:80px;width:60px; -->
<form name="option" action="clean.php" method="post" >
  <input type="submit" name="clean" value="清除" style="color:red;font-size:40px;"/>&nbsp;&nbsp;&nbsp;
  <input type="submit" name="reshow" value="恢复" style="color:green;font-size:40px;"/>
</form>


<table border="1" cellspacing="0" cellpadding="7" class="t">
    <tr align="center">
        <td><b>标记</b></td>
        <td><b>ip地址 </td>
        <td><b>实际地址</b></td>
        <td><b>浏览器</b></td>
        <td><b>操作系统</b></td>
        <td><b>网络类型</b></td>
        <td><b>设备型号</b></td>
        <td><b>访问时间</b></td>
        <!-- <td><b>[UserAgent]</b></td> -->
    </tr>

<?php
    header("content-type:text/html;charset=utf-8");
    include_once ("db_mysql.php");
    mysqli_query($con,'SET NAMES UTF8');
    $sql = "select * from ips where show_ip = 1 order by id desc limit 30;";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
?>
    <tr align="center">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['ip']; ?></td>
        <td><?php echo $row['addr']; ?></td>
        <td><?php echo $row['browse']; ?></td>
        <td><?php echo $row['sysversion']; ?></td>
        <td><?php echo $row['nettype']; ?></td>
        <td><?php echo $row['phonetype']; ?></td>
        <td><?php echo $row['addtime']; ?></td>
        <!-- <td><?php echo $row['ua']; ?></td> -->
   </tr>
<?php
   }
?>
</table>
</html>
