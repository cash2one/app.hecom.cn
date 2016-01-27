<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pramga: no-cache"); 

function is_weixin(){ 
    if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
        return true;
    }
    return false;
}

function get_device_type() {
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $type = 'other';
    if (strpos($agent, 'iphone') || strpos($agent, 'ipad')) {
        $type = 'ios';
    }
    if (strpos($agent, 'android')) {
        $type = 'android';
    }
    return $type;
}

$iswx = is_weixin();

$devicetype = 'android';
if (get_device_type() == 'ios'){
    $devicetype = 'ios';
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>红圈营销</title>
	<meta http-equiv="pragram" content="no-cache">
        <meta content="user-scalable=0;" name="viewport" />
        <meta name="apple-itunes-app" content="app-id=967499300" />
	<style>
		body{
			text-align: center; 
			padding:0px; 
			margin:0px;
			line-height:0px;
			background-color:#a0a5b0;
		}
		.hidden{ display:none; z-index:2;}
	</style>
		
</head>

<body>
<div class="hidden">
	<img src="<?php echo $devicetype;?>img/a.png" />
</div>
      	<img src="<?php echo $devicetype;?>img/top.png" />
        <?php
        $url = "http://a.app.qq.com/o/simple.jsp?pkgname=com.hecom.sales";
        ?>
        <a href="<?php echo $url;?>" target="_top">
		<img src="<?php echo $devicetype;?>img/btn.png" />
	</a>
</body>
</html>