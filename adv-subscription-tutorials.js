"use strict";

var textTutorialsHowToSubscribe = document.getElementsByClassName("didcy-how-to-subscribe-1")[0];

var modalSubscribe2 = document.getElementsByClassName("modal-subscribe-2")[0];
var spanSubscribe2 = document.getElementsByClassName("close-subscribe-2")[0];

textTutorialsHowToSubscribe.onclick = function(){
			var textTutorialContainer = document.createElement("div");
			let textTutorialH3 = document.createElement("h3");
			
			let textTutorialHeader3 = document.createElement("h3");
			
			const textTutorialH3Text = document.createTextNode("Brought to you by Didcy Learn");
			const textTutorialHeader3Text = document.createTextNode("How to Subscribe");
			
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
			
			
			textTutorialContainer.setAttribute("class", "modal-content-subscribe-2");
			textTutorialContainer.setAttribute("id", "text-tutorial");
			textTutorialContainer.setAttribute("style", "background-color: black");
			//textTutorialContainer.setAttribute("style", "position: relative");
			//textTutorialContainer.setAttribute("style", "width: 100%");
			textTutorialContainer.append(textTutorialH3);
			textTutorialContainer.append(textTutorialHeader3);
			textTutorialContainer.append(textTutorialP);
			
			textTutorialP.innerHTML = "Welcome to Didcy.com, the place  where all actors, groups, companies and ads are closely monitored and "+
		 "provided with the best of all our essential product and services. Didcy makes it much easier to do business"+
		 " efficiently for the first time in the last decades."+ 
		 "<br> Didcy has provided it's members with a much more simpler way of navigating through it's intiutive, unmatched"+ 
		 " and comprehensive ad platform. Didcy is basically an <q>ad platform with the core mission of servicing"+ 
		 " any entity related to ads most especially connectivity between the ad actor & related business. </q>"+ 
		 "With Didcy, a member needs only a laptop, internet access and a web browser with the appropriate directions/URL to our platform."+ 
		 " <q>Didcy is a web-based advert connectivity platform.</q> <br/>Alert!!! Please always check the URL in your web browser to confirm if the URL matches"+ 
		 " https://www.didcy.com. Thank you."+ 
		 "<br>		 <br/>This is how to subsribe to Didcy.com if you have an account or you are new to our platform. <br>These are steps to show you how to subscribe: ."+  
		 "<br/>Let's jump right into it. "+ 
		 "<br><br><strong><u class='insiders'>Step 1:</u></strong> Get your computer(laptop, desktop, tablet or a mobile device), connect it to the internet, open your web browser (eg. Google Chrome) and enter inside the URL : "+ 
		 "<em><a href='index.php' alt='' title='Didcy Home' target='_blank'>https://www.didcy.com.</a></em>"+ 
		 "<br><br><strong><u>Step 2:</u></strong> If you are new on our platform,to be"+  " able to subscribe you have to sign up for a Didcy account"+ 
		 "<br><br><strong><u>Step 3:</u></strong> To do that, press on the sign up or  sign in button at the top right corner of the sign up or in page."+ 
		 "<br><br><strong><u>Step 4:</u></strong> Fill in the Sign Up or Sign In information."+ 
		 "<br><br><strong><u>Step 5:</u></strong> Press on the sign up or sign in "+ 
		 "button to sign up or sign in if you've filled the necessary  information needed."+
		 "<br><br><strong><u>Step 6:</u></strong> Hover on the Services button in the top navigation bar right after you've signed up or in. Under the Services dropdown, you'll find two dropdown buttons, namely 'Audio/Radio' button and the 'More' button. Click on the 'More' button. A Modal box with a black background would popup, then click on the 'Didcy Include' button. After clicking on the 'Didcy Include' button, click on the 'Pricing' button. You'll see 'Didcy Web' and 'Didcy Stand' buttons right after clicking on the 'Pricing' button. Click on any of the two 'Pricing buttons' to subscribe to any of Didcy Web or Stand services."+
		 "<br><br><strong><u>Step 7:</u></strong> Click on any of the Sign Up buttons to subscribe to any of Didcy Subscription packages, ranging from it's <q>BASIC</q> Services to it's <q>PREMIUM</q> Services."+
		 "<br><br><strong><u>Step 8:</u></strong> Click on any of the Payment Methods after you've clicked on any of the Sign up under any of the subscription packages."+
		 "<br><br><strong><u>Step 9:</u></strong> Type in the necessary information needed to process your payment right after you've selected any of the Payment Methods."+
		 "<br><strong>"+ 
                 "<br>THANK YOU FOR JOINING DIDCY. "+ 
				 "<br>Hope thie was helpful."+ 
			  "<br><!--Yes|No.-->"+ 
		 "</strong>";
			
			textTutorialP.style.fontFamily = "sans-serif, arial, verdana";
			//textTutorialP.style.fontSize = "20px";
			
			var myModal = document.getElementById("myModal-subscribe-2");
			var imgChild = document.getElementById("img01-subscribe-2");
			myModal.insertBefore(textTutorialContainer, imgChild);
			imgChild.style.display = "none";
			myModal.style.zIndex = "21";
			myModal.style.display = "block";
			imgChild.value = "1";
			document.getElementById("caption-subscribe-2").innerHTML = "Didcy Text Tutorials";	
}

