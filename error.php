<?php

if( !isset($_GET['code']) ){ die(); }


switch(intval( $_GET['code'] )){

	case 400: error(400); break;
	case 401: error(401); break;
	case 403: error(403); break;
	case 404: error(404); break;
	case 405: error(405); break;
	case 408: error(408); break;
	case 414: error(414); break;
	case 500: error(500); break;
	case 502: error(502); break;
	case 504: error(504); break;
	default : error(404);

}

function error( $code = 404 ){

switch( $code ){

	case 400: $status = 'Cause: Syntax<hr/>The request could not be fulfilled due to bad syntax';
		break;
	case 401: $status = 'Cause: Authentication<hr/>Access authentication denied! Unauthorized credentials';
		break;
	case 403: $status = 'Cause: Authenticatoin<hr/>Access to this location is forbidden';
		break;
	case 404: $status = 'Cause: Visibility<hr/>The user or resource is not available on the server';
		break;
	case 405: $status = 'Cause: Authentication<hr/>Requested method is not allowed';
		break;
	case 408: $status = 'Cause: Connection<hr/>The request was timed out';
		break;
	case 414: $status = 'Cause: URL and URI<hr/>The request url and uri is too long for the server to process';
		break;
	case 500: $status = 'Cause: Server<hr/>An internal server error has occured. Please try again';
		break;
	case 502: $status = 'Cause: Gateway<hr/>The server received an invalid response';
		break;
	case 504: $status = 'Cause: Gateway<hr/>The gateway has timed out the request';
		break;
	default : $status = 'Cause: Error<hr/>The user or resource is not available on the server';

}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes">
	<meta name="description" content="<?=$title?> helps you get stories from wattpad. It's easy to use.">
	<meta name="author" content="kearlsaint@gmail.com">
	<meta name="copyright" content="2013">
	<meta name="keywords" content="wattpad, story, stories">
	<meta property="og:title" content="<?=$title?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?=$server?>" />
	<meta property="og:image" content="<?=$images?>/icon.png" />
	<meta property="og:site_name" content="<?=$title?>" />
	<meta property="og:description" content="<?=$title?> helps you get stories from wattpad." />
	<meta property="fb:app_id" content="0" />
	<link rel="shortcut icon" href="<?=$images?>/icon.ico">
</head>
<body>
<script>
window.ks={
	a:function(a){
		return document.getElementById(a);
	},
	init:function(){
		ks.a("loader").style.display="none";
	},
	togglePage:function(a){
		if(typeof(a)!='string') return false;
		ks.a(a).style.display=='none'?ks.a(a).style.display="block":ks.a(a).style.display="none";
		return true;
	}
};
</script>
<style>
*{font-family:"Segoe UI Semilight","Tahoma","Helvetica",sans-serif !important;}
html{outline:0;border:0;margin:0;padding:0;}
body{padding:80px 10% 5% 10%;background-color:#efefef;}
header{position:fixed;top:-10px;left:0px;width:100% !important;min-height:75px !important;height:75px !important;max-height:75px !important;background-color:<?=$color1?>;background:url("orange.png");box-shadow:0 2px 5px -2px black;border-style:solid;border-color:<?=$color2?>;border-width:0 0 medium 0;padding:0px 0 0 40px;color:white;font-size:64px;font-weight:bold;text-shadow:0 2px 3px rgba(0,0,0,0.7);}
content,footer{margin:2% auto;min-width:480px;max-width:1280px;width:80%;padding:2% 5%;display:block;background:white;border-radius:10px;border-style:solid;border-color:<?=$color1?>;border-width:thin thin medium thin;box-shadow:0 2px 5px -2px black;}
error{font-size:16px;color:red;text-shadow:0 0 5px rgba(255,0,0,0.2);border:thin solid red;border-radius:5px;padding:5px 10px;margin:5px;text-align:center;}
footer{}
footer>*,error{display:block;}
footer>results{font-size:16px;color:#555;}
footer>me{font-size:12px;color:#ccc;text-align:right;}
footer>me>a{text-decoration:underline;color:<?=$color1?>;}
h1{font-size:42px;color:<?=$color1?>;text-align:center;box-shadow:0 20px 35px -25px <?=$color1?>;border-style:solid;border-color:<?=$color2?>;border-width:0 0 thin 0;padding-bottom:10px;border-radius:0 0 10px 10px;}
p{font-size:24px;color:#555;text-align:left;}
ol{list-style:square;}
code{margin:10px 5%;display:inline-block;max-width:80%;width:auto;border-radius:5px;padding:10px 5%;color:black;background-color:<?=$color3?>;text-align:left;}
code p.header{font-size:24px;color:black;}
code p{font-size:16px;color:#555;}
li{font-size:16px;color:#555;text-align:left;}
li code{margin:10px 0 10px 10%;}
.red{color:red;font-size:24px;}
#loader{position:fixed;top:17px;right:20px;max-height:30px;height:30px !important;max-width:30px;width:30px !important;}
form{display:block;padding:5px 5%;margin:5px auto;}
input{border-style:solid;border-color:<?=$color1?>;border-width:thin thin medium thin;font-size:16px;border-radius:10px;outline:none;display:inline-block;margin:0 0 0 5%;}
#addr{min-height:27px;max-height:27px;height:27px !important;padding:10px;width:60% !important;background:white;color:#555;}
#smbt{min-height:50px;max-height:50px;height:50px !important;padding:10px;box-shadow:inset 0px -1px 2px -1px white;cursor:pointer;width:20% !important;background:<?=$color1?>;color:white;}
#smbt:hover{text-shadow:0 0 5px white;}
#smbt:focus,#smbt:active{position:relative;top:3px;border-width:thin;}
.hidden{display:none;visibility:hidden;}
result>section{border-top:thin solid <?=$color1?>;margin:10px auto;}
result>section>span{font-size:32px;color:<?=$color1?>;display:block;text-align:center;}
result>section>label{font-size:14px;color:#ccc;font-weight:bold;display:block;text-align:left;}
result>section>section{display:block;}
.page,.part{border-radius:5px;border:thin solid #ccc;padding:10px;margin:10px auto;}
.page>label,.part>label{cursor:pointer;font-size:16px;color:white;display:inline-block;padding:5px 10px;border-style:solid;border-color:<?=$color1?>;border-width:thin thin medium thin;background-color:<?=$color1?>;box-shadow:inset 0px -2px 5px -2px white;border-radius:5px;}
.page>label:hover,.part>label:hover{text-shadow:0 0 5px white;}
.page>label:active,.page>label:focus,.part>label:active,.part>label:focus{position:relative;top:3px;border-width:thin;}
.page>div strong{font-size:14px;color:#555;font-weight:bold;}
.page>div *,.page>div{font-size:12px;}
</style>
	<!-- custom html tags :: content :: result :: error :: me -->
	<header>
		<?=strtolower($title)?>
		<img id="loader" src="loader.gif" alt="Getting data.." style="display:block;" />
	</header>
	<content>
		<h1>Error <?=$code?></h1>
		<p><?=$status?></p>
	</content>
	<footer>
		<me>
			site created by <a href="http://fb.me/kearlsaint" target="_top">kearlsaint</a> &copy; 2013-2014
		</me>
	</footer>
</body>
</html>