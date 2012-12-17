<?php
/**
 *  PCinfo
 *
 *  @author Gomasiyo
 *  Copyright (c) 2012 Geekz Web Development
*/

if ($share == "share") {
// Get by header_share
require_once(TEMPLATE_MOBILE.'header_share.php');
} else {
    // Get by header
    require_once(TEMPLATE_MOBILE.'header.php');
}

if ($share == "share") {
    // Get by content_share
    require_once(TEMPLATE_MOBILE.'content_share.php');
} else {
    // Get by content
    require_once(TEMPLATE_MOBILE.'content.php');
}

// Get by footer
require_once(TEMPLATE_MOBILE.'footer.php');

?>
