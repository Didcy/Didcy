"use strict";

var modalAdvExhibitionPlatform = document.getElementById("myModal-adv-exhibition-platform");
var modalAdvExhibitionPlatformOffer = document.getElementById("myModal-adv-exhibition-platform-offer");

var Adv_Exhibition_Platform = document.getElementById("adv-exhibition-platform");

var closeModalAdvExhibitionPlatform = document.getElementById("close-adv-exhibition-platform");
var closeModalAdvExhibitionPlatformOffer = document.getElementById("close-adv-exhibition-platform-offer");

var DIDCY_OSAED_DEAL_TABLE = document.getElementById("myModal-adv-exhibition-platform-table");
var CLOSE_DIDCY_OSAED_DEAL_TABLE = document.getElementById("close-adv-exhibition-platform-table");
var FIND_DIDCY_OSAED_DEAL_TABLE = document.getElementById("find-deals");
var OFFER_DIDCY_OSAED_DEAL_TABLE = document.getElementById("offer-deals");
var emptyContentLinks = [], contentLinksCount = 0;
var submitter = null, submitterID = 0;
var storageTradedLinks, storageAdPolicyLinks, storageBusinessNumbers,storageBusinessWhatsappNumbers;
storageTradedLinks=storageAdPolicyLinks=storageBusinessNumbers=storageBusinessWhatsappNumbers = [] ;
var tempContentLinks = [];
var storageCheck = [0, 0, 0, 0];
var exhibitEvents_id = 0, closeOSAED_TABLE = 0, closeOSAED_TABLE_2 = 0;

function AdvExhibitionPlatform(){
	 DIDCY_OSAED_DEAL_TABLE.style.width = "100%";
}

function ShowExhibitionPlatform(popId = null){
   if(popId == 0){
      modalAdvExhibitionPlatform.style.height = "100%";
      modalAdvExhibitionPlatform.style.zIndex = "12";
      if(actionInMotion == 1){
		document.getElementById("column-5").removeChild(document.getElementsByClassName(
		"OpenDeal")[0]);
		actionInMotion = 0;
	  }	

	  return exhibitEvents(6, null);
   }else{	
      modalAdvExhibitionPlatformOffer.style.width = "100%";
      modalAdvExhibitionPlatformOffer.style.zIndex = "12"; 	  
   }	
}

OFFER_DIDCY_OSAED_DEAL_TABLE.onclick = function(){
      return ServicesNotAvailable('Offer Deals', 
	  'Offer Deals report is at the back side. Please tab/put the mouse on this box to view the report.');
	ShowExhibitionPlatform(1);
}

FIND_DIDCY_OSAED_DEAL_TABLE.onclick = function(){
      return ServicesNotAvailable('Find Deals', 
	  'Find Deals report is at the back side. Please tab/put the mouse on this box to view the report.');	  
    ShowExhibitionPlatform(0);
}

CLOSE_DIDCY_OSAED_DEAL_TABLE.onclick = function(){
	DIDCY_OSAED_DEAL_TABLE.style.width = "0%";
}

closeModalAdvExhibitionPlatformOffer.onclick = function(){
	modalAdvExhibitionPlatformOffer.style.width = "0%";
}
closeModalAdvExhibitionPlatform.onclick = function(){
	modalAdvExhibitionPlatform.style.height = "0%";
	var advFilesContainer = document.getElementById("adv-exhibition-platform");
	document.getElementById("myModal-adv-exhibition-platform").removeChild(advFilesContainer);
	var advFileContainer = document.createElement("div");
	advFileContainer.setAttribute("class", "row");
	advFileContainer.setAttribute("id", "adv-exhibition-platform");
	var caption_exhibition_platform = document.getElementById("caption-adv-exhibition-platform");
	document.getElementById("myModal-adv-exhibition-platform").insertBefore(
	advFileContainer, caption_exhibition_platform);
	storeAllCreatedIds = [];


	var advFilesContainer2 = document.getElementById("adv-company-ads-deal-container");
	document.getElementById("myModal-13").removeChild(advFilesContainer2);
					 
	var advFileContainer2 = document.createElement("div");
	advFileContainer2.setAttribute("class", "row");
	advFileContainer2.setAttribute("id", "adv-company-ads-deal-container");
					  
    var advCaption13 = document.getElementById("caption-13");
    document.getElementById("myModal-13").insertBefore(
	advFileContainer2, advCaption13);	
    if(fetch8 == 1){
		fetch8 = 0;
	}
	if(fetch5 == 1){
		fetch5 = 0;
	}
	if(fetch4 == 1){
		fetch4 = 0;
	}
	if(exhibitionAdvShowCase2 == 1){
	  closeExhibitionAdvShowCase2 = 1;
	  if(drimmer != null){
	    exhibitEvents(4, drimmer, 'agp');
	  }else{
		exhibitEvents(4, null, 'agp');  
	  }
	  exhibitionAdvShowCase2 = 0;
	}else if(exhibitionAdvShowCase2 == 2){
	  closeExhibitionAdvShowCase2 = 1;
	  exhibitionAdvShowCase2 = 0;
	  //document.getElementById("img01-1").value = '0';
	  if(drimmer != null){
	    exhibitEvents(8, drimmer, 'agp');
	  }else{
		exhibitEvents(8, null, 'agp');  
	  }
	  //exhibitionAdvShowCase2 = 0;
	}  
	//imageIdContainer = [];
}

