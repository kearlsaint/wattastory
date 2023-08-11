<?php
require_once("hash.php");
$server = 'http://'.$_SERVER['SERVER_NAME'];
$images = $server;
$title  = "Wattastory";
$color1 = 'rgb(247,152,29)';
$color2 = 'rgb(227,132,9)';
$color3 = 'rgba(247,152,29,0.5)';

?>
<!DOCTYPE html>
<!--[if gte IE 6]>
	<script type="text/javascript">window.itsInternetExplorer=true;</script>
<![endif]-->
<!--[if lt IE 7]><html class="ie6 oldie" xmlns:fb="http://ogp.me/ns/fb#" lang="en"><![endif]-->
<!--[if IE 7]><html class="ie7 oldie" xmlns:fb="http://ogp.me/ns/fb#" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie8 oldie" xmlns:fb="http://ogp.me/ns/fb#" lang="en"><![endif]-->
<!--[if gt IE 8]><html class="" xmlns:fb="http://ogp.me/ns/fb#" lang="en">
	<style>.gradient{filter: none;}</style>
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html xmlns:fb="http://ogp.me/ns/fb#" lang="en" class="" > <!--<![endif]-->
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
	<meta property="fb:app_id" content="497870110275398" />
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
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '497870110275398',
      channelUrl : 'channel.html',
      status     : true,
      cookie     : true,
      xfbml      : true
    });
  };
  (function(d, debug){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
     ref.parentNode.insertBefore(js, ref);
   }(document, false));
