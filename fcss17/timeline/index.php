<?php
session_start();


$user_id = $_SESSION['user_id'];

?>

<?php


if(isset($_POST['login-btn'])){
  if($_POST['username']!="" && $_POST['password']!=""){
	
									  
			
			
    $username = strtolower($_POST['username']);
    include "connect.php";
    $query = mysql_query("SELECT id, password
                          FROM users
                          WHERE username='$username'
                          ");

						
    mysql_close($conn);
	
    if(mysql_num_rows($query)>=1){
      $password = md5($_POST['password'] );
      $row = mysql_fetch_assoc($query);
	  
      if($password==md5($row['password']) || $password==$row['password']){
		  				  
					
		  
		  
		  
        $_SESSION['user_id']=$row['id'];
        header('Location: .');
        exit;
		


		
      }
      else{
        $error_msg = "Incorrect username or password";
      }
    }
    else{
      $error_msg = "Incorrect username or password";
    }
	

  
		
  }
    else{
      $error_msg = "All fields must have input";
    }
  
  
  
}


?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

 
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css2/style3.css" type="text/css">
 
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.3.363"/>
  

  
  <title>Login</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/login.css?crc=49370250" id="pagesheet"/>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div  class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu16346"><!-- group -->
    <div class="browser_width" id="u16346-bw">
     <div id="u16346"><!-- simple frame --></div>
    </div>
    <div class="browser_width" id="u16385-bw">
     <div id="u16385"><!-- simple frame --></div>
    </div>
    <div class="clip_frame" id="u16383"><!-- image -->
     <img class="block" id="u16383_img" src="images/21191014_10212143039324294_92274533_o.png?crc=4050129874" alt="" width="167" height="100"/>
    </div>
    <nav class="MenuBar clearfix" id="menuu16347"><!-- horizontal box -->
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u16355"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16356" href="../index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16359-4"><!-- content --><p>Home</p></div></a>
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u16362"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16363" href="../about.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16365-4"><!-- content --><p>About us</p></div></a>
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u16369"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16372"><!-- horizontal box -->
	 <a href="../blog/events.php">
       <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16373-4"><!-- content -->
	    
        <p>Events</p>
       </div>
	   </a>
      </div>
	  
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u16348"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16349"><!-- horizontal box -->
	    <a href="../timeline.html">
       <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16352-4"><!-- content -->
        <p>Timeline</p>
       </div>
      </div>
	    </a>
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u16376"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16379"><!-- horizontal box -->
	  <a href="../contactform/contacts.html">
       <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16380-4"><!-- content -->
        <p>Contact us</p>
       </div>
      </div>
	  </a>
     </div>
    </nav>
   </div>
   <div class="browser_width grpelem" id="u16396-bw">
    <div id="u16396"><!-- group -->
     <div class="clearfix" id="u16396_align_to_page">
      <div  style="margin-top:0px;" class="grpelem" id="u17374"><!-- custom html -->
       <!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title></title>

</head>
<body>

	
<div id="contents" style="margin-bottom:20px; margin-left;0px; width:1040px; font-size:0px;">
		<?php
  if($user_id){
    include "dashboard.php";
    exit;
  }
  ?>

	
  	<div id="contents" style="margin-left;0px; width:700px; padding:70px 90px 20px 130px;  font-size:10px; background-color:white;">
	<h1> 
    <?php

    if($error_msg){
        echo "<div class='alert alert-danger' style='margin-bottom:10px; width:450px; font-size:15px'>".$error_msg."</div>";
    }
    ?>
	</h1>
	
  <h3 style="font-size:40px; font-size:Arial;">Login</h3>
  <br>
  <br>
  <form role="form" action="index.php" method="POST" style="width:300px; height:2px; font-size:20px;">
  
    <div class="input-group" style="margin-bottom:10px; width:200px;">
      <!-- <span class="input-group-addon">@</span> -->
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
	
	<br>
	<input type="password" style="margin-bottom:10px; width:200px;" class="form-control" placeholder="Password" name="password">

	
	<br>
	   <div class="btn-group">
	   
		<button type="submit" style="margin-left:0px; margin-bottom:20px; width:200px; height:30px; font-size:15px;"  name="login-btn" value="login-submit">Log In</button> 
				
				<h6 style="font-size:16px;"><a style="margin-top:0px; text-decoration:none; color:#4186D5;"href="fpass.html" style="width:150px; padding-top:20px; text-decoration:none;">Forgot password?</b></a></h6>
		
		
		
		
		<br>
		<h6 style="font-size:16px;">Doesn't have an account?   <b><a style="text-decoration:none; color:#2164D3;"href="register.php" style="width:150px; padding-top:20px; text-decoration:none;">Register</b></a></h6>
	</div>
	
      
  </form>
	</div>
		</div>
	
</body>
</html>
      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="1082" data-content-above-spacer="1164" data-content-below-spacer="0"></div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=85721165" type="text/javascript" async data-main="scripts/museconfig.js?crc=436936948" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