document.getElementById("form-inline").addEventListener("submit", (event) => 
    event.preventDefault()
);

function createSubmitter(container, containerSpecificID){
	var csID = "submitter-"+containerSpecificID;
	submitter = document.createElement("input");
	submitter.setAttribute("class", "submitter");
	submitter.setAttribute("id", csID);
	submitter.setAttribute("type", "submit");
	submitter.setAttribute("value", "Store");
    container.append(submitter);	
}

function clickSubmitter(inputs = null, containerSpecificID = null, storageID = 0){
	submitter.onclick = function(){
	  for(var inputCount = 0;inputCount < inputs.length;inputCount++){
		if(inputCount == inputs.length){
			break;
		}
		window.console.log(inputs[inputCount].value);
		if(storageID == 0){
		   storageTradedLinks[inputCount] = inputs[inputCount].value;
		   storageCheck[0] = 10+storageID;
		}
		else if(storageID == 1){
		   storageAdPolicyLinks[inputCount] = inputs[inputCount].value;
		   storageCheck[1] = storageID;
		}
		else if(storageID == 2){
		   storageBusinessNumbers[inputCount] = inputs[inputCount].value;
		   storageCheck[2] = storageID;
		}
		else if(storageID == 3){
		   storageBusinessWhatsappNumbers[inputCount] = inputs[inputCount].value;
		   storageCheck[3] = storageID;
		}
		else{
			
		}
	  }
      containerSpecificID.style.display = "none";
	}
}

