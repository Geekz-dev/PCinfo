<?php
/**
 *  PCinfo
 *
 *  @author Gomasiyo
 *  Copyright (c) 2012 Geekz Web Development
*/

if ($share == "share") {
    // Get by header_share
    require_once(TEMPLATE_PC.'header_share.php');       
} else {
    // Get by header
    require_once(TEMPLATE_PC.'header.php');
}

if ($share == "share") {
    // Get by content_share
    require_once(TEMPLATE_PC.'content_share.php');
} else {
    // Get by content
    require_once(TEMPLATE_PC.'content.php');
}

// Get by footer
require_once(TEMPLATE_PC.'footer.php');

?>