</script>
<style>
*{font-family:"Segoe UI Semilight","Tahoma","Helvetica",sans-serif !important;}
html{outline:0;border:0;margin:0;padding:0;}
body{padding:80px 10% 5% 10%;background-color:#efefef;}
header{z-index:100;position:fixed;top:-10px;left:0px;width:100% !important;min-height:75px !important;height:75px !important;max-height:75px !important;background-color:<?=$color1?>;background:url("orange.png"),<?=$color1?>;box-shadow:0 2px 5px -2px black;border-style:solid;border-color:<?=$color2?>;border-width:0 0 medium 0;padding:0px 0 0 40px;color:white;font-size:64px;font-weight:bold;text-shadow:0 2px 3px rgba(0,0,0,0.7);}
content,footer{margin:2% auto;min-width:480px;max-width:1280px;width:80%;padding:2% 5%;display:block;background:white;border-radius:10px;border-style:solid;border-color:<?=$color1?>;border-width:thin thin medium thin;box-shadow:0 2px 5px -2px black;}
error{font-size:16px;color:red;text-shadow:0 0 5px rgba(255,0,0,0.2);border:thin solid red;border-radius:5px;padding:5px 10px;margin:5px;text-align:center;}
fb{display:inline-block;position:relative;}
fb>*{display:block;}
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
::-webkit-scrollbar{width:15px;background:<?=$color1?>;background-color:<?=$color1?>;}
::-webkit-scrollbar-track{background-color:<?=$color1?>;border-style:solid;border-color:<?=$color2?>;border-width:0 thin;}
::-webkit-scrollbar-thumb{border-radius:0px;background:white;border-style:solid;border-width:thin;border-color:<?=$color2?>;}
::-webkit-scrollbar-button:start:decrement,
::-webkit-scrollbar-button:end:increment{display:none;}
::selection{background:<?=$color1?>;color:white;}
::-moz-selection{background:<?=$color1?>;color:white;}
</style>
	<!-- custom html tags :: content :: result :: error :: fb :: me -->
	<div id="fb-root"></div>
	<header>
		<?=strtolower($title)?>
		<img id="loader" src="loader.gif" alt="Getting data.." style="display:block;" />
	</header>
	<content>
		<h1> Get your favorite stories from wattpad now! </h1>
		<p> Instructions: <br/>
			<ol>
				<li> First, copy your wattpad story's web address, like the ones shown below <br/>
					<code>
						http://www.wattpad.com/story/667262-she's-dating-the-gangster
					</code>
					<code>
						http://www.wattpad.com/2475802-she's-dating-the-gangster
					</code>
				</li>
				<li> Paste that copied address below </li>
				<li> Press enter and wait..</li>
			</ol>
			<code style="width:80%;">
				<p class="header">Use:</p>
				<p align="justify">
				There's no exception, really.<br/>
				Just don't abuse the purpose of this site.<br/>
				The story is categorized into parts/chapters.<br/>
				Each chapter, as to my understanding, has pages.<br/>
				After all story parts have been requested, a full<br/>
				story will be available for you to read/save<br/>
				</p>
				<p style="text-align:right;">
				&mdash; Happy reading <label for="you" class="red">&#9829;</label>
				</p>
			</code>
		</p>
		<form action="./" method="POST" target="_self">
			<input type="text" name="addr" id="addr" placeholder="http://" value="" />
			<input type="submit" value="Get story" id="smbt" />
			<input type="hidden" value="<?=hash::create()?>" name="auth" class="hidden" />
			<input type="hidden" value="<?=hash::create()?>" name="bits" class="hidden" />
		</form>
	</content>
	<footer>
		<result>
<?php
for($i=0;$i<100;$i++) echo "<span class='hidden' id='mainbuffer$i'></span>";
flush();
if(isset($_POST['auth']) && isset($_POST['bits']) && isset($_POST['addr'])){
	$addr = strtolower($_POST['addr']);
	$errr = 0;
	$text = '';
	if( (substr($addr,0,19)!='http://wattpad.com/')
	and (substr($addr,0,23)!='http://www.wattpad.com/')
	and (substr($addr,0,20)!='https://wattpad.com/')
	and (substr($addr,0,24)!='https://www.wattpad.com/')
	and (substr($addr,0,11)!='wattpad.com')
	and (substr($addr,0,15)!='www.wattpad.com')
	){
		echo '<error>Please enter a valid wattpad url</error>';
	}else{
		/*if(strpos($addr,'/story/')){
			if( !$data=getStory($addr) ){
				$errr++;
				echo '<error>An error has occured</error>';
			}else{
				$addr=between(clean($data),'<div class="story_start_reading">','</div>');
				$addr=between($addr,'<a href="','">');
				$addr=str_replace('<a href="','http://www.wattpad.com',$addr);
			}
		}*/
		if($errr==0){
			$data=clean(getStory($addr));
			$title = substr(stristr(between($data,'<title>','</title'),'>'),1);
			$parts = 1;
			$compiled = false;
			$parts_titles = array();
			$parts_links  = array();
			if(strpos($data,'story-parts"')){
				$tempx = between($data,'story-parts"','</ul></div>');
				while( $tempx = substr(stristr($tempx,'a href="'),7)){
					$tempy=between($tempx,'"','" class');
					$tempy = substr($tempy, 2);
					$tempz=between($tempx,'part-title"','</div>');
					$tempz = substr($tempz, 12);
					array_push($parts_titles,$tempz);
					array_push($parts_links ,"https://wattpad.com/".$tempy);
					$parts++;
				}
			}else{
				$parts = 2;
				$parts_titles = array( $title );
				$parts_links = array( $addr );
				$compiled = true;
			}
			?>
			<section>
				<span name="header"><?=$title?></span>
				<label for="header">Total parts: <?=($compiled)?$parts-1:$parts?></label>
				<section>
				<?php
				for($o=1;$o<$parts;$o++){
					$address = $parts_links[$o-1];
					//preview = substr(stristr(between(clean(getStory($address)),'id="storyText"','</div'),'>'),1);
					$handler = clean(getStory($address));
					//die("\n\n\n\n".$address);
					$pages   = substr(str_ireplace('=','',stristr(between($handler,'var totalPages =',';'),'=')),1);
					$title   = $parts_titles[$o-1];
					$text   .= '<hr/><br/><strong>Part '.$o.': '.$title.'</strong><br/>';
					$pages = 1;
				?>
					<div class="part">
						<label for="part<?=$o?>" onclick="ks.togglePage('part<?=$o?>');">Part <?=$o?>: <?=$title?><span style="color:#eee;float-right;"><?=$pages?> <?=($pages!=1)?'pages':'page'?></span></label>
						<div name="part<?=$o?>" style="display:none;" id="part<?=$o?>">
							<?php
							for($i=1;$i<=(int)$pages;$i++){
								$preview = substr(stristr(between(clean(getStory($address.'?p='.$i)),'id="storyText"','</div'),'>'),1);
								?>
								<div class="page">
									<label for="part<?=$o?>page<?=$i?>" onclick="ks.togglePage('part<?=$o?>page<?=$i?>');">Page <?=$i?></label>
									<div name="part<?=$o?>page<?=$i?>" style="display:none;" id="part<?=$o?>page<?=$i?>">
										<?=$preview?>
									</div>
								</div>
								<?php
								$text .= $preview;
								for($n=0;$n<100;$n++) echo "<span class='hidden' id='buffer$o$i$n'></span>";
								flush();
							}
							?>
						</div>
					</div>
				<?php
				}
				?>
					<div class="page">
						<label for="all" onclick="ks.togglePage('all');">View Whole Story</label>
						<div name="all" style="display:none;" id="all">
							<?=$text?>
						</div>
					</div>
				</section>
			</section>
			<?php
		}else{
			echo '<error>Errors occured: '.(string)$errr.'</error>';
		}
	}
}
?>
		</result>
		<fb>
			<fb:like send="false" width="400" show_faces="true" font="segoe ui" action="like"></fb:like><br/>
			<fb:comments href="http://wattastory.herokuapp.com" width="400" num_posts="20"></fb:comments>
		</fb>
		<me>
			site created by <a href="http://fb.me/kearlsaint" target="_self">kearlsaint</a> &copy; 2013-2014
		</me>
	</footer>
<script>
	ks.init();
</script>
</body>
</html>
<?php
function timestamp(){
    return strtotime(' ');
}

function between($st, $fp, $lp){
	return stristr(stristr($st,$fp),$lp,true);
}

function clean($st){
	return preg_replace('/\s+/', ' ',$st);
}

function he($str){
	return htmlentities($str, ENT_QUOTES, "UTF-8");
}
function getStory($url){
	$retries = 4;
	$result = false;
    $curl = curl_init($url);
    if (is_resource($curl) === true){
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        while (($result === false) && (--$retries > 0)){
            $result = curl_exec($curl);
        }
        curl_close($curl);
    }
    return $result;
}
function multiStory($url, $count){


}
?>
