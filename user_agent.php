<?php
/**
 * User Agent Class
 *
 * Identifies the platform, browser, robot, or mobile devise of the browsing agent
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	User Agent
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/user_agent.html
 */
class CI_User_agent {
	var $platforms = array (
					"windows NT 10.0"	=> "Win10",
					"windows NT 6.2"	=> "Win8",
					"windows NT 6.1"	=> "Win7",
					"windows NT 6.0"	=> "Win Longhorn",
					"windows NT 5.2"	=> "Win2003",
					"windows NT 5.0"	=> "Win2000",
					"windows NT 5.1"	=> "WinXP",
					"windows NT 4.0"	=> "Windows NT 4.0",
					"winnt4.0"			=> "Windows NT 4.0",
					"winnt 4.0"			=> "Windows NT",
					"winnt"				=> "Windows NT",
					"windows 98"		=> "Win98",
					"win98"				=> "Win98",
					"windows 95"		=> "Win95",
					"win95"				=> "Win95",
					"windows"			=> "Windows",
					"iPhone OS 15"		=> "IOS_15",
					"iPhone OS 14"		=> "IOS_14",
					"iPhone OS 13"		=> "IOS_13",
					"iPhone OS 12"		=> "IOS_12",
					"iPhone OS 11"		=> "IOS_11",
					"iPhone OS 10"		=> "IOS_10",
					"iPhone OS 9"		=> "IOS_9",
					"iPhone OS 8"		=> "IOS_8",
					"iPhone OS 7"		=> "IOS_7",
					"iPhone OS"			=> "IOS",
					"iPad" 				=> "iPad",
					"Mac OS X"			=> "MacOS",
					"ppc mac"			=> "Power PC Mac",
					"freebsd"			=> "FreeBSD",
					"ppc"				=> "Macintosh",
					"Nokia"				=> "诺基亚",
					"Mi Note 3"			=> "Android",
					"Note 4X"			=> "Android",
					"XiaoMi"			=> "Android",
					"Android"			=> "Android",
					"linux"				=> "Linux",
					"Python/3.7"		=> "Python/3.7",
					"python-requests"	=> "Python",
					"debian"			=> "Debian",
					"sunos"				=> "Sun Solaris",
					"beos"				=> "BeOS",
					"apachebench"		=> "ApacheBench",
					"aix"				=> "AIX",
					"irix"				=> "Irix",
					"osf"				=> "DEC OSF",
					"hp-ux"				=> "HP-UX",
					"netbsd"			=> "NetBSD",
					"bsdi"				=> "BSDi",
					"openbsd"			=> "OpenBSD",
					"gnu"				=> "GNU/Linux",
					"unix"				=> "Unknown Unix OS",
                    "Java"              => "Java程序",
                    "Googlebot"         => "Google谷歌爬虫",
                    "YandexBot"         => "俄罗斯爬虫Yandex",
                    "AhrefsBot"			=> "法国爬虫",
                    "Researchscan"		=> "德国XX扫描",
				);


	// The order of this array should NOT be changed. Many browsers return
	// multiple browser types so we want to identify the sub-type first.
	var $browsers = array(
					"MQQBrowser"		=> "手机QQ浏览器",
					"QQBrowser"			=> "QQ浏览器",
					"QQ"                => "QQ内置",
					"wxwork"			=> "企业微信",
					"DingTalk"			=> "钉钉",
					"MicroMESSENGER"	=> "微信内置",
					"baiduboxapp"		=> "手机百度",
					"UCBrowser"			=> "UC浏览器",
					"HuaweiBrowser"     => "华为自带浏览器",
					"SogouMobileBrowser"=> "手机搜狗浏览器",
					"FxiOS"				=> "火狐浏览器",
					"OPiOS"				=> "欧朋浏览器",
					"Mb2345Browser"		=> "2345手机浏览器",
					"CriOS"				=> "IOS谷歌",
					"Firefox"			=> "Firefox",
					"Zhihu" 			=> "知乎客户端",
					"Chrome"			=> "Chrome",
					"Opera"				=> "Opera",
					"Safari"			=> "Safari",
					"MSIE"				=> "IE",
					"Internet Explorer"	=> "IE",
					"Flock"				=> "Flock",
					"Shiira"			=> "Shiira",
					"Chimera"			=> "Chimera",
					"Phoenix"			=> "Phoenix",
					"Firebird"			=> "Firebird",
					"Camino"			=> "Camino",
					"Netscape"			=> "Netscape",
					"OmniWeb"			=> "OmniWeb",
					"Safari"			=> "Safari",
					"Mozilla"			=> "Mozilla",
					"Konqueror"			=> "Konqueror",
					"icab"				=> "iCab",
					"Lynx"				=> "Lynx",
					"Links"				=> "Links",
					"hotjava"			=> "HotJava",
					"amaya"				=> "Amaya",
					"IBrowse"			=> "IBrowse",
                    "Java"              => "Java请求",
					"Googlebot"         => "Google爬虫",
					"curl" 				=> "curl请求",
					"wget"				=> "wget请求",
					"Python/3.7"		=> "Python/3.7",
					"Python/2."			=> "Python2.x",
					"python-requests"	=> "Python请求",
					"python"			=> "Python模拟请求",


				);

