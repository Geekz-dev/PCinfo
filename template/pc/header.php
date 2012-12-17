<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PCinfo</title>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="./css/reset.css" type="test/css" media="all">
<link rel="stylesheet" href="./css/style_pc.css" type="text/css" media="all">
<script src="src/jquery-1.7.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('#accordion_title').click(function() {
            //ボタン非表示
            $('#accordion_title').hide();

            //Ajax URL短縮
            $.get('<?php echo GZRY_API.$url; ?>',function (data,status) {
                $('#show_url').fadeIn("slow");
                $('#show_url').val(data);
                $('#loading').hide();
            });

            //ローディング画像表示
            $('#loading').fadeIn("slow");
            //イベントリスナー削除
            $(this).unbind('click');

            }).next().hide();
        });
</script>
<!--
    PCinfo
    Copyright (c) 2012 Geekz Web Development 
-->
</head>
<body>
