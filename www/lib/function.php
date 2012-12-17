<?php
/**
 *  PCinfo
 *
 *  @author Gomasiyo
 *  @author R.SkuLL
 *  Copyright (c) 2012 Geekz Web Development
*/
date_default_timezone_set('Asia/Tokyo');
setlocale(LC_ALL, 'ja_JP.UTF-8');

//サニタイズ
function e($str, $charset = 'UTF-8') {
    return htmlspecialchars($str, ENT_QUOTES, $charset);
}

//ここまで

/*ブラウザ検知*/
function browser ($ua) { 

    $browser = array (
        '/(Chrome)\/([0-9\.]+)/' => 'Google Chrome',
        '/(Opera)[\/\s]([0-9\.]+)/' => 'Opera',
        '/(Lunascape)\s([0-9\.]+)/' => 'Lunascape',
        '/(MSIE)\s([0-9\.]+)/' => 'Internet Explorer',
        '/(Firefox)\/([0-9\.]+)/' => 'Firefox',
        '/(Version)\/([0-9\.]+)/' => 'Safari',
        '/(Safari)/' => 'Safari',
        '/(Netscape.?)\/([0-9\.]+)/' => 'Netscape',
        '/(Mozilla)\/([2-4]\.[0-9]+)/' => 'Netscape',
        '/(Mozilla)\/([0-9\.]+)/' => 'Mozilla'
    
    );
    
    foreach ($browser as $key => $value) {
        if (preg_match($key, $ua, $split)) {
            $split[1] == 'Mozilla'&&$value == 'Netscape' ? $split[2] = '4以下' : '';
            $split[1] == 'Safari' ? $split[2] = '２以下' : '';
            return array($value, $split[2]);
            break;
        }
    }
    
    return '取得出来ませんでした。';
    
}
//ここまで

//OS検知
function get_os_name($ua){
    
    $os_list = array(
    
        '/Windows Phone ([0-9\.]+)/' => 'Windows Phone',
        '/Windows Phone OS ([0-9\.]+)/' => 'Windows Phone',
        '/Windows ?NT 6\.2/' => 'Windows 8',
        '/Windows ?NT 6\.1/' => 'Windows 7',
        '/Windows ?NT 6\.0/' => 'Windows Vista',
        '/Windows ?NT 5\.2/' => 'Windows Server 2003',
        '/Windows ?(NT 5\.1|XP)/' => 'Windows XP',
        '/Windows? (9x 4\.90|ME)/' => 'Windows ME',
        '/Windows ?(NT 5\.0|2000)/' => 'Windows 2000',
        '/Windows ?98/' => 'Windows 98',
        '/Windows ?NT( 4\.0)?/' => 'Windows NT',
        '/Windows ?95/' => 'Windows 95',
        '/OS ([0-9_]+)/' => 'iOS',
        '/Mac OS X ([0-9_]+)/' => 'Mac OS X',
        '/PPC/' => 'Mac PowerPC',
        '/Android ([0-9\.]+)/' => 'Android',
        '/Linux/' => 'Linux',
        '/(Free|Net|Open)BSD/' => 'BSD',
        '/SunOS/' => 'Solaris',
    );
    
    foreach($os_list as $key =>$value) {
        if (preg_match($key, $ua, $ver)) {
            $var = str_replace("_", ".", $ver[1]);
            return array($value, $var);
            break;
        }
    }
    
    if(!isset($result)){
        $result="N/A";
    }
    
    return '取得出来ませんでした。';

}
$ua = $_SERVER['HTTP_USER_AGENT'];
//ここまで

//時間取得整形
$week = strftime('%Y年%m月%d日%A');
$time = date("G時i分s秒");
//ここまで

//リファラ取得
if(isset($_SERVER['HTTP_REFERER'])){
    $ref = $_SERVER['HTTP_REFERER'];
}else{
    $ref="該当なし";
}
//ここまで

//IPアドレス取得
$ip = $_SERVER['REMOTE_ADDR'];
if(empty($ip)){
    $ip="該当なし";
}
//ここまで

//ホスト情報
$remote_addr = gethostbyaddr($_SERVER["REMOTE_ADDR"]); 
if(empty($remote_addr)) {
    $remote_addr = "該当なし";
}
//ここまで

//ユーザーエージェント
$user = $_SERVER['HTTP_USER_AGENT'];
if(empty($user)) {
    $user = "該当なし";
}
//ここまで

//エンコーディング
if(isset($_SERVER['HTTP_ACCEPT_CHARSET'])){
    $charset = $_SERVER['HTTP_ACCEPT_CHARSET'];
}else{
    $charset = "該当なし";
}
//ここまで

//言語
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
if(empty($language)) {
    $language = "該当なし";
}
//ここまで

//わからんけACCEPT
$accept = $_SERVER['HTTP_ACCEPT'];
if(empty($accept)) {
    $accept = "該当なし";
}
//ここまで

//わからんけENCODING
$encoding =  $_SERVER['HTTP_ACCEPT_ENCODING'];
if(empty($encoding)) {
    $encoding = "該当なし";
}
//ここまで

//わからんけCONNECTION
$connection = $_SERVER['HTTP_CONNECTION'];
if(empty($connection)) {
    $connection = "該当なし";
}

$about_xml = "./about/about.xml";
$set_about_xml = simplexml_load_file($about_xml);

function xmlarr($xmlobj) {
   $arr = array();
   if (is_object($xmlobj)) {
       $xmlobj = get_object_vars($xmlobj);
    } else {
       $xmlobj = $xmlobj;
    }

    foreach ($xmlobj as $key => $val) {
        if (is_object($xmlobj[$key])) {
            $arr[$key] = xmlarr($val);
        } else if (is_array($val)) {
            foreach($val as $k => $v) {
                if (is_object($v) || is_array($v)) {
                   $arr[$key][$k] = xmlarr($v);
                } else {
                   $arr[$key][$k] = $v;
                }
            }
        } else {
            $arr[$key] = $val;
        }

    }
    return $arr;
}

function about ($set_about_xml) {
   echo "<ul>\n";
   foreach ($set_about_xml->link as $val) {
       echo "<li><a href=\"".$val->url."\">".$val->title."</a></li>\n";
   }
   echo "</ul>\n";
}
