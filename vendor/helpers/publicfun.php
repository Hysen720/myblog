<?php
/**
 * 共用类
 * @uses 	public
 * @package
 * @version 1.0
 * @copyright  Copyright (c) 2014-2015 shopEx
 * @author  July <zoooozz@163.com>
 * @license ShopEx
 */
namespace vendor\helpers;
class publicfun{
	/**
     * 获取当前ip
     *
     * @param 无需传参
     * @return 经过处理后返回用户当前的ip
     * @example
     * publicfun::get_ip();
    */
	public static function get_ip(){
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
			$ip = getenv("HTTP_CLIENT_IP");
		else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
			$ip = getenv("HTTP_X_FORWARDED_FOR");
			$ip = explode(',', $ip);
			$ip = $ip[0];
			$ip = trim($ip);
		} else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
			$ip = getenv("REMOTE_ADDR");
		else if (isset($_SERVER ['REMOTE_ADDR']) && $_SERVER ['REMOTE_ADDR'] && strcasecmp($_SERVER ['REMOTE_ADDR'], "unknown"))
			$ip = $_SERVER ['REMOTE_ADDR'];
		else
			$ip = "unknown";
		return trim($ip);
	}
	 /**
     * clur请求 类型：http post
     *
     * @param string $url   需要请求的地址
     * @param string $data  需要发生的数据包
     * @return 经过处理后返回json数据
     * @example
     * publicfun::curlQuery();
    */
	public static function curlQuery($url,$data){
        $ch = curl_init();     
        $timeout = 300;      
        curl_setopt($ch, CURLOPT_URL, $url);    
        curl_setopt($ch, CURLOPT_REFERER, $url);      
        curl_setopt($ch, CURLOPT_POST, true);     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);     
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);     
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);     
        $handles = curl_exec($ch);     
        curl_close($ch);     
        return $handles; 
	}
	 /**
     * clur请求 类型：https get
     *
     * @param string $url  需要请求的地址
     * @return 经过处理后返回json数据
     * @example
     * publicfun::curlGet();
    */
	public static function curlGet($url){
        $ch = curl_init();     
        $timeout = 300;      
        curl_setopt($ch, CURLOPT_URL, $url);              
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);     
        curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//证书  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);		
        $handles = curl_exec($ch);     
        curl_close($ch);     
        return $handles; 
	}
	 /**
     * clur请求 类型：https post
     *
     * @param string $url  需要请求的地址
     * @param string $data post数据，可以为空
     * @return 经过处理后返回json数据
     * @example
     * publicfun::https_request();
    */
	public static function https_request($url,$data=null){
        $curl=curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);   
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);    
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        if(!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);      
        }
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output=curl_exec($curl);
            curl_close($curl);
            return $output;
    }
    /**
     * 获取13位数字的毫秒时间
     *
     * @param string $string 原文或者密文
     * @return 返回时间
     * @example
     * public::getMicroTime();
    */
    public static function getMicroTime(){
		$ts = microtime(true)*1000;
		$ts = explode(".", $ts);
		return $ts[0];
	}
	/**
     * 字符串加密以及解密函数
     *
     * @param string $string 原文或者密文
     * @param string $key 密钥
     * @param string $operation 操作(ENCODE | DECODE), 默认为 DECODE
     * @param int $expiry 密文有效期, 加密时候有效， 单位 秒，0 为永久有效
     * @return string 处理后的 原文或者 经过 base64_encode 处理后的密文
     *
     * @example
     *
     *     $a = authcode('abc',  'serverId' , 'ENCODE');
     *     $b = authcode($a,  'serverId' , 'DECODE'); // $b(abc)
     *
     *     $a = authcode('abc', 'serverId' , 'ENCODE' , 3600);
     *     $b = authcode('abc', 'serverId' , 'DECODE'); // 在一个小时内，$b(abc)，否则 $b 为空
    */
	public static function authcode($string, $key, $operation = 'DECODE', $expiry = 0){
            $ckey_length = 13; 
            if (empty($key) || empty($string)) {
                return "";
            }
            $keya = md5(substr($key, 0, 16));
            $keyb = md5(substr($key, 16, 16));
            $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) : substr(md5(microtime()), -$ckey_length)) : '';
            $cryptkey = $keya . md5($keya . $keyc);
            $key_length = strlen($cryptkey);
            $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;
            $string_length = strlen($string);
            $result = '';
            $box = range(0, 255);
            $rndkey = array();
            for ($i = 0; $i <= 255; $i++) {
                $rndkey[$i] = ord($cryptkey[$i % $key_length]);
            }
            for ($j = $i = 0; $i < 256; $i++) {
                $j = ($j + $box[$i] + $rndkey[$i]) % 256;
                $tmp = $box[$i];
                $box[$i] = $box[$j];
                $box[$j] = $tmp;
            }
            for ($a = $j = $i = 0; $i < $string_length; $i++) {
                $a = ($a + 1) % 256;
                $j = ($j + $box[$a]) % 256;
                $tmp = $box[$a];
                $box[$a] = $box[$j];
                $box[$j] = $tmp;
                $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
            }
            if ($operation == 'DECODE') {
                if ((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)) {
                    $result = substr($result, 26);
                    $jsRes = json_decode($result, true);
                    if (!empty($jsRes)) {
                        return $jsRes;
                    } else {
                        return $result;
                    }
                } else {
                    return '';
                }
            } else {
                return $keyc . str_replace('=', '', base64_encode($result));
        }
    }

}	

