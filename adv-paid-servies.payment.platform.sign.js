"use strict";

var versions = [

[{"TYPE":"BASIC", "PROVISION": "FREE", "CHARGEABLE_FEE": ["9.99", "0.000"], "PERIOD": "YEARLY"}], 

[{"TYPE":"PRO", "PROVISION": "PAID", "CHARGEABLE_FEE": ["24.99", "$366.99"], 
"PERIOD": "YEARLY"}], 

[{"TYPE":"PREMIUM", "PROVISION": "PAID", "CHARGEABLE_FEE": ["49.99", "1,236.00"], "PERIOD": "YEARLY"}]

];

var spanSubscribe3 = document.getElementsByClassName("close-subscribe-3")[0];
let modalSubscribe3 = document.getElementsByClassName("modal-subscribe-3")[0];
var stripePayContainer = document.getElementById("container-subscribe-3");
var stripeID = 0;
var inputs1 = [];

spanSubscribe3.onclick = function(){
	if(stripeID == 1){
 		const inputs1Len = inputs1.length;
		for(let is = 0;is < inputs1Len;is++){
		   stripePayContainer.removeChild(inputs1[is]);
		}
		stripeID = 0;
		inputs1 = [];
	}
	modalSubscribe3.style.display = "none";
}

var emptyInitiator = [];

var MoMoPay = function(){
	var MoMoPayButton = null;
}

function StripePay(){
/* 	var stripePayContainer = document.createElement("div");
	stripePayContainer.setAttribute("", "");
	stripePayContainer.setAttribute("", ""); */
	
	let stripePayFirstNameInput = document.createElement("input");
	stripePayFirstNameInput.setAttribute("type", "text");
	stripePayFirstNameInput.setAttribute("class", "inputs1  subscription-person-fname");
	stripePayFirstNameInput.setAttribute("id", "");
	stripePayFirstNameInput.setAttribute("placeholder", "First Name");

	let stripePayLastNameInput = document.createElement("input");
	stripePayLastNameInput.setAttribute("type", "text");
	stripePayLastNameInput.setAttribute("class", "inputs1  subscription-person-lname");
	stripePayLastNameInput.setAttribute("id", "");
	stripePayLastNameInput.setAttribute("placeholder", "Last Name");

	let stripePayEmailInput = document.createElement("input");
	stripePayEmailInput.setAttribute("type", "email");
	stripePayEmailInput.setAttribute("class", "inputs1");
	stripePayEmailInput.setAttribute("id", "");
	stripePayEmailInput.setAttribute("placeholder", "E-mail");

	var stripePayCardNumberInput = document.createElement("input");
	stripePayCardNumberInput.setAttribute("type", "tel");
	stripePayCardNumberInput.setAttribute("class", "inputs1");
	stripePayCardNumberInput.setAttribute("id", "cardNumber");	
	stripePayCardNumberInput.setAttribute("placeholder", "Card Number");

	var stripePaySubscribe = document.createElement("button");
	const stripePaySubscribeText = document.createTextNode("Subscribe");
	stripePaySubscribe.append(stripePaySubscribeText);
	stripePaySubscribe.setAttribute("type", "button");
	stripePaySubscribe.setAttribute("class", "inputs1");
	stripePaySubscribe.setAttribute("id", "");

    stripePayContainer.append(stripePayFirstNameInput);	
	inputs1[0] = stripePayFirstNameInput;
    stripePayContainer.append(stripePayLastNameInput);
    inputs1[1] = stripePayLastNameInput;	
    stripePayContainer.append(stripePayEmailInput);	
	inputs1[2] = stripePayEmailInput;
    stripePayContainer.append(stripePayCardNumberInput);
	inputs1[3] = stripePayCardNumberInput;	
/* 	var inputID = "#"+"cardNumber";
		
	var input = document.querySelector(inputID);
	var data = window.intlTelInput(input, {
		  // allowDropdown: false,
		  // autoHideDialCode: false,
		  // autoPlaceholder: "off",
		  // dropdownContainer: document.body,
		  // excludeCountries: ["us"],
		  // formatOnDisplay: false,
		  // geoIpLookup: function(callback) {
		  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		  //     var countryCode = (resp && resp.country) ? resp.country : "";
		  //     callback(countryCode);
		  //   });
		  // },
		  // hiddenInput: "full_number",
		  // initialCountry: "auto",
		  // localizedCountries: { 'de': 'Deutschland' },
		  // nationalMode: false,
		  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		  // placeholderNumberType: "MOBILE",
		  // preferredCountries: ['cn', 'jp'],
		  // separateDialCode: true,
		  utilsScript: "build/js/utils.js",
	}); */
    stripePayContainer.append(stripePaySubscribe);	
	inputs1[4] = stripePaySubscribe;
	document.getElementById("myModal-subscribe-3").style.zIndex = "25";
	document.getElementById("myModal-subscribe-3").style.display = "block";
	
	stripeID = 1;
}


