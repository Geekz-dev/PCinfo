<?php
/**
 *  PCinfo
 *
 *  @author Gomasiyo
 *  Copyright (c) 2012 Geekz Web Development
*/

//受信側のURL
$ua = $_SERVER['HTTP_USER_AGENT'];    
$agent = browser($ua);
$vars = get_os_name($ua);  

//パラメーター
$params = array ( 
    'set'           =>  'share',
    'ip'            =>  $ip,
    'remote_addr'   =>  $remote_addr,
    'user'          =>  $user,
    'browser'       =>  $agent[0],
    'version'       =>  $agent[1],
    'os'            =>  $vars[0],
    'osver'         =>  $vars[1],
    'charset'       =>  $charset,
    'language'      =>  $language,
    'accept'        =>  $accept,
    'encoding'      =>  $encoding,
    'connection'    =>  $connection,
    'ref'           =>  $ref,
    'week'          =>  $week,
    'time'          =>  $time
);

//パラメーター連結
$arr = array();
foreach ($params as $key => $value) {
     $arr[] = $key.'='.$value;
}
//&で区切ってエンコーディング
$url = "http://".urlencode(RECEIVING.'?'.join('&', $arr));


?>
