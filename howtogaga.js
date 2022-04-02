"use strict";

var textTutorials = document.getElementById("add-more-1");

textTutorials.onclick = function(){
			var textTutorialContainer = document.createElement("div");
			let textTutorialH3 = document.createElement("h3");
			
			let textTutorialHeader3 = document.createElement("h3");
			
			const textTutorialH3Text = document.createTextNode("Brought to you by Didcy Learn");
			const textTutorialHeader3Text = document.createTextNode("How to Didcy");
			
			let textTutorialP = document.createElement("p");
			
			const pText = "";  
			const textTutorialPText = document.createTextNode(pText);
			
			textTutorialH3.append(textTutorialH3Text);
			textTutorialHeader3.append(textTutorialHeader3Text);
			textTutorialP.append(textTutorialPText);
			
			textTutorialH3.setAttribute("color", "white");
			textTutorialH3.setAttribute("class", "gaga-text-header-2");
			textTutorialH3.setAttribute("id", "gaga-text-header-2");
			
			textTutorialHeader3.setAttribute("class", "how-to-didcy-2");
			textTutorialHeader3.setAttribute("id", "how-to-didcy-2");
			textTutorialHeader3.setAttribute("style", "color: white;font-family: sans-serif, arial, verdana");
			
			//textTutorialH3.setAttribute("style", "font-famil: Arial, Helvetica, sans-serif");
			textTutorialP.setAttribute("style", "font-family: sans-serif, arial, verdana;color:white");
			textTutorialP.setAttribute("class", "gaga-text-tutorials-21");
			textTutorialP.setAttribute("id", "gaga-text-tutorials-21");
		
			//textTutorialP.setAttribute("style", "font-famil: Arial, Helvetica, sans-serif");
			
			
			textTutorialContainer.setAttribute("class", "modal-content-1");
			textTutorialContainer.setAttribute("id", "text-tutorial");
			textTutorialContainer.setAttribute("style", "background-color: black");
			//textTutorialContainer.setAttribute("style", "position: relative");
			//textTutorialContainer.setAttribute("style", "width: 100%");
			textTutorialContainer.append(textTutorialH3);
			textTutorialContainer.append(textTutorialHeader3);
			textTutorialContainer.append(textTutorialP);
			
			textTutorialP.innerHTML = "Welcome to Didcy.com, the place  where all actors(that is, ad actors or actors involved in ad acting.), groups, companies and ads are closely monitored and "+
		 "provided with the best of all our essential product and services. Didcy makes it much easier to do business"+
		 " efficiently for the first time in the last decades."+ 
		 "<br> Didcy has provided it's members with a much more simpler way of navigating through it's intiutive, unmatched"+ 
		 " and comprehensive ad platform. Didcy is basically an <q>ad platform with the core mission of servicing"+ 
		 " any entity related to ads most especially connectivity between the ad actor & related business. </q>"+ 
		 "With Didcy, a member needs only a laptop, internet access and a web browser with the appropriate directions/URL to our platform."+ 
		 " <q>Didcy is a web-based advert connectivity platform.</q> <br/>Alert!!! Please always check the URL in your web browser to confirm if the URL matches"+ 
		 " https://www.didcy.com. Thank you."+ 
		 "<br>The following steps gives comprehensive details about how to use didcy.com."+  
		 "<br/>Let's jump right into it. "+ 
		 "<br><br><strong><u class='insiders'>Step 1:</u></strong> Get your computer(laptop, desktop, tablet or a mobile device), connect it to the internet, open your web browser (eg. Google Chrome) and enter inside the URL : "+ 
		 "<em><a href='https://www.didcy.com' alt='' title='Didcy Home' target='_blank' ping=''>https://www.didcy.com.</a></em>"+ 
		 "<br><br><strong><u class='insiders'>Step 2:</u></strong> Didcy will kindly ask you to <q>Please select a page content</q>. This feature was introduce to make our user decide"+ 
		 "on whether or not to show any content on the page at all and also make the user choose what content on our platform he/she"+  
		 "would want to be shown."+ 
		 "<br/><br/><strong><u class='insiders'>Step 3:</u></strong> Explore the platform to see what suits your needs either as an actor(eg. ad), group(s) or company."+ 
		 "<br><br><strong><u class='insiders'>Step 4:</u></strong> <br><mark style='font-family: sans-serif, arial, verdana' class='insiders'>"+ 
		 "Exploration Agenda</mark><br><b style='font-family: sans-serif, arial, verdana' class='insiders'>Under Top Navigation Area(The long horizontal rectangular box with a black background"+
		 " in  the middle and red colors at the tips)</b>"+ 
		 "<br><br><b><i style='font-family: sans-serif, arial, verdana' class='insiders'>Industry <img  class='iconic' src='adv.icons/3256216.png'/>:</i></b><br>"+ 
		 "Didcy Industry categorizes all ad related products & services, actors & companies into distinct types of industries"+ 
		" so that navigation becomes much easier and specific. Didcy Industry is a long roll of table-like containers containing industrial names "+ 
		"for user preferred selections. Egs: Mechanics, Electronics, All(this tells Didcy to present all industries to the user "+ 
		"in one piece(NB:// <em>[NO SPECIFIC SELECTIONS]</em>))."+ 
		"<br><br/><b><i style='font-family: sans-serif, arial, verdana' class='insiders'>Services <img src='adv.icons/3631153.png' width='40px'/>: </i></b><br>"+ 
		"We all love services especially if there are always more to be served by just one platform."+ 
		"<br>Here, Didcy makes it work like magic giving it's members the needed services of their daily hustle or dreams."+ 
		"<br>Under Didcy Services navigation dropdown button, you can see two dropdowns,"+ 
		"<br>1. Audio/Radio Services <img width='40px' src='adv.icons/3167693.png'/>& "+ 
		"<br>2. More Services. <img width='40px' src='adv.icons/2377884.png'/>"+ 
		"<br>These two buttons are at the heart of the platform esp. the <q>More Services</q>."+ 
		"<br>Among the two buttons, one(Audio/Radio) is currently not available for functioning."+ 
		"<br>Hence nothing much can be said about it untill it's functionality is successfully available."+ 
		"<br><mark>More Services</mark> on the otherhand, as the name goes, provides more services to its "+ 
		"users. It's a well constructed worth of packed tools for making our users' industry more vibrant."+
        "<br/><strong><mark>Services: </mark></strong><img src='adv.icons/3631153.png' width='40px'/> <br><strong><mark>a: Audio/Radio</mark></strong><img src='adv.icons/3167693.png' width='40px'/>: [N/A].<br/> <strong><mark> b: More</strong></mark><img src='adv.icons/2377884.png' width='40px'/>: The 'More services' helps organize all Didcy "+
        "most essential tools. Under the 'More Services', you can find tools like Didcy React, Didcy Business and more."+
         "<br>Our Terms & Conditions can also be found under the 'More services' together with 'How to Didcy'."+
         "<br>Normally, you'll find the Terms & Conditions at the bottom of a page with the exception of fewer platforms like"+
         " social media platforms, here at Didcy, we use the same approach but instead it's located under "+
		 "'More Services'."+
		 "<br/>Tools provided under the 'More Services' agenda : "+
		 "<ol>"+
         "<li style='color: white'>Didcy Loans</li>"+
         "<li style='color: white'>Didcy Include</li>"+
         "<li style='color: white'>Didcy Analyse</li>"+
         "<li style='color: white'>Didcy Focus</li>"+
         "<li style='color: white'>Didcy Meet</li></li>"+
         "<li style='color: white'>Didcy Share</li>"+
         "<li style='color: white'>Didcy Rate</li>"+
         "<li style='color: white'>Didcy Find?</li>"+
         "<li style='color: white'>Didcy us?</li>"+
         "<li style='color: white'>Didcy Business</li>"+
         "<li style='color: white'>Didcy React</li>"+
         "<li style='color: white'>Didcy List</li>"+
         "<li style='color: white'>Didcy Exhibit</li>"+
         "<li style='color: white'>Didcy Records</li>"+
         "<li style='color: white'>Didcy Awards</li>"+
         "<li style='color: white'>Didcy Books</li>"+
         "<li style='color: white'>Didcy Relate</li>"+
         "<li style='color: white'>Didcy Trade</li>"+
         "<li style='color: white'>Didcy Brands</li>"+
         "<li style='color: white'>Didcy Shoot</li>"+
         "<li style='color: white'>Didcy Sales</li>"+
         "<li style='color: white'>Didcy Course</li>"+
         "<li style='color: white'>Didcy Apply</li>"+
         "<li style='color: white'>Didcy Transparent</li>"+
		 "</ol>"+
		 "		<b><i>Hence, the <q>More Services</q> is a toolkit or set or "+"collection of Didcy defined tools for solving 99.99% of all "+
		 "advertising problems.</i></b>"+ 
		"<h2 style='color: white'><b>The following data gives a detailed insight "+ "of each feature presented under the <q>More Services</q> toolset or "+"collections.</b></h2>"+
		"<h3>Features as follows: </h3>"+		
		"<ol type='a'>"+
		 "<li style='color: white'>"+
		  " Didcy Include : This feature makes it possible to make Didcy"+ " Subscriptions, sign up for Didcy Newletters, check notifications "+"and more. "+
		  " Didcy Include is <strong>purposely designed to handle "+
		   "payment services</strong> with a little bit of external news "+"services."+		   
		  " This feature comes bundled with meta or built-in features inorder"+ 
		  " to have a smooth and successful payment platform."+ 
		  " Didcy Include on it own does not make up the payment platform but"+" rather it is a carrier of those payment markups."+
		   " Didcy Include features includes"+
		   "<ol type='1'>"+
		    "<li style='color: white'>Pricing</li>"+
		    "<li style='color: white'>Newletters</li>"+
		    "<li style='color: white'>Notification</li>"+
		    "<li style='color: white'>Reach</li>"+
		    "<li style='color: white'>Payments</li>"+
		    "<li style='color: white'>Refund Request</li>"+
		   "<li style='color: white'>S-Records and</li>"+
		    "<li style='color: white'>How to Subscribe</li>"+
		   "</ol>"+
		   "This and future upcoming tools make up the Didcy Include toolset."+
		   "		   <h5>Please note, most of the above services(features) are still in developmental stage or are"+ 
		   " currently being developed for your own great experience on our platform, so that's why what "+
		   " you see displayed here are all not exposed under the <b>MENU</b> toolkit.    "+
		   " Some are ready for shippment or deployment but we think you deserve more than our current builds."+
		   " So we're currently perfecting all finished products just for you. <em><b>Because we look to perfect "+
		   " the unperfection.</b></em> "+
		   " We displayed the unfinished products and services here because we want to keep you always in the "+
		   " loop or updated at all time.    "+
		   " <br>"+
		   " <br>"+
		   " <b>Didcy Exhibit</b> : This feature is one of the many tools we consider as a master piece of our work."+
		   " This master piece(feature) is purposely crafted to help you (our users) offer and find all kinds of advertising deals"+
		   " from local advertising to international advertising, from text to video advertising, from "+
		   " solo to corporate advertising, from radio to tv advertising, from physical to online advertising"+
		   " and so on."+
           " Exhibit comes bundled into two most important part. These includes:"+
           " <ol type='1'>"+
			" <li><b>Offer deals</b> : This unique feature is designed to assist businesses offer all kinds of suitable and negotiable"+
			" advertizing deals. It provides a business or a dealer a piece of offering deal form to fill, so that it can be "+
			" exhibit at Find Deals where advertizers all over the world come to take on interesting advertising "+
			" deal offers.	"+
			" </li>"+
			" <li><b>Find deals</b> : This feature is purposely created to help advertisers find advertising deals exhibited "+
			" by businesses or solo businesses through <q><b>OFFER DEALS</b></q>.	"+
			" </li>"+
           " </ol>		   "+
			" Please kindly follow the guide to find out how this features really works."+
			" <br>"+
			" <b><u>It works like this : </u></b><br>	"+
			" Let say, I've an ad which I need a media company to advertize. As we all know, the traditional or conventional"+
			" way is to find a media company by searching through all kinds of platforms or places"+
			" to find the right one that suits your requirements and most of all your <q><b style='color: dodgerblue'>BUDGET</b></q>.	"+
			" We all know this system of finding or searching provides you with something at least if not to your expectations."+
		    " But we also know that this search system is tiresome or can take time or even days or months and even "+
			" years to even get us to what we really want if we even get what we want. We as a company think "+
			" this method is good but not in a fruitful, productive and creative way mostly in time management.		"+
			" We as a company knows that there are so many and yet to come innovative technologies which can help a "+
			" business automate or take care of this process but with certain limitations.	"+
			" Limitations such as specific tasks like AudioGo for running audio ads <b>only</b> online.	"+
			" These programs also charges a fee right on the onset. That is, you pay as you upload your ads being it audio "+
			" or whatever to that platform like AudioGo. Chargeable fee on those platforms depends on so many things."+
			" Eg. like the number of ads you want to upload and even file type being it mp3 or others.			"+
			" Exhibit does not really automate or go running your ads on certain likehood places and not certainly "+
			" perform specific task or run specific or accept specific ads as well. But instead it is a place where "+
			" business advertising deals are exhibited or showcased to the public or masses for any advertizers "+
			" to value and accept if interested. It is a <q><b>STOCK MARKET FOR ADS</b></q> similar to the <q><b>STOCK MARKET FOR COMPANIES</b></q>. <em><b><q>IT IS : OFFER | FIND | NEGOTIATE | ACCEPT | TRANSACT | ADVERTISE (OFNATA)</q>.</b></em> "+
			" Once your advertising deal(s) has being selected and accepted to be advertised by an advertising media company or a solo advertiser based on"+ 
			" your deal requirements and also once it has being advertised by the advertising company or solo advertiser, then "+
			" the deal(s) is/are closed and removed from our platform for the next deal to take place."+
		    " <b>NB://</b> The deal involves another process called <em><b><q>TRANSACTION</q></b></em>. "+
			" This only comes into play once the deal(s) is/are closed and payments and file(s)(that is, your ad files(text, audio, image, video, etc)) transactions are required(or transacted/transferred) to push the deal(s) to the next level."+
			" Didcy Exhibit charges a fee on each transaction made. Exhibit charges at most <b style='color: slateblue'>4%</b> on each transaction made."+
			" In short, Didcy Exhibit is like an exhibition venue where all products and services are exhibited for the right match or deal."+
			" <b>NB://</b> Best deals comes with best prices. Best negotiations comes with best minds."+
			" Kindly explore this feature into depth and enjoy what you find. "+
			" <b><strong>EXPLORE IS THE KEY TO ENJOY. USE IT, DEAL IT.</strong></b>"+
			" <br>"+
			" <br>"+
            " <b>Didcy Rate</b> : Rate helps us know how you think and feel about our products and services."+
            " <b><i>SO RATE NOW TO SEE THE MAGIC IN DIDCY</i></b>.	"+
		    " <br>"+
		    " <br>"+
			" <b>Didcy Course</b> : We all love courses, especially if it's free and most importantly targeted to "+
			" our interest. Didcy course aim to achieve that for all it's users. Both businesses and individuals."+
			" Yeah, we mentioned businesses. Why don't you think businesses needs more learning? 	"+
			" Are you in the 19<sup>th</sup> century or what? We are in the 21<sup>th</sup> and your business or "+
			" your worth is not valuable or is worthless if you don't keep learning every single day."+
			" That's why, we as a company created <b><i>DIDCY COURSE</i></b>, to help businesses and individuals learn more and know "+
			" more about their industries and the future ahead and also to increase their value in the market place.	"+
			" Remember that there are two competitions, the older version of you or your business which is the insider"+ 
			" competition and the external competitions(that is, other businesses or individuals)."+
			" And the only great place to start is <b>Didcy Course</b>. <b><i style='color: dodgerblue'>START NOW AND GROW YOUR WORTH</i></b>. "+
			" Starting for <b>FREE</b> for the <b><i>first six(6)</i></b> months and at <b>only &dollar;5</b> per course after the free period."+
			" We offer a refund if you think you can't continue with the course or feel like you're not getting "+
			" worth your money. "+
			" NB:// Worth does not depend on the course, it depends on your application of the course or knowledge.	"+	
			" Knowledge without application is the same as <b>NO KNOWLEDGE</b> at all.	"+
			" <b>LEARN MORE, GROW MORE</b>. 		"+
			" <br>"+
			" <br>"+
			" <b>Didcy Find</b> : Find helps all Didcy users learn and know more about the Platform. It's divided into "+
			" three(3) distinct parts. "+
			" <ol style='color: white'>"+
			"  <li>Text Tutorials</li>"+
			"  <li>Image Tutorials and </li>"+
			"  <li>Video Tutorials</li>"+
			" </ol>"+
			" As you can see, Didcy Find is a tutorial playground aimed to guide all Didcers take absolute  "+
			" control of the platform.		"+
			" <b><i>LEARN WITH FIND, BECAUSE WHAT IS BETTER THAN FIND. IF NOT FIND.</i></b>"+
			" <br>"+
			" <br>"+
			" <b>Didcy React</b> : React is powerful. Why? Because we all need something to react to."+ 
			" React reacts to anything is initiated for. Whether uploading of media materials,"+
			" Rating, Updates, Video &amp; Film productions, etc. "+
			" <b style='color: slateblue'>USE REACT NOW AND KNOW WHAT IS WORTH REACTING TO. REACT NOW, REASON NOW</b>"+
			" <br>"+
			" <br>"+
			" <b>Didcy Transparent</b> : Transperent means clear and clean. Didcy Transparent is a collection of "+
			" transparent policies designed to help our users find what they need."+
			" <br>"+
			" <br>"+
			" <b>Didcy Us</b> : Why us? Because we care. Didcy Us is great news. Why? Because it's tells you something or where something is right? Yes, of course."+
			" <b>US</b> makes it possible for our users to make a quick call or reach out to our customer service providers. "+
			" Our users can also use <b style='color: dodgerblue'>Shyly</b> to Chat Shyly, our chat-based customer service provider."+		
			" <b>Use Shyly, Know Shyly, Help Shyly, Love Shyly</b>."+
			" <b>Your No.1 Chat Problem Solver</b>."+
		  " <br><br>To find Shyly, kindly navigate to Didcy Include. Shyly can be found there. Thank you. "+
		  " <br><br>For more enquiries, kindly contact us by looking up our"+
		  " contact informations at either <q>Contacts</q><img class='iconic' src='adv.icons/870175.png'/> in the top"+
		  " navigation bar of the front page or at <q>Didcy Find</q>"+
		  " under <q>More Services</q><img class='iconic' src='adv.icons/2377884.png'/>. We will be availabile 24/7"+
		  " just to listen to only and only you."+
		  " <br><br>Thank you."+
		 "</li>"+
		 "<!-- <li style='color: white'></li> -->"+
		"</ol>";
			
			textTutorialP.style.fontFamily = "sans-serif, arial, verdana";
			//textTutorialP.style.fontSize = "20px";
			
			var myModal = document.getElementById("myModal-1");
			var imgChild = document.getElementById("img01-1");
			myModal.insertBefore(textTutorialContainer, imgChild);
			imgChild.style.display = "none";
			myModal.style.display = "block";
			imgChild.value = "1";
			document.getElementById("caption-1").innerHTML = "Didcy Text Tutorials";

			/* magnify("text-tutorial", 3); */
			//magnify("gaga-text-header-2", 3);
}