var createPaymentSystemInitiators = (planService = "", planType = "", drim = "") => {
	
   var paymentMethods = ["Stripe", "MomoPay", "Paypal", "WesternUnion", 
   "BTC", "ZoHo", "Visa Card", "Debit Card", "Credit Card"];

  for(var init = 0; init < paymentMethods.length; init++){
	var initiator = document.createElement("button");
	const initiatorID = document.createTextNode(paymentMethods[init]);
	initiator.append(initiatorID);
	initiator.setAttribute("class", "button initiator");
	initiator.setAttribute("id", "button");
	ContainerPaymentServices.append(initiator);
	emptyInitiator[init] = initiator;
  }
  
  if(emptyInitiator.length > 0){
	 emptyInitiator[0].onclick = function(){
		 document.getElementsByClassName("plan-type")[0].innerHTML = planService + " " + planType;
		 StripePay();
	 }
	 emptyInitiator[6].onclick = function(){
		 document.getElementsByClassName("plan-type")[0].innerHTML = planService + " " + planType;
		 StripePay();
	 }
	 emptyInitiator[7].onclick = function(){
		 document.getElementsByClassName("plan-type")[0].innerHTML = planService + " " + planType;
		 StripePay();
	 }
	 emptyInitiator[8].onclick = function(){
		 document.getElementsByClassName("plan-type")[0].innerHTML = planService + " " + planType;
		 StripePay();
	 }
  }
	
}

var createPaymentSystems = (apiType = "", system_id = null, system_name = "", drim = "") => {
  switch(apiType){
   case "DIDCY-WEB-API":
   case "didcy-web-api":
	switch(system_id){
	   case 0:
	   case 1:
	   {
		  
		  createPaymentSystemInitiators("Didcy Web", "Basic", drim);
	   }
	   break;
	   case 2:
	   {
		  
		  createPaymentSystemInitiators("Didcy Web", "Pro", drim);
	   }
	   break;
	   case 3:
	   {
		  
		  createPaymentSystemInitiators("Didcy Web", "Premium", drim);
	   }
	   break;
	   default: 
	    return;
	}
   break;
   case "DIDCY-STAND-API":
   case "didcy-stand-api":
	switch(system_id){
	   case 0:
	   case 1:
	   {
		  
		  createPaymentSystemInitiators("Didcy Stand", "Basic", drim);
	   }
	   break;
	   case 2:
	   {
		  
		  createPaymentSystemInitiators("Didcy Stand", "Pro", drim);
	   }
	   break;
	   case 3:
	   {
		  
		  createPaymentSystemInitiators("Didcy Stand", "Premium", drim);
	   }
	   break;
	   default: 
	    return;
	}
	break;
	default: 
	 return;
  }
}

var openPaymentServicesDashBoard = function(apiType = "", apiID = 0){
	
	if(window.location.href.slice(51) != ""){
	  RetrieveUserName(0, window.location.href.slice(51));
	}else{
	  document.getElementById("didcer-name").innerHTML = "Didcer"+',';		
	}
	createPaymentSystems(apiType, apiID);
	modalPaymentServices.style.height = "100%";
}

var modalPaymentServices = document.getElementsByClassName("modal-payment-services")[0];
var ContainerPaymentServices = document.getElementsByClassName("container-payment-services")[0];

var spanPaymentServicesDashBoard = document.getElementsByClassName("close-payment-services")[0];

spanPaymentServicesDashBoard.onclick = function(){
   for(var is = 0; is < emptyInitiator.length; is++){
	   ContainerPaymentServices.removeChild(emptyInitiator[is]);
   }
   modalPaymentServices.style.height = "0%";
}

function RetrieveUserName(rid = 0, drim = null){
	var form = new FormData();
	form.append("RID", rid);
	form.append("drim", drim.toString().trim());
	form.append("fetch", 14);
	$.ajax({
		type: "POST",
		url: "adv-uploader.php",
		cache: false,
		contentType: false,
		processData: false,
		data: form,
		success: function(result){
		    var data_returned = JSON.parse(result);
			if(data_returned.state == 0){
				return window.alert("Name Error");
			}
			else if(data_returned.state == 1){
				return window.alert("Name Error");
			}
			else if(data_returned.state == 2){
				
			}
			else if(data_returned.state == 200){
				document.getElementById("didcer-name").innerHTML = data_returned.username + ',';
			}else{
				return window.alert("Name Error");
			}
		},
		error: function(){}
	});
}