spanSubscribe2.onclick = function(){
	var imgChild = document.getElementById("img01-subscribe-2");
	modalSubscribe2.style.display = "none";
	if(imgChild.value == '1'){
	  modalSubscribe2.removeChild(document.getElementById("text-tutorial"));		
	}else if(imgChild.value == '3'){
	  modalSubscribe2.removeChild(document.getElementById("video-tutorial-subscribe-2"));
	}
	imgChild.style.display = "none";
	imgChild.value = '0';
}

document.getElementById("img-tutorial-1-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-1-subscribe");});
document.getElementById("img-tutorial-2-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-2-subscribe");});
document.getElementById("img-tutorial-3-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-3-subscribe");});
document.getElementById("img-tutorial-4-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-4-subscribe");});
document.getElementById("img-tutorial-5-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-5-subscribe");});
document.getElementById("img-tutorial-6-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-6-subscribe");});
document.getElementById("img-tutorial-7-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-7-subscribe");});
document.getElementById("img-tutorial-8-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-8-subscribe");});
document.getElementById("img-tutorial-9-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-9-subscribe");});
document.getElementById("img-tutorial-10-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-10-subscribe");});
document.getElementById("img-tutorial-11-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-11-subscribe");});
document.getElementById("img-tutorial-12-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-12-subscribe");});
document.getElementById("img-tutorial-13-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-13-subscribe");});
document.getElementById("img-tutorial-13-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-13-subscribe");});
document.getElementById("img-tutorial-14-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-14-subscribe");});
document.getElementById("img-tutorial-15-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-15-subscribe");});
document.getElementById("img-tutorial-16-subscribe").addEventListener("click", () => {howToSubscribe2("img-tutorial-16-subscribe");});

document.getElementById("video-tutorial-1-subscribe").addEventListener("click", () => {howToSubscribe2("video-tutorial-1-subscribe");});
document.getElementById("video-tutorial-2-subscribe").addEventListener("click", () => {howToSubscribe2("video-tutorial-2-subscribe");});
document.getElementById("video-tutorial-3-subscribe").addEventListener("click", () => {howToSubscribe2("video-tutorial-3-subscribe");});
document.getElementById("video-tutorial-4-subscribe").addEventListener("click", () => {howToSubscribe2("video-tutorial-4-subscribe");});
document.getElementById("video-tutorial-5-subscribe").addEventListener("click", () => {howToSubscribe2("video-tutorial-5-subscribe");});

function howToSubscribe2($imageId = ""){
	var myModal = document.getElementById("myModal-subscribe-2");
	var imgChild = document.getElementById("img01-subscribe-2");
	let caption1 = document.getElementById("caption-subscribe-2");
	if($imageId[0] == 'i'){
		imgChild.style.display = "block";
		imgChild.src = document.getElementById($imageId).src;
		caption1.innerHTML = "Didcy Image Tutorials";
		imgChild.value = "2";
	}else{
		var videoTutorials = document.createElement("video");
		videoTutorials.setAttribute("class", "modal-content-subscribe-2");
		videoTutorials.setAttribute("id", "video-tutorial-subscribe-2");
		videoTutorials.setAttribute("controls", "true");
		videoTutorials.setAttribute("src", document.getElementById($imageId).src);
		myModal.insertBefore(videoTutorials, imgChild);
		imgChild.style.display = "none";
		caption1.innerHTML = "Didcy Video Tutorials";
		imgChild.value = "3";
	}
        myModal.style.zIndex = "21";
		myModal.style.display = "block";
}
