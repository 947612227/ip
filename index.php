<html>

<title>
|初音未来の|苟利国家生死以，岂因祸福避趋之|
</title>

<?php
include_once ("db_mysql.php");
// include_once ("browse.php");
header("content-type:text/html;charset=utf-8");
include('user_agent.php');
include('browse.php');
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$Agent = $_SERVER['HTTP_USER_AGENT'];
$getnet = getnettype($Agent);
$ua = new CI_User_agent($user_agent);


// echo $ua->robot() . '<br>';

$addtime = date('Y-m-d H:i:s',time());
// var_dump($data1);
$ipa = getip();
// $ipaddr = realmac($ipa);
$ipaddr = ip126($ipa);
    // echo $ipa."->".$ipaddr."\n";
function getip()
    {
        $onlineip='';
        if(getenv('HTTP_CLIENT_IP')&&strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')){
            $onlineip=getenv('HTTP_CLIENT_IP');
        } elseif(getenv('HTTP_X_FORWARDED_FOR')&&strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown')){
            $onlineip=getenv('HTTP_X_FORWARDED_FOR');
        } elseif(getenv('REMOTE_ADDR')&&strcasecmp(getenv('REMOTE_ADDR'),'unknown')){
            $onlineip=getenv('REMOTE_ADDR');
        } elseif(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],'unknown')){
            $onlineip=$_SERVER['REMOTE_ADDR'];
        }
        return $onlineip;
 }
 function realmac($ipaddr)
    {   //接口不稳定
        $url = "http://ip.ws.126.net/ipquery?ip=112.53.84.201";
        $ip = @file_get_contents(url . "112.53.84.201");//.$ipaddr;
        // $ip = curl_setopt($url, CURLOPT_ENCODING, "gzip");
        $ip = @file_get_contents("http://ip.taobao.com/service/getIpInfo.php?ip=".$ipaddr);
        // var_dump($ip );
        $ips = json_decode($ip,true);
        // var_dump($ips);
        $data = $ips['data'];
        // var_dump($data);
        $ipmac = $data['country'].$data['region'].$data['city'].$data['isp'].$data['country_id'];
        return $ipmac;
    }

 function ip126($ipaddr){
    $ch = curl_init();
    $url = 'https://whois.pconline.com.cn/ipJson.jsp?ip='.$ipaddr;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //请求为https
     curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
     $location = curl_exec($ch);
     curl_close($ch);
     //转码
     $location = mb_convert_encoding($location, 'utf-8','GB2312');
     //var_dump($location);
     //截取{}中的字符串
     $location = substr($location, strlen('({')+strpos($location, '({'),(strlen($location) - strpos($location, '})'))*(-1));
    //将截取的字符串$location中的‘，’替换成‘&’   将字符串中的‘：‘替换成‘=’
     $location = str_replace('"',"",str_replace(":","=",str_replace(",","&",$location)));
     //php内置函数，将处理成类似于url参数的格式的字符串  转换成数组
     parse_str($location,$ip_location);
     return $ip_location['addr'];

 }



$bro = $ua->browser() . '[' . $ua->version() . ']';
$sys = $ua->platform();
// $sys = getphonetype($Agent);
$getphone = $ua->mobile();

// if ($getphone = "PC"){
//     $getnet = "本地连接";
// }


// $ipa = "10.200.16.163";
//如果库里面已经存在相同的IP和设备型号就不插入了
$query = "select * from ips where ip="."'".$ipa."' ". "and phonetype="."'".$getphone."' "."and nettype="."'".$getnet."'; ";
$res = mysqli_query($con,$query);

// print_r($query);
if(!$res)
    {
    echo mysqli_error($con);
    }
else
    {
        if (mysqli_num_rows($res)>2){
            // echo 123;

            }
        else{
            // var_dump(mysqli_num_rows($res));
            $sql = "INSERT INTO ips (uid,ip,addr,browse,sysversion,nettype,phonetype,addtime,ua) VALUES ('1','$ipa','$ipaddr','$bro','$sys','$getnet','$getphone','$addtime','$Agent');";
            mysqli_query($con,'SET NAMES UTF8');
            if(!mysqli_query($con,$sql))
                {
                    echo mysqli_error($con);
                }
                else
                {
                // print_r(mysqli_num_rows($res));
                }
        }
    }






?>
<head>
<link rel="shortcut icon" href=" ./image/favicon.ico" />
<link rel="stylesheet" type="text/css" href="./css/tpzdsf.css">

<body>
<div class="scale">
<img src="./image/beijing.jpg">
</div>
</body>

</head>
</html>