	var $mobiles = array(
					"HUAWEIVOG-AL10"	=> "华为P30 Pro",
					"HUAWEIVOG-AL00"	=> "华为P30",
					"HUAWEICLT-AL00"	=> "华为P20 Pro",
					"HUAWEIEML-AL00;"	=> "华为P20",
					"HUAWEIVKY-AL00"	=> "华为P10 Plus",
					"HUAWEIBLA-AL00"	=> "华为Mate 10 Pro",
					"HUAWEIALP-AL00"	=> "华为Mate 10",
					"HUAWEIMHA-AL00"	=> "华为Mate 9",
					"HUAWEIVIE-AL10"	=> "华为P9 Plus",
					"HUAWEISEA-AL10"	=> "华为nova 5 Pro",
					"HUAWEIMAR-AL00"	=> "华为nova 4e",
					"HUAWEIINE-AL00"	=> "华为Nova 3i",
					"HUAWEIBKL-AL20"	=> "华为荣耀V10",
					"HUAWEIDUK-AL20"	=> "华为荣耀V9",
					"HUAWEIHMA-AL00"	=> "华为Mate 9",
					"HUAWEIFRD-AL10"	=> "华为荣耀8",
					"HUAWEILDN-AL00"	=> "华为畅享8",
					"HRY-AL00Ta"		=> "荣耀20i",
					"HLK-AL00"			=> "荣耀9X",
					"OPPO A57 "			=> "OPPO A57",
					"PADM00"			=> "OPPO A3",
					"PBEM00"			=> "OPPO R17",
					"PACM00"			=> "OPPO R15",
					"PCDM10"			=> "OPPO Reno Z",
					"OPPO" 				=> "OPPO设备",
					"HUAWEIPAR-AL00"	=> "华为nova 3",
					"HUAWEIBAC-AL00"	=> "华为nova 2 Plus",
					"HUAWEIMT1-U06"		=> "华为MT1-U06",
					"HUAWEI"			=> "华为设备",
					"SHARK MBU-A0"		=> "黑鲨3 Pro",
					"SHARK KLE-A0"		=> "黑鲨3",
					"GM1910"			=> "一加 7 Pro",
					"ONEPLUS"			=> "一加手机",
					"RMX1971"			=> "OPPO realme X",
					"OPPO R11"			=> "OPPO R11",
					"PCKM80"			=> "OPPO设备",
					"Coolpad"			=> "酷派手机",
					"MI 10"				=> "MI 10",
					"MI 9"				=> "MI 9",
					"MI 8"				=> "MI 8",
					"MI 7"				=> "MI 7",
					"MI 6"				=> "MI 6",
					"MIX 3"				=> "MIX 3",
					"Mi Note 3"			=> "Mi Note 3",
					"MIX 2S"			=> "MIX 2S",
					"XiaoMi"			=> "小米设备",
					"Redmi Note 7 Pro"  => "红米 Note 7 Pro",
					"Redmi Note 4X"		=> "红米 Note 4X",
					"Redmi"				=> "红米手机",
					"vivo X9"			=> "vivo X9",
					"vivo X6S A"		=> "vivo X6S A",
					"V1831A"			=> "vivo S1",
					"V1838A"			=> "vivo X27",
					"V1829A"			=> "vivo X27",
					"V1809A"			=> "vivo X23",
					"vivo"				=> "vivo手机",
					"SM-G9650"			=> "三星 Galaxy S9 Plus",
					"SM-G955U"			=> "三星 Galaxy S8 Plus",
					"SM-A5000"			=> "三星 Galaxy A5",
					"SM-N9100"			=> "三星 Galaxy Note 4 Duo",
					"iPhone XS Max"		=> "iPhone XS  Max",
					"iPhone XS"			=> "iPhone XS",
					"iPhone XR"			=> "iPhone XR",
					"iPhone X"			=> "iPhone X",
					"iPhone 11 Pro Max" => "iPhone 11 Pro Max",
					"iPhone 11 Pro"		=> "iPhone 11 Pro",
					"iPhone 11"			=> "iPhone 11",
					"iPhone 8Plus"		=> "iPhone 8Plus",
					"iPhone 8"			=> "iPhone 8",
					"iPhone 7Plus"		=> "iPhone 7 Plus",
					"iphone 7"			=> "iPhone 7",
					"iPhone 6sPlus"		=> "iPhone 6s_Plus",
					"iPhone 6s"  		=> "iPhone 6s",
					"iPhone 6Plus"  	=> "iPhone 6_Plus",
					"iPhone 6"  		=> "iPhone 6",
					"iPhone SE"  		=> "iPhone SE",
					"iPhone 5S"  		=> "iPhone 5S",
					"iPhone 5C"  		=> "iPhone 5C",
					"iPhone 5"  		=> "iPhone 5",
					"iPhone 4S"  		=> "iPhone 4S",
					"iPhone 4"  		=> "iPhone 4",
					"iPhone 3G"  		=> "iPhone 3G",
					"iPhone 3GS"  		=> "iPhone 3GS",
					"iPhone 4"  		=> "iPhone 4",
					"iPhone 2G"  		=> "iPhone 2G",
					"UIWebView"			=> "IOS其他设备",
					"nokia"				=> "Nokia",
					"xiaomi" 			=> "小米",
					"iPhone"			=> "iPhone",
					"ipad"				=> "iPad",
					"ipod"				=> "iPod Touch",
					"sony"				=> "Sony Ericsson",
					"ericsson"			=> "Sony Ericsson",
					"samsung"			=> "Samsung",
					"ipaq"				=> "HP iPaq",
					"mot-"				=> "Motorola",
					"Pixel 2 XL"		=> "谷歌 Pixel 2 XL",
					"motorola"			=> "摩托罗拉",
					"Nexus"				=> "安卓Pad",
					"Android"			=> "安卓手机",
				);

