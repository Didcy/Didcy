"use strict";

var nlo = 0, $pops = 0;

var nloStream = {
	u: "",
	e: "",   
	s: "",   
	c: ""
};

   var newsletterOption = {
	 email: document.getElementById("email"),   
	 sms: document.getElementById("sms"),   
	 call: document.getElementById("call"),   
	 all: document.getElementById("all"),   
   };
 
 var $randomizer = "";
 
let didcx_random_number_generator = function(min, max){
				return Math.floor(Math.random() * (max - min)) + min;
}

function randomizChars(){
   var randContainer = "", randomChars = ['A', 'B', 'C', 'D', 'E', 'F', 'G',' H', 'I', 'J', 'K', 
   'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '@', '#', '$', '&', 
   '?'];
   for(var ran = 0;ran < randomChars.length;ran++){
	  $randomizer = didcx_random_number_generator(0, 100);
	  randContainer += randomChars[didcx_random_number_generator(0, randomChars.length-1)] + 
	  $randomizer.toString();
   }
   return randContainer;
}

function NewsletterOptions(){
   var newsletterOptions = document.getElementsByClassName("newsletter-options")[0].value;
  
   if(newsletterOptions == "Email"){
	 newsletterOption.email.style.display = "block";
	 newsletterOption.sms.style.display = "none"; 
	 newsletterOption.call.style.display = "none";
     nlo = 1;	 
   }else if(newsletterOptions == "SMS"){
	 newsletterOption.sms.style.display = "block"; 
	 newsletterOption.email.style.display = "none";
	 newsletterOption.call.style.display = "none";
     nlo = 2;
   }else if(newsletterOptions == "Call"){
	 newsletterOption.call.style.display = "block"; 
	 newsletterOption.sms.style.display = "none"; 
	 newsletterOption.email.style.display = "none";	
	 nlo = 3;	 
   }else if(newsletterOptions == "All"){
	 newsletterOption.email.style.display = "block"; 
	 newsletterOption.sms.style.display = "block"; 
	 newsletterOption.call.style.display = "block"; 
	 nlo = 4;
   }else{
	 newsletterOption.email.style.display = "none"; 
	 newsletterOption.sms.style.display = "none"; 
	 newsletterOption.call.style.display = "none";
	 nlo = 0;
   }
}

function CheckOptions(nlo){
  switch(nlo){
	case 0:
	 nloStream.e = "";
	 nloStream.s = "";
	 nloStream.c = "";
	 return "Please select at least one messaging channel";
	break;
	case 1:
	  nloStream.e = newsletterOption.email.value;
	  if(nloStream.e == ""){
		return "Email is required";
	  }
	break;
	case 2:
	  nloStream.s = newsletterOption.sms.value;
	  if(nloStream.s == ""){
		return "SMS No. is required";
	  }	
	break;
	case 3:
	  nloStream.c = newsletterOption.call.value;
	  if(nloStream.c == ""){
		return "Telephone No. is required";
	  }	
	break;
	case 4:
	 nloStream.e = newsletterOption.email.value;
	 nloStream.s = newsletterOption.sms.value;
	 nloStream.c = newsletterOption.call.value;
	 
	  if(nloStream.e == ""){
		return "Email is required";
	  }
	  if(nloStream.s == ""){
		return "SMS No. is required";
	  }
	  if(nloStream.c == ""){
		return "Telephone No. is required";
	  }	  
	break;
	default: 
	 return;
  }
    return "Success";
}

function SubmitNewsletterOptions(nlo){
  nloStream.u = document.getElementsByClassName("newsletter-options-name")[0].value;
  if(nloStream.u == ""){
	return window.alert("Name is required");
  }
  
  var checkOp = CheckOptions(nlo);
  if(checkOp != "Success"){
	return window.alert(checkOp);
  }
  var $randomize = randomizChars();
  var form = new FormData();
  form.append("nlo", nlo);
  form.append("randomize", $randomize);
  form.append("nloStream", JSON.stringify([nloStream]));
  $.ajax({
	type: "POST",
	url: "coming.soon.php",
	contentType: false,
	cache: false,
	processData: false,
	data: form,
	success: function(result){
	  window.console.log(result);
	  var data_returned = JSON.parse(result);
	  if(data_returned.state == 404){
		 return window.alert("User already exists");
	  }
	  window.console.log(data_returned.nlo_data);
	},
	error: function(){
		
	}
  });
}


function CloseNLO(){
   document.getElementsByClassName('content')[0].style.display="none";
}

function CloseContacts(){
   document.getElementById("id012").style.display = "none";
   document.getElementById("open-newsletter").style.display="block";
}

function OpenNewsletter($pops = 0){
   document.getElementsByClassName('content')[0].style.display="block";
   document.getElementById("open-newsletter").style.display="none";	
	setTimeout(function(){
	   modal.style.display = "block";
	}, 5000);
setTimeout(function(){
   document.getElementById("id012").style.display = "block";
   $pops = 1;
}, 7000);
}


// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

setTimeout(function(){
   OpenNewsletter($pops);
}, 2000);

/*setTimeout(function(){
   modal.style.display = "block";
}, 5000);

setTimeout(function(){
   document.getElementById("id012").style.display = "block";
}, 10000);*/

document.getElementById("newsletter-options-f").addEventListener("submit", 
(event) => event.preventDefault());

document.getElementsByClassName("newsletter-options")[0].addEventListener("change", 
NewsletterOptions);

document.getElementsByClassName("submit-newsletter-options")[0].addEventListener("click", 
() => SubmitNewsletterOptions(nlo));

document.getElementsByClassName("close-content")[0].addEventListener("click", 
CloseNLO);

