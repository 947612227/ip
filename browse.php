<?php
header("content-type:text/html;charset=utf-8");
// $Agent = $_SERVER['HTTP_USER_AGENT'];
// $Agent = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 MicroMessenger/7.0.10(0x17000a21) NetType/WIFI Language/zh_CN";

// echo $Agent."<br>";
//显示访问用户的浏览器信息
// echo '浏览器: ' . determinebrowser($Agent) . "<br>";
// //显示访问用户的操作系统平台
// echo '系统版本: ' . determineplatform($Agent). "<br>";
// //显示移动设备类型
// echo "设备类型：".getphonetype($Agent)."<br>";

//显示移动设备联网方式
// $tmps = getnettype($Agent);
// var_dump ($tmps);
function getnettype ($Agent)
{   //echo $Agent;
    $nettype = "";

    if (preg_match("/NetType\/WIFI/",$Agent)) {
        $nettype ="WIFI";
    }
    else if (preg_match("/NetType\/5/",$Agent)) {
        $nettype ="5G";
    }
    else if (preg_match("/NetType\/4/",$Agent)) {
        $nettype ="4G";
    }
    else if (preg_match("/NetType\/3/",$Agent)) {
        $nettype ="3G";
    }
    else if (preg_match("/NetType\/2/",$Agent)) {
        $nettype ="2G";
    }
    // else if (preg_match("/Android/",$Agent)) {
    //     $nettype ="WiFI?";
    // }
    else {
        $nettype = "未知网络";
    }
    return $nettype;

}


// function getphonetype($Agent)
// {
//     $phonetype = "";
//     if (preg_match("iPhone XS Max",$Agent) &&preg_match("Mobile",$Agent)){
//         $phonetype = "iPhone XS Max";
//       }
//     else if(preg_match("iPhone 11 Pro",$Agent) &&preg_match("Mobile",$Agent)){
//         $phonetype = "iPhone 11 Pro";
//     }
//     else if(preg_match("iPhone XS",$Agent) &&preg_match("Mobile",$Agent)){
//         $phonetype = "iPhone XS";
//     }
//     else if(preg_match("iPhone X",$Agent) &&preg_match("Mobile",$Agent)){
//         $phonetype = "iPhone X";
//     }
//     else if(preg_match("iPhone 8",$Agent) &&preg_match("Mobile",$Agent)){
//         $phonetype = "iPhone 8";
//     }
//     else if(preg_match("iPhone 7",$Agent) &&preg_match("Mobile",$Agent)){
//         $phonetype = "iPhone 7";
//     }
//     else if(preg_match("iPhone 6sPlus",$Agent)) {
//         $phonetype = "iPhone 6sPlus";
//     }
//     else if(preg_match("iPhone 6Plus",$Agent)) {
//         $phonetype = "iPhone 6Plus";
//     }
//     else if(preg_match("iPhone 6",$Agent)) {
//         $phonetype = "iPhone 6";
//     }
//     else if(preg_match("iPhone 7Plus",$Agent)) {
//         $phonetype = "iPhone 7Plus";
//     }
//     else if(preg_match("iPhone 7",$Agent)) {
//         $phonetype = "iPhone 7";
//     }
//     else if(preg_match("iPhone 8Plus",$Agent)) {
//         $phonetype = "iPhone 8Plus";
//     }
//     else if(preg_match("iPhone 8",$Agent)) {
//         $phonetype = "iPhone 8";
//     }
//     else{
//         $phonetype = "Other";
//     }
//     return $phonetype;
//     }

