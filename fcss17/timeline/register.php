<?php
// error_reporting (E_All^E_Notice);
session_start();
if(isset($_POST['btn'])){
$user_id = $_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.3.363"/>
  

  
  <title>Register</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/register.css?crc=4053584085" id="pagesheet"/>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu14640"><!-- group -->
    <div class="browser_width" id="u14640-bw">
     <div id="u14640"><!-- simple frame --></div>
    </div>
    <div class="browser_width" id="u14643-bw">
     <div id="u14643"><!-- simple frame --></div>
    </div>
    <div class="clip_frame" id="u14754"><!-- image -->
     <img class="block" id="u14754_img" src="images/21191014_10212143039324294_92274533_o.png?crc=4050129874" alt="" width="167" height="100"/>
    </div>
    <nav class="MenuBar clearfix" id="menuu14646"><!-- horizontal box -->
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u14668"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u14669" href="../index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u14672-4"><!-- content --><p>Home</p></div></a>
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u14647"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u14650" href="../about.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u14653-4"><!-- content --><p>About us</p></div></a>
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u14654"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u14657"><!-- horizontal box -->
	  <a href="../blog/events.php">
       <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u14659-4"><!-- content -->
        <p>Events</p>
       </div>
      </div>
	  </a>
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u14661"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u14662"><!-- horizontal box -->
	  <a href="../timeline.html">
       <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u14664-4"><!-- content -->
        <p>Timeline</p>
       </div>
      </div>
	  </a>
     </div>
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u14675"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u14676"><!-- horizontal box -->
	  <a href="../contactform/contacts.html">
       <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u14679-4"><!-- content -->
        <p>Contact us</p>
       </div>
      </div>
	  </a>
     </div>
    </nav>
   </div>
   <div class="browser_width grpelem" id="u14796-bw">
    <div id="u14796"><!-- group -->
     <div class="clearfix" id="u14796_align_to_page">
      <div style="margin-left:320px; margin-right:0px; margin-top:150px;" ><!-- custom html -->
	  
	  
       <html>
<head>
  <meta name="viewport" content="width=425px, user-scalable=no">

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <title></title>
</head>
<body>
	



	<div id="contents" style="margin-bottom:10px;  padding:20px; height:650px; margin-left:0px;width:500px; font-size:15px; font-family:arial; color:#4E4D4D; background-color:white;">


	<form action="register.php" method="POST" role="form" style="width:300px; ">
    <h3></h3>
    <h4 style="font-size:30px; width:550px; color:#4E4D4D; margin-bottom:20px; margin-left:110px;">Register</h4>
	
	<?php

	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
	$contactnumber = $_POST['contactnumber'];
	
	$course=$_POST['course'];
	$gender=$_POST['gender'];
	
	

if(isset($_POST['btn'])){
	
	

  if($_POST['username']!="" && $_POST['email']!="" && $_POST['fullname']!="" && $_POST['contactnumber']!="" && $_POST['password']!="" && $_POST['confirm-password']!="" && $_POST['confirm-password']!=""){
	
	  
    if($_POST['password']==$_POST['confirm-password']){
		
	if(strlen($_POST['username'])>3){
	if(strlen($_POST['password'])>3){
		//if($_POST['contactnumber']!>11 ){
			
			
      include 'connect.php';
      $username = strtolower($_POST['username']);
      $query = mysql_query("SELECT username
                            FROM users
                            WHERE username='$username'
                            ");
      mysql_close($conn);
      if(!(mysql_num_rows($query)>=1)){
          $password = md5($_POST['password']);
          include 'connect.php';
          mysql_query("INSERT INTO users(username,email,fullname,contactnumber,password,course,gender)
                       VALUES ('$username','$email','$fullname','$contactnumber','$password','$course','$gender')
                      ");
          mysql_close($conn);
		  echo "<br>";
		  echo "<br>";
		  echo "<br>";
		  
	 echo "<script>alert('Registered Successfully'); window.location='index.php'</script>";
	 /*
          echo "<div style='margin-left:90px; width:250px;' class='alert alert-success'>Your account has been created!</div>";
	
          echo "<a style='text-decoration:none;' href='.' style='width:300px; font-size:15px; font-family:arial ' >Go Home</a>";
		  
	*/
          echo "</form>";
          echo "<br>";
     
          echo "</body>";
          echo "</html>";
          exit;

      }
      else{
        $error_msg="<div style='font-weight:bold;  '> Username already exists please try again </div>" ;
      }

	/*
	
	  }
	 else{
		 $error_msg="<div style='font-weight:bold; '>Wrong input of number</div>";
	
	}
	
	*/
	
	
	
	  }
	 else{
		 $error_msg="<div style='font-weight:bold; '> password should be greater than 3 </div>";
	
	}
	
	
		
  }
	 else{
		 $error_msg="<div style='font-weight:bold; '> username should be greater than 3 </div>";
	
	}
	
	 
    }
    else{
      $error_msg="<div style='font-weight:bold; '> Passwords did not match </div>";
	
    }
	

	
	

  }
  else{
      $error_msg="<div style='font-weight:bold; '>  All fields must be filled out </div>";
  }
  
  
  
}
?>
	<div style ="font-size:10px; margin-left:110px;">
		<div class="input-group" style="margin-bottom:10px; ">
		<span class="input-group-addon" >@</span>
		<input type="text" class="form-control" style="font-size:17px; width:200px; color:#4E4D4D;" placeholder="Username" name="username" pattern="[a-zA-Z0-9\s]+" title="no special characters" value="<?php $username = ""; echo $username; ?>">

		</div>

		
				<input type="text" class="form-control" style="font-size:17px; width:240px;" placeholder="Fullname" name="fullname" pattern="[a-zA-Z0-9\s]+" title="no special characters"><br>
				
				 <div style="font-size:17px; ">(format: xxxx-xxx-xxxx): </div>
				<input style="font-size:17px; width:240px;" type="tel" id="phonenum" class="form-control" placeholder="Contact number" name="contactnumber" pattern="^\d{4}-\d{3}-\d{4}$" required ><br>
	
				<input type="text" class="form-control" style="font-size:17px; width:240px;" placeholder="Email" name="email" ><br>
	

	
	
    <input type="password" style="margin-bottom:10px; font-size:17px; width:240px;" class="form-control" placeholder="Password" name="password" >
    <input type="password" style="margin-bottom:10px; font-size:17px; width:240px;" class="form-control" placeholder="Confirm Password" name="confirm-password" > 
	
	<select style="height:30px; width:240px; font-size:17px;" name="course" required >
		<option value="">None</option>
		<option value="BSIT">Bachelor Science in Information Technology</option>
		<option value="BSCS">Bachelor Science in Computer Science</option>
		<option value="BSEMC">Bachelor of Science in Entertainment and Multimedia Computing</option>
		<option value="ASCS">ASCS</option>
		<option value="SHS-TECH">SHS-Tech</option>
	</select>
	
	
	<div style="font-size:18px; margin-top:10px;">
		<input  type="radio" name="gender" required value="male" > Male
		<input style="margin-left:48px;" type="radio" name="gender" value="female"> Female<br>
	</div>
	
	
	</div>

    <?php
	
    if($error_msg){
        echo "<div style ='width:240px; margin-left:110px;' class='alert alert-danger '>".$error_msg."</div>";
    }
    ?>
	 <div class="btn-group">
		<button type="submit" style="
	background-color: #DFDFDF; 
    border: none;
    color:#4E4D4D;
	margin-left:110px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px; width:240px; height:30px; font-size:15px; margin-bottom:5px;" name="btn" value="submit-register-form">Register</button>
		<br>
		
	
		<div style="margin-top:10px;"><a style="color:#5E91A3;  font-size:20px; text-decoration:none;"; href="." style="width:300px; width:200px; " >Go Home</a></div>
		</div>
  </form>
  <br>


  </div>

</body>
</html>

      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="1240" data-content-above-spacer="1322" data-content-below-spacer="188"></div>
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