	// var $nettypes = array (
	// 				"NetType/WIFI"		=> "WIFI",
	// 				"NetType/5"			=> "5G热点",
	// 				"NetType/4"			=> "4G热点",
	// 				"NetType/3"			=> "3G热点",
	// 				"NetType/2"			=> "2G热点"

	// );

	// There are hundreds of bots but these are the most common.
	var $robots = array(
					"Googlebot"			=> "Googlebot",
					"msnbot"			=> "MSNBot",
					"slurp"				=> "Inktomi Slurp",
					"yahoo"				=> "Yahoo",
					"askjeeves"			=> "AskJeeves",
					"fastcrawler"		=> "FastCrawler",
					"infoseek"			=> "InfoSeek Robot 1.0",
					"lycos"				=> "Lycos"
				);

	var $agent		= NULL;
	var $is_browser	= FALSE;
	var $is_robot	= FALSE;
	var $is_mobile	= FALSE;
	// var $is_nettype = FALSE;


	var $languages	= array();
	var $charsets	= array();

	var $platform	= "";
	var $browser	= "";
	var $version	= "";
	var $mobile		= "";
	var $robot		= "";
	// var $nettype    = "";
	/**
	 * Constructor
	 *
	 * Sets the User Agent and runs the compilation routine
	 *
	 * @access	public
	 * @return	void
	 */
	public function __construct($agent = "")
	{
		if ($agent != "")
		{
			$this->agent = $agent;
		}
		else if (isset($_SERVER["HTTP_USER_AGENT"]))
		{
			$this->agent = trim($_SERVER["HTTP_USER_AGENT"]);
		}

		if ( ! is_null($this->agent))
		{
			$this->_compile_data();
		}

		//log_message("debug", "User Agent Class Initialized");
	}

	// --------------------------------------------------------------------