document.getElementById("img-tutorial-1").addEventListener("click", () => {howToGaGa2("img-tutorial-1");});
document.getElementById("img-tutorial-2").addEventListener("click", () => {howToGaGa2("img-tutorial-2");});
document.getElementById("img-tutorial-3").addEventListener("click", () => {howToGaGa2("img-tutorial-3");});
document.getElementById("img-tutorial-4").addEventListener("click", () => {howToGaGa2("img-tutorial-4");});
document.getElementById("img-tutorial-5").addEventListener("click", () => {howToGaGa2("img-tutorial-5");});
document.getElementById("img-tutorial-6").addEventListener("click", () => {howToGaGa2("img-tutorial-6");});
document.getElementById("img-tutorial-7").addEventListener("click", () => {howToGaGa2("img-tutorial-7");});
document.getElementById("img-tutorial-8").addEventListener("click", () => {howToGaGa2("img-tutorial-8");});
document.getElementById("img-tutorial-9").addEventListener("click", () => {howToGaGa2("img-tutorial-9");});
document.getElementById("img-tutorial-10").addEventListener("click", () => {howToGaGa2("img-tutorial-10");});
document.getElementById("img-tutorial-11").addEventListener("click", () => {howToGaGa2("img-tutorial-11");});
document.getElementById("img-tutorial-12").addEventListener("click", () => {howToGaGa2("img-tutorial-12");});
document.getElementById("img-tutorial-13").addEventListener("click", () => {howToGaGa2("img-tutorial-13");});
document.getElementById("img-tutorial-13").addEventListener("click", () => {howToGaGa2("img-tutorial-13");});
document.getElementById("img-tutorial-14").addEventListener("click", () => {howToGaGa2("img-tutorial-14");});
document.getElementById("img-tutorial-15").addEventListener("click", () => {howToGaGa2("img-tutorial-15");});
document.getElementById("img-tutorial-16").addEventListener("click", () => {howToGaGa2("img-tutorial-16");});
document.getElementById("img-tutorial-17").addEventListener("click", () => {howToGaGa2("img-tutorial-17");});
document.getElementById("img-tutorial-18").addEventListener("click", () => {howToGaGa2("img-tutorial-18");});
document.getElementById("img-tutorial-19").addEventListener("click", () => {howToGaGa2("img-tutorial-19");});
document.getElementById("img-tutorial-20").addEventListener("click", () => {howToGaGa2("img-tutorial-20");});