/*
//正值表达式比对解析$_SERVER['HTTP_USER_AGENT']中的字符串 获取访问用户的浏览器的信息
function determinebrowser ($Agent) {
          $browseragent="";   //浏览器
          $browserversion=""; //浏览器的版本
          if (preg_match("/MSIE ([0-9].[0-9]{1,2})/",$Agent,$version)) {
              $browserversion=$version[1];
              $browseragent="Internet Explorer";
          }
          else if (preg_match( "/Opera([0-9]{1,2}.[0-9]{1,2})/",$Agent,$version)) {
              $browserversion=$version[1];
              $browseragent="Opera";
          }
          else if (preg_match( '/Firefox([0-9.]{1,5})/',$Agent,$version)) {
              $browserversion=$version[1];
              $browseragent="Firefox";
          }
          else if (preg_match( '/Chrome/([0-9.]{1,2})/',$Agent,$version)) {
              $browserversion=$version[1];
              $browseragent="Chrome";
          }
          else if (preg_match( '/QQ([0-9.]{1,3})/',$Agent,$version)) {
              $browserversion=$version[1];
              $browseragent="QQ";
            }

          else if (preg_match( '/Safari([0-9.]{1,3})/',$Agent,$version)) {
              $browseragent="Safari";
              $browserversion="";
          }
          else {
              $browserversion="";
              $browseragent="other";
          }
          return $browseragent.$browserversion;
          }

// 同理获取访问用户的浏览器的信息
function determineplatform ($Agent) {
    $browserplatform=='';
    if (preg_matchi('win',$Agent) && strpos($Agent, '95')) {
    $browserplatform="Windows 95";
    }
    elseif (preg_matchi('win 9x',$Agent) && strpos($Agent, '4.90')) {
    $browserplatform="Windows ME";
    }
    elseif (preg_matchi('win',$Agent) && preg_match('98',$Agent)) {
    $browserplatform="Windows 98";
    }
    elseif (preg_matchi('win',$Agent) && preg_matchi('nt 5.0',$Agent)) {
    $browserplatform="Windows 2000";
    }
    elseif (preg_matchi('win',$Agent) && preg_matchi('nt 5.1',$Agent)) {
    $browserplatform="Windows XP";
    }
    elseif (preg_matchi('win',$Agent) && preg_matchi('nt 6.0',$Agent)) {
    $browserplatform="Windows Vista";
    }
    elseif (preg_matchi('win',$Agent) && preg_matchi('nt 6.1',$Agent)) {
    $browserplatform="Windows 7";
    }
    elseif (preg_matchi('win',$Agent) && preg_match('32',$Agent)) {
    $browserplatform="Windows 32";
    }
    elseif (preg_matchi('win',$Agent) && preg_matchi('nt',$Agent)) {
    $browserplatform="Windows NT";
    }elseif (preg_matchi('Mobile',$Agent) && preg_matchi("iphone",$Agent)) {
    $browserplatform="iphone";
    }elseif (preg_matchi('Mobile',$Agent) && preg_matchi("Android",$Agent)) {
    $browserplatform="Android";

    }elseif (preg_matchi('Mac OS',$Agent)) {
    $browserplatform="Mac OS";
    }
    elseif (preg_matchi('linux',$Agent)) {
    $browserplatform="Linux";
    }
    elseif (preg_matchi('unix',$Agent)) {
    $browserplatform="Unix";
    }
    elseif (preg_matchi('sun',$Agent) && preg_matchi('os',$Agent)) {
    $browserplatform="SunOS";
    }
    elseif (preg_matchi('ibm',$Agent) && preg_matchi('os',$Agent)) {
    $browserplatform="IBM OS/2";
    }
    elseif (preg_matchi('Mac',$Agent) && preg_matchi('PC',$Agent)) {
    $browserplatform="Macintosh";
    }
    elseif (preg_matchi('PowerPC',$Agent)) {
    $browserplatform="PowerPC";
    }
    elseif (preg_matchi('AIX',$Agent)) {
    $browserplatform="AIX";
    }
    elseif (preg_matchi('HPUX',$Agent)) {
    $browserplatform="HPUX";
    }
    elseif (preg_matchi('NetBSD',$Agent)) {
    $browserplatform="NetBSD";
    }
    elseif (preg_matchi('BSD',$Agent)) {
    $browserplatform="BSD";
    }
    elseif (preg_match('OSF1',$Agent)) {
    $browserplatform="OSF1";
    }
    elseif (preg_match('IRIX',$Agent)) {
    $browserplatform="IRIX";
    }
    elseif (preg_matchi('FreeBSD',$Agent)) {
    $browserplatform="FreeBSD";
    }
    if ($browserplatform=='') {$browserplatform = "other"; }
    return $browserplatform;
    }



    */
?>