	/**
	 * Compile the User Agent Data
	 *
	 * @access	private
	 * @return	bool
	 */
	private function _compile_data()
	{
		$this->_set_platform();

		foreach (array("_set_robot", "_set_browser", "_set_mobile") as $function)
		{
			if ($this->$function() === TRUE)
			{
				// print_r("测试");
				break;
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Set the Platform
	 *
	 * @access	private
	 * @return	mixed
	 */
	private function _set_platform()
	{
		if (is_array($this->platforms) AND count($this->platforms) > 0)
		{
			foreach ($this->platforms as $key => $val)
			{
				if (preg_match("|".preg_quote($key)."|i", $this->agent))
				{
					$this->platform = $val;
					return TRUE;
				}
			}
		}
		$this->platform = "Other";
	}

	// --------------------------------------------------------------------

	/**
	 * Set the Browser
	 *
	 * @access	private
	 * @return	bool
	 */
	private function _set_browser()
	{
		if (is_array($this->browsers) AND count($this->browsers) > 0)
		{
			foreach ($this->browsers as $key => $val)
			{
				if (preg_match("|".preg_quote($key).".*?([0-9\.]+)|i", $this->agent, $match))
				{
					$this->is_browser = TRUE;
					$this->version = $match[1];
					$this->browser = $val;
					$this->_set_mobile();
					return TRUE;
				}
			}
		}
		$this->browser = "其他浏览器";
		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Set the Mobile Device
	 *
	 * @access	private
	 * @return	bool
	 */
	private function _set_mobile()
	{
		if (is_array($this->mobiles) AND count($this->mobiles) > 0)
		{
			foreach ($this->mobiles as $key => $val)
			{
				// if (FALSE !== (strpos(strtolower($this->agent), $key)))
				if (FALSE !== (strpos($this->agent, $key)))
				{
					$this->is_mobile = TRUE;
					$this->mobile = $val;
					// print_r($val);
					return TRUE;
				}
			}
		}
		$this->mobile = "PC";
		return FALSE;
	}

	// --------------------------------------------------------------------


	/**
	 * Set the Robot
	 *
	 * @access	private
	 * @return	bool
	 */
	private function _set_robot()
	{
		if (is_array($this->robots) AND count($this->robots) > 0)
		{
			foreach ($this->robots as $key => $val)
			{
				if (preg_match("|".preg_quote($key)."|i", $this->agent))
				{
					$this->is_robot = TRUE;
					$this->robot = $val;
					return TRUE;
				}
			}
		}
		$this->robot = "Other";
		return FALSE;
	}

	// --------------------------------------------------------------------



	/**
	 * 新增方法
	 */
	// private function _set_nettype()
	// {
	// 	if (is_array($this->nettypes) > 0)//AND count($this->nettypes) > 0)
	// 	{
	// 		foreach ($this->nettypes as $key => $val)
	// 		{
	// 			if (FALSE !== (strpos(strtolower($this->agent), $key)))
	// 			{
	// 				$this->is_nettype = TRUE;
	// 				$this->nettype = $val;
	// 				echo $val;
	// 				return TRUE;
	// 			}
	// 		}
	// 	}
	// 	$this->nettype = "Unknown net";
	// 	// return FALSE;
	// }

	/**
	 * Set the accepted languages
	 *
	 * @access	private
	 * @return	void
	 */
	private function _set_languages()
	{
		if ((count($this->languages) == 0) AND isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) AND $_SERVER["HTTP_ACCEPT_LANGUAGE"] != "")
		{
			$languages = preg_replace("/(;q=[0-9\.]+)/i", "", strtolower(trim($_SERVER["HTTP_ACCEPT_LANGUAGE"])));

			$this->languages = explode(",", $languages);
		}

		if (count($this->languages) == 0)
		{
			$this->languages = array("Undefined");
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Set the accepted character sets
	 *
	 * @access	private
	 * @return	void
	 */
	private function _set_charsets()
	{
		if ((count($this->charsets) == 0) AND isset($_SERVER["HTTP_ACCEPT_CHARSET"]) AND $_SERVER["HTTP_ACCEPT_CHARSET"] != "")
		{
			$charsets = preg_replace("/(;q=.+)/i", "", strtolower(trim($_SERVER["HTTP_ACCEPT_CHARSET"])));

			$this->charsets = explode(",", $charsets);
		}

		if (count($this->charsets) == 0)
		{
			$this->charsets = array("Undefined");
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Is Browser
	 *
	 * @access	public
	 * @return	bool
	 */
	public function is_browser($key = NULL)
	{
		if ( ! $this->is_browser)
		{
			return FALSE;
		}

		// No need to be specific, it"s a browser
		if ($key === NULL)
		{
			return TRUE;
		}

		// Check for a specific browser
		return array_key_exists($key, $this->browsers) AND $this->browser === $this->browsers[$key];
	}

	// --------------------------------------------------------------------

	/**
	 * Is Robot
	 *
	 * @access	public
	 * @return	bool
	 */
	public function is_robot($key = NULL)
	{
		if ( ! $this->is_robot)
		{
			return FALSE;
		}

		// No need to be specific, it"s a robot
		if ($key === NULL)
		{
			return TRUE;
		}

		// Check for a specific robot
		return array_key_exists($key, $this->robots) AND $this->robot === $this->robots[$key];
	}

	// --------------------------------------------------------------------

	/**
	 * Is Mobile
	 *
	 * @access	public
	 * @return	bool
	 */
	public function is_mobile($key = NULL)
	{
		if ( ! $this->is_mobile)
		{
			return FALSE;
		}

		// No need to be specific, it"s a mobile
		if ($key === NULL)
		{
			return TRUE;
		}

		// Check for a specific robot
		return array_key_exists($key, $this->mobiles) AND $this->mobile === $this->mobiles[$key];
	}

	// --------------------------------------------------------------------

	/**
	 * 新增方法
	 */
	// public function is_nettype($key = NULL)
	// {
	// 	if ( ! $this->is_nettype)
	// 	{
	// 		return FALSE;
	// 	}


	// 	if ($key === NULL)
	// 	{
	// 		return TRUE;
	// 	}

	// 	// Check for a specific robot
	// 	return array_key_exists($key, $this->nettypes) AND $this->nettype === $this->nettypes[$key];
	// }

	/**
	 * Is this a referral from another site?
	 *
	 * @access	public
	 * @return	bool
	 */
	public function is_referral()
	{
		if ( ! isset($_SERVER["HTTP_REFERER"]) OR $_SERVER["HTTP_REFERER"] == "")
		{
			return FALSE;
		}
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Agent String
	 *
	 * @access	public
	 * @return	string
	 */
	public function agent_string()
	{
		return $this->agent;
	}

	// --------------------------------------------------------------------

	/**
	 * Get Platform
	 *
	 * @access	public
	 * @return	string
	 */
	public function platform()
	{
		return $this->platform;
	}

	// --------------------------------------------------------------------

	/**
	 * Get Browser Name
	 *
	 * @access	public
	 * @return	string
	 */
	public function browser()
	{
		return $this->browser;
	}

	// --------------------------------------------------------------------

	/**
	 * Get the Browser Version
	 *
	 * @access	public
	 * @return	string
	 */
	public function version()
	{
		return $this->version;
	}

	// --------------------------------------------------------------------

	/**
	 * Get The Robot Name
	 *
	 * @access	public
	 * @return	string
	 */
	public function robot()
	{
		return $this->robot;
	}
	// --------------------------------------------------------------------

	/**
	 * Get the Mobile Device
	 *
	 * @access	public
	 * @return	string
	 */
	public function mobile()
	{
		return $this->mobile;
	}

	// --------------------------------------------------------------------
	/**
	 * 新增方法
	 */
	// public function nettype()
	// {
	// 	return $this->nettype;
	// }

	// --------------------------------------------------------------------

	/**
	 * Get the referrer
	 *
	 * @access	public
	 * @return	bool
	 */
	public function referrer()
	{
		return ( ! isset($_SERVER["HTTP_REFERER"]) OR $_SERVER["HTTP_REFERER"] == "") ? "" : trim($_SERVER["HTTP_REFERER"]);
	}

	// --------------------------------------------------------------------

	/**
	 * Get the accepted languages
	 *
	 * @access	public
	 * @return	array
	 */
	public function languages()
	{
		if (count($this->languages) == 0)
		{
			$this->_set_languages();
		}

		return $this->languages;
	}

	// --------------------------------------------------------------------

	/**
	 * Get the accepted Character Sets
	 *
	 * @access	public
	 * @return	array
	 */
	public function charsets()
	{
		if (count($this->charsets) == 0)
		{
			$this->_set_charsets();
		}

		return $this->charsets;
	}

	// --------------------------------------------------------------------

	/**
	 * Test for a particular language
	 *
	 * @access	public
	 * @return	bool
	 */
	public function accept_lang($lang = "en")
	{
		return (in_array(strtolower($lang), $this->languages(), TRUE));
	}

	// --------------------------------------------------------------------

	/**
	 * Test for a particular character set
	 *
	 * @access	public
	 * @return	bool
	 */
	public function accept_charset($charset = "utf-8")
	{
		return (in_array(strtolower($charset), $this->charsets(), TRUE));
	}

}


/* End of file User_agent.php */
/* Location: ./system/libraries/User_agent.php */