document.getElementById("video-tutorial-1").addEventListener("click", () => {howToGaGa2("video-tutorial-1");});
document.getElementById("video-tutorial-2").addEventListener("click", () => {howToGaGa2("video-tutorial-2");});
document.getElementById("video-tutorial-3").addEventListener("click", () => {howToGaGa2("video-tutorial-3");});
document.getElementById("video-tutorial-4").addEventListener("click", () => {howToGaGa2("video-tutorial-4");});
document.getElementById("video-tutorial-5").addEventListener("click", () => {howToGaGa2("video-tutorial-5");});

function howToGaGa2($imageId = ""){
	var myModal = document.getElementById("myModal-1");
	var imgChild = document.getElementById("img01-1");
	let caption1 = document.getElementById("caption-1");
	if($imageId[0] == 'i'){
		imgChild.src = document.getElementById($imageId).src;
/* 		imgChild.style.width = "100%";
		imgChild.style.maxWidth = "100%"; */
		caption1.innerHTML = "Didcy Image Tutorials";
		imgChild.value = "2";
	}else{
		var videoTutorials = document.createElement("video");
		videoTutorials.setAttribute("class", "modal-content-1");
		videoTutorials.setAttribute("id", "video-tutorial");
		videoTutorials.setAttribute("controls", "true");
		/* videoTutorials.setAttribute("style", "width: 100%;max-width: 100%"); */
		videoTutorials.setAttribute("src", document.getElementById($imageId).src);
		myModal.insertBefore(videoTutorials, imgChild);
		imgChild.style.display = "none";
		caption1.innerHTML = "Didcy Video Tutorials";
		imgChild.value = "3";
	}

		myModal.style.display = "block";
}