document.getElementById("ad-policy-add-of-offerer").onclick = function(){
 if(storageCheck[1] == 0){
	var adPolicyContainer = document.createElement("div");
	adPolicyContainer.setAttribute("class", "ad-policy-add-of-offerer-container");
	adPolicyContainer.setAttribute("id", "ad-policy-add-of-offerer-container");
	
	var closeAdPolicyContainer = document.createElement("span");
	closeAdPolicyContainer.setAttribute("class", "close-ad-policy-add-of-offerer-container");
	closeAdPolicyContainer.setAttribute("id", "close-ad-policy-add-of-offerer-container");

    let contentAdPolicy = document.createElement("h1");	
	const contentPolicy = document.createTextNode("Add your ad policy links for target display to follow");
	contentAdPolicy.append(contentPolicy);

	contentAdPolicy.setAttribute("style", "text-align:center;font-size:30px;color:whit;font-family:sans-serif, arial, verdana");
	
	adPolicyContainer.append(contentAdPolicy);
	
    let content = document.createElement("button");	
	var contentButtonText = document.createTextNode("Add New Link");
	
	content.setAttribute("class", "cursor contentButton");
	content.setAttribute("id", "contentButton");
	
	content.append(contentButtonText);

    let content2 = document.createElement("button");	
	var contentButtonText2 = document.createTextNode("Remove Last Link");
	
	content2.setAttribute("class", "cursor contentButton2");
	content2.setAttribute("id", "contentButton2");
	
	content2.append(contentButtonText2);
    
    adPolicyContainer.append(closeAdPolicyContainer);
    adPolicyContainer.append(content);
    adPolicyContainer.append(content2);
	
    content2.onclick = function(){
		emptyContentLinks = tempContentLinks;
		if(emptyContentLinks.length > 0 && submitter != null){
			adPolicyContainer.removeChild(submitter);
			submitter = null;
		}		
		if(contentLinksCount > 0){
			var emptyContentLinksLast = emptyContentLinks[emptyContentLinks.length - 1];
			adPolicyContainer.removeChild(emptyContentLinksLast);
			emptyContentLinks.pop();
			if(storageAdPolicyLinks[storageAdPolicyLinks.length - 1] == ''){
			   storageAdPolicyLinks[storageAdPolicyLinks.length - 1] = '0000';
			}
			storageAdPolicyLinks.pop();

			contentLinksCount--;
			
			if(contentLinksCount != 0){
			 createSubmitter(adPolicyContainer, adPolicyContainer);
			 adPolicyContainer.append(submitter);
			 clickSubmitter(emptyContentLinks, adPolicyContainer, 1);
			}
			 
/* 			adPolicyContainer.removeChild(submitter);
			submitter = null;
			if(submitterID == 1){
             adPolicyContainer.removeChild(submitter);
			 submitterID--;
			}else{
			 createSubmitter(adPolicyContainer);
			 adPolicyContainer.append(submitter);
			 submitterID--;
			} */
			
			
		}/* else{
			if(submitter != null){
			 adPolicyContainer.removeChild(submitter);
			 submitter = null;
			}
		} */
	}
    content.onclick = function(){
		if(emptyContentLinks.length > 0 && submitter != null){
			adPolicyContainer.removeChild(submitter);
			submitter = null;
		}
		var contentLinks = document.createElement("input");
		
		createSubmitter(adPolicyContainer, adPolicyContainer);
		
		const contentLinksId = "contentLinksID "+didcx_random_number_generator(0, 228828281919191).toString();
		
		contentLinks.setAttribute("class", contentLinksId);
		contentLinks.setAttribute("id", contentLinksId);
		
		emptyContentLinks[contentLinksCount] = contentLinks;
		
		tempContentLinks = emptyContentLinks;
		
		adPolicyContainer.append(contentLinks);
		adPolicyContainer.append(submitter);
		clickSubmitter(emptyContentLinks, adPolicyContainer, 1);
		
		submitterID++;
		
		contentLinksCount++;
		
	}
	
	closeAdPolicyContainer.innerHTML = "&times;";
	closeAdPolicyContainer.onclick = function(){
		document.getElementById("res").removeChild(adPolicyContainer);
		emptyContentLinks=[];
		tempContentLinks = [];
		storageAdPolicyLinks = [];
		contentLinksCount = 0;
		storageCheck[1] = 0;
	}
	document.getElementById("res").append(adPolicyContainer);	
 }else{
	 document.getElementById("ad-policy-add-of-offerer-container").style.display = "block";
	 storageCheck[1] = 0;
 }	
}

