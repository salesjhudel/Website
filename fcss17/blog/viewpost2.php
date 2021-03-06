<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.3.363"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musemenu.js", "jquery.watch.js", "require.js", "viewpost.css"], "outOfDate":[]};
</script>
  
  <title>viewpost</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/viewpost.css?crc=420434824" id="pagesheet"/>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu16530"><!-- group -->
     <div class="browser_width" id="u16530-bw">
      <div id="u16530"><!-- simple frame --></div>
     </div>
     <div class="browser_width" id="u16569-bw">
      <div id="u16569"><!-- simple frame --></div>
     </div>
     <div class="clip_frame" id="u16567"><!-- image -->
      <img class="block" id="u16567_img" src="images/21191014_10212143039324294_92274533_o.png?crc=4050129874" alt="" width="167" height="100"/>
     </div>
     <nav class="MenuBar clearfix" id="menuu16531"><!-- horizontal box -->
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u16539"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16540" href="../index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16543-4"><!-- content --><p>Home</p></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u16546"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16547" href="../about.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16549-4"><!-- content --><p>About us</p></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u16553"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16556"><!-- horizontal box -->
	   <a href="events.php">
        <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16557-4"><!-- content -->
         <p>Events</p>
        </div>
       </div>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u16532"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16533" ><!-- horizontal box -->
	   <a href="../timeline.html">
        <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16536-4"><!-- content -->
         <p>Timeline</p>
        </div>
       </div>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u16560"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u16563"><!-- horizontal box -->
	   <a href="../contactform/contacts.html">
        <div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u16564-4"><!-- content -->
         <p>Contact us</p>
        </div>
       </div>
      </div>
     </nav>
    </div>
    <div class="browser_width colelem" id="u16580-bw">
     <div id="u16580"><!-- group -->
      <div class="clearfix" id="u16580_align_to_page">
       <div class="clearfix grpelem" id="u16579"><!-- group -->
	   
        <div style="margin-top:0px;"class="grpelem" id="u19540"><!-- custom html -->
         
		<div style="margin-top:150px; margin-bottom:0px; margin-left:4px; padding-right:30px; line-height:25px; letter-spacing:0px;">
		<p><a style="text-decoration:none;" href="events.php"> Index</a></p>
		<br>
		<br>

		<?php	
			echo '<div>';
				echo '<h1 style="color:red; font-size:30px;">'.$row['postTitle'].'</h1>';
				echo '<br>';
				echo '<br>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
			
		?>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div id='disqus_thread'></div>
		<script type='text/javascript'>
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'https-fcssetc-000webhostapp-com'; // required: replace example with your forum shortname
      (function() {
      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
	</script>
		
		
        </div>
       </div>
      </div>
     </div>
    </div>
    <div style="" class="verticalspacer" data-offset-top="1302" data-content-above-spacer="1384" data-content-below-spacer="89"></div>
    <div class="browser_width colelem" id="u16655-bw">
     <div id="u16655"><!-- group -->
	 
      <div style="height:10px; margin-top:50px;" class="clearfix" id="u16655_align_to_page">
       <div class="clearfix grpelem" id="pu16572-4"><!-- column -->
        <div class="clearfix colelem" id="u16572-4"><!-- content -->
         <p>DISCOVER OLFU</p>
        </div>
        <a class="nonblock nontext clearfix colelem" id="u16571-5" href="about.html"><!-- content --><p id="u16571-2">History</p><p id="u16571-3">&nbsp;</p></a>
        <a class="nonblock nontext clearfix colelem" id="u16577-4" href="officers.html"><!-- content --><p>Officers</p></a>
        <a class="nonblock nontext clearfix colelem" id="u16576-4" href="missionvision.html"><!-- content --><p>Mission and Vision</p></a>
       </div>
       <div class="clearfix grpelem" id="pu16575-4"><!-- column -->
        <a class="nonblock nontext clearfix colelem" id="u16575-4" href="events.html"><!-- content --><p>Events</p></a>
        <a class="nonblock nontext clearfix colelem" id="u16574-4" href="timeline.html"><!-- content --><p>Timeline</p></a>
        <a class="nonblock nontext clearfix colelem" id="u16573-4" href="contacts.html"><!-- content --><p>Contact Us</p></a>
       </div>
      </div>
	  
     </div>
    </div>
    <div class="browser_width colelem" id="u16654-bw">
     <div id="u16654"><!-- group -->
      <div class="clearfix" id="u16654_align_to_page">
       <div class="clip_frame grpelem" id="u16657"><!-- image -->
        <img class="block" id="u16657_img" src="images/21191014_10212143039324294_92274533_o.png?crc=4050129874" alt="" width="153" height="92"/>
       </div>
       <div class="clearfix grpelem" id="u16656-4"><!-- content -->
        <p>FATIMA COMPUTER STUDIES SOCIETY</p>
       </div>
      </div>
     </div>
    </div>
   </div>
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
