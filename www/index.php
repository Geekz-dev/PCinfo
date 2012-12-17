<?php
/**
 *  PCinfo
 *
 *  @author Gomasiyo
 *  Copyright (c) 2012 Geekz Web Development
*/
require_once('./lib/define.php');
require_once('./lib/function.php');
require_once('./lib/main.php');

$os_set = get_os_name($ua);
$os = $os_set[0];
$share = $_GET["set"];

if ($share == "mobile" ) {
    require_once(TEMPLATE_MOBILE.'index.php');
} else {

if ($os == "iOS" || $os == "Android") {
    require_once(TEMPLATE_MOBILE.'index.php');
} else {
    require_once(TEMPLATE_PC.'index.php');
}

}

?>