document.getElementById("links-add-of-offerer").onclick = function(){
 if(storageCheck[0] == 0){
	var linksContainer = document.createElement("div");
	linksContainer.setAttribute("class", "links-container");
	linksContainer.setAttribute("id", "links-container");
	
	var closeLinksContainer = document.createElement("span");
	closeLinksContainer.setAttribute("class", "close-links-container");
	closeLinksContainer.setAttribute("id", "close-links-container");

    let contentTrade = document.createElement("h1");	
	const contentTradeLinks = document.createTextNode("Add your ad links for target display to follow");
	contentTrade.append(contentTradeLinks);

	contentTrade.setAttribute("style", "text-align:center;font-size:30px;color:whit;font-family:sans-serif, arial, verdana");
	
	linksContainer.append(contentTrade);
	
    let content = document.createElement("button");	
	var contentButtonText = document.createTextNode("Add New Link");
	
	content.setAttribute("class", "cursor contentButton");
	content.setAttribute("id", "contentButton");
	
	content.append(contentButtonText);

    let content2 = document.createElement("button");	
	var contentButtonText2 = document.createTextNode("Remove Last Link");
	
	content2.setAttribute("class", "cursor contentButton2");
	content2.setAttribute("id", "contentButton2");
	
	content2.append(contentButtonText2);
    
    linksContainer.append(closeLinksContainer);
    linksContainer.append(content);
    linksContainer.append(content2);
	
    content2.onclick = function(){
		emptyContentLinks = tempContentLinks;
		if(emptyContentLinks.length > 0 && submitter != null){
			linksContainer.removeChild(submitter);
			submitter = null;
		}		
		if(contentLinksCount > 0){
			var emptyContentLinksLast = emptyContentLinks[emptyContentLinks.length - 1];
			linksContainer.removeChild(emptyContentLinksLast);
			emptyContentLinks.pop();

			if(storageTradedLinks[storageTradedLinks.length - 1] == ''){
			   storageTradedLinks[storageTradedLinks.length - 1] = '0000';
			}
			storageTradedLinks.pop();
			
			contentLinksCount--;

			if(contentLinksCount != 0){
			 createSubmitter(linksContainer, linksContainer);
			 linksContainer.append(submitter);
			 clickSubmitter(emptyContentLinks, linksContainer, 0);
			}

		}
	}
    content.onclick = function(){
		if(emptyContentLinks.length > 0 && submitter != null){
			linksContainer.removeChild(submitter);
			submitter = null;
		}
		var contentLinks = document.createElement("input");
		
		createSubmitter(linksContainer, linksContainer);
		
		const contentLinksId = "contentLinksID "+didcx_random_number_generator(0, 228828281919191).toString();
		
		contentLinks.setAttribute("class", contentLinksId);
		contentLinks.setAttribute("id", contentLinksId);
		
		emptyContentLinks[contentLinksCount] = contentLinks;
		
		tempContentLinks = emptyContentLinks;
		
		linksContainer.append(contentLinks);
		linksContainer.append(submitter);
		clickSubmitter(emptyContentLinks, linksContainer, 0);
		
		submitterID++;
		
		contentLinksCount++;
		
	}
	
	closeLinksContainer.innerHTML = "&times;";
	closeLinksContainer.onclick = function(){
		document.getElementById("res").removeChild(linksContainer);
		emptyContentLinks=[];
		tempContentLinks=[];
		storageTradedLinks = [];
		contentLinksCount = 0;
		storageCheck[0] = 0
		
	}
	document.getElementById("res").append(linksContainer);
 }else{
	 document.getElementById("links-container").style.display = "block";
	 storageCheck[0] = 0;
 }
}

