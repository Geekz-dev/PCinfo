<?php
/**
 *  PCinfo
 *
 *  @author Gomasiyo
 *  Copyright (c) 2012 Geekz Web Development
*/

    $file = file_get_contents("http://tinyurl.com/api-create.php?url=".urlencode($_GET['url']));
    
    echo $file;

?>