var openPaymentServices = (apiTpe = "", apiID = 0) => {
	switch(apiTpe){
	   case "DIDCY-WEB-API":
	   case "didcy-web-api":
	   {
		  switch(apiID){
			 case 0:
			 case 1:			   
			 openPaymentServicesDashBoard(apiTpe, apiID);
			 break;
			 case 2:
		     openPaymentServicesDashBoard(apiTpe, apiID);			 
			 break;
			 case 3:
		     openPaymentServicesDashBoard(apiTpe, apiID);			 
			 break;
			 default: 
			  return;
		  }
	   }
	   break;
	   case "DIDCY-STAND-API":
	   case "didcy-stand-api":
		  switch(apiID){
			 case 0:
			 case 1:
		     openPaymentServicesDashBoard(apiTpe, apiID);			 
			 break;
			 case 2:
		     openPaymentServicesDashBoard(apiTpe, apiID);			 
			 break;
			 case 3:
		     openPaymentServicesDashBoard(apiTpe, apiID);			 
			 break;
			 default: 
			  return;
		  }	   
	   break;
	   default: 
	    return;
	}
}

var DidcyWeb = {
	feePerYear : 0.000,
	storageSize : 0.000,
	numberOfAvailableEmails : 0,
	numberOfAvailableDomains : 0,
	amountOfAvailableBandwidth : 0.000,
	paymentID : 0,
	didcyWebApi : function(id){
		return openPaymentServices("DIDCY-WEB-API", id);
	}
};

var DidcyStand = {
	feePerYear : 0.000,
    numberOfAvailableDeals : 
	{
	  numberOfAvailableDealOfferings : 0,
      numberOfAvailableDealFindings : 0,
	  numberOfAvailableAllInOne : 0
	},
	numberOfAvailableAdsUpload : 0,
	packageType : ["Lottery Package", "Haha  Packages", "Harry Package"],
	lettersType : ["Kid Letters", "Smart Letters", "Wise Letters"],
	numberOfAvailableAdCreation4Release : 0,
	maxAmountOfDidcyLoan : 
	{
	   loanAmount : 0.000, interestRate : 0.000
	},
	numberOfAvailableVirtualMeetings : 0,
    availableVirtualSecurityLevel : 0,
	availableAudioRadioLevels : 0,
	availableVideo_FilmSet : 0,
	numberOfAvailableAdBooksAtYourDisposal : 0,
	availableActorBusinessAcceptPercentage: 0,
	availablePersonalizedStorageSize : 0.00,
	thirdPartyAdvertisingTimePerDay : 
	{
		startTime: 0, lastTime: 0
	},
	numberOfAvailableAdsTrading : 0, 
	numberOfAvailableTalentedIndividualsProfile: 0,
	numberOfAvailableAudioRadioAds4Showcase: 0,
	availableAdsSharingToExternalPlatformsLevels: 0,
	numberOfAvailableGameCreators: 0,
	paymentID : 0,
	didcyStandApi : function(id){
		return openPaymentServices("DIDCY-STAND-API", id);
	}
};

function DidcyWebAPI(id){
	switch(id){
	  case 0:
	  case 1:
	   DidcyWeb.didcyWebApi(1);
	  break;
	  case 2:
	   DidcyWeb.didcyWebApi(2);
	  break;
	  case 3:
	   DidcyWeb.didcyWebApi(3);
	  break;
	  default: 
	   return;
	}
	return;
}

function DidcyStandAPI(id){
	switch(id){
	  case 0:
	  case 1:
	   DidcyStand.didcyStandApi(1);
	  break;
	  case 2:
	   DidcyStand.didcyStandApi(2);
	  break;
	  case 3:
	   DidcyStand.didcyStandApi(3);
	  break;
	  default: 
	   return;
	}
	return;
}

/* document.getElementsByClassName("button-pricing")[0].addEventListener("click", (event) => event.preventDefault());
document.getElementsByClassName("button-pricing")[1].addEventListener("click", (event) => event.preventDefault());
document.getElementsByClassName("button-pricing")[2].addEventListener("click", (event) => event.preventDefault());
document.getElementsByClassName("button-pricing")[3].addEventListener("click", (event) => event.preventDefault());
document.getElementsByClassName("button-pricing")[4].addEventListener("click", (event) => event.preventDefault());
document.getElementsByClassName("button-pricing")[5].addEventListener("click", 
document.getElementsByClassName("button-pricing")[0].addEventListener("click", 
(event) => event.preventDefault()); */