document.getElementById("add-business-tel-of-offerer").onclick = function(){
 if(storageCheck[2] == 0){
	var businessTelContainer = document.createElement("div");
	businessTelContainer.setAttribute("class", "business-tel-of-offerer-container");
	businessTelContainer.setAttribute("id", "business-tel-of-offerer-container");
	
	var closeBusinessTelContainer = document.createElement("span");
	closeBusinessTelContainer.setAttribute("class", "close-business-tel-of-offerer-container");
	closeBusinessTelContainer.setAttribute("id", "close-business-tel-of-offerer-container");

    let contentTrade = document.createElement("h1");	
	const contentTradeLinks = document.createTextNode("Add your Business telephone numbers");
	contentTrade.append(contentTradeLinks);

	contentTrade.setAttribute("style", "text-align:center;font-size:30px;color:whit;font-family:sans-serif, arial, verdana");
	
	businessTelContainer.append(contentTrade);
	
    let content = document.createElement("button");	
	var contentButtonText = document.createTextNode("Add New Number");
	
	content.setAttribute("class", "cursor contentButton");
	content.setAttribute("id", "contentButton");
	
	content.append(contentButtonText);

    let content2 = document.createElement("button");	
	var contentButtonText2 = document.createTextNode("Remove Last Number");
	
	content2.setAttribute("class", "cursor contentButton2");
	content2.setAttribute("id", "contentButton2");
	
	content2.append(contentButtonText2);
    
    businessTelContainer.append(closeBusinessTelContainer);
    businessTelContainer.append(content);
    businessTelContainer.append(content2);
	
    content2.onclick = function(){
		emptyContentLinks = tempContentLinks;
		if(emptyContentLinks.length > 0 && submitter != null){
			businessTelContainer.removeChild(submitter);
			submitter = null;
		}		
		if(contentLinksCount > 0){
			var emptyContentLinksLast = emptyContentLinks[emptyContentLinks.length - 1];
			document.getElementsByClassName("iti")[emptyContentLinks.length - 1].removeChild(emptyContentLinksLast);
			document.getElementsByClassName("iti")[emptyContentLinks.length - 1].removeChild(
			document.getElementsByClassName("iti__flag-container")[emptyContentLinks.length - 1]);
			businessTelContainer.removeChild(document.getElementsByClassName("iti")[emptyContentLinks.length - 1]);
			
			emptyContentLinks.pop();

			if(storageBusinessNumbers[storageBusinessNumbers.length - 1] == ''){
			   storageBusinessNumbers[storageBusinessNumbers.length - 1] = '0000';
			}
			storageBusinessNumbers.pop();

			contentLinksCount--;

			if(contentLinksCount != 0){
			 createSubmitter(businessTelContainer, businessTelContainer);
			 businessTelContainer.append(submitter);
			 clickSubmitter(emptyContentLinks, businessTelContainer, 2);
			}

			//businessTelContainer
		}
	}
    content.onclick = function(){
		if(emptyContentLinks.length > 0 && submitter != null){
			businessTelContainer.removeChild(submitter);
			submitter = null;
		}
		var contentLinks = document.createElement("input");
		
		createSubmitter(businessTelContainer, businessTelContainer);
		
		const contentLinksId = "contentLinksID "+didcx_random_number_generator(0, 228828281919191).toString();
		const contentLinksId2 = "content-"+didcx_random_number_generator(0, 228828281919191).toString();
		
		contentLinks.setAttribute("class", contentLinksId);
		contentLinks.setAttribute("id", contentLinksId2);
		contentLinks.setAttribute("type", "tel");
		contentLinks.setAttribute("placeholder", "");
		
		emptyContentLinks[contentLinksCount] = contentLinks;
		
		tempContentLinks = emptyContentLinks;
		
		businessTelContainer.append(contentLinks);
		businessTelContainer.append(submitter);
        
		clickSubmitter(emptyContentLinks, businessTelContainer, 2);
		
		var inputID = "#"+contentLinksId2;
		
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
		});
		
		//window.console.log(data);
		submitterID++;
		contentLinksCount++;
		
	}
	
	closeBusinessTelContainer.innerHTML = "&times;";
	closeBusinessTelContainer.onclick = function(){
		document.getElementById("res").removeChild(businessTelContainer);
		emptyContentLinks=[];
		tempContentLinks = [];
		storageBusinessNumbers = [];
		contentLinksCount = 0;
		storageCheck[2] = 0;
	}
	document.getElementById("res").append(businessTelContainer);
    
	var scrollingElement = businessTelContainer;
	
	scrollingElement.onscroll  =  function() {
	  var e = document.createEvent('Event');
	  e.initEvent("scroll", true, true);
	  window.dispatchEvent(e);
	}//);	
 }else{
	 document.getElementById("business-tel-of-offerer-container").style.display = "block";
	 storageCheck[2] = 0;
 }	
}

