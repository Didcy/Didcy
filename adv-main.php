<?php
  
 if(isset($_COOKIE) == TRUE){
   if(empty($_COOKIE) != TRUE){
	 if(count($_COOKIE) > 0){
	   include("functions.php");
	   $id = $_COOKIE["GAGA_RESPONSE"];
	   $query = "select * from gaga where id='".$id."';";
	   if(count(fetchAll($query)) > 0){
		 $dusr = fetchAll($query);
		 setcookie("GAGA_ADI", $dusr[0]["adInterest"]);
	   }
	 }
   }
 }

?>
<!--comment: HTML5, CSS3, JS6(ECMASCRIPT/ES6), PHP8, SASS, AJAX, XML, JSON, ASP, NODEJS -->
<!doctype html>
<html lang="en-us" default-lang="english" def_country="usa">
<head class="" id="didcy-A1">
 <title class="" id="">Didcy - It all begins with a space</title>
 <link rel="canonical" href="http://www.didcy.com/" />
 <meta name="robots" content="index,follow">
 <meta charset="utf-8">
 <meta http-equiv="refresh" content="3600000000000000000"">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="keywords" content="spaces, didcy spaces, didcy, how to use didcy, cloudmyads, bookspace, didcyhost, developers, who is a didcer, the core, what is the core, what is didcy find">
 <meta name="description" content="Didcy is a space provision platform where users can cloud, sell, build, host and do more digital activities. 
 It was created on the 1st August, 2021 by its Founder and CEO, David Ansong. It's headerquaters can be found in Ghana.
 Didcy was created to provide spaces in the form of individual integrated platforms where each platform performs different or simlar digital task.
 Didcy provide spaces(platforms) such as trading(selling and buying) space, WebSpace, BookSpace and more. 
 Didcy has 6 team members and 4 employees. Languages written in: HTML, CSS, JS, PHP, AJAX, MYSQL.">
 <meta name="author" content="David Ansong">
 <meta name="country" content="Ghana">
 <meta name="domain" content="https://www.didcy.com">
 <link rel="stylesheet" href="build/css/intlTelInput.css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<script type="text/javascript" src="jquery.js"></script>
<?php //include_once("chat2.php"); ?>
<!--<link rel="stylesheet" href="chat.css">-->
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="didcx.width.main.poisitioner.css">
 <link rel="stylesheet" href="adv-headerx.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-more.container.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-sign.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-custom.checkbox.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-custom.select.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-howtogaga.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-magnifier.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-tree-view.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-slide-top.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-slide-side.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-custom.radio.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-ratings.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <!--<link rel="stylesheet" href="adv-scale-split-create-ads.css" type="text/css" media="" media-type="" min="0em" max="0vw">-->
 <!--<link rel="stylesheet" href="adv-ads.create.css" type="text/css" media="" media-type="" min="0em" max="0vw">-->
 <link rel="stylesheet" href="adv-pricing.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-subscription.newsletter.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-social-media-accounts.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-social-media-accounts.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-open.select.ads.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-profile.info.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-custom.scrollbar.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-social-media.contacts.links.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-offline-services.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-flip-box.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-exhibiton-platforms.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-terms-conditions.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-alert-boxes.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-about.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-books.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-product-card.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-cookie-accept.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-author.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-animated-image.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-know-team-developers.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-subscription-extras.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-reach-show.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-loaders.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-rater.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="work.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-notification.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="didcy.work.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-create-ads.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="coursery.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-coursery-playground.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-custom-video-controls.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="didcy.keys.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="audio.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="tooltip.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv.logo.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-@footer.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="network.detection.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-collapsible.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-dog-access.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-testimonials.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-page-videos.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="chat-login.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="adv-youtube.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="https://www.didcy.com/adv-features.css" type="text/css" media="" media-type="" min="0em" max="0vw">
 <link rel="stylesheet" href="https://www.didcy.com/adv-tooltips.css" type="text/css" media="" media-type="" min="0em" max="0vw">

 
 <link id="icon" rel="icon" href="https://www.didcy.com/didcy.png" type="image/ico">
 <script type="text/javascript" src="adv-global.js"></script>
 <script type="text/javascript" src="jquery.js"></script>
 <script type="text/javascript" src="w3.js"></script>
 <script type="text/javascript" src="adv-magnifier.js"></script>
<!--  <script type="text/javascript" src="adv-social-media.contacts.links.js"></script>
 --> <script type="text/javascript" src="display.ads.js"></script>
 <script type="text/javascript" src="adv-open.select.ads.js"></script>
 <script type="text/javascript" src="adv-company-profile.js"></script>
 <script type="text/javascript" src="adv-profile.info.js"></script>
 <script type="text/javascript" src="adv-datetime.js"></script>
 <script type="text/javascript" src="adv-sleep.js"></script>
 <script type="text/javascript" src="upload.multiple.ads.js"></script>
 <script type="text/javascript" src="adv-search-display.js"></script>
  <script type="text/javascript" src="CloudABIS-ScanR.js"></script>
 <script type="text/javascript" src="CloudABIS-Helper.js"></script>
 <script type="text/javascript" src="CloudABIS-Helper.js"></script>
 <script type="text/javascript" src="adv-services-not-available.js"></script>
 <script type="text/javascript" src="it.js"></script>
 <script type="text/javascript" src="adv-cookie-accept.js"></script>
 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
 <!-- <script type="text/javascript" src="adv-impact.js"></script> -->
<!--  <script type="text/javascript">
  if(getCookieValue("GAGA_RESPONSE") != window.location.href.slice(40)){
      document.cookie = "GAGA_RESPONSE="+window.location.href.slice(40)+";";
  }
 </script> -->
 <style type="text/css">
  *{
     box-sizing: border-box;
  }
  html{}
  body 
 {
	margin:0;
	font-family: "proxima-nova", "Source Sans Pro", Arial, 
	Helvetica, Sans-serif, Verdana;
	background: white;
 }
body {
  font-family: "Sofia", sans-serif;
} 
 .logo{
	  position: fixed;
	  right: 0;
	  bottom: 0;
	  min-width: 100%; 
	  min-height: 100%;
 
 }
 .topNavg{
  position: sticky;
  top: 0; 
  right: 0;
  
  background-color: red;
  margin: 0;
  width: 100%;
  z-index: 1;
 }
 .topNavg-1{
    position: relative;
	top: 27%;
	right: 0;
 
	margin: 0;
	margin-top: 12%;
	width: 100%;
 }
 .footer-2{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%; 
   height: 0;
 } 
 .footer{
   position: relative;/*relative*/
   left: 0;
   width: 100%; 
   height: 0;
   margin-bottom: 0;
   content: "";
 }
 
 /*a.impact, a.audio_radio, a.more, a.24-7-contacts{
    font-size: 39px;
 } */
 
.iti {
  position: relative;
  display: block; 
  width: 100%;
  margin-left: 10%;
 }
input.inputs1, button.inputs1{
	height: 55px;
}
 .iti__country {width: 100%;}
 /*.iti__country-list--dropup {width: 100%;margin:0;}*/


	.menu{display: none;}
	.menu-1{display: block;}

 @media screen and (max-width: 874px){
	.notification .badge {
	  top: 0%;
	}    
	 .hello-ex{font-size: 25px;}
 }
 @media screen and (max-width: 428px){
	/*.notification .badge {
	  top: 45%;
	  padding: 3px 5px;
	  font-size: 20px;
	  right: 0px;
	}   */ 
	.services{
	  font-size: 25px;
	}
	.hello-ex{font-size: 20px;}
	.menu{display: block;}
	.menu-1{display: block;}
 }
 @media screen and (max-width: 410px){
     .notification .badge {padding: 3px 7px;font-size: 15px;}
 }
 @media screen and (max-width: 390px){
	/*.notification .badge {
	  top: 45%;
	  padding: 3px 5px;
	  font-size: 20px;
	  right: 0px;
	}*/
	.notification .badge {
	  top: 0%;
	  padding: 3px 5px;
	  font-size: 15px;
	  margin-left: 20px;
	}
 }
 @media screen and (max-width: 339px){
	/*.notification .badge {
	  top: 56%;
	  padding: 3px 5px;
	  font-size: 20px;
	  right: 0px;
	}*/
	.notification .badge {
	  top: 0%;
	  padding: 3px 5px;
	  font-size: 15px;
	  margin-left: 20px;
	}    
	.hello-ex{font-size: 18px;}
 }
 @media screen and (max-width: 330px){
	.services{
	  font-size: 20px;
	} 
 }
 @media screen and (max-width: 290px){
	.services{
	  font-size: 17px;
	} 
 }
 @media screen and (max-height: 390px){
	 a.didcx, a.active, a.linker
	 {padding-top: 15px;font-size: 10px;}
	 .dropdown .dropbtn{font-size: 20px;}
	 input.search-engine{font-size: 20px;}
	 
 } 
 @media screen and (min-height: 1366px){
	 .topNavg, .topnav, .dropdown .dropbtn, .didcx, .active, .linker{
       height: 100px;
	 } 
	 a.didcx, a.active, a.linker
	 {padding-top: 35px;font-size: 20px;}
	 .dropdown .dropbtn{font-size: 20px;}
	 input.search-engine{font-size: 30px;}
	 span.close-id02{font-size: 30px;}
 }
 
 .mini-container{background: black;}
 .mini-content{background: black;}
 
.mini-search .mini-content .mini-container input.search-engine{
	  width: 100%;
	  font-size: 20px;
	  letter-spacing: 2px;
	  word-spacing: 2px;
	  padding: 20px;
	  color: black;
	  
}
.mini-search .mini-content .mini-container input.search-engine:hover{
	  background: gray;
	  color: white;
}

.close-mini-search{color: white;}

.mini-search{display: none;}	

@media screen and (max-width: 1115px){
	#modal-content-work-apply{
	   width: 100%;
	}
}
.modal-content-adv-exhibition-platform-table{
  top: 30%;
}

@media screen and (min-width: 617px) {
.mini-search{display: none;}	
}
.notification .badge {display: none;}
#frame .content .message-input{
  background-image: url("");
  bottom: 0;
}
#frame .content .message-input .wrap input {
  background-image: url("");
}
#frame #sidepanel #profile .wrap #status-options ul li.active {
 background: #435f7a;
}
#frame .content .message-input .wrap input {
  margin-bottom: 0;
  margin-left: 5px;
}
#error-log{
  display: none;
}
.audio-ad-image, .audio-ad-image-21{
  display: none;
  width: 100%;
}
@media screen and (max-width: 390px){
  .custom-file-input-audio-ad-image::before{
	width: 100%;
	font-size: 15px;
  }
  #audio-ad-image, #audio-ad-image-21{
	width: 100%;
  }
}
#audio-ad-image-label, .update-ad-actor-infos, .update-company-registration,
.didcy-po{display: none;}
#didcy-work{display: block;}
p.policy-attribution{font-size: 0.7em;}

@media screen and (min-height: 912px){
	.didcy-cook-txt, button.didcy-cookie-full-mode{font-size: 30px;}
	.cookie-full-mode-link{font-size: 30px;}
	li.cookie-full-mode-link{font-size: 30px;}
	a.cookie-full-mode-link{font-size: 30px;}
	h3.cookie-h3-headers, h5.cookie-h5-headers, .address.cookie-hA-headers, 
	.p.policy-attribution{
	   font-size: 30px;
	}
}

.col-fixes, .col-ripa{
  height: 0;	
}

.didcy-min-nav, .didcy-min-nav-contacts, .linker-left-side, .didcy-mini-logo{
  position: fixed;
  top: 20%;
  left: 0.5%;
  z-index: 1;
  cursor: pointer;
  padding: 0;
}

.didcy-mini-logo a img{
  width: 100%;
}


a.linker-left-side{
  background: rgba(0, 0, 0, 1);
  top: 32%;
  font-size: 30px;
  color: white;
  padding-right: 5px;
}

.didcy-min-nav a img{
  width: 25px;
  height: 10%;
}

.didcy-min-nav-contacts{
  top: 26%;
}

.didcy-min-nav-contacts a img{
  width: 25px;
  height: 10%;
}

.didcy-mini-logo{
  position: fixed;
  top: 40%;
  left: 0.5%;
  z-index: 1;
  cursor: pointer;
}

.didcy-mini-logo a img{
  width: 25px;
}


@media screen and (max-width: 283px){
  .didcy-mini-big-logo-title{
	font-size: 15px;
  }
}

img.logo-big{
  width: 100%;
}
.close-didcy-benefits, .close-didcy-guide
, .close-didcy-keywords, .close-didcy-competitive-advantage{
  z-index: 3;
}
.side-nav-container{
  position: fixed;
  top: 17%;
  left: 0%;
  z-index: 1;
  cursor: pointer;
  background: rgba(0, 0, 0, 1);/*background: rgba(50, 50, 50, 1);*/
  height: 200px;
  width: 40px; 
  border-radius: 8%;  
}

@media screen and (max-width: 283px){
  .didcy-mini-big-logo-title{
	font-size: 15px;
  }
}

img.logo-big{
  width: 100%;
}
@media only screen and (min-height: 300px){
.side-nav-container{

}
}
@media only screen and (min-height: 400px){
.side-nav-container{
  top: 17%;
  height: 200px;
}
}
@media only screen and (min-height: 410px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}
@media only screen and (min-height: 435px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}@media only screen and (min-height: 440px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}@media only screen and (min-height: 450px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}
@media only screen and (min-height: 460px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}
@media only screen and (min-height: 475px){
.side-nav-container{
  top: 17%;
  height: 180px;
}
}
@media only screen and (min-height: 480px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}
@media only screen and (min-height: 500px){
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 550px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}
@media only screen and (min-height: 600px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}
@media only screen and (min-height: 601px){
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 620px){
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 630px){
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 635px){
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 640px){
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 650px){
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 667px){
  .modal-content-didcy-mini-big-logo{
	 top: 10%;
  }
  .modal-content-didcy-mini-big-logo img.logo-big{
	 height: 100%;
  }
}
@media screen and (min-height: 653px){
  .modal-content-didcy-mini-big-logo{
	 top: 15%;
  }
  .modal-content-didcy-mini-big-logo img.logo-big{
	 height: 100%;
  }
.side-nav-container{
  top: 17%;
  height: 190px;
}
}
@media only screen and (min-height: 667px){
.side-nav-container{
  top: 17%;
  height: 200px;
}
}
@media only screen and (min-height: 700px){
.side-nav-container{
  top: 17%;
  height: 220px;
}
}
@media only screen and (max-height: 800px){
  .modal-content-didcy-mini-big-logo{
	 top: 5%;
  }
  .modal-content-didcy-mini-big-logo img.logo-big{
	 height: 490px;
  }
}
@media only screen and (min-height: 800px){
.side-nav-container{
  top: 17%;
  height: 250px;
}	
}
@media only screen and (min-height: 890px){
.side-nav-container{
  top: 17%;
  height: 255px;
}	
}
@media only screen and (min-height: 900px){
.side-nav-container{
  top: 17%;
  height: 280px;
}
}
@media only screen and (min-height: 1000px){
.side-nav-container{
  top: 17%;
  height: 310px;
}
}
@media only screen and (min-height: 1100px){
.side-nav-container{
  top: 17%;
  height: 350px;
}
}
@media only screen and (min-height: 1200px){
.side-nav-container{
  top: 17%;
  height: 440px;
}
}
@media only screen and (min-height: 1300px){
.side-nav-container{
  top: 17%;
  height: 390px;
}
}

@media only screen and (max-height: 600px){
  .modal-content-didcy-mini-big-logo img.logo-big{
	 height: 490px;
  }
}

@media only screen and (max-height: 600px){
.didcy-min-nav-contacts{
  top: 27%;
}


a.linker-left-side{
  top: 34%
}

.didcy-mini-logo{
  top: 45%;
}
}

@media only screen and (max-height: 475px){
.didcy-min-nav{
  top: 20%;
}

.didcy-min-nav-contacts{
  top: 30%;
}

a.linker-left-side{
  top: 42%
}

.didcy-mini-logo{
  top: 55%;
}
}

@media only screen and (max-height: 290px){
.didcy-min-nav{
  top: 20%;
}

.didcy-min-nav-contacts{
  top: 35%;
}

a.linker-left-side{
  top: 50%
}

.didcy-mini-logo{
  top: 68%;
}
}

.bottom-level-nav-down{
  
}

.modal-cookie-full-mode, .modal-cookie, .didcy-cook-txt{
  padding-top: 2px;
}
.modal-content-cookie-full-mode, .modal-content-cookie{
  top: 2%;
}
/*.ap_container {position:fixed;width:50%;bottom:0px ;left:25%;}*/
.ap_container{
  width: 50%;
  position: relative;
  left: 25%;
}
@media screen and (max-width: 700px){
   h1#didcy-work-policy, h2#welcome-2-didcy-work-policy{
	 font-size: 20px;
   }
#close-work, #close-cookie-full-mode, #close-cookie, #close-upcoming-updates, #close-signup, 
#close-ripa-board, #close-ripa-bank, #close-plugins-board, #close-split, #close-quak, 
#close-work-apply, #close-work-board-4, #close-connections, .close-plugins-4-devs
, .close-didcy-benefits, .close-didcy-guide
, .close-didcy-keywords, .close-didcy-competitive-advantage{
  top: 5px;
  right: 10px;
}
.didcy-cookie-policy-full{
  font-size: 20px;
}
}
@media screen and (max-width: 600px){
	#design-update-centre{
	  font-size: 15px;
	}
, 
.welcome-header, .welcome-didcy-developer-portal{
  font-size: 20px;
}
.sub-header{
  font-size: 15px;
}
}

@media screen and (max-width: 500px) {
 .welcome-didcy-benefits, .welcome-didcy-keywords
 , .welcome-didcy-guide, .welcome-didcy-cmp-adv{
  font-size: 25px;
}
.using-didcy{
  font-size: 20px;
}
.button-33, #button-1{
  left: 2%;
}
.modal-content-signin, .modal-content-signup{
  width: 90%;
}
/*.ap_container {position:fixed;width:50%;bottom:0px ;left:25%;}*/
.ap_container{
  width: 80%;
  left: 10%;
}
}
@media screen and (max-width: 300px){
 .welcome-didcy-benefits, .welcome-didcy-keywords
 , .welcome-didcy-guide, .welcome-didcy-cmp-adv{
  font-size: 15px;
}
.using-didcy{
  font-size: 15px;
}
/*.ap_container {position:fixed;width:50%;bottom:0px ;left:25%;}*/
.ap_container{
  width: 90%;
  left: 5%;
}
   h2#welcome-2-didcy-work-policy{
	 font-size: 18px;
   }
#close-work, #close-cookie-full-mode, #close-cookie, #close-upcoming-updates, #close-signup, 
#close-ripa-board, #close-ripa-bank, #close-plugins-board, #close-split, #close-quak, 
#close-work-apply, #close-work-board-4, .close-plugins-4-devs, .close-didcy-benefits, .close-didcy-guide
, .close-didcy-keywords, .close-didcy-competitive-advantage{
  top: 0;
  right: 0px;
}
.didcy-cookie-policy-full, .cookie-h3-headers, #privacy-policy-link, 
#useOfCookies, #typesOfCookies, .didcy-cookie-short-mode, 
.welcome-header, .sub-header{
  font-size: 20px;
}
#privacy-policy-link, #design-update-centre, .welcome-didcy-developer-portal{
  font-size: 15px;
}
.sub-header{
  font-size: 15px;
}
}
.modal-upcoming-updates, .myModal-howToGaGa{
  padding: 2px;
}
.modal-upcoming-updates, #id012, .modal-work-board-4{
  padding: 2px;
}
.modal-content-1, .modal-content-subscribe, .modal-plugins-board,
.modal-didcy-ripa-board,
.modal-content-2, .modal-content-howToGaGa, .modal-content-7, .modal-didcy-fixes,
.modal-content-12, .modal-content-animated-image, 
.modal-content-dispute-policy, .modal-content-industrial-ad-area,
.modal-content-adv-exhibition-platform-table, .modal-content-15, 
.modal-content-20, .modal-content-pricing-table, .modal-content-Terms, 
.modal-content-cookie, .modal-content-security, .modal-content-ceo, 
.modal-content-limit-policy, 
.modal-content-authors, .modal-content-mentors, .modal-content-cookie-full-mode, 
.modal-content-upcoming-updates, .modal-content-subscribe-2, 
.modal-content-payment-services, .modal-content-subscribe-web-policy,
.modal-content-subscribe-stand-policy, .modal-content-investors, 
.modal-content-team, .modal-content-know-team, 
.modal-content-know-developers, .modal-content-host-policy, 
.modal-content-sitemap, .modal-content-advertisement-channels, 
.modal-content-seo-advertisement, .modal-content-content-integration, .modal-content-profile-insight,
.modal-content-companies-only, .modal-content-actors-groups-only, .modal-content-work
, .modal-content-notificator-link, .modal-content-didcy-mini-contacts, .modal-content-didcy-mini-big-logo, 
.modal-content-mini-web-buy-app, .modal-content-mini-text-tutorials, .modal-content-payment-providers, 
.modal-content-caller, .modal-content-work-applicant-camera-board, 
.modal-content-connections, .modal-content-didcy-fixes, .modal-content-didcy-ripa-bank, 
.modal-content-coursery-playground{
	background-color: rgba(0, 0, 0, 1);
}

.modal-content-coursery-playground{
	background-color: white;
}

.button{
   background: black;
}
.impact-list-a{
  background-color: rgba(5, 5, 10, 1);
  border-radius: 2%;
}
@media screen  and (max-width: 1000px){
.impact-list-a{
  width: 90%;
  margin-left: 5%;
}	
}
.w3-modal-content{
  border-radius: 2%;
}
.modal-cookie, .modal-cookie-full-mode
{
  background-color: rgba(0, 0, 0, 0.5);
}
.modal-work{
   background-color: rgba(5, 5, 10, 0.98);
}
.modal-cookie-full-mode{
  background-color: rgba(0, 0, 0, 0.1);
}
.modal-content-dispute-policy, 
.modal-content-cookie, .modal-content-security, .modal-content-ceo, 
.modal-content-limit-policy,
.modal-content-payment-services, .modal-content-subscribe-web-policy,
.modal-content-subscribe-stand-policy, .modal-content-host-policy, 
#text-tutorial, .modal-content-work, .modal-content-15, .modal-content-cookie-full-mode, .modal-content-upcoming-updates{
   padding-left: 50px;
   padding-right: 50px;
   padding-bottom: 50px;
   background-color: rgba(5, 5, 10, 1);
}
.container-chat{
   
}
.modal-content-connections{
   padding-left: 50px;
   padding-right: 50px;	
}
.container-signup, .container-signin{
   padding-right: 50px;
   padding-left: 50px;
   border-radius: 2%;
   border: 1px solid black;
}
.modal-content-signin, .modal-content-signup{
   border-radius: 2%;
   border: 1px solid black;
}
.modal-content-work{
   text-align: justify;
}
@media screen and (max-width: 700px) {
.modal-content-security, .modal-content-cookie, .modal-content-cookie-full-mode, #text-tutorial, 
.modal-content-upcoming-updates, .container-signup, .container-signin, .modal-content-15, 
.modal-content-work, .modal-content-connections{
  top: 0%;
  width: 100%;
  padding-left: 20px;
  padding-right: 20px;
}

.modal-content-cookie-full-mode{
  top: -1.5%;
}
}
button#button-1, button#button-15{
  cursor: pointer;
  padding: 5px;
  font-size: 17px;
  display:  block;
  margin-bottom: 2%;
  width: 50%;
  left: 25%;
}
button#button-15{
  width: 100%;
}
@media screen and (max-width: 800px) {
button#button-1{
  left: 10%;
  width: 85%;
}
.modal-content-signin, .modal-content-signup{
  width: 90%;
}
}
.rater{
  background-color: rgba(5, 5, 10, 1);
}
.modal-content-work-board-4{
  background-color: rgba(200, 200, 200, 1);
}
.modal-cookie, .modal-cookie-full-mode, .modal-know-team, .modal-know-developers, 
.column-developers, .card-developers, .modal-content-know-team, 
.modal-content-know-developers, .modal-content-profile-insight, 
#column-51{
	background-color: rgba(20, 20, 20, 1);
	text-align: justify
}
.modal-content-work{
	text-align: justify
}
.close-connections{z-index: 30;}
/*@media screen and (min-width: 1083px){
  .adv-files-showcase{
	margin-top: -15px;
  }
}*/
.gaga-share, .gaga-decide{
  display: none;
}
.close-didcy-benefits, .close-didcy-guide
, .close-didcy-keywords, .close-didcy-competitive-advantage{
	top: -2%;
	right: 1px
}
   .logo-media{
     width: 50px;
	 display: inline;
	 margin-top: 4px;
   }
p, h1, h2, h3, h4, h5, h6, a, li{
   font-family: sans-serif, arial;
}
ol{
  list-style-type: circle;
  font-weight: normal;
  font-size: 15px;
}
ol li{
  font-weight: normal;
  font-size: 15px;
}
li, p, p#gaga-text-tutorials, p#gaga-text-tutorials-21{
  font-weight: normal;
  font-size: 15px;
}
.coming-soon{
  height:50vh;
}
p{color:white;}
#close-cookie{
  z-index: 30;
}
@media screen and (max-width: 800px){
 #adv-files-showcase{
  margin-top: -3%;
}
}
@media screen and (max-width: 600px){
 #adv-files-showcase{
  margin-top: -7%;
}
}
@media screen and (min-width: 800px){
 #adv-files-showcase{
  margin-top: -3%;
}
}
@media screen and (min-width: 1024px){
 #adv-files-showcase{
  margin-top: -3%;
}
}
/*
.modal-1{
  z-index: 70;
}
.industrial-ad-area, .modal-11{
  z-index: 71;	
}
.modal-chat, .modal-chat-board{
  z-index: 72;
} 
.modal-chat-board{
  z-index: 73;
}
*/
.modal-1{
  z-index: 1.5;
}
h1, h2, h3, h4, h5, h6, li, ul, ol, ol li, ul li, p, div, span, a {
  font-family: "Roboto", sans-serif;
} 
.modal-chat, .modal-11{
  z-index: 19;	
}
.modal-chat-board{
  z-index: 21;
}
.our-mission-col{
	margin-top:13%;
	float:right;
}
.didcy-def-goal{
	font-size: 40px;
}
h3.create-a-space{
	font-size: 30px;
}
h5.create-a-space{
	font-size: 15px;
}
.shape-it-yw{
	float:right;
}
.col-box{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	width: 30%;
	margin-left: 2.5%;
}
.list-spaces-below{
   padding-bottom:3%;
}
.col-box-top{
	margin-top: 5%;
}
.col-box p.create-a-space{
    padding-left: 30px;
    padding-right: 30px;
}
.col-box{
	margin-top: 8%;
}
.open-write-text{
    font-size: 100px;
}
.space-is-all-yours, .no-1{
    font-size: 20px;
}
p.ad-creator-txt{
    font-size: 17px;
}
.ad-img-reg{
	width:100%;
}
.others-testimonials{
	font-size:30px;
}
p.e-services-dbox{
	font-size: 20px;
}
.def-way{
	font-size: 30px;
}
p.def-way-p{
	font-size: 20px;
}
p.def-way-p{
	font-size: 20px;
}
#didcy-just-waiting{
	font-size: 30px;
}
.let-get-ys-2{
	font-size: 20px;
}
#gaga-text-tutorials-2{
	font-size: 15px;
}
.tos{
	font-size: 20px;
}
.space-updates{
	position: relative;
	font-size: 30px;
	padding: 20px;
	text-align: center;
	color: red;
	font-style: italic;
}
@media screen and (max-width: 1115px){
.col-box{
	width: 48%;
	margin-left: 1%;
	margin-right: 1%;
	margin-top: 8%;
}
.col-ft1, .col-st1{
	margin-top: 0%;
}
.col-box-t1-50-marg{
	margin-top: 8%;
}
}
@media screen and (max-width: 992px){
   .write-content{
	 height: 200px;
   }
.open-write-text{
    font-size: 50px;
	
}
}
@media screen and (max-width: 800px){
  .our-mission-col{
	  margin-top:13%;
	  float:left;
  }
.didcy-def-goal{
	font-size: 25px;
}
h3.create-a-space{
	font-size: 20px;
}
h5.create-a-space{
	font-size: 15px;
}
.col-box{
	width: 90%;
	margin-left: 5%;
	margin-right: 5%;
	margin-top: 8%;
}
.col-box-top{
	margin-top: 8%;
}
.col-ft1{
	margin-top: 0%;
}
   .write-content{
	 height: 200px;
   }
.open-write-text{
    font-size: 50px;
	
}
p.space-is-all-yours, p.no-1{
    font-size: 15px;
}
}
@media screen and (max-width: 600px){
.space-is-all-yours, .no-1{
    font-size: 15px;
}
   .write-content{
	 height: 200px;
   }
.open-write-text{
    font-size: 50px;
	
}
.list-spaces-below{
   padding-bottom:1%;
}
.col-box{
	width: 95%;
	margin-left: 2.5%;
	margin-right: 2.5%;
	margin-top: 8%;
}
.col-box-top{
	margin-top: 8%;
}
  .our-mission-col, .shape-it-yw{
	  margin-top:0%;
	  float:left;
  }
.didcy-def-goal{
	font-size: 25px;
}
h3.create-a-space{
	font-size: 20px;
}
h5.create-a-space{
	font-size: 15px;
}
.col-ft1{
	margin-top: 0%;
}
.list-spaces-below{
	font-size: 26px;
}
.everything-begins{
	font-size: 20px;
}
.didcy-value-proposition, .didcy-value-proposition-2, 
.didcy-value-proposition-3{
	font-size: 15px;
}
.what-you-need-to-know, .space-updates{
	font-size: 23px;
	padding-top: 10%;
}
.others-testimonials{
	font-size:23px;
}
.faq{
	font-size: 23px;
}
.testimonials{
	padding-left: 20px;
	padding-right: 20px;
}
.collapsible-container{
	width: 90%;
	position: relative;
	left: 5%;
	right: 5%;
}
p.e-services-dbox{
	font-size: 15px;
}
.newsletters-h{
	font-size: 20px;
}
.glower{
	font-size: 20px;
}
.didcy-keys-dev{font-size: 15px;}
.didcy-keys-dev-log-visibile{font-size: 15px;}
.didcy-keys-dev-copy{font-size: 15px;}
}
@media screen and (max-width: 500px){
   .write-content{
	 height: 130px;
   }
.open-write-text{
    font-size: 30px;
	
}
.notice-2-ad-creators{
	font-size: 15px;
}
p.ad-creator-txt{
	font-size: 12px;
}
.didcy-black-box-headers, .didcy-didcy-work-keys-h{
	font-size: 25px;
}
.fade-testimonials{
	margin-bottom: 8%; 
}
.list-spaces-below{
	font-size: 22px;
}

.what-you-need-to-know, .space-updates{
	font-size: 18px;
}
.others-testimonials{
	font-size:20px;
}
.def-way{
	font-size: 23px;
}
p.def-way-p{
	font-size: 16px;
}
p.def-way-p{
	font-size: 16px;
}
#didcy-just-waiting{
	font-size: 23px;
}
.let-get-ys-2{
	font-size: 15px;
}
}
@media screen and (max-width: 400px){
	.we-def-spaces{
		font-size: 20px;
	}
}
@media screen and (max-width: 380px){
.ad-img-reg{
	height: 50px;
}
}
@media screen and (max-width: 355px){
  .welcome-to-platform-offer{
	  font-size: 25px;
  }
}
@media screen and (max-width: 328px){
   .write-content{
	 height: 120px;
   }
.open-write-text{
    font-size: 23px;
	
}
  .welcome-to-platform-offer{
	  font-size: 20px;
  }
p.space-is-all-yours, p.no-1{
    font-size: 12px;
}
}


@media screen and (min-width: 1116px){	
.col-box-t1{
	margin-top: 0%;
}
/*.col-box-t1-50-marg{
	margin-top: 8%;
}*/
.col-box-t1-ls{
	margin-top: 8%;
}
}
/*#signup, #signin{
   z-index: 1;
}
.topNavg{
	z-index: 2;
}
.modal{
	z-index: 3;
}*/

.space-display-none{
	display: none;
}
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 600px;
	
}
.kindly-subscribe-n{
	padding-left: 20px;
	padding-right: 20px;
}
@media screen and (max-width: 1300px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 700px;
	
}
}
@media screen and (max-width: 1115px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 550px;
	
}
}
@media screen and (max-width: 1003px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 630px;
	
}
}
@media screen and (max-width: 824px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 650px;
	
}
}
@media screen and (max-width: 800px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 500px;
	
}
}
@media screen and (max-width: 700px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 540px;
	
}
}
@media screen and (max-width: 514px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 570px;
	
}
}
@media screen and (max-width: 500px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 650px;
	
}
}
@media screen and (max-width: 423px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 680px;
	
}
}
@media screen and (max-width: 395px){
.didcy-definition-def{
  margin-top: 24%;	
}
}
@media screen and (max-width: 349px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 740px;
	
}
.didcy-definition-def{
  margin-top: 27%;	
}
}
@media screen and (max-width: 328px){
div.list-spaces-offered div.row div.col-new-height div.container-offers{
	height: 830px;
	
}
.didcy-definition-def{
  margin-top: 37%;	
}
}
@media screen and (max-width: 300px){
.didcy-definition-def{
  margin-top: 50%;	
}
}
.no-html-found, .no-html-content-found{
  display: none;
}
 </style>
 <style type="text/css" id="in-css"></style>
</head>
<body id="body">

<main class="container1" id="container-c31">

<!--<img style="display:block" src="didcy.wall.jpg" class="logo" id="logo" value=""/>--><!--images.jpg-->

<div class="topNavg w3-container" id="identity_main_ids">
<div class="topnav" id="myTopnav">
  <a href="https://www.didcy.com" id="didcy" class="didcy didcx" title="Welcome to Didcy" target="_self" alt="Welcome to Didcy" ping="">Didcy</a>
  <a href="https://www.didcy.com" title="Home Sweet Home" id="home" class="home active"><img class="iconic" src="adv.icons/1946433.png"/></a>
  <div class="dropdown" style="z-index:3">
    <button title="hey you, this is what your competitors are upto" class="dropbtn drop">
      <img class="iconic" src="adv.icons/3256216.png"/><!-- download(25).jpg -->
    </button>
    <div class="dropdown-content">
	   <a title="hey, look your competitors are" id="impact" style="cursor: pointer" class="impact" title="Didcy Impact is where you must head to" alt="Didcy Impact" target="_blank" ping=""><img  class="iconic" src="adv.icons/3273644.png"/></a><!-- download(32).jpg -->
    </div>
  </div> 
<div class="dropdown" style="z-index:3">
    <button title="Yeah we found it. Just eavedrop &darr;" class="dropbtn drop">
      <img class="iconic" src="adv.icons/3631153.png"/><!-- download(22).jpg -->
    </button>
    <div class="dropdown-content-s dropdown-content">
 	  <a id="more" class="more" style="cursor: pointer" alt="Click to view THE CORE"><img class="iconic" src="adv.icons/2377884.png"/><!-- <b class="menu-1">&#9776;</b> --></a>
 
      <a id="audio_radio" alt="Audio/Radio Services"  title="needs help with audio/radio ads broadcast" class="audio_radio" style="cursor: pointer" onclick="ServicesNotAvailable('Audio/Radio Services', 
	  'Audio/Radio Service report is at the back side. Please tab/put the mouse on this box to view the report.')"><img class="iconic" src="adv.icons/3167693.png"/></a><!-- download(29).jpg -->

 	  <a id="contacts-links" alt="24/7 contact" onclick="document.getElementById('id012').style.display='block'" class="contacts" style="cursor: pointer"><img class="iconic" src="adv.icons/4213179.png"></a><!-- download(13).jpg -->
 	  
	  <a id="current" alt="Didcy CloudMyAdS notification" class="current notification" style="cursor: pointer"><!-- <i class="fa fa-caret-down"></i> --><span class="badge">0</span>
	  <img class="iconic" src="adv.icons/1156949.png"/><!-- images(4).jpg -->
	  </a>
 	  
	  <a id="search" onclick="document.getElementById('mini-search').style.display='block'" class="search" style="cursor: pointer"><img class="iconic" src="adv.icons/3128287.png"/></a><!-- download(6).jpg -->
    
	</div>
  </div> 
  <div class="dropdown" style="z-index:3" title="24/7">
    <button class="contacting dropbtn" id="contacts-links drop">
      <img class="iconic" src="adv.icons/4213179.png"/><!-- download(13).jpg -->
    </button>
    <div class="dropdown-content">
	  <a id="24-7-contacts" class="24-7-contacts" style="cursor: pointer" onclick="document.getElementById('id012').style.display='block'">
	  <img class="iconic" src="adv.icons/870175.png" title="24/7"/><!-- 24/7 --></a>
    </div>
  </div> 
  <div class="dropdown" title="Get notified of the latest uploaded ads from CloudMyAdS"><!--  style="background-color: #555;border-radius: 2px"  onclick="ServicesNotAvailable('Notification Services', 
	  'Notification Services report is at the back side. Please tab/put the mouse on this box to view the report.')" -->
    <button id="current" class="currenting dropbtn notification drop"><span class="badge">0</span>
      <img class="iconic" src="adv.icons/1156949.png"/><!-- images(4).jpg -->
    </button>
  </div> 
  <div class="dropdown">
    <input type="search" name="" class="search-relocate search-engine dropbtn drop" style="cursor: inherit" id="search-engine" placeholder="Just guess anything ....">
	<button onclick="document.getElementById('mini-search').style.display='block'" class="searching search-pop dropbtn" id="search-board" onclick="">
	<img class="iconic" src="adv.icons/3128287.png"/><!-- download(6).jpg -->
	</button>
  </div>
  <a href="#about" id="links" class="linker"> ? </a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon drop" onclick="AboutUS()">&#9776;</a>
</div>
</div>

<!---DIDCY--->
 <div class="side-nav-container w3-card-4" id="side-nav-container">
  <div class="didcy-min-nav" id="didcy-min-nav" title="Get to work now. Figure out your wants and needs with Didcy Menu">
   
   <!--<img class="iconic" src="http://www.dbacarcollections.ueuo.com/adv.icons/3631153.png-->
   <a id="more-left-side" class="more-left-side" style="cursor: pointer"><img class="iconic" src="adv.icons/2377884.png"/></a>
  
  </div>
  
  <a href="#about" id="links-left-side" class="linker-left-side" title="We know you're curious to know what '?' is. Just tell us what you want to know about '?'"> ? </a>
  
  <div class="didcy-min-nav-contacts" id="didcy-min-nav-contacts" title="Tell us whether you sleep or not and we'll tell you if we do same. So let's get started NOW.">
	  <a id="24-7-contacts-left-side" class="24-7-contacts-left-side" style="cursor: pointer" onclick="document.getElementById('id012').style.display='block'">
	  <img class="iconic" src="adv.icons/870175.png"/><!-- 24/7 --></a>
  </div>
  

  <div class="didcy-mini-logo" id="didcy-mini-logo" title="We know you're curious about this. Just make it quick before they take it down.">
	  <a id="" class="" style="cursor: pointer" onclick="document.getElementById('didcy-mini-big-logo').style.display='block'">
	  <img class="iconic" src="didcy.png"/><!-- 24/7 --></a>  
  </div>
 </div>

  <div class="didcy-mini-big-logo" id="didcy-mini-big-logo">
   <span class="close-didcy-mini-big-logo" id="close-didcy-mini-big-logo" onclick="document.getElementById('didcy-mini-big-logo').style.display='none'">&times;</span>
   <div class="modal-content-didcy-mini-big-logo" id="modal-content-didcy-mini-big-logo">
    <!--<h1 style="color: white" class="didcy-mini-big-logo-title" id="didcy-mini-big-logo-title">DIDCY LOGO</h1>
     iconic logo-big-->
	<img class="logo-pos" src="didcy.png" width="100%" title="You're currently viewing our value and symbol (DIDCY LOGO)"/>
   </div>
  </div>

<!---DIDCY--->


<div class="mini-search w3-modal" id="mini-search" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9);">
  <span onclick="document.getElementById('mini-search').style.display='none'" class="close-mini-search w3-button w3-display-topright" id="close-mini-search">&times;</span>
    <div class="mini-content w3-modal-content w3-animate-top w3-card-4">
      <div class="mini-container w3-container">
	  
       <input type="search" name="" class="search-engine dropbtn drop" style="cursor: inherit" id="search-engine" placeholder="Just guess anything ....">
	   
	  </div>
	 </div>
</div>

<script type="text/javascript" src="adv-search-engine.js"></script>

<div class="bgimg">
<img id="profile" class="didcx-pimg pr-image-hover" alt="Didcy Profile"/>
<!-- <button class="didcx-settings identity-settingsx w3-btn" id="identity-settingsx" onclick="window.location.replace('http://www.dbacarcollections.ueuo.com/gaga/advert.llc')"> -->
<button style="border-radius:8%;background: rgba(0, 0, 0, 1);color:white;/*rgba(50, 50, 50, 1);*/" class="didcx-settings identity-settingsx w3-btn" id="identity-settingsx" onclick="logMeOut()">
  Logout
</button>
<div class="coming-soon">
</div>
</div>

<script type="text/javascript">
 "use strict";
  
 function logMeOut(){
	//document.cookie="GAGA_RELATIONS=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";	      
	document.cookie="GAGA_RESPONSE=;expires=Thu, 01 Jan 1970 00:00:00 UTC;GAGA_CMPO=;path=/";	      
	document.cookie="GAGA_CMPO=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
	document.cookie="GAGA_ADI=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
	//window.location.replace('http://www.didcy.ueuo.com/?id=1');
	window.location.replace('https://didcy.com/?id=1');
	//window.location.replace('https://www.didcy.com/?id=1');
	//window.location.replace('https://www.dbacarcollections.ueuo.com/?id=1');// = 21 

	/*document.cookie="GAGA_RELATIONS=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";	      
	document.cookie=
	"GAGA_RESPONSE=;expires=Thu, 01 Jan 1970 00:00:00 UTC;GAGA_CMPO=;path=/";	      
	document.cookie="GAGA_CMPO=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
	window.location.replace('http://www.dbacarcollections.ueuo.com/advert.llc/?id=1');*/	
	
	/*document.cookie="GAGA_RELATIONS=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";	      
	document.cookie="GAGA_RESPONSE=;expires=Thu, 01 Jan 1970 00:00:00 UTC;GAGA_CMPO=;path=/advert.llc";	      
	document.cookie="GAGA_CMPO=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/advert.llc";
	window.location.replace('http://www.dbacarcollections.ueuo.com/advert.llc/?id=1');*/
 }

</script>

<!-- <div class="contacts-links-container" id="contacts-links-container">
  <span onclick="CloseContacts()" class="close-contacts-links-container" id="close-contacts-links-container">&times;</span>
  <h3>Social Media Handles :</h3>
  <p>~ Facebook : GaGa</p>
  <p>~ Instagram : GaGa</p>
  <p>~ Twitter : GaGa</p>
  <p>~ Youtube : GaGa</p>

  <h3>E-mail :</h3>
  <p>~ info@gaga.com</p>
  
  <h3>Telephone :</h3> 
  <p>~ +23323033933902</p>

</div> -->

<!-- <div class="w3-container"> -->
<!--   <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Animated Modal</button>
 -->
  <div id="id012" class="w3-modal" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id012').style.display='none'" 
        class="w3-button w3-display-topright close-id02">&times;</span>
        <h2>24/7</h2>
      </header>
      <div class="w3-container contact-media">
	    <h2>Media Handles :</h2>
        <!-- <p style="color: black;">Facebook : Didcy</p> -->
		<a href="https://web.facebook.com/Didcy-102782912411037" title="Facebook" target="_blank"><img class="logo-media logo-fb" src="media.handles/3955011.png"/></a>
		<a href="https://www.youtube.com/channel/UClTumF64pj2TxEAzMAVBVSQ" title="Youtube" target="_blank"><img class="logo-media logo-ytb" src="media.handles/3670147.png"/></a>
		<a href="https://www.instagram.com/didcy_company/" title="Instagram" target="_blank"><img class="logo-media logo-ins" src="media.handles/3955024.png"/></a>
		<a href="https://twitter.com/didcyc" title="Twitter" target="_blank"><img class="logo-media logo-tw" src="media.handles/1458121.png"/></a>
		<a href="https://www.pinterest.com/didcycompany" title="Pinterest" target="_blank"><img class="logo-media logo-pin" src="media.handles/5060605.png"/></a>
		<a href="https://www.linkedin.com/in/didcy-company-9073b1239/" title="LinkedIn" target="_blank"><img class="logo-media logo-in" src="media.handles/5940405.png"/></a>
<!--         <p style="color: black;">Instagram : Didcy</p>
        <p style="color: black;">Twitter : Didcy</p>
        <p style="color: black;">Youtube : Didcy</p> -->
		<h2>E-mail :</h2>
        <!-- 542740<p style="color: black;">info@didcy.com</p> -->
		<a class="tooltip media-email" target="_blank" 
		onclick="document.getElementsByClassName('tooltiptext')[0].style.visibility='visibile'">
		<img class="logo-media" title="Email" src="adv.icons/542740.png"/>
		<span class="tooltiptext">info@didcy.com</span></a>
		<h2>Telephone :</h2>
        <!--adv.icons/4213179.png <p style="color: black;">+233265873507</p> -->
        <a class="tooltip media-tel" target="_blank" 
		onclick="document.getElementsByClassName('tooltiptext')[1].style.visibility='visibile'">
		<img title="Telephone" style="margin-bottom: 12%" class="logo-media" src="adv.icons/4213179.png"/>
		<span class="tooltiptext">+233265873507</span></a>
	  </div>
      <footer class="w3-container w3-black">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Find out more about Didcy 24/7" target="_blank" title="Find out more about Didcy 24/7">https://www.didcy.com/more</a></p>
		<!-- <p style="position: absolute;top: 75%;right: 2%">We are here to serve you and no one else</p> -->
      </footer>
    </div>
  </div>
<!-- </div> -->

<!-- <div class="offline-service" id="offline-service">
  <p>Please this service is currently not available.</p>
</div> -->
  <div id="id02" class="w3-modal" style="z-index: 30;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9);">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-black"> 
        <span onclick="CloseStatic()" 
        class="w3-button w3-display-topright close-id02">&times;</span>
        <h2 class="services" id="services">Audio/Radio Services</h2>
      </header>
      <div class="w3-container">
       <!-- <h3>Please this service is currently not available</h3> -->
		<div class="flip-box">
		  <div class="flip-box-inner">
			<div class="flip-box-front">
			  <h2 id="services-not-available" class="services-not-available" style="padding-top: 5%" onmouseover="flipBoxBack()" onclick="flipBoxBack()">Audio/Radio Service report is at the back side. Please tab/put the mouse on this box to view the report.</h2>
			</div>
			<div class="flip-box-back" onmouseover="flipBoxFront()" onclick="flipBoxFront()">
			  <h2 class="back-side-service-report" id="back-side-service-report" style="padding-top: 5%">Please this service is currently not available.</h2>
			  <div class='loader' id="loader"></div>
			</div>
		  </div>
		</div>
      </div>
      <footer class="w3-container w3-black">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Find out more about Didcy Audio/Radio" id="didcy-cms" target="_blank" title="Find out more about Didcy Audio/Radio">https://www.didcy.com/more</a></p>
      </footer>
    </div>
  </div>
  
<div id="myModal-notificator" class="modal-notificator overlay" style="overflow-y: auto">
  <span class="close-notificator closebtn" id="close-notificator">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-notificator" id="modal-content-notificator">
   <h1 style="color: white;text-align: center">Notifications</h1>
  </div>
</div>

<div id="myModal-notificator-link" class="modal-notificator-link">
  <span class="close-notificator-link closebtn" id="close-notificator-link">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-notificator-link" id="modal-content-notificator-link">
   <h1 style="color: white;text-align: center" class="notice-link-header" id="notice-link-header"></h1>
 
  </div>
  <div class="caption-notificator-link" id="caption-notificator-link">Didcy Note</div>
</div>  
 
<div class="modal-ad-tasks" id="modal-ad-tasks">
 <span class="close-ad-tasks" id="close-ad-tasks">&times;</span>
 <div class="modal-content-ad-tasks" id="modal-content-ad-tasks">
  Please we're currently available for only audio and animated ads. Kindly contact us 
  at +233265873507 or email us at tasks@didcy.com or help@didcy.com for your audio 
  and or animated ads. We are the best in providing you with these services. 
  Just try us now and see for yourself. <b>Your ads, Our Mission</b>. Thank You.
 </div>
</div>
 
<script>
 "use strict";
 var clickId = 0;
 
 function flipBoxFront(){
    document.getElementsByClassName("flip-box-inner")[0].style.transform = "rotateY(0deg)";
 }
 
 function flipBoxBack(){
    document.getElementsByClassName("flip-box-inner")[0].style.transform = "rotateY(180deg)";
 }

</script>

<div class="alert success" id="alert-box">
  <span class="close-alert-box" style="display: none" id="close-alert-box">&times;</span>  
  <p id="info-error" class="info-error"></p>
</div> 

<div id="myModal-alert-box" class="modal-alert-box">

  <!-- Modal content -->
  <div class="modal-content-alert-box">
    <div class="modal-header-alert-box">
      <h2 class="didcy-error" style="color: white" class="services">Didcy</h2>
    </div>
    <div class="modal-body-alert-box">
      <p style="color: black;text-align:center;" id="error-line" class="error-line"></p>
      <!--<p>Some other text...</p>-->
    </div>
    <div class="modal-footer-alert-box">
      <h3 class="didcy-error didcy-err-0" style="color: white">Find out more about Didcy at 
	  <a href="https://www.didcy.com" class="didcy-err" alt="Find out more about Didcy" target="_blank" 
	  title="Find out more about Didcy ">
	  https://www.didcy.com.</a></h3>
    </div>
  </div>

</div>
 
 <!-- <script type="text/javascript" script-id="00000000000000000" src="adv-offline-services.js"></script> -->

<div id="id01" class="modal-signup modal-signup-b">
  <span onclick="document.getElementById('id01').style.display='none'" class="close-signup" id="close-signup" title="Close Modal">&times;</span>
  <form class="modal-content-signup" id="modal-content-signup" method="post">
    <div class="container-signup">
      <h1 class="signup-header" id="signup-header">Didcy Sign Me-Up</h1>
      <p class="please-fill" id="please-fill">Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Username" class="input-signup-txt-name" id="input-signup-txt-name"  name="username" required>


      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" class="input-signup-txt" id="input-signup-txt"  name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" maxlength="50" class="input-pwd-signup" id="input-pwd-signup" placeholder="Enter Password" name="psw" required>
	 <label class="container-checkbox">Show Password 
	  <input type="checkbox" onclick="ShowPassword(document.getElementById('input-pwd-signup'))">
	  <span class="checkmark"></span>
	</label>        
	  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" maxlength="50" class="input-pwd-signup-2" id="input-pwd-signup-2" placeholder="Repeat Password" name="psw-repeat" required>
      
	 <label class="container-checkbox">Show Password 
	  <input type="checkbox" onclick="ShowPassword(document.getElementById('input-pwd-signup-2'))">
	  <span class="checkmark"></span>
	</label>  
	  
	 <!--<br>-->
	 <label style="display: none"><b>Please actors should not check any of the <q>YES</q> below. Thank You</b></label>
	 <!--<br><br>-->
	 
	 <label for="industry" id="companies"><b title="Please only non-advertising agencies">Are you a company? [Companies only]</b></label>
	 <label class="container-checkbox" id="cmpOnly" title="Please only non-advertising agencies">Yes
	  <input type="checkbox" id="companiesOnly">
	  <span class="checkmark"></span>
	</label>
	
	 <label for="advertizers" id="advertizers"><b>Are you an advertising company or a solo advertizer? [Advertizers only]</b></label>
	 <label class="container-checkbox" id="advOnly">Yes
	  <input type="checkbox" id="advertizersOnly">
	  <span class="checkmark"></span>
	</label>
	  
    <label for="industry"><b>Select Your Ad Industry</b></label>
	<div class="custom-select" style="width:100%;">
	  <select id="selected-ad-industry">
		   <option>Select Your Industry:</option>
		   <option name="">Mechanic</option>
		   <option name="">Electronic</option>
		   <option name="">Tech</option>
		   <option name="">Agriculture</option>
		   <option name="">Health</option>
		   <option name="">All</option>
	  </select>
	</div>

	<!-- <br> -->
    <label for="company-country" style="display: none"><b>Select Company's Country of Registration [Companies Only]</b></label>
	<div class="custom-select sel-company-country" style="display: none;width:100%;">
	  <select id="selected-company-country">
		   <option>Select Company's Country of Registration:</option>
		   <option name="">USA</option>
		   <option name="">United Kingdom</option>
		   <option name="">Arab</option>
		   <option name="">China</option>
		   <option name="">Australia</option>
		   <option name="">Ghana</option>
		   <option name="" selected>Country of Registration</option>
	  </select>
	</div>

<!--       <select id="industry-type" class="industry-type" required>
	   <option name="">Mechnanic</option>
	   <option name="">Electronic</option>
	   <option name="">Tech</option>
	   <option name="">Agriculture</option>
	   <option name="">Health</option>
	   <option name="">Electronic</option>
	   <option name="">All</option>
	  </select> -->
     <br>

      <label for="fee" id="fee-label" style="display:none"><b>Fee per second for an ad ($) [Advertizers only]</b></label><!-- &amp; Actors-->
      <input style="display:none" type="number" class="fee" id="fee" placeholder="Fee per second for an ad ($)" name="fee" required>
		       
	 <label for="industry"><b>Are you a company? [Companies only]</b></label>
	 <label class="container-checkbox">Yes
	  <input type="checkbox" id="companiesOnly">
	  <span class="checkmark"></span>
	</label>          
      
      <label class="container-checkbox"> Remember me
        <input type="checkbox" id="remember" class="remember"> <!-- name="remember" style="margin-bottom:15px"> Remember me -->
        <span class="checkmark"></span>
	  </label>

      <p class="terms-conditions" id="terms-conditions" >By creating an account you agree to our 
	  <a id="gaga-transparent-1" class="didcy-term-policy-sign" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" id="cancelbtn" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="signupbtn" id="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<div id="id022" class="modal-signin modal-signup-b">
  <span onclick="document.getElementById('id022').style.display='none'" class="close-signup" id="close-signup" title="Close Modal">&times;</span>
  <form class="modal-content-signin" id="modal-content-signin" method="post">
    <div class="container-signin">
      <h1 class="signup-header" id="signup-header">Didcy Sign Me-In</h1>
      <p class="please-fill" id="please-fill">Please fill in this form to sign in to your account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" class="input-signin-txt" id="input-signin-txt"  name="email-2" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" maxlength="50" class="input-pwd-signin" id="input-pwd-signin" placeholder="Enter Password" name="psw-2" required>
 
 	 <label class="container-checkbox">Show Password 
	  <input type="checkbox" onclick="ShowPassword(document.getElementById('input-pwd-signin'))">
	  <span class="checkmark"></span>
	</label>  
 
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" maxlength="50" class="input-pwd-signin-2" id="input-pwd-signin-2" placeholder="Repeat Password" name="psw-repeat-2" required>
 
	 <label class="container-checkbox">Show Password 
	  <input type="checkbox" onclick="ShowPassword(document.getElementById('input-pwd-signin-2'))">
	  <span class="checkmark"></span>
	</label>  
 
      <label class="container-checkbox"> Remember me
        <input type="checkbox" id="remember-2" class="remember-2" name="remember-2"> <!-- name="remember" style="margin-bottom:15px"> Remember me -->
        <span class="checkmark"></span>
	  </label>

      <p class="terms-conditions" id="terms-conditions" >By sign in to your account you agree to our 
	  <a id="gaga-transparent-2" class="didcy-term-policy-sign-2" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" id="cancelbtn" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signinbtn" id="signinbtn">Sign In</button>
      </div>
    </div>
  </form>
</div>

<input type="hidden" value="" class="hidden" id="hidden">

 <div id="resx" style="z-index: 20">
  <h2 style="visibility:hidden;font-weight: bolder;padding-left:10px;letter-spacing: 3px;" class="didcx-welcome" id="didcx-welcome">DIDCY - WE'VE GOT YOUR BACK</h2>
</div>

<div id="adv-files" class="resx adv-files-1">
 <form id="adv-files">
 <input type="file" class="custom-file-input" name="uploads[]" id="uploads" multiple enctype="form/multipart-data">
 <input type="submit" name="submit" class="upload" value="Upload" id="upload" title="Get your ads viewed first before your competitors">
 </form>
 
</div>


<!-- <div id="resx" style="z-index: 20">
  <h2 style="font-weight: bolder;padding-left:10px;letter-spacing: 3px;" class="didcx-welcome" id="didcx-welcome">DIDCY - WE'VE GOT YOUR BACK</h2>
</div> -->

<div class="w3-container" id="res">
<!-- <div id="resx" style="z-index: 20">
  <h2 style="font-weight: bolder;padding-left:10px;letter-spacing: 3px;" class="didcx-welcome" id="didcx-welcome">DIDCY - WE'VE GOT YOUR BACK</h2>
</div> -->

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <div class="modal-content" id="img01">
    <h2 class="welcome-to-didcy-core" style="text-align:center">The Core</h2>
	<div class="row">
	  <div class="column-3">  
 
	  <button class="button" id="gaga-subscription">Didcy Include</button><!--Didcy Subscription-->
	  <button class="button" id="gaga-ratings">Didcy Rate</button><!--Didcy Ratings-->
	  <button class="button" id="howtogaga">Didcy Find</button><!--How to Didcy?-->
	  <button class="button" onclick="document.getElementById('id012').style.display='block'">Didcy us?</button>
	   <!--<button class="button" id="gaga-react">Didcy React</button>   -->
	   <button class="button" id="gaga-apply" style="display: block">Didcy Dev</button>
	   
	  </div>
	  
    <div class="column-3">

	  <button class="button" id="tvList" style="display: none">Didcy List</button><!--Didcy TV List-->
	  <button class="button" id="didcy-exhibition-platform">Didcy Exhibit</button><!--Didcy Ads Exhibition Platform-->
      <button class="button" id="didcy-books" style="display: block">Didcy Books</button><!-- disabled title="This button is disabled at the moment" Didcy Ads Books-->
      <button class="button" id="didcy-course"  onclick="Open('Didcy Course', 1)">Didcy Course</button><!--Didcy Ads Books-->
	  <button class="button" id="gaga-share" style="display: none">Didcy Share</button>
	  <button class="button" id="gaga-transparent">Didcy Transparent</button><!--Didcy Terms & Conditions-->      
  
	  <button class="button" id="gaga-react">Didcy React</button>  
  
    </div>
	
  </div>
  </div>
  <div id="caption"></div>
</div>

   <div id="modal-other-e-services" class="w3-modal modal-other-e-services" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)">
    <div id="modal-content-other-e-services" class="modal-content-other-e-services w3-modal-content w3-animate-left w3-card-4 id012-inner-box">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('modal-other-e-services').style.display='none'" 
        id="close-other-e-services" class="w3-button w3-display-topright close-other-e-services">&times;</span>
        <h2 class="didcy-black-box-headers">Didcy E-Services</h2>
      </header>
      <div class="w3-container contact-media">
	    <p class="e-services-dbox" style="color: black;">Didcy also provides E-Services
		 to all users. Didcy E-Services can be found on our menu.
		 Didcy Course is one example of our E-Services we give freely to you. Check them out <b><i>NOW</i></b> &amp; start <b><i>SHOPPING</i></b>.
        </p>
      </div>
      <footer class="w3-container w3-black id012-ft">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Find out more about Didcy E-Services" target="_blank" title="Find out more about Didcy E-Services">https://www.didcy.com/more</a></p>
		<!-- <p style="position: absolute;top: 75%;right: 2%">We are here to serve you and no one else</p> -->
      </footer>
    </div>
  </div>  

<div style="padding-top: 0;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)" class="w3-modal modal-newsletters" id="modal-newsletters">
    	<div style="background-color: rgba(0, 0, 0, 0.0);border:none;" class="w3-modal-content w3-card-4 id012-inner-box w3-animate-right modal-content-newsletters" id="modal-content-newsletters">     
	 <header class="w3-container w3-black"> 
        <span 
        class="w3-button w3-display-topright close-newsletters" id="close-newsletters">&times;</span>
        <h2 style="text-align: center" class="didcy-newsletters-h">Didcy Newsletters</h2>
      </header>
	<div class="w3-container" style="background-color: rgba(0, 0, 0, 0)" id="modal-content-newsletters">
	<form class="form-newsletter" action="" id="form-newsletter-2" method="post">
	  <div class="container-newsletter">
		<h2 class="glower">Subscribe to our Newsletters</h2>
		<p>Subscribing to our newsletters makes it possible to be the first 
		of all your competitors to see what's making the industry go crazy. Make it a priority to subscribe, so you can have unlimited
		updates. Your industry, Your Life. Thank you.</p>
	  </div>

	  <div class="container-newsletter">
		<input type="text" placeholder="Name" name="name" class="name-newsletter" id="name-newsletter-2" required>
		<input type="text" placeholder="Email address" name="mail" class="email-newsletter" id="email-newsletter-2" required>

        <br/>
		<label class="container-checkbox"> Daily Newsletter
		  <input type="checkbox" checked="checked" name="subscribe" class="checkbox-newsletter" id="checkbox-newsletter-2">
		  <span class="checkmark"></span>
		</label> 		
	  </div>

	  <div class="container-newsletter">
		<input type="submit" value="Subscribe" class="submit-newsletter" id="submit-newsletter-2">
	  </div>
	</form>
	
  </div>
	
	</div>
</div>

  <div id="write" class="w3-modal" style="z-index:55;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9);">
    <div class="w3-modal-content w3-animate-bottom w3-card-4 write-content">
	  <div class="w3-container write-r" id="write-r">
	   <span class="close-write" onclick="document.getElementById('write').style.display='none'">&times;</span>
	   <p class="open-write-text" id="open-write-text" style="padding: 10px;padding-left: 2px;padding-right:2px;color: red;text-align: center;font-weight:bolder"></p>
	  </div>
    </div>
  </div>

<!--Didcy Work Key-->
<div style="padding-top: 0;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)" class="w3-modal modal-didcy-work-keys" id="modal-didcy-work-keys">
    <div class="w3-modal-content w3-card-4 id012-inner-box w3-animate-top modal-content-didcy-work-keys" id="modal-content-didcy-work-keys">     
	 <header class="w3-container w3-black"> 
        <span 
        class="w3-button w3-display-topright close-didcy-work-keys" id="close-didcy-work-keys">&times;</span>
        <h2 style="text-align: center;color:white" class="didcy-didcy-work-keys-h">Didcy Keys</h2>
      </header>
	 <div class="w3-container" id="modal-content-didcy-work-keys">
	   <h3 class="didcy-keys-dev" style="color: black;font-weight: bolder">Didcy Keys helps all Didcy Developers have access to Didcy Developer Room.</h3>
	   <h4 class="didcy-keys-dev-log-visibile" style="color: black">Please we presume that you already know what to do and how to operate these keys and get 
	   the Login visible.</h4>
	   <h4 class="didcy-keys-dev-copy" style="color: black">Please <b style="color: dodgerblue">COPY</b> the random string of 
	   alphanumeric characters below and paste it into the proper channel accordingly. Thank you.</h4>
      
	  <!--<p style="color: white;text-align: center;color:black;font-weight: bolder" id="randomize"></p>-->
	   <div style="background: white;text-align:justify;width:100%;" class="keys">
	     <p style="text-align: justify;color:black;font-weight: bolder" id="randomize"></p>
	   </div>
	 </div>
      <footer class="w3-container w3-black id012-ft">
        <p style="color: white">Find out more about us here <a href="https://www.didcy.com/more.php" alt="Find out more about Didcy Keys" target="_blank" title="Find out more about Didcy Keys">https://www.didcy.com/more</a></p>
		<!-- <p style="position: absolute;top: 75%;right: 2%">We are here to serve you and no one else</p> -->
      </footer>
	</div>
</div>

  <div id="abt-us" class="w3-modal" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)">
    <div class="w3-modal-content w3-animate-bottom w3-card-4">
      <header class="w3-container w3-blue"> 
        <span onclick="CloseAbtUS()" 
        class="w3-button w3-display-topright close-abt-us">&times;</span>
        <h2 style="text-align:center">About US</h2>
      </header>
      <div class="w3-container abt-us">
     <p style="color:black;text-align: center"><b>Didcy, Your No. 1 Space Provider.</b></p>
     <p style="color:black;text-align: justify">Didcy is a space provision platform where users can cloud, sell, build, host and do more.</p>
	 
	 <p style="color:black;text-align: justify">We offer our digital spaces for absolutely <b><i style="color:red">FREE</i></b> of Charge. <b>No fees, No Charges</b>. Just <b><i style="color:red">FREEEEEEE</i></b>.</p>
	 
	 <p style="color:black;text-align: justify">All you need is to <b><i>keep spacing more and we keep providing more</i></b>. That's why we say, <b><i>Space more, Free more.</i></b></p>
	 
	 <p style="color:black;text-align: justify">Didcy is also coming in with great products and services to it's platform, so watch 
	 out for all your missen solutions and don't hesitate to subscribe to our newsletters to be the first to get notified. </p>
	 
	 <p style="color:black;text-align: justify">Our mission is to offer the best quality products and services to you.</p>

	 <p style="color:black;text-align: justify">So make Didcy your number go to because we are the way forward. </p>

	 <p style="color:black;text-align: justify">We are the best affordable market you can find out there.</p>

	 <!--<p style="color:black;text-align: justify">What do you want to sell, buy, host, store, develop, grow, produce or get. We got you all covered. </p>-->

	 <p style="color:black;text-align: justify">Just knock and we will widely open, search and we'll gladly help you find, and then ask and let's see what we can get you.</p>

	 <p style="color:black;text-align: justify">Start with us <b><i>NOW</i></b> and keep more.</p>

	  </div>
      <footer class="w3-container w3-blue">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Find out more about Didcy" target="_blank" title="Find out more about Didcy">https://www.didcy.com/more</a></p>
		<!-- <p style="position: absolute;top: 75%;right: 2%">We are here to serve you and no one else</p> -->
      </footer>
    </div>
  </div>

  <div id="keywords" class="w3-modal" style="z-index:55;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)">
    <div class="w3-modal-content w3-animate-bottom w3-card-4">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('keywords').style.display='none'" 
        class="w3-button w3-display-topright close-keywords" id="close-keywords">&times;</span>
        <h2  class="didcy-black-box-headers"style="text-align:center">Didcy Keywords</h2>
      </header>
      <div class="w3-container keywords">
	   <p style="color:black">To know more about Didcy hidden features, kindly 
	   type in any of the following texts into the search engine. 
	   </p>
	   <p style="color:black"><b>--didcy--keywords-- or $#-didcy-keywords-@@$.</b></p>
	   <p style="color:black">Thank you.</p>
	  </div>
      <footer class="w3-container w3-black">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Find out more about Didcy Keywords" target="_blank" title="Find out more about Didcy Keywords">https://www.didcy.com/more</a></p>
		<!-- <p style="position: absolute;top: 75%;right: 2%">We are here to serve you and no one else</p> -->
      </footer>
    </div>
  </div>

<!--Didcy Work Key-->
<div class="modal-didcy-benefits overlay" id="modal-didcy-benefits" style="overflow-y:auto;text-align:justify">
  <span class="close-didcy-benefits" id="close-didcy-benefits">
   <a href="javascript:void(0)">&times;</a>
  </span>
	<div class="modal-content-didcy-benefits" id="modal-content-didcy-benefits">
     <h1 class="welcome-didcy-benefits" style="text-align: center;color: white">Welcome to Didcy Benefits</h1>
     <h2 class="using-didcy" style="color: white">Using Didcy </h2>
	 <div class="didcy-benefits" id="didcy-benefits" style="text-align:justify">
	  <ol type="1">
		<li style="color:white">You can directly host multiple websites/services as Didcy feature(s) or plugin(s) without the need to buy 
		any domain or pay for any hosting services.</li>
		<br><li style="color:white">Allows developers to upload, test, run their programs and get used or deployed by their target users.</li>
		<br><li style="color:white">Allows users(that is, companies and designers) to keep records or store all their ads at a single cloud location, where every single piece of asset get secured.</li>
		<br><li style="color:white">Allows advertizers to advertize their products and services using our platform and it's features.</li>
		<br><li style="color:white">Allows companies and advertizers to secure easy, quick and fast OSAED or advertizing deals without the need for each entity to be
		physically present using Didcy Exhibit(find and offer deal services).</li>
		<br><li style="color:white">Allows users to transact highly secured data files from one advertizer or company to another without any data breach.</li>
		<br><li style="color:white">Allows users to directly create/develop/produce their own ads on the platform for free without the need to install any third-party 
		application on your localhost or computer and then uploading to the platform's cloud storage system(if opted) or use any third-
		party website for creating your ads and uploading them to our platform(if opted).</li>
		<br><li style="color:white">Allows developers to periodically keep track of their uploaded programs running on the platform.</li>
		<br><li style="color:white">Allows developers to directly create/develop/program/code programs on the platform by using our D-CAN online IDE with extremely 
		incredible addon features or tools. Come and SEE for yourself.</li>
		<br><li style="color:white">Allows users to make quick, fast and easy search.</li>
		<br><li style="color:white">Allows users(esp. educators or students or even businesses) to get incredible intiutive education or knowledge that are only 
		targeted to the current demand in the market and in the future through the use of Didcy Course(also known as Darcet).</li>
		<br><li style="color:white">Allows users(esp. book traders) to trade(sell and buy) super powerful knowledgeable books or educational materials for their 
		own unique purpose.</li>
		<br><li style="color:white">Allows users(esp. bet enthusiast) to bet directly from the platform by using RipaBet or D-BET.</li>
		<br><li style="color:white">Allows users(esp. bet enthusiast) to request for bet loans directly from the platform  by using RipaBank.</li>
		<br><li style="color:white">Allows users to do safe e-banking directly from the platform by using DidcyBank.</li>
		<br><li style="color:white">Allows users(that is, educators(esp. tertiary(universities) students and teachers)) to share anything from ideas to task,
		hire project or assignment helpers to help them work on their project or assignments with or without payment inclusion and more.</li>
		<br><li style="color:white">Allows users(esp. video and film producers) to directly create and produce <b>quality</b> video or film contents from the platform by using 
		Pick.</li>
		<br><li style="color:white">Allows users to download, stream, convert and do more media services by using Crym.</li>
		<br><li style="color:white">Allows users to get newsletter or mailing services for free.</li>
		<br><li style="color:white">Allows users to deploy(play with) or use any of the plugins available on the platform for their own gain.</li>
		<br><li style="color:white">Allows users to directly subscribe to any of our incredible free to low-cost domain and hosting plans or services per the user's choice.</li>	  
		<br><li style="color:white">Allows users to directly provide or get any consultancy services from/on this very platform.</li>	  
	  </ol>
      <p style="text-align:justify;padding-left:15px;padding-right:10px;">Our benefits are enormous to the extend that we usually loose track of some. 
	  But with our state-of-the-art cutting edge technology, we're able to keep complete track of 
	  every little detail and still maintain great momentum.
	  <p style="text-align:justify;padding-left:15px;padding-right:10px;">What do you want to provide or get? We got you covered.</p>
	  <p style="text-align:justify;padding-left:15px;padding-right:10px;">Just mention it and we'll make it work like magic.</p>
	  <p style="text-align:justify;padding-left:15px;padding-right:10px;">Let us know what we missed and we'll get it covered in a few seconds.</p>
	  <p style="text-align:justify;padding-left:15px;padding-right:10px;">Start with us <b>NOW</b> &amp; keep more.</p>
	  <p style="text-align:justify;padding-left:15px;padding-right:10px;"><b><i>Didcy.</i></b></p>
	 </div>
	</div>
</div>

<div style="overflow-y:auto;text-align:justify" class="modal-didcy-keywords overlay" id="modal-didcy-keywords">
  <span class="close-didcy-keywords" id="close-didcy-keywords">
   <a href="javascript:void(0)">&times;</a>
  </span>
	<div class="modal-content-didcy-keywords" id="modal-content-didcy-keywords">
     <h1 class="welcome-didcy-keywords" style="text-align: center;color: white">Welcome to Didcy Keywords</h1>
     <h2 class="using-didcy" style="color: white">Using Didcy Keywords</h2>
	 <div class="didcy-keywords" id="didcy-keywords" style="text-align:justify">
        <p style="color:white">Didcy Keywords is a set of predefined keywords/words selected to be used in didcy search engines. These keywords cannot be used as file
		names or anyother thing. </p>
		<p style="color:white">If you are considering naming any of the files or assets you're about to upload as any of these keywords, then you'll find your 
		search not returning any results only in relation to these predefined words. Any other custom filenames or words can be used above from these 
		words. </p>
		<p style="color:white">So please take note of these keywords. </p>

		<p style="color:white">The following datalist provides info on the list of keywords used in Didcy Search Engines. Kindly invest a little of your time in knowing and understanding 
		these keywords, their syntax and meanings.</p>

	   <ol type="1">
		<li style="color:white">@@#--left-left-position-display-block : displays or shows the vertical-side navigation bar at the left side of 
		the page if not visible.</li>
		<br><li style="color:white">@@#--left-left-position-display-none : renders the vertical-side navigation bar invisible.</li>
		<br><li style="color:white">CLK, CLKS, CLEAR KEYS, Clear Keys, CLEAR Keys, clear Keys, 
		clear keys, clk, clks : it renders the small grey button(namely 'Keys') that gets displayed at the right-side of the page 
		invisible if made visible.</li>
		<br><li style="color:white">keys, dkeys, didcy keys, DIDCY KEYS, DIDCY Keys, 
		didcy Keys, didcy KEYS, DKEYS, dkys, DKYS, DidcyKeys, Didcykeys, didcykeys : 
		it renders the small grey button(namely 'Keys') visible if made invisible.</li>
		<br><li style="color:white">
		 #ADC9C03-E9E9-W09E00TR-R998W122-303949KDD-49404838-390 : 
		 it renders Smile modal box(this modal box is designed for only developers or creators) visible 
		 above from the string of alphanumeric characters displayed in Didcy Keys modal box which also achieves
		 the same rendering.</li>
		<br><li style="color:white">--didcy--ben-- or $#-didcy-benefits-@@$ : 
		it pops up or displays Didcy Benefits(the content displayed here, provides detailed info on the
		benefits of using Didcy) dialog box or modal box.</li>
		<br><li style="color:white">--didcy--guide-- or $#-didcy-guide-@@$ : 
		it pops up or displays Didcy Life Guide(the content displayed here, provides incredible 
		data on how to manage your life) dialog box or modal box.</li>
		<br><li style="color:white">--didcy--keywords-- or $#-didcy-keywords-@@$ : 
		it pops up or displays Didcy Keywords(the content provided here, gives in-depth understanding on 
		didcy keywords, it's syntax and meaning) dialog box or modal box.</li>
		<br><li style="color:white">--didcy--cmp-adv or $#-didcy-cmp-adv-@@$ :
		it pops up or displays Didcy Competitive Advantage(the content provided here, shows the 
		advantages Didcy has over it's competitors and why is vital to know and use Didcy for 
		your works) dialog box or modal box.</li>
		<br><li style="color:white">$%%--about-us--%%$ or --didcy--about--us-- or about--us or 
		--didcy--about-us-- or $searchEngine or --about-us-- or  
	    --didcy--abt-us-- or abt--us or --about--us-- or --abt--us-- or
		--didcy--abtus-- or --didcy--aboutus-- or about us : these keywords are meant to 
		display the <q>About US</q> dialog box that got displayed on page load right after
		<q>Didcy Keys</q> dialog box.
		</li>
		<br><li style="color:white">didcy-platforms-offer or $@@--didcy-platforms-offer--@@$ : 
		these keywords are used to display the modal box containing the words <q>Welcome to 
		Didcy</q> in blue(header) and <q>The Space is all yours. Start exploring NOW with 
		Your no.1 BEST SPACE PROVIDER</q> in black(body).</li>
		<br><li style="color:white">didcy-ad-creators or didcy ad creators or #@-%didcy-ad-creators-000-sc : these keywords 
		are used to display the modal box containing the words <q>Didcy Signup Reminder</q> in blue(header) and 
		<q>Please all interested ad creator or designer persons or companies should kindly check here when signing up
		</q> and <q> &darr; </q> and a <q>checkbox image</q> in black(body).</li>
	  </ol>		
	  <p style="color:white;padding-left: 10px;padding-right: 10px">
		 For more enquiries, kindly contact us by looking up our contact 
		 informations at either <q>Contacts</q> <img class='iconic' src='adv.icons/870175.png'/> in the top navigation bar of the 
		 front page or at <q>Didcy Find</q> under <q>Menu or More Services or The Core</q>
		 <img class='iconic' src='adv.icons/2377884.png'/>. We will be availabile 
		 24/7 just to listen to only and only you. Have a nice Didcy visit.
		 <br><br>Thank you.
		</p>
	 </div>
	 
	</div>
</div>

<div style="overflow-y: auto" class="modal-didcy-guide overlay" id="modal-didcy-guide">
  <span class="close-didcy-guide" id="close-didcy-guide">
   <a href="javascript:void(0)">&times;</a>
  </span>
	<div class="modal-content-didcy-guide" id="modal-content-didcy-guide">
     <h1 class="welcome-didcy-guide" style="text-align: center;color: white">Welcome to Didcy Guide</h1>
     <h2 class="using-didcy" style="color: white">Using Didcy Guide</h2>
	 <div class="didcy-guide" id="didcy-guide" style="text-align:justify">
	  <ol type="1">
		<li style="color:white">You can directly host multiple websites/services as a program plugin(s) or feature(s) or Didcy feature(s) or plugin(s) without the need to buy 
		any domain or pay for any hosting.</li>
		<br><li style="color:white">Allows developers upload, test, run their programs and get used or deployed by the target users.</li>
		<br><li style="color:white">Allows users(that is, companies) to keep records or store all their ads at a single cloud location, where every single piece of asset get secured.</li>
		<br><li style="color:white">Allows advertizers to advertize their products and services using our platform and it's features.</li>
		<br><li style="color:white">Allows companies and advertizers to secure easy, quick and fast OSAED or advertizing deals without the need for each entity to be
		physically present using Didcy Exhibit(find and offer deal services).</li>
		<br><li style="color:white">Allows users to transact highly secured data files from on advertizer or company to another without any 99.99% data breach.</li>
		<br><li style="color:white">Allows users to directly create/develop/produce their own ads on the platform for free without the need to install any third-party 
		application on your localhost or computer and then uploading to the platform's cloud storage system(if opted) or use any third-
		party website for creating your ads and uploading them to our platform(if opted).</li>
		<br><li style="color:white">Allows users to developers to periodically keep track of their uploaded programs running on the platform.</li>
		<br><li style="color:white">Allows developers to directly create/develop/program/code programs on the platform by using our D-CAN online IDE with extremely 
		incredible addon features or tools. Come and SEE for yourself.</li>
		<br><li style="color:white">Allows users to make quick, fast and easy search.</li>
		<br><li style="color:white">Allows users(esp. educators or students or even businesses) to get incredible intiutive education or knowledge that are only 
		targeted to the current demand in the market and in the future through the use of Didcy Course(also known as Darcet).</li>
		<br><li style="color:white">Allows users(esp. book traders) to trade(sell and buy) super powerful knowledgeable books or educational materials for your 
		own unique purpose.</li>
		<br><li style="color:white">Allows users(esp. bet enthusiast) to bet directly from the platform by using RipaBet or D-BET.</li>
		<br><li style="color:white">Allows users(esp. bet enthusiast) to request for bet loans directly from the platform  by using RipaBank.</li>
		<br><li style="color:white">Allows users to do safe e-banking directly from the platform by using DidcyBank.</li>
		<br><li style="color:white">Allows users(that is, educators(esp. tertiary(universities) students and teachers)) to share anything from ideas to task,
		hire project or assignment helpers to help them work on their project or assignments with or without payment inclusion and more.</li>
		<br><li style="color:white">Allows users(esp. video and film producers) to directly create and produce video or film contents from the platform by using 
		Pick.</li>
		<br><li style="color:white">Allows users to download, stream, convert and do more media services by using Crym.</li>
		<br><li style="color:white">Allows users to get newsletter or mailing services for free.</li>
		<br><li style="color:white">Allows users to deploy(play with) or use any of the plugins available on the platform for their own gain.</li>
		<br><li style="color:white">Allows users to directly subscribe to any of our incredible free to low-cost domain and hosting plans or services per the user's choice.</li>	  
	  </ol>
	 </div>
	</div>
</div>

<div style="overflow-y: auto" class="modal-didcy-competitive-advantage overlay" id="modal-didcy-competitive-advantage">
  <span class="close-didcy-competitive-advantage" id="close-didcy-guide">
   <a href="javascript:void(0)">&times;</a>
  </span>
	<div class="modal-content-didcy-competitive-advantage" id="modal-content-didcy-competitive-advantage">
     <h1 class="welcome-didcy-cmp-adv" style="text-align: center;color: white">Welcome to Didcy Competitive Advantage</h1>
     <h2 class="using-didcy" style="color: white">Competitive Insight</h2>
	 <div class="didcy-competitive-advantage" id="didcy-competitive-advantage" style="text-align:justify">
	  <ol type="1">
		<li style="color:white">You can directly host multiple websites/services as a program plugin(s) or feature(s) or Didcy feature(s) or plugin(s) without the need to buy 
		any domain or pay for any hosting.</li>
		<br><li style="color:white">Allows developers upload, test, run their programs and get used or deployed by the target users.</li>
		<br><li style="color:white">Allows users(that is, companies) to keep records or store all their ads at a single cloud location, where every single piece of asset get secured.</li>
		<br><li style="color:white">Allows advertizers to advertize their products and services using our platform and it's features.</li>
		<br><li style="color:white">Allows companies and advertizers to secure easy, quick and fast OSAED or advertizing deals without the need for each entity to be
		physically present using Didcy Exhibit(find and offer deal services).</li>
		<br><li style="color:white">Allows users to transact highly secured data files from on advertizer or company to another without any 99.99% data breach.</li>
		<br><li style="color:white">Allows users to directly create/develop/produce their own ads on the platform for free without the need to install any third-party 
		application on your localhost or computer and then uploading to the platform's cloud storage system(if opted) or use any third-
		party website for creating your ads and uploading them to our platform(if opted).</li>
		<br><li style="color:white">Allows users to developers to periodically keep track of their uploaded programs running on the platform.</li>
		<br><li style="color:white">Allows developers to directly create/develop/program/code programs on the platform by using our D-CAN online IDE with extremely 
		incredible addon features or tools. Come and SEE for yourself.</li>
		<br><li style="color:white">Allows users to make quick, fast and easy search.</li>
		<br><li style="color:white">Allows users(esp. educators or students or even businesses) to get incredible intiutive education or knowledge that are only 
		targeted to the current demand in the market and in the future through the use of Didcy Course(also known as Darcet).</li>
		<br><li style="color:white">Allows users(esp. book traders) to trade(sell and buy) super powerful knowledgeable books or educational materials for your 
		own unique purpose.</li>
		<br><li style="color:white">Allows users(esp. bet enthusiast) to bet directly from the platform by using RipaBet or D-BET.</li>
		<br><li style="color:white">Allows users(esp. bet enthusiast) to request for bet loans directly from the platform  by using RipaBank.</li>
		<br><li style="color:white">Allows users to do safe e-banking directly from the platform by using DidcyBank.</li>
		<br><li style="color:white">Allows users(that is, educators(esp. tertiary(universities) students and teachers)) to share anything from ideas to task,
		hire project or assignment helpers to help them work on their project or assignments with or without payment inclusion and more.</li>
		<br><li style="color:white">Allows users(esp. video and film producers) to directly create and produce video or film contents from the platform by using 
		Pick.</li>
		<br><li style="color:white">Allows users to download, stream, convert and do more media services by using Crym.</li>
		<br><li style="color:white">Allows users to get newsletter or mailing services for free.</li>
		<br><li style="color:white">Allows users to deploy(play with) or use any of the plugins available on the platform for their own gain.</li>
		<br><li style="color:white">Allows users to directly subscribe to any of our incredible free to low-cost domain and hosting plans or services per the user's choice.</li>	  
	  </ol>
	 </div>
	</div>
</div>

    <div class="modal-coursery-container modal-signup" style="padding: 0" id="modal-coursery-container">
		 <span onclick="document.getElementById('modal-coursery-container').style.display='none'" 
		 class="close-coursery-container" id="close-coursery-container">
		  <a href="				ript:void(0)">&times;</a>
		 </span>
	<div class="coursery" id="coursery">
	 <a href="https://www.darcet.com" alt="Welcome to Darcet" title="Welcome to Darcet" target="_blank" ping="">Darcet</a>
	</div>
	
	<div class="coursery-signs" id="courser-signs">
	  <button type="button" class="w3-btn sign-up"
	   onclick="document.getElementById('modal-coursery').style.display='block'">Sign Up</button>
	  <button type="button" class="w3-btn sign-in" onclick="document.getElementById('modal-coursery-sigin').style.display='block'">Sign In</button>
	</div>
	
    <div class="modal-coursery modal-signup" id="modal-coursery">
		 <span onclick="document.getElementById('modal-coursery').style.display='none'" class="close-coursery-signup" id="close-coursery-signup">
		  <a href="javascript:void(0)">&times;</a>
		 </span>
	  <!--<form class="modal-content-signup" id="modal-content-signup" method="post">
		<div class="container-signup">-->
		<div class="coursery-signup coursery-scroll" id="coursery-signup">
		 <div class="coursery-header" id="coursery-header">
		  <h1 class="let-get-started-coursery">Let's get Started</h1>
		 </div>
		 
		 <div class="coursery-body" id="coursery-body">
		 <label name="" class="coursery-label"><b>First Name </b></label>
		  <input type="text" style="width: 70%;margin-left: 0;margin-bottom:0;left: 0;padding: 20px" name="first_name" placeholder="First Name" class="coursery-input-text-s coursery-input-text">
		  <label name="" class="coursery-label"><b>Last Name </b></label>
		  <input type="text" style="width: 70%;margin-left: 0;margin-bottom:0;left: 0;padding: 20px" name="last_name" placeholder="Last Name" class="coursery-input-text">
		  <label name="" class="coursery-label"><b>Username </b></label>
		  <input type="text" style="width: 70%;margin-left: 0;margin-bottom:0;left: 0;padding: 20px" name="user_name" placeholder="Username" class="coursery-input-text">
		  <label name="" class="coursery-label"><b>E-mail </b></label>
		  <input type="email" name="email" placeholder="E-mail" class="coursery-input-text">
		  <label name="" class="coursery-label"><b>Password </b></label>
		  <input type="password" name="password" placeholder="Password" class="coursery-input-text">
		  <label name="" class="coursery-label"><b>Gender </b></label>
		  <select class="coursery-input-text" id="" style="cursor: pointer">
		   <option name="" value="">Male</option>
		   <option name="" value="">Female</option>
		   <option name="" value="">Silent</option>
		  </select>
		  <label name="" class="coursery-label"><b>Country </b></label>
		  <select class="coursery-input-text" id="" style="cursor: pointer">
				<option name="">No Country</option>	
				<option name="">Åland Islands</option>	
				<option name="">Afghanistan</option>	
				<option name="">Albania</option>	
				<option name="">Algeria</option>	
				<option name="">American Samoa</option>	
				<option name="">Andorra</option>	
				<option name="">Angola</option>	
				<option name="">Anguilla</option>	
				<option name="">Antigua and Barbuda</option>	
				<option name="">Argentina</option>	
				<option name="">Armenia</option>	
				<option name="">Aruba</option>	
				<option name="">Australia</option>	
				<option name="">Austria</option>	
				<option name="">Azerbaijan</option>	
				<option name="">Bahamas</option>	
				<option name="">Bahrain</option>	
				<option name="">Bangladesh</option>	
				<option name="">Barbados</option>	
				<option name="">Belarus</option>	
				<option name="">Belgium</option>	
				<option name="">Belize</option>	
				<option name="">Benin</option>	
				<option name="">Bermuda</option>	
				<option name="">Bhutan</option>	
				<option name="">Bolivia</option>	
				<option name="">Bonaire</option>	
				<option name="">Bosnia and Herzegovina</option>	
				<option name="">Botswana</option>	
				<option name="">Brazil</option>	
				<option name="">British Indian Ocean Territory</option>	
				<option name="">British Virgin Islands</option>	
				<option name="">Brunei</option>	
				<option name="">Bulgaria</option>	
				<option name="">Burkina Faso</option>	
				<option name="">Burundi</option>	
				<option name="">Cambodia</option>	
				<option name="">Cameroon</option>	
				<option name="">Canada</option>	
				<option name="">Cape Verde</option>	
				<option name="">Cayman Islands</option>	
				<option name="">Central African Republic</option>	
				<option name="">Chad</option>	
				<option name="">Chile</option>	
				<option name="">China</option>	
				<option name="">Colombia</option>	
				<option name="">Comoros</option>	
				<option name="">Democratic Republic of the Congo</option>	
				<option name="">Republic of the Congo</option>	
				<option name="">Cook Islands</option>	
				<option name="">Costa Rica</option>	
				<option name="">Croatia</option>	
				<option name="">Cuba</option>	
				<option name="">Curaçao</option>	
				<option name="">Cyprus</option>	
				<option name="">Czech Republic</option>	
				<option name="">Denmark</option>	
				<option name="">Djibouti</option>	
				<option name="">Dominica</option>	
				<option name="">Dominican Republic</option>	
				<option name="">Ecuador</option>	
				<option name="">Egypt</option>	
				<option name="">El Salvador</option>	
				<option name="">Equatorial Guinea</option>	
				<option name="">Eritrea</option>	
				<option name="">Estonia</option>	
				<option name="">Ethiopia</option>	
				<option name="">Falkland Islands</option>	
				<option name="">Faroe Islands</option>	
				<option name="">Fiji</option>	
				<option name="">Finland</option>	
				<option name="">France</option>	
				<option name="">French Guiana</option>	
				<option name="">French Polynesia</option>	
				<option name="">French Southern and Antarctic Lands</option>	
				<option name="">Gabon</option>	
				<option name="">Gambia</option>	
				<option name="">Georgia</option>	
				<option name="">Germany</option>	
				<option name="">Ghana</option>	
				<option name="">Gibraltar</option>	
				<option name="">Greece</option>	
				<option name="">Greenland</option>	
				<option name="">Grenada</option>	
				<option name="">Guadeloupe</option>	
				<option name="">Guam</option>	
				<option name="">Guatemala</option>	
				<option name="">Guinea</option>	
				<option name="">Guinea-Bissau</option>	
				<option name="">Guyana</option>	
				<option name="">Haiti</option>	
				<option name="">Honduras</option>	
				<option name="">Hong Kong</option>	
				<option name="">Hungary</option>	
				<option name="">Iceland</option>	
				<option name="">India</option>	
				<option name="">Indonesia</option>	
				<option name="">Iran</option>	
				<option name="">Iraq</option>	
				<option name="">Ireland</option>	
				<option name="">Israel</option>	
				<option name="">Italy</option>	
				<option name="">Ivory Coast</option>	
				<option name="">Jamaica</option>	
				<option name="">Japan</option>	
				<option name="">Jordan</option>	
				<option name="">Kazakhstan</option>	
				<option name="">Kenya</option>	
				<option name="">Kiribati</option>	
				<option name="">North Korea</option>	
				<option name="">South Korea</option>	
				<option name="">Kosovo</option>	
				<option name="">Kurdistan</option>	
				<option name="">Kuwait</option>	
				<option name="">Kyrgyzstan</option>	
				<option name="">Laos</option>	
				<option name="">Latvia</option>	
				<option name="">Lebanon</option>	
				<option name="">Lesotho</option>	
				<option name="">Liberia</option>	
				<option name="">Libya</option>	
				<option name="">Liechtenstein</option>	
				<option name="">Lithuania</option>	
				<option name="">Luxembourg</option>	
				<option name="">North Macedonia</option>	
				<option name="">Macau</option>	
				<option name="">Premium channels</option>	
				<option name="">Madagascar</option>	
				<option name="">Malawi</option>	
				<option name="">Malaysia</option>	
				<option name="">Maldives</option>	
				<option name="">Mali</option>	
				<option name="">Malta</option>	
				<option name="">Marquesas Islands</option>	
				<option name="">Marshall Islands</option>	
				<option name="">Martinique</option>	
				<option name="">Mauritania</option>	
				<option name="">Mauritius</option>	
				<option name="">Mayotte</option>	
				<option name="">Mexico</option>	
				<option name="">Over-the-air</option>	
				<option name="">National TV Broadcast</option>	
				<option name="">Federated States of Micronesia</option>	
				<option name="">Midway Islands</option>	
				<option name="">Moldova</option>	
				<option name="">Monaco</option>	
				<option name="">Mongolia</option>	
				<option name="">Montenegro</option>	
				<option name="">Montserrat</option>	
				<option name="">Morocco</option>	
				<option name="">Mozambique</option>	
				<option name="">Myanmar</option>	
				<option name="">Namibia</option>	
				<option name="">Nepal</option>	
				<option name="">Netherlands</option>	
				<option name="">Netherlands Antilles</option>	
				<option name="">New Caledonia</option>	
				<option name="">New Zealand</option>	
				<option name="">Nicaragua</option>	
				<option name="">National channels</option>	
				<option name="">Local channels</option>	
				<option name="">Niger</option>	
				<option name="">Nigeria</option>	
				<option name="">Niue</option>	
				<option name="">Northern Mariana Islands</option>	
				<option name="">Norway</option>	
				<option name="">Oman</option>	
				<option name="">Pakistan</option>	
				<option name="">Palau</option>	
				<option name="">Palestine</option>	
				<option name="">Panama</option>	
				<option name="">Papua New Guinea</option>	
				<option name="">Paraguay</option>	
				<option name="">Peru</option>	
				<option name="">Philippines</option>	
				<option name="">Government-owned networks</option>	
				<option name="">Minor television networks</option>	
				<option name="">Pitcairn Islands</option>	
				<option name="">Poland</option>	
				<option name="">Portugal</option>	
				<option name="">Puerto Rico</option>	
				<option name="">Qatar</option>	
				<option name="">Réunion</option>	
				<option name="">Romania</option>	
				<option name="">Russia </option>	
				<option name="">Rwanda</option>	
				<option name="">Saba</option>	
				<option name="">Saint Barthélemy</option>	
				<option name="">Saint Kitts and Nevis</option>	
				<option name="">Saint Lucia</option>	
				<option name="">Sint Maarten</option>	
				<option name="">Saint Pierre and Miquelon</option>	
				<option name="">Saint Vincent and the Grenadines</option>	
				<option name="">Samoa</option>	
				<option name="">San Marino</option>	
				<option name="">São Tomé and Príncipe</option>	
				<option name="">Saudi Arabia</option>	
				<option name="">Senegal</option>	
				<option name="">Serbia</option>	
				<option name="">Seychelles</option>	
				<option name="">Sierra Leone</option>	
				<option name="">Singapore</option>	
				<option name="">Sint Eustatius</option>	
				<option name="">Slovakia</option>	
				<option name="">Slovenia</option>	
				<option name="">Solomon Islands</option>	
				<option name="">Somalia</option>	
				<option name="">South Africa</option>	
				<option name="">Spain</option>	
				<option name="">Sri Lanka</option>	
				<option name="">Sudan</option>	
				<option name="">South Sudan</option>	
				<option name="">Suriname</option>	
				<option name="">Eswatini</option>	
				<option name="">Sweden</option>	
				<option name="">Switzerland</option>	
				<option name="">Syria</option>	
				<option name="">Taiwan</option>	
				<option name="">Tajikistan</option>	
				<option name="">Tanzania</option>	
				<option name="">Thailand</option>	
				<option name="">Tibet</option>	
				<option name="">Timor-Leste</option>	
				<option name="">Togo</option>	
				<option name="">Tokelau</option>	
				<option name="">Tonga</option>	
				<option name="">Trinidad and Tobago</option>	
				<option name="">Tristan da Cunha</option>	
				<option name="">Tunisia</option>	
				<option name="">Turkey</option>	
				<option name="">Turkmenistan</option>	
				<option name="">Turks and Caicos Islands</option>	
				<option name="">Tuvalu</option>	
				<option name="">Uganda</option>	
				<option name="">Ukraine</option>	
				<option name="">United Arab Emirates</option>	
				<option name="">United Kingdom</option>	
				<option name="">United States</option>	
				<option name="">Over-the-air</option>	
				<option name="">Cable and satellite</option>	
				<option name="">Defunct</option>	
				<option name="">United States Virgin Islands</option>	
				<option name="">Uruguay</option>	
				<option name="">Uzbekistan</option>	
				<option name="">Vanuatu</option>	
				<option name="">Vatican City</option>	
				<option name="">Venezuela</option>	
				<option name="">Vietnam</option>	
				<option name="">Wake Island</option>	
				<option name="">Wallis and Futuna</option>	
				<option name="">Western Sahara</option>	
				<option name="">Yemen</option>	
				<option name="">Zambia</option>	
				<option name="">Zanzibar</option>	
				<option name="">Zimbabwe</option>
		  </select>
		  <label name="" class="coursery-label"><b>Telephone No. </b></label>
		  <input type="tel" name="tel" style="width: 70%;margin-left: 0;left: 0;" class="coursery-input-text coursery-tel" id="coursery-tel">
		  <label name="" class="coursery-label"><b>Address </b></label>
		  <input type="text" style="width: 70%;margin-left: 0;margin-bottom:0;left: 0;padding: 20px" name="address" placeholder="Address" class="coursery-input-text coursery-address" id="coursery-address">
		  <label name="" class="coursery-label"><b>Applicant Type </b></label>
		  <select class="coursery-input-text" id="" style="cursor: pointer">
		   <option name="" value="">Student</option>
		   <option name="" value="">Teacher</option>
		  </select>
		  <button type="button" class="w3-btn signup coursery-input-text" id="">Sign Up</button>
		 </div>	 
		</div>
	  <!--</div>
	 </form>-->
	</div>
	
    <div class="modal-coursery-sigin modal-signup" id="modal-coursery-sigin">
		 <span onclick="document.getElementById('modal-coursery-sigin').style.display='none'" class="close-coursery-signup" id="close-coursery-signup">
		  <a href="javascript:void(0)">&times;</a>
		 </span>
	  <!--<form class="modal-content-signup" id="modal-content-signup" method="post">
		<div class="container-signup">-->
		<div class="coursery-signin" id="coursery-signin">
		 <div class="coursery-header" id="coursery-header">
		  <h1>Welcome Back</h1>
		 </div>
		 
		 <div class="coursery-body coursery-body-sigin" id="coursery-body">
		  <label name="" class="coursery-label"><b>E-mail </b></label>
		  <input type="email" name="email" placeholder="E-mail" class="coursery-input-text">
		  <label name="" class="coursery-label"><b>Password </b></label>
		  <input type="password" name="password" placeholder="Password" class="coursery-input-text">
		  <button type="button"
		  onclick="document.getElementById('modal-coursery-playground').style.display='block'" 
		  class="w3-btn signup coursery-input-text" id="">Sign In</button>
		 </div>	 
		</div>
	  <!--</div>
	 </form>-->
	</div>

 <div class="modal-coursery-playground coursery-scroll" id="modal-coursery-playground">
  <span class="close-coursery-playground" 
  onclick="document.getElementById('modal-coursery-playground').style.display='none'"  
  id="close-coursery-playground">
   <a href="javascript:void(0)">&times;</a>
  </span>

	<div id="coursery-playground-tool-kits" class="coursery-playground-tool-kits-side">
	  <a href="javascript:void(0)" class="closebtn" onclick="CloseCourserySidePlay()">&times;</a>
	  <a id="front-line" class="front-line active-frontline">Home</a>
	  <a id="dashboard-frontline" class="front-line">Dashboard</a>
	  <a id="courses-frontline" class="courses-frontline front-line">Institutions
	   <i class="coursery-fa fa-caret-down"></i>
	  </a>
	  <div class="coursery-dropdown-container">
		<a id="mit" class="courses-frontline front-line">MIT
		 <i class="coursery-fa fa-caret-down"></i>
		</a>
	    <div id="coursery-dropdown-container-right" class="coursery-dropdown-container-right">
		    <h4 style="color: gray;text-align: center">Courses</h4>
			<a class="courses-frontline front-line">MsBC in Medical Science</a>
			<div id="coursery-dropdown-container" class="coursery-dropdown-container">
			    <h4 style="color: gray;text-align: center">Levels</h4>
				<a class="courses-frontline front-line">100</a>
				<a class="courses-frontline front-line">200</a>
				<a class="courses-frontline front-line">300</a>
				<a class="courses-frontline front-line">400</a>
			</div>
			<a class="courses-frontline front-line">Geology</a>
			<a class="courses-frontline front-line">Political Science</a>
			<a class="courses-frontline front-line">History</a>
			<a class="courses-frontline front-line">Computer Science</a>
			<a class="courses-frontline front-line">Ecology</a>
	    </div>
		<a id="havard" class="courses-frontline front-line">Havard
		 <i class="coursery-fa fa-caret-down"></i>
		</a>
	    <div id="coursery-dropdown-container-right" class="coursery-dropdown-container-right">
		    <h4 style="color: gray;text-align: center">Courses</h4>
			<a class="courses-frontline front-line">MsBC in Medical Science</a>
			<div id="coursery-dropdown-container" class="coursery-dropdown-container">
			    <h4 style="color: gray;text-align: center">Levels</h4>
				<a class="courses-frontline front-line">100</a>
				<a class="courses-frontline front-line">200</a>
				<a class="courses-frontline front-line">300</a>
				<a class="courses-frontline front-line">400</a>
			</div>
			<a class="courses-frontline front-line">Geology</a>
			<a class="courses-frontline front-line">Political Science</a>
			<a class="courses-frontline front-line">History</a>
			<a class="courses-frontline front-line">Computer Science</a>
			<a class="courses-frontline front-line">Ecology</a>
	    </div>
		<a id="princeton" class="courses-frontline front-line">Princeton
		 <i class="coursery-fa fa-caret-down"></i>
		</a>
	    <div id="coursery-dropdown-container-right" class="coursery-dropdown-container-right">
		    <h4 style="color: gray;text-align: center">Courses</h4>
			<a class="courses-frontline front-line">MsBC in Medical Science</a>
			<div id="coursery-dropdown-container" class="coursery-dropdown-container">
			    <h4 style="color: gray;text-align: center">Levels</h4>
				<a class="courses-frontline front-line">100</a>
				<a class="courses-frontline front-line">200</a>
				<a class="courses-frontline front-line">300</a>
				<a class="courses-frontline front-line">400</a>
			</div>
			<a class="courses-frontline front-line">Geology</a>
			<a class="courses-frontline front-line">Political Science</a>
			<a class="courses-frontline front-line">History</a>
			<a class="courses-frontline front-line">Computer Science</a>
			<a class="courses-frontline front-line">Ecology</a>
	    </div>
		<a id="uop" class="courses-frontline front-line">UoP
		 <i class="coursery-fa fa-caret-down"></i>
		</a>
	    <div id="coursery-dropdown-container-right" class="coursery-dropdown-container-right">
		    <h4 style="color: gray;text-align: center">Courses</h4>
			<a class="courses-frontline front-line">MsBC in Medical Science</a>
			<div id="coursery-dropdown-container" class="coursery-dropdown-container">
			    <h4 style="color: gray;text-align: center">Levels</h4>
				<a class="courses-frontline front-line">100</a>
				<a class="courses-frontline front-line">200</a>
				<a class="courses-frontline front-line">300</a>
				<a class="courses-frontline front-line">400</a>
			</div>
			<a class="courses-frontline front-line">Geology</a>
			<a class="courses-frontline front-line">Political Science</a>
			<a class="courses-frontline front-line">History</a>
			<a class="courses-frontline front-line">Computer Science</a>
			<a class="courses-frontline front-line">Ecology</a>
	    </div>
		<a id="uog" class="courses-frontline front-line">UoG
		 <i class="coursery-fa fa-caret-down"></i>
		</a>
	    <div id="coursery-dropdown-container-right" class="coursery-dropdown-container-right">
		    <h4 style="color: gray;text-align: center">Courses</h4>
			<a class="courses-frontline front-line">MsBC in Medical Science</a>
			<div id="coursery-dropdown-container" class="coursery-dropdown-container">
			    <h4 style="color: gray;text-align: center">Levels</h4>
				<a class="courses-frontline front-line">100</a>
				<a class="courses-frontline front-line">200</a>
				<a class="courses-frontline front-line">300</a>
				<a class="courses-frontline front-line">400</a>
			</div>
			<a class="courses-frontline front-line">Geology</a>
			<a class="courses-frontline front-line">Political Science</a>
			<a class="courses-frontline front-line">History</a>
			<a class="courses-frontline front-line">Computer Science</a>
			<a class="courses-frontline front-line">Ecology</a>
	    </div>
		<a id="oxford" class="courses-frontline front-line">Oxford
		 <i class="coursery-fa fa-caret-down"></i>
		</a>
	    <div id="coursery-dropdown-container-right" class="coursery-dropdown-container-right">
		    <h4 style="color: gray;text-align: center">Courses</h4>
			<a class="courses-frontline front-line">MsBC in Medical Science</a>
			<div id="coursery-dropdown-container" class="coursery-dropdown-container">
			    <h4 style="color: gray;text-align: center">Levels</h4>
				<a class="courses-frontline front-line">100</a>
				<a class="courses-frontline front-line">200</a>
				<a class="courses-frontline front-line">300</a>
				<a class="courses-frontline front-line">400</a>
			</div>
			<a class="courses-frontline front-line">Geology</a>
			<a class="courses-frontline front-line">Political Science</a>
			<a class="courses-frontline front-line">History</a>
			<a class="courses-frontline front-line">Computer Science</a>
			<a class="courses-frontline front-line">Ecology</a>
	    </div>
	  </div>
	  <a id="search-frontline" class="front-line">Search</a>
	  <a id="about-frontline" class="front-line">About</a>
	  <a id="services-frontline" class="front-line">Services</a>
	  <a id="clients-frontline" class="front-line">Clients</a>
	  <a id="contact-frontline" class="front-line">Contact</a>
	</div>

	<div class="coursery coursery-playground-header" id="coursery-playground-header">
	 <a href="https://www.darcet.com" alt="" title="Welcome to Darcet" target="_blank" ping="">Darcet</a>
	 <button class="coursery-open-side-play w3-btn" onclick="OpenCourserySidePlay()">Play</button>
	</div>

	<div class="profile-dropdown">
		<img id="profile-coursery" src="adv.ics/bandmember.jpg" 
		class="course-frontline" style="cursor: pointer;width: 50px;border-radius: 50%" alt="" onload=""/>    
		
		<div class="profile-drop" id="profile-drop">
		 <a id="" class="front-line">Edit Profile</a>
		 <a id="" class="front-line">Settings</a>
		 <a id="" class="front-line">Add New Course</a>
		 <a id="" class="front-line">Logout</a>
		 
		</div>
	</div>
	
	<script>
	 function OpenProfile(){
		 document.getElementById("profile-drop").style.display = "block";
	 }
	</script>

  <div class="modal-content-coursery-playground" id="modal-content-coursery-playground">
   <div class="row">
    
	<div class="card-22 column">	
	  <video src="adv.videos/y2mate.com - 4 essential body language tips from a world champion public speaker_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>
    
	<div class="card-22 column">	
 	  <video src="adv.videos/y2mate.com - Audio Ads Content Development   Promo_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>
    
	<div class="card-22 column">	
 	  <video src="adv.videos/y2mate.com - How to Earn Money with Audio Ads_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>
	
	<div class="card-22 column">	
	  <video src="adv.videos/y2mate.com - 4 essential body language tips from a world champion public speaker_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>
    
	<div class="card-22 column">	
 	  <video src="adv.videos/y2mate.com - Audio Ads Content Development   Promo_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>
    
	<div class="card-22 column">	
 	  <video src="adv.videos/y2mate.com - How to Earn Money with Audio Ads_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>

	<div class="card-22 column">	
	  <video src="adv.videos/y2mate.com - 4 essential body language tips from a world champion public speaker_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>
    
	<div class="card-22 column">	
 	  <video src="adv.videos/y2mate.com - Audio Ads Content Development   Promo_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div>
    
	<div class="card-22 column">	
 	  <video src="adv.videos/y2mate.com - How to Earn Money with Audio Ads_v240P.mp4" id="" class=""></video>
	  <h1 class="course-group">Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info course-group-2">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Enroll Now</button></p>
    </div> 

   </div><!--row-->
  
  </div><!--content-->
  
 </div>
	
	<div class="coursery-foot" id="coursery-foot">
	 <a href="https://www.darcet.com" alt="Welcome to Darcet" title="Welcome to Darcet" target="_blank" ping="">Visit us @ https://www.darcet.com. All &copy; rights
	 reserved. Terms &amp; Conditions Apply.</a>
	</div>
	
</div>


<div class="industrial-ad-area" id="industrial-ad-area">
 <span class="close-industrial-ad-area" id="close-industrial-ad-area">&times;</span>
  <h2 style="color: white;text-align: center">Please select Ad Type</h2>
  
  <div class="modal-content-industrial-ad-area">
	  <div class="row">
	  <div class="column-" id="column">
		<button class="button" id="industrial-type-video-ads">Video Ads</button>
		<button class="button" id="industrial-type-static-ads">Post/Static Ads</button>
		<button class="button" id="industrial-type-audio-ads">Audio Ads</button>
		<!-- <button class="" id="" onclick=""></button> -->
	  </div>
	  </div>
  </div>
  
  <div id="caption-select-display-type-modal" class="caption-select-display-type-modal">Didcy Ads Type</div> 
</div>

<script>
 function closeCB(){
	 document.getElementsByClassName("username")[0].value = "";
     document.getElementsByClassName("pwd")[0].value = "";
	 document.getElementById('myModal-chat').style.display='none';
 }
</script>

<div class="modal-chat-4-didcy-works overlay" id="modal-chat-4-didcy-works" style="overflow-y: auto;overflow-x: hidden;color: white">
 <span class="close-chat-4-didcy-works" id="close-chat-4-didcy-works" onclick="closeCBWorks()">
 <a href="javascript:void(0)">&times;</a></span>
<div class="container container-chat" style="padding-top: 50px;">	
    <h2 style="text-align: center;color: white">Smile</h1>	
	<div class="row">
		<div class="col-sm-4">
			<h4>Smile Login:</h4>		
			<form method="post" class="chat-form">
				<div class="form-group">
					<div class="alert alert-warning" id="error-log" style="color: white"></div>
				</div>
				<div class="form-group">
					<label for="username">User:</label>
					<input type="username" class="chat-username username-didcywork form-control" name="username-didcywork" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="chat-password pwd-didcywork form-control" name="pwd-didcywork" required>
				</div>  
				<button type="submit" name="login-didcywork" class="chat-login login-didcywork btn btn-info" style="color: black">Login</button>
			</form>
			<br>
			<!--<p><b>User</b> : adam<br><b>Password</b> : 123</p>
			<p><b>User</b> : rose<br><b>Password</b> : 123</p>
			<p><b>User</b> : smith<br><b>Password</b>: 123</p>
			<p><b>User</b> : merry<br><b>Password</b>: 123</p>-->
		</div>
		
	</div>
</div>	  
</div>

<div class="modal-work-board-4 overlay" id="myModal-work-board-4" style="overflow-x: hidden;overflow-y:auto">
 
 <span class="close-work-board-4" id="close-work-board-4" style="z-index: 20" 
 onclick="CloseWB4()">
 <a href="javascript:void(0)">&times;</a></span>
 
 <div class="modal-content-work-board-4" id="modal-content-work-board-4">
 
  <!--w3-animate-bottom<h1 style="text-align: center;color: white">Welcome to Smile</h1>
  <p style="text-align: center;color: white">Just Smile</p>-->
  
	<div style="background-color: rgba(0, 0, 0, 1)" class="welcome-didcy-work-container">
		<h1 class="welcome-didcy-work welcome-didcy-developer-portal">Welcome to Smile</h1>
		<p style="text-align: center;color: white" class="work-as-a-puzzle">Just Smile</p>
		<span id="dump" style="text-align: center;color: white" class="work-as-a-puzzle"></span>
	</div>
	
	<div class="developer-files-container" id="developer-files-container">
	 <form name="developer-files-container-form" id="developer-files-container-form" class="developer-files-container-form">
	  <input type="file" id="program-files" class="custom-file-input-0" name="program-files[]" multiple enctype="multipart/form-data">
	  
	  <input type="file" id="css-files" style="display: none" class="custom-file-input-0" name="css-files[]" multiple enctype="multipart/form-data">
	  
	  <input type="button" name="exec" class="upload-developer-files" id="upload-developer-files" value="Execute">
	  
	  <input type="file" id="server-files" style="display: none" class="custom-file-input-0" name="server-files[]" multiple enctype="multipart/form-data">
	  
	  <input type="button" name="exec" style="display: none" class="upload-developer-files" id="upload-developer-server-files" value="Execute">
	 </form>
	</div>

	<div class="developer-response" id="developer-response" style="overflow-y:auto">
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	 <p style="color:white" class="response-i"></p>
	</div>
 
 </div>
</div>

<script type="text/javascript">
 "use strict";
 
 function CloseWB4(){
	document.getElementById("myModal-work-board-4").style.width = "0%";
	document.getElementById("myModal-work-board-4").style.height = "0%";	 
 }
 
 var from_user_id_didcywork = 0, LoginerlnID = 0, usrDicyWork = 0;
 var __$__49393_492_Page_acc_usr;
 
 document.getElementsByClassName("login-didcywork")[0].onclick = function(){loginDidcyWork();}

  function loginDidcyWork(){
	 if(document.getElementsByClassName("username-didcywork")[0].value == ""){
		//document.getElementById("error-log").style.display = "block";
		//return document.getElementById("error-log").innerHTML = "Empty username";
		return AlertBoxInModal("Empty username");
	 }
	 if(document.getElementsByClassName("pwd-didcywork")[0].value == ""){
		//document.getElementById("error-log").style.display = "block";
		//return document.getElementById("error-log").innerHTML = "Empty Password";
		return AlertBoxInModal("Empty Password");
	 }

/* 	var message = $(".pwd").val();
	$('.pwd').val('');
	if($.trim(message) == '') {
		return false;
	} */


	 var form = new FormData();
	 form.append("username-didcywork", document.getElementsByClassName("username-didcywork")[0].value);
	 form.append("pwd-didcywork", document.getElementsByClassName("pwd-didcywork")[0].value);
	 form.append("drim", "");
	 $.ajax({
		type: "POST",
		url: "_smile.php",
		contentType: false,
		cache: false,
		processData: false,
		data: form,
		success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);			
			if(data_returned.state == 200){
			  from_user_id_didcywork = data_returned.from_user_id_didcywork;
			  
			  var DicyWorkBoard = data_returned.DicyWorkBoard;
			  LoginerlnID = data_returned.lnID;
			  __$__49393_492_Page_acc_usr = data_returned.__49393_492_Page_acc_usr;
			  
			  document.getElementById("dump").innerHTML = "DUMP ID : "+__$__49393_492_Page_acc_usr;
		      //document.getElementById("modal-content-work-board-4").innerHTML = data_returned.DicyWorkBoard;

			  //document.getElementById("myModal-work-board-4").style.display = "block";
			  document.getElementById("myModal-work-board-4").style.width = "100%";
			  document.getElementById("myModal-work-board-4").style.height = "100%";

			  usrDicyWork = data_returned.didcyworkUserIDs.session_id_didcywork;
			  
			  
			  document.getElementsByClassName("username-didcywork")[0].value = "";
			  document.getElementsByClassName("pwd-didcywork")[0].value = "";
			  
			}else if(data_returned.state == 506){
			  AlertBoxInModal(data_returned.session);
			}else{
			  //document.getElementById("error-log").innerHTML = data_returned.session;
			}
		},
		error: function(){}
	 });
  }
</script>
	

<div class="modal-chat" id="myModal-chat" style="overflow-x: hidden;color: white">
 <span class="close-chat" id="close-chat" onclick="closeCB()">&times;</span>

<div class="container container-chat">		
	<h2 style="text-align: center;;color: white">Didcy Chat</h1>		
	<div class="row">
		<div class="col-sm-4">
			<h4>Chat Login:</h4>		
			<form method="post" class="chat-form">
				<div class="form-group">
					<div class="alert alert-warning" id="error-log" style="color: white"></div>
				</div>
				<div class="form-group">
					<label for="username">User:</label>
					<input type="username" class="chat-username username form-control" name="username" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="chat-password pwd form-control" name="pwd" required>
				</div>  
				<button type="submit" name="login" class="chat-login login btn btn-info" style="color: black">Login</button>
			</form>
			<br>
			<!--<p><b>User</b> : adam<br><b>Password</b> : 123</p>
			<p><b>User</b> : rose<br><b>Password</b> : 123</p>
			<p><b>User</b> : smith<br><b>Password</b>: 123</p>
			<p><b>User</b> : merry<br><b>Password</b>: 123</p>-->
		</div>
		
	</div>
</div>	

<div class="modal-add-members" id="myModal-add-members" style="z-index: 30">
 <span class="close-add-members" id="close-add-members">&times;</span>
 <div class="modal-content-add-members">
  <input type="text" id="member-name" style="background-image: url('')">
  <input type="text" id="member-id" style="background-image: url('')">
  <input type="button" id="addMember" value="Add Member">
 </div>
</div>

<script type="text/javascript">
  "use strict";
  
  var rerun_usr = 0, from_user_id = 0;
  var usr = "";
  document.getElementsByClassName("chat-form")[0].addEventListener("submit", 
  (event) => event.preventDefault());

  document.getElementsByClassName("chat-form")[1].addEventListener("submit", 
  (event) => event.preventDefault());
  
  var rerunid = 0, lnID = 0;

  document.getElementsByClassName("login")[0].onclick = function(){login();}

							var message_count = 0, temp = 0;
							
							function SendUserTypingStatus(userid, isTyping){
								var form = new FormData();
								form.append('from_user_id', "");
								form.append('lnID', lnID);
								form.append('to_user_id', userid);
								if(isTyping == 1){
								   form.append('is_type', 'yes');
								}else{
								   form.append('is_type', 'no');
								}
								form.append('action', 'update_typing_status');
								$.ajax({
									type: 'POST',
									url: urls[0],
									data: form,
									contentType: false,
									processData: false,
									cache: false,
									success: function(response){
										 //window.console.log(response);
									},
									error: function(){}
								});											
							}
							
							
							
							function GetNewCount(from_user_id, to_user_id){
								var form = new FormData();
								form.append('from_user_id', from_user_id);
								form.append('to_user_id', to_user_id);
								$.ajax({
									type: 'POST',
									url: urls[1],
									data: form,
									contentType: false,
									processData: false,
									cache: false,
									success: function(response){
										//window.console.log(response);
										var resp = $.parseJSON(response);
										var unread = '#unread_'+from_user_id;
										$(unread).html(resp.status);
									},
									error: function(){}
								});								
							}
							
							function GetUpdate(from_user_id, to_user_id) {
								//window.console.log(from_user_id+"[]"+to_user_id);
								var form = new FormData();
								form.append('sessionid', from_user_id);
								form.append('userid', to_user_id);
								form.append('drim', window.location.href.slice(40));
								$.ajax({
									type: 'POST',
									url: urls[2],
									data: form,
									contentType: false,
									processData: false,
									cache: false,
									success: function(response){
										//window.console.log(response);
										var resp = $.parseJSON(response);			
										$('#conversation').html(resp.conversation.conversation);
										$('.messages').animate({ scrollTop: $('.messages').height() }, 'fast');
									     //GetNewCount(from_user_id, to_user_id);
									},
									error: function(){}
								});
							}

							function getMessageCount(sessionid, userid){
								//message_count = count; 
								
								var form = new FormData();
								form.append('sessionid', sessionid);
								form.append('userid', userid);
								//form.append('prev', prev);
								$.ajax({
								   type: 'POST',
								   url: urls[3],
								   data: form,
								   processData: false,
								   cache: false,
								   contentType: false,
								   success: function(result){
									   //window.console.log(result);
									   //window.console.log(userid);
									   //window.console.log(sessionid);
									   var data_returned = JSON.parse(result);
									   
									   if(data_returned.count != 0){
										   if(message_count != data_returned.count){
											//if(data_returned.count == 1){
											  //window.console.log(message_count);
											  //window.console.log(data_returned.count);
											  GetUpdate(userid, sessionid);
											 //}
											   message_count = data_returned.count;
										   } 
									   }
								   },
								   error: function(){}
								});	
								//setInterval(() => getMessageCount(userid, sessionid), 10000);
							}
			
			var user_id = 0;
			function convers(userid, username, sessionid, avatar){
						   var userdata = ''; 
						   user_id = userid;
						   rerun_usr = sessionid;

							function topFunction() {
							 window.scrollTo(0,document.querySelector('.messages').scrollHeight);
							}
						   
						   document.getElementById(userid).onclick = function(){
                               var form = new FormData();
							   form.append('userid', userid);
							   form.append('sessionid', sessionid);
							   form.append("drim", "");
							   $.ajax({
								   type: 'POST',
								   url: urls[2],
								   data: form,
								   cache: false,
								   processData: false,
								   contentType: false,
								   success: function(result){
									   var data_returned = JSON.parse(result);
									   document.getElementById(userid).className += ' active';
									   document.getElementById('content').className = 'content f2content';
									   document.getElementById('sidepanel').className = 'sidepanel fsidepanel';
									   document.getElementById('right-avatar').src = 'userpics/'+avatar;
									   document.getElementById('usr-name').innerHTML = username;
									   document.getElementById('conversation').innerHTML = data_returned.conversation.conversation;
									   document.getElementsByClassName('chatButton')[0].id = 'chatButton'+userid;									   
								       window.scrollTo(0,document.querySelector('.messages').scrollHeight);
								   },
								   error: function(){}
							   });					
						   }
                                //window.console.log(usr+"[]");							   
                                //window.console.log(userid+"00");							   
								setInterval(
								  () => getMessageCount(usr, userid), 1000);
				}
				//;
     
	 function rerun(username, userid, avatar, sessionid){
	   rerun_usr = sessionid;
       var form = new FormData();
	   form.append('userid', userid);
	   form.append('sessionid', sessionid);
	   form.append("drim", "");
	   $.ajax({
			type: 'POST',
			url: urls[2],
			data: form,
			cache: false,
			processData: false,
			contentType: false,
			success: function(result){
				var data_returned = JSON.parse(result);
				document.getElementById(userid).className += ' active';
				document.getElementById('content').className = 'content f2content';
				document.getElementById('sidepanel').className = 'sidepanel fsidepanel';
				document.getElementById('right-avatar').src = 'userpics/'+avatar;
				document.getElementById('usr-name').innerHTML = username;
				document.getElementById('conversation').innerHTML = data_returned.conversation.conversation;
				document.getElementsByClassName('chatButton')[0].id = 'chatButton'+userid;									   
				window.scrollTo(0,document.querySelector('.messages').scrollHeight);
			},
			error: function(){}
		});
	 }

  function login(){
	 if(document.getElementsByClassName("username")[0].value == ""){
		//document.getElementById("error-log").style.display = "block";
		//return document.getElementById("error-log").innerHTML = "Empty username";
		return AlertBoxInModal("Empty username");
	 }
	 if(document.getElementsByClassName("pwd")[0].value == ""){
		//document.getElementById("error-log").style.display = "block";
		//return document.getElementById("error-log").innerHTML = "Empty Password";
		return AlertBoxInModal("Empty Password");
	 }

/* 	var message = $(".pwd").val();
	$('.pwd').val('');
	if($.trim(message) == '') {
		return false;
	} */

	 var form = new FormData();
	 form.append("username", document.getElementsByClassName("username")[0].value);
	 form.append("pwd", document.getElementsByClassName("pwd")[0].value);
	 form.append("drim", "");
	 $.ajax({
		type: "POST",
		url: urls[4],
		contentType: false,
		cache: false,
		processData: false,
		data: form,
		success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);			
			if(data_returned.state == 200){
			 from_user_id = data_returned.from_user_id;
		     //var response = result;
			 //var resp = $.parseJSON(response);			
			 //$('#modal-content-chat-board').html(resp.chatBoard);			
			//$(".messages").animate({ scrollTop: $('.messages').height() }, "fast");
			  message_count = data_returned.chatMessages.count;
			  var chatBoard = data_returned.chatBoard;
			  lnID = data_returned.lnID;
			  //window.console.log(message_count+"---");
			  //chatBoard[0] = "";
			  //chatBoard[data_returned.chatBoard.length-1] = "";
			  document.getElementById("modal-content-chat-board").innerHTML = data_returned.chatBoard;
			  //window.console.log(result);
			  //window.console.log("------");
			  document.getElementById("myModal-chat-board").style.display = "block";
			  for(var ids = 0;ids <= data_returned.chatUserIDs.userid.length;ids++){
				 if(ids == data_returned.chatUserIDs.userid.length){
				  if(rerunid == 1){
					  rerun(data_returned.chatUserIDs.username[0], 
					  data_returned.chatUserIDs.userid[0],
					  data_returned.chatUserIDs.avatar[0], data_returned.chatUserIDs.session_id);
				  }else{
					  rerunid = 1;
				  }
				  break;
				 }	
			     convers(data_returned.chatUserIDs.userid[ids], 
				 data_returned.chatUserIDs.username[ids], 
				 data_returned.chatUserIDs.session_id, data_returned.chatUserIDs.avatar[ids]);
			  }
			 
			  usr = data_returned.chatUserIDs.session_id;
			  
/* 			     convers(data_returned.chatUserIDs.userid[0], 
				 data_returned.chatUserIDs.username[0], 
				 data_returned.chatUserIDs.session_id, data_returned.chatUserIDs.avatar[ids]); */
				 
			  //document.getElementById(data_returned.chatUserIDs.userid[ids]
			  document.getElementsByClassName("username")[0].value = "";
			  document.getElementsByClassName("pwd")[0].value = "";
			}else if(data_returned.state == 506){
			  AlertBoxInModal(data_returned.session);
			}else{
			  //document.getElementById("error-log").innerHTML = data_returned.session;
			}
		},
		error: function(){}
	 });
  }
  
  var modalAddMember = document.getElementById("myModal-add-members");
  function PopupAddBoard(){
	modalAddMember.style.zIndex = "30";
	modalAddMember.style.display = "block";
  }
  
  function CloseAddBoard(){
	modalAddMember.style.display = "none";  
  }
  
  document.getElementById("close-add-members").addEventListener("click", CloseAddBoard);
  
  document.getElementById("addMember").addEventListener("click", function(){
	 var form = new FormData();
	 form.append("member-name", document.getElementById("member-name").value);
	 form.append("member-id", document.getElementById("member-id").value);
	 form.append("userid", usr);
	 //form.append("sessionid", session_id);
	 $.ajax({
		type: "POST",
		url: urls[5],
		contentType: false,
		cache: false,
		processData: false,
		data: form,
		success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);			
			if(data_returned.state == 200){
			
			  document.getElementById("modal-content-chat-board").innerHTML = data_returned.chatBoard;

			  for(var ids = 0;ids <= data_returned.chatUserIDs.userid.length;ids++){
			     convers(data_returned.chatUserIDs.userid[ids], 
				 data_returned.chatUserIDs.username[ids], 
				 data_returned.chatUserIDs.session_id, data_returned.chatUserIDs.avatar[ids]);
			  }
			  
			}else if(data_returned.state == 506){
			  AlertBoxInModal(data_returned.session);
			}else{
			  //document.getElementById("error-log").innerHTML = data_returned.session;
			}
		},
		error: function(){}
	 });	  
  });
  
</script>
<?php include('footer.php');?>  

</div>

<div class="modal-chat-board" id="myModal-chat-board">
 <span class="close-chat-board" id="close-chat-board" style="z-index: 21">&times;</span>
 <button class="close-chat-board-2 w3-btn" id="close-chat-board-2">&times;</button>
 <div class="modal-content-chat-board" id="modal-content-chat-board">
 
 </div>
</div>

<script src="chat2.js"></script>
<!--<script src="chat2.js"></script>-->

<script>
	function switcher(){
		document.getElementById("content").className = "content f5content";
		document.getElementById("sidepanel").className = "sidepanel f5sidepanel";
	}
</script>

<div class="modal-ripa-board overlay" id="modal-ripa-board" style="overflow-y: auto">
 <span class="close-ripa-board" id="close-ripa-board">
  <a href="javascript:void(0)">&times;</a>
 </span>
 <div class="modal-content-ripa-board" id="modal-content-ripa-board">
 
 <h1 style="color: dodgerblue">Welcome to Ripa Services</h1>
  <p style="color: white"><i>Use Ripa, Fund your DREAMS</i></p>
  
  <div class="modal-contain-didcy-ripa" id="modal-contain-didcy-ripa">
    <div class="row">
      <div class="column col-ripa">
	   <button type="button" class="button" id="gaga-uplay">UPlay</button>
	  </div>
      <div class="column col-ripa">
	   <button type="button" class="button" id="gaga-ripabet">RipaBet</button>
	  </div>
      <div class="column col-ripa">
	   <button type="button" class="button" id="gaga-ripabank">RipaBank</button>
	  </div>
    </div>  
  
  </div>  
  
 </div>
</div>

<div class="modal-didcy-ripa-bank modal-ripa-bank overlay" id="modal-ripa-bank" style="overflow-y: auto">
 <span class="close-didcy-ripa-bank close-ripa-bank" id="close-ripa-bank">&times;</span>
 <div class="modal-content-didcy-ripa-bank modal-content-ripa-bank" id="modal-content-ripa-bank">
  
   <h1 style="color: rgba(255, 100, 100, 1)">Welcome to Ripa Bank</h1>
   <p style="">Please kindly read through <b style="color: dodgerblue">Ripa Bank</b> manual for info. Thank you.</p>
   
 </div>
</div>

<div class="modal-plugins-board overlay" id="modal-plugins-board" style="overflow-y: auto">
 <span class="close-plugins-board" id="close-plugins-board">
  <a href="javascript:void(0)">&times;</a>
 </span>
 <div class="modal-content-plugins-board" id="modal-content-plugins-board">
 
 <h1 style="color: dodgerblue">Welcome to DidcyFix</h1>
  <p style="color: white"><i>Use DidcyFix, Solve your Puzzles</i></p>
  
  <div class="modal-contain-didcy-fixes" id="modal-contain-didcy-fixes">
    <div class="row" id="didcy-fixes-row">
      <div class="column col-fixes">
	   <button type="button" class="button" id="split">Split</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="quak">Quak</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="hairy">Hairy</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="list">List</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="uik">Uik</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="pool">Pool</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="thwark">Thwark</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="scarq">Scarq</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="york">York</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="pat">Pat</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="ghrap">Ghrap</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="load">Load</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="push">Push</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="hyke">Hyke</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="die">Die</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="smile">Smile</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="salary">Salary</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="shork">Shork</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="freak">Freak</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="fight">Fight</button>
	  </div>
      <div class="column col-fixes">
	   <button type="button" class="button" id="spy">Spy</button>
	  </div>
    </div>  
  
  </div>  
  
 </div>
</div>

<div class="modal-didcy-fixes modal-split overlay" id="modal-split" style="overflow-y: auto">
 <span class="close-didcy-fixes close-split" id="close-split">&times;</span>
 <div class="modal-content-didcy-fixes modal-content-split" id="modal-content-split">
  
   <h1 style="color: rgba(255, 100, 100, 1)">Welcome to Split</h1>
   <p style="">Please kindly read through <b style="color: dodgerblue">SPLIT</b> manual for info. Thank you.</p>
   
 </div>
</div>

<div class="modal-didcy-fixes modal-quak overlay" id="modal-quak" style="overflow-y: auto">
 <span class="close-didcy-fixes close-quak" id="close-quak">&times;</span>
 <div class="modal-content-didcy-fixes modal-content-quak" id="modal-content-quak">
  
   <h1 style="color: rgba(100, 100, 255, 1)">Welcome to Quak</h1>
   <p style="">Please kindly read through <b style="color: dodgerblue">QUAK</b> manual for info. Thank you.</p>
   
 </div>
</div>

<div id="modal-progress-connect-bar" class="w3-modal modal-progress-connect-bar" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)">
    <div class="w3-modal-content w3-animate-bottom modal-content-progress-connect-bar" id="modal-content-progress-connect-bar">
       <div class="w3-container connect-counter">
         <p id="connect-count-down" class="connect-count-down"></p>
		 
		 <div id="connect-adv-Progress" class="connect-adv-Progress">
		  <div id="connect-adv-Bar">0%</div>
		 </div>		 
		 
       </div>
    </div>
</div>

<div class="modal-connections overlay" id="modal-connections" style="overflow-y: auto">
 <span class="close-connections" id="close-connections">
 <a href="javascript:void(0)">&times;</a></span>
 <div class="modal-content-connections" id="modal-content-connections">
  <h1 style="color: dodgerblue;font-weight: bolder">Welcome to Didcy Team</h1>
  <p style="color: white">You're offically and publicly one of us now.</p>
  <p style="color: white">Start building with your skills and make your users happy.</p>
  <p style="color: white"> Your family, children and  our communities are also happy for you.</p>
  <h3 style="color: rgba(105, 220, 160, 1)">Here at <b>Didcy</b>, we see through you.</h3>
  <h2 style="color: dodgerblue">Have a nice <b>STAY</b>. We love you.</h2>
  <h1 style="color: dodgerblue;font-weight: bold">Welcome <b>CHAMP</b>.</h1>
 
  <p>
    These are Didcy credentials to any account of ours. 
   </p>
	<p><i style="color: dodgerblue">
	  GitHub : Didcy
	</i></p>
	<p><i style="color: dodgerblue">
	  Youtube : Didcy 
	</i></p>
	<p><i style="color: dodgerblue">
	  Facebook : Didcy
	</i></p>
	<p><i style="color: dodgerblue">
	  E-mail : team@didcy.com
	</i></p>
	<p>Kindly make discrete use of it.</p>
	<p>Thank you. <i>Didcy</i></p>
 
 </div>
 
</div>

<div id="modal-work-applicant-camera-board" class="modal-work-applicant-camera-board">
  <span class="close-work-applicant-camera-board" id="close-work-applicant-camera-board">
   &times;</span>
   <div class="modal-content-work-applicant-camera-board" id="modal-content-work-applicant-camera-board">		 
	   <video id="video-work-apply" class="video-work-apply" width="1022" height="500" muted=true controls=false loop=1 autoplay=true></video>
	   <canvas id="canvas" class="canvas"></canvas>
	   <img id="image-work-apply" class="image-work-apply" alt="" title="" download="" ping=""/>
	   <button class="video-btn" id="video-btn">Capture</button>  
   </div>

	<div id="adv-f" class="adv-f">
	 <form id="adv-fx" name="adv-fx">
	  <input type="file" class="custom-file-input-0" name="uploadsWorkApply" id="uploads-4" enctype="form/multipart-data">
	  <input type="submit" name="submit" class="upload-3" value="Upload" id="upload-3" title="Get your ads viewed first before your competitors">
	 </form> 
	</div>
	
  <!--</div>-->
</div>

<div id="work-apply-container" class="modal-signup modal-work-apply">
  <span class="close-work-apply" id="close-work-apply" title="Close Modal">&times;</span>
  <div class="modal-content-signup modal-content-work-apply" id="modal-content-work-apply">
	<div class="welcome-didcy-work-container">
		<h1 class="welcome-didcy-work welcome-didcy-developer-portal">Welcome to Developer Portal</h1>
		<p class="work-as-a-puzzle">Where work is a puzzle</p>
	</div>

	<div class="container-didcy-work">
	  <form id="didcy-work-form">
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="fname">First Name</label>
		  </div>
		  <div class="col-75">
			<input type="text" class="didcy-text" id="applicant-firstname" name="firstname" placeholder="Your first name..">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="lastname">Last Name</label>
		  </div>
		  <div class="col-75">
			<input type="text" class="didcy-text" id="applicant-lastname" name="lastname" placeholder="Your last name..">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="country">Country</label>
		  </div>
		  <div class="col-75">
			<select class="didcy-select" id="applicant-country" name="country">
			<option name="">No Country</option>	
			<option name="">Åland Islands</option>	
			<option name="">Afghanistan</option>	
			<option name="">Albania</option>	
			<option name="">Algeria</option>	
			<option name="">American Samoa</option>	
			<option name="">Andorra</option>	
			<option name="">Angola</option>	
			<option name="">Anguilla</option>	
			<option name="">Antigua and Barbuda</option>	
			<option name="">Argentina</option>	
			<option name="">Armenia</option>	
			<option name="">Aruba</option>	
			<option name="">Australia</option>	
			<option name="">Austria</option>	
			<option name="">Azerbaijan</option>	
			<option name="">Bahamas</option>	
			<option name="">Bahrain</option>	
			<option name="">Bangladesh</option>	
			<option name="">Barbados</option>	
			<option name="">Belarus</option>	
			<option name="">Belgium</option>	
			<option name="">Belize</option>	
			<option name="">Benin</option>	
			<option name="">Bermuda</option>	
			<option name="">Bhutan</option>	
			<option name="">Bolivia</option>	
			<option name="">Bonaire</option>	
			<option name="">Bosnia and Herzegovina</option>	
			<option name="">Botswana</option>	
			<option name="">Brazil</option>	
			<option name="">British Indian Ocean Territory</option>	
			<option name="">British Virgin Islands</option>	
			<option name="">Brunei</option>	
			<option name="">Bulgaria</option>	
			<option name="">Burkina Faso</option>	
			<option name="">Burundi</option>	
			<option name="">Cambodia</option>	
			<option name="">Cameroon</option>	
			<option name="">Canada</option>	
			<option name="">Cape Verde</option>	
			<option name="">Cayman Islands</option>	
			<option name="">Central African Republic</option>	
			<option name="">Chad</option>	
			<option name="">Chile</option>	
			<option name="">China</option>	
			<option name="">Colombia</option>	
			<option name="">Comoros</option>	
			<option name="">Democratic Republic of the Congo</option>	
			<option name="">Republic of the Congo</option>	
			<option name="">Cook Islands</option>	
			<option name="">Costa Rica</option>	
			<option name="">Croatia</option>	
			<option name="">Cuba</option>	
			<option name="">Curaçao</option>	
			<option name="">Cyprus</option>	
			<option name="">Czech Republic</option>	
			<option name="">Denmark</option>	
			<option name="">Djibouti</option>	
			<option name="">Dominica</option>	
			<option name="">Dominican Republic</option>	
			<option name="">Ecuador</option>	
			<option name="">Egypt</option>	
			<option name="">El Salvador</option>	
			<option name="">Equatorial Guinea</option>	
			<option name="">Eritrea</option>	
			<option name="">Estonia</option>	
			<option name="">Ethiopia</option>	
			<option name="">Falkland Islands</option>	
			<option name="">Faroe Islands</option>	
			<option name="">Fiji</option>	
			<option name="">Finland</option>	
			<option name="">France</option>	
			<option name="">French Guiana</option>	
			<option name="">French Polynesia</option>	
			<option name="">French Southern and Antarctic Lands</option>	
			<option name="">Gabon</option>	
			<option name="">Gambia</option>	
			<option name="">Georgia</option>	
			<option name="">Germany</option>	
			<option name="">Ghana</option>	
			<option name="">Gibraltar</option>	
			<option name="">Greece</option>	
			<option name="">Greenland</option>	
			<option name="">Grenada</option>	
			<option name="">Guadeloupe</option>	
			<option name="">Guam</option>	
			<option name="">Guatemala</option>	
			<option name="">Guinea</option>	
			<option name="">Guinea-Bissau</option>	
			<option name="">Guyana</option>	
			<option name="">Haiti</option>	
			<option name="">Honduras</option>	
			<option name="">Hong Kong</option>	
			<option name="">Hungary</option>	
			<option name="">Iceland</option>	
			<option name="">India</option>	
			<option name="">Indonesia</option>	
			<option name="">Iran</option>	
			<option name="">Iraq</option>	
			<option name="">Ireland</option>	
			<option name="">Israel</option>	
			<option name="">Italy</option>	
			<option name="">Ivory Coast</option>	
			<option name="">Jamaica</option>	
			<option name="">Japan</option>	
			<option name="">Jordan</option>	
			<option name="">Kazakhstan</option>	
			<option name="">Kenya</option>	
			<option name="">Kiribati</option>	
			<option name="">North Korea</option>	
			<option name="">South Korea</option>	
			<option name="">Kosovo</option>	
			<option name="">Kurdistan</option>	
			<option name="">Kuwait</option>	
			<option name="">Kyrgyzstan</option>	
			<option name="">Laos</option>	
			<option name="">Latvia</option>	
			<option name="">Lebanon</option>	
			<option name="">Lesotho</option>	
			<option name="">Liberia</option>	
			<option name="">Libya</option>	
			<option name="">Liechtenstein</option>	
			<option name="">Lithuania</option>	
			<option name="">Luxembourg</option>	
			<option name="">North Macedonia</option>	
			<option name="">Macau</option>	
			<option name="">Premium channels</option>	
			<option name="">Madagascar</option>	
			<option name="">Malawi</option>	
			<option name="">Malaysia</option>	
			<option name="">Maldives</option>	
			<option name="">Mali</option>	
			<option name="">Malta</option>	
			<option name="">Marquesas Islands</option>	
			<option name="">Marshall Islands</option>	
			<option name="">Martinique</option>	
			<option name="">Mauritania</option>	
			<option name="">Mauritius</option>	
			<option name="">Mayotte</option>	
			<option name="">Mexico</option>	
			<option name="">Over-the-air</option>	
			<option name="">National TV Broadcast</option>	
			<option name="">Federated States of Micronesia</option>	
			<option name="">Midway Islands</option>	
			<option name="">Moldova</option>	
			<option name="">Monaco</option>	
			<option name="">Mongolia</option>	
			<option name="">Montenegro</option>	
			<option name="">Montserrat</option>	
			<option name="">Morocco</option>	
			<option name="">Mozambique</option>	
			<option name="">Myanmar</option>	
			<option name="">Namibia</option>	
			<option name="">Nepal</option>	
			<option name="">Netherlands</option>	
			<option name="">Netherlands Antilles</option>	
			<option name="">New Caledonia</option>	
			<option name="">New Zealand</option>	
			<option name="">Nicaragua</option>	
			<option name="">National channels</option>	
			<option name="">Local channels</option>	
			<option name="">Niger</option>	
			<option name="">Nigeria</option>	
			<option name="">Niue</option>	
			<option name="">Northern Mariana Islands</option>	
			<option name="">Norway</option>	
			<option name="">Oman</option>	
			<option name="">Pakistan</option>	
			<option name="">Palau</option>	
			<option name="">Palestine</option>	
			<option name="">Panama</option>	
			<option name="">Papua New Guinea</option>	
			<option name="">Paraguay</option>	
			<option name="">Peru</option>	
			<option name="">Philippines</option>	
			<option name="">Government-owned networks</option>	
			<option name="">Minor television networks</option>	
			<option name="">Pitcairn Islands</option>	
			<option name="">Poland</option>	
			<option name="">Portugal</option>	
			<option name="">Puerto Rico</option>	
			<option name="">Qatar</option>	
			<option name="">Réunion</option>	
			<option name="">Romania</option>	
			<option name="">Russia </option>	
			<option name="">Rwanda</option>	
			<option name="">Saba</option>	
			<option name="">Saint Barthélemy</option>	
			<option name="">Saint Kitts and Nevis</option>	
			<option name="">Saint Lucia</option>	
			<option name="">Sint Maarten</option>	
			<option name="">Saint Pierre and Miquelon</option>	
			<option name="">Saint Vincent and the Grenadines</option>	
			<option name="">Samoa</option>	
			<option name="">San Marino</option>	
			<option name="">São Tomé and Príncipe</option>	
			<option name="">Saudi Arabia</option>	
			<option name="">Senegal</option>	
			<option name="">Serbia</option>	
			<option name="">Seychelles</option>	
			<option name="">Sierra Leone</option>	
			<option name="">Singapore</option>	
			<option name="">Sint Eustatius</option>	
			<option name="">Slovakia</option>	
			<option name="">Slovenia</option>	
			<option name="">Solomon Islands</option>	
			<option name="">Somalia</option>	
			<option name="">South Africa</option>	
			<option name="">Spain</option>	
			<option name="">Sri Lanka</option>	
			<option name="">Sudan</option>	
			<option name="">South Sudan</option>	
			<option name="">Suriname</option>	
			<option name="">Eswatini</option>	
			<option name="">Sweden</option>	
			<option name="">Switzerland</option>	
			<option name="">Syria</option>	
			<option name="">Taiwan</option>	
			<option name="">Tajikistan</option>	
			<option name="">Tanzania</option>	
			<option name="">Thailand</option>	
			<option name="">Tibet</option>	
			<option name="">Timor-Leste</option>	
			<option name="">Togo</option>	
			<option name="">Tokelau</option>	
			<option name="">Tonga</option>	
			<option name="">Trinidad and Tobago</option>	
			<option name="">Tristan da Cunha</option>	
			<option name="">Tunisia</option>	
			<option name="">Turkey</option>	
			<option name="">Turkmenistan</option>	
			<option name="">Turks and Caicos Islands</option>	
			<option name="">Tuvalu</option>	
			<option name="">Uganda</option>	
			<option name="">Ukraine</option>	
			<option name="">United Arab Emirates</option>	
			<option name="">United Kingdom</option>	
			<option name="">United States</option>	
			<option name="">Over-the-air</option>	
			<option name="">Cable and satellite</option>	
			<option name="">Defunct</option>	
			<option name="">United States Virgin Islands</option>	
			<option name="">Uruguay</option>	
			<option name="">Uzbekistan</option>	
			<option name="">Vanuatu</option>	
			<option name="">Vatican City</option>	
			<option name="">Venezuela</option>	
			<option name="">Vietnam</option>	
			<option name="">Wake Island</option>	
			<option name="">Wallis and Futuna</option>	
			<option name="">Western Sahara</option>	
			<option name="">Yemen</option>	
			<option name="">Zambia</option>	
			<option name="">Zanzibar</option>	
			<option name="">Zimbabwe</option>
			</select>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="mobile-number">Telephone No.</label>
		  </div>
		  <div class="col-75">
		   <input type="tel" class="didcy-tel" name="mobile-number" id="applicant-tel"><!--placeholder="Telephone number.."-->
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="id-card">Select your ID card</label>
		  </div>
		  <div class="col-75">
			<input type="file" id="applicant-id-card" class="custom-file-input-0" name="id-card" enctype="multipart/form-data">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="bacn">Bank A/C No.</label>
		  </div>
		  <div class="col-75">
			<input type="text" id="applicant-bankACNo" class="didcy-text bacn" name="bacn" placeholder="Bank Account Number ...">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<label class="didcy-lab" for="or">OR</label>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="cnumber">Card Number (<b style="color: dodgerblue">Disabled at the moment</b>)</label>
		  </div>
		  <div class="col-75">
			<input disabled title="Card Number input field is disabled at the moment" type="text" id="applicant-cnumber" class="didcy-text cnumber" name="cnumber" placeholder="Card Number ">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<label class="didcy-lab" for="or">OR</label>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="mobile-money-number">Mobile Money Number</label>
		  </div>
		  <div class="col-75">
			<input type="tel" id="applicant-mobileMoneyNo" class="mmn didcy-tel" name="mmn"><!-- placeholder="Mobile Money Number ..."-->
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="primary-skills">Choose your Primary Skills or What you can do best</label>
		  </div>
		  <div class="col-75">
			<select id="applicant-primarySkills" class="didcy-select">
			 <option name="" id="">No Skills</option>
			 <option name="" id="">Programming</option>
			 <option name="" id="">Web Development</option>
			 <option name="" id="">Site Administrator</option>
			 <option name="" id="">Creator, Idealist, Tinker or Thinker</option>
			 <option name="" id="">Graphic Design</option>
			 <option name="" id="">Programming, Web Development &amp; Graphic Design</option>
			 <option name="" id="">Sales</option>
			 <option name="" id="">Marketing</option>
			 <option name="" id="">Sales & Marketing</option>
			 <option name="" id="">Sales & Digital Marketing</option>
			 <option name="" id="">Digital Marketing</option>
			 <option name="" id="">Sales, Marketing &amp; Advertising</option>
			 <option name="" id="">SEO Advertising</option>
			 <option name="" id="">SEO Keyword Researcher</option>
			 <option name="" id="">Social Media Advertising</option>
			 <option name="" id="">Digital Advertising</option>
			 <option name="" id="">Audio Advertising</option>
			 <option name="" id="">Software Engineer</option>
			 <option name="" id="">Software Developer</option>
			 <option name="" id="">Software Engineer & Developer</option>
			 <option name="" id="">Full Stack Developer</option>
			 <option name="" id="">Back-end Developer</option>
			 <option name="" id="">Front-end Developer</option>
			 <option name="" id="">Tax Accountant</option>
			 <option name="" id="">Tax advisor</option>
			 <option name="" id="">Tax Attorney</option>
			 <option name="" id="">Accountant</option>
			 <option name="" id="">Chartered Accountant</option>
			 <option name="" id="">Bug Hunter</option>
			 <option name="" id="">Hacker(all kinds)</option>
			 <option name="" id="">Banker</option>
			 <option name="" id="">Social Media Manager</option>
			</select>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="secondary-skills">Choose your Secondary Skills</label>
		  </div>
		  <div class="col-75">
			<select id="applicant-secondarySkills" class="didcy-select">
			 <option name="" id="">No Skills</option>
			 <option name="" id="">Programming</option>
			 <option name="" id="">Web Development</option>
			 <option name="" id="">Site Administrator</option>
			 <option name="" id="">Creator, Idealist, Tinker or Thinker</option>
			 <option name="" id="">Graphic Design</option>
			 <option name="" id="">Programming, Web Development &amp; Graphic Design</option>
			 <option name="" id="">Sales</option>
			 <option name="" id="">Marketing</option>
			 <option name="" id="">Sales & Marketing</option>
			 <option name="" id="">Sales & Digital Marketing</option>
			 <option name="" id="">Digital Marketing</option>
			 <option name="" id="">Sales, Marketing &amp; Advertising</option>
			 <option name="" id="">SEO Advertising</option>
			 <option name="" id="">SEO Keyword Researcher</option>
			 <option name="" id="">Social Media Advertising</option>
			 <option name="" id="">Digital Advertising</option>
			 <option name="" id="">Audio Advertising</option>
			 <option name="" id="">Software Engineer</option>
			 <option name="" id="">Software Developer</option>
			 <option name="" id="">Software Engineer & Developer</option>
			 <option name="" id="">Full Stack Developer</option>
			 <option name="" id="">Back-end Developer</option>
			 <option name="" id="">Front-end Developer</option>
			 <option name="" id="">Tax Accountant</option>
			 <option name="" id="">Tax advisor</option>
			 <option name="" id="">Tax Attorney</option>
			 <option name="" id="">Accountant</option>
			 <option name="" id="">Chartered Accountant</option>
			 <option name="" id="">Bug Hunter</option>
			 <option name="" id="">Hacker(all kinds)</option>
			 <option name="" id="">Banker</option>
			 <option name="" id="">Social Media Manager</option>
			</select>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="daily-revenue">How much do you think any of your programs can generate in revenue on a daily basis?</label>
		  </div>
		  <div class="col-75">
			<input type="number" id="applicant-programsDailyRevenue" placeholder="Amount of revenue per day" min="0" max="1000000000000" name="" class="didcy-number">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<label class="didcy-lab" for="or">OR</label>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<input type="checkbox" id="applicant-not-now-pr"><span  style="padding-left: 5px;color: black;">Not Now</span>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="daily-users">How many people do you think any of your programs can attract on a daily basis?</label>
		  </div>
		  <div class="col-75">
			<input type="number" min="0" placeholder="Number of usages(users) per day" id="applicant-programsDailyUsers" max="1000000000000" name="" class="didcy-number">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<label class="didcy-lab" for="or">OR</label>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<input type="checkbox" id="applicant-not-now-pu"><span  style="padding-left: 5px;color: black;">Not Now</span>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="daily-users">What values do you think any of your programs can provide to its users?</label>
		  </div>
		  <div class="col-75">
			<textarea id="applicant-programsValues" name="values" class="tarea" placeholder="Tell your users, they're waiting ..." style="height:200px"></textarea>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<label class="didcy-lab" for="or">OR</label>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			
		  </div>
		  <div class="col-75">
			<input type="checkbox" id="applicant-not-now-pv"><span  style="padding-left: 5px;color: black;">Not Now</span>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="subject">Kindly profile yourself to your team</label>
		  </div>
		  <div class="col-75">
			<textarea id="applicant-profile" class="tarea" name="subject" placeholder="Share yourself, make it quick .." style="height:200px"></textarea>
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-git" for="didcy-git">Github Name</label>
		  </div>
		  <div class="col-75">
			<input type="text" name="didcy-git" id="didcy-git" class="didcy-text didcy-git" placeholder="Your GitHub Name...">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-mail" for="didcy-mail">E-mail</label>
		  </div>
		  <div class="col-75">
			<input type="email" name="didcy-email" id="didcy-email" class="didcy-email" placeholder="Your email...">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-password" for="didcy-password">Password</label>
		  </div>
		  <div class="col-75">
			<input type="password" name="didcy-password" id="didcy-password" class="didcy-text didcy-password" placeholder="Your Password...">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-username" for="didcy-username">Username</label>
		  </div>
		  <div class="col-75">
			<input type="text" name="didcy-username" id="didcy-username" class="didcy-text didcy-username" placeholder="Your Username...">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label class="didcy-lab" for="camera">Please kindly take a live photo 
			<b class="arrow-right" style="font-size: 20px;font-weight: bolder">&rarr;</b>
			<b class="arrow-down" style="padding-left: 200px;font-size: 20px;font-weight: bolder">&darr;</b></label>
		  </div>
		  <div class="col-75">
			<button type="button" id="applicant-take-a-photo" class="take-photo">Take a Photo</button>
		  </div>
		</div>    
			<p style="text-align: center;color: black;">By creating an account you agree to our <a id="didcy-work-policy-from-form" style="color:dodgerblue;cursor: pointer">Developer Terms & Privacy</a>.</p>
		  
		<div class="row">
		  <input type="submit" id="didcy-work-form-submit" class="didcy-work-form-submit" value="Submit">
		</div>
	  </form>
	</div>  

 </div> 
</div> 


<div class="modal-sitemap" id="myModal-sitemap">
  <span class="close-sitemap closebtn" id="close-sitemap">
    <a href="javascript:void(0)">&times;</a>
  </span> 
  <div class="modal-content-sitemap">
   <h1 style="color: white;text-align: center">Didcy SiteMap</h1>
	<div class="row">
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Content Selection</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Industry</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Services</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Contacts</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Notification</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Search</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Sign In</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">Sign Up</h2>
	  </div>
	  <div class="column-sitemap">  
	   <h2 style="color: white;text-align: center">About</h2>
	  </div>
	</div>
  </div>
</div>

<div id="myModal-advertisement-channels" class="modal-advertisement-channels overlay">
  <span class="close-advertisement-channels closebtn" id="close-advertisement-channels">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-advertisement-channels">
      <h1 style="color: white;text-align: center">Hello, Welcome to Didcy Channels</h1>
	  <div class="row-6">
		  <div class="column-plat column-" id="column"> 
			  <button class="button" id="seo-advertising">SEO Advertising</button>   
			  <button class="button" id="content-advertising">Content Advertising</button>   
		  </div>
	  </div>
  </div>
  <div id="caption-advertisement-channels" class="caption-advertisement-channels">Didcy Ad Channels</div>
</div>

<div id="myModal-seo-advertisement" class="modal-seo-advertisement">
  <span class="close-seo-advertisement closebtn" id="close-seo-advertisement">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-seo-advertisement">
    <h2 style="color: white;text-align: left">Hello Didcer,</h2>
    <h1 style="color: white;text-align: center" class="hello-ex">Welcome to Didcy SEO Advertisement Centre</h1>
  </div>
</div>

<div id="myModal-companies-only" class="modal-companies-only overlay"  style="overflow-y: auto">
  <span class="close-companies-only closebtn" id="close-companies-only">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-companies-only">
    <h2 style="color: white;text-align: left">Hello Didcer,</h2>
    <h1 style="color: white;text-align: center" class="hello-ex">Welcome to Didcy Companies Informations</h1>
  </div>
</div>

<div id="myModal-actors-groups-only" class="modal-actors-groups-only w3-modal-content w3-animate-bottom">
  <span class="close-actors-groups-only closebtn" id="close-actors-groups-only">
    &times;
	</span>
  <div class="modal-content-actors-groups-only">
    <h2 style="color: white;text-align: left">Hello Didcer,</h2>
    <h1 style="color: white;text-align: center" class="hello-ex">Welcome to Didcy Actors &amp; Groups Data Centre</h1>
  </div>
</div>

<div id="myModal-content-integration" class="modal-content-integration">
  <span class="close-content-integration closebtn" id="close-content-integration">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-content-integration">
    <h2 style="color: white;text-align: left">Hello Didcer,</h2>
    <h1 style="color: white;text-align: center" class="hello-ex">Welcome to Didcy Content Integration Service Centre</h1>
  </div>
</div>


<div id="myModal-Terms" class="modal-Terms overlay">
  <span class="close-Terms closebtn" id="close-Terms">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-Terms">
      <h2 class="welcome-to-didcy-policies" style="text-align:center">Welcome to Didcy Policies</h2>
	  <div class="row-6" style="padding:0">
		  <div class="column-plat column-" id="column"> 
			  <button class="button" id="didcy-cookie">DidcyCook</button>
			  <!--Cookie -->			  
			  <button class="button" id="didcy-terms">DidcyTerm</button>   
			  <!--Terms-->
			  <button class="button" id="didcy-security">DidcySec</button>   <!--Security -->
			  <button class="button didcy-po" id="didcy-dispute">DidcyPute</button>
			  <button class="button didcy-po" id="didcy-limit">DidcyLim</button><!-- Limit-->			  
			  <button class="button didcy-po" id="didcy-profiles">DidcyProf</button>   <!-- Profiles-->
			  <button class="button didcy-po" id="didcy-subscribe">DidcyCribe</button>   <!--Subscribe --> 
			  <button class="button didcy-po" id="didcy-work">DidcyDev</button>   <!--Subscribe -->
			  <button class="button" id="didcy-upload-system">DidcyUpload</button>   <!--Subscribe -->
		  </div>
	  </div>
  </div>
</div>

<div id="myModal-upload-system" class="w3-animate-right modal-upload-system overlay" style="text-align:justify;overflow-y: auto">
  <span class="close-upload-system closebtn" id="close-upload-system" onclick="document.getElementById('myModal-upload-system').style.height='0%'">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-upload-system" style="text-align:justify;">
   <h1 style="text-align:center"><b>Welcome to Upload Policy</b></h1>
   <p style="color: white">Didcy upload policy helps it's users know and understand how to make the most out of 
   it's upload services or features. The upload services or features are a collection of integrated 
   upload tools employed to help users make fast, easier and smooth upload of all user assets unto Didcy cloud systems.</p>
   <p style="color: white">To find out more about how and when to utilize these incredible features, kindly make it 
   a must to patiently read or go through these very policy carefully with no interruptions or disturbance.</p>
   <h2 style="text-align:center;color:white">How to utilize Didcy Uploads</h2>
   <p style="color: white">The following data points below provides us insight on how to fully utilize Didcy Upload features to its maximum.</p>
   <ol type="1">
    <li style="color:white">Click on any of the file inputs that requires you to input &gt;= 1 file.</li>
    <li style="color:white">Select 1 or more file(s) depending on the input's required number.</li>
    <li style="color:white">After selection, hover or place(without clicking) the mouse cursor on 
	the current operating file input and read the data it displays to you to see if the file(s) you've selected 
	is/are the same as what is being displayed.</li>
    <li style="color:white">Click on the upload button adjacent the current operating file input.</li>
    <li style="color:white">If you clicked on the upload button without making any file(s) selection, then the upload 
	error text will be presented to you.</li>
    <li style="color:white">Depending on the current operating file upload, a text will either be displayed to indicate 
	a success or an error in relation to the upload operation or a collection of video, static or audio ads would be 
	displayed to you. For example, the upload feature you see displayed to the right side of the page immediately after a signin or up 
	is initiated will display uploaded ads depending on the type of ad you uploaded and the inital characters of the ad name.</li>	
    For example, a just-uploaded ad, let's say an Audio ad with the same inital character(s) or same name as an already uploaded video ad(s) 
	will not display any ad or audio ad in relation to the just-uploaded ad file format but instead a selection for a particular ad format 
	will be provided for you to choose from.
	To make it more clearer, conventionally, when an ad is uploaded, the format of the ad file is used to display any ad in relation to that 
	format from our database but when the ad(s) uploaded or to be  uploaded shares the same initial characters or name(s) as other formats(eg. video, audio, static/image) then a format selection 
	is required for a display to take effect.
	For example, in the database, there is a video ad with the name "Didcy_Cups" or initial Characters "Didcy_Cups"
	and the name or initial characters of the ad(s) uploaded or to be uploaded are the same, then 
	a format selection is presented instead of retrieving any ad(s) with the same uploaded format.
	Same operation applies to ads with the same inital character.</li>
   </ol>
   <h2 style="text-align:center;color:white">When to utilize Didcy Uploads</h2>
   <p style="color: white">The following data points below provides us insight on when to utilize Didcy Upload features.</p>
   <p style="color: white">When uploading</p>
   <ol style="list-style-type: circle"> 
   <li style="color: white">a profile image</li>
   <li style="color: white">your ads</li>
   <li style="color: white">your program or plugin file(s).</li>
   <li style="color: white">your interactive courses.</li>
   <li style="color: white">your interesting books.</li>
   <li style="color: white">your consumer products or service ads.</li>
   <li style="color: white">your exhibited ad(s) infos.</li>
   </ol>
   <h2 style="text-align:center;color:white">The Ad Select &amp; Upload button</h2>
   <p style="color: white">The ad select &amp; upload button is used to select and upload 
   creator's assets(ads) unto our cloud MyAd systems for later retrieval. This cloud concept
   is designed to help ad creators, designers and companies free up more space and also avoid any system 
   crashes or failures during ads creation on your local workstation(s).
   Our cloud MyAd systems are absolutely free of charge. You can cloud as much ads you want.</p>
   <p style="color: white">All you need is to <b><i>keep clouding more and we keep providing more</i></b>. That's why we say, Cloud more, Free more.</p>
   <p style="color: white"><b>No fees or charges applied.</b> Just <b><i>FREEEEEEEE</i></b>.</p>
   </ol>
   <p style="color: white">For more info on Didcy Uploads Policy, kindly reach out to or contact us by looking up our contact informations 
	  at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only you. <br><br>	
      Thank you.	</p>
   <p style="color: white">For more info on Didcy Uploads Policy, kindly reach out to or contact us by looking up our contact informations 
	  at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only you. <br><br>	
      Thank you.	</p>
  </div>
</div><!--w3-animate-right -->

<div id="myModal-work" class="modal-work overlay" style="overflow-y: auto">
  <span class="close-work closebtn" id="close-work">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-work">
    <h1 class="didcy-work-policy" id="didcy-work-policy" style="color: white;text-align: center"><b class="didcy-work-policy">Welcome to Developer Policy</b></h1>
	<!--<h2 class="welcome-2-didcy-work-policy" id="welcome-2-didcy-work-policy" style="color: white;text-align: center"><b class="welcome-2-didcy-work-policy">Welcome to Developer Policy</b></h2>
	-->
	<p>
	 <!--As humans or inhabitants of this planet, we all need something or depend on something inorder to 
	 survive one way or the other. You need something to keep running, We as a company also needs something as well for that.
	 Infact we all need each other to make the days count. <q><b>Interdependancy</b></q> is the new normal whether you like it or not.
	 So take it or live it. <q>Globalization</q> is king to the world of internet and we need to embrass it one way or the other.
	 Didcy Work is one powerful and engaging avenue Didcy has tested (and proven right : 100%) and found it much
	 more intuitive to making people feel meaningfully useful in whatever work they engage in on Didcy and the world at
	 large. 
	 Didcy Work is here to change the way work routines or employment programs has being executed for 
	 over centuries now. Didcy Work is nothing soo unique to what's already out there but with a little bit
	 of tweak in the employment programs we can make a different.
	 Didcy Work is simple, engaging and well organized comprehensive program or system of employment. It also
	 comes with no strings or hidden purposes or agenda attached to it. We as a company make sure that 
	 <q><b>TRANSPARENCY</q></b> is <q><b>KING</b></q> and <q><b>CLARITY
	 </q></b> is <q><b>QUEEN</q></b> to our work and daily standards or ethics 
	 and values. As a result of what we believe in, we made it a must to name all our Policies under a single
	 umberella <q><b><strong>Didcy Transparent</strong></b></q>. We may be a company who has pledged to always be transparent but 
	 we should also bear in mind that those running the company (<q>DIDCY</q>) are also humans just the way <q>YOU ARE</q>.
	 And we humans are always born to make mistakes at some point in life, so we urge you to prompt us whenever
	 you think something does not feel right with our company's values or if possible sanction us.
	 Didcy Work brings work to your door steps without the need for you to go searching for it. 
	 NB:// <q><b><em>WORK SEARCH IS OVER, WORK HOME IS THE FUTURE. WORK 9-5 IS OVER, WORK ON MY OWN TERMS IS THE FUTURE.</em></b></q> 
	 <b><strong>SO YOU DECIDE. WHETHER YOU WANT TO BE THE DRIVER OR THE PASSENGER. AS FAR AS WE CAN TELL,
	 DRIVERS ARE FEW AND FEWER IN THE FUTURE TO COME AND PASSENGERS ARE MANY. SO MAKE A DECISION NOW. 
	 DECISONS ARE TOUGH TO MAKE BUT MAKING THEM NOW WHILE YOU'RE YOUNG AND ALIVE MAKES IT WORTHWHILE RATHER
	 THAN LATER.</strong></b>
	 Didcy Work is an employment program with the aim of hiring people for a task not a job to work for.
	 To be more explicit, Didcy work is here to hire people as their helpers and partners or if possible 
	 volunteers not their employees with a daily and monthly payment structure and if possible a negotiable
	 payment system on your own terms. It may look like an employment scheme. Yes it is. This scheme is 
	 employed inorder to catch the focus of all individuals in need of employment and those with other reasons.
	 This scheme also introduces a payment system like the way employment programs are deployed but with 
	 better working conditions than those out there. 
	 Didcy can decide to go ahead and say let's just hire people as our workers or employees without the
	 need for this <q>NONSENSE WE ARE INTRODUCING</q> but we know that our values don't aline that way.
	 Didcy Work has come for all. Didcy Work is an opportunity no one should miss. It's an opportunity that
	 comes in one's life time so take it as it comes your way today. Missing it is like trying to catch your 
	 unproductive usage of your time in your youthful days. So please make it a must to take this gift to the 
	 world. It's free of charge. No Fees needed to engage in. Just Apply and see for yourself. Why? Because 
	 experience is the best teacher. Some may criticize this gift of life, others may hail it but you decide
	 whether to be just a listener or the doer or the involver. 
	 For more info on choices, kindly visit  <a id="choices" class="choices cookie-full-mode-link" href= "https://www.didcy.com/choices" style="color: white" alt="" target="" title="" ping="">
	 https://www.didcy.com/choices</a>.
	 Let us jump right into the necessary requirements or prerequisites needed for an applicant to register.
	 <br><br>Once again, <br>
     <h1>Welcome to Didcy Work Policy</h1>-->
	 Developer Policy is a policy designed to guide developers develop great products and provide better
	 services on our platform("Didcy"). Didcy Developer Room currently has no building tools to
	 aid developers build directly from or on the platform. As a result of this, all developers are urged 
	 to patiently or temporarily build directly from or on their dbacarcollections.ueuo.com until the Room is set for direct deployment.
	 Didcy Developer Room is a development environment where developers can build any product they wish to or 
	 provide any services they want to. No tools currently available in the Room except the <b>file upload tools</b>.
	 All developers or users will be notified or updated as soon as the room is set for development.
	 We as a company/platform together with you, the developer, are going to build the Room as a 
	 great team. Building can be done remotely without the need for you to be physically present in our company.
	 <br>Didcy Developer Policy is a well-structured, comprehensive, easy to articulate, simple and corely designed 
	 to be read or used by every user or individual of Didcy.
	 <br>Our policies, most especially, the Developer Policy restricts no one from building on or using any of our 
	 great products and services. 
	 <br>Didcy policies are here to help you learn more, do more and grow more and not to deter you or anyone from deploying
	 the platform.
	 <br>
	 <br>
	 The information or guide provided below gives a detailed or comprehensive insight on how a developer can <b>join</b> 
	 Didcy Developer Community, where to find your Developer Room, how to use the Room and what to do and what not to do
	 (Dos &amp; Donts).
	 <br>The guide is as follows : 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">How to join Developer Community</h4>
     <ol type="1" style="color: white">
	  <li style="color: white">Click on the <b>Menu or More services or The Coredropdown button 
	  <img class='iconic' src='adv.icons/2377884.png'/></b> in the top navigation menu.</li>
	  <br/><li style="color: white">After clicking on the Menu or More button, click on the Didcy Developer 
	  button below the rest of the buttons located near Didcy React button.</li>
	  <br/><li style="color: white">A Developer portal or form will be presented to you, the developer, to fill it out after you've 
	  clicked on the Didcy Developer Button.</li>
	  <br/><li style="color: white">After you're done filling out the Developer portal or form, kindly go through the completed form
	  or portal again to see if any required field was left out or any mistake was incured during the process.</li>
	  <br/><li style="color: white">Click on the submit button below to submit your completed form or portal for processing and verification.</li>
	  <br/><li style="color: white">Once your informations has being verified and accepted, you'll be presented with a welcome display or portal telling you that
	  you can now proceed on to building on or uploading your product files("program files") on to the platform.</li>
	  <br/><li style="color: white">You can now close(<b>&times;</b>) the welcome display or portal to return back to the Menu or More Service Board.</li>
	  <br/><li style="color: white">Please at the last session of the Developer form or portal, you were required to provide your username and password.
	  <br/><br/>These identities(username &amp; password) will be required whenever you want to access your developer room.
	  <br/><br/>Please note, your <b>USERNAME &amp; PASSWORD</b>.</li>
	  <br/>Please to know more about where to locate or find your developer room, kindly read below to find out more. <br>Thank you.
	 </ol>

	 <h4 style="color: white;font-size:30px;font-weight: bolder">Where to Find your Developer Room</h4>
	 <ol type="1">
	  <li style="color: white">Load or reload the website.</li>
	  <br><li style="color: white">Click on all close buttons that you see or encounter immediately you
	  load or reload the site until you come across or see the Didcy Keys dialog box. 
	  <br><br><li style="color: white">Once you have this dialog infront of you, kindly read the information printed on it.</li>
	  <br><li style="color: white">Once that is done(that is, after reading),
	  you will see the Developer Room presented or displayed to you.</li>
	  <br>Please find out more about how to use your developer room below. <br>Thank you.
	 </ol>
	 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">How to use your Developer Room</h4>
     <p>Please note, before you proceed on to this part of the policy or guide, kindly make sure you've 
	  read and understood the above information.</p>
	 <ol type="1">
	  <li style="color: white">After locating your developer room login board, kindly fill in the blanks or required fields 
	  .</li>
	  <br><li style="color: white">Kindly type in the <b>USERNAME &amp; PASSWORD</b> you provided during your developer registration.</li>
	  <br><li style="color: white">Once that is done(that is, typing in your username &amp; password), click on the <b>LOGIN</b> button below
	  and kindly wait for server response.</li>
	  <br><li style="color: white">If response from server is positive, a developer dashboard will be displayed on the site. 
	  <br>This developer dashboard is also referred to as <b>Developer Room</b>.</li>
	  <br><li style="color: white">Once your room is opened successfully, you can now learn more, do more and grow more with whatever you find in your 
	  <b>ROOM</b>.</li>
	  <br><li style="color: white">Click the close(<b>&times;</b>) button once you're done with your room. The close button is also the <b>LOGOUT</b> button. 
	  <br>It is a multi-functional button which is used for <b>logging out and closing the Room at the same time</b>.</li>
	  <br><p style="color: white">For more info on how to use the features or tools in your Room, kindly visit 
	  Didcy Find. <br>Thank you.</p>
	 </ol>
	 
	 <br> 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Didcy ITRACK API</h4>
	 <p>Didcy ITrack API is a tracking api designed to be integrated into all developer 
	 products and services for successful tracking of their products and services on the
	 platform. <br>ITrack API don't only perform or provide tracking services but also provides other internal 
	 services. For example, the ITrack API is responsible for converting usage, click, advertising, 
	 subscription and other useful data into realtime revenue data for the developer to cash out into 
	 their money account(s). <br>The ITrack API is still being developed to provide more services than 
	 it's current status. 
	 <br><br>
	 <b style="font-weight: bolder">The ITrack API code and parameters are provided below : 
	 </b>
	 <br><br>
	 <b style="font-weight: bolder;color: dodgerblue">
	 <p>ITrack(program_name, developer, program_creation_date, program_creation_time, 
	 program_projected_revenue, program_projected_users, program_value, developer_email)
	 </p>
	 </b>
	 <br><br><b style="font-weight: bolder;color: dodgerblue">For example, <br><br>
	 <code>ITrack("Split", "Nelson Williams", 
	 "2020-02-10", "03:05:20", 4003, 3042, "Help users split their working viewport on the page into multiple parts", 
	 "nelson.williams@gmail.com");
	 </code>
	 <br><br>Sample program code &amp; style code(stylesheet) below : <br><br>
	 
	 <code>
	 var logis = document.getElementById("logis");
	 <br/>
	 <br/>
	 or 
	 <br/>
	 <br/>
	 var logis = document.getElementById("logis");
	 <br/>
	 <br/>
	 logis = document.getElementsByClassName("logis")[0];
	 <br/>
	 <br/>
	 function Logis(){ //function can contain parameters.... 
	 <br/>   
	 <br/>   
		//The ITrack API can be placed anywhere : top or center/middle or bottom of your code(s)....
	 <br/>   
	 <br/>		
		ITrack("Split", "Nelson Williams", "2020-02-10", "03:05:20", 4003, 3042, 
		"Help users split their working viewport on the page into multiple parts", 
	    "nelson.williams@gmail.com");	     
	 <br/>   
	 <br/>		
		 //---code here
	 <br/>   
	 <br/>		 
	 }
	 
	 <br><br>or<br><br> 
	 
	 logis.onclick = function(){
		 Logis();
	 }
	 <br/>   
	 <br/>	 
	 or 
	 <br/>   
	 <br/>	 
	 logis.onclick = function(){
	 <br/>   
	 <br/>	    
		//The ITrack API can be placed anywhere : 
		top or center/middle or bottom of your function or onclick code(s)....
	 <br/>   
	 <br/>		
		ITrack("Split", "Nelson Williams", "2020-02-10", "03:05:20", 4003, 3042, 
		"Help users split their working viewport on the page into multiple parts", 
	    "nelson.williams@gmail.com");	     
	 <br/>   
	 <br/>		
		 //---code here
	 <br/>   
	 <br/>		 
	 }	 
	 <br/>   
	 <br/>	 
	 or 
	 <br/>   
	 <br/>	 
	 logis.addEventListener("click",  function(){
	 <br/>   
	 <br/>	    
		//The ITrack API can be placed anywhere : 
		top or center/middle or bottom of your function or onclick code(s)....
	 <br/>   
	 <br/>		
		ITrack("Split", "Nelson Williams", "2020-02-10", "03:05:20", 4003, 3042, 
		"Help users split their working viewport on the page into multiple parts", 
	    "nelson.williams@gmail.com");	     
	 <br/>   
	 <br/>		
		 //---code here
	 <br/>   
	 <br/>		 
	 });
	 <br/>   
	 <br/>	 
	 //Please all ITrack API codes should be placed within the element's click function(s).
	 <br/>   
	 <br/>	 
	 </code>
	 
	 <br>Now save your program file(s) as plain text file(s) with no extension.
	 
	 <br><br>Sample style code(stylesheet) : 
	 <br><br>
	 
	 <code>
	   //code more....
	 <br/>   
	 <br/>	   
	  .logis{
	 <br/>   
	 <br/>
		  background-color: rgba(0, 0, 0, 0.9);
	 <br/>   
	 <br/>
	  }
	 <br/>   
	 <br/>	  
	 </code>
	 
	 <br>Now save your style(stylesheet) file(s) as .css file(s) or extension.
	 
	 <br><br><p  style="text-align: center">
	 Please note, both program_projected_revenue and program_projected_users can be set to 0 if not sure.
	 </p><br><br></b>
	 
	 The following listed explanation gives a vivid insight on what each parameter represents : 
	 <ol type="1">
	  <li style="color: white">Program Name : tells the name of the program.</li>
	  <br><li style="color: white">Developer : tells the name of the developer of that program and must be the same 
	  name as the name used for Developer registration or your username. Note://this name should be passed
	  to the ITrack API whenever you've new products or services to ship. </li>
	  <br><li style="color: white">Program Creation Date : gives info about program creation date.</li>
	  <br><li style="color: white">Program Creation Time : gives info about program creation time.</li>
	  <br><li style="color: white">Program Projected Revenue :  provides info about developer projected revenue. That is, 
	  how much revenue do you expect to take in every year.</li>
	  <br><li style="color: white">Program Projected Users : tells the number of estimated or projected users you evidently
	  think will use your product or service every year.</li>
	  <br><li style="color: white">Program Value : gives info on the program value or purpose.</li>
	  <br><li style="color: white">Developer Email : provides developer email(must be same email as registered).</li>
	 </ol>

     <h4 style="color: white;font-size:20px;font-weight: bolder">Please note, all developers 
	 are required to integrate Didcy ITRACK API into their codes before shipping them. Thank you</h4>

	 <h4 style="color: white;font-size:30px;font-weight: bolder">How to integrate Didcy ITRACK API into your digital products and services</h4>
	 <p>The following data gives clear insight on how to integrate Didcy ITrack API into your digital products and services in a simple,
	 easy and smooth fashion. 
	 <br><br>These includes : </p>
     <ol type="1">
	  <li style="color: white">Copy/Type ITrack API into your digital products and services and provide or insert the necessary
	   ITrack arguments or data values.</li>
	  <br><li style="color: white">Continue coding your digital products or services and save it as a plain text file 
	  with no file extensions except when saving &amp; shipping your products and services' style files(that is, stylesheet files).
	  <br>That is, only stylesheet files must contain the <b><q>.css</q></b> extension.
	  <br><br>Please note, all program files must contain <b>Javascript</b> codes but should not be saved as a <b><q>.js</q></b>
	  or any other extension. </li>
	  <br><li style="color: white">Ship your products or services once completed.</li>
	 </ol>
	 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">How to ship or upload your product or service files when completed</h4>
	 <p>To ship or upload your products or services, kindly follow the guide below.</p>
     <ol type="1">
	  <li style="color: white">Login into your Didcy Developer Room.</li>
	  <br/><li style="color: white">Find the appropriately named file upload input(s).</li>
	  <br/><li style="color: white">Click on the select file upload input(s).</li>
	  <br/><li style="color: white">Choose from your local folder(s) the product or service files you want to ship or upload.</li>
	  <br/><li style="color: white">After selection, make show you're shipping or uploading the right file(s) so that we all don't find ourselves in buggy problems and 
	  policy voilation.</li>
	  <br/><li style="color: white">Once you're done with file(s) checking, you can now go ahead and click on the <b>EXECUTE</b> button below.</li>
	  <br/><li style="color: white">After shipping or uploading, wait for some few seconds to see server response.</li>
	  <br/><li style="color: white">If server response is positive, then if you're done using your ROOM, kindly close(<b>&times;</b>) your room and return back to the main page.</li>
	  <p style="color: white">Please for more info on where to locate or find your uploaded or shipped products or services, kindly read below.
	  <br>Thank you.</p>
	 </ol>
	 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Where to find or locate your uploaded or shipped products or services</h4>
	 <p>The following guide helps you find or locate your digital products or services and deploy or test them on our page.</p>
	 <p>Please note, once your digital products or services are uploaded or shipped, it becomes visible to all didcy users and yours.
	 So please, bear in mind that once shipped or uploaded no changes or modifications can be done except when uploading the newest 
	 version of that product or service. This way the older version gets replaced with the newer version.</p>
     <ol type="1">
	  <li style="color: white">Click on the <b>Menu or More services or The Coredropdown button 
	  <img class='iconic' src='adv.icons/2377884.png'/></b> in the top navigation menu.</li>
	  <br/><li style="color: white">After clicking on the Menu or More button, click on the Didcy React button.</li>
	  <br/><li style="color: white">Click on the <b>Plugins</b> button after clicking on the Didcy React button.</li>
	  <br/><li style="color: white">After clicking on the <b>Plugins</b> button, a collection of programs will display or show up.</li>
	  <br/><li style="color: white">Kindly search through these collections to find your program(s).</li>
	  <br/><li style="color: white">If not found, kindly click on the <b>Update</b> button to update the collections.</li>
	  <br/><li style="color: white">If still not found, kindly check your program file(s) on your localhost or computer to see if all codes are written
	   correctly.</li>
	  <br/><li style="color: white">If your local program file(s) contains no bugs, then re-upload or ship the program file(s) again.</li>
	  <br/><li style="color: white">If still incuring the same problem, kindly click Ctrl + F12 to get the browser console poped up or displayed.</li>
	  <br/><li style="color: white">Patiently and carefully read through the data or info in the
	  console to find out if any bugs or problems are disclosed there.</li>
	  <br/><li style="color: white">If nothing could be found there(in the browser console), kindly read through the <b>program violation policy</b> to see if
      any of your programs has voilated the program violation policy. This may be the cause of the program not showing up.
	  <p style="color: white">For more info on program voilation policy, kindly check out <b>program voilation policy</b> @ Didcy Transparent.
	  <br>Thank you.
	 </ol>

	 <h4 style="color: white;font-size:30px;font-weight: bolder">Developer Directories</h4>
	 <p>Didcy Developer Directories are set of directories defaultly created by Didcy for 
	 developers and customizely or personally created by the developers themselves.</p>
	 <p>That is, default directories are directories reserved by or  to Didcy's own 
	 authority and it's created for all developers to start their development &amp; 
	 production journey with whiles customized or personalized directories are created by 
	 developers themselves.</p>
     
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Didcy Master Directory</h4>
	 <h5 style="color: white;font-size:25px;font-weight: bolder">The Plugins Directory</h5>
	 <p>Didcy Plugins Directory is the root directory for all developer sub-directories 
	 including the default sub-directories didcy creates on-behalf of or for all 
	 developers. It contains both the default &amp; customized directories for developers. 
	 All develper directories begins in the Plugins Directory.
	 Eg: plugins/dump_id/default_directory/ or plugins/dump_id/custom_directory/</p>
	 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Didcy Dump Directory</h4>
	 <h5 style="color: white;font-size:25px;font-weight: bolder">The Dump ID</h5>
	 <p>Didcy Dump Directory is the first sub-directory created to contain all other 
	 developer sub-directories. That is, both the default and customized directories.</p>
	 <p>This directory(dump directory) is created using the Dump ID &amp; can be found 
	 directly in the plugins directory. That is, the Dump directory is named after 
	 the Dump ID. The Dump ID is the ID/numeric strings you see right after you've 
	 logged into your Developer Room(that is, after Smile Login). 
	 This ID(Dump ID) is placed at the top of the modal box right below the text "Just Smile".
	 </p>
	 <p>This directory(Dump directory) comes second in all file or sub-directory paths. 
	 That is, plugins/dump_directory/.</p>
	 <p>All other directories resides here, both default and customized. The dump id is a 
	 unique id generated and assign to uniquely identify each developer in the directory path.
	 It is generated on developer registration during form submission &amp; gets stored in the database.
	 </p>
	 <p>All developer file or directory paths should begin this way : </p>
	 <p>plugins/dump_directory/default_directory/</p>
	 <p>plugins/dump_directory/custom_directory/</p>
	 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Default Directory List</h4>
	 <p>Didcy default directory list is a list of developer directories created for all developers to help them start building. 
	 </p>
	 <p>The following default directory list includes : 
	 <ol type="1">
	  <li style="color: white">Program Directory : this directory contains the developer program files.</li>
	  <br><li style="color: white">CSS Directory : this directory contains the developer css files.</li>
	  <br><li style="color: white">Server Directory : contains the developer server files like .php.</li>
	  <br><li style="color: white">Media Directory : also contains directories like mp4, mp3 and others for storing
	  media files.</li>
	  <br><li style="color: white">Data Directory : contains all kinds of data files.</li>
	 </ol>
	 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Custom Directories</h4>
	 <p>These are directories created by the developers themselves in addition to the 
	 default directories provided to them by Didcy. All custom directories can also be 
	 named after the default directories but not in the same directory as the one 
	 the default directories are located in.</p>
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Dos &amp; Donts</h4>
	 <h4 style="font-weight: bolder">Dos</h4>
	 <p>Developers are required to deligently comply by this policy or guidelines by doing the following : </p>
     <ol type="1">
	  <br><li style="color: white">Developers are required to provide clean information during their registration process.</li>
	  <br><li style="color: white">Developers are required to always login to their room with their provided username and password.</li>
	  <br><li style="color: white">Developers are required to create or build great products and provide better services to their users.</li>
	  <br><li style="color: white">All developer products and services <b>must</b> solve a problem for it's users.</li>
	  <br><li style="color: white">All developer products and services must include the ITRACK API code to help Didcy track the progress of your products 
	  and services better and most importantly help us convert usage, click, advertising and subscription data into realtime revenue for you as a creator or
	  developer. Please note, we use all these data stream to help secure successful funds or revenue into your money account(s). 
	  <br>So please help us, so we can help you, especially, financially.</li>
	  <br><li style="color: white">All products or services must be shipped with product or service manual or datasheet which will guide your users on the use of your
	  products or services.</li>
	  <br><li style="color: white">All products or services must be well written or created, reviewed and analyze or tested before shipping it/them.</li>
	  <br><li style="color: white">Kindly eliminate all disturbing bugs before shipping.</li>
	  <br><li style="color: white">All developer products or services must comply with our Developer Products and Services Shipping Policy, 
	  especially, malware, adware, spyware and harmful activities.</li>
	  <br><li style="color: white">All developers are required to respect each other and comment accordingly if you have anything to comment on.</li>
	  <br><li style="color: white">Developers are required to report any misunderstanding or missing info accordingly using our report system.
	  <br>Didcy report system for now can be found on Didcy us? or Didcy Include by chatting Shyly.</li>
	  <br>Kindly visit or contact or reach out to us by looking up our contact informations at either 
	  <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar 
	  of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" 
	  src="adv.icons/2377884.png"/>. 
	  <br>We will be availabile 24/7 just to listen to only you. <br>
	  Thank you.<br>
	 </ol>
	 
	 <h4 style="font-weight: bolder">Donts</h4>
	 <p>Developers are required to deligently comply by this policy or guidelines by doing the following : </p>
     <ol type="1">
	  <li style="color: white">All developers are not permitted to pirate other developers builds without their consent.</li>
	  <br><li style="color: white">All developers are not permitted to host third-party builds without their consent.</li>
	  <br><li style="color: white">All developers are not allowed to omit the ITRACK API process from their builds for their own sake or interest.</li>
	  <br><li style="color: white">All developers are not allowed to spy on their users using their builds.</li>
	  <br><li style="color: white">All developers are not allowed to collect unauthorized user data without their consent.</li>
	  <br><li style="color: white">All developers are not permitted to host builds that are malicious and vulnerable.</li>
	  <br><li style="color: white">All developers are not allowed to mislead users with wrong informations when using their builds.</li>
	  <br><li style="color: white">All developers are not allowed to promote or advertize any kind of fake news on the platform.</li>
	  <br><li style="color: white">All developers are not allowed to promote or advertize ads that do not comply with our advertizing policy.</li>
	  <br><li style="color: white">All developers are not permitted to set spy cookies on the platform unless authorized to do so. All rights reserved.</li>
	  <br><li style="color: white">All developers are in no way allowed to scare of users with their builds either to other platforms or not.</li>
	  <br><li style="color: white">All developers are in no way allowed to promote or advertize builds that infringes on users or other developers right.</li>
	  <br><li style="color: white">All developers are not allowed to promote or advertize builds that harm children in any way.</li>
	  <br>For more info on this and any other policy, kindly visit or contact or reach out to us by looking up our contact informations at either 
	  <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar 
	  of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" 
	  src="adv.icons/2377884.png"/>. 
	  <br>We will be availabile 24/7 just to listen to only you. <br>
	  Thank you.<br>
	 </ol>
	 
	 <h4 style="color: white;font-size:30px;font-weight: bolder">Developer expectations</h4>
     The following policy gives a vivid insight on what a developer must do and what to expect in 
	 return. 
	 <h2><b>Build with us on the basis of your own <em>TERMS</em></b></h2>
	 <h3>You're Welcome to <q><b><strong>BUILD ON OUR PLATFORM</strong></b></q></h3>
	 <ol type="1">
	  <!--<br><li style="color: white">All developers will receive &dollar;1 - &dollar;2 every single working day with
	  or without working or being or not being present on any of the working days. NB:// We're currently 
	  considering <q>WEEKENDS</q>. That is, this &dollar;1 - &dollar;2 daily packet is given out with or without working. That is, whether
	  you work or not, being present or not.
	  NB:// It starts right after the sixth month from application acceptance or development start or being a Didcer.</li>
	  <br><li style="color: white">Anytime <b>we</b> (<q>Didcy</q>) bring an idea to the platform for either you to work
	  on with us together or only you, you (the developer) will receive 30-35% of the monthly profit whenever
	  that particular product/service sells. <b>NB:// ONLY WHEN THAT PARTICULAR PLUGIN(PRODUCT/SERVICE) SELLS
	  .</b></li>
	  <br><li style="color: white">Anytime <b>you</b> (not from Didcy) bring an idea to the platform for you, us, or you & us
	  to work on, we'll receive 39-45% of the monthly profit whenever that particular product/service sells.<b>
	  NB:// ONLY WHEN THAT PARTICULAR PLUGIN(PRODUCT/SERVICE) SELLS.</b></li>
	  <br><li style="color: white">You'll also receive 10% monthly profit from all sales of Didcy products &amp; services
	  whether you worked or not or brought an idea or not or you were present or not for that month.</li>
	  <br><li style="color: white">All products <b>you</b> create or work on  will have a usage tracking program 
	  embeded or integrated into it together with it's own <q><b>USAGE POLICY</b></q> to help know who used the product/service,
	  time of usage, location of usage, how it was used and the usage cost(if is a subscription product) and more.
	  That is, the cost of it's usage for the user of your created products/services.</li>
	  <br><li style="color: white">You'll also get an upfront commission of &dollar;5 immediately you introduce a new applicant(a developer,
	  thinker, idealist or builder) &amp; an upfront of &dollar;5 for any of your incoming ideas.</li>
	 -->
	  <br><li style="color: white">All products <b>you</b> create or work on must have a usage tracking program 
	  embeded or integrated into it together with it's own <q><b>USAGE POLICY</b></q> to help know who used the product/service,
	  time of usage, location of usage, how it was used and the usage cost(if it is a subscription product) and more.
	  That is, the cost of it's usage for the user of your created products/services.</li>
	  
	  <br><li style="color: white">All developers must kindly and freely comply with the above dos and donts policy.</li>
	  <br><li style="color: white">All developers can expect their goals being achieved only if they freely and willingly comply deligently 
	  by all Didcy policies and their own ethical values or principles towards success.</li>
	  <br><li style="color: white">All great developers should expect to gain free access to 99.9% of most of our paid developer and 
	  non-developer products and services for a whole year. No fees, No Charges. Just <b><i>FREEEEEEE</i></b>.</li>
	  
	  <br><p style="color: white">Please bear in mind that, our main objective as a platform is to help you achieve all your developer goals. 
	  So we urge you to help us achieve our objective for you. Thank you and have a nice Didcy Development.</p> 
	 </ol>
	 Didcy is making it much fun for all it's developers to feel fullfilled, sure of themselves, willing and most of all
	 feel at home and happy being a part of <q><b>DIDCY FAMILY</b></q>.
	 Together we can change the future for the better. Together we can make a difference. Humanity needs us now, so we need
	 to respond to their call. So join us <b><strong>NOW</strong></b> to make the world a better future(place).
	 Didcy Developer is what you need for the rest of your creative or developer life. Come and Experience Didcy 
	 Developer for yourself if not for anyone else. <b>SELF-CONFIDENCE</b> is when you do things with pride without the fear of 
	 being criticize by others and fear of not feeling inferior as an individual.
	 Take the chance of being a great creator or developer for your own specie. 
	 With the <b>MOTTO: OUR WORLD, OUR RESPONSIBILITY</b>.
	 Make a difference in your life now. <br><br><b><strong>
	 Hurry up and join now for there is no place better to be than with Didcy Developer.
	 So don't waste time on too much thinking.
	 Make a move now. </strong></b>
	 <br>
	 <br>We are looking forward to developing with you soon <b title="CHAMPION">CHAMP</b>. We welcome you to Didcy as 
      part of us now, because we know you'll make the right choice of joining us for a better future. 
      We know you want a better future for you, your friends, children, wife(ves) and everyone both around you and 
      far, known and unknown.
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no problems. 
	  Thank you.
	  <br><br/>
	  For more info on Didcy Developer, kindly reach out to or contact us by looking up our contact informations 
	  at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only you. <br><br>	
      Thanks <b title="CHAMPION">CHAMP</b>.	  
	</p>
  </div>
</div>

<div id="myModal-notification" class="modal-notification overlay" style="overflow-y: auto">
  <span class="close-notification closebtn" id="close-notification">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-notification">
   <h1 style="background: white;color: #000;text-align: center">Notifications</h1>
    <p style="color:white">
		<h2 class="notification-guide" style="text-align: center;color:dodgerblue">Welcome to Notification Guide</h2>
        <p class="" style="color:white;padding-left: 10px;padding-right: 10px">
		Notification is a means of getting individuals or users updated of the latest new or trendy things.
		This guide focuses mainly on how all Didcy Notification systems or services work. 

		Didcy comes bundled with at most two notification systems which helps all it's users stay afloat or in the loop.
		All notification systems on our platform follows the same working guide and mission.
		</p>
		
		<h2 class="notification-guide" style="text-align: center;color:dodgerblue">How to get notified using our Newsletter Subscription Form</h2>
		<p class="" style="color:white;padding-left: 10px;padding-right: 10px">
		The following data or guide gives vivid or deep insight on how to get notified for new products or services through 
		our newsletter subscription.</p>
		
        <ol type="1">
		<li style="color:white">Visit or load the site.</li>
		<br>
		<li style="color:white">Once loaded(the site), gentlely close the first popup or window that shows up or pops up.</li>
		<br>
		<li style="color:white">After this is done(that is, closing the first popup in step 2), you'll see our newsletter subscription form shown
		to you on your screen. </li><br>
		<li style="color:white">Fill out the form if you want to receive any updates for new products and services from us.</li>
		<br>
		<li style="color:white">Check your email inbox to get fully verified by clicking on the blue underlined link in the inbox in relation 
		to our email.</li><br>
		<li style="color:white">After clicking, your email then gets verified and you start to receive latest updates for newer products and services 
		from Didcy. </li>
		</ol>
        <p class="" style="color:white;padding-left: 10px;padding-right: 10px">
		NB://To locate or find our newsletter subscription form without reloading the page again, kindly navigate to our menu
		or more services <img src=""/> board and find Didcy Include. Click on Didcy Include and there it is(our newsletter subscription form).
		</p>
		
		<h2  class="notification-guide"style="text-align: center;color:dodgerblue">Didcy Ad Notification system</h2>
		<p class="" style="color:white;padding-left: 10px;padding-right: 10px">
		Didcy Internal Notification system is a system that notifies all Didcers of the latest ad(s) uploaded by a Didcer
		onto the platform being it audio, static or video ad(s). <br><br>Our notification system don't show privatized 
		ads to other Didcers or users except to it's owner. This means that ads that are made private by it's owners don't get
		to be shown to other Didcers or users except to it's owner.
		
		<br><br>NB://Didcy Ad Notification system only gets triggered once an 
		upload of an asset(s) or ad(s) is/are made.

		<br><br>Even though private notifications maybe restricted from the public eye in the upcoming feature, it still remain 
		insight to the originator or the uploader or owner. 
		<br><br>Didcy Ad Notification System is very much easier to locate or find on the platform. 
     </p>
	 
		<h2 class="notification-guide" style="text-align: center;color:dodgerblue">
		How to find Didcy Ad Notification System and get notified for newly uploaded ads</h2>
		<p class="" style="color:white;padding-left: 10px;padding-right: 10px">
		The following information provides detailed insight on how to find Didcy notification system and 
		get notified for newly uploaded ads.</p>
		
        <ol type="1">
		<li style="color:white">Look up to the top navigation bar and locate or find the bell <img src=""/> icon</li>
		<li style="color:white">The bell icon may contain a counter on it, signaling the number of newly uploaded ads that needs your
		attention.</li>
		<li style="color:white">Click on the bell icon to see the ad notification board.</li>
		<li style="color:white">Click on the close (&times;) button at the top right corner of 
		this board(that is, the ad notification board) to get the board closed once your are done.
		</li>
        </ol>		
	    
		<p style="color:white;padding-left: 10px;padding-right: 10px">
		 For more enquiries, kindly contact us by looking up our contact 
		 informations at either <q>Contacts</q> <img class='iconic' src='adv.icons/870175.png'/> in the top navigation bar of the 
		 front page or at <q>Didcy Find</q> under <q>Menu or More Services or The Core</q>
		 <img class='iconic' src='adv.icons/2377884.png'/>. We will be availabile 
		 24/7 just to listen to only and only you. Have a nice Didcy visit.
		 <br><br>Thank you.
		</p>
	  
	</p>

  </div>
  
</div>

<div id="myModal-notification" class="modal-notification overlay" style="overflow-y: auto">
  <span class="close-notification closebtn" id="close-notification">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-notification">
   <h1 style="background: white;color: #000;text-align: center">Notifications</h1>
    <p>
	 Please note, before we proceed to making any concrete sense out of this policy, we need to make some important definitions very much explicit or clear to the interested reader(s). Its' imperative to <strong>really <mark>understand</mark></strong> this very policy before we get trapped in any dispute net, because most of our informations will mostly revolve around these very definitive words or terms or keywords.

	 <br><br>Our dispute definitive words are as follows..
	 <ol type="1">
	  <li style="color: white"><u><em><b><mark>Dispute</mark></b></em></u> refers to a disagreement or argument in short. Eg. a territorial dispute between the two countries. OR bickering, brawl, conflict, controversy, debate, disagreement, discord, discussion, disturbance, feud, friction, misunderstanding, quarrel, row, squabble, strife, wrangle, challenge, contend, contest from <a href="https://www.dictionary.com/browse/dispute" alt="" title="" target="" id="dictionary" class="dictionary cookie-full-mode-link">	dictionary.com</a>. OR a dispute is a disagreement, argument, or controversy—often one that gives rise to a legal proceeding (such as arbitration, mediation, or a lawsuit) from <a href="https://www.law.cornell.edu/wex/dispute" alt="" title="" target="" id="law-cornell-edu" class="law-cornell-edu cookie-full-mode-link">	law cornell</a>.</li>
	  <li style="color: white"><u><em><b><mark>Resolution</mark></b></em></u> refers to solving of problem in tis contest or sorting out problems by talking to the other person. It can lead to a less stressful and more positive working relationship from <a href="https://www.tenancy.govt.nz/disputes/self-resolution/" alt="Tenancy" title="Tenancy" target="_blank" id="tenancy" class="tenancy cookie-full-mode-link">	tenancy</a>.</li>
	  <li style="color: white"><u><em><b><mark>Policy</mark></b></em></u> refers to a course or principle of action adopted or proposed by an organization or individual. Eg. The government's controversial economic policies from <a href="https://languages.oup.com/google-dictionary-en" alt="Oxford Languages" title="Oxford Languages" target="_blank" id="Oxford" class="Oxford cookie-full-mode-link">	Oxford Languages</a>. OR is a deliberate system of guidelines to guide decisions and achieve rational outcomes from <a href="https://en.wikipedia.org/wiki/Policy" alt="Wikipedia" title="Wikipedia" target="_blank" id="wikipedia-Policy" class="wikipedia-Policy cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution</mark></b></em></u> refers  to the process of resolving disputes between parties from <a href="https://en.wikipedia.org/wiki/Dispute_resolution#:~:text=Dispute%20resolution%20or%20dispute%20settlement,rooted%20and%20lengthy%20than%20disputes." alt="Wikipedia on Dispute Resolution" title="Wikipedia on Dispute Resolution" target="_blank" id="Dispute_resolution" class="Dispute_resolution cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution Policy</mark></b></em></u> refers to a deliberate system of guidelines to guide decisions and achieve dispute resolution.</li>
	 </ol>
	 
	 <br>Please note, this policy is one of the most important policy Didcy has ever drafted. So please make sure you help us abide by it. Thank you.

	<br><br>Once we've being able to get this definitions out of the way, we can now proceed unto reading or going through and <em>really <mark>understanding</mark></em> this policy.
	 
	<br>
	<br>
	 <h1 style="text-align: center;"><b class="">Welcome to Didcy Dispute Resolution Policy</b></h1> 
     <br/>	 
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>

  </div>
  
</div>

<div id="myModal-reach" class="modal-reach overlay" style="overflow-y: auto">
  <span class="close-reach closebtn" id="close-reach">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-reach">
    <h1 style="background: white;color: #000;text-align: center">Reach</h1>
	<h2 style="color: white;text-align: center">Welcome to Didcy Reach</h2>
    <p>
      Didcy Reach is where Didcy keeps all it's mini-services for ease of access or 
      faster reach. Didcy Reach is a container of mini-services for Didcy users. 
      Didcy Mini-Services are services that do not really do much on it's platform. These <q>MINI-SERVICES</q>
	  are there to perform small tasks or actions or services for a Didcer(Didcy user). 
	  Didcy Reach contains services like Q&A, Forum, Community and more.
	  These services help didcers solve most of the problems facing them on the use of this platform.
	  To find out more on how to use Didcy, please kindly make a quick walk to <q><b>Didcy Find</b></q> for its tutorials in 
	  all kinds of format. From text to videos and even images.
	  All Didcers(Didcy Users) are welcome to explore all our mini-services for their own insight.
	  
	  <br><br><b>Please to access any of our mini-services on Reach, kindly hover on an image below to get a clue of 
	  what that image represent and if understood carefully, you can kindly go ahead and click on it if that's what 
	  you're looking for.
	  Please note, each image here is like a button disguisely presented in an image format to depict what service it provides.
	  For example, the image with the question mark <q><b><mark>?</mark></b></q> on top represents the <q><b>QUESTION
	  AND ANSWER</b></q> region where all Didcers are satifisfied with their questions. Same format goes for 
	  the rest of the mini-services and their images.
	  </b><br><br>

	  Please kindly be patient with some of our mini-services if you're having any difficulties using 
	  these services. Patient in the sense that, you kindly make a quick call to us if having any difficulties 
	  in using these services. For a quick call, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. 
	  We will be availabile 24/7 just to listen to only you. <br><br>

	  <b>Please kindly enjoy your visit here at Didcy. We always appreciate your visits. We are hoping you'll
	  stay here till you are filled up with all our lovely products and services. 
	  <br>Please we are looking forward to your feedbacks(<q>Ratings</q>) which can be found at <b>Didcy React 
	  &rarr; Extras &rarr; Rate Us &rarr; RATE</b>. <br>Please to find out the current overall ratings of 
	  the site rated by all Didcers including <q>YOU</q>, kindly click on Didcy Rate. 
	  <br>To find out if your ratings were added, kindly check the current ratings from Didcy Rate and 
	  most importantly, the rating type you'll be voting for, that is, the type of satisfaction you've 
	  received ever since you started surfing the platform before rating yours, so that you can see where the 
	  ratings was before you rated and after you rated. That is, the RATE DIFFERENCES. 
	  Please rating is done by clicking on any of the emojis you see. 
	  <br>Each clicked emoji will automatically 
	  fade in, symbolizing a successful select. <br>After selecting or clicking an emoji, kindly click on 
	  the <q><b>SEND FEEDBACK</b></q> buton to make Didcy know how you feel about it's services,
	  so that we can make you feel more greater if you already feel great or great if you don't feel 
	  great or already feel bad or don't feel anything at all. Till then, kindly have a lovely Didcy Surf.</b>
	  
	</p>

<div class="w3-modal-content w3-animate-opacity w3-slider" id="w3-slider">
<div class="w3-row-padding" style="margin:0 -16px">
<!--  <span onclick="document.getElementById('w3-slider').style.display='none'" class="w3-mc w3-button w3-display-topright">&times;</span>
 -->  <div class="w3-col s4">
    <img src="nicons/2194188.png" title="Get your questions answered by using DidcyQA" style="width:100%;cursor:pointer"
    onclick="openModal();currentDiv(1)" class="images w3-hover-shadow">
  </div>
  <div class="w3-col s4">
    <img src="nicons/745205.png" title="Explore Didcy Forum by using DidcyFrum" style="width:100%;cursor:pointer"
    onclick="openModal();currentDiv(2)" class="images w3-hover-shadow">
  </div>
  <div class="w3-col s4">
    <img src="nicons/images.png" title="Join Didcy Community through DidcyCom" style="width:100%;cursor:pointer"
    onclick="openModal();currentDiv(3)" class="images w3-hover-shadow">
  </div>
</div>
</div>

<div id="myModal-show" class="w3-modal w3-black modal-show">
 <span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright" onclick="closeModal()" style="cursor:pointer">×</span>
 <div class="w3-modal-content">

  <div class="w3-content" style="max-width:1200px;">
   <div class="mySlides">
   <h1 style="background: white;color: #000;text-align: center">Q&amp;A</h1>
    <p>
	 Please note, before we proceed to making any concrete sense out of this policy, we need to make some important definitions very much explicit or clear to the interested reader(s). Its' imperative to <strong>really <mark>understand</mark></strong> this very policy before we get trapped in any dispute net, because most of our informations will mostly revolve around these very definitive words or terms or keywords.

	 <br><br>Our dispute definitive words are as follows..
	 <ol type="1">
	  <li style="color: white"><u><em><b><mark>Dispute</mark></b></em></u> refers to a disagreement or argument in short. Eg. a territorial dispute between the two countries. OR bickering, brawl, conflict, controversy, debate, disagreement, discord, discussion, disturbance, feud, friction, misunderstanding, quarrel, row, squabble, strife, wrangle, challenge, contend, contest from <a href="https://www.dictionary.com/browse/dispute" alt="" title="" target="" id="dictionary" class="dictionary cookie-full-mode-link">	dictionary.com</a>. OR a dispute is a disagreement, argument, or controversy—often one that gives rise to a legal proceeding (such as arbitration, mediation, or a lawsuit) from <a href="https://www.law.cornell.edu/wex/dispute" alt="" title="" target="" id="law-cornell-edu" class="law-cornell-edu cookie-full-mode-link">	law cornell</a>.</li>
	  <li style="color: white"><u><em><b><mark>Resolution</mark></b></em></u> refers to solving of problem in tis contest or sorting out problems by talking to the other person. It can lead to a less stressful and more positive working relationship from <a href="https://www.tenancy.govt.nz/disputes/self-resolution/" alt="" title="" target="" id="tenancy" class="tenancy cookie-full-mode-link">	tenancy</a>.</li>
	  <li style="color: white"><u><em><b><mark>Policy</mark></b></em></u> refers to a course or principle of action adopted or proposed by an organization or individual. Eg. The government's controversial economic policies from <a href="https://languages.oup.com/google-dictionary-en" alt="" title="" target="" id="Oxford" class="Oxford cookie-full-mode-link">	Oxford Languages</a>. OR is a deliberate system of guidelines to guide decisions and achieve rational outcomes from <a href="https://en.wikipedia.org/wiki/Policy" alt="" title="" target="" id="wikipedia-Policy" class="wikipedia-Policy cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution</mark></b></em></u> refers  to the process of resolving disputes between parties from <a href="https://en.wikipedia.org/wiki/Dispute_resolution#:~:text=Dispute%20resolution%20or%20dispute%20settlement,rooted%20and%20lengthy%20than%20disputes." alt="" title="" target="" id="Dispute_resolution" class="Dispute_resolution cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution Policy</mark></b></em></u> refers to a deliberate system of guidelines to guide decisions and achieve dispute resolution.</li>
	 </ol>
	 
	 <br>Please note, this policy is one of the most important policy Didcy has ever drafted. So please make sure you help us abide by it. Thank you.

	<br><br>Once we've being able to get this definitions out of the way, we can now proceed unto reading or going through and <em>really <mark>understanding</mark></em> this policy.
	 
	<br>
	<br>
	 <h1 style="text-align: center;"><b class="">Welcome to Didcy Dispute Resolution Policy</b></h1> 
     <br/>	 
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only you. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>

   </div>
   <div class="mySlides">
   <h1 style="background: white;color: #000;text-align: center">Forum</h1>
    <p>
	 Please note, before we proceed to making any concrete sense out of this policy, we need to make some important definitions very much explicit or clear to the interested reader(s). Its' imperative to <strong>really <mark>understand</mark></strong> this very policy before we get trapped in any dispute net, because most of our informations will mostly revolve around these very definitive words or terms or keywords.

	 <br><br>Our dispute definitive words are as follows..
	 <ol type="1">
	  <li style="color: white"><u><em><b><mark>Dispute</mark></b></em></u> refers to a disagreement or argument in short. Eg. a territorial dispute between the two countries. OR bickering, brawl, conflict, controversy, debate, disagreement, discord, discussion, disturbance, feud, friction, misunderstanding, quarrel, row, squabble, strife, wrangle, challenge, contend, contest from <a href="https://www.dictionary.com/browse/dispute" alt="" title="" target="" id="dictionary" class="dictionary cookie-full-mode-link">	dictionary.com</a>. OR a dispute is a disagreement, argument, or controversy—often one that gives rise to a legal proceeding (such as arbitration, mediation, or a lawsuit) from <a href="https://www.law.cornell.edu/wex/dispute" alt="" title="" target="" id="law-cornell-edu" class="law-cornell-edu cookie-full-mode-link">	law cornell</a>.</li>
	  <li style="color: white"><u><em><b><mark>Resolution</mark></b></em></u> refers to solving of problem in tis contest or sorting out problems by talking to the other person. It can lead to a less stressful and more positive working relationship from <a href="https://www.tenancy.govt.nz/disputes/self-resolution/" alt="" title="" target="" id="tenancy" class="tenancy cookie-full-mode-link">	tenancy</a>.</li>
	  <li style="color: white"><u><em><b><mark>Policy</mark></b></em></u> refers to a course or principle of action adopted or proposed by an organization or individual. Eg. The government's controversial economic policies from <a href="https://languages.oup.com/google-dictionary-en" alt="" title="" target="" id="Oxford" class="Oxford cookie-full-mode-link">	Oxford Languages</a>. OR is a deliberate system of guidelines to guide decisions and achieve rational outcomes from <a href="https://en.wikipedia.org/wiki/Policy" alt="" title="" target="" id="wikipedia-Policy" class="wikipedia-Policy cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution</mark></b></em></u> refers  to the process of resolving disputes between parties from <a href="https://en.wikipedia.org/wiki/Dispute_resolution#:~:text=Dispute%20resolution%20or%20dispute%20settlement,rooted%20and%20lengthy%20than%20disputes." alt="" title="" target="" id="Dispute_resolution" class="Dispute_resolution cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution Policy</mark></b></em></u> refers to a deliberate system of guidelines to guide decisions and achieve dispute resolution.</li>
	 </ol>
	 
	 <br>Please note, this policy is one of the most important policy Didcy has ever drafted. So please make sure you help us abide by it. Thank you.

	<br><br>Once we've being able to get this definitions out of the way, we can now proceed unto reading or going through and <em>really <mark>understanding</mark></em> this policy.
	 
	<br>
	<br>
	 <h1 style="text-align: center;"><b class="">Welcome to Didcy Dispute Resolution Policy</b></h1> 
     <br/>	 
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only you. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>

   </div>

   <div class="mySlides">
   <h1 style="background: white;color: #000;text-align: center">Community</h1>
    <p>
	 Please note, before we proceed to making any concrete sense out of this policy, we need to make some important definitions very much explicit or clear to the interested reader(s). Its' imperative to <strong>really <mark>understand</mark></strong> this very policy before we get trapped in any dispute net, because most of our informations will mostly revolve around these very definitive words or terms or keywords.

	 <br><br>Our dispute definitive words are as follows..
	 <ol type="1">
	  <li style="color: white"><u><em><b><mark>Dispute</mark></b></em></u> refers to a disagreement or argument in short. Eg. a territorial dispute between the two countries. OR bickering, brawl, conflict, controversy, debate, disagreement, discord, discussion, disturbance, feud, friction, misunderstanding, quarrel, row, squabble, strife, wrangle, challenge, contend, contest from <a href="https://www.dictionary.com/browse/dispute" alt="" title="" target="" id="dictionary" class="dictionary cookie-full-mode-link">	dictionary.com</a>. OR a dispute is a disagreement, argument, or controversy—often one that gives rise to a legal proceeding (such as arbitration, mediation, or a lawsuit) from <a href="https://www.law.cornell.edu/wex/dispute" alt="" title="" target="" id="law-cornell-edu" class="law-cornell-edu cookie-full-mode-link">	law cornell</a>.</li>
	  <li style="color: white"><u><em><b><mark>Resolution</mark></b></em></u> refers to solving of problem in tis contest or sorting out problems by talking to the other person. It can lead to a less stressful and more positive working relationship from <a href="https://www.tenancy.govt.nz/disputes/self-resolution/" alt="" title="" target="" id="tenancy" class="tenancy cookie-full-mode-link">	tenancy</a>.</li>
	  <li style="color: white"><u><em><b><mark>Policy</mark></b></em></u> refers to a course or principle of action adopted or proposed by an organization or individual. Eg. The government's controversial economic policies from <a href="https://languages.oup.com/google-dictionary-en" alt="" title="" target="" id="Oxford" class="Oxford cookie-full-mode-link">	Oxford Languages</a>. OR is a deliberate system of guidelines to guide decisions and achieve rational outcomes from <a href="https://en.wikipedia.org/wiki/Policy" alt="" title="" target="" id="wikipedia-Policy" class="wikipedia-Policy cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution</mark></b></em></u> refers  to the process of resolving disputes between parties from <a href="https://en.wikipedia.org/wiki/Dispute_resolution#:~:text=Dispute%20resolution%20or%20dispute%20settlement,rooted%20and%20lengthy%20than%20disputes." alt="" title="" target="" id="Dispute_resolution" class="Dispute_resolution cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution Policy</mark></b></em></u> refers to a deliberate system of guidelines to guide decisions and achieve dispute resolution.</li>
	 </ol>
	 
	 <br>Please note, this policy is one of the most important policy Didcy has ever drafted. So please make sure you help us abide by it. Thank you.

	<br><br>Once we've being able to get this definitions out of the way, we can now proceed unto reading or going through and <em>really <mark>understanding</mark></em> this policy.
	 
	<br>
	<br>
	 <h1 style="text-align: center;"><b class="">Welcome to Didcy Dispute Resolution Policy</b></h1> 
     <br/>	 
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only you. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>

   </div>

   <div class="w3-row w3-black w3-center">
    <div class="w3-display-container">
     <p id="caption-show"></p>
     <span class="w3-display-left w3-btn" onclick="plusDivs(-1)">❮</span>
     <span class="w3-display-right w3-btn" onclick="plusDivs(1)">❯</span>
    </div>
    <div class="w3-col s4">
     <img title="Get your questions answered by using DidcyQA" class="inner-images demo w3-opacity w3-hover-opacity-off" src="nicons/2194188.png" style="width:100%" onclick="currentDiv(1)" alt="Questions & Answers">
    </div>
    <div class="w3-col s4">
     <img title="Explore Didcy Forum by using DidcyFrum" class="inner-images demo w3-opacity w3-hover-opacity-off" src="nicons/745205.png" style="width:100%" onclick="currentDiv(2)" alt="Forum">
    </div>
    <div class="w3-col s4">
     <img title="Join Didcy Community through DidcyCom" class="inner-images demo w3-opacity w3-hover-opacity-off" src="nicons/images.png" style="width:100%" onclick="currentDiv(3)" alt="Community">
    </div>
   </div>
  </div>
  
 </div> <!-- End modal content -->
</div> <!-- End modal -->

  </div>  
  
  </div>
  
   <br>
   <br>  
  
</div>



<div id="myModal-payments" class="modal-payments overlay" style="overflow-y: auto">
  <span class="close-payments closebtn" id="close-payments">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-payments">
     <h1 style="background: white;color: #000;text-align: center">Payments</h1>
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>
  </div>
</div>


<div id="myModal-refund-request" class="modal-refund-request overlay" style="overflow-y: auto">
  <span class="close-refund-request closebtn" id="close-refund-request">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-refund-request">
     <h1 style="background: white;color: #000;text-align: center">Refund Request</h1>
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>
  </div>
</div>

<div id="myModal-s-records" class="modal-s-records overlay" style="overflow-y: auto">
  <span class="close-s-records closebtn" id="close-s-records">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-s-records">
     <h1 style="background: white;color: #000;text-align: center">Subscription Records</h1>
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href="https://www.didcy.com/term-of-sanction" style="color: white" alt="" target="" title="" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>
  </div>
</div>



<div id="myModal-subscribe-policy" class="modal-subscribe-policy overlay">
  <span class="close-subscribe-policy closebtn" id="close-subscribe-policy">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-subscribe-policy">
	  <div class="row-6">
		  <div class="column-plat column-" id="column"> 
			  <button class="button" id="didcy-web-policy">Didcy Web Policy</button>   
			  <button class="button" id="didcy-stand-policy">Didcy Stand Policy</button>    
			  <button class="button" id="didcy-host-policy">Didcy Host Policy</button>    
		  </div>
	  </div>
  </div>
</div>


<div id="myModal-host-policy" class="modal-host-policy overlay"  style="overflow-y: auto">
  <span class="close-host-policy closebtn" id="close-host-policy">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-host-policy">
	<h1 style="text-align: center;"><b class="">DIDCY HOST POLICY</b></h1> 	
	<h2 style="text-align: center;"><b class="">(HOST POLICY)</b></h2> 	
	<p>Effective date: 2022-01-01</p>
	<p><b>Welcome to Didcy</b>.</p> 

	<br>
	 <br>	
  </div>
  <br>
  <br>
  <br>
  <br>
</div>

<div id="myModal-limit-policy" class="modal-limit-policy overlay"  style="overflow-y: auto">
  <span class="close-limit-policy closebtn" id="close-limit-policy">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-limit-policy">
	<h1 style="text-align: center;"><b class="">DIDCY LIMIT POLICY</b></h1> 	
	<h2 style="text-align: center;"><b class="">(LIMIT POLICY)</b></h2> 	
	<p>Effective date: 2022-01-01</p>
	<p><b>Welcome to Didcy</b>.</p> 
    <p>
	 <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link"><q>LIMIT</q></a> in full is <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link"><q>LIMITATION</q></a> means having less access right. 
	 Didcy limit is modelled to grant limited access to users mostly using our <q>DEFAULT</q> or <q>BASIC</q> services and very less limitations to users using the <q>PRO</q> services or versions. As for users subscribed to our <q>PREMIUM</q> packages are not in anyway limited to any access. They instead have unlimited access to all our products and services except may be some few systems. Didcy drafted <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link"><q>LIMIT</q></a> inorder for its user to understand what level of access they are subscribing to. 
	 <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link"><q>LIMIT</q></a> is just a friend not a blockage. Knowing what you subscribed to is very much vital or important so that we don't have any misunderstanding in the future leading us to consult <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link"><q>DISPUTE</q></a> resolution which is not in our best interest.
	 <br>Under <q>BASIC</q> and <q>PRO</q> packages, the user has limited access right regarding the following products and services enforced by the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">LIMIT Policy</a>. 
	 <br/>The following products and services with limited access under the BASIC Packages are as follows 
	 <ol type="a">
	  <li style="color: white"></li>
	 </ol>	 
	 
	 <br>The following products and services with limited access under the PRO Packages are as follows 
	 <ol type="a">
	  <li style="color: white"></li>
	 </ol>
	 
	 <br><br>NB://No limitations are provided under the PREMIUM Package related to the listed products and services under it provided by WEB and STAND Subscriptions. Limited access is provided as well for PREMIUM Packages but not related to it's listed products and services visibly shown to the PREMIUM subscriber.
	 
	 <br><br>We as a company limits our products and services access rights not because we are greedy or wants to charge more as you use more of our products and services but to <q>mostly</q> bring order to the platform and to avoid misuse of our products and services. Didcy identified that the more things becomes free the less valuable it becomes and the less valuable it becomes the less trust it accumulates and the more it attract misusers.
	 
	 <br><br>As a result, charging for some part of our products and services justifies our worries and also promotes trust. It has come to be known that chargeable products and services mostly limited in <q>NUMBER</q> or <q>SCARCITY</q> and with <q>HIGHER PRICE TAGS</q> are considered <q>VALUABLE</q> in the <q>MARKET PLACE</q>. But that's not to say our products and services has to fully follow such model of thinking.
     We as a company also do believe in this model because we think all things valuable must follow it.
	 
	 <br><br>Our company is looking forward to whether or not make it's products and services for free in the future basing on future improvements on the platform. That is, <q>USAGE</q> order. 
	 
	 <br><br>All our users will be updated immediately a decision is made on this by our board.

	 <br><br/>Limit also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>LIMIT</q> until a valid reason is provided or until further notice. Limit and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>		 
	 
	</p>
	<br>
	 <br>	
  </div>
  <br>
  <br>
  <br>
  <br>
</div>

<div id="myModal-dispute-policy" class="modal-dispute-policy overlay"  style="overflow-y: auto">
  <span class="close-dispute-policy closebtn" id="close-dispute-policy">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-dispute-policy">
	<h1 style="text-align: center;"><b class="">DIDCY PUTE POLICY</b></h1> 	
	<h2 style="text-align: center;"><b class="">(DISPUTE POLICY)</b></h2> 	
	<p>Effective date: 2022-01-01</p>
	<p><b>Welcome to Didcy</b>.</p> 
    <p>
	 Please note, before we proceed to making any concrete sense out of this policy, we need to make some important definitions very much explicit or clear to the interested reader(s). Its' imperative to <strong>really <mark>understand</mark></strong> this very policy before we get trapped in any dispute net, because most of our informations will mostly revolve around these very definitive words or terms or keywords.

	 <br><br>Our dispute definitive words are as follows..
	 <ol type="1">
	  <li style="color: white"><u><em><b><mark>Dispute</mark></b></em></u> refers to a disagreement or argument in short. Eg. a territorial dispute between the two countries. OR bickering, brawl, conflict, controversy, debate, disagreement, discord, discussion, disturbance, feud, friction, misunderstanding, quarrel, row, squabble, strife, wrangle, challenge, contend, contest from <a href="https://www.dictionary.com/browse/dispute" alt="" title="" target="" id="dictionary" class="dictionary cookie-full-mode-link">	dictionary.com</a>. OR a dispute is a disagreement, argument, or controversy—often one that gives rise to a legal proceeding (such as arbitration, mediation, or a lawsuit) from <a href="https://www.law.cornell.edu/wex/dispute" alt="" title="" target="" id="law-cornell-edu" class="law-cornell-edu cookie-full-mode-link">	law cornell</a>.</li>
	  <li style="color: white"><u><em><b><mark>Resolution</mark></b></em></u> refers to solving of problem in tis contest or sorting out problems by talking to the other person. It can lead to a less stressful and more positive working relationship from <a href="https://www.tenancy.govt.nz/disputes/self-resolution/" alt="" title="" target="" id="tenancy" class="tenancy cookie-full-mode-link">	tenancy</a>.</li>
	  <li style="color: white"><u><em><b><mark>Policy</mark></b></em></u> refers to a course or principle of action adopted or proposed by an organization or individual. Eg. The government's controversial economic policies from <a href="https://languages.oup.com/google-dictionary-en" alt="" title="" target="" id="Oxford" class="Oxford cookie-full-mode-link">	Oxford Languages</a>. OR is a deliberate system of guidelines to guide decisions and achieve rational outcomes from <a href="https://en.wikipedia.org/wiki/Policy" alt="" title="" target="" id="wikipedia-Policy" class="wikipedia-Policy cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution</mark></b></em></u> refers  to the process of resolving disputes between parties from <a href="https://en.wikipedia.org/wiki/Dispute_resolution#:~:text=Dispute%20resolution%20or%20dispute%20settlement,rooted%20and%20lengthy%20than%20disputes." alt="" title="" target="" id="Dispute_resolution" class="Dispute_resolution cookie-full-mode-link">	Wikipedia</a>.</li>
	  <li style="color: white"><u><em><b><mark>Dispute Resolution Policy</mark></b></em></u> refers to a deliberate system of guidelines to guide decisions and achieve dispute resolution.</li>
	 </ol>

	 <br>Please note, this policy is one of the most important policy Didcy has ever drafted. So please make sure you help us abide by it. Thank you.

	<br><br>Once we've being able to get this definitions out of the way, we can now proceed unto reading or going through and <em>really <mark>understanding</mark></em> this policy.
	 
	<br>
	<br>
	 <h1 style="text-align: center;"><b class="">Welcome to Didcy Dispute Resolution Policy</b></h1> 
     <br/>	 
	 <p>
	  Every now and then there are so many things happening on the web or internet both ethical and non-ethical ones. Our focus here now will be tackling the non-ethical or disputed or misunderstood ones and it's resulting actions and consequences that comes with it from all point of views but mostly between the service provider and it's users. Every day there are nefarious cybercrimes or attacks happening on the internet which most users will fall or are vulnerable to making it much difficult to trust any online platform these users visits. 
	  <br><br>This lack of trust on the side of the users always almost results in disputes or misunderstandings and may even further itself to any <q>Federal Justice Department</q> referred to as <q>COURT</q>. 
	  This we think is never a good trail for us as a company. We always want to position ourself in a place where our users trust us more than if possible themselves. Its' our company's mission to achieve such a higher level of respect and make it a must to protect our users most valuable assets, that is, <q>TRUST</q>. <br><br>We as a company know for sure that without trust from it's users nothing can be achieved leaving behind the only disappointing item <q>DISTRUST</q> which then may result in any kind of <q>DISPUTE</q> whether financial, privacy breach, and more. 
	  <br><br>Didcy is not saying all its' users will be satisfied with how much effort it puts in it's platform but we believe most will according to how much value we provide. Because Didcy knows everything almost never goes well as it has being planned even though we're always or must always be optimistic, we've made it a must to draft out a whole different type of valuable policy to help handle or settle almost any kind of local disputes or misunderstandings that arises on its platform or anything related to it's products and services.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related misunderstandings or disputes that may take place : 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br/>Check out the following dispute resolutions below in relation to the above instances or disputes on the platform.
	  
	  <br><br>Our dispute resolution policy resolves around the following platform related dispute resolutions that may exists to curb the above disputes or misunderstandings : 	  

	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
      Kindly check out a list of what a user must promote inorder to avoid encountering any disputes or disagreements or misunderstandings on our platform or it's related products or services. Check it out now.
      
	  <br><br>As a company we bring you the best. We try to make sure all loopholes are kept unloose or locked. That's why we've taken upon ourself to highlight or elaborate on what is needed or required to prevent any disputes or misunderstandings on its platform or related to it's products and services. 
	  
	  <ol type="1">
	   <li style="color: white"></li>
	   <li style="color: white"></li>
	  </ol>
	  
	  <br><br>Upon all the highlighted or elaborated bulletins, we still know that there are always going to be disputes or misunderstandings which may not be able to get resolved locally by the local dispute resolution policy unless on a federal scale. That's why we've made it a decision to draft a dispute resolution policy that will help resolve any disputes or misunderstandings on the federal scale.
	  <br><br>We as a company is and will never wish to have the federal state get involved in any disputes or misunderstandings that arises on our platforms or with it's related products and services. 
	  But what can we do, we need to be prepared in case of any of that happening. 
	  <br>We hope none of them never happens, that is, whether local or federal. 
	  <br><br>We kindly suggest you make it a must to read or go through this policy very carefully without skipping any piece in it. 
	  <br><br>Have a careful reading and careful understanding with less to no disputes. 
	  Thank you.
	  
	 <br><br/>Dispute also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>DISPUTE</q> until a valid reason is provided or until further notice. Dispute and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="Dispute Policy" title="Dispute" target="_blank" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/limit" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you to a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
    Check out our <a id="term-of-sanction" class="term-of-sanction cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>			  
	  
	 </p>
	</p>
	<br>
	 <br>	
  </div>
  <br>
  <br>
  <br>
  <br>
</div>


<div id="myModal-subscribe-stand-policy" class="modal-subscribe-stand-policy overlay"  style="overflow-y: auto">
  <span class="close-subscribe-stand-policy closebtn" id="close-subscribe-stand-policy">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-subscribe-stand-policy">
	<h1 style="text-align: center;"><b class="">DIDCY STAND POLICY</b></h1> 	
	<h2 style="text-align: center;"><b class="">(STAND POLICY)</b></h2> 	
	<p>Effective date: 2022-01-01</p>
	<p><b>Welcome to Didcy</b>.</p> 
	<p>
	Ever since Didcy launched it authentic ad platform on the web, it has since provided the best of it's products and services to its cherished users. Didcy has made it a necessity and priority to create or invent new and also update its existing products and services. As we all know, with new products or services or with new inventions comes new policies to govern or guide the use of those inventions and also protect them against any misuse. We also know that or you can also bear with us("the truth") that mankind was not created for rules or policies but rather the opposite or vice-versa. Mankind can live without rules or commands or policies for as long as they wished to but they only (<q>RULES</q> or <q>POLICIES</q>) exist because most of us can't bear to live without an external force guiding our actions mostly undesirable and taboonist to the society. We should be friends of rules or policies not enemies of it. Why? Because rules or policies are just there to guide our humanic actions and behaviours and also provide absolute guidelines or guidance to how we use a specific invention whether a product or service(old, new or updated). It's not in our best interest to provide or set rules for our own fellow beings to follow most especially to our own actions but less to a product or service use. NB:// Our company is not here to make or force you to abide by it set of rules or policies. You decide what to abide by and not us but for the sake of all please we urge you to help us on this one(that is, helping Didcy maintain its status quo). We are counting on you as well. We know you wouldn't let us down. Yes, of course our policies also falls under the <q>RULE</q> regime or system. Policies or rules can be decided on, that is, whether to abide by or follow or not but without following how would one get the whole data being conveyed through it. Here at Didcy, we believe rules are meant to be broken to an extend (<q>that is, not the rules of <q>LIFE AND DEATH(as for this you already know what to do, so we leave you to decide.)</q></q>) only if you can get around it without having any troubles with the <q>Creator</q> or <q>Inventor</q>(<q>Original</q>)  and also without endangering the right to being human and the right to ownership or membership.
	Our cute lives revolves around rules from birth to death every single second, hour, minute and day whether we like it or not. From Natural laws to Artificial laws(or commandments or policies). NB:// You're your own rules, so make yours. But firstly, really evaluate what you make and how you make it before doing or you do anything else. From the man himself, Apple CEO, Tim Cooks's own words <q>I think you should rarely follow the rules, it's better to write your own rules.</q>.
	To conclude, rules or policies made for the purpose of good, that is, serving you and at the cost of it goodness takes 100% follow up. So please kindly help follow good, reasonable and responsible rules not bad ones.
    Now without further a do, let us proceed to <q>Why we are here</q>.
    Once again, </p>
	<h1 style="color: white">Welcome to Didcy Stand Policy</h1>
    <p>
     Our policy is created to make it possible for you to find out: 
	 <ol type="circle">
	  <li style="color: white">what products and or services are best for you.</li>
	  <li style="color: white">which products and or services provides you with great value.</li>
	  <li style="color: white">which products and or services comes bundled with low and high meta or built-in benefits.</li>
	  <li style="color: white">which products and or services comes also bundles with low and high features and functionalities.</li>
	  <li style="color: white">which product and or services is best for recommendation(to anybody you want to purchase for or want them to purchase, buy or subscribe.</li>
	  <li style="color: white">which products and or services makes you vulnerable to the internet. eg: tracking, frauding, scanning and more</li>
	  <li style="color: white">which products and or services are associated with the our cookie systems and related policies such as pricing policies</li>
	  <li style="color: white">which products and or services are affiliated with other service providers.</li>
	  <li style="color: white">which products and or services are associated with our cookies systems.</li>
	  <li style="color: white">which products and or services you think needs update.</li>
	  <li style="color: white">wich products and or services you think needs to be radically diminated from the platform because it causes. NB://Your thoughts here.</li>Note://We value your feedback.
	  <li style="color: white">which products and or services needs to remain private or public either for a short or long period or forever.</li>
	  <li style="color: white">which products and or services needs to be out of childrens reach.</li>
	  <li style="color: white">which products and or services needs to looked at carefully.</li>
	  <li style="color: white">which products and or services shows us the experience you went through when surfing or navigating our platform either it was bugy or smooth or a slow in the network performance caused by site overloading, misused of bandwidth, processor power and more.</li>
	  <li style="color: white">which products and or services matches your budget or price range or free range.</li>
	  <li style="color: white">which products and or services encourages and engages more ads especially intrusive or disturbing ads.</li>
	  <li style="color: white">which products and or services causes or may cause any health problems either today or in the future either at low or high risk.</li>
	  <li style="color: white">which products and or services disrespect your 
integrity or dignity either as an individual, group, country, state, 
community</li>
	  <li style="color: white">which products and or services showcases pornographic or adult materials which either needs to be totally avoided or harnessed.</li>
	 </ol>	
	 <br>Didcy crafted Stand (that is, it's policy/regulation) mainly to help guide you on your visit to our platform not a force to do what you don't want to do or not to detair you away from our platform. That's why we called it <q>STAND</q>. Why? Because its there to stand with you through out your visit here.
	 <br>Stand is a subscription policy that is designed to govern or regulate most of our ad products and services with a little portion handed over to Web, Terms and the rest. NB:// All are Didcy policies.
	 <br>Stand governs the accessibility right of the following Didcy products and services through user subscriptions. These products and services includes : 
	 <ol style="circle">
	  <li style="color: white">Didcy Deals</li>
	  <li style="color: white"></li>
	 </ol>
	 <br/>Stand also helps resolve any misunderstanding or dispute mostly related to the areas it controls, that is, it's subscription services between the company and the eligible user of the platform. Didcy reserves the right to make changes to <q>STAND</q> until a valid reason is provided or until further notice. Stand and other polices resolution arrangements can be found at <a href="https://www.didcy.com/dispute" alt="" title="" target="" id="dispute" class="dispute cookie-full-mode-link">Dispute</a>. As the name goes, <q>Dispute</q> meaning misunderstanding or disagreement. Hence, disagreement policy (<q>DISPUTE POLICY</q>). Also check out our <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> for more insight about your extend of the platform access. That is, platform  accessibility or right limitations on your side.
	 <br>Please once again, kindly make it a priority to abide by our rules with no force, so that we all can live very much peacefully and in harmony with each other. Please kindly also make it a habit to always go or read through our policies, most especially, the <a href="https://www.didcy.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Limit Policy" title="Limit Policy" target="_blank" id="limit" class="limit cookie-full-mode-link">Limit Policy</a> to help you understand our <q><b>dos</b></q> and <q><b>don'ts</b></q> or accessibility rights extensions and also help you find out whether any changes has being made so far to any of our policies or has being updated. Please kindly read through our policies thoroughly before trying to ask any questions on your mind because it might be that your questions has already being answered in any of the (<q>our</q>) policies otherwise we might transfer you too a section in our policies which you either did not read carefully or skipped entirely to find your answers there. So please try. Still counting on you. Thank you.
	 <br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
    Check out our <a id="term-of-sanction-2" class="term-of-sanction-2 cookie-full-mode-link" href= "https://www.didcy.com/adv-retrieve.php?rc_id=229910827171822&policy-id=0&&data_id=2&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" style="color: white" alt="Didcy Term of Sanction" target="_blank" title="Didcy Term of Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>		 
	</p>
	</p>
	<br>
	 <br>	
  </div>
  <br>
  <br>
  <br>
  <br>
</div>



<div id="myModal-subscribe-web-policy" class="modal-subscribe-web-policy overlay"  style="overflow-y: auto">
  <span class="close-subscribe-web-policy closebtn" id="close-subscribe-web-policy">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-subscribe-web-policy">
	<h1 style="text-align: center;"><b class="">DIDCY WEB POLICY</b></h1> 	
	<h2 style="text-align: center;"><b class="">(DOMAIN POLICY)</b></h2> 	
	<p>Effective date: 2022-01-01</p>
	<p><b>Welcome to Didcy</b>.</p>
	<p>As of January 1st, 2022, Didcy began to heavily invest intensively into its Domain Service agenda. Didcy together with its awesome investors and industry partners has made it one of its main priorities to provide its market or domain market with little to priceless or free domain packages under its provided set of conditions(that is, Domain Subscription Policy) including all the popular or well-known TLDs egs: .com, .net, .org &amp; more, all for little to free purchases. This is made possible not becausee of any hidden agenda but because  its beginning was tough as a result of having no dime/money to even get its website on the web for a whole year. Our project(platform publicly known as <q>Didcy</q>) has being built but needed a few dollars to buy its domain to kickstart what we've built.</p>
	<p>We weren't able to afford a &dollar;8 - &dollar;14 domain which in addition also comes together with other cheated packages which needed to be bought else the site will be exposed to potential harmful hackers, criminals & crackers. You'll be shocked how difficult it can be to obtain just &dollar;2 - &dollar;8 in a country where most of it's exchange rate/currency conversion rate is much lower than that of its foreign reserve currency(dollars).</p>
	<p>Imagine a country like Ghana with the dollar exchange or conversion rate of &dollar;1 to GHS 6.049 (that is, &dollar;1 = GHS 6.049) making it much difficult to purchase a domain name from one of the well-known domain registrars like Godaddy, and likes.</p>
	<p>It's not that their domains are very much expensive but instead its foreign exchange equivalent in a developing country like Ghana makes  it very much expensive in comparison to US dollar or Pounds Sterling.</p>
	<p>In respond, we had to resort to the local domain registrars like web4Africa(Disclaimer: We are not saying <q>web4Africa</q> is not a better domain provider), etc inorder to purchase a domain locally in the local currency with little to free external services like email forwarding which makes it a good catch for the local buyer.</p>
	<p>Most Domain registrars especially, foreign registrars don't take the time to evaluate the currency value of other countries in relation to their set dollar prices to see if the dollar price set from their point of view is either higher or lower to the local currency of their domain buyer which intend inform them to whether or not adjust the dollar prices for their foreign to local buyers with the higher dollar exchange rate eg. Ghana.</p>
	<p>In a nutshell, our packages are designed to tackle such problems which we as a company think needs to be addressed before a domain inflation destroys the internet consumption. Without tackling this pricing and exchange or conversion problems in the domain market, most domain buyers will also decide to inflate their site subscription prices or any products or services they sell to substitute for their so called locally based expensive domain(attributed to the Foreign exchange rate).</p>
	<p>To conclude this noticeable ongoing  monetary problem, Didcy has decided to put forward a new domain pricing and purchasing system to make it much more affordable to buy a domain in both exchanges or conversions.</p>
	<p>Didcy includes both exchanges making it less convertible. That is, no need to convert any currrency into the other because it wouldn't be possible. With Didcy, &dollar;1 is not GHS 6.049. Our domain prices is set in each local currency of that country with different price set.</p>
	<p>Example, Our domain can sell at let say GHS 12 or GHS 8 in Ghana but &dollar;2 or &dollar;8 in the United States, making the exchange rate useless because we feel for the local buyer. We do so because at Didcy we do things as if we were the customer or buyer and we bear his/her worries or grieve. <q>With the Motto : <q>Our customers, Our priorities</q></q>.</p>
	<p>Without much talk, let us jump right into the required necessities needed inorder to acquire a domain from Didcy.</p>
	<p>The following guidelines give an insight on how a domain buyer can obtain a domain and benefit from this initiative put forward by Didcy.</p>
	<h3 style="color: white">Didcy Free Domain Policy</h3>
	<ol type="1">
	 <li style="color: white">Domain names with longer names or characters greater than 6 are free to purchase including it's .com, .net, etc counterpart for 1 year and more if your site continues to see much contents every now and then and also your site is able to attract more aggressive traffic every single day. After the 1st year, your domain will be billed based on the amount of content you put out and traffic you get on your site. That is, the <q><b>The more traffic you accumulate per day the less fee you are bond to pay at a maximum of &dollar;2 - &dollar;4 per year and the less traffic the more fee you are bond to pay at a maximum of &dollar;6 - &dollar;8 per year</b>.</li>
	 <h3 style="color: white">The above package is designed for : </h3>
	 <ol type="i">
	   <li style="color: white">Non-Didcy members/users.</li>
	   <li style="color: white">Didcy users/members using the default services either newly Signed up or old users/members</li>
	   <li style="color: white">Didcy users/members who have subscribed to the Didcy Web or Stand Basic packages.</li>
	 </ol>
	 <li style="color: white">Domain services are free under both Didcy Web and Stand Pro &amp; Premium packages. 
	 NB:// Limited free services under the Pro package but unlimited under the Premium package.
	 </li>
	 <li style="color: white">Free Domains for users who have signed into the platform for at least 10x (10 times) per day for 1 year.</li>
	 <li style="color: white">Free Domains to users who have referred at least 5 new users or members to our platform and making sure they become  active users or members each day for 6 month using their automatically generated referral link.</li>
	</ol>
	<p>
	 <br>
	 <strong><b>NB:// Didcy been so kind and so much into it's users/members and non-members/users shoes has opted to provide an installment package where both users/members and non-users/members will be allowed to pay for their purchased domains on installment depending on their strength of payment. Please note, buying too much domains which exceeds your budget is not a good idea. Buy what you can and have more as you progress in life. If you believe your domain is unique and may get stolen by another person, then don't worry Didcy also comes to your aid on that. Didcy also has an annual $1 Secure my domain plan package to help secure your future domains until you need them. 
	 Kindly make a swift passive walk to <a class="cookie-full-mode-link" href="https://www.didcy.com/adv-retrieve.php?rc_id=029910827171820&policy-id=0&&data_id=0&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" id="secure-my-domains" style="color: white" alt="Didcy Secure" target="_blank" title="Didcy Secure" ping="">Didcy Secure</a> to find out more about $1 Secure my domain plan package.</a></b></strong><br><br>
	 For more info on Didcy Domain Subscription Policy, kindly contact us by looking up our contact informations at either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to listen to only and only you and no one else. <br><br>
	 Find out more at <a id="domian-term-of-use" class="cookie-full-mode-link" href= "https://www.didcy.com/adv-retrieve.php?rc_id=129910827171821&policy-id=0&&data_id=1&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" style="color: white" alt="Didcy Term of Use" target="_blank" title="Didcy Term of Use" ping="">Didcy Term of Use</a> which gives you more insight on how to use our purchased or provided domains. <br><br>Also check out our <a id="term-of-sanction-2" class="term-of-sanction-2 cookie-full-mode-link" href= "https://www.didcy.com/term-of-sanction" style="color: white" alt="Didcy Sanction" target="_blank" title="Didcy Sanction" ping="">Didcy Term of Sanction</a> which gives you more insight on what necessary actions we take to eliminate or disable a notorious user or member from Didcy platform and it's products and services. 
	 Thank you &amp; have a nice Didcy Subscription. <br>
	 <br>	
	</p>
  </div>
  <br>
  <br>
  <br>
  <br>
</div>


<div id="myModal-security" class="modal-security overlay"  style="overflow-y: auto">
  <span class="close-security closebtn" id="close-security">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-security">

<h2 style="text-align: center;"><b class="didcy-privacy-policy">PRIVACY POLICY</b></h2>
<p>Effective date: 2022-01-01</p>
<p>1. <b>Introduction</b></p>
<p>Welcome to <b> Didcy</b>.</p>
<p><b>Didcy</b> (“us”, “we”, or “our”) operates <b>didcy.com</b> (hereinafter referred to as <b>“Service”</b>).</p>
<p>Our Privacy Policy governs your visit to <b>didcy.com</b>, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>
<p>We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>
<p>Our Terms and Conditions (<b>“Terms”</b>) govern all use of our Service and together with the Privacy Policy constitutes your agreement with us (<b>“agreement”</b>).</p>
<p>2. <b>Definitions</b></p>
<p><b>SERVICE</b> means the didcy.com website operated by Didcy.</p>
<p><b>PERSONAL DATA</b> means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p>
<p><b>USAGE DATA</b> is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit).</p>
<p><b>COOKIES</b> are small files stored on your device (computer or mobile device).</p>
<p><b>DATA CONTROLLER</b> means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data.</p>
<p><b>DATA PROCESSORS (OR SERVICE PROVIDERS)</b> means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively.</p> <p><b>DATA SUBJECT</b> is any living individual who is the subject of Personal Data.</p>
<p><b>THE USER</b> is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.</p>
<p>3. <b>Information Collection and Use</b></p>
<p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>
<p>4. <b>Types of Data Collected</b></p>
<p><b>Personal Data</b></p>
<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (<b>“Personal Data”</b>). Personally identifiable information may include, but is not limited to:</p>
<p>0.1. Email address</p>
<p>0.2. First name and last name</p>
<p>0.3. Phone number</p>
<p>0.4. Address, Country, State, Province, ZIP/Postal code, City</p>
<p>0.5. Cookies and Usage Data</p>
<p>We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link.</p>
<p><b>Usage Data</b></p>
<p>We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through any device (<b>“Usage Data”</b>).</p>
<p>This Usage Data may include information such as your computer’s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
<p>When you access Service with a device, this Usage Data may include information such as the type of device you use, your device unique ID, the IP address of your device, your device operating system, the type of Internet browser you use, unique device identifiers and other diagnostic data.</p>
<p><b>Location Data</b></p><p>We may use and store information about your location if you give us permission to do so (<b>“Location Data”</b>). We use this data to provide features of our Service, to improve and customize our Service.</p><p>You can enable or disable location services when you use our Service at any time by way of your device settings.</p>
<p><b>Tracking Cookies Data</b></p>
<p>We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.</p>
<p>Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our Service.</p>
<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
<p>Examples of Cookies we use:</p>
<p>0.1. <b>Session Cookies:</b> We use Session Cookies to operate our Service.</p>
<p>0.2. <b>Preference Cookies:</b> We use Preference Cookies to remember your preferences and various settings.</p>
<p>0.3. <b>Security Cookies:</b> We use Security Cookies for security purposes.</p>
<p>0.4. <b>Advertising Cookies:</b> Advertising Cookies are used to serve you with advertisements that may be relevant to you and your interests.</p>
<p><b>Other Data</b></p>
<p>While using our Service, we may also collect the following information: sex, age, date of birth, place of birth, passport details, citizenship, registration at place of residence and actual address, telephone number (work, mobile), details of documents on education, qualification, professional training, employment agreements, <a id="non-disclosure-agreement" href="https://policymaker.io/non-disclosure-agreement/" alt="NDA agreements" title="NDA agreements" target="_blank">NDA agreements</a>, information on bonuses and compensation, information on marital status, family members, social security (or other taxpayer identification) number, office location and other data.</p>
<p>5. <b>Use of Data</b></p>
<p>Didcy uses the collected data for various purposes:</p>
<p>0.1. to provide and maintain our Service;</p>
<p>0.2. to notify you about changes to our Service;</p>
<p>0.3. to allow you to participate in interactive features of our Service when you choose to do so;</p>
<p>0.4. to provide customer support;</p>
<p>0.5. to gather analysis or valuable information so that we can improve our Service;</p>
<p>0.6. to monitor the usage of our Service;</p>
<p>0.7. to detect, prevent and address technical issues;</p>
<p>0.8. to fulfil any other purpose for which you provide it;</p>
<p>0.9. to carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;</p>
<p>0.10. to provide you with notices about your account and/or subscription, including expiration and renewal notices, email-instructions, etc.;</p>
<p>0.11. to provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information;</p>
<p>0.12. in any other way we may describe when you provide the information;</p>
<p>0.13. for any other purpose with your consent.</p>
<p>6. <b>Retention of Data</b></p>
<p>We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
<p>We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.</p>
<p>7. <b>Transfer of Data</b></p>
<p>Your information, including Personal Data, may be transferred to – and maintained on – computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>
<p>If you are located outside Ghana and choose to provide information to us, please note that we transfer the data, including Personal Data, to Ghana and process it there.</p>
<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
<p>Didcy will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information.</p>
<p>8. <b>Disclosure of Data</b></p>
<p>We may disclose personal information that we collect, or you provide:</p>
<p>0.1. <b>Business Transaction.</b></p><p>If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred.</p><p>0.2. <b>Other cases. We may disclose your information also:</b></p><p>0.2.1. to our subsidiaries and affiliates;</p><p>0.2.2. to contractors, service providers, and other third parties we use to support our business;</p><p>0.2.3. to fulfill the purpose for which you provide it;</p><p>0.2.4. for the purpose of including your company’s logo on our website;</p><p>0.2.5. for any other purpose disclosed by us when you provide the information;</p><p>0.2.6. with your consent in any other cases;</p><p>0.2.7. if we believe disclosure is necessary or appropriate to protect the rights, property, or safety of the Company, our customers, or others.</p>
<p>9. <b>Security of Data</b></p>
<p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
<p>10. <b>Your Data Protection Rights Under General Data Protection Regulation (GDPR)
</b></p>
<p>If you are a resident of the European Union (EU) and European Economic Area (EEA), you have certain data protection rights, covered by GDPR.</p>
<p>We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.</p>
<p> If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at <b>contact@didcy.com</b>.</p>
<p>In certain circumstances, you have the following data protection rights:</p>
<p>0.1. the right to access, update or to delete the information we have on you;</p>
<p>0.2. the right of rectification. You have the right to have your information rectified if that information is inaccurate or incomplete;</p>
<p>0.3. the right to object. You have the right to object to our processing of your Personal Data;</p>
<p>0.4. the right of restriction. You have the right to request that we restrict the processing of your personal information;</p>
<p>0.5. the right to data portability. You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format;</p>
<p>0.6. the right to withdraw consent. You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information;</p>
<p>Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data.</p>
<p>You have the right to complain to a Data Protection Authority about our collection and use of your Personal Data. For more information, please contact your local data protection authority in the European Economic Area (EEA).</p>
<p>11. <b>Your Data Protection Rights under the California Privacy Protection Act (CalOPPA)</b></p>
<p>CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law’s reach stretches well beyond California to require a person or company in the United States (and conceivable the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy.</p>
<p>According to CalOPPA we agree to the following:</p>
<p>0.1. users can visit our site anonymously;</p>
<p>0.2. our Privacy Policy link includes the word “Privacy”, and can easily be found on the home page of our website;</p>
<p>0.3. users will be notified of any privacy policy changes on our Privacy Policy Page;</p>
<p>0.4. users are able to change their personal information by emailing us at <b>contact@didcy.com</b>.</p>
<p>Our Policy on “Do Not Track” Signals:</p>
<p>We honor Do Not Track signals and do not track, plant cookies, or use advertising when a Do Not Track browser mechanism is in place. Do Not Track is a preference you can set in your web browser to inform websites that you do not want to be tracked.</p>
<p>You can enable or disable Do Not Track by visiting the Preferences or Settings page of your web browser.</p>
<p>12. <b>Your Data Protection Rights under the California Consumer Privacy Act (CCPA)</b></p>
<p>If you are a California resident, you are entitled to learn what data we collect about you, ask to delete your data and not to sell (share) it. To exercise your data protection rights, you can make certain requests and ask us:</p>
<p><b>0.1. What personal information we have about you. If you make this request, we will return to you:</b></p>
<p>0.0.1. The categories of personal information we have collected about you.</p>
<p>0.0.2. The categories of sources from which we collect your personal information.</p>
<p>0.0.3. The business or commercial purpose for collecting or selling your personal information.</p>
<p>0.0.4. The categories of third parties with whom we share personal information.</p>
<p>0.0.5. The specific pieces of personal information we have collected about you.</p>
<p>0.0.6. A list of categories of personal information that we have sold, along with the category of any other company we sold it to. If we have not sold your personal information, we will inform you of that fact.</p>
<p>0.0.7. A list of categories of personal information that we have disclosed for a business purpose, along with the category of any other company we shared it with.</p>
<p>Please note, you are entitled to ask us to provide you with this information up to two times in a rolling twelve-month period. When you make this request, the information provided may be limited to the personal information we collected about you in the previous 12 months.</p>
<p><b>0.2. To delete your personal information. If you make this request, we will delete the personal information we hold about you as of the date of your request from our records and direct any service providers to do the same. In some cases, deletion may be accomplished through de-identification of the information. If you choose to delete your personal information, you may not be able to use certain functions that require your personal information to operate.</b></p>
<p><b>0.3. To stop selling your personal information. We don’t sell or rent your personal information to any third parties for any purpose. We do not sell your personal information for monetary consideration. However, under some circumstances, a transfer of personal information to a third party, or within our family of companies, without monetary consideration may be considered a “sale” under California law. You are the only owner of your Personal Data and can request disclosure or deletion at any time.</b></p>
<p>If you submit a request to stop selling your personal information, we will stop making such transfers.</p>
<p>Please note, if you ask us to delete or stop selling your data, it may impact your experience with us, and you may not be able to participate in certain programs or membership services which require the usage of your personal information to function. But in no circumstances, we will discriminate against you for exercising your rights.</p>
<p>To exercise your California data protection rights described above, please send your request(s) by email: <b>contact@didcy.com</b>.</p>
<p>Your data protection rights, described above, are covered by the CCPA, short for the California Consumer Privacy Act. To find out more, visit the official California Legislative Information website. The CCPA took effect on 01/01/2020.</p>
<p>13. <b>Service Providers</b></p>
<p>We may employ third party companies and individuals to facilitate our Service (<b>“Service Providers”</b>), provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.</p>
<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>
<p>14. <b>Analytics</b></p>
<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>
<p>15. <b>CI/CD tools</b></p>
<p>We may use third-party Service Providers to automate the development process of our Service.</p>
<p>16. <b>Advertising</b></p><p>We may use third-party Service Providers to show advertisements to you to help support and maintain our Service.</p>
<p>17. <b>Behavioral Remarketing</b></p>
<p>We may use remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads based on your past visits to our Service.</p>
<p>18. <b>Payments</b></p><p>We may provide paid products and/or services within Service. In that case, we use third-party services for payment processing (e.g. payment processors).</p><p>We will not store or collect your payment card details. That information is provided directly to our third-party payment processors whose use of your personal information is governed by their Privacy Policy. These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of payment information.</p>
<p>19. <b>Links to Other Sites</b></p>
<p>Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
<!--<p>For example, the outlined <a href="https://policymaker.io/privacy-policy/">privacy policy</a> has been made using <a href="https://policymaker.io/">PolicyMaker.io</a>, a free tool that helps create high-quality legal documents. PolicyMaker’s <a href="https://policymaker.io/privacy-policy/">privacy policy generator</a> is an easy-to-use tool for creating a <a href="https://policymaker.io/blog-privacy-policy/">privacy policy for blog</a>, website, e-commerce store or mobile app.</p>-->
<p>20. <b><b>Children’s Privacy</b></b></p>
<p>Our Services are not intended for use by children under the age of 18 (<b>“Child”</b> or <b>“Children”</b>).</p>
<p>We do not knowingly collect personally identifiable information from Children under 18. If you become aware that a Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from Children without verification of parental consent, we take steps to remove that information from our servers.</p>
<p>21. <b>Changes to This Privacy Policy</b></p>
<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
<p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update “effective date” at the top of this Privacy Policy.</p>
<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
<p>22. <b>Contact Us</b></p>
<p>If you have any questions about this Privacy Policy, please contact us by email: <b>contact@didcy.com</b>.</p>
<p style="margin-top: 5em;" class="policy-attribution">This <a id="privacy-policy" title="Didcy Privacy Policy" alt="Didcy Privacy Policy" href="https://policymaker.io/privacy-policy/">Privacy Policy</a> was created by <b>Didcy</b> on 2022-01-01.</p>
<br>
<br>
<br>
<br>
  </div>
</div>
 
 
<div id="myModal-cookie" style="overflow-y: auto" class="modal-cookie overlay">
  <span class="close-cookie closebtn" id="close-cookie">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-cookie">
  <h1 class="didcy-cookie-short-mode">DIDCY COOKIES:</h1><br>
<p class="didcy-cook-txt">Cookies are small pieces or amount of data that are used to store information 
on  a web beacon or browser or application. Cookies are mostly used anonymous to store and accept information about the user,
and other information on computer, phone and other materials or devices. These small files referred to as 'cookies' are sent to your web browser or client or application
from Didcy. Didcy use cookies, web beacons and other sophisticated but simple to 
comprehend technologies to track, personalize and save information about each user. 
Didcy may use cookies  if you have a didcy account including any other didcy product which are 
collectively connected to the site or any ('user') that uses didcy products and services. 
Cookies allows DIDCY to let you know and understand the information that we receive about you  
including information on your use on other website and apps whether or not you are registered 
or loggged in or out and also offer you more didcy products and services.</p>

<button type="button" id="didcy-cookie-full-mode" class="didcy-cookie-full-mode">
Full Mode</button>
<br>
<br>
<br>
<br>
  </div>
</div>


<div id="myModal-cookie-full-mode" style="overflow-y: auto" class="modal-cookie-full-mode overlay">
  <span class="close-cookie-full-mode closebtn" id="close-cookie-full-mode">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-cookie-full-mode">
  
<h1 style="color: white" class="didcy-cookie-policy-full">DIDCY COOKIE POLICY</h1> 

<h5 style="color: white" class="cookie-h5-headers">Last updated December 23rd, 2021</h5>
<br>
<hr>

<h3 style="color: white" class="cookie-h3-headers">Table of Content</h3>

<ol style="color: white">

 <li class="cookie-full-mode-link section" id="section">Introduction</li>
 
 <li class="cookie-full-mode-link section" id="section">Use of Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Types Of Cookies</li>
  <ol style="color: white;list-style: circle">

 <li class="cookie-full-mode-link section" id="section">Advertising Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Analytics Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Our Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Personalization Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Security Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Site Management Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Third-Party Cookies</li>
 <li class="cookie-full-mode-link section" id="section">Virtual Meeting Cookies</li>
 <li class="cookie-full-mode-link section" id="section">Deal Cookies</li>
 <li class="cookie-full-mode-link section" id="section">Subscription Cookies</li>
 <li class="cookie-full-mode-link section" id="section">Payment Cookies</li>
 <li class="cookie-full-mode-link section" id="section">Ad Creation Cookies</li>
 <li class="cookie-full-mode-link section" id="section">Rating Cookies</li>
 
</ol>
 
 <li class="cookie-full-mode-link section" id="section">Control Of Cookies</li>
 
 <li class="cookie-full-mode-link section" id="section">Other Tracking Technologies</li>
 
 <li class="cookie-full-mode-link section" id="section">Privacy Policy</li>
 
 <li class="cookie-full-mode-link section" id="section">Contact Us</li>
 
</ol>

<h2 style="color: white" id="intro">INTRODUCTION</h2>
<p>Didcy (“we” or “us” or “our”) may use cookies, web beacons, tracking pixels, and other tracking technologies when you visit our website (didcy.com), including any other media form, media channel, mobile website, or mobile application related or connected thereto (collectively, the “Site”) to help customize the Site and improve your experience.</p> 

<p>We reserve the right to make changes to this Cookie Policy at any time and for any reason. We will alert you about any changes by updating the “Last Updated” date of this Cookie Policy. Any changes or modifications will be effective immediately upon posting the updated Cookie Policy on the Site, and you waive the right to receive specific notice of each such change or modification.</p> 

<p>You are encouraged to periodically review this Cookie Policy to stay informed of updates. You will be deemed to have been made aware of, will be subject to, and will be deemed to have accepted the changes in any revised Cookie Policy by your continued use of the Site after the date such revised Cookie Policy is posted.</p> 

<p>This cookie policy was created by Didcy.</p>

<h2 style="color: white" id="useOfCookies">USE OF COOKIES</h2>

<p>A “cookie” is a string of information which assigns you a unique identifier that we store on your computer. Your browser then provides that unique identifier to us each time you submit a query to the Site. We use cookies on the Site to, among other things, keep track of services you have used, record registration information, record your user preferences, keep you logged into the Site, facilitate purchase procedures, and track the pages you visit. Cookies help us understand how the Site is being used and improve your user experience. </p>

<h2 style="color: white" id="typesOfCookies">TYPES OF COOKIES</h2>
<p>The following types of cookies may be used when you visit the Site:</p>

<h3 style="color: white" class="cookie-h3-headers">Advertising Cookies</h3>

<p>Advertising cookies are placed on your computer by advertisers and ad servers in order to display advertisements that are most likely to be of interest to you. These cookies allow advertisers and ad servers to gather information about your visits to the Site and other websites, alternate the ads sent to a specific computer, and track how often an ad has been viewed and by whom. These cookies are linked to a computer and do not gather any personal information about you. </p>

<h3 style="color: white" class="cookie-h3-headers">Analytics Cookies</h3>

<p>Analytics cookies monitor how users reached the Site, and how they interact with and move around once on the Site. These cookies let us know what features on the Site are working the best and what features on the Site can be improved. </p>

<h3 style="color: white" class="cookie-h3-headers">Our Cookies</h3>

<p>Our cookies are “first-party cookies”, and can be either permanent or temporary. These are necessary cookies, without which the Site won't work properly or be able to provide certain features and functionalities. Some of these may be manually disabled in your browser, but may affect the functionality of the Site.</p>

<h3 style="color: white" class="cookie-h3-headers">Personalization Cookies</h3>

<p>Personalization cookies are used to recognize repeat visitors to the Site. We use these cookies to record your browsing history, the pages you have visited, and your settings and preferences each time you visit the Site. </p>

<h3 style="color: white" class="cookie-h3-headers">Security Cookies</h3>

<p>Security cookies help identify and prevent security risks. We use these cookies to authenticate users and protect user data from unauthorized parties.</p>

<h3 style="color: white" class="cookie-h3-headers">Site Management Cookies</h3>

<p>Site management cookies are used to maintain your identity or session on the Site so that you are not logged off unexpectedly, and any information you enter is retained from page to page. These cookies cannot be turned off individually, but you can disable all cookies in your browser.</p>

<h3 style="color: white" class="cookie-h3-headers">Third-Party Cookies</h3>

<p>Third-party cookies may be place on your computer when you visit the Site by companies that run certain services we offer. These cookies allow the third parties to gather and track certain information about you. These cookies can be manually disabled and enabled in your browser.</p>

<h3 style="color: white" class="cookie-h3-headers">Virtual Meeting Cookies</h3>

<p>Virtual Meeting cookies are currently not available since it's features are also not available for use.</p>

<h3 style="color: white" class="cookie-h3-headers">Deal Cookies</h3>

<p>Deal cookies are currently not available since it's features are also not available for use.</p>

<h3 style="color: white" class="cookie-h3-headers">Subscription Cookies</h3>

<p style="color: white">Subscription cookies are currently not available since it's features are also not available for use.</p>

<h3 style="color: white" class="cookie-h3-headers">Payment Cookies</h3> 

<p>Payment cookies are currently not available since it's features are also not available for use.</p>

<h3 style="color: white" class="cookie-h3-headers">Ad Creation Cookies</h3>

<p>Ad Creation cookies are currently not available since it's features are also not available for use.</p>

<h3 style="color: white" class="cookie-h3-headers">Rating Cookies</h3>

<p>Rating cookies are used for tracking the site performance per each individual potential user. This cookie also makes it possible 
for users to make changes to their previous site rating.</p>

<h3 style="color: white" id="controlOfCookies" class="cookie-h3-headers">CONTROL OF COOKIES</h3>
<p>Most browsers are set to accept cookies by default. However, you can remove or reject cookies in your browser’s settings. Please be aware that such action could affect the availability and functionality of the Site. </p>

<p>For more information on how to control cookies, check your browser or device’s settings for how you can control or reject cookies, or visit the following links:</p>

<a class="cookie-full-mode-link" href="" alt="" title="Apple Safari" target="_blank">Apple Safari</a>
<a class="cookie-full-mode-link" href="" alt="" title="Google Chrome" target="_blank">Google Chrome</a>
<a class="cookie-full-mode-link" href="" alt="" title="Microsoft Edge" target="_blank">Microsoft Edge</a>
<a class="cookie-full-mode-link" href="" alt="" title="Microsoft Internet Explorer" target="_blank">Microsoft Internet Explorer</a>
<a class="cookie-full-mode-link" href="" alt="" title="Mozilla Firefox" target="_blank">Mozilla Firefox</a>
<a class="cookie-full-mode-link" href="" alt="" title="Opera" target="_blank">Opera</a>
<a class="cookie-full-mode-link" href="" alt="" title="Android (Chrome)" target="_blank">Android (Chrome)</a> 
<a class="cookie-full-mode-link" href="" alt="" title="Blackberry" target="_blank">Blackberry</a>
<a class="cookie-full-mode-link" href="" alt="" title="Iphone or Ipad (Chrome)" target="_blank">Iphone or Ipad (Chrome)</a>
<a class="cookie-full-mode-link" href="" alt="" title="Iphone or Ipad (Safari)" target="_blank">Iphone or Ipad (Safari)</a>

<p>In addition, you may opt-out of some third-party cookies through the <a class="cookie-full-mode-link" href="" alt="" title="" target="">Network Advertising Initiative’s Opt-Out Tool.</a></p>

<h3 style="color: white" id="otherTrckTechs" class="cookie-h3-headers">OTHER TRACKING TECHNOLOGIES</h3>
<p>In addition to cookies, we may use web beacons, pixel tags, and other tracking technologies on the Site to help customize the Site and improve your experience. A “web beacon” or “pixel tag” is tiny object or image embedded in a web page or email. They are used to track the number of users who have visited particular pages and viewed emails, and acquire other statistical data. They collect only a limited set of data, such as a cookie number, time and date of page or email view, and a description of the page or email on which they reside. Web beacons and pixel tags cannot be declined. However, you can limit their use by controlling the cookies that interact with them.</p>

<h3 style="color: white" id="privacyPolicy" class="cookie-h3-headers">DIDCY PRIVACY POLICY</h3>
<p>For more information about how we use information collected by cookies and other tracking technologies, please refer to our Privacy Policy at <a class="cookie-full-mode-link" id="privacy-policy-link" href="https://www.didcy.com/privacy-policy" alt="Privacy Policy" title="Privacy Policy" target="_blank">https://www.didcy.com/privacy-policy</a> or posted on the Site. This Cookie Policy is part of and is incorporated into our Privacy Policy. By using the Site, you agree to be bound by this Cookie Policy and our Privacy Policy.</p>

<h3 style="color: white" id="contactUs" class="cookie-h3-headers">CONTACT US</h3>
<p>If you have questions or comments about this Cookie Policy, please contact us at:</p>

<address style="color: white" class="cookie-hA-headers">
 Didcy<br/>
 Mukose Street<br/>
 Accra, 0233<br/>
 +233265873507<br/>
 Fax Number: N/A.<br/>
 contact@didcy.com<br/>
 https://www.didcy.com
</address>  
<br>
<br/>
  
  </div>
</div>

<!-- <script type="text/javascript">
 "use strict";

var queryLinks4Default = document.getElementsByClassName("section");
const queryLength = queryLinks4Default.length;

for(let queryLinks = 0; queryLinks < queryLength; queryLinks++){
	queryLinks4Default[queryLinks].addEventListener("click", (event) =>{ event.preventDefault();});
}


</script> -->

 <!-- <script type="text/javascript" src="adv-page-section-smooth-scroll.js"></script> -->

<div id="myModal-adv-exhibition-platform" class="modal-adv-exhibition-platform overlay">
  <span class="close-adv-exhibition-platform closebtn" id="close-adv-exhibition-platform">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <h1 class="adv-exhibition-platform-header" id="adv-exhibition-platform-header">DIDCY OPEN-SOURCE ADV EXHIBITION DEAL(OSAED)</h1>
  <div class="row" id="adv-exhibition-platform">
   
  </div>
  <div id="caption-adv-exhibition-platform" class="caption-adv-exhibition-platform">Didcy OSAED</div>
</div>

<div id="myModal-adv-exhibition-platform-offer" class="modal-adv-exhibition-platform-offer">
  <span class="close-adv-exhibition-platform-offer closebtn" id="close-adv-exhibition-platform-offer">
    <a href="javascript:void(0)" style="text-decoration: none">&times;</a>
	</span>
	<h1 class="adv-exhibition-platform-header-1" id="adv-exhibition-platform-header-1">DIDCY OPEN-SOURCE ADV EXHIBITION DEAL(OSAED)</h1>
	<h2 class="adv-exhibition-platform-header-2" id="adv-exhibition-platform-header-2">ALERT!!! [ COMPANIES ONLY ]</h2>
	<p class="adv-exhibition-platform-request" id="adv-exhibition-platform-request">This form is designed to accumulate all OSAED informations provided here for OSAED Findings</p>
	<p class="adv-exhibition-platform-request" id="adv-exhibition-platform-request">Please fill out all the input fields with as much sufficient info as possible.</p>
 
<div class="form-inline-in" id=""> 
	<form class="form-inline" id="form-inline">
	<div class="form-inline-col-1">
	  <input type="email" class="email-offer" id="email-offer" placeholder="Enter email" name="email-offer">
	  <input type="text" class="name-offer" id="name-offer" placeholder="Enter Company Name" name="name-offer">
	  <input type="text" class="target-display-offer" id="target-display-offer" placeholder="Enter Target Display(s) ..." name="target-display-offer">
      <input type="text" class="approved-by-of-offerer deal-offer" id="approved-by-of-offerer" placeholder="Approved by(Government Agency)">
	  <input type="date" class="deal-expiration-date-offer cursor" id="deal-expiration-date-offer">
	  <input type="number" class="offer-fee deal-offer" id="offer-fee" min=0 max=1000000000 step=1 start=0 placeholder="Enter amount to offer">
	  <input type="url" class="url-of-offerer deal-offer" id="url-of-offerer" placeholder="Enter your website url here">
	  <input type="button" class="links-add-of-offerer deal-offer" id="links-add-of-offerer" value="Add traded links here">
	  <br>
	  <span class="upload-ads-add-of-offerer" id="upload-ads-add-of-offerer">OR</span>
	  <br/>
	  <input type="file" multiple enctype="form/multipart-data" class="custom-file-input custom-file-input-offer uploads-ads-of-offerer deal-offer" name="uploads-ads-of-offerer[]" id="uploads-ads-of-offerer">
	  <input type="number" class="min-negotiable-of-offerer deal-offer" id="min-negotiable-of-offerer" placeholder="Enter minimum negotiable fee">
	  <input type="number" class="ideal-negotiable-of-offerer deal-offer" id="ideal-negotiable-of-offerer" placeholder="Enter ideal negotiable fee">
	  <input type="text" class="industry-of-offerer deal-offer" id="industry-of-offerer" placeholder="Enter Industry">
	  <input type="text" class="product-service-name-of-offerer deal-offer" id="product-service-name-of-offerer" placeholder="Enter Product/Service Name">
	  <input type="button" class="ad-policy-add-of-offerer deal-offer" id="ad-policy-add-of-offerer" value="Add ad policy(ies) links here">	  
	  <textarea style="height:200px" class="description-of-offerer deal-offer" id="description-of-offerer" placeholder="Please define your product/service"></textarea>
	  
	  <input type="button" id="add-business-tel-of-offerer" class="add-business-tel-of-offerer deal-offer" value="Add Business Telephone Numbers here">
	  <input type="button" id="add-business-whatsapp-tel-of-offerer" class="add-business-whatsapp-tel-of-offerer deal-offer" value="Add Business WhatsApp Numbers here [optional]">
	  <!-- <input type="tel" placeholder="Business Telephone Number" name="business-tel-of-offerer" id="business-tel-of-offerer" class="business-tel-of-offerer deal-offer"> -->
	  <!-- <input type="tel" name="business-whatsapp-tel-of-offerer" placeholder="Business WhatsApp Number [optional]" id="business-whatsapp-tel-of-offerer" class="business-whatsapp-tel-of-offerer deal-offer"> -->
	 
	 <input type="email" name="business-email-of-offerer deal-offer" placeholder="Business E-mail" id="business-email-of-offerer deal-offer" class="business-email-of-offerer deal-offer deal-offer">
	  <input type="text" name="business-instagram-handle-of-offerer deal-offer" placeholder="Business Instagram Handle [optional]" id="business-instagram-handle-of-offerer deal-offer" class="business-instagram-of-offerer deal-offer deal-offer">
	  <input type="text" name="business-twitter-handle-of-offerer deal-offer" placeholder="Business Twitter Handle [optional]" id="business-instagram-handle-of-offerer deal-offer" class="business-twitter-of-offerer deal-offer deal-offer">
	  <input type="text" name="business-youtube-handle-of-offerer deal-offer" placeholder="Business Youtube Handle [optional]" id="business-youtube-handle-of-offerer deal-offer" class="business-youtube-of-offerer deal-offer deal-offer">
	  <select multiple id="countryOf-Offerer" class="cursor countryOf-Offerer" name="countryOf-Offerer">
	    <option name="">Åland Islands</option>	
		<option name="">Afghanistan</option>	
		<option name="">Albania</option>	
		<option name="">Algeria</option>	
		<option name="">American Samoa</option>	
		<option name="">Andorra</option>	
		<option name="">Angola</option>	
		<option name="">Anguilla</option>	
		<option name="">Antigua and Barbuda</option>	
		<option name="">Argentina</option>	
		<option name="">Armenia</option>	
		<option name="">Aruba</option>	
		<option name="">Australia</option>	
		<option name="">Austria</option>	
		<option name="">Azerbaijan</option>	
		<option name="">Bahamas</option>	
		<option name="">Bahrain</option>	
		<option name="">Bangladesh</option>	
		<option name="">Barbados</option>	
		<option name="">Belarus</option>	
		<option name="">Belgium</option>	
		<option name="">Belize</option>	
		<option name="">Benin</option>	
		<option name="">Bermuda</option>	
		<option name="">Bhutan</option>	
		<option name="">Bolivia</option>	
		<option name="">Bonaire</option>	
		<option name="">Bosnia and Herzegovina</option>	
		<option name="">Botswana</option>	
		<option name="">Brazil</option>	
		<option name="">British Indian Ocean Territory</option>	
		<option name="">British Virgin Islands</option>	
		<option name="">Brunei</option>	
		<option name="">Bulgaria</option>	
		<option name="">Burkina Faso</option>	
		<option name="">Burundi</option>	
		<option name="">Cambodia</option>	
		<option name="">Cameroon</option>	
		<option name="">Canada</option>	
		<option name="">Cape Verde</option>	
		<option name="">Cayman Islands</option>	
		<option name="">Central African Republic</option>	
		<option name="">Chad</option>	
		<option name="">Chile</option>	
		<option name="">China</option>	
		<option name="">Colombia</option>	
		<option name="">Comoros</option>	
		<option name="">Democratic Republic of the Congo</option>	
		<option name="">Republic of the Congo</option>	
		<option name="">Cook Islands</option>	
		<option name="">Costa Rica</option>	
		<option name="">Croatia</option>	
		<option name="">Cuba</option>	
		<option name="">Curaçao</option>	
		<option name="">Cyprus</option>	
		<option name="">Czech Republic</option>	
		<option name="">Denmark</option>	
		<option name="">Djibouti</option>	
		<option name="">Dominica</option>	
		<option name="">Dominican Republic</option>	
		<option name="">Ecuador</option>	
		<option name="">Egypt</option>	
		<option name="">El Salvador</option>	
		<option name="">Equatorial Guinea</option>	
		<option name="">Eritrea</option>	
		<option name="">Estonia</option>	
		<option name="">Ethiopia</option>	
		<option name="">Falkland Islands</option>	
		<option name="">Faroe Islands</option>	
		<option name="">Fiji</option>	
		<option name="">Finland</option>	
		<option name="">France</option>	
		<option name="">French Guiana</option>	
		<option name="">French Polynesia</option>	
		<option name="">French Southern and Antarctic Lands</option>	
		<option name="">Gabon</option>	
		<option name="">Gambia</option>	
		<option name="">Georgia</option>	
		<option name="">Germany</option>	
		<option name="">Ghana</option>	
		<option name="">Gibraltar</option>	
		<option name="">Greece</option>	
		<option name="">Greenland</option>	
		<option name="">Grenada</option>	
		<option name="">Guadeloupe</option>	
		<option name="">Guam</option>	
		<option name="">Guatemala</option>	
		<option name="">Guinea</option>	
		<option name="">Guinea-Bissau</option>	
		<option name="">Guyana</option>	
		<option name="">Haiti</option>	
		<option name="">Honduras</option>	
		<option name="">Hong Kong</option>	
		<option name="">Hungary</option>	
		<option name="">Iceland</option>	
		<option name="">India</option>	
		<option name="">Indonesia</option>	
		<option name="">Iran</option>	
		<option name="">Iraq</option>	
		<option name="">Ireland</option>	
		<option name="">Israel</option>	
		<option name="">Italy</option>	
		<option name="">Ivory Coast</option>	
		<option name="">Jamaica</option>	
		<option name="">Japan</option>	
		<option name="">Jordan</option>	
		<option name="">Kazakhstan</option>	
		<option name="">Kenya</option>	
		<option name="">Kiribati</option>	
		<option name="">North Korea</option>	
		<option name="">South Korea</option>	
		<option name="">Kosovo</option>	
		<option name="">Kurdistan</option>	
		<option name="">Kuwait</option>	
		<option name="">Kyrgyzstan</option>	
		<option name="">Laos</option>	
		<option name="">Latvia</option>	
		<option name="">Lebanon</option>	
		<option name="">Lesotho</option>	
		<option name="">Liberia</option>	
		<option name="">Libya</option>	
		<option name="">Liechtenstein</option>	
		<option name="">Lithuania</option>	
		<option name="">Luxembourg</option>	
		<option name="">North Macedonia</option>	
		<option name="">Macau</option>	
		<option name="">Premium channels</option>	
		<option name="">Madagascar</option>	
		<option name="">Malawi</option>	
		<option name="">Malaysia</option>	
		<option name="">Maldives</option>	
		<option name="">Mali</option>	
		<option name="">Malta</option>	
		<option name="">Marquesas Islands</option>	
		<option name="">Marshall Islands</option>	
		<option name="">Martinique</option>	
		<option name="">Mauritania</option>	
		<option name="">Mauritius</option>	
		<option name="">Mayotte</option>	
		<option name="">Mexico</option>	
		<option name="">Over-the-air</option>	
		<option name="">National TV Broadcast</option>	
		<option name="">Federated States of Micronesia</option>	
		<option name="">Midway Islands</option>	
		<option name="">Moldova</option>	
		<option name="">Monaco</option>	
		<option name="">Mongolia</option>	
		<option name="">Montenegro</option>	
		<option name="">Montserrat</option>	
		<option name="">Morocco</option>	
		<option name="">Mozambique</option>	
		<option name="">Myanmar</option>	
		<option name="">Namibia</option>	
		<option name="">Nepal</option>	
		<option name="">Netherlands</option>	
		<option name="">Netherlands Antilles</option>	
		<option name="">New Caledonia</option>	
		<option name="">New Zealand</option>	
		<option name="">Nicaragua</option>	
		<option name="">National channels</option>	
		<option name="">Local channels</option>	
		<option name="">Niger</option>	
		<option name="">Nigeria</option>	
		<option name="">Niue</option>	
		<option name="">Northern Mariana Islands</option>	
		<option name="">Norway</option>	
		<option name="">Oman</option>	
		<option name="">Pakistan</option>	
		<option name="">Palau</option>	
		<option name="">Palestine</option>	
		<option name="">Panama</option>	
		<option name="">Papua New Guinea</option>	
		<option name="">Paraguay</option>	
		<option name="">Peru</option>	
		<option name="">Philippines</option>	
		<option name="">Government-owned networks</option>	
		<option name="">Minor television networks</option>	
		<option name="">Pitcairn Islands</option>	
		<option name="">Poland</option>	
		<option name="">Portugal</option>	
		<option name="">Puerto Rico</option>	
		<option name="">Qatar</option>	
		<option name="">Réunion</option>	
		<option name="">Romania</option>	
		<option name="">Russia </option>	
		<option name="">Rwanda</option>	
		<option name="">Saba</option>	
		<option name="">Saint Barthélemy</option>	
		<option name="">Saint Kitts and Nevis</option>	
		<option name="">Saint Lucia</option>	
		<option name="">Sint Maarten</option>	
		<option name="">Saint Pierre and Miquelon</option>	
		<option name="">Saint Vincent and the Grenadines</option>	
		<option name="">Samoa</option>	
		<option name="">San Marino</option>	
		<option name="">São Tomé and Príncipe</option>	
		<option name="">Saudi Arabia</option>	
		<option name="">Senegal</option>	
		<option name="">Serbia</option>	
		<option name="">Seychelles</option>	
		<option name="">Sierra Leone</option>	
		<option name="">Singapore</option>	
		<option name="">Sint Eustatius</option>	
		<option name="">Slovakia</option>	
		<option name="">Slovenia</option>	
		<option name="">Solomon Islands</option>	
		<option name="">Somalia</option>	
		<option name="">South Africa</option>	
		<option name="">Spain</option>	
		<option name="">Sri Lanka</option>	
		<option name="">Sudan</option>	
		<option name="">South Sudan</option>	
		<option name="">Suriname</option>	
		<option name="">Eswatini</option>	
		<option name="">Sweden</option>	
		<option name="">Switzerland</option>	
		<option name="">Syria</option>	
		<option name="">Taiwan</option>	
		<option name="">Tajikistan</option>	
		<option name="">Tanzania</option>	
		<option name="">Thailand</option>	
		<option name="">Tibet</option>	
		<option name="">Timor-Leste</option>	
		<option name="">Togo</option>	
		<option name="">Tokelau</option>	
		<option name="">Tonga</option>	
		<option name="">Trinidad and Tobago</option>	
		<option name="">Tristan da Cunha</option>	
		<option name="">Tunisia</option>	
		<option name="">Turkey</option>	
		<option name="">Turkmenistan</option>	
		<option name="">Turks and Caicos Islands</option>	
		<option name="">Tuvalu</option>	
		<option name="">Uganda</option>	
		<option name="">Ukraine</option>	
		<option name="">United Arab Emirates</option>	
		<option name="">United Kingdom</option>	
		<option name="">United States</option>	
		<option name="">Over-the-air</option>	
		<option name="">Cable and satellite</option>	
		<option name="">Defunct</option>	
		<option name="">United States Virgin Islands</option>	
		<option name="">Uruguay</option>	
		<option name="">Uzbekistan</option>	
		<option name="">Vanuatu</option>	
		<option name="">Vatican City</option>	
		<option name="">Venezuela</option>	
		<option name="">Vietnam</option>	
		<option name="">Wake Island</option>	
		<option name="">Wallis and Futuna</option>	
		<option name="">Western Sahara</option>	
		<option name="">Yemen</option>	
		<option name="">Zambia</option>	
		<option name="">Zanzibar</option>	
		<option name="">Zimbabwe</option>			  	  
	  </select>      
	  <br/>
<!-- 	  <label>
		<input type="checkbox" name="remember-offer"> Remember me
	  </label> -->
	  <button type="submit" name="submit-offer" id="submit-offer" class="submit-offer">Submit</button>
	 </div>
	</form>
 </div>
	  <div id="caption-adv-exhibition-platform-offer" class="caption-adv-exhibition-platform-offer">Didcy OSAED</div>
</div>



<div id="myModal-adv-exhibition-platform-table" class="modal-adv-exhibition-platform-table overlay">
  <span class="close-adv-exhibition-platform-table closebtn" id="close-adv-exhibition-platform-table">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-adv-exhibition-platform-table">
	  <div class="row-6">
		  <div class="column-plat column-" id="column"> 
			  <button class="button" id="find-deals">Find Deals</button>   
			  <button class="button" id="offer-deals">Offer Deals</button>   
		  </div>
	  </div>
  </div>
  <div id="caption-adv-exhibition-platform-table" class="caption-adv-exhibition-platform-table">Didcy Ad Deals</div>
</div>

<div id="myModal-howToGaGa" class="modal-howToGaGa">
  <span class="close-howToGaGa">&times;</span>
  <div class="modal-content-howToGaGa" id="img01-howToGaGa">
	<div class="row" id="add-mre-rows">
	  <div style="overflow-x:hidden" class="column-31 add-more-1" id="add-more-1" title="Click on the text to view it bigger">  
        <h3 id="gaga-text-header" class="gaga-text-header">Text Tutorials</h3>
		<h3 class="how-to-didcy"><u><b>How to Didcy</b></u></h3>
		<p  id="gaga-text-tutorials" class="gaga-text-tutorials"><!--actors(that is, ad actors or actors involved in ad acting.), groups, -->
         Welcome to  Didcy.com, the place where <b><i>space</i></b> starts everything. 
		 <br>Didcy has provided it's members with a much more simpler way of navigating through it's intiutive, unmatched
		 and comprehensive platform. Didcy is basically a <q>space provider.</q><!-- related to ads. But also provides other non-advertising services like education and others-->
		 With Didcy, a member needs only a computer, internet and a web browser with the appropriate directions to our platform.
		 <q>Didcy is a space provider designed to service all types of users and their needs.</q> <br/>Alert!!! Please always check the URL in your web browser to confirm if the URL matches
		  <a class="cookie-full-mode-link" href="https://www.didcy.com" alt="Didcy" target="_blank" title="Didcy" ping="">https://www.didcy.com</a>. Thank you.
		 <br>The following steps gives comprehensive details about how to use didcy.com. 
		 <br/>Let's jump right into it. 
		 <br><strong><u>Step 1:</u></strong> Get your computer, connect to the internet, open your web browser (eg. Google Chrome) and enter inside the URL : 
		 <em><a href="https://www.didcy.com" alt="Didcy" title="Didcy" target="_blank">https://www.didcy.com.</a></em>
		 <!--<br><strong><u>Step 2:</u></strong> Didcy will kindly ask you to <q>Please select AdCloud Type</q>. This feature was introduce to make the user decide
		 on whether or not to show any content on the page at all and also make the user choose what content on our platform he/she 
		 would want to be shown.-->
		 <br/><strong><u>Step 2:</u></strong> Explore the platform to see what suits your needs either as an educator, creative developer or designer, advertizer or marketer,  actor(ie. an ad actor) or a company.
		 <br><strong><u>Step 3:</u></strong> <br><mark style="font-size: 20px">
		 Exploration Agenda</mark><br><b style="font-size: 25px">Under Top Navigation Area</b>
		 <br><br><b><i style="font-size: 20px">Industry <img  class='iconic' src='adv.icons/3256216.png'/>:</i></b><br>
		 Didcy Industry categorizes all ad videos, images, audios &amp; company profiles into distinct types of industries
		so that navigation becomes much easier and specific. Didcy Industry is a long roll of table containing industrial names 
		for user preferred selections. Egs: Mechanics, Electronics, All, etc.
		<br><br/><b><i style="font-size: 20px">Services <img width="39px" src="adv.icons/3631153.png"/>: </i></b><br>
		We all love services especially if there are always more to be served by just one platform.
		<br>Here, Didcy makes it work like magic giving it's members the needed services of their daily hustle or dreams.
		<br>Under Didcy Services navigation dropdown button, you can see two dropdowns,
		<br>1. Audio/Radio Services <img src="adv.icons/3167693.png" width="39px" alt="" title="" target="" ping="" download=""/> & 
		<br>2. More services or The Core<img src="adv.icons/2377884.png" alt="" width="39px" title="" target="" ping="" download=""/>.
		<br>These two buttons are at the heart of the platform esp. the <q>More Services or The Core</q>.
		<br>Among the two buttons, one(Audio/Radio) is currently not available for functioning.
		<br>Hence nothing much can be said about it untill it's functionality is successfully available.
		<br><mark>More Services or The Core</mark> on the otherhand, as the name goes, provides more services to its 
		users. It's a well constructed worth of packed tools for making our users industry more vibrant.
        <br/><strong><mark>Services </mark></strong><img  width="39px" src="adv.icons/3631153.png"/>: <strong><mark><br>a: Audio/Radio </mark></strong><img src="adv.icons/3167693.png" width="39px" alt="" title="" target="" ping="" download=""/>: [N/A].
        <br/>       <strong><mark>b: More </mark></strong><img src="adv.icons/2377884.png" alt="" width="39px" title="" target="" ping="" download=""/>: The 'More services' helps organize all Didcy
         most essential tools. Under the 'More Services or The Core', you can find tools like Didcy React, Didcy Business and more.
         <br>Our Terms & Conditions can also be found under the 'More services' together with 'How to Didcy'.
         <br>Normally, you'll find the Terms & Conditions at the bottom of a page with the exception of fewer platforms like
          social media platforms, here at Didcy, we use the same approach but instead it's located under 
		 'More Services or The Core'.
		 <br/>Tools provided under the 'More Services or The Core' agenda : 
		 <ol>
         <li style="color: white">Didcy Loans</li>
         <li style="color: white">Didcy Include</li>
         <li style="color: white">Didcy Analyse</li>
         <li style="color: white">Didcy Focus</li>
         <li style="color: white">Didcy Meet</li>
         <li style="color: white">Didcy Share</li>
         <li style="color: white">Didcy Rate</li>
         <li style="color: white">Didcy Find?</li>
         <li style="color: white">Didcy us?</li>
         <li style="color: white">Didcy Business</li>
         <li style="color: white">Didcy React</li>
         <li style="color: white">Didcy List</li>
         <li style="color: white">Didcy Exhibit</li>
         <li style="color: white">Didcy Records</li>
         <li style="color: white">Didcy Awards</li>
         <li style="color: white">Didcy Books</li>
         <li style="color: white">Didcy Relate</li>
         <li style="color: white">Didcy Trade</li></li>
         <li style="color: white">Didcy Brands</li>
         <li style="color: white">Didcy Shoot</li>
         <li style="color: white">Didcy Sales</li>
         <li style="color: white">Didcy Course</li>
         <li style="color: white">Didcy Dev</li>
         <li style="color: white">Didcy Transparent</li>	
		</ol>
		</p> 
		
		<b><i>Hence, the <q>More Services or The Core</q> is a toolkit or set or collection of Didcy defined tools for solving 99.99% of all advertising problems.</i></b>
	    
		<h2 style="color: white"><b>The following data gives a detailed insight of each feature presented under the <q>More Services or The Core</q> toolset or collections.</b></h2>
		
		<h3>Features as follows: </h3>
		
		<!--<ol type="a">-->
		 <!--<li style="color: white">-->
		   <b>Didcy Include</b> : This feature makes it possible to make Didcy Subscriptions, sign up for Didcy Newletters, check notifications and more. 
		   Didcy Include is <strong>purposely designed to handle payment services</strong> with a little bit of external news services.
		   
		   This feature comes bundled with meta or built-in features inorder to have a smooth and successful payment platform. 
		   Didcy Include on it own does not make up the payment platform but rather it is a carrier of those payment markups.
		   
		   Didcy Include features includes
		   <ol type="1">
		    <li style="color: white">Shyly</li>
		    <li style="color: white">Reset Background</li>
		    <li style="color: white">Blur Background</li>
		    <li style="color: white">Pricing</li>
		    <li style="color: white">Newletters</li>
		    <li style="color: white">Notification</li>
		    <li style="color: white">Reach</li>
		    <li style="color: white">Payments</li>
		    <li style="color: white">Refund Request</li>
		    <li style="color: white">S-Records and</li>
		    <li style="color: white">How to Subscribe</li>
		   </ol>
		   
		   This and future upcoming tools make up the Didcy Include toolset.
		   
		   <br><br>Please note, most of the above services(features) are still in developmental stage or are 
		   currently being developed for your own great experience on our platform, so that's why what 
		   you see displayed here are all not exposed under the <b>MENU</b> toolkit. 
		   
		   Some are ready for shippment or deployment but we think you deserve more than our current builds.
		   So we're currently perfecting all finished products just for you. <em><b>Because we look to perfect 
		   the unperfection.</b></em>
		   
		   We displayed the unfinished products and services here because we want to keep you always in the 
		   loop or updated at all time. 
		   
		   <br>
		   <br>
		   <b>Didcy Exhibit</b> : This feature is one of the many tools we consider as a master piece of our work.
		   This master piece(feature) is purposely crafted to help you (our users) offer and find all kinds of advertising deals
		   from local advertising to international advertising, from text to video advertising, from 
		   solo to corporate advertising, from radio to tv advertising, from physical to online advertising
		   and so on.

           Exhibit comes bundled into two most important part. These includes: 
   
           <ol type="1">
			<li><b>Offer deals</b> : This unique feature is designed to assist businesses offer all kinds of suitable and negotiable
			advertizing deals. It provides a business or a dealer a piece of offering deal form to fill, so that it can be 
			exhibited at Find Deals where advertizers all over the world come to take on interesting advertising 
			deal offers.	
			</li>
			
			<li><b>Find deals</b> : This feature is purposely created to help advertisers find advertising deals exhibited 
			by businesses or solo businesses through <q><b>OFFER DEALS</b></q>.	
			</li>
           </ol>		   

			Please kindly follow the guide to find out how this features really works.
			<br>
			<b><u>It works like this : </u></b><br>
			
			Let say, I've an ad which I need a media company to advertize. As we all know, the traditional or conventional
			way is to find a media company by searching through all kinds of platforms or places 
			to find the right one that suits your requirements and most of all your <q><b style="color: dodgerblue">BUDGET</b></q>.
			
			We all know this system of finding or searching provides you with something at least if not to your expectations.
		    But we also know that this search system is tiresome or can take tremendous amount of time or even days or months and even 
			years to even get us to what we really want if we even get what we want. We as a company think 
			this method is good but not in a fruitful, productive and creative way mostly in time management.
			
			We as a company knows that there are so many and yet to come innovative technologies which can help a 
			business automate or take care of this process but with certain limitations.
			
			Limitations such as specific tasks like AudioGo for running audio ads <b>only</b> online.
			
			These programs also charges a fee right on the onset. That is, you pay as you upload your ads being it audio 
			or whatever to that platform like AudioGo. Chargeable fee on those platforms depends on so many things.
			Eg. like the number of ads you want to upload and even file type being it mp3 or others.
			
			Exhibit does not really automate or go running your ads on certain likehood places (even though we're still looking into that as an added feature to our platform in the future) and not certainly 
			perform specific task or run specific or accept specific ads as well. But instead it is a place where 
			business advertising deals are exhibited or showcased to the public or masses for all advertizers 
			to value and accept if interested. It is a <q><b>STOCK MARKET FOR ADS</b></q> similar to the <q><b>STOCK MARKET FOR COMPANIES</b></q>. <em><b><q>IT IS : OFFER | FIND | NEGOTIATE | ACCEPT | TRANSACT | ADVERTISE (OFNATA)</q>.</b></em> 
			
			Once your advertising deal(s) has being selected and accepted to be advertised by an advertising media company or a solo advertiser based on 
			your deal requirements and also once it has being advertised by the advertising company or solo advertiser, then 
			the deal(s) is/are closed and removed from our platform for the next deal to take place.
			
		    <b>NB://</b> The deal involves another process called <em><b><q>TRANSACTION</q></b></em>. 
			This only comes into play once the deal(s) is/are closed and payments and file(s)(that is, your ad files(text, audio, image, video, etc)) transactions are required(or transacted/transferred) to push the deal(s) to the next level.
			
			Didcy Exhibit charges a fee on each transaction made. Exhibit charges at most <b style="color: slateblue">4%</b> on each transaction made.
			
			In short, Didcy Exhibit is like an exhibition venue where all products and services are exhibited for the right match or deal.
			
			<b>NB://</b> Best deals comes best prices. Best negotiations comes best minds.
			
			Kindly explore this feature into depth and enjoy what you find. 
			
			<b><strong>EXPLORE IS THE KEY TO ENJOY. USE IT, DEAL IT.</strong></b>
			
			<br>
			<br>
            <b>Didcy Rate</b> : Rate helps us know how you think and feel about our products and services.
            <b><i>SO RATE NOW TO SEE THE MAGIC IN DIDCY</i></b>.	

		    <br>
		    <br>
			<b>Didcy Course</b> : We all love courses, especially if it's free and most importantly targeted to 
			our interest. Didcy course aim to achieve that for all it's users. Both businesses and individuals.
			
			Yeah, we mentioned businesses. Why don't you think businesses needs more learning?
			
			Are you in the 19<sup>th</sup> century or what? We are in the 21<sup>th</sup> and your business or 
			your worth is not valuable or is worthless if you don't keep learning every single day.
			
			That's why, we as a company created <b><i>DIDCY COURSE</i></b>, to help businesses and individuals learn more and know 
			more about their industries and the future ahead and also to increase their value in the market place.
			
			Remember that there are two competitions, the older version of you or your business which is the insider 
			competition and the external competitions(that is, other businesses or individuals).
			
			And the only great place to start is <b>Didcy Course</b>. <b><i style='color: dodgerblue'>START NOW AND GROW YOUR WORTH</i></b>. 
			Starting for <b>FREE</b> for the <b><i>first six(6)</i></b> months and at <b>only &dollar;5</b> per course after the free period.
			
			We offer a refund if you think you can't continue with the course or feel like you're not getting 
			worth your money. 
			
			NB:// Worth does not depend on the course, it depends on your application of the course or knowledge.
			
			Knowledge without application is the same as <b>NO KNOWLEDGE</b> at all.
			
			<b>LEARN MORE, GROW MORE, DO MORE</b>. 
			
			<br>
			<br>
			<b>Didcy Find</b> : Find helps all Didcy users learn and know more about the Platform. It's divided into 
			three(3) distinct parts. 
			<ol style="color: white">
			 <li>Text Tutorials</li>
			 <li>Image Tutorials and </li>
			 <li>Video Tutorials</li>
			</ol>
			
			As you can see, Didcy Find is a tutorial playground aimed to guide all Didcers take absolute  
			control of the platform.
			
			<b><i>LEARN WITH FIND, BECAUSE WHAT IS BETTER THAN FIND. IF NOT FIND.</i></b>.
	  
			<br>
			<br>			
			<b>Didcy Dev</b> : Dev is a piece of developer form designed to help all developers around the world build for and make money on our platform.
			With this in motion, it has automatically make Didcy now an open-source platform where all(developers) can build or develop and make money on the 
			open-source platform. It's not necessarily vital to have Didcy Dev but take this into consideration <q><b>HOW WOULD A DEVELOPER MAKE MONEY AFTER CREATION OR DEVELOPMENT 
			 AND INTEGRATION INTO THE PLATFORM</b></q>. So as a company, we decided to design Didcy Apply which will make it much easier to get developers <b>Bank account numbers, 
			 Card numbers and Wallet numbers(esp. Mobile Money Wallet) where they can receive any income they make from their products/services and not limited to only receiving payments
			 but also usage or tracking and subscription data(if integrated) which will make the developer fully aware of how his/her product(s) or service(s) is/are being utilize.</q></b>
			 We know developers are much more concerned with their security infos before anything else. So we as a company or platform, urges all developers to trust our 99.99% security protocol.
			 We'll and we're doing anything necessary in our undying power to safeguard your personal data, so rest assure <b>DIDCY FAMILY</b>. At Didcy we're one BIG FAMILY, and all what a <b><q>GOOD</q></b>
			 family does is to protect each other. So we pledge to protect your all as one BIG FAMILY ("DIDCY FAMILY").
      
			<br>
			<br>
			<b>Didcy React</b> : React is powerful. Why? Because we all need something to react to. 
			React reacts to anything is initiated for. Whether uploading of media materials,
			Rating, Updates, Video &amp; Film productions, etc. 
			
			<b style='color: slateblue'>USE REACT NOW AND KNOW WHAT IS WORTH REACTING TO. REACT NOW, REASON NOW</b>
			<br>
			<br>
			<b>Didcy Transparent</b> : Transperent means clear and clean. Didcy Transparent is a collection of 
			transparent policies designed to help our users find what they need.
			
			<br>
			<br>
			<b>Didcy Us</b> : Why us? Because we care. Didcy Us is great news. Why? Because it tells you something or where something is right? Yes, of course.
			
			<b>US</b> makes it possible for our users to make a quick call or reach out to our customer service providers. 
			
			Our users can also use <b style='color: dodgerblue'>Shyly</b> to Chat Shyly, our chat-based customer service provider.
			
			<b>Use Shyly, Know Shyly, Help Shyly, Love Shyly</b>.
			
			<b>Your No.1 Chat Problem Solver</b>.
			
			<br>
			<br>
			To find Shyly, kindly navigate to Didcy Include. Shyly can be found there. Thank you. 
		   
		   <br>
		   <br>For more enquiries, kindly contact us by looking up our contact informations at 
		   either <q>Contacts</q> <img class="iconic" src="adv.icons/870175.png"/> in the top 
		   navigation bar of the front page or at <q>Didcy Find</q> under <q>More Services or The Core</q> 
		   <img class="iconic" src="adv.icons/2377884.png"/>. We will be availabile 24/7 just to \
		   listen to only you. Have a nice Didcy visit. <br><br>Thank you.
		 <!--</li>-->
		 <!-- <li style="color: white"></li> -->
		<!--</ol>-->
	  </div>
	  
    <div class="column-31 add-more-2" title="Click on each image to view it bigger">
	  <h3 class="image-tutorial-header">Image Tutorials</h3>
	  <img id="img-tutorial-0" src="adv.tutorials/images/didcy-0.PNG" style="width: 100%;padding-bottom: 5px;"/>
	  <img id="img-tutorial-0a" src="adv.tutorials/images/didcy-0a.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-1" src="adv.tutorials/images/didcy-1.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-2" src="adv.tutorials/images/didcy-2.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-3" src="adv.tutorials/images/didcy-3.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-4" src="adv.tutorials/images/didcy-4.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-5" src="adv.tutorials/images/didcy-5.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-6" src="adv.tutorials/images/didcy-6.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-7" src="adv.tutorials/images/didcy-7.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-8" src="adv.tutorials/images/didcy-8.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-9" src="adv.tutorials/images/didcy-9.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-10" src="adv.tutorials/images/didcy-10.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-11" src="adv.tutorials/images/didcy-11.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-12" src="adv.tutorials/images/didcy-12.png" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-13" src="adv.tutorials/images/didcy-13.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-14" src="adv.tutorials/images/Capture14.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-15" src="adv.tutorials/images/Capture15.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-16" src="adv.tutorials/images/Capture16.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-17" src="adv.tutorials/images/Capture17.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-18" src="adv.tutorials/images/didcy-18.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-19" src="adv.tutorials/images/Capture19.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-20" src="adv.tutorials/images/Capture20.PNG" style="width: 100%;padding-bottom: 5px;"/>
    </div>

    <div class="column-31 add-more-2" title="Click on each video to view it bigger">
	  <h3 class="video-tutorial-header">Video Tutorials</h3>
      <video controls=true id="video-tutorial-1" src="adv.tutorials/videos/Didcy-0.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-2"src="adv.tutorials/videos/Didcy-1.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-3"src="adv.tutorials/videos/3.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-4"src="adv.tutorials/videos/3.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-5"src="adv.tutorials/videos/3.mp4" style="width: 100%;padding-bottom: 5px;"></video>
    </div>
	
  </div>
  </div>
  <div id="caption-howToGaGa" class="caption-howToGaGa"></div>
</div>

<div class="curtain-mother">
	<div class="curtain overlay-22">
	  <!-- <h1 class="left1">About</h1> -->
	  <div class="left2">
		 <h1 class="left1">About</h1><br>
Why we do what we do:<br>		 
                 WE LOVE WHAT WE DO<br><br><!--company or an agency-->
Who we are:<br>
         Didcy is a space provision platform where users can cloud, sell, build, host and do more.<br><br>
What we do:<br>
          Didcy helps you sell, buy, host, store, develop, grow, produce and get you whatever you desire.<br><br>

Our Mission:<br>
                   WE ARE HERE TO HELP TAKE YOUR AMBITION TO THE NEXT LEVEL.<br>
		 
		 
	  </div>

	</div>


	<div class="curtain overlay-21">
	  <span class="close-curtain">&times;</span>
	  <!-- <h1 class="right1">us</h1> -->
	  <div class="right2">
		<h1 class="right1">us</h1><br>
		 Come to your Affordable Market & locate your dreams.<br><br>
		 We are the best affordable market you can find out there.
	     We aim to offer the best quality products and services to you.
         Didcy is the way forward.</br>
		 Start with us <b><i>NOW</i></b> and keep more.</br>
         <b onclick="PopUpEServices()" style="cursor: pointer;">NOTICE.</b>
		  <!-- onclick="PopUpAdTasks()"-->
		         
          <br><br><br><button class="jhal" id="jhal">Just Have a Look</button>
		  <!-- Dig deeper -->
	  </div> 

	</div>
</div>

<div class="curtain-mother-animate">
	<div class="curtain-animate overlay-22">
	  <!-- <h1 class="left1">About</h1> -->
	  <div class="left2-animate">
	     <!-- <h1 class="left1">About</h1><br> -->
		 <h1 class="left1-animate">Our Team</h1>
          At long last, you've made it. Our team have being long waiting for you. Welcome Didcer, together we'll find solutions to our problems most especially yours. We are always focused on the problems we've already solved, the ones we're currently solving and the ones you would like us to work on in the future all just for you and us. Our team is dedicated to providing the best of values and as much value it can to it's members through it's innovative ad platform. 
		         
		 
<!-- 		 <img id="image-abt" class="image-abt" src="adv.actors.profiles/people2.jpg"/> -->
        
         
<!-- 		 <hr>
		 
		 <br><button class="jhal" id="coot">See 4 yourself</button> -->
		
	  </div>

	</div>


	<div class="curtain-animate overlay-21">
	  <span class="close-curtain-animate">&times;</span>
	  <!-- <h1 class="right1">us</h1> -->
	  <div class="right2-animate">
	    <!-- <h1 class="right1">us</h1><br> -->
		  <!-- <br> -->
	      We believe in the process and we know you're the right person for our solutions to your ad problems.
		  Here at Didcy, we've got your back as well as counting on us for anything. We know you can find it. Just focus.<br>
          
          <button class="jhal" id="jhal-team">Know your team</button>
		  
		  <h1 class="right1-animate">Developers</h1>
          Humanity is nothing without it's <q>Developers or Creators</q>.
		  Our developers makes it a hobby to keep us in the loop without loosing balance or focus.
		  <button class="jhal" id="jhal-developers">Hey, you! yes you, look &rarr;</button>
		         
<!--         <video src="adv.tutorials/videos/1.mp4" id="video-abt" class="video-abt" controls=true></video> -->
  
	  </div> 

	</div>
</div>

<div id="myModal-know-team" class="modal-know-team" style="overflow-y: auto">
    <span class="close-know-team" id="close-know-team">&times;</span>
	
	<div class="modal-content-know-team">
	 <h1 class="know-team-header" style="color: white;text-align: center"><q>Our team, Your team</q></h1>
  <div class="row">
  <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="developers/ceo.jpeg" alt="David Ansong" style="width:100%">
      <div class="container-developers">
        <h2>David Ansong</h2>
        <p class="title-developers">CEO &amp; Founder</p>
        <p class="descriptive-developers" style="display: none">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers" style="display:none">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('developers/ceo.jpeg', 
		'David Ansong', '+233265873507', 'davidansong213@gmail.com', 0)">Insight</button></p>
      </div>
    </div>
  </div>

 <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="developers/ta.jpg" alt="Godbless" style="width:100%">
      <div class="container-developers">
        <h2>Dieubeni Doubalet</h2>
        <p class="title-developers">Team Advisor</p>
        <p class="descriptive-developers" style="display: none">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers" style="display:none">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('developers/ta.jpg', 
		'Dieubeni Doubalet', '+233570665453', 'doubalet@gmail.com', 'Godbless')">Insight</button></p>
      </div>
    </div>
  </div>
  
   <!--<div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="adv.actors.profiles/people2.jpg" alt="John" style="width:100%">
      <div class="container-developers">
        <h2>David Quartey</h2>
        <p class="title-developers">Designer</p>
        <p class="descriptive-developers">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('adv.actors.profiles/people2.jpg', 
		'David Quartey', '+23354500493910', 'davidquartey@gmail.com', 'N/A')">Insight</button></p>
      </div>
    </div>
  </div>

  <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="adv.actors.profiles/people2.jpg" alt="John" style="width:100%">
      <div class="container-developers">
        <h2>Joshua Brown</h2>
        <p class="title-developers">Procurement</p>
        <p class="descriptive-developers">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('adv.actors.profiles/people2.jpg', 
		'Joshua Brown', '+23354500493915', 'joshuabrown@gmail.com', 'N/A')">Insight</button></p>
      </div>
    </div>
  </div>-->
  
  <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="developers/na.png" alt="Alex Sanchez" style="width:100%">
      <div class="container-developers">
        <h2>Alex Sanchez</h2>
        <p class="title-developers">Entreprenuer</p>
        <p class="descriptive-developers" style="display: none">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers" style="display:none">alexsanchez@gmail.com</p>
        <p><button class="button-developers" onclick="Insight('developers/na.png', 
		'Alex Sanchez', '+233261308114', 'alexsanchez@gmail.com', 'Alex')">Insight</button></p>
      </div>
    </div>
  </div>
  
  <!--<div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="adv.actors.profiles/people2.jpg" alt="John" style="width:100%">
      <div class="container-developers">
        <h2>Bismark Adjei</h2>
        <p class="title-developers">Salesperson</p>
        <p class="descriptive-developers">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('adv.actors.profiles/people2.jpg', 
		'Bismark Adjei', '+23350500493911', 'bismarkadjei@gmail.com', 'N/A')">Insight</button></p>
      </div>
    </div>
  </div>-->

  </div>
</div>
</div>

<div id="myModal-know-developers" style="overflow-y: auto" class="modal-know-developers overlay">
    <span class="close-know-developers" id="close-know-developers">&times;</span>
	
	<div class="modal-content-know-developers">
	 <h1 class="know-developers-header" style="color: white;text-align: center"><q>Our developers, Your developers</q></h1>
	 
  <div class="row">
  <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="developers/ceo.jpeg" alt="David Ansong" style="width:100%">
      <div class="container-developers">
        <h2>David Ansong</h2>
        <p class="title-developers">CEO &amp; Founder</p>
        <p class="descriptive-developers" style="display: none">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers" style="display:none">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('developers/ceo.jpeg', 
		'David Ansong', '+233265873507', 'davidansong213@gmail.com', 0)">Insight</button></p>
      </div>
    </div>
  </div>

  <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="developers/ta.jpg" alt="Mike" style="width:100%">
      <div class="container-developers">
        <h2>Dieubeni Doubalet</h2>
        <p class="title-developers">Team Advisor</p>
        <p class="descriptive-developers" style="display: none">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers" style="display:none">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('developers/ta.jpg', 
		'Dieubeni Doubalet', '+233570665453', 'doubalet@gmail.com', 'Godbless')">Insight</button></p>
      </div>
    </div>
  </div>
  
  <!--<div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="adv.actors.profiles/people2.jpg" alt="John" style="width:100%">
      <div class="container-developers">
        <h2>David Quartey</h2>
        <p class="title-developers">Designer</p>
        <p class="descriptive-developers">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('adv.actors.profiles/people2.jpg', 
		'David Quartey', '+23354500493910', 'davidquartey@gmail.com', 'N/A')">Insight</button></p>
      </div>
    </div>
  </div>

  <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="adv.actors.profiles/people2.jpg" alt="John" style="width:100%">
      <div class="container-developers">
        <h2>Joshua Brown</h2>
        <p class="title-developers">Procurement</p>
        <p class="descriptive-developers">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('adv.actors.profiles/people2.jpg', 
		'Joshua Brown', '+23354500493915', 'joshuabrown@gmail.com', 'N/A')">Insight</button></p>
      </div>
    </div>
  </div>-->
  
  <div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="developers/na.png" alt="Alex Sanchez" style="width:100%">
      <div class="container-developers">
        <h2>Alex Sanchez</h2>
        <p class="title-developers">Entreprenuer</p>
        <p class="descriptive-developers" style="display: none">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers" style="display:none">alexsanchez@gmail.com</p>
        <p><button class="button-developers" onclick="Insight('developers/na.png', 
		'Alex Sanchez', '+233261308114', 'alexsanchez@gmail.com', 'Alex')">Insight</button></p>
      </div>
    </div>
  </div>
  
  <!--<div class="column-developers">
    <div class="card-developers">
      <img class="know-developers-img" src="adv.actors.profiles/people2.jpg" alt="John" style="width:100%">
      <div class="container-developers">
        <h2>Bismark Adjei</h2>
        <p class="title-developers">Salesperson</p>
        <p class="descriptive-developers">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="email-developers">example@example.com</p>
        <p><button class="button-developers" onclick="Insight('adv.actors.profiles/people2.jpg', 
		'Bismark Adjei', '+23350500493911', 'bismarkadjei@gmail.com', 'N/A')">Insight</button></p>
      </div>
    </div>
  </div>-->

  </div>
</div>
</div>


<div class="modal-profile-insight" id="myModal-profile-insight" style="z-index: 30">
 <span class="close-profile-insight" id="close-profile-insight">&times;</span>
  <div class="modal-content-profile-insight" id="img01-221">
	<div class="row">
    <div class="column-4">
     
	  <img class="img01-2" id="img01-21">     
  
    </div>
    <div class="column-5" id="column-51">
        <h1 class="contactName" id="profile-name" style="color: white"></h1>
		<p style="color: white" id="more-insight"></p>

		</div>
    </div>
    </div>
  <div id="caption-2"></div>
</div>


   <div id="myModal-books" class="w3-modal modal-books" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9)">
    <span class="close-ads-books-countdown" id="close-ads-books-countdown">&times;</span>
	<div class="w3-modal-content w3-animate-bottom w3-card-4 modal-books-inner-box">

       <div class="w3-container counter">
         <p id="count-down" class="count-down"></p>
		 
		 <div id="adv-Progress" class="adv-Progress">
		  <div id="adv-Bar">0%</div>
		 </div>		 
		 
       </div>     

    </div>
  </div>
  
<div id="myModal-subscribe-3" class="modal-subscribe-3">
  <span class="close-subscribe-3" id="close-subscribe-3" title="Close Subscription">&times;</span>
  <form class="modal-content-subscribe-3" id="modal-content-subscribe-3" method="post">
    <div class="container-subscribe-3" id="container-subscribe-3">
    <h1 class="wel-didcy-uup" style="color: white">Subscribe to <b class="plan-type"></b></h1>
    </div>
  </form>
  </div>
<!-- </div>  --> 

<div class="modal-log-books overlay" id="modal-log-books" style="overflow-y: auto;overflow-x: hidden;color: white">
 <span class="close-log-books" id="close-log-books" onclick="CloseLogBooks()">
 <a href="javascript:void(0)">&times;</a></span>
<div class="container container-chat" style="padding-top: 50px;">	
    <h2 style="text-align: center;color: white">What will it take to sell <b>YOUR</b> books?</h1>	
    <h5 style="text-align: center;color: white">Let us <b>KNOW &amp; START SELLING NOW</b></h6>	
	<div class="row">
		<div class="col-sm-4">
			<h4>Books Login:</h4>		
			<form method="post" class="chat-form">
				<div class="form-group">
					<div class="alert alert-warning" id="error-log" style="color: white"></div>
				</div>
				<div class="form-group">
					<label for="username">User:</label>
					<input type="username" class="chat-username username-log-books form-control" name="username-log-books" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="chat-password pwd-log-books form-control" name="pwd-log-books" required>
				</div>  
				<button type="submit" name="login-log-books" class="chat-login login-log-books btn btn-info" style="color: black">Login</button>
			</form>
			<br>
		    <button type="button" id="create-books-account" class="w3-button create-books-account" style="cursor:pointer;margin-top:2%;width:100%;">Create a BOOK account</button>
			
			<p style="text-align:center"><a style="cursor:pointer;text-align:center;font-size:15px;color:dodgerblue">Terms & Conditions Applied</a></p>
         
		 </div>
		 
	</div>
</div>	  
</div>

<div class="modal-create-books overlay" id="modal-create-books" style="overflow-y: auto;overflow-x: hidden;color: white">
 <span class="close-create-books" id="close-create-books" onclick="CloseCreateBooks()">
 <a href="javascript:void(0)">&times;</a></span>
<div class="container container-chat" style="padding-top: 50px;">	
    <h2 style="text-align: center;color: white">What will it take to sell <b>YOUR</b> books?</h1>	
    <h5 style="text-align: center;color: white">Let us <b>KNOW &amp; START SELLING NOW</b></h6>	
	<div class="row">
		<div class="col-sm-4">
			<h4>Books Create:</h4>		
			<form method="post" class="chat-form">
				<div class="form-group">
					<div class="alert alert-warning" id="error-log" style="color: white"></div>
				</div>
				<div class="form-group">
					<label for="fsn">First Name:</label>
					<input type="username" class="chat-username fsn-create-books form-control" name="fsn-create-books" required>
				</div>
				<div class="form-group">
					<label for="lsn">Last Name:</label>
					<input type="username" class="chat-username lsn-create-books form-control" name="lsn-create-books" required>
				</div>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="username" class="chat-username username-create-books form-control" name="username-create-books" required>
				</div>
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" class="chat-username email-create-books form-control" name="email-create-books" required>
				</div>  
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="chat-password pwd-create-books form-control" name="pwd-create-books" required>
				</div>  
				<div class="form-group">
				    <label for="act-as-a">Act as a :</label>
					<select style="cursor:pointer" class="chat-username act-as-a-create-books form-control" name="act-as-a-create-books" required>
					 <option name="" id="">Nobody</option>
					 <option name="" id="">Seller</option>
					 <option name="" id="">Buyer</option>
					</select>
				</div>  
				<button type="submit" name="create-books" class="chat-create create-books btn btn-info" style="cursor:pointer;color: black">Sign Up</button>
			</form>
			<br>
			<p style="text-align:center"><a style="cursor:pointer;text-align:center;font-size:15px;color:dodgerblue">Terms & Conditions Applied</a></p>
         
		 </div>
		 
	</div>
</div>	  
</div>

<div class="modal-seller-dash-board overlay" id="myModal-seller-dash-board" style="overflow-x: hidden;overflow-y:auto">
 
 <span class="close-seller-dash-board" id="close-seller-dash-board" style="z-index: 56" 
 onclick="ClosePointOfSale(0)">
 <a href="javascript:void(0)">&times;</a></span>
 
 <div class="modal-content-seller-dash-board" id="modal-content-seller-dash-board">
 
  <h1 style="color:white">The Seller</h1>
 
 </div>
</div>

<div class="modal-buyer-dash-board overlay" id="myModal-buyer-dash-board" style="overflow-x: hidden;overflow-y:auto">
 
 <span class="close-buyer-dash-board" id="close-buyer-dash-board" style="z-index: 56" 
 onclick="ClosePointOfSale(1)">
 <a href="javascript:void(0)">&times;</a></span>
 
 <div class="modal-content-buyer-dash-board" id="modal-content-buyer-dash-board">
 
   <h1 style="color:white">The Buyer</h1>
 
 </div>
</div>

<script type="text/javascript">
 "use strict";
 
  var modalSellerDashboard = document.getElementsByClassName("modal-seller-dash-board")[0];
  var modalBuyer = document.getElementsByClassName("modal-buyer-dash-board")[0];
  
  
  document.getElementsByClassName("chat-form")[2].addEventListener("submit", 
  (event) => event.preventDefault());  
  
  document.getElementsByClassName("chat-form")[3].addEventListener("submit", 
  (event) => event.preventDefault());
 
 function CloseLogBooks(){
	document.getElementById("modal-log-books").style.height = "0%";	 
    document.getElementsByClassName("username-log-books")[0].value = "";
    document.getElementsByClassName("pwd-log-books")[0].value = "";
 }

 function CloseCreateBooks(){
	document.getElementById("modal-create-books").style.height = "0%";	 
 } 
 
 function ClosePointOfSale($sale_id = 0){
	if($sale_id == 0){
		modalSellerDashboard.style.width = "0%";
		modalSellerDashboard.style.height = "0%";	 
	}else{
		modalBuyer.style.width = "0%";
		modalBuyer.style.height = "0%"; 
	}
 }
 
 function Seller(){
	modalSellerDashboard.style.width = "100%";
	modalSellerDashboard.style.height = "100%";
	modalSellerDashboard.style.zIndex = "60";
 }
 
 function Buyer(){
	modalBuyer.style.width = "100%";
	modalBuyer.style.height = "100%"; 
	modalBuyer.style.zIndex = "60";
 }
 
 function ActAsA($actAsA = 0){
	switch($actAsA){
	  case 0:
	  case "0":
	  case "buyer":
	  case "Buyer":
	  case "BUYER":
	    Seller();
	  break;
	  case 1:
	  case "1":
	  case "seller":
	  case "Seller":
	  case "SELLER":
	    Buyer();
	  break;
	  default: 
	   return;
	}
 }

 var from_user_id_didcybooks = 0, LoginerBookslnID = 0, usrBooks = 0;
 var __$__49393_492_Page_acc_usrBooks;
 
 document.getElementsByClassName("login-log-books")[0].onclick = function(){loginBooks(1);}
 document.getElementsByClassName("create-books")[0].onclick = function(){loginBooks(0);}

  function loginBooks($books_log = 0){
	if($books_log == 1){
	 if(document.getElementsByClassName("username-log-books")[0].value == ""){
		return AlertBoxInModal("Empty username");
	 }
	 if(document.getElementsByClassName("pwd-log-books")[0].value == ""){
		return AlertBoxInModal("Empty Password");
	 }
	}else{
	 if(document.getElementsByClassName("fsn-create-books")[0].value == ""){
		return AlertBoxInModal("Empty Firstname");
	 }
	 if(document.getElementsByClassName("lsn-create-books")[0].value == ""){
		return AlertBoxInModal("Empty Lastname");
	 }
	 if(document.getElementsByClassName("username-create-books")[0].value == ""){
		return AlertBoxInModal("Empty Username");
	 }
	 if(document.getElementsByClassName("email-create-books")[0].value == ""){
		return AlertBoxInModal("Empty E-mail");
	 }
	 if(document.getElementsByClassName("pwd-create-books")[0].value == ""){
		return AlertBoxInModal("Empty Password");
	 }
	 if(document.getElementsByClassName("act-as-a-create-books")[0].value == "Nobody"){
		return AlertBoxInModal("Invalid Option");
	 }		
	 if(document.getElementsByClassName("act-as-a-create-books")[0].value == "Seller"){
		return ActAsA(0);
	 }else{
		return ActAsA(1); 
	 }
	}

	 var form = new FormData();
	 if($books_log == 1){
		 form.append("username-log-books", document.getElementsByClassName("username-log-books")[0].value);
		 form.append("pwd-log-books", document.getElementsByClassName("pwd-log-books")[0].value);
		 form.append("drim", "");
	 }else{
		 form.append("fsn-create-books", document.getElementsByClassName("fsn-create-books")[0].value);
		 form.append("lsn-create-books", document.getElementsByClassName("lsn-create-books")[0].value);
		 form.append("username-create-books", document.getElementsByClassName("username-create-books")[0].value);
		 form.append("email-create-books", document.getElementsByClassName("email-create-books")[0].value);
		 form.append("pwd-create-books", document.getElementsByClassName("pwd-log-books")[0].value);
		 form.append("act-as-a-create-books", document.getElementsByClassName("act-as-a-create-books")[0].value);
		 form.append("books-log", $books_log);
		 form.append("drim", "");		 
	 }
	 $.ajax({
		type: "POST",
		url: "_books.php",
		contentType: false,
		cache: false,
		processData: false,
		data: form,
		success: function(result){
			var data_returned = JSON.parse(result);			
			if(data_returned.state == 103){
				
			}
			else if(data_returned.state == 200){
			  from_user_id_didcybooks = data_returned.from_user_id_didcybooks;
			  
			  var DicyWorkBoard = data_returned.DicyLogbooks;
			  LoginBookslnID = data_returned.BookslnID;
			  __$__49393_492_Page_acc_usrBooks = data_returned.__49393_492_Page_acc_usrBooks;
			  
			  //document.getElementById("dump").innerHTML = "DUMP ID : "+__$__49393_492_Page_acc_usr;

		      //document.getElementById("modal-content-work-board-4").innerHTML = data_returned.DicyWorkBoard;

			  //document.getElementById("myModal-work-board-4").style.display = "block";
			  document.getElementsByClassName("modal-ads-books")[0].style.height = "100%";
			  document.getElementsByClassName("modal-ads-books")[0].style.zIndex = "12";

			  usrDicyWork = data_returned.didcyworkUserIDs.session_id_didcywork;
			  
			  
			  document.getElementsByClassName("username-log-books")[0].value = "";
			  document.getElementsByClassName("pwd-log-books")[0].value = "";
			  
			}else if(data_returned.state == 506){
			  AlertBoxInModal(data_returned.session);
			}else{
			  //document.getElementById("error-log").innerHTML = data_returned.session;
			}
		},
		error: function(){}
	 });
  }
</script>


<div id="myModal-ads-books" class="modal-ads-books overlay">
  <span class="close-modal-ads-books closebtn" id="close-modal-ads-books">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <h1 class="adv-modal-ads-books-header" id="adv-modal-ads-books-header">DIDCY ADVERTISING BOOKS</h1>
  <div class="row" id="adv-modal-ads-books">
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div>  
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div>  
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div>  	
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div> 
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div> 
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div> 
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div> 
	<div class="card-22 column-22">
	  <img src="adv.actors.profiles/people2.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	  <p class="price">$19.99</p>
	  <p class="product-info">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	  <p><button>Add to Cart</button></p>
	</div> 
  </div>
  <div id="caption-adv-modal-ads-books" class="caption-modal-ads-books">Didcy Books</div>
</div>

<!--Didcy Ratings----->

<!-- <div id="myModal-rater" class="modal-rater">
  <span class="close-rater" id="close-rater">&times;</span>
  
  <div class="rater" id="rater">
   
   <h5>A system without rating is <img src="download (11).jpg" class="emo-img" id="emo-img" alt=""/></h5>
   
   <h1> Didcy Rate is N/A.</h1>

  </div> 
  
  <div class="caption-rater" id="caption-rater">Didcy Rate</div>
    
</div> -->


<div id="myModal-rater" class="modal-rater">
  <span class="close-rater" id="close-rater">&times;</span>
  
  <div class="rater" id="rater">

   <h5>A system without rating is <img src="download (11).jpg" class="emo-img" id="emo-img" alt=""/></h5>
   
   
  <div class="emoji-container">
   <div class="emoji-content">
    <img class="emoji fix" src="emojis/742752.png" title="Bad"/>
   </div>
   <div class="emoji-content">
    <img class="emoji fix" src="emojis/743287.png" title="Very Bad"/>
   </div>
   <div class="emoji-content">
    <img class="emoji" src="emojis/742751.png" title="Good"/>
   </div>
   <div class="emoji-content">
    <img class="emoji" src="emojis/743267.png" title="Very Good"/>
   </div>
   <div class="emoji-content">
    <img class="emoji fix" src="emojis/2584606.png" title="Excellent"/>
   </div>
   <!-- <p>Class me</p> -->
  </div>
  
  <button class="sfb w3-button" onclick="submitFeedBack(1)" type="button">Send FeedBack</button>
  
  </div> 
  
  <div class="caption-rater" id="caption-rater">Didcy Rate</div>
    
</div>

<!--How to subscribe-->



<!--How to subscribe-->
<div id="myModal-subscribe" class="modal-subscribe">
  <span class="close-subscribe">&times;</span>
  <div class="modal-content-subscribe" id="img01-subscribe">
	<div class="row" id="add-mre-rows">
	  <div class="column-31 add-more-1 didcy-how-to-subscribe-1" id="add-more-1" title="Click on the text to view it bigger">  
        <h3 id="gaga-text-header" class="gaga-text-header">Text Tutorials</h3>
		<h3 class="how-to-didcy"><u><b>How to Subscribe</b></u></h3>
		<p  id="didcy-how-to-subscribe-text-tutorials" class="didcy-how-to-subscribe-text-tutorials">
         Welcome to  Didcy.com, the place  where <b><i>space</i></b> starts everything.
		 <br>Didcy has provided it's members with a much more simpler way of navigating through it's intiutive, unmatched
		 and comprehensive ad platform. Didcy is basically an <q>ad platform with the core mission of servicing
		 any entity related to ads.</q>
		 With Didcy, a member needs only a computer, internet and a web browser with the appropriate directions to our platform.
		 <q>Didcy is a web-based platform.</q> <br/>Alert!!! Please always check the URL in your web browser to confirm if the URL matches
		 <a class="cookie-full-mode-link" href="https://www.didcy.com" alt="Didcy" target="_blank" title="Didcy" ping="">https://www.didcy.com</a>. Thank you.
		 <br>The following steps gives comprehensive details about how to subscribe to Didcy Web or Stand Package. 
		 <br/>This is how to subsribe to Didcy.com if you have an account or you are new to our platform. <br>These are steps to show you how to subscribe: 
		 <br/>Let's jump right into it. 
		 <br><strong><u>Step 1:</u></strong> Get your computer, connect to the internet, open your web browser (eg. Google Chrome) and enter inside the URL : 
		 <em><a href="https://www.didcy.com" alt="Didcy" title="Didcy" target="_blank">https://www.didcy.com.</a></em>
		 <br><br><strong><u>Step 2:</u></strong> If you are new on our platform,to be able to subscribe you have to sign up for a Didcy account
		 <br><br><strong><u>Step 3:</u></strong> To do that, press on the sign up or  sign in button at the top right corner of the sign up or in page.
		 <br><br><strong><u>Step 4:</u></strong> Type in the information about yourself or the company.
		 <br><br><strong><u>Step 5:</u></strong> Press on the sign up button to sign in if you've filled the information needed.
		 <br><br><strong><u>Step 6:</u></strong>  Hover on the Services button in the top navigation bar right after you've signed up or in. Under the Services dropdown, you'll find two dropdown buttons, namely 'Audio/Radio' button and the 'More' button. Click on the 'More' button. A Modal box with a black background would popup, then click on the 'Didcy Include' button. After clicking on the 'Didcy Include' button, click on the 'Pricing' button. You'll see 'Didcy Web' and 'Didcy Stand' buttons right after clicking on the 'Pricing' button. Click on any of the two 'Pricing buttons' to subscribe to any of Didcy Web or Stand services.
		 <br><br><strong><u>Step 7:</u></strong> Click on any of the Sign Up buttons to subscribe to any of Didcy Subscription packages, ranging from it's <q>BASIC</q> Services to it's <q>PREMIUM</q> Services.
		 <br><br><strong><u>Step 8:</u></strong> Click on any of the Payment Methods after you've clicked on any of the Sign up under any of the subscription packages.
		 <br><br><strong><u>Step 9:</u></strong> Type in the necessary information needed to process your payment right after you've selected any of the Payment Methods.
		 <br><strong>
                 <br>THANK YOU FOR JOINING DIDCY. 
				 <br>Hope thie was helpful.
				 <br><!-- Yes|No. -->
		 </strong>
		</p> 
	    
	  </div>
	  
    <div class="column-31 add-more-2 didcy-how-to-subscribe-2" title="Click on each image to view it bigger">
	  <h3 class="image-tutorial-header">Image Tutorials</h3>
      <img id="img-tutorial-1-subscribe" src="adv.tutorials/images/Capture.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-2-subscribe" src="adv.tutorials/images/Capture2.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-3-subscribe" src="adv.tutorials/images/Capture3.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-4-subscribe" src="adv.tutorials/images/Capture4.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-5-subscribe" src="adv.tutorials/images/Capture5.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-6-subscribe" src="adv.tutorials/images/Capture6.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-7-subscribe" src="adv.tutorials/images/Capture7.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-8-subscribe" src="adv.tutorials/images/Capture8.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-9-subscribe" src="adv.tutorials/images/Capture9.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-10-subscribe" src="adv.tutorials/images/Capture10.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-11-subscribe" src="adv.tutorials/images/Capture11.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-12-subscribe" src="adv.tutorials/images/Capture12.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-13-subscribe" src="adv.tutorials/images/Capture13.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-14-subscribe" src="adv.tutorials/images/Capture14.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-15-subscribe" src="adv.tutorials/images/Capture15.PNG" style="width: 100%;padding-bottom: 5px;"/>
      <img id="img-tutorial-16-subscribe" src="adv.tutorials/images/Capture16.PNG" style="width: 100%;padding-bottom: 5px;"/>
    </div>

    <div class="column-31 add-more-2 didcy-how-to-subscribe-3" title="Click on each video to view it bigger">
	  <h3 class="video-tutorial-header">Video Tutorials</h3>
      <video controls=true id="video-tutorial-1-subscribe" src="adv.tutorials/videos/1.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-2-subscribe"src="adv.tutorials/videos/2.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-3-subscribe"src="adv.tutorials/videos/3.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-4-subscribe"src="adv.tutorials/videos/3.mp4" style="width: 100%;padding-bottom: 5px;"></video>
      <video controls=true id="video-tutorial-5-subscribe"src="adv.tutorials/videos/3.mp4" style="width: 100%;padding-bottom: 5px;"></video>
    </div>
	
  </div>  
  </div>
</div>

<!-- Version 0.0.0.0 ->

<!-- The Modal -->
<div id="myModal-2" class="modal-2">
  <span class="close-2">&times;</span>
  <div class="modal-content" id="img01">
	<div class="row">
    <div class="column-4">
     
	  <img class="img01-2" id="img01-2">     
  
    </div>
    <div class="column-5" id="column-5">

		<p style="color: white" id="read-more-text">Read More Read Less Button
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.   
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.   
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.   
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.   
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.   
	    </p>

		</div>
    </div>
    </div>
  <div id="caption-2"></div>
</div>

<div id="myModal-8" class="modal-8 overlay">
  <span class="close-8 closebtn" id="close-8">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="row-6 overlay-content" id="upload-profile">
  
  </div>
  <div id="caption-8" class="caption-8"></div>
</div>

<!-- The Modal -->
<div id="myModal-profiles" class="modal-profiles">
  <span class="close-profiles" id="close-profiles">&times;</span>
  <div class="modal-content-profiles">
	  <div class="row-6">
		  <div class="column-plat column-" id="column"> 
			  <button class="button" id="didcy-ceo">CEOs</button>   
			  <button class="button" id="didcy-authors">Authors</button>   
			  <button class="button" id="didcy-mentors">Mentors</button>   
			  <button class="button" id="didcy-investors">Investors</button>   
			  <button class="button" id="didcy-team">Team</button> 
		  </div>
	  </div>
  </div>
</div> 

<!-- The Modal -->
<div id="myModal-ceo" class="modal-ceo">
  <span class="close-ceo" id="close-ceo">&times;</span>
  <div class="modal-content-ceo">
<svg width="100%" height="200px" class="hide-animation" id="">
<g id="R1" transform="translate(250 250)"> 
  <ellipse stroke="white" rx="100" ry="0" opacity=".3">
  <animateTransform attributeName="transform" type="rotate" dur="7s" from="0" to="360" repeatCount="indefinite" />
  <animate attributeName="cx" dur="8s" values="-20; 220; -20" repeatCount="indefinite" />
  <animate attributeName="ry" dur="3s" values="10; 60; 10" repeatCount="indefinite" />
  </ellipse>
</g>
<use xlink:href="#R1" transform="rotate(72 390 150)" />
<use xlink:href="#R1" transform="rotate(144 390 150)" />
<use xlink:href="#R1" transform="rotate(216 390 150)" />
<use xlink:href="#R1" transform="rotate(288 390 150)" />
</svg>
    <h1><u><b>Welcome to Didcy Founders &amp; CEOs</b></u></h1>
	<p>
	 Didcy Founders &amp; CEOs provides you information about 
	 the founders &amp; both former and current CEOs of the Company. 
	 
	</p>
	<br>
	<br>
	<br>
<svg width="100%" height="600" class="hide-animation" id="">
  <rect id="rec" x="300" y="100" width="100" height="100" style="fill:lime"> 
    <animate attributeName="x" attributeType="XML" begin="0s" dur="6s" fill="freeze" from="300" to="0" repeatCount="indefinite" /> 
    <animate attributeName="y" attributeType="XML" begin="0s" dur="6s" fill="freeze" from="100" to="0" repeatCount="indefinite" /> 
    <animate attributeName="width" attributeType="XML" begin="0s" dur="6s" fill="freeze" from="300" to="800" repeatCount="indefinite"/> 
    <animate attributeName="height" attributeType="XML" begin="0s" dur="6s" fill="freeze" from="100" to="300"  repeatCount="indefinite"/> 
    <animate attributeName="fill" attributeType="CSS" from="lime" to="rgba(
	15, 10, 15, 0.6)" begin="2s" dur="4s" fill="freeze" />
  </rect>
  <g transform="translate(100,100)"> 
    <text id="TextElement" x="0" y="0" style="font-family:Verdana;font-size:24;color: white; visibility:hidden"> WHY HIM?
      <set attributeName="visibility" attributeType="CSS" to="visible" begin="1s" dur="5s" fill="freeze" repeatCount="indefinite"/>
      <animateMotion path="M 0 0 L 100 100" begin="1s" dur="5s" fill="freeze"/>
      <animate attributeName="fill" attributeType="CSS" from="red" to="white" begin="1s" dur="5s" fill="freeze"  repeatCount="indefinite"/> 
      <animateTransform attributeName="transform" attributeType="XML" type="rotate" repeatCount="indefinite" from="-30" to="0" begin="1s" dur="5s" fill="freeze" /> 
      <animateTransform attributeName="transform" attributeType="XML" type="scale" from="1" to="3" additive="sum" begin="1s" dur="5s" fill="freeze" repeatCount="indefinite" /> 
    </text> 
  </g>
  Sorry, your browser does not support inline SVG.
</svg>
  </div>
</div> 

<!-- The Modal -->
<div id="myModal-authors" class="modal-authors  w3-modal-content w3-animate-bottom">
  <span class="close-authors" id="close-authors">&times;</span>
  <div class="modal-content-authors">
    <h1><u><b>Welcome to Didcy Authors</b></u></h1>
	<p>Didcy Authors provides a list of all authors of this platform. These are 
	well-educated, open-minded, intelligent and respectable individuals, some know
	popularly, some not that popularly. Without their unconditional help or contribution,
	this platform wouldn't have seen light or being in motion. Thanks to all our authors.
	Thanks once again. <br>
	The list is as follows...
	<ol style="list-style:square">
	 <li style="color: white;cursor: pointer" id="dans" onclick="MoveAnimate('dans')">David Ansong</li>
	 <li style="color: white;cursor: pointer" id="alsan" onclick="MoveAnimate('alsan')">Alex Odei Akoto</li>
	 <li style="color: white;cursor: pointer" id="mrglss" onclick="MoveAnimate('mrglss')">Dieubeni Doubalet(A.K.A Mr. Godbless)</li>
	 <li style="color: white;cursor: pointer" id="dquary" onclick="MoveAnimate('dquary')">David Quartey</li>
	 <li style="color: white;cursor: pointer" id="jsbrn" onclick="MoveAnimate('jsbrn')">Joshua Brown</li>
	</ol>
	<p>For more info on each of our Authors, kindly visit 
	<a id="authors-know-more" href="https://www.didcy.com/adv-retrieve.php?rc_id=629910827171826&policy-id=0&&data_id=6&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Know more about our Authors" title="Know more about our Authors" target="_blank">
	https://www.didcy.com/authors/know-more</a></p>
	</p>
	<br>
	<br>
  </div>
</div> 

<div id="myModal-investors" class="modal-investors w3-modal-content w3-animate-bottom">
  <span class="close-investors" id="close-investors">&times;</span>
  <div class="modal-content-investors">
    <h1><u><b>Welcome to Didcy Investors</b></u></h1>
	<p>Didcy Investors provides a list of all investors of this platform. These are 
	well-educated, open-minded, intelligent and respectable individuals, some know
	popularly, some not that popularly. Without their unconditional help or contribution,
	this platform wouldn't have seen light or being in motion. Thanks to all our investors.
	Thanks once again. <br>
	The list is as follows...
	<ol style="list-style:square">
	 <li style="color: white;cursor: pointer" id="dans" onclick="MoveAnimate('dans')">David Ansong</li>
	 <li style="color: white;cursor: pointer" id="alsan" onclick="MoveAnimate('alsan')">Alex Odei Akoto</li>
	 <li style="color: white;cursor: pointer" id="mrglss" onclick="MoveAnimate('mrglss')">Dieubeni Doubalet(A.K.A Mr. Godbless)</li>
	 <li style="color: white;cursor: pointer" id="dquary" onclick="MoveAnimate('dquary')">David Quartey</li>
	 <li style="color: white;cursor: pointer" id="jsbrn" onclick="MoveAnimate('jsbrn')">Joshua Brown</li>
	</ol>
	<p>For more info on each of our Investors, kindly visit 
	<a id="investors-know-more" href="https://www.didcy.com/adv-retrieve.php?rc_id=729910827171827&policy-id=0&&data_id=7&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Know more about our Investors" target="_blank">
	https://www.didcy.com/authors/know-more</a></p>
	</p>
	<br>
	<br>
  </div>
</div>

<div id="myModal-team" class="modal-team w3-modal-content w3-animate-top">
  <span class="close-team" id="close-team">&times;</span>
  <div class="modal-content-team">
    <h1><u><b>Welcome to Didcy Team</b></u></h1>
	<p>Didcy Team provides a list of all team of this platform. These are 
	well-educated, open-minded, intelligent and respectable individuals, some know
	popularly, some not that popularly. Without their unconditional help or contribution,
	this platform wouldn't have seen light or being in motion. Thanks to all our team.
	Thanks once again. <br>
	The list is as follows...
	<ol style="list-style:square">
	 <li style="color: white;cursor: pointer" id="dans" onclick="MoveAnimate('dans')">David Ansong</li>
	 <li style="color: white;cursor: pointer" id="alsan" onclick="MoveAnimate('alsan')">Alex Odei Akoto</li>
	 <li style="color: white;cursor: pointer" id="mrglss" onclick="MoveAnimate('mrglss')">Dieubeni Doubalet(A.K.A Mr. Godbless)</li>
	 <li style="color: white;cursor: pointer" id="dquary" onclick="MoveAnimate('dquary')">David Quartey</li>
	 <li style="color: white;cursor: pointer" id="jsbrn" onclick="MoveAnimate('jsbrn')">Joshua Brown</li>
	</ol>
	<p>For more info on each of our Team, kindly visit 
	<a id="team-know-more" href="https://www.didcy.com/adv-retrieve.php?rc_id=829910827171828&policy-id=0&&data_id=8&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Know more about our Team" title="Know more about our Team"  target="_blank">
	https://www.didcy.com/team/know-more</a></p>
	</p>
	<br>
	<br>
  </div>
</div> 


<!-- The Modal -->
<div id="myModal-animated-image" class="modal-animated-image">
  <span class="close-animated-image" id="close-animated-image" onclick="ResizeAnimator()">&times;</span>
 <!-- <div class="modal-content-animated-image"> -->
  <img src="" id="animated-image" class="animated-image" alt=""/>
 <!-- </div> -->
</div>

<!-- The Modal -->
<div id="myModal-upcoming-updates" class="modal-upcoming-updates">
  <span class="close-upcoming-updates" id="close-upcoming-updates" onclick="ResizeAnimator()">&times;</span>
  <div class="modal-content-upcoming-updates"> 
     <h1 style="color: white" class="wel-didcy-uup">Welcome to Didcy Upcoming Updates Centre</h1>
	 <p style="color: white">Here at updates centre, Didcy pre-informs you about
	 all it's upcoming features before it's comes to light.
	 <br>We at Didcy, provide you more but quality products and services inorder for you to do more and accomplish more in a short period of time 
	 which would have taken you a month, year, decade or more.
	 <br>The following showcases the quality features we bring to the 
	 market.<br/><q>With the Motto : YOUR INDUSTRY, YOUR LIFE</q></p>
     <h3 style="color:  white" class="wel-didcy-uup">Current Tools provided under the 'More Services or The Core' agenda : </h3>
     <ol>
         <li style="color: white">Didcy Include</li>
         <li style="color: white">Didcy Course</li>
         <li style="color: white">Didcy Dev</li>
         <li style="color: white">Didcy Rate</li>
         <li style="color: white">Didcy Find?</li>
         <li style="color: white">Didcy us?</li>
         <li style="color: white">Didcy React</li>
         <li style="color: white">Didcy Exhibit</li>
         <li style="color: white">Didcy Books</li>
         <li style="color: white">Didcy Transparent</li>
     </ol>		
     <br/>
	 
     <h3 style="color:  white" class="wel-didcy-uup">Upcoming Tools provided under the 'More Services or The Core' agenda : </h3>
     <ol>
	     <li style="color: white">Didcy List</li>
	     <li style="color: white">Didcy Share</li>
         <li style="color: white">Didcy Loans</li>
         <li style="color: white">Didcy Analyse</li>
         <li style="color: white">Didcy Focus</li>
         <li style="color: white">Didcy Meet</li>
         <li style="color: white">Didcy Business</li>
         <li style="color: white">Didcy Records</li>
         <li style="color: white">Didcy Awards</li>
         <li style="color: white">Didcy Relate</li>
         <li style="color: white">Didcy Trade</li>
         <li style="color: white">Didcy Brand</li>
         <li style="color: white">Didcy Shoot</li>
         <li style="color: white">Didcy Sales</li>
     </ol>
     <br/>	
	 
     <h3 style="color:  white" class="wel-didcy-uup">Overall Tools provided under the 'More Services or The Core' agenda : </h3>
     <ol>
         <li style="color: white">Didcy Loans</li>
         <li style="color: white">Didcy Include</li>
         <li style="color: white">Didcy Analyse</li>
         <li style="color: white">Didcy Focus</li>
         <li style="color: white">Didcy Meet</li>
         <li style="color: white">Didcy Share</li>
         <li style="color: white">Didcy Rate</li>
         <li style="color: white">Didcy Find?</li>
         <li style="color: white">Didcy us?</li>
         <li style="color: white">Didcy Business</li>
         <li style="color: white">Didcy React</li>
         <li style="color: white">Didcy List</li>
         <li style="color: white">Didcy Exhibit</li>
         <li style="color: white">Didcy Records</li>
         <li style="color: white">Didcy Awards</li>
         <li style="color: white">Didcy Books</li>
         <li style="color: white">Didcy Relate</li>
         <li style="color: white">Didcy Trade</li>
         <li style="color: white">Didcy Brand</li>
         <li style="color: white">Didcy Shoot</li>
         <li style="color: white">Didcy Sales</li>
         <li style="color: white">Didcy Transparent</li>
         <li style="color: white">Didcy Apply</li>
         <li style="color: white">Didcy Course</li>
     </ol>		
     <br/>
	 
     <br/>
      
	 <h1 style="color: white" class="wel-didcy-uup">Welcome to Didcy Design Updates Centre</h1>
     <br>	 
     <br>	 
	  
     <h1 style="color: white">From</h1>
     <br>	 
     <br>	 
	 
	 <img id="upcoming-updates" class="upcoming-updates" src="adv.tutorials/images/didcy-3.PNG" style="width: 100%;cursor: pointer"/>
	 <!--onclick="MoveAnimate('-upcoming-updates')"-->
	 
	 <br/>
	 <br/>
	 <h1 style="color: white">To</h1>
	 <br>
	 <br>
	 
	 
	 <img id="upcoming-updates" class="upcoming-updates" src="adv.tutorials/images/Capture261.PNG" style="width: 100%;cursor: pointer"/>
	 <!-- onclick="MoveAnimate('upcoming-updates')"-->
	 <br>
	 <br>
	 <p style="color: white">For more info on didcy design updates centre, please kindly visit 
	 <a id="design-update-centre" class="cookie-full-mode-link" href="https://www.didcy.com/didcy-design-updates-centre.php" alt="Didcy Updates" title="Didcy Updates" target="_blank">https://www.didcy.com/didcy-design-updates-centre</a>. Thank you.</p>
	 <br>
	 <br>	 
   <!-- <img src="" id="upcoming-updates" class="upcoming-updates" alt=""/> -->
  </div>
</div>

<!-- The Modal -->
<div id="myModal-mentors" class="modal-mentors">
  <span class="close-mentors" id="close-mentors">&times;</span>
  <div class="modal-content-mentors">
    <h1><u><b>Welcome to Didcy Mentors</b></u></h1> 
	<p>
     Didcy Mentors provides a list of all mentors who mentored us during our 
     journey to success as a Company. These are great individuals, some know
	 popularly, some not that popularly. Without their unconditional mentorship,
	 this platform wouldn't have seen day or being in momentum. Thanks to all our mentors.
	 Thanks once again. <br>
	 The list is as follows...
	<ol style="list-style:circle">
	 <li style="color: white;cursor: pointer" id="dans" onclick="MoveAnimate('dans')">David Ansong</li>
	 <li style="color: white;cursor: pointer" id="alsan" onclick="MoveAnimate('alsan')">Alex Odei Akoto</li>
	 <li style="color: white;cursor: pointer" id="mrglss" onclick="MoveAnimate('mrglss')">Dieubeni Doubalet(A.K.A Mr. Godbless)</li>
	 <li style="color: white;cursor: pointer" id="dquary" onclick="MoveAnimate('dquary')">David Quartey</li>
	 <li style="color: white;cursor: pointer" id="jsbrn" onclick="MoveAnimate('jsbrn')">Joshua Brown</li>
	 <li style="color: white;cursor: pointer" id="bsad" onclick="MoveAnimate('bsad')">Bismark Adjei</li>
	 <li style="color: white;cursor: pointer" id="enki" onclick="MoveAnimate('enki')">Ernest Kofi</li>
	</ol>	 
	<p>For more info on each of our Mentors, kindly visit 
	<a id="mentors-know-more" href="https://www.didcy.com/adv-retrieve.php?rc_id=10299108271718210&policy-id=0&&data_id=10&service=0&&drim=19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011" alt="Know more about our Mentors" title="Know more about our Mentors" target="_blank">
	https://www.didcy.com/mentors/know-more</a></p>
	</p>
	<br>
	<br>
  </div>
</div> 


<!-- The Modal -->
<div id="myModal-1" class="modal-1" style="z-index: 2;">
  <span class="close-1" id="close-1">&times;</span>
  <img class="modal-content-1" id="img01-1" value="0">
  <div id="caption-1" class="caption-1"></div>
</div>

<div id="myModal-subscribe-2" class="modal-subscribe-2">
  <span class="close-subscribe-2" id="close-subscribe-2">&times;</span>
  <img class="modal-content-subscribe-2" id="img01-subscribe-2" value="0">
  <div id="caption-subscribe-2" class="caption-subscribe-2"></div>
</div>

<div id="myModal-15" class="modal-15 w3-modal-content w3-animate-bottom">
  <span class="close-15" id="close-15">&times;</span>
  <img class="modal-content-15" id="img01-15" value="0">
  <div id="caption-15" class="caption-15"></div>
</div>

<div id="myModal-pricing-table" class="modal-pricing-table overlay">
  <span class="close-pricing-table closebtn" id="close-pricing-table">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="modal-content-pricing-table">
	  <div class="row-6">
		  <div class="column-plat column-" id="column"> 
			  <button class="button" id="gaga-web-price">Didcy Web</button>   
			  <button class="button" id="gaga-stand">Didcy Stand</button>   
			  <button class="button" id="gaga-special">Didcy Special</button> 
			  <button class="button" id="gaga-relief">Didcy Relief</button>
			  <button class="button" id="gaga-mini-wide">Didcy MiniWide</button>
			  <button class="button" id="gaga-mini-crop">Didcy MiniCrop</button>
			  <button class="button" id="gaga-mini-short">Didcy MiniShort</button>
			  <button class="button" id="gaga-mini-web">Didcy MiniWeb</button>
		  </div>
	  </div>
  </div>
<!--   <div id="caption-pricing-table" class="caption-pricing-table">Didcy Cash</div>
 --></div>

<div id="myModal-payment-services" class="modal-payment-services">
  <span class="close-payment-services" id="close-payment-services">&times;</span>
  <!-- <img class="modal-content-payment-services" id="img01-payment-services" value="0"> -->
  <h1 style="color: white;padding-left: 10px" class="hello-didcer wel-didcy-uup" id="hello-didcer">Hello <span class="didcer-name" id="didcer-name"> </span></h1>
  <h1 style="color: white;text-align: center" class="wel-didcy-uup" id="">Welcome to Didcy Payment Method Selection Board Centre</h1>
    <div class="container-payment-services" id="container-payment-services">

    </div>
	<br>
  <div id="caption-payment-services" class="caption-payment-services"></div>
</div>

<div id="myModal-12" class="modal-12">
  <span class="close-12" id="close-12">&times;</span>
  <img class="modal-content-12" id="img01-12" value="0">
  <div id="caption-12" class="caption-12"></div>
</div>



<div id="myModal-subscribe-2" class="modal-subscribe-2">
  <span class="close-subscribe-2" id="close-subscribe-2">&times;</span>
  <img class="modal-content-subscribe-2" id="img01-subscribe-2" value="0">
  <div id="caption-subscribe-2" class="caption-subscribe-2"></div>
</div>

<div id="myModal-13" class="modal-13">
  <span class="close-13" id="close-13">&times;</span>
   
   <div class="row" id="adv-company-ads-deal-container">
   
   </div>
   
  <div id="caption-13" class="caption-13">Didcy Dealer</div>
</div>

<div id="myModal-10" class="modal-10">
  <span class="close-10" id="close-10">&times;</span>
	<div class="columns">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 13, 20, 1)">Basic</li>
		<li class="grey">$ 9.99 / yr</li>
		<li>10GB Storage</li>
		<li>10 Emails</li>
		<li>10 Domains</li>
		<li>1GB Bandwidth</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-web-basic" onclick="DidcyWebAPI(1)">Sign Up</a></li>
	  </ul>
	</div>


	<div class="columns">
	  <ul class="price">
		<li class="header" style="background-color:rgba(55, 43, 50, 1)">Pro</li>
		<li class="grey">$ 24.99 / yr</li>
		<li>25GB Storage</li>
		<li>25 Emails</li>
		<li>25 Domains</li>
		<li>2GB Bandwidth</li>
		<li class="grey-1"><a class="button-pricing button-pricing-pro" id="didcy-web-pro" onclick="DidcyWebAPI(2)">Sign Up</a></li>
	  </ul>
	</div>

	<div class="columns">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 13, 20, 1)">Premium</li>
		<li class="grey">$ 49.99 / yr</li>
		<li>50GB Storage</li>
		<li>50 Emails</li>
		<li>50 Domains</li>
		<li>5GB Bandwidth</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-web-premium" onclick="DidcyWebAPI(3)">Sign Up</a></li>
	  </ul>
	</div>
	<div class="caption-10" id="caption-10"></div>
</div>

<!--0000000000000000-->

<div id="myModal-stand" class="modal-stand">
  <span class="close-stand" id="close-stand">&times;</span>
	<div class="columns columns-2">
	  <ul class="price">
		<li class="header">Basic</li>
        <li class="grey"> $0 / yr </li>
		<li>2 deals</li>
<!-- 		<li>1 deal offering</li>
		<li>1 deal finding</li> -->
		<li>2 ads upload</li>
		<li>Lottery Package</li>
		<li>Kid Letters</li>
		<li>Free ads creation with 1R</li>
		<li>$5H Max Didcy Ad Loan @ 7% IR</li>
		<li>Free Virtual Meetings @ only 1 meeting sessions</li>
		<li>Free Didcy Virtual Security @ only upto lev 2</li>
		<li>Free Audio/Radio Services - N/A</li>
		<li>Free Video & Film Production - N/A</li>
		<li>Didcy Ad Books - N/A</li>
		<li>Didcy Ad Trade(Buy & Sell Ads) - N/A</li>
		<li>Didcy Actor-Business Accept - N/A</li>
		<li>Personalized Ad Storage Services - N/A</li>
		<li>Offline Advertising on our platform - N/A</li>
		<li>Buying Ads from Didcy - N/A</li>
		<li>Outsourcing Talented Individuals by Didcy - N/A</li>
		<li>Audio/Radio Ads for Radio stations - N/A</li>
		<li>Ad sharing services to external platforms like social media - N/A</li>
		<li>Outsourcing Game Creators - N/A</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-stand-basic" onclick="DidcyStandAPI(1)">Sign Up</a></li>
	  </ul>
	</div>


	<div class="columns columns-2">
	  <ul class="price">
		<li class="header" style="background-color:rgba(55, 43, 50, 1)">Pro</li>
		<li class="grey">$366.99 / yr</li>
		<li>50 deals </li>
<!-- 		<li>25 deal offering</li>
		<li>25 deal finding</li> -->
		<li>5 ads uploads</li>
		<li>Haha Package</li>
		<li>Smart letters</li>
		<li>Free ads creation with 10R</li>
		<li>$1M Max Didcy Ad Loan @ 5% IR</li>
		<li>Free Virtual Meetings @ only 2 meeting sessions</li>
		<li>Free Didcy Virtual Security @ only upto lev 4</li>
		<li>Free Audio/Radio Services - N/A</li>
		<li>Free Video & Film Production - N/A</li>
		<li>Didcy Ad Books - N/A</li>
		<li>Didcy Ad Trade(Buy & Sell Ads) - N/A</li>
		<li>Didcy Actor-Business Accept - N/A</li>
		<li>Personalized Ad Storage Services - N/A</li>
		<li>Offline Advertising on our platform - N/A</li>
		<li>Buying Ads from Didcy - N/A</li>
		<li>Outsourcing Talented Individuals by Didcy - N/A</li>
		<li>Audio/Radio Ads for Radio stations - N/A</li>
		<li>Ad sharing services to external platforms like social media - N/A</li>
		<li>Outsourcing Game Creators - N/A</li>
		<li class="grey-1"><a class="button-pricing button-pricing-pro" id="didcy-stand-pro" onclick="DidcyStandAPI(2)">Sign Up</a></li>
	  </ul>
	</div>

	<div class="columns columns-2">
	  <ul class="price">
		<li class="header">Premium</li>
		<li class="grey">$1,236.00 / yr</li>
		<li>Unlimited deals</li>
<!-- 		<li>Unlimited deal offerings</li>
		<li>Unlimited deal finding</li> -->
		<li>Unlimited Pack</li>
		<li>Hurray Package</li>
		<li>Wise Letters</li>
		<li>Free ads creation with GR</li>
		<li>$1T Max Didcy Ad Loan @ 1% IR</li>
		<li>Free Virtual Meetings with GR meeting sessions</li>
		<li>Free Didcy Virtual Security with GR levels</li>
		<li>Free Audio/Radio Services - N/A</li>
		<li>Free Video & Film Production - N/A</li>
		<li>Didcy Ad Books - N/A</li>
		<li>Didcy Ad Trade(Buy & Sell Ads) - N/A</li>
		<li>Didcy Actor-Business Accept - N/A</li>
		<li>Personalized Ad Storage Services - N/A</li>
		<li>Offline Advertising on our platform - N/A</li>
		<li>Buying Ads from Didcy - N/A</li>
		<li>Outsourcing Talented Individuals by Didcy - N/A</li>
		<li>Audio/Radio Ads for Radio stations - N/A</li>
		<li>Ad sharing services to external platforms like social media - N/A</li>
		<li>Outsourcing Game Creators - N/A</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-stand-premium" onclick="DidcyStandAPI(3)">Sign Up</a></li>
	  </ul>
	</div>
	<div class="caption-stand" id="caption-stand"></div>
</div>


<div id="myModal-special" class="modal-special">
  <span class="close-special" id="close-special">&times;</span>
	<div class="columns columns-special">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 13, 20, 1)">Special</li>
		<li class="grey">$ 0 / yr</li>
		<li>500M Storage</li>
		<li>1 Emails</li>
		<li>2 Domains</li>
		<li>500M Bandwidth</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-special-basic" onclick="DidcySpecialAPI(1)">Sign Up</a></li>
	  </ul>
	</div>
	<div class="columns columns-special">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 13, 20, 1)">PRIME</li>
		<li class="grey">$ 1 / yr</li>
		<li>800M Storage</li>
		<li>3 Emails</li>
		<li>4 Domains</li>
		<li>300M Bandwidth</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-special-basic" onclick="DidcySpecialAPI(1)">Sign Up</a></li>
	  </ul>
	</div>
	<div class="columns columns-special">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 13, 20, 1)">PRESS</li>
		<li class="grey">$ 2 / yr</li>
		<li>1GB Storage</li>
		<li>5 Emails</li>
		<li>6 Domains</li>
		<li>500M Bandwidth</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-special-basic" onclick="DidcySpecialAPI(1)">Sign Up</a></li>
	  </ul>
	</div>
	<div class="caption-special" id="caption-special"></div>
</div>

<div id="myModal-relief" class="modal-relief">
  <span class="close-relief" id="close-relief">&times;</span>
	<div class="columns columns-relief">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 35, 20, 1)">Relief</li>
		<li class="grey">$ 0 / yr</li>
		<li>1M Storage</li>
		<li>1 Emails</li>
		<li>Unlimited Domains</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-relief-basic" onclick="DidcyReliefAPI(1)" style="background-color: rgba(10, 35, 20, 1)">Sign Up</a></li>
	  </ul>    
	</div>
	<div class="columns columns-relief">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 35, 20, 1)">Reflect</li>
		<li class="grey">$ 0 / yr</li>
		<li>5M Storage</li>
		<li>4 Emails</li>
		<li>Unlimited Domains</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-relief-basic" onclick="DidcyReliefAPI(1)" style="background-color: rgba(10, 35, 20, 1)">Sign Up</a></li>
	  </ul>    
	</div>
	<div class="columns columns-relief">
	  <ul class="price">
		<li class="header" style="background-color: rgba(10, 35, 20, 1)">Relate</li>
		<li class="grey">$ 0 / yr</li>
		<li>10M Storage</li>
		<li>0 Emails</li>
		<li>Unlimited Domains</li>
		<li class="grey-1"><a class="button-pricing" id="didcy-relief-basic" onclick="DidcyReliefAPI(1)" style="background-color: rgba(10, 35, 20, 1)">Sign Up</a></li>
	  </ul>    
	</div>
	<div class="caption-relief" id="caption-relief"></div>
</div>

<!--Didcy Ratings----->

<!-- <div id="myModal-rater" class="modal-rater">
  <span class="close-rater" id="close-rater">&times;</span>
  
  <div class="rater" id="rater">
   
   <h5>A system without rating is <img src="download (11).jpg" class="emo-img" id="emo-img" alt=""/></h5>
   
   <h1> Didcy Rate is N/A.</h1>
  
  
  </div> 
  
  <div class="caption-rater" id="caption-rater">Didcy Rate</div>
    
</div> -->

<!-- Version 0.0.0.0 ->

<!--0000000000000000-->

<div id="myModal-11" class="modal-11">
  <span class="close-11" id="close-11">&times;</span>
  
	<h2 class="gaga-relate">Didcy Newsletters</h2>

	<form class="form-newsletter" action="" id="form-newsletter" method="post">
	  <div class="container-newsletter">
		<h2 class="glower">Subscribe to our Newsletters</h2>
		<p>Subscribing to our newsletters makes it possible to be the first 
		of all your competitors to see what's making the industry go crazy. Make it a priority to subscribe, so you can have unlimited
		updates. Your industry, Your Life. Thank you.</p>
	  </div>

	  <div class="container-newsletter">
		<input type="text" placeholder="Name" name="name" class="name-newsletter" id="name-newsletter" required>
		<input type="text" placeholder="Email address" name="mail" class="email-newsletter" id="email-newsletter" required>
		<label>
		  <input type="checkbox" checked="checked" name="subscribe" class="checkbox-newsletter" id="checkbox-newsletter"> Daily Newsletter
		</label>
	  </div>

	  <div class="container-newsletter">
		<input type="submit" value="Subscribe" class="submit-newsletter" id="submit-newsletter">
	  </div>
	</form>
	
	<div class="caption-11 gaga-relate-3" id="caption-11" style="display: none"></div>
</div>

<div id="myModal-6" class="modal-6 overlay">
  <span class="close-6 closebtn" id="close-6">
    <a href="javascript:void(0)">&times;</a>
	</span>
  <div class="row-6 overlay-content">
	<span class="heading">Didcy User Rating</span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star" style="color:gray"></span>
	<p><b class="ratings-percentages-header">0.0</b> average based on <b class="ratings-percentages-header">0</b> reviews.</p>
	<hr style="border:3px solid #f1f1f1">
  </div>
  <div class="row row-6 overlay-content">
  <div class="side">
    <div><b class="rating-figures">0</b> GD</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><b class="ratings-percentages">0</b><b>%</b></div>
  </div>
  <div class="side">
    <div><b class="rating-figures">0</b> VG</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><b class="ratings-percentages">0</b><b>%</b></div>
  </div>
  <div class="side">
    <div><b class="rating-figures">0</b> BD</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><b class="ratings-percentages">0</b><b>%</b></div>
  </div>
  <div class="side">
    <div><b class="rating-figures">0</b> VB</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><b class="ratings-percentages">0</b><b>%</b></div>
  </div>
  <div class="side">
    <div><b class="rating-figures">0</b> ET</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><b class="ratings-percentages">0</b><b>%</b></div>
  </div>
  </div>
  
  <p style="color: white;text-align:center"><b>GD: Good; VG: Very Good; BD: Bad; VB: Very Bad; ET: Excellent</b></p>
  <h3 class="didcy-rate-n-a">Didcy Rate is <b>BEST</b></h3>
  <div id="caption-6" class="caption-6">Didcy Rate</div>
</div>

<!-- <div id="adv-files" class="resx adv-files-1"> -->
 <!-- <form id="adv-files"> -->
 <!-- <input type="file" class="custom-file-input" name="uploads[]" id="uploads" multiple enctype="form/multipart-data"> -->
 <!-- <input type="submit" name="submit" class="upload" value="Upload" id="upload" title="Get your ads viewed first before your competitors"> -->
 <!-- </form> -->
 
<!-- </div> -->

<div class="select-display-type-modal" id="select-display-type-modal">
  <span class="close-select-display-type-modal" id="close-select-display-type-modal">&times;</span>
  <h2 style="color: white;text-align: center" class="page-content" id="page-content">Please select AdCloud Type</h2>
  <div class="modal-content-select-display-type-modal">
  <div class="row">
  <div class="column-" id="column">
    <button class="button" id="video-ads">Video Ads</button> <!--& Groups Profiles-->
    <button class="button" id="audio-ads">Audio Ads</button>
    <button class="button" style="display: none" id="" onclick="exhibitEvents(4, null, 'agp')">Actors Profile</button>
    <button class="button" style="display: none" id="" onclick="exhibitEvents(8, null, 'agp')">Companies Profile</button>
    <button class="button" id="static-ads">Post/Static Ads</button>
    <!-- <button class="" id="" onclick=""></button> -->
  </div>
  </div>
  </div>
</div>

   <div id="id012-in-dbox" class="w3-modal id012 id012-in-dbox" style="z-index:1.2;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.8)">
    <div style="border-radius:8%;" class="w3-modal-content w3-animate-top w3-card-4 id012-inner-box" id="contact-media-container-in-box">
      <header class="w3-container w3-black">
        <span onclick="document.getElementById('id012-in-dbox').style.display='none'" 
        class="w3-button w3-display-topright close-id02">&times;</span>
        <h2 style="text-align: center">See creatives &darr;</h2>
      </header>
      <div class="w3-container contact-media row" id="contact-media-in-dbox">

	  </div>
      <!--<footer class="w3-container w3-black id012-ft">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Didcy More Info" target="_blank" title="">https://www.didcy.com/more</a></p>
      </footer>-->
    </div>
  </div>

   <div id="didcy-platforms-offer" class="w3-modal didcy-platforms-offer" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.8)">
    <div style="border-radius:8%;" class="w3-modal-content w3-animate-left w3-card-4 id012-inner-box" id="contact-media-container-in-box">
      <header class="w3-container w3-blue">
        <span class="w3-button w3-display-topright close-id02 close-didcy-platforms-offer" id="close-didcy-platforms-offer">&times;</span>
        <h2 class="welcome-to-platform-offer" id="welcome-to-platform-offer" style="text-align: center">Welcome to Didcy</h2>
      </header>
      <div class="w3-container contact-media" id="">
       <p style="color: black;font-size:17px;text-align:center;"><b><i>Hello...</i></b><img alt="" style="padding-left: 10px" width="50px" title="" download="" ping="" target="" src="waving/download (1).png"/></p>
	   <p class="space-is-all-yours" style="color: black;text-align:center;"><b><i>The Space is all yours. Start exploring</i></b> <b><i>NOW</i> with</b></p>
	   <p class="no-1" style="color: black;text-align:center;"><b><i>Your no.1 BEST SPACE PROVIDER</i></b></p>
	  </div>
      <!--<footer class="w3-container w3-black id012-ft">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Didcy More Info" target="_blank" title="">https://www.didcy.com/more</a></p>
      </footer>-->
    </div>
  </div>

   <div id="didcy-ad-creators" class="w3-modal didcy-ad-creators" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.8)">
    <div style="border-radius:8%;" class="w3-modal-content w3-animate-top w3-card-4 id012-inner-box" id="contact-media-container-in-box">
      <header class="w3-container w3-blue">
        <span onclick="Reminder()" 
        class="w3-button w3-display-topright close-id02">&times;</span>
        <h2 class="notice-2-ad-creators" id="notice-2-ad-creators" style="text-align: center">Didcy Signup Reminder</h2>
      </header>
      <div class="w3-container contact-media" id="">
       <p style="color: black;font-size:17px;text-align:center;"><b><i>Please all interested ad creator or designer persons or companies should kindly check here when signing up</i></b></p>
       <p style="color: black;font-size:17px;text-align:center;line-height:1px;"><b><i>&darr;</i></b></p>
       <p style="color: black;font-size:17px;text-align:center;line-height:1px;"><img class="ad-img-reg" src="ad.creator.signup.region.png" alt="" title="" download=""/></p>
	  </div>
      <!--<footer class="w3-container w3-black id012-ft">
        <p>Find out more about us here <a href="https://www.didcy.com/more.php" alt="Didcy More Info" target="_blank" title="">https://www.didcy.com/more</a></p>
      </footer>-->
    </div>
  </div>

  <div class="network-detection w3-animate-left" id="network-detection">
   <p style="color: white" id="netdetection">You're <span id="ndetect" style="font-weight:bold"></span><img id="network-emo" src='' width='20px'/></p>
  </div>
  
  <script>
    var repeatDetection = 0;
	function DetectNetworkConnection(){
		var $networkID = "offline ";
		let networkEmo = 'download (11).jpg';
		if(window.navigator.onLine == false && repeatDetection == 0){
		    document.getElementById("ndetect").innerHTML = $networkID;
		    document.getElementById("network-emo").src = networkEmo;
			document.getElementById("network-detection").style.display="block";
			repeatDetection = 1;
		}else if(window.navigator.onLine == false && repeatDetection == 1){
			
		}else if(window.navigator.onLine == true && repeatDetection == 0){
			
		}else if(window.navigator.onLine == true && repeatDetection == 1){
			$networkID = "now connected. ";
			networkEmo = 'emojis/743267.png';
			document.getElementById("network-emo").src = networkEmo;
			document.getElementById("ndetect").innerHTML = $networkID;
			document.getElementById("network-detection").style.display="block";
			document.getElementById("network-detection").style.width="300px";
			setTimeout(function(){
				document.getElementById("network-detection").style.display="none";
				document.getElementById("network-detection").style.width="200px";
			}, 5000);		
            repeatDetection = 0;			
		}
        
	}

	setInterval(() => {DetectNetworkConnection();}, 1000);
	
  </script>
 
<div id="adv-files-showcase" class="row" style="z-index: -1">
 <h3 class="everything-begins" style="padding-left: 20px;color: dodgerblue;text-align:center"><b><i>With Didcy, everything begins with a space</i></b></h3>
 <div class="didcy-value-proposition w3-animate-right w3-card-4" id="didcy-value-proposition">
  <i>It all begins with a space. Start with us <b>Now</b> and get <b style="color: red">free</b> digital spaces for all your products, 
  files, web apps, websites, and many more. Didcy provides all kind of spaces for all types of digital 
  activities. 
  What do you want to cloud, sell, buy, host, develop, grow, produce or get. We got you all covered.  
  All you need to do is <b><i>JUST DIDCY</i></b>.</i>
 </div>
 <div class="didcy-value-proposition-2">
  <i>We offer our digital spaces(platforms) for absolutely <b>free of charge. No fees. No Charges.</b>
   Just <b>FREEEEEEE</b>. Try Didcy <b><i>NOW and See where we go from here...</i></b>
  </i>
 </div>
 <div class="didcy-value-proposition-3">
  <i style="color: dodgerblue">It all begins with a <b>space</b>
  </i>
 </div>
 <div class="didcy-definition-goal">
   <p class="didcy-def-goal we-def-spaces" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">We define our spaces with your goals</p>
   <p class="let-get-started-def-goal let-get-ys-2" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Let's get you Started</p>
 </div>
 <div class="column-content column-content-1">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Create a space with your goal</h3>
	  <h5 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">
	   Creating a space with Didcy gives you more room to consume more with absolutely 
	   <b><i style="color:red">free</i></b> of charge. No fees. No charges and no credit cards as well including 
	   mobile money. 
	   <br><b><i>It's just a space. Why pay for it if you can get it for <b><i style="color:red">free</i></b> from Didcy.</i></b>
	   <br><b>It's 100% free. Just try it out yourself.</b>
	  </h5>
	  <!--<p style="color: black"></p> -->
       <!--<img src="didcy.images/images (12).jfif" alt="" style="width: 100%;height: 300px;"/>	--> 
       <video src="../didcy.walls/create-a-space.webm" style="width:100%;height:300px" loop=1 muted=true autoplay=1></video>	   
 </div>
 </div>
 <div class="column-content column-content-2">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Fill your space with your creation</h3>
	  <h5 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">
       It's now time to start consuming more spaces by making them come to life with all that you've got. Start filling <b><i>NOW</i></b> and 
	   consume more for <b><i style="color: red">free</i></b>. 
	   <br>Put Didcy to work now by filling out your new spaces with your all.
	   <br><b><i>Why create spaces if you won't use them?</i></b>
	   <br><b><i>Bring them to life NOW</i></b>
	  </h5>  
	  <video src="../didcy.walls/fill-your-space.webm" style="width:100%;height:300px" loop=1 muted=true autoplay=1></video>
	 </div>
 </div>
 <div class="column-content column-content-3 column-content-3m">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Make it yours</h3>
	  <h5 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">
       Start making each space on Didcy yours <b><i>NOW</i></b>. There is no time to waste. 
	   <br><b>Make it yours <i>NOW</i> before someone does.</b>
	   <br><b><i>Treat your spaces with pride</i></b>
	  </h5>  
	  <video src="../didcy.walls/make-it-yours.webm" style="width:100%;height:300px" loop=1 muted=true autoplay=1></video>
  </div>
 </div>
  <div class="column-content column-content-3 column-content-3m shape-it-yw">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Shape it your way</h3>
	  <h5 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">
		It's just a space not a defined object with equal or no equal sizes. Didcy spaces are carefully crafted to meet your needs, so start 
		making changes to each <b><i>NOW</i></b>.
		<br><b><i>Shape it your way</i></b>
		<br><b><i>Remember, it's just a SPACE</i></b>
	  </h5>  
	  <video src="../didcy.walls/shape-it-your-way.webm" style="width:100%;height:300px" loop=1 muted=true autoplay=1></video>
 </div>
 </div>
<!-- <div class="column-content col-expand">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <p style="color: black">Our Privacy Policy governs your visit to <b>didcy.com</b>, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>  
	  <p style="color: black">Our Privacy Policy governs your visit to <b>didcy.com</b>, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>  
	  <p style="color: black">Our Privacy Policy governs your visit to <b>didcy.com</b>, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>  
</div>
 </div>-->
  <div class="column-content column-content-6" style="width: 100%;">
	 <div class="vid-3939302 col-content" style="box-shadow:0px 0px 0px 0px;text-align:justify">
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Make it look right</h3>
	  <h5 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">
		Create and make it look good to your users, clients, customers or consumers. It's all in the design.
		<br>Just go into your toolbox and make it look like in your imagination.
		<br><b><i>Just make it clear &amp; focus</i></b>
	  </h5>  
	  <video src="../didcy.walls/make-it-right.webm" style="width:100%;height:300px" loop=1 muted=true autoplay=1></video>
	 </div>
 </div>
 <div class="column-content column-content-1">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">It looks good to us</h3>
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Just make it look more unique</h3>
	  <h5 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">
        We care, we like and we know but do they care as much as <b>YOU</b> and us do. Your clients, users, customers or consumers.
		<br>They only need you to be <b><i>100%</i></b> unique from your competitors, so give them what they want if you want to keep them forever.
		<br>It all comes down to <b><i>YOUR UNIQUENESS</i></b>.
		<br><b>Start making it your <i>no.1</i> priority.</b> 
		<br><b><i>Start NOW &amp;</i></b> <b><i>make them feel it</i></b>.
	  </h5>  
	  <video src="../didcy.walls/just-unique.webm" style="width:100%;height:300px" loop=1 muted=true autoplay=1></video>
 </div>
 </div>
  <div class="column-content column-content-5">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 class="create-a-space" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">We'll take it from here...</h3>
	   <!--<p style="color: black"></p> --> 
       <img src="didcy.images/images.jfif" alt="" style="width: 100%;height: 300px;"/>	   
	 </div>
 </div>
 <div class="column-content column-content-3 column-content-3m">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 style="color:red">Who we are? </h3>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   We are a whole new generation of space providers where we provide spaces to users so that they can cloud, host, build, exhibit and 
	   do more. Our space provision is defined in the form of individual platforms with each 
	   performing different digital tasks for it's users. We have so much to provide to you, so 
	   make a quick visit to Didcy <b><i>NOW</i></b> and you will never regret making that visit.
	  </p>
	  <!--<p style="color: black"></p> -->
 </div>
 </div>
 <div class="column-content column-content-3 column-content-3m">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 style="color:red">What we are? </h3>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   We are a platform dedicated to making sure that every internet user is well received &amp; fed with enough space to do more digital activities 
	   at absolutely no cost. We make sure our business stays with free spaces.
	  </p>
 </div>
 </div>
 <div class="column-content column-content-3 column-content-3m our-mission-col">
	 <div class="vid-3939302 col-content" style="padding: 20px;text-align:justify">
	  <h3 style="color:red">Our mission </h3>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>
 </div>
 </div>
</div>

<div class="list-spaces-offered" style="position:relative">
 <h2 class="list-spaces-below" style="text-align:center;"><b><i style="color: red;">See our space offers below...</i></b></h2>
 <div class="row">
  <div class="column col-box col-box-t1 col-ft1 col-new-height" id="col-new-height">
    <div class="container-offers">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">CloudMyAdS</i></b></h4>
	  <p class="create-a-space" style="font-weight:bolder;text-align: justify;color:black">
	   Use CloudMyAdS to 
	  </p>   
	   <ol type="1">
	    <li style="color: black">Cloud(not advertize) your ad creatives safely until you need it/them for publishing or advertizing.</li>
	    <br><li style="color: black">Keep backup of your ad creatives in case of any future system crashes or failures on your local workstation(s)/computer(s).</li>
	    <br><li style="color: black">View your clouded ads and other users public ads</li>
	    <br><li style="color: black">Download your clouded ads and other users public ads</li>
	    <br><li style="color: black">Get notified of other users ad creatives and see how creative they are.</li>
	    <br><li style="color: black">Notify others of your public ads and see how they react to your creatives.</li>
	    <br><li style="color: black">Obtain static versions of your video creatives using ExtractAPI</li>
	   </ol>
	   <p class="kindly-subscribe-n" style="color: blue;text-align:justify">Kindly subscribe to our newsletters for more feature updates. 
	   Try not to miss any of them. Thank you.</p>	  
  </div>    
  </div>    
  <div class="column col-box col-box-t1 col-st1 col-new-height" id="col-new-height">
   <div class="container-offers">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">WebSpace</i></b></h4>
	   <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   Start selling or exhibiting your WebApps for deployment on Didcy WebSpace.</p>
	   <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   Get users to start using your WebApps directly from Didcy through its easy to find WebSpace.</p>
	   <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   WebSpace features 
	  </p>     
	  <ol type="1">
	   <li style="color: black">Developer Portal(Developer Registration Form)</li>
	   <br><li style="color: black">Smile(Developer Room/Dashboard)</li>
	   <br><li style="color: black">WebSpace Market(DidcyFix)</li>
	  </ol>
	  <p class="kindly-subscribe-n" style="color: blue;text-align:justify;">Kindly subscribe to our newsletters for more feature updates. 
	  Try not to miss any of them. Thank you.</p>	  
  </div>  
  </div>  
  <div class="column col-box col-box-t1 col-box-t1-50-marg col-new-height" id="col-new-height">
   <div class="container-offers">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">BookSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   Use BookSpace to start selling your Books to target readers. 
	  </p>     
	  <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   Make your time see value by using BookSpace. 
	  </p>  
	  <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   It's 99.9% free to sell your Books on.
	  </p>  
	  <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   BookSpace comes with the following features to make you see real value and ease of selling.
	  </p> 
	  <p class="create-a-space" style="text-align: justify;color:black;font-weight:bolder">
	   BookSpace features  
	  </p>	  
	  <ol type="1">
       <li style="color:black">BookSpace Registration or Login Account</li>
	   <br><li style="color:black">BookSpace Seller &amp; Buyer Dashboard/Room</li>
	   <br><li style="color:black">Seller-Buyer Singular attribute integration  for only seller account.(Only Seller can possess
	   this attribute).</li>
	  </ol>
	  <p class="kindly-subscribe-n" style="color: blue;text-align:justify;">Kindly subscribe to our newsletters for more feature updates. 
	  Try not to miss any of them. Thank you.</p>	  	  
  </div>
  </div>
  <!--2 row-->
  <div class="column col-box col-box-t1 col-box-t1-50-marg col-box-t1-ls space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">RTCSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>  
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">TradeSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>  
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">CourseSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>
  <!--3 row-->
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">AdExSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>  
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">CrymSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>  
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">PickSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>
  <!--2 row-->
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">SoundSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>  
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">BetSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>  
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">NewsSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>
  <div class="column col-box space-display-none">
      <h4 class="this-entails" style="text-align:center"><b><i style="color: blue;text-align:center">HostSpace</i></b></h4>
	  <p class="create-a-space" style="text-align: justify;color:black">
	   Our mission is to get everybody the required amount of digital space they need to execute their digital activities flawlessly at 
	   absolutely no cost. No fees. No charges. Just <b><i style="color: red">FREEEEEEEEEE</i></b>
	  </p>     
  </div>
 </div>
 </div>
</div>

<div class="didcy-features"><!--Didcy Spaces-->
<h2 class="what-you-need-to-know" style="color: dodgerblue;text-align:center;margin-top: 2%;"><b>
Didcy Spaces </b></h2>
<p style="color: dodgerblue;text-align:center;font-weight:bolder;font-size:35px;">&darr;</p>
</div>
<div class="slide-containerf" style="background-color: white">
<div class="slideshow-containerf">

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-1a.PNG" style="width:100%">
  <div class="textf">CloudMyAds</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-1b.PNG" style="width:100%">
  <div class="textf">CloudMyAds</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-20.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-21.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-26.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-24.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-9.png" style="width:100%">
  <div class="textf">BookSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img src="https://www.didcy.com/adv.tutorials/images/didcy-10.png" style="width:100%">
  <div class="textf">BookSpace</div>
</div>

<a class="prevf" onclick="plusSlidesf(-1)">❮</a>
<a class="nextf" onclick="plusSlidesf(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dotf" onclick="currentSlidef(1)"></span> 
  <span class="dotf" onclick="currentSlidef(2)"></span> 
  <span class="dotf" onclick="currentSlidef(3)"></span> 
  <span class="dotf" onclick="currentSlidef(4)"></span> 
  <span class="dotf" onclick="currentSlidef(5)"></span> 
  <span class="dotf" onclick="currentSlidef(6)"></span> 
  <span class="dotf" onclick="currentSlidef(7)"></span> 
  <span class="dotf" onclick="currentSlidef(8)"></span> 
</div>
</div>

<div class="didcy-features">
<h2 class="what-you-need-to-know" style="color: dodgerblue;text-align:center;margin-top: 2%;"><b>
Learn Didcy Spaces with ease </b></h2>
<p style="color: dodgerblue;text-align:center;font-weight:bolder;font-size:35px;">&darr;</p></div>
<div class="slide-containervf" style="background:white">
<div class="slideshow-containervf">

<div class="mySlidesvf fadevf">
  <div class="numbertextvf"></div>
  <video title="Use CloudMyAds to store your ads for later advertizing" alt="Use CloudMyAds to store your ads for later advertizing" src="https://www.didcy.com/adv-silent-wall/screen-capture (14).webm" style="width:100%"></video>
  <div class="textvf">CloudMyAds</div>
</div>

<div class="mySlidesvf fadevf">
  <div class="numbertextvf"></div>
  <video title="Let WebSpace take care of your WebApp development, exhibition and trading" alt="Let WebSpace take care of your WebApp development, exhibition and trading" src="https://www.didcy.com/adv-silent-wall/screen-capture (13).webm" style="width:100%"></video>
  <div class="textvf">WebSpace</div>
</div>

<!-- <div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img title="Let WebSpace take care of your WebApp development, exhibition and trading" alt="Let WebSpace take care of your WebApp development, exhibition and trading" src="https://www.didcy.com/adv.tutorials/images/didcy-20.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img title="Let WebSpace take care of your WebApp development, exhibition and trading" alt="Let WebSpace take care of your WebApp development, exhibition and trading" src="https://www.didcy.com/adv.tutorials/images/didcy-21.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img title="Let WebSpace take care of your WebApp development, exhibition and trading" alt="Let WebSpace take care of your WebApp development, exhibition and trading" src="https://www.didcy.com/adv.tutorials/images/didcy-26.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img title="Let WebSpace take care of your WebApp development, exhibition and trading" alt="Let WebSpace take care of your WebApp development, exhibition and trading" src="https://www.didcy.com/adv.tutorials/images/didcy-24.PNG" style="width:100%">
  <div class="textf">WebSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img title="The Global BookSpace is growing everyday & we can help you grow yours as well" alt="The Global BookSpace is growing everyday & we can help you grow yours as well" src="https://www.didcy.com/adv.tutorials/images/didcy-9.png" style="width:100%">
  <div class="textf">BookSpace</div>
</div>

<div class="mySlidesf fadef">
  <div class="numbertextf"></div>
  <img title="The Global BookSpace is growing everyday & we can help you grow yours as well" alt="The Global BookSpace is growing everyday & we can help you grow yours as well" src="https://www.didcy.com/adv.tutorials/images/didcy-10.png" style="width:100%">
  <div class="textf">BookSpace</div>
</div>
 -->
<a class="prevvf" onclick="plusSlidesvf(-1)">❮</a>
<a class="nextvf" onclick="plusSlidesvf(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dotvf" onclick="currentSlidevf(1)"></span> 
  <span class="dotvf" onclick="currentSlidevf(2)"></span> 
<!--   <span class="dotf" onclick="currentSlidef(3)"></span> 
  <span class="dotf" onclick="currentSlidef(4)"></span> 
  <span class="dotf" onclick="currentSlidef(5)"></span> 
  <span class="dotf" onclick="currentSlidef(6)"></span> 
  <span class="dotf" onclick="currentSlidef(7)"></span> 
  <span class="dotf" onclick="currentSlidef(8)"></span>  -->
</div>
</div> 


<div class="space-updates"><!--Watch out for more addition-->
  More Spaces coming your way...
</div>


<div class="didcy-brief-video">
  <h2 class="what-you-need-to-know" style="color: red;text-align:center;margin-top: 2%;"><b><i>What you need to know to get started</i></b></h2>
  <p style="color: red;text-align:center;font-weight:bolder;font-size:35px;">&darr;</p>
  <!--<div class="didcy-brf-video">
   <video src="https://www.youtube.com/watch?v=kFPjKiTC3Tg" alt="" title="" width="100%" class="didcy-brf-rvideo"></video>
  </div>-->
</div>

<div class="responsiveRapper">
	<iframe width="560" height="315"
	src="https://www.youtube.com/embed/5H51CsRKjIo" frameborder="0" allowfullscreen>
	</iframe>
</div>

<!-- Slideshow container -->
<div class="slideshow-container-testimonials col-box-top">

  <!-- Full-width images with number and caption text -->
  <h3 class="others-testimonials" style="color: dodgerblue;font-style:italic;text-align:center">Read others testimonials...</h3>
  <div class="mySlides-testimonials fade-testimonials">
    <!-- <div class="numbertext">1 / 3</div> -->
    <img src="developers/ceo.jpeg" class="testimonials-photo">
	<div class="testimonials" width="50%">
	 <p class="testimonials" style="color: black;text-align:center;font-style:italic">
	   I love Didcy, not because I am the CEO but because it's a great tool and most importantly free to use. 
	   We taught it wouldn't be possible to make this incredible platform free to every user but because we do 
	   care about our users we were able to deduce it to absolute freedom. Try it out yourself NOW
	 </p>
	</div>
    <!-- <div class="text">Caption Text</div> -->
  </div>

  <div class="mySlides-testimonials fade-testimonials">
    <!-- <div class="numbertext">2 / 3</div> -->
    <img src="../developers/ta.jpg" class="testimonials-photo">
	<div class="testimonials" width="50%">
	 <p class="testimonials" style="color: black;text-align:center;font-style:italic">
	   <b>I am Dieubeni Doubalet</b> and I encourage you to try Didcy out yourself because it provides real value. It's being 
	   a great tool to me and to the people around me. It's helped me keep more of my time and money for other 
	   necessities. I love Didcy because it's the way forward.
	 </p>
	</div>
    <!-- <div class="text">Caption Two</div> -->
  </div>

  <div class="mySlides-testimonials fade-testimonials">
    <!-- <div class="numbertext">3 / 3</div> -->
    <img src="../developers/na.png" class="testimonials-photo">
	<div class="testimonials" width="50%">
	 <p class="testimonials" style="color: black;text-align:center;font-style:italic">
	  <b>The name is Alex Sanchez</b> and this is the platform I recommend to everyone. I have being using 
	  Didcy ever since it's first version came to light. It's being a great tool to solving most of my 
	  digital activities. I encourage you to try it out because it provides great value.
	 </p>
	</div>
    <!-- <div class="text">Caption Three</div> -->
  </div>

  <!-- Next and previous buttons -->
  <a class="prev-testimonials" onclick="plusSlidesTestimonials(-1)">&#10094;</a>
  <a class="next-testimonials" onclick="plusSlidesTestimonials(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot-testimonials" onclick="currentSlideTestimonials(1)"></span>
  <span class="dot-testimonials" onclick="currentSlideTestimonials(2)"></span>
  <span class="dot-testimonials" onclick="currentSlideTestimonials(3)"></span>
</div>

 <div class="didcy-definition-def">
   <p class="didcy-def-goal def-way" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Define it your way</p>
   <p class="let-get-started-def-goal def-way-p" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">It's all in your creation</p>
   <p class="let-get-started-def-goal def-way-p" style="text-align:center;color:rgba(20, 20, 100, 1);font-weight:bold">Just bring it out</p>
 </div>

 <div class="didcy-definition-def" style="height: 100px">
   <h2 class="didcy-def-goal" id="didcy-just-waiting" style="text-align:center;color:red;font-weight:bold">Just waiting...</h2>
 </div>


   <script type="text/javascript">
     "use strict";
	 var welcome = "Welcome to Didcy";
	 var justwaiting = "Just waiting...";
	 var wely = "";
	 var wely2 = "";
	 var iy = 0;
	 var iy2 = 0;
	 var ssleep = 1000;
	 var ssleep2 = 1000;
	 var reminderClick = 0;
	async function sleepMode5(sleep_time = 300000, sleep_caller = null){
			 while(false != true){ //181000 - 3mins 1s 301000 - 5mins 01s 61000 - 1mins 1s
       
				 await sleep(200);
				 if(wely.length == welcome.length){ //121000; 300000 - 5mins 60000 - 1mins 180000 - 3mins
				    document.getElementById("open-write-text").innerHTML = "";
				    iy = 0;
					wely = "";
				    return sleepMode5();
				 }else{
			 		 wely += welcome[iy];
					 iy++;
					 document.getElementById("open-write-text").innerHTML = wely;
					 window.ssleep = window.ssleep + 1000;
				 }
			 }
	}

	async function sleepMode51(sleep_time = 300000, sleep_caller = null){
			 while(false != true){ //181000 - 3mins 1s 301000 - 5mins 01s 61000 - 1mins 1s
       
				 await sleep(200);
				 if(wely2.length == justwaiting.length){ //121000; 300000 - 5mins 60000 - 1mins 180000 - 3mins
				    document.getElementById("didcy-just-waiting").innerHTML = "";
				    iy2 = 0;
					wely2 = "";
				    return sleepMode51();
				 }else{
			 		 wely2 += justwaiting[iy2];
					 iy2++;
					 document.getElementById("didcy-just-waiting").innerHTML = wely2;
					 window.ssleep2 = window.ssleep2 + 1000;
				 }
			 }
	}


   sleepMode51();
	function Reminder(){
		document.getElementById('didcy-ad-creators').style.display='none';
		if(reminderClick == 0){
			setTimeout(function(){
			   document.getElementById('write').style.display='block';
			   sleepMode5();
			   reminderClick = 1;
			}, 1000);
		}
	}

   </script>


<!-- <div id="adv-files-showcase-video-ads" class="row">

</div>

<div id="adv-files-showcase-static-ads" class="row">

</div>

<div id="adv-files-showcase-companies-profiles" class="row">

</div>

<div id="adv-files-showcase-actors-n-groups-profiles" class="row">

</div>
<br/> -->

<div id="myModal-9" class="modal-9 overlay-2" style="background-color: rgba(0, 0, 0, 0.9)">
  <span class="close-9 closebtn" id="close-9">
    <a href="javascript:void(0)">&times;</a>
	</span>

   <h1 class="mobile-device-access-ads" style="color: white">Please can't access on Mobile Devices.</h1>

<div class="topNavg w3-container ads-nav" id="identity_main_ids" style="background-color: rgba(0, 0, 0, 0.9);z-index: 0;">
<div class="topnav" id="myTopnav">
  <!--<a href="https://www.didcy.com" id="didcy" class="didcy didcx">Didcy</a>
  <a href="https://www.didcy.com" title="Home Sweet Home" id="home" class="home active"><img class="iconic" src="adv.icons/1946433.png"/></a>
  -->
  <div class="dropdown">
    <button title="hey you, this is what your competitors are upto" class="drop-down-ads dropbtn drop">
      <img class="iconic" src="adv.icons/3256216.png"/><!-- download(25).jpg -->
    </button>
  </div> 
<div class="dropdown">
    <button title="Yeah we found it. Just eavedrop &darr;" class="drop-down-ads dropbtn drop">
      <img class="iconic" src="adv.icons/3631153.png"/><!-- download(22).jpg -->
    </button>
  </div> 
  <div class="dropdown">
    <button class="contacting dropbtn" id="drop-down-ads contacts-links-create drop">
      <img class="iconic" src="adv.icons/4213179.png"/><!-- download(13).jpg -->
    </button>
  </div> 
  <div class="dropdown"><!--  style="background-color: #555;border-radius: 2px" -->
    <button id="notification-create" class="drop-down-ads currenting dropbtn notification drop"><span class="badge">0</span>
      <img class="iconic" src="adv.icons/1156949.png"/><!-- images(4).jpg -->
    </button>
  </div> 
  <div class="dropdown">
    <input type="search" name="" class="drop-down-ads search-relocate search-engine dropbtn drop" style="cursor: inherit" id="search-engine-create" placeholder="Just guess anything ....">
	<button onclick="document.getElementById('mini-search').style.display='block'" class="drop-down-ads searching search-pop dropbtn" id="search-board-create" onclick="">
	<img class="iconic" src="adv.icons/3128287.png"/><!-- download(6).jpg -->
	</button>
  </div>
    <!--<a href="#about" id="links-create" class="linker"> ? </a>-->
  <a href="javascript:void(0);" style="font-size:15px;" class="drop-down-ads icon drop" onclick="AboutUS()">&#9776;</a>
</div>
</div>
        <div class="container-create-ads ads-nav">
            <div class="container__left">
			  <div class="create-top-toolset" id="create-top-toolset">
			    <div class="create-ads">
                 <h1>Create your ads here</h1>
				 <h2>Service currently not availabile</h2>
				</div>
			  </div>		
			</div>
            <div class="resizer" data-direction="horizontal" style="background-color: rgba(10, 10, 10, 1);"></div>
            <div class="container__right">
			  <div class="preview-top-toolset" id="preview-top-toolset">
			    <div class="preview-ads">
				 <h1>Preview your ads here</h1>
				 <h2>Service currently not availabile</h2>
				</div>
			  </div>		  
            </div>
        </div>

<div class="topNavg w3-container low-level-nav ads-nav" id="identity_main_ids" style="background-color: rgba(0, 0, 0, 0.9);z-index: 0;">
<div class="topnav" id="myTopnav">
  <!--<a href="https://www.didcy.com" id="didcy" class="didcy didcx">Didcy</a>
  <a href="https://www.didcy.com" title="Home Sweet Home" id="home" class="home active"><img class="iconic" src="adv.icons/1946433.png"/></a>
  -->
  <div class="dropdown">
    <button title="hey you, this is what your competitors are upto" class="drop-down-ads dropbtn drop">
      <img class="iconic" src="adv.icons/3256216.png"/><!-- download(25).jpg -->
    </button>
  </div> 
  <div class="dropdown">
    <button title="Yeah we found it. Just eavedrop &darr;" class="drop-down-ads dropbtn drop">
      <img class="iconic" src="adv.icons/3631153.png"/><!-- download(22).jpg -->
    </button>
  </div> 
  <div class="dropdown">
    <button class="contacting dropbtn" id="drop-down-ads contacts-links-create drop">
      <img class="iconic" src="adv.icons/4213179.png"/><!-- download(13).jpg -->
    </button>
  </div> 
  <div class="dropdown"><!--  style="background-color: #555;border-radius: 2px" -->
    <button id="notification-create" class="drop-down-ads currenting dropbtn notification drop"><span class="badge">0</span>
      <img class="iconic" src="adv.icons/1156949.png"/><!-- images(4).jpg -->
    </button>
  </div> 
  <div class="dropdown">
    <input type="search" name="" class="drop-down-ads search-relocate search-engine dropbtn drop" style="cursor: inherit" id="search-engine-create" placeholder="Just guess anything ....">
	<button onclick="document.getElementById('mini-search').style.display='block'" class="drop-down-ads searching search-pop dropbtn" id="search-board-create" onclick="">
	<img class="iconic" src="adv.icons/3128287.png"/><!-- download(6).jpg -->
	</button>
  </div>
    <!--<a href="#about" id="links-create" class="linker"> ? </a>-->
  <a href="javascript:void(0);" style="font-size:15px;" title="Click here to find out more about Didcy"" alt="Click here to know more about Didcy" class="drop-down-ads icon drop" onclick="AboutUS()">&#9776;</a>
</div>
</div>


<!-- Draggable DIV -->
<div class="bottom-level-nav ads-nav" id="bottom-level-nav">
  <!-- Include a header DIV with the same name as the draggable DIV, followed by "header" -->
  <div class="bottom-level-navheader" id="bottom-level-navheader">
    <img class="iconic" src="adv.icons/3256216.png"/><!-- download(25).jpg -->
  </div>
  <div class="dropdown bottom-level-nav-down">
    <button title="Yeah we found it. Just eavedrop &darr;" class="dropbtn drop">
      <img class="iconic" src="adv.icons/3631153.png"/><!-- download(22).jpg -->
    </button>
  </div> 
  <div class="dropdown bottom-level-nav-down">
    <button class="contacting dropbtn" id="contacts-links-create drop">
      <img class="iconic" src="adv.icons/4213179.png"/><!-- download(13).jpg -->
    </button>
  </div> 
  <div class="dropdown bottom-level-nav-down"><!--  style="background-color: #555;border-radius: 2px" -->
    <button id="notification-create" class="currenting dropbtn notification drop"><span class="badge">0</span>
      <img class="iconic" src="adv.icons/1156949.png"/><!-- images(4).jpg -->
    </button>
  </div> 
  <div class="dropdown bottom-level-nav-down">
	<button onclick="document.getElementById('mini-search').style.display='block'" class="searching-app search-pop-app dropbtn" id="search-board-create-app" onclick="">
	<img class="iconic" src="adv.icons/3128287.png"/><!-- download(6).jpg -->
	</button>
  </div>
</div>		

  <div id="caption-9" class="caption-9"></div>
</div>
<!-- <div id="adv-files-showcase" class="resx">

</div> -->

<button class="open-button" id="open-button">Open Form</button>
<!-- <button class="open-button" value="" id="open-button" onclick="openForm('p')">Previous Form</button>
<button class="open-next-button" value="" id="open-next-button" onclick="selectAds()">Next Form</button>
 -->
<div class="form-popup" id="myForm">
  <span class="close-form-popup" id="close-form-popup" onclick="CloseForm(document.getElementById('myForm'), document.forms['myForm'], 0)">&times;</span>
  <form action=""  name="myForm" class="form-container">
    <h1 class="psInfo" id="psInfo">Product/Service Info</h1>

    <label for="email"><b>Email</b></label>
    <input class="email" id="email" type="text" placeholder="Enter Email" name="email" required>

    <label for="tel"><b>Telephone</b></label>
    <input class="tel" id="tel" type="tel" placeholder="Enter Telephone No." name="tel" required>

    <label for="psl"><b>Product/Service Location</b></label>
    <input class="psl" id="psl" type="text" placeholder="Enter Product/Service Location" name="psl" required>

    <label for="apb"><b>Approved by</b></label>
    <input class="apb" id="apb" type="text" placeholder="Approved by which Authority/Agency" name="apb" required>

    <label for="psd"><b>Product/Service Description</b></label>
    <textarea class="psd" id="psd" style="height:200px" placeholder="Product/Service Description" name="psd" required></textarea>

    <label for="pscd"><b>Product/Service Commencement Date</b></label>
    <input class="pscd" id="pscd" type="text" placeholder="Product/Service Commencement Date" name="pscd" required>

    <label for="psed"><b>Product/Service Elapsing Date</b></label>
    <input class="psed" id="psed" type="text" placeholder="Product/Service Elapsing Date" name="psed" required>

    <label for="pss"><b>Product/Service Commencement Time</b></label>
    <input class="pss" id="pss" type="text" placeholder="Product/Service Commencement Time" name="pss" required>

    <label for="pset"><b>Product/Service Elapsing Time</b></label>
    <input class="pset" id="pset" type="text" placeholder="Product/Service Elapsing Time" name="pset" required>

    <label for="pscompany"><b>Product/Service Company</b></label>
    <input class="pscompany" id="pscompany" type="text" placeholder="Product/Service Company" name="pscompany" required>

    <label for="pscountry"><b>Country of Production</b></label>
    <select class="pscountry" id="pscountry" name="pscountry" required>
		<option name="">Åland Islands</option>	
		<option name="">Afghanistan</option>	
		<option name="">Albania</option>	
		<option name="">Algeria</option>	
		<option name="">American Samoa</option>	
		<option name="">Andorra</option>	
		<option name="">Angola</option>	
		<option name="">Anguilla</option>	
		<option name="">Antigua and Barbuda</option>	
		<option name="">Argentina</option>	
		<option name="">Armenia</option>	
		<option name="">Aruba</option>	
		<option name="">Australia</option>	
		<option name="">Austria</option>	
		<option name="">Azerbaijan</option>	
		<option name="">Bahamas</option>	
		<option name="">Bahrain</option>	
		<option name="">Bangladesh</option>	
		<option name="">Barbados</option>	
		<option name="">Belarus</option>	
		<option name="">Belgium</option>	
		<option name="">Belize</option>	
		<option name="">Benin</option>	
		<option name="">Bermuda</option>	
		<option name="">Bhutan</option>	
		<option name="">Bolivia</option>	
		<option name="">Bonaire</option>	
		<option name="">Bosnia and Herzegovina</option>	
		<option name="">Botswana</option>	
		<option name="">Brazil</option>	
		<option name="">British Indian Ocean Territory</option>	
		<option name="">British Virgin Islands</option>	
		<option name="">Brunei</option>	
		<option name="">Bulgaria</option>	
		<option name="">Burkina Faso</option>	
		<option name="">Burundi</option>	
		<option name="">Cambodia</option>	
		<option name="">Cameroon</option>	
		<option name="">Canada</option>	
		<option name="">Cape Verde</option>	
		<option name="">Cayman Islands</option>	
		<option name="">Central African Republic</option>	
		<option name="">Chad</option>	
		<option name="">Chile</option>	
		<option name="">China</option>	
		<option name="">Colombia</option>	
		<option name="">Comoros</option>	
		<option name="">Democratic Republic of the Congo</option>	
		<option name="">Republic of the Congo</option>	
		<option name="">Cook Islands</option>	
		<option name="">Costa Rica</option>	
		<option name="">Croatia</option>	
		<option name="">Cuba</option>	
		<option name="">Curaçao</option>	
		<option name="">Cyprus</option>	
		<option name="">Czech Republic</option>	
		<option name="">Denmark</option>	
		<option name="">Djibouti</option>	
		<option name="">Dominica</option>	
		<option name="">Dominican Republic</option>	
		<option name="">Ecuador</option>	
		<option name="">Egypt</option>	
		<option name="">El Salvador</option>	
		<option name="">Equatorial Guinea</option>	
		<option name="">Eritrea</option>	
		<option name="">Estonia</option>	
		<option name="">Ethiopia</option>	
		<option name="">Falkland Islands</option>	
		<option name="">Faroe Islands</option>	
		<option name="">Fiji</option>	
		<option name="">Finland</option>	
		<option name="">France</option>	
		<option name="">French Guiana</option>	
		<option name="">French Polynesia</option>	
		<option name="">French Southern and Antarctic Lands</option>	
		<option name="">Gabon</option>	
		<option name="">Gambia</option>	
		<option name="">Georgia</option>	
		<option name="">Germany</option>	
		<option name="">Ghana</option>	
		<option name="">Gibraltar</option>	
		<option name="">Greece</option>	
		<option name="">Greenland</option>	
		<option name="">Grenada</option>	
		<option name="">Guadeloupe</option>	
		<option name="">Guam</option>	
		<option name="">Guatemala</option>	
		<option name="">Guinea</option>	
		<option name="">Guinea-Bissau</option>	
		<option name="">Guyana</option>	
		<option name="">Haiti</option>	
		<option name="">Honduras</option>	
		<option name="">Hong Kong</option>	
		<option name="">Hungary</option>	
		<option name="">Iceland</option>	
		<option name="">India</option>	
		<option name="">Indonesia</option>	
		<option name="">Iran</option>	
		<option name="">Iraq</option>	
		<option name="">Ireland</option>	
		<option name="">Israel</option>	
		<option name="">Italy</option>	
		<option name="">Ivory Coast</option>	
		<option name="">Jamaica</option>	
		<option name="">Japan</option>	
		<option name="">Jordan</option>	
		<option name="">Kazakhstan</option>	
		<option name="">Kenya</option>	
		<option name="">Kiribati</option>	
		<option name="">North Korea</option>	
		<option name="">South Korea</option>	
		<option name="">Kosovo</option>	
		<option name="">Kurdistan</option>	
		<option name="">Kuwait</option>	
		<option name="">Kyrgyzstan</option>	
		<option name="">Laos</option>	
		<option name="">Latvia</option>	
		<option name="">Lebanon</option>	
		<option name="">Lesotho</option>	
		<option name="">Liberia</option>	
		<option name="">Libya</option>	
		<option name="">Liechtenstein</option>	
		<option name="">Lithuania</option>	
		<option name="">Luxembourg</option>	
		<option name="">North Macedonia</option>	
		<option name="">Macau</option>	
		<option name="">Premium channels</option>	
		<option name="">Madagascar</option>	
		<option name="">Malawi</option>	
		<option name="">Malaysia</option>	
		<option name="">Maldives</option>	
		<option name="">Mali</option>	
		<option name="">Malta</option>	
		<option name="">Marquesas Islands</option>	
		<option name="">Marshall Islands</option>	
		<option name="">Martinique</option>	
		<option name="">Mauritania</option>	
		<option name="">Mauritius</option>	
		<option name="">Mayotte</option>	
		<option name="">Mexico</option>	
		<option name="">Over-the-air</option>	
		<option name="">National TV Broadcast</option>	
		<option name="">Federated States of Micronesia</option>	
		<option name="">Midway Islands</option>	
		<option name="">Moldova</option>	
		<option name="">Monaco</option>	
		<option name="">Mongolia</option>	
		<option name="">Montenegro</option>	
		<option name="">Montserrat</option>	
		<option name="">Morocco</option>	
		<option name="">Mozambique</option>	
		<option name="">Myanmar</option>	
		<option name="">Namibia</option>	
		<option name="">Nepal</option>	
		<option name="">Netherlands</option>	
		<option name="">Netherlands Antilles</option>	
		<option name="">New Caledonia</option>	
		<option name="">New Zealand</option>	
		<option name="">Nicaragua</option>	
		<option name="">National channels</option>	
		<option name="">Local channels</option>	
		<option name="">Niger</option>	
		<option name="">Nigeria</option>	
		<option name="">Niue</option>	
		<option name="">Northern Mariana Islands</option>	
		<option name="">Norway</option>	
		<option name="">Oman</option>	
		<option name="">Pakistan</option>	
		<option name="">Palau</option>	
		<option name="">Palestine</option>	
		<option name="">Panama</option>	
		<option name="">Papua New Guinea</option>	
		<option name="">Paraguay</option>	
		<option name="">Peru</option>	
		<option name="">Philippines</option>	
		<option name="">Government-owned networks</option>	
		<option name="">Minor television networks</option>	
		<option name="">Pitcairn Islands</option>	
		<option name="">Poland</option>	
		<option name="">Portugal</option>	
		<option name="">Puerto Rico</option>	
		<option name="">Qatar</option>	
		<option name="">Réunion</option>	
		<option name="">Romania</option>	
		<option name="">Russia </option>	
		<option name="">Rwanda</option>	
		<option name="">Saba</option>	
		<option name="">Saint Barthélemy</option>	
		<option name="">Saint Kitts and Nevis</option>	
		<option name="">Saint Lucia</option>	
		<option name="">Sint Maarten</option>	
		<option name="">Saint Pierre and Miquelon</option>	
		<option name="">Saint Vincent and the Grenadines</option>	
		<option name="">Samoa</option>	
		<option name="">San Marino</option>	
		<option name="">São Tomé and Príncipe</option>	
		<option name="">Saudi Arabia</option>	
		<option name="">Senegal</option>	
		<option name="">Serbia</option>	
		<option name="">Seychelles</option>	
		<option name="">Sierra Leone</option>	
		<option name="">Singapore</option>	
		<option name="">Sint Eustatius</option>	
		<option name="">Slovakia</option>	
		<option name="">Slovenia</option>	
		<option name="">Solomon Islands</option>	
		<option name="">Somalia</option>	
		<option name="">South Africa</option>	
		<option name="">Spain</option>	
		<option name="">Sri Lanka</option>	
		<option name="">Sudan</option>	
		<option name="">South Sudan</option>	
		<option name="">Suriname</option>	
		<option name="">Eswatini</option>	
		<option name="">Sweden</option>	
		<option name="">Switzerland</option>	
		<option name="">Syria</option>	
		<option name="">Taiwan</option>	
		<option name="">Tajikistan</option>	
		<option name="">Tanzania</option>	
		<option name="">Thailand</option>	
		<option name="">Tibet</option>	
		<option name="">Timor-Leste</option>	
		<option name="">Togo</option>	
		<option name="">Tokelau</option>	
		<option name="">Tonga</option>	
		<option name="">Trinidad and Tobago</option>	
		<option name="">Tristan da Cunha</option>	
		<option name="">Tunisia</option>	
		<option name="">Turkey</option>	
		<option name="">Turkmenistan</option>	
		<option name="">Turks and Caicos Islands</option>	
		<option name="">Tuvalu</option>	
		<option name="">Uganda</option>	
		<option name="">Ukraine</option>	
		<option name="">United Arab Emirates</option>	
		<option name="">United Kingdom</option>	
		<option name="">United States</option>	
		<option name="">Over-the-air</option>	
		<option name="">Cable and satellite</option>	
		<option name="">Defunct</option>	
		<option name="">United States Virgin Islands</option>	
		<option name="">Uruguay</option>	
		<option name="">Uzbekistan</option>	
		<option name="">Vanuatu</option>	
		<option name="">Vatican City</option>	
		<option name="">Venezuela</option>	
		<option name="">Vietnam</option>	
		<option name="">Wake Island</option>	
		<option name="">Wallis and Futuna</option>	
		<option name="">Western Sahara</option>	
		<option name="">Yemen</option>	
		<option name="">Zambia</option>	
		<option name="">Zanzibar</option>	
		<option name="">Zimbabwe</option>	
	  <option name="" selected>Country of Production</option>	
	</select>
		
    <!-- <button type="submit" class="btn">Login</button> -->
	<label for="audio-ad-image" id="audio-ad-image-label"><b>Audio Ad Image here(optional)</b></label>
	<input type="file" name="audio-ad-image" id="audio-ad-image" class="custom-file-input-audio-ad-image audio-ad-image" enctype="multipart/form-data">
	<label for="ps-privacy" id="ps-privacy-label"><b>Privacy Mode</b></label>
	<select id="ps-privacy" class="ps-privacy">
	 <option name="private" id="private">Private</option>
     <option name="public" id="public">Public</option>
	</select>
    <button type="button" class="btn cancel" id="cancel" value="#" onclick="CloseMain(0)">Done</button>
    <button type="button" class="btn done" id="done" value="#" onclick="CloseMain2(0)">Done</button>
    <button type="button" class="btn cancel" id="next" value="#" onclick="Next(0)">Next</button>
    <button type="button" class="btn step-back-by-1" id="step-back-by-1" value="%" onclick="Previous()">Previous</button>
  </form>
</div>



<!-- <button class="open-button-21" id="open-button-21" onclick="openForm12(1)">Open Form</button> -->
<!-- <button class="open-button" value="" id="open-button" onclick="openForm('p')">Previous Form</button>
<button class="open-next-button" value="" id="open-next-button" onclick="selectAds()">Next Form</button>
 -->
<div class="form-popup-21" id="myForm-21">
  <span class="close-form-popup-21" id="close-form-popup-21" onclick="CloseForm(document.getElementById('myForm-21'), document.forms['myForm-21'], 1)">&times;</span>
  <form action=""  name="myForm-21" class="form-container">
    <h1 class="ps_info" id="ps_info">Product/Service Info</h1>

    <label for="email-21"><b>Email</b></label>
    <input class="email-21" id="email-21" type="text" placeholder="Enter Email" name="email-21" required>

    <label for="tel-21"><b>Telephone</b></label>
    <input class="tel-21" id="tel-21" type="tel" placeholder="Enter Telephone No." name="tel-21" required>

    <label for="psl-21"><b>Product/Service Location</b></label>
    <input class="psl-21" id="psl-21" type="text" placeholder="Enter Product/Service Location" name="psl-21" required>

    <label for="apb-21"><b>Approved by</b></label>
    <input class="apb-21" id="apb-21" type="text" placeholder="Approved by which Authority/Agency" name="apb-21" required>

    <label for="psd-21"><b>Product/Service Description</b></label>
    <textarea class="psd-21" id="psd-21" style="height:200px" placeholder="Product/Service Description" name="psd-21" required></textarea>

    <label for="pscd-21"><b>Product/Service Commencement Date</b></label>
    <input class="pscd-21" id="pscd-21" type="text" placeholder="Product/Service Commencement Date" name="pscd-21" required>

    <label for="psed-21"><b>Product/Service Elapsing Date</b></label>
    <input class="psed-21" id="psed-21" type="text" placeholder="Product/Service Elapsing Date" name="psed-21" required>

    <label for="pss-21"><b>Product/Service Commencement Time</b></label>
    <input class="pss-21" id="pss-21" type="text" placeholder="Product/Service Commencement Time" name="pss-21" required>

    <label for="pset-21"><b>Product/Service Elapsing Time</b></label>
    <input class="pset-21" id="pset-21" type="text" placeholder="Product/Service Elapsing Time" name="pset-21" required>

    <label for="pscompany-21"><b>Product/Service Company</b></label>
    <input class="pscompany-21" id="pscompany-21" type="text" placeholder="Product/Service Company" name="pscompany-21" required>

    <label for="pscountry-21"><b>Country of Production</b></label>
    <select class="pscountry-21" id="pscountry-21" name="pscountry-21" required>
		<option name="">Åland Islands</option>	
		<option name="">Afghanistan</option>	
		<option name="">Albania</option>	
		<option name="">Algeria</option>	
		<option name="">American Samoa</option>	
		<option name="">Andorra</option>	
		<option name="">Angola</option>	
		<option name="">Anguilla</option>	
		<option name="">Antigua and Barbuda</option>	
		<option name="">Argentina</option>	
		<option name="">Armenia</option>	
		<option name="">Aruba</option>	
		<option name="">Australia</option>	
		<option name="">Austria</option>	
		<option name="">Azerbaijan</option>	
		<option name="">Bahamas</option>	
		<option name="">Bahrain</option>	
		<option name="">Bangladesh</option>	
		<option name="">Barbados</option>	
		<option name="">Belarus</option>	
		<option name="">Belgium</option>	
		<option name="">Belize</option>	
		<option name="">Benin</option>	
		<option name="">Bermuda</option>	
		<option name="">Bhutan</option>	
		<option name="">Bolivia</option>	
		<option name="">Bonaire</option>	
		<option name="">Bosnia and Herzegovina</option>	
		<option name="">Botswana</option>	
		<option name="">Brazil</option>	
		<option name="">British Indian Ocean Territory</option>	
		<option name="">British Virgin Islands</option>	
		<option name="">Brunei</option>	
		<option name="">Bulgaria</option>	
		<option name="">Burkina Faso</option>	
		<option name="">Burundi</option>	
		<option name="">Cambodia</option>	
		<option name="">Cameroon</option>	
		<option name="">Canada</option>	
		<option name="">Cape Verde</option>	
		<option name="">Cayman Islands</option>	
		<option name="">Central African Republic</option>	
		<option name="">Chad</option>	
		<option name="">Chile</option>	
		<option name="">China</option>	
		<option name="">Colombia</option>	
		<option name="">Comoros</option>	
		<option name="">Democratic Republic of the Congo</option>	
		<option name="">Republic of the Congo</option>	
		<option name="">Cook Islands</option>	
		<option name="">Costa Rica</option>	
		<option name="">Croatia</option>	
		<option name="">Cuba</option>	
		<option name="">Curaçao</option>	
		<option name="">Cyprus</option>	
		<option name="">Czech Republic</option>	
		<option name="">Denmark</option>	
		<option name="">Djibouti</option>	
		<option name="">Dominica</option>	
		<option name="">Dominican Republic</option>	
		<option name="">Ecuador</option>	
		<option name="">Egypt</option>	
		<option name="">El Salvador</option>	
		<option name="">Equatorial Guinea</option>	
		<option name="">Eritrea</option>	
		<option name="">Estonia</option>	
		<option name="">Ethiopia</option>	
		<option name="">Falkland Islands</option>	
		<option name="">Faroe Islands</option>	
		<option name="">Fiji</option>	
		<option name="">Finland</option>	
		<option name="">France</option>	
		<option name="">French Guiana</option>	
		<option name="">French Polynesia</option>	
		<option name="">French Southern and Antarctic Lands</option>	
		<option name="">Gabon</option>	
		<option name="">Gambia</option>	
		<option name="">Georgia</option>	
		<option name="">Germany</option>	
		<option name="">Ghana</option>	
		<option name="">Gibraltar</option>	
		<option name="">Greece</option>	
		<option name="">Greenland</option>	
		<option name="">Grenada</option>	
		<option name="">Guadeloupe</option>	
		<option name="">Guam</option>	
		<option name="">Guatemala</option>	
		<option name="">Guinea</option>	
		<option name="">Guinea-Bissau</option>	
		<option name="">Guyana</option>	
		<option name="">Haiti</option>	
		<option name="">Honduras</option>	
		<option name="">Hong Kong</option>	
		<option name="">Hungary</option>	
		<option name="">Iceland</option>	
		<option name="">India</option>	
		<option name="">Indonesia</option>	
		<option name="">Iran</option>	
		<option name="">Iraq</option>	
		<option name="">Ireland</option>	
		<option name="">Israel</option>	
		<option name="">Italy</option>	
		<option name="">Ivory Coast</option>	
		<option name="">Jamaica</option>	
		<option name="">Japan</option>	
		<option name="">Jordan</option>	
		<option name="">Kazakhstan</option>	
		<option name="">Kenya</option>	
		<option name="">Kiribati</option>	
		<option name="">North Korea</option>	
		<option name="">South Korea</option>	
		<option name="">Kosovo</option>	
		<option name="">Kurdistan</option>	
		<option name="">Kuwait</option>	
		<option name="">Kyrgyzstan</option>	
		<option name="">Laos</option>	
		<option name="">Latvia</option>	
		<option name="">Lebanon</option>	
		<option name="">Lesotho</option>	
		<option name="">Liberia</option>	
		<option name="">Libya</option>	
		<option name="">Liechtenstein</option>	
		<option name="">Lithuania</option>	
		<option name="">Luxembourg</option>	
		<option name="">North Macedonia</option>	
		<option name="">Macau</option>	
		<option name="">Premium channels</option>	
		<option name="">Madagascar</option>	
		<option name="">Malawi</option>	
		<option name="">Malaysia</option>	
		<option name="">Maldives</option>	
		<option name="">Mali</option>	
		<option name="">Malta</option>	
		<option name="">Marquesas Islands</option>	
		<option name="">Marshall Islands</option>	
		<option name="">Martinique</option>	
		<option name="">Mauritania</option>	
		<option name="">Mauritius</option>	
		<option name="">Mayotte</option>	
		<option name="">Mexico</option>	
		<option name="">Over-the-air</option>	
		<option name="">National TV Broadcast</option>	
		<option name="">Federated States of Micronesia</option>	
		<option name="">Midway Islands</option>	
		<option name="">Moldova</option>	
		<option name="">Monaco</option>	
		<option name="">Mongolia</option>	
		<option name="">Montenegro</option>	
		<option name="">Montserrat</option>	
		<option name="">Morocco</option>	
		<option name="">Mozambique</option>	
		<option name="">Myanmar</option>	
		<option name="">Namibia</option>	
		<option name="">Nepal</option>	
		<option name="">Netherlands</option>	
		<option name="">Netherlands Antilles</option>	
		<option name="">New Caledonia</option>	
		<option name="">New Zealand</option>	
		<option name="">Nicaragua</option>	
		<option name="">National channels</option>	
		<option name="">Local channels</option>	
		<option name="">Niger</option>	
		<option name="">Nigeria</option>	
		<option name="">Niue</option>	
		<option name="">Northern Mariana Islands</option>	
		<option name="">Norway</option>	
		<option name="">Oman</option>	
		<option name="">Pakistan</option>	
		<option name="">Palau</option>	
		<option name="">Palestine</option>	
		<option name="">Panama</option>	
		<option name="">Papua New Guinea</option>	
		<option name="">Paraguay</option>	
		<option name="">Peru</option>	
		<option name="">Philippines</option>	
		<option name="">Government-owned networks</option>	
		<option name="">Minor television networks</option>	
		<option name="">Pitcairn Islands</option>	
		<option name="">Poland</option>	
		<option name="">Portugal</option>	
		<option name="">Puerto Rico</option>	
		<option name="">Qatar</option>	
		<option name="">Réunion</option>	
		<option name="">Romania</option>	
		<option name="">Russia </option>	
		<option name="">Rwanda</option>	
		<option name="">Saba</option>	
		<option name="">Saint Barthélemy</option>	
		<option name="">Saint Kitts and Nevis</option>	
		<option name="">Saint Lucia</option>	
		<option name="">Sint Maarten</option>	
		<option name="">Saint Pierre and Miquelon</option>	
		<option name="">Saint Vincent and the Grenadines</option>	
		<option name="">Samoa</option>	
		<option name="">San Marino</option>	
		<option name="">São Tomé and Príncipe</option>	
		<option name="">Saudi Arabia</option>	
		<option name="">Senegal</option>	
		<option name="">Serbia</option>	
		<option name="">Seychelles</option>	
		<option name="">Sierra Leone</option>	
		<option name="">Singapore</option>	
		<option name="">Sint Eustatius</option>	
		<option name="">Slovakia</option>	
		<option name="">Slovenia</option>	
		<option name="">Solomon Islands</option>	
		<option name="">Somalia</option>	
		<option name="">South Africa</option>	
		<option name="">Spain</option>	
		<option name="">Sri Lanka</option>	
		<option name="">Sudan</option>	
		<option name="">South Sudan</option>	
		<option name="">Suriname</option>	
		<option name="">Eswatini</option>	
		<option name="">Sweden</option>	
		<option name="">Switzerland</option>	
		<option name="">Syria</option>	
		<option name="">Taiwan</option>	
		<option name="">Tajikistan</option>	
		<option name="">Tanzania</option>	
		<option name="">Thailand</option>	
		<option name="">Tibet</option>	
		<option name="">Timor-Leste</option>	
		<option name="">Togo</option>	
		<option name="">Tokelau</option>	
		<option name="">Tonga</option>	
		<option name="">Trinidad and Tobago</option>	
		<option name="">Tristan da Cunha</option>	
		<option name="">Tunisia</option>	
		<option name="">Turkey</option>	
		<option name="">Turkmenistan</option>	
		<option name="">Turks and Caicos Islands</option>	
		<option name="">Tuvalu</option>	
		<option name="">Uganda</option>	
		<option name="">Ukraine</option>	
		<option name="">United Arab Emirates</option>	
		<option name="">United Kingdom</option>	
		<option name="">United States</option>	
		<option name="">Over-the-air</option>	
		<option name="">Cable and satellite</option>	
		<option name="">Defunct</option>	
		<option name="">United States Virgin Islands</option>	
		<option name="">Uruguay</option>	
		<option name="">Uzbekistan</option>	
		<option name="">Vanuatu</option>	
		<option name="">Vatican City</option>	
		<option name="">Venezuela</option>	
		<option name="">Vietnam</option>	
		<option name="">Wake Island</option>	
		<option name="">Wallis and Futuna</option>	
		<option name="">Western Sahara</option>	
		<option name="">Yemen</option>	
		<option name="">Zambia</option>	
		<option name="">Zanzibar</option>	
		<option name="">Zimbabwe</option>	
	  <option name="" selected>Country of Production</option>	
	</select>
		
    <!-- <button type="submit" class="btn">Login</button> -->
	<label for="audio-ad-image" id="audio-ad-image-label"><b>Audio Ad Image here(optional)</b></label>
	<input type="file" name="audio-ad-image" id="audio-ad-image-21" class="custom-file-input-audio-ad-image audio-ad-image" enctype="multipart/form-data">
	<label for="ps-privacy-21" id="ps-privacy-label-21"><b>Privacy Mode</b></label>
	<select id="ps-privacy-21" class="ps-privacy-21">
	 <option name="private" id="private">Private</option>
     <option name="public" id="public">Public</option>
	</select>
    <button type="button" class="btn cancel" id="cancel-21" value="#" onclick="CloseMain(1)">Done</button>
    <button type="button" class="btn done" id="done-21" value="#" onclick="CloseMain2(1)">Done</button>
    <button type="button" class="btn cancel" id="next-21" value="#" onclick="Next(1)">Next</button>
    <button type="button" class="btn step-back-by-1" id="step-back-by-21" value="%" onclick="Previous(1)">Previous</button>
  </form>
</div>



<button class="open-button-2" id="open-button-2" onclick="openForm_2()">Open Form</button>

<!-- <div class="form-2-container" id="form-2-container"> -->
<div class="form-popup-2" id="myForm-2">
  <span class="close-form-popup-2" id="close-form-popup-2" onclick="closeForm_entirely()">&times;</span>
  <form action="" class="form-container-2">
   
    <h1>Actor's Details</h1>

    <label for=""><b>First Name :  </b></label>
    <input type="text" placeholder="Enter First Name" name="fname" class="fname" id="fname" required>   

    <label for=""><b>Middle Name [optional] :  </b></label>
    <input type="text" placeholder="Enter Middle Name" name="mname" class="mname" id="mname" required>  

    <label for=""><b>Last Name :  </b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" class="lname" id="lname" required>  

    <label for=""><b>Profession :  </b></label>
    <input type="text" placeholder="Enter Profession" name="profession" class="profession" id="profession" required>  

    <label for=""><b>Private Tel [optional] :  </b></label>
    <input type="tel" placeholder="Enter Private Telephone no." class="ptel" id="ptel" name="ptel"> 

    <label for=""><b>Public Tel [optional] :  </b></label>
    <input type="tel" placeholder="Enter Public Telephone no." class="putel" id="putel" name="putel">  

    <label for=""><b>WhatsApp No. [optional] :  </b></label>
    <input type="tel" placeholder="Enter WhatsApp no." class="wtel" id="wtel" name="wtel">

    <label for=""><b>Business E-mail [optional] :  </b></label>
    <input type="email" placeholder="Enter Business E-mail" class="bemail" id="bemail" name="bemail">

    <label for=""><b>Private/Personal E-mail [optional] :  </b></label>
    <input type="email" placeholder="Enter Personal E-mail" class="pemail" id="pemail" name="pemail"> 
	
    <label for=""><b>Facebook Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Facebook Handle" class="fb_handle" id="fb_handle" name="fb_handle">  	

    <label for=""><b>Twitter Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Twitter Handle" class="tw_handle" id="tw_handle" name="tw_handle"> 

    <label for=""><b>Instagram Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Instagram Handle" class="ins_handle" id="ins_handle" name="ins_handle"> 

    <label for=""><b>Youtube Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Youtube Handle" class="you_handle" id="you_handle" name="you_handle"> 

    <label for=""><b>Website Domain [optional] :  </b></label>
    <input type="url" placeholder="Enter Website Domain " class="web_handle" id="web_handle" name="web_domain"> 
	
    <label for="agpd"><b>Actor's Story</b></label>
    <textarea style="height:200px" placeholder="Actor's Story" class="agpd" id="agpd" name="agpd" required></textarea>

    <label for=""><b>Country of Birth :  </b></label>
    <select name="country" class="country" id="country"> 
		<option name="">Åland Islands</option>	
		<option name="">Afghanistan</option>	
		<option name="">Albania</option>	
		<option name="">Algeria</option>	
		<option name="">American Samoa</option>	
		<option name="">Andorra</option>	
		<option name="">Angola</option>	
		<option name="">Anguilla</option>	
		<option name="">Antigua and Barbuda</option>	
		<option name="">Argentina</option>	
		<option name="">Armenia</option>	
		<option name="">Aruba</option>	
		<option name="">Australia</option>	
		<option name="">Austria</option>	
		<option name="">Azerbaijan</option>	
		<option name="">Bahamas</option>	
		<option name="">Bahrain</option>	
		<option name="">Bangladesh</option>	
		<option name="">Barbados</option>	
		<option name="">Belarus</option>	
		<option name="">Belgium</option>	
		<option name="">Belize</option>	
		<option name="">Benin</option>	
		<option name="">Bermuda</option>	
		<option name="">Bhutan</option>	
		<option name="">Bolivia</option>	
		<option name="">Bonaire</option>	
		<option name="">Bosnia and Herzegovina</option>	
		<option name="">Botswana</option>	
		<option name="">Brazil</option>	
		<option name="">British Indian Ocean Territory</option>	
		<option name="">British Virgin Islands</option>	
		<option name="">Brunei</option>	
		<option name="">Bulgaria</option>	
		<option name="">Burkina Faso</option>	
		<option name="">Burundi</option>	
		<option name="">Cambodia</option>	
		<option name="">Cameroon</option>	
		<option name="">Canada</option>	
		<option name="">Cape Verde</option>	
		<option name="">Cayman Islands</option>	
		<option name="">Central African Republic</option>	
		<option name="">Chad</option>	
		<option name="">Chile</option>	
		<option name="">China</option>	
		<option name="">Colombia</option>	
		<option name="">Comoros</option>	
		<option name="">Democratic Republic of the Congo</option>	
		<option name="">Republic of the Congo</option>	
		<option name="">Cook Islands</option>	
		<option name="">Costa Rica</option>	
		<option name="">Croatia</option>	
		<option name="">Cuba</option>	
		<option name="">Curaçao</option>	
		<option name="">Cyprus</option>	
		<option name="">Czech Republic</option>	
		<option name="">Denmark</option>	
		<option name="">Djibouti</option>	
		<option name="">Dominica</option>	
		<option name="">Dominican Republic</option>	
		<option name="">Ecuador</option>	
		<option name="">Egypt</option>	
		<option name="">El Salvador</option>	
		<option name="">Equatorial Guinea</option>	
		<option name="">Eritrea</option>	
		<option name="">Estonia</option>	
		<option name="">Ethiopia</option>	
		<option name="">Falkland Islands</option>	
		<option name="">Faroe Islands</option>	
		<option name="">Fiji</option>	
		<option name="">Finland</option>	
		<option name="">France</option>	
		<option name="">French Guiana</option>	
		<option name="">French Polynesia</option>	
		<option name="">French Southern and Antarctic Lands</option>	
		<option name="">Gabon</option>	
		<option name="">Gambia</option>	
		<option name="">Georgia</option>	
		<option name="">Germany</option>	
		<option name="">Ghana</option>	
		<option name="">Gibraltar</option>	
		<option name="">Greece</option>	
		<option name="">Greenland</option>	
		<option name="">Grenada</option>	
		<option name="">Guadeloupe</option>	
		<option name="">Guam</option>	
		<option name="">Guatemala</option>	
		<option name="">Guinea</option>	
		<option name="">Guinea-Bissau</option>	
		<option name="">Guyana</option>	
		<option name="">Haiti</option>	
		<option name="">Honduras</option>	
		<option name="">Hong Kong</option>	
		<option name="">Hungary</option>	
		<option name="">Iceland</option>	
		<option name="">India</option>	
		<option name="">Indonesia</option>	
		<option name="">Iran</option>	
		<option name="">Iraq</option>	
		<option name="">Ireland</option>	
		<option name="">Israel</option>	
		<option name="">Italy</option>	
		<option name="">Ivory Coast</option>	
		<option name="">Jamaica</option>	
		<option name="">Japan</option>	
		<option name="">Jordan</option>	
		<option name="">Kenya</option>	
		<option name="">Kazakhstan</option>	
		<option name="">Kiribati</option>	
		<option name="">North Korea</option>	
		<option name="">South Korea</option>	
		<option name="">Kosovo</option>	
		<option name="">Kurdistan</option>	
		<option name="">Kuwait</option>	
		<option name="">Kyrgyzstan</option>	
		<option name="">Laos</option>	
		<option name="">Latvia</option>	
		<option name="">Lebanon</option>	
		<option name="">Lesotho</option>	
		<option name="">Liberia</option>	
		<option name="">Libya</option>	
		<option name="">Liechtenstein</option>	
		<option name="">Lithuania</option>	
		<option name="">Luxembourg</option>	
		<option name="">North Macedonia</option>	
		<option name="">Macau</option>	
		<option name="">Premium channels</option>	
		<option name="">Madagascar</option>	
		<option name="">Malawi</option>	
		<option name="">Malaysia</option>	
		<option name="">Maldives</option>	
		<option name="">Mali</option>	
		<option name="">Malta</option>	
		<option name="">Marquesas Islands</option>	
		<option name="">Marshall Islands</option>	
		<option name="">Martinique</option>	
		<option name="">Mauritania</option>	
		<option name="">Mauritius</option>	
		<option name="">Mayotte</option>	
		<option name="">Mexico</option>	
		<option name="">Over-the-air</option>	
		<option name="">National TV Broadcast</option>	
		<option name="">Federated States of Micronesia</option>	
		<option name="">Midway Islands</option>	
		<option name="">Moldova</option>	
		<option name="">Monaco</option>	
		<option name="">Mongolia</option>	
		<option name="">Montenegro</option>	
		<option name="">Montserrat</option>	
		<option name="">Morocco</option>	
		<option name="">Mozambique</option>	
		<option name="">Myanmar</option>	
		<option name="">Namibia</option>	
		<option name="">Nepal</option>	
		<option name="">Netherlands</option>	
		<option name="">Netherlands Antilles</option>	
		<option name="">New Caledonia</option>	
		<option name="">New Zealand</option>	
		<option name="">Nicaragua</option>	
		<option name="">National channels</option>	
		<option name="">Local channels</option>	
		<option name="">Niger</option>	
		<option name="">Nigeria</option>	
		<option name="">Niue</option>	
		<option name="">Northern Mariana Islands</option>	
		<option name="">Norway</option>	
		<option name="">Oman</option>	
		<option name="">Pakistan</option>	
		<option name="">Palau</option>	
		<option name="">Palestine</option>	
		<option name="">Panama</option>	
		<option name="">Papua New Guinea</option>	
		<option name="">Paraguay</option>	
		<option name="">Peru</option>	
		<option name="">Philippines</option>	
		<option name="">Government-owned networks</option>	
		<option name="">Minor television networks</option>	
		<option name="">Pitcairn Islands</option>	
		<option name="">Poland</option>	
		<option name="">Portugal</option>	
		<option name="">Puerto Rico</option>	
		<option name="">Qatar</option>	
		<option name="">Réunion</option>	
		<option name="">Romania</option>	
		<option name="">Russia </option>	
		<option name="">Rwanda</option>	
		<option name="">Saba</option>	
		<option name="">Saint Barthélemy</option>	
		<option name="">Saint Kitts and Nevis</option>	
		<option name="">Saint Lucia</option>	
		<option name="">Sint Maarten</option>	
		<option name="">Saint Pierre and Miquelon</option>	
		<option name="">Saint Vincent and the Grenadines</option>	
		<option name="">Samoa</option>	
		<option name="">San Marino</option>	
		<option name="">São Tomé and Príncipe</option>	
		<option name="">Saudi Arabia</option>	
		<option name="">Senegal</option>	
		<option name="">Serbia</option>	
		<option name="">Seychelles</option>	
		<option name="">Sierra Leone</option>	
		<option name="">Singapore</option>	
		<option name="">Sint Eustatius</option>	
		<option name="">Slovakia</option>	
		<option name="">Slovenia</option>	
		<option name="">Solomon Islands</option>	
		<option name="">Somalia</option>	
		<option name="">South Africa</option>	
		<option name="">Spain</option>	
		<option name="">Sri Lanka</option>	
		<option name="">Sudan</option>	
		<option name="">South Sudan</option>	
		<option name="">Suriname</option>	
		<option name="">Eswatini</option>	
		<option name="">Sweden</option>	
		<option name="">Switzerland</option>	
		<option name="">Syria</option>	
		<option name="">Taiwan</option>	
		<option name="">Tajikistan</option>	
		<option name="">Tanzania</option>	
		<option name="">Thailand</option>	
		<option name="">Tibet</option>	
		<option name="">Timor-Leste</option>	
		<option name="">Togo</option>	
		<option name="">Tokelau</option>	
		<option name="">Tonga</option>	
		<option name="">Trinidad and Tobago</option>	
		<option name="">Tristan da Cunha</option>	
		<option name="">Tunisia</option>	
		<option name="">Turkey</option>	
		<option name="">Turkmenistan</option>	
		<option name="">Turks and Caicos Islands</option>	
		<option name="">Tuvalu</option>	
		<option name="">Uganda</option>	
		<option name="">Ukraine</option>	
		<option name="">United Arab Emirates</option>	
		<option name="">United Kingdom</option>	
		<option name="">United States</option>	
		<option name="">Over-the-air</option>	
		<option name="">Cable and satellite</option>	
		<option name="">Defunct</option>	
		<option name="">United States Virgin Islands</option>	
		<option name="">Uruguay</option>	
		<option name="">Uzbekistan</option>	
		<option name="">Vanuatu</option>	
		<option name="">Vatican City</option>	
		<option name="">Venezuela</option>	
		<option name="">Vietnam</option>	
		<option name="">Wake Island</option>	
		<option name="">Wallis and Futuna</option>	
		<option name="">Western Sahara</option>	
		<option name="">Yemen</option>	
		<option name="">Zambia</option>	
		<option name="">Zanzibar</option>	
		<option name="">Zimbabwe</option>	
	  <option name="" selected>Select a country</option>
	</select>

    <button type="button" class="btn cancel-2" id="cancel-2" onclick="closeForm_2()" value="1">Done</button>
    <button type="button" class="btn update-ad-actor-infos" id="update-ad-actor-infos" onclick="updateAdInfos(0)" value="2">Update</button>
   
  </form>
</div>
<!-- </div> -->

<button class="open-company-registration-button-2" id="open-company-registration-button-2" onclick="openForm_company_registration_2()">Open Form</button>

<div class="form-company-registration-popup-2" id="myForm-company-registration-2">
  <span class="close-form-company-registration-popup-2" id="close-form-company-registration-popup-2" onclick="closeForm_company_registration_entirely()">&times;</span>
  <form action="" class="form-company-registration-container-2">
   
    <h1>Company's Details</h1>

    <label for=""><b>Institution Name :  </b></label>
    <input type="text" placeholder="Enter Institution Name" name="iname-company-registration" class="iname-company-registration" id="iname-company-registration" required>   

    <label for=""><b>Proprietor's EIN :  </b></label>
    <input type="text" placeholder="Enter Proprietor's EIN" class="ein-company-registration" id="ein-company-registration" name="ein-company-registration"> 

    <label for=""><b>Proprietor's TIN :  </b></label>
    <input type="text" placeholder="Enter Proprietor's TIN" class="tin-company-registration" id="tin-company-registration" name="tin-company-registration"> 

    <label for=""><b>Company's Activity :  </b></label>
    <!-- <input type="text" placeholder="Enter Profession" name="profession-company-registration" class="profession-company-registration" id="profession-company-registration" required>   -->
    <select name="activity-company-registration" class="activity-company-registration" id="activity-company-registration"> 
       <option selected>Select Your Company's Activity :</option>
	   <option name="">Mechnanic</option>
	   <option name="">Electronic</option>
	   <option name="">Tech</option>
	   <option name="">Agriculture</option>
	   <option name="">Health</option>
	   <option name="">Electronic</option>
	   <option name="">Real Estate</option>
	   <option name="">Education</option>
	   <option name="">Resort</option>
	   <option name="">Painting</option>
	   <option name="">Music</option>
	   <option name="">Art</option>
	   <option name="">Beverage</option>
	   <option name="">Mineral Water</option>
	   <option name="">Restaurant</option>
	   <option name="">Fashion</option>
	   <option name="">Modelling</option>
	   <option name="">Cosmetics</option>
	   <option name="">News Graphics</option>
	   <option name="">Religion</option>
	</select>    
	
    <label for=""><b>Private Tel Line [optional] :  </b></label>
    <input type="tel" placeholder="Enter Private Telephone no." class="ptel-company-registration" id="ptel-company-registration" name="ptel-company-registration"> 

    <label for=""><b>Public Tel Line :  </b></label>
    <input type="tel" placeholder="Enter Public Telephone no." class="putel-company-registration" id="putel-company-registration" name="putel-company-registration">  

    <label for=""><b>WhatsApp Line [optional] :  </b></label>
    <input type="tel" placeholder="Enter WhatsApp no." class="wtel" id="wtel-company-registration" name="wtel-company-registration">

    <label for=""><b>Business E-mail :  </b></label>
    <input type="email" placeholder="Enter Business E-mail" class="bemail-company-registration" id="bemail-company-registration" name="bemail-company-registration">

    <label for=""><b>Private/Personal E-mail [optional] :  </b></label>
    <input type="email" placeholder="Enter Personal E-mail" class="pemail-company-registration" id="pemail-company-registration" name="pemail-company-registration"> 
	
    <label for=""><b>Facebook Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Facebook Handle" class="fb_handle-company-registration" id="fb_handle-company-registration" name="fb_handle-company-registration">  	

    <label for=""><b>Twitter Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Twitter Handle" class="tw_handle-company-registration" id="tw_handle-company-registration" name="tw_handle-company-registration"> 

    <label for=""><b>Instagram Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Instagram Handle" class="ins_handle-company-registration" id="ins_handle-company-registration" name="ins_handle-company-registration"> 

    <label for=""><b>Youtube Handle [optional] :  </b></label>
    <input type="text" placeholder="Enter Youtube Handle" class="you_handle-company-registration" id="you_handle-company-registration" name="you_handle-company-registration"> 

    <label for=""><b>Website Domain [optional] :  </b></label>
    <input type="url" placeholder="Enter Website Domain " class="web_handle-company-registration" id="web_handle-company-registration" name="web_domain-company-registration"> 
	
    <label for="agpd-registration"><b>Company's Story</b></label>
    <textarea style="height:200px" placeholder="Company's Story" class="agpd-company-registration" id="agpd-company-registration" name="agpd-company-registration" required></textarea>

    <label for=""><b>Company Location :  </b></label>
    <input type="text" placeholder="Enter Company Location" class="location-company-registration" id="location-company-registration" name="location-company-registration"> 

    <label for=""><b>Country of Company Registration :  </b></label>
    <select name="country-company-registration" class="country-company-registration" id="country-company-registration"> 
		<option name="">Åland Islands</option>	
		<option name="">Afghanistan</option>	
		<option name="">Albania</option>	
		<option name="">Algeria</option>	
		<option name="">American Samoa</option>	
		<option name="">Andorra</option>	
		<option name="">Angola</option>	
		<option name="">Anguilla</option>	
		<option name="">Antigua and Barbuda</option>	
		<option name="">Argentina</option>	
		<option name="">Armenia</option>	
		<option name="">Aruba</option>	
		<option name="">Australia</option>	
		<option name="">Austria</option>	
		<option name="">Azerbaijan</option>	
		<option name="">Bahamas</option>	
		<option name="">Bahrain</option>	
		<option name="">Bangladesh</option>	
		<option name="">Barbados</option>	
		<option name="">Belarus</option>	
		<option name="">Belgium</option>	
		<option name="">Belize</option>	
		<option name="">Benin</option>	
		<option name="">Bermuda</option>	
		<option name="">Bhutan</option>	
		<option name="">Bolivia</option>	
		<option name="">Bonaire</option>	
		<option name="">Bosnia and Herzegovina</option>	
		<option name="">Botswana</option>	
		<option name="">Brazil</option>	
		<option name="">British Indian Ocean Territory</option>	
		<option name="">British Virgin Islands</option>	
		<option name="">Brunei</option>	
		<option name="">Bulgaria</option>	
		<option name="">Burkina Faso</option>	
		<option name="">Burundi</option>	
		<option name="">Cambodia</option>	
		<option name="">Cameroon</option>	
		<option name="">Canada</option>	
		<option name="">Cape Verde</option>	
		<option name="">Cayman Islands</option>	
		<option name="">Central African Republic</option>	
		<option name="">Chad</option>	
		<option name="">Chile</option>	
		<option name="">China</option>	
		<option name="">Colombia</option>	
		<option name="">Comoros</option>	
		<option name="">Democratic Republic of the Congo</option>	
		<option name="">Republic of the Congo</option>	
		<option name="">Cook Islands</option>	
		<option name="">Costa Rica</option>	
		<option name="">Croatia</option>	
		<option name="">Cuba</option>	
		<option name="">Curaçao</option>	
		<option name="">Cyprus</option>	
		<option name="">Czech Republic</option>	
		<option name="">Denmark</option>	
		<option name="">Djibouti</option>	
		<option name="">Dominica</option>	
		<option name="">Dominican Republic</option>	
		<option name="">Ecuador</option>	
		<option name="">Egypt</option>	
		<option name="">El Salvador</option>	
		<option name="">Equatorial Guinea</option>	
		<option name="">Eritrea</option>	
		<option name="">Estonia</option>	
		<option name="">Ethiopia</option>	
		<option name="">Falkland Islands</option>	
		<option name="">Faroe Islands</option>	
		<option name="">Fiji</option>	
		<option name="">Finland</option>	
		<option name="">France</option>	
		<option name="">French Guiana</option>	
		<option name="">French Polynesia</option>	
		<option name="">French Southern and Antarctic Lands</option>	
		<option name="">Gabon</option>	
		<option name="">Gambia</option>	
		<option name="">Georgia</option>	
		<option name="">Germany</option>	
		<option name="">Ghana</option>	
		<option name="">Gibraltar</option>	
		<option name="">Greece</option>	
		<option name="">Greenland</option>	
		<option name="">Grenada</option>	
		<option name="">Guadeloupe</option>	
		<option name="">Guam</option>	
		<option name="">Guatemala</option>	
		<option name="">Guinea</option>	
		<option name="">Guinea-Bissau</option>	
		<option name="">Guyana</option>	
		<option name="">Haiti</option>	
		<option name="">Honduras</option>	
		<option name="">Hong Kong</option>	
		<option name="">Hungary</option>	
		<option name="">Iceland</option>	
		<option name="">India</option>	
		<option name="">Indonesia</option>	
		<option name="">Iran</option>	
		<option name="">Iraq</option>	
		<option name="">Ireland</option>	
		<option name="">Israel</option>	
		<option name="">Italy</option>	
		<option name="">Ivory Coast</option>	
		<option name="">Jamaica</option>	
		<option name="">Japan</option>	
		<option name="">Jordan</option>	
		<option name="">Kazakhstan</option>	
		<option name="">Kenya</option>	
		<option name="">Kiribati</option>	
		<option name="">North Korea</option>	
		<option name="">South Korea</option>	
		<option name="">Kosovo</option>	
		<option name="">Kurdistan</option>	
		<option name="">Kuwait</option>	
		<option name="">Kyrgyzstan</option>	
		<option name="">Laos</option>	
		<option name="">Latvia</option>	
		<option name="">Lebanon</option>	
		<option name="">Lesotho</option>	
		<option name="">Liberia</option>	
		<option name="">Libya</option>	
		<option name="">Liechtenstein</option>	
		<option name="">Lithuania</option>	
		<option name="">Luxembourg</option>	
		<option name="">North Macedonia</option>	
		<option name="">Macau</option>	
		<option name="">Premium channels</option>	
		<option name="">Madagascar</option>	
		<option name="">Malawi</option>	
		<option name="">Malaysia</option>	
		<option name="">Maldives</option>	
		<option name="">Mali</option>	
		<option name="">Malta</option>	
		<option name="">Marquesas Islands</option>	
		<option name="">Marshall Islands</option>	
		<option name="">Martinique</option>	
		<option name="">Mauritania</option>	
		<option name="">Mauritius</option>	
		<option name="">Mayotte</option>	
		<option name="">Mexico</option>	
		<option name="">Over-the-air</option>	
		<option name="">National TV Broadcast</option>	
		<option name="">Federated States of Micronesia</option>	
		<option name="">Midway Islands</option>	
		<option name="">Moldova</option>	
		<option name="">Monaco</option>	
		<option name="">Mongolia</option>	
		<option name="">Montenegro</option>	
		<option name="">Montserrat</option>	
		<option name="">Morocco</option>	
		<option name="">Mozambique</option>	
		<option name="">Myanmar</option>	
		<option name="">Namibia</option>	
		<option name="">Nepal</option>	
		<option name="">Netherlands</option>	
		<option name="">Netherlands Antilles</option>	
		<option name="">New Caledonia</option>	
		<option name="">New Zealand</option>	
		<option name="">Nicaragua</option>	
		<option name="">National channels</option>	
		<option name="">Local channels</option>	
		<option name="">Niger</option>	
		<option name="">Nigeria</option>	
		<option name="">Niue</option>	
		<option name="">Northern Mariana Islands</option>	
		<option name="">Norway</option>	
		<option name="">Oman</option>	
		<option name="">Pakistan</option>	
		<option name="">Palau</option>	
		<option name="">Palestine</option>	
		<option name="">Panama</option>	
		<option name="">Papua New Guinea</option>	
		<option name="">Paraguay</option>	
		<option name="">Peru</option>	
		<option name="">Philippines</option>	
		<option name="">Government-owned networks</option>	
		<option name="">Minor television networks</option>	
		<option name="">Pitcairn Islands</option>	
		<option name="">Poland</option>	
		<option name="">Portugal</option>	
		<option name="">Puerto Rico</option>	
		<option name="">Qatar</option>	
		<option name="">Réunion</option>	
		<option name="">Romania</option>	
		<option name="">Russia </option>	
		<option name="">Rwanda</option>	
		<option name="">Saba</option>	
		<option name="">Saint Barthélemy</option>	
		<option name="">Saint Kitts and Nevis</option>	
		<option name="">Saint Lucia</option>	
		<option name="">Sint Maarten</option>	
		<option name="">Saint Pierre and Miquelon</option>	
		<option name="">Saint Vincent and the Grenadines</option>	
		<option name="">Samoa</option>	
		<option name="">San Marino</option>	
		<option name="">São Tomé and Príncipe</option>	
		<option name="">Saudi Arabia</option>	
		<option name="">Senegal</option>	
		<option name="">Serbia</option>	
		<option name="">Seychelles</option>	
		<option name="">Sierra Leone</option>	
		<option name="">Singapore</option>	
		<option name="">Sint Eustatius</option>	
		<option name="">Slovakia</option>	
		<option name="">Slovenia</option>	
		<option name="">Solomon Islands</option>	
		<option name="">Somalia</option>	
		<option name="">South Africa</option>	
		<option name="">Spain</option>	
		<option name="">Sri Lanka</option>	
		<option name="">Sudan</option>	
		<option name="">South Sudan</option>	
		<option name="">Suriname</option>	
		<option name="">Eswatini</option>	
		<option name="">Sweden</option>	
		<option name="">Switzerland</option>	
		<option name="">Syria</option>	
		<option name="">Taiwan</option>	
		<option name="">Tajikistan</option>	
		<option name="">Tanzania</option>	
		<option name="">Thailand</option>	
		<option name="">Tibet</option>	
		<option name="">Timor-Leste</option>	
		<option name="">Togo</option>	
		<option name="">Tokelau</option>	
		<option name="">Tonga</option>	
		<option name="">Trinidad and Tobago</option>	
		<option name="">Tristan da Cunha</option>	
		<option name="">Tunisia</option>	
		<option name="">Turkey</option>	
		<option name="">Turkmenistan</option>	
		<option name="">Turks and Caicos Islands</option>	
		<option name="">Tuvalu</option>	
		<option name="">Uganda</option>	
		<option name="">Ukraine</option>	
		<option name="">United Arab Emirates</option>	
		<option name="">United Kingdom</option>	
		<option name="">United States</option>	
		<option name="">Over-the-air</option>	
		<option name="">Cable and satellite</option>	
		<option name="">Defunct</option>	
		<option name="">United States Virgin Islands</option>	
		<option name="">Uruguay</option>	
		<option name="">Uzbekistan</option>	
		<option name="">Vanuatu</option>	
		<option name="">Vatican City</option>	
		<option name="">Venezuela</option>	
		<option name="">Vietnam</option>	
		<option name="">Wake Island</option>	
		<option name="">Wallis and Futuna</option>	
		<option name="">Western Sahara</option>	
		<option name="">Yemen</option>	
		<option name="">Zambia</option>	
		<option name="">Zanzibar</option>	
		<option name="">Zimbabwe</option>	
	  <option name="" selected>Select a country</option>
	</select>

    <label for=""><b>Company Registration Date :  </b></label>
    <input type="date" class="crd-company-registration" id="crd-company-registration" name="crd-company-registration"> 

    <button type="button" class="btn cancel-2-company-registration" id="cancel-2-company-registration" onclick="closeForm_2_company_registration()" value="1">Done</button>
    <button type="button" class="btn update-company-registration" id="update-company-registration" onclick="updateAdInfos(2)" value="2">Update</button>
   
  </form>
</div>

<div class="video-content" id="video-content">
	
	
</div>

<script type="text/javascript">
  
  let drim = window.location.href;  
  
  document.getElementById("video-ads").addEventListener("click", () => exhibitEvents(3, drim.slice(40)));
  document.getElementById("static-ads").addEventListener("click", () => exhibitEvents(5, drim.slice(40)));
  document.getElementById("audio-ads").addEventListener("click", () => exhibitEvents(14, drim.slice(40)));
  //exhibitEvents(3, drim.slice(34));
 
  document.getElementById("adv-files").addEventListener("submit", (event) => {event.preventDefault();});
  document.getElementById("upload").addEventListener("click", () => uploads(document.forms['adv-files'], drim.slice(40), 1));
  document.getElementById("uploads").addEventListener("change", () => {ads_count = 0; adsFilesLength =0;adForms = 0;selectAds(0);});
  //document.getElementById("").addEventListener("change", selectProfileImage);
  
</script>


<!-- <div style="padding-left:16px" id="resx">
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu.</p>
 <p>Hover over the dropdown button to open the dropdown menu122.</p>
</div> -->

</div>

<button class="didcy-keys-btn w3-btn" id="didcy-keys-btn" title="">Keys</button>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

 
 </main>

<script type="text/javascript">
 "use strict";
function AboutUS() {
  var x = document.getElementById("myTopnav");
  //var video1_Container = document.getElementById("video-container-1");
  //var settings = document.getElementById("identity-settings");
  
  if (x.className === "topnav") {
    x.className += " responsive";
	if(adForms == 1){
         closeAdFormEntirely();
	}
	//settings[0].style.display = "none";
	//if(video1_Container.className == "video-container-1"){
     //   video1_Container.className += " responsive";
	//}
  } else {
    x.className = "topnav";
	if(adForms == 1){
	 if(adClosure  == 1){
	   document.getElementById("open-button").style.display = "block";
	 }else{
	   document.getElementById("myForm").style.display = "block";
	 
	}
   }
	//settings[0].style.display = "block";
	//video1_Container.className += " responsive";
  }
}
</script>

<div class="cookie-accept" id="cookie-accept">
 
<div class="cookie-accept-use" id="cookie-accept-use">Didcy use cookies to make your experience of our websites better. By using and further navigating this website you accept this. More 
information about the use of cookies on this website is available by clicking on more information.</div>  

<button type="button" onclick="acceptCookies(1)" class="cookie-accept-btn" id="cookie-accept-btn">Accept</button>
</div>


<!-- 
<div class="footer" id="footer">

  <div class="column-1">

   <a alt="" href="" style="display:block;text-decoration: none">Technology</a>
   <a alt="" href="" style="display:block;text-decoration: none">Health</a>
   <a alt="" href="" style="display:block;text-decoration: none">Real Estates</a>
   <a alt="" href="" style="display:block;text-decoration: none">Resort</a>
   <a alt="" href="" style="display:block;text-decoration: none">Entertainment</a>
   <a alt="" href="" style="display:block;text-decoration: none">Electronics</a>
  </div>
  <div class="column-1">
   <a alt="" href="" style="display:block;text-decoration: none">Technology</a>
   <a alt="" href="" style="display:block;text-decoration: none">Health</a>
   <a alt="" href="" style="display:block;text-decoration: none">Real Estates</a>
   <a alt="" href="" style="display:block;text-decoration: none">Resort</a>
   <a alt="" href="" style="display:block;text-decoration: none">Entertainment</a>
   <a alt="" href="" style="display:block;text-decoration: none">Electronics</a>  
  </div>
  <div class="column-1">
   <a alt="" href="" style="display:block;text-decoration: none">Technology</a>
   <a alt="" href="" style="display:block;text-decoration: none">Health</a>
   <a alt="" href="" style="display:block;text-decoration: none">Real Estates</a>
   <a alt="" href="" style="display:block;text-decoration: none">Resort</a>
   <a alt="" href="" style="display:block;text-decoration: none">Entertainment</a>
   <a alt="" href="" style="display:block;text-decoration: none">Electronics</a>  
 </div>
  <p style="text-align: center;padding-top: 0;">Visit us @<a href="" style="color: white;text-decoration: none;text-align: center;" title="Link me back to didcx" alt="" target="_blank">https://www.didcx.com</a>. All Copy&copy; rights reserved. Terms & Conditions Applied.
  </p>
</div> -->

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
 
 <script type="text/javascript" src="adv-chat.js"></script>
 <script type="text/javascript" src="howtogaga.js"></script>
 <script type="text/javascript" src="adv-more.js"></script>
 
 <script>
 
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
//magnify("gaga-text-tutorials", 3);
<!-- magnify2("img01-1", 3); -->
//magnify("gaga-text-header", 3);
//magnify("gaga-text-header", 3);

</script>

 <script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>
 
 <script type="text/javascript" script-id="00000000000000000" src="adv-sign-server.js"></script>
 <script type="text/javascript" script-id="00000000000000000" src="adv-it.js"></script>
 
<script type="text/javascript">
let drim2 = window.location.href;
getImageFileName(document.getElementById('profile'), drim2.slice(40));//getCookieValue('GAGA_RESPONSE')); 34
</script> 

 <div class="collapsible-container" style="margin-bottom: 20px">
    <h2 class="faq" style="color: rgba(200, 0, 0, 1)">Frequestly Asked Questions</h2>
	<button class="collapsible-qa">What is Didcy?</button>
	<div class="content-qa">
	  <p>Didcy is a space provider. Is a platform that provides spaces in the form of individual platforms for almost all kinds of 
	  digital activities to take place. Didcy provides spaces(platforms) for digital activities such as selling &amp; buying, 
	  clouding/storing files, exhibiting webapps for users to use and many more.</p>
	</div>
	<button class="collapsible-qa">Why use Didcy?</button>
	<div class="content-qa">
	  <p>Because we got everything under one roof. We got the platform(spaces), team, tools, network/market and <b><i>YOU</i></b>. All you need to do is to <b><i>JUST START DIDCYING WITH US</i></b>. </p>
	  <p><b><i>JUST FOCUS. AND REMEMBER, IT'S ALL <span style="color:red">FREEEEEEEE.</span> No fees. No Charges. Just FREEEEEEE.</i></b>. </p>
	</div>
	<button class="collapsible-qa">How do I get started?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Find</b> to find out more.</p>	</div>
	<button class="collapsible-qa">What can I do with Didcy?</button>
	<div class="content-qa">
	  <p>A lot. Just Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Find</b> to find out more.</p>
	</div>
	<button class="collapsible-qa">Can I sell on Didcy?</button>
	<div class="content-qa">
	  <p>Yes, <b>CHAMP</b> but currently unavailabile. Only Books selling will be made available soon. 
	  Selling of other products and services will also be made availabile soon but may take a while.</p>
	</div>
	<button class="collapsible-qa">Where can I start selling?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Trade</b> and following the process but currently unavailabile. Only Books selling will be made available soon. 
	  Selling of other products and services will also be made availabile soon but may take a while.</p>
	</div>
	<button class="collapsible-qa">Can I buy on Didcy?</button>
	<div class="content-qa">
	  <p>Yes, <b>CHAMP</b> but currently unavailabile. Only Books buying will be made available soon. 
	  Buying of other products and services will also be made availabile soon but may take a while.</p>
	</div>
	<button class="collapsible-qa">Where can I start buying?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Trade</b> and following the process but currently unavailabile. Only Books selling will be made available soon. 
	  Selling of other products and services will also be made availabile soon but may take a while.</p>
	</div>
	<button class="collapsible-qa">Can I sell my books?</button>
	<div class="content-qa">
	  <p>Selling of Books is currently unavailabile but will be made availabile very much sooner.</p>
	</div>
	<button class="collapsible-qa">Where can I start selling my books?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Books</b>. Currently unavailabile but will be made availabile very much sooner.</p>
	</div>
	<button class="collapsible-qa">Can I buy books?</button>
	<div class="content-qa">
	  <p>Yes, <b>CHAMP</b> but currently unavailabile. Will be made available soon.</p>
	</div>
	<button class="collapsible-qa">Where can I start buying books?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Books</b>. Currently unavailabile but will be made availabile very much sooner.</p>
	</div>
	<button class="collapsible-qa">How much does it cost to use Didcy?</button>
	<div class="content-qa">
	  <p>$0.</p>
	</div>
	<button class="collapsible-qa">Is it true that Didcy is free to use? No fees. No Charges. Just Freeeeee.</button>
	<div class="content-qa">
	  <p>Yes.</p>
	</div>
	<button class="collapsible-qa">When can I start using Didcy?</button>
	<div class="content-qa">
	  <p>Right now.</p>
	</div>
	<button class="collapsible-qa">Where can I start from?</button>
	<div class="content-qa">
	  <p>Start from Didcy Find(Tutorials). Choose format type : video, audio, text or image. <br>
	  Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Find</b> or watch Didcy Tutorial down the page by scrolling. </p>
	</div>
	<button class="collapsible-qa">Who is the CEO of Didcy?</button>
	<div class="content-qa">
	  <p>David Ansong</p>
	</div>
	<button class="collapsible-qa">Who is the Founder of Didcy?</button>
	<div class="content-qa">
	  <p>David Ansong</p>
	</div>
	<button class="collapsible-qa">When will Didcy open it's unavailable features?</button>
	<div class="content-qa">
	  <p>Very soon.</p>
	</div>
	<button class="collapsible-qa">I am an Ad creator or designer and wants to keep my creatives safe on your Cloud MyAds system to prevent future failures or power outages on my workstation? How can I upload/cloud my assets(ads)?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Upload</b> to find out more.</p>
	</div>
	<button class="collapsible-qa">We are a company and we wants to keep our company's creatives safe on your Cloud MyAds system to prevent future failures or power outages on our workstations? How can we upload/cloud our assets(ads)?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Upload</b> to find out more</p>	</div>
	<button class="collapsible-qa">How can I pull back my assets(ads) from your Cloud MyAds System when needed?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Upload</b> to find out more</p>	</div>
	<button class="collapsible-qa">How can we pull back our assets(ads) from your Cloud MyAds System when needed?</button>
	<div class="content-qa">
	  <p>Go to the Top Navigation bar <b>&rarr;</b> <img src="adv.icons/3631153.png" width="50px" alt="Services"/> <b>&rarr;</b> <img width="50px" src="adv.icons/2377884.png" alt="Menu"/> <b>&rarr;</b> <b>Didcy Transparent</b> 
	  <b>&rarr;</b> <b>Didcy Upload</b> to find out more</p>	</div>
  </div>  

<div class="in-div" id="in-div"></div>

<div id="adv-ft" class="adv-ft">
  Visit us @ <a href="https://www.didcy.com" style="text-decoration:none" alt="Didcy Visit" title="Didcy Visit" target="_self" ping="">https://www.didcy.com</a>. All Copy&copy; rights reserved. Terms &amp; Conditions Applied.
</div>

<!-- Disabling this feature for future build. Thank you. -->
<script type="text/javascript" src="adv-notification.js"></script>
<script type="text/javascript" src="adv-about-profiles.js"></script>
<script type="text/javascript" src="adv-reach-show.js"></script>
<script type="text/javascript" src="adv-subscription-tutorials.js"></script>
<script type="text/javascript" src="adv-paid-servies.payment.platform.sign.js"></script>
<script type="text/javascript" src="adv-animated-image.js"></script>
<script type="text/javascript" src="adv-about.bt.js"></script>
<script type="text/javascript" src="adv-books.js"></script>
<script type="text/javascript" src="adv-alert-boxes.js"></script>
<script type="text/javascript" src="adv-impact.js"></script>
<script type="text/javascript" src="adv-about.js"></script>
<script type="text/javascript" src="adv-subscription.newsletter.js"></script>
<script src="build/js/intlTelInput.js"></script>
<script type="text/javascript" src="adv-exhibiton-platforms.js"></script>
<script type="text/javascript" src="work.js"></script>

<!-- <script type="text/javascript" src="adv-check.device.height.js"></script> -->
<!--<script type="text/javascript" src="adv-scale-split-create-ads.js"></script>-->
<!--<script type="text/javascript" src="adv-scale-split-create-ads-real-2.js"></script>-->
<script type="text/javascript" src="adv-retrieve.js"></script>
<script type="text/javascript" src="adv-rater.js"></script>
<script type="text/javascript" src="adv-create-ads.js"></script>
<script type="text/javascript" src="adv-draggable.js"></script>
<script type="text/javascript" src="adv-coursery-playground.js"></script>
<script type="text/javascript" src="plug.js"></script>
<script type="text/javascript" src="adv-custom-video-controls.js"></script>
<script type="text/javascript" src="audio.js"></script>
<script src="audiplay.js"></script>
<script type="text/javascript" src="adv-collapsible.js"></script>
<script type="text/javascript" src="adv-testimonials.js"></script>
<script type="text/javascript" src="adv-features.js"></script>
<script type="text/javascript" src="adv-video-features.js"></script>

</body>
</html>