document.getElementById("add-business-whatsapp-tel-of-offerer").onclick = function(){
 if(storageCheck[3] == 0){
	var businessTelContainer = document.createElement("div");
	businessTelContainer.setAttribute("class", "business-whatsapp-tel-of-offerer-container");
	businessTelContainer.setAttribute("id", "business-whatsapp-tel-of-offerer-container");
	
	var closeBusinessTelContainer = document.createElement("span");
	closeBusinessTelContainer.setAttribute("class", "close-business-whatsapp-tel-of-offerer-container");
	closeBusinessTelContainer.setAttribute("id", "close-business-whatsapp-tel-of-offerer-container");

    let contentTrade = document.createElement("h1");	
	const contentTradeLinks = document.createTextNode("Add your Business Whatsapp Numbers");
	contentTrade.append(contentTradeLinks);

	contentTrade.setAttribute("style", "text-align:center;font-size:30px;color:whit;font-family:sans-serif, arial, verdana");
	
	businessTelContainer.append(contentTrade);
	
    let content = document.createElement("button");	
	var contentButtonText = document.createTextNode("Add New Number");
	
	content.setAttribute("class", "cursor contentButton");
	content.setAttribute("id", "contentButton");
	
	content.append(contentButtonText);

    let content2 = document.createElement("button");	
	var contentButtonText2 = document.createTextNode("Remove Last Number");
	
	content2.setAttribute("class", "cursor contentButton2");
	content2.setAttribute("id", "contentButton2");
	
	content2.append(contentButtonText2);
    
    businessTelContainer.append(closeBusinessTelContainer);
    businessTelContainer.append(content);
    businessTelContainer.append(content2);
	
    content2.onclick = function(){
		emptyContentLinks = tempContentLinks;
		if(emptyContentLinks.length > 0 && submitter != null){
			businessTelContainer.removeChild(submitter);
			submitter = null;
		}		
		if(contentLinksCount > 0){
			var emptyContentLinksLast = emptyContentLinks[emptyContentLinks.length - 1];
			document.getElementsByClassName("iti")[emptyContentLinks.length - 1].removeChild(emptyContentLinksLast);
			document.getElementsByClassName("iti")[emptyContentLinks.length - 1].removeChild(
			document.getElementsByClassName("iti__flag-container")[emptyContentLinks.length - 1]);
			businessTelContainer.removeChild(document.getElementsByClassName("iti")[emptyContentLinks.length - 1]);
			
			emptyContentLinks.pop();

			if(storageBusinessWhatsappNumbers[storageBusinessWhatsappNumbers.length - 1] == ''){
			   storageBusinessWhatsappNumbers[storageBusinessWhatsappNumbers.length - 1] = '0000';
			}
			storageBusinessWhatsappNumbers.pop();

			contentLinksCount--;

			if(contentLinksCount != 0){
			 createSubmitter(businessTelContainer, businessTelContainer);
			 businessTelContainer.append(submitter);
			 clickSubmitter(emptyContentLinks, businessTelContainer, 3);
			}
			//businessTelContainer
		}
	}
    content.onclick = function(){
		if(emptyContentLinks.length > 0 && submitter != null){
			businessTelContainer.removeChild(submitter);
			submitter = null;
		}
		var contentLinks = document.createElement("input");
		
		createSubmitter(businessTelContainer, businessTelContainer);
		
		const contentLinksId = "contentLinksID "+didcx_random_number_generator(0, 228828281919191).toString();
		const contentLinksId2 = "content-"+didcx_random_number_generator(0, 228828281919191).toString();
		
		contentLinks.setAttribute("class", contentLinksId);
		contentLinks.setAttribute("id", contentLinksId2);
		contentLinks.setAttribute("type", "tel");
		contentLinks.setAttribute("placeholder", "");
		
		emptyContentLinks[contentLinksCount] = contentLinks;
		
		tempContentLinks = emptyContentLinks;
		
		businessTelContainer.append(contentLinks);
		businessTelContainer.append(submitter);
		clickSubmitter(emptyContentLinks, businessTelContainer, 3);

		var inputID = "#"+contentLinksId2;
		
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
		});
		
		//window.console.log(data);
		submitterID++;
		contentLinksCount++;

		
	}
	
	closeBusinessTelContainer.innerHTML = "&times;";
	closeBusinessTelContainer.onclick = function(){
		document.getElementById("res").removeChild(businessTelContainer);
		emptyContentLinks=[];
		tempContentLinks=[];
		storageBusinessWhatsappNumbers = [];
		contentLinksCount = 0;
		storageCheck[3] = 0;
	}
	document.getElementById("res").append(businessTelContainer);
	
	var scrollingElement = businessTelContainer;
	
	scrollingElement.onscroll  =  function() {
	  var e = document.createEvent('Event');
	  e.initEvent("scroll", true, true);
	  window.dispatchEvent(e);
	}//);		
 }else{
	 document.getElementById("business-whatsapp-tel-of-offerer-container").style.display = "block";
	 storageCheck[3] = 0;
 }	
}

document.getElementById("submit-offer").addEventListener("click", () => 
  {
	  
  }
);

document.getElementById("didcy-exhibition-platform").addEventListener("click", function(){
	if(closeOSAED_TABLE != 3){
  	    closeOSAED_TABLE = -1;
	}
	if(closeOSAED_TABLE == 3){
		document.getElementById("column-5").removeChild(
		document.getElementById("contactName"));
		closeOSAED_TABLE = -1;
		profileNameCreateId = 0;
	}
	if(closeOSAED_TABLE == 6){
		profileNameCreateId = 0;
	}
	AdvExhibitionPlatform();
});