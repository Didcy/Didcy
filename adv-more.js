"use strict";

function AdvMoreLink(){
    return document.getElementById("more-container").style.display = "block";
}

document.getElementById("more").addEventListener("click", (event) => {event.preventDefault();/* AdvMoreLink(); */});
document.getElementById("more-left-side").addEventListener("click", (event) => {event.preventDefault();/* AdvMoreLink(); */});


// Get the modal
var newsletterDifference = 0;
var modal = document.getElementById("myModal");
var modalChat4DidcyWorks = document.getElementById("modal-chat-4-didcy-works");
var modalDidcyBenefits = document.getElementById("modal-didcy-benefits");
var modalDidcyKeywords = document.getElementById("modal-didcy-keywords");
var modalDidcyGuide = document.getElementById("modal-didcy-guide");
var modalDidcyCmpAdv = document.getElementById("modal-didcy-competitive-advantage");
var modalWork = document.getElementById("myModal-work");
var modalNotification = document.getElementById("myModal-notification");
var modalReach = document.getElementById("myModal-reach");
var modalPayments = document.getElementById("myModal-payments");
var modalRefundRequest = document.getElementById("myModal-refund-request");
var modalSRecords = document.getElementById("myModal-s-records");
var modalPricingTable = document.getElementsByClassName("modal-pricing-table")[0];
var modalUploadSystem = document.getElementsByClassName("modal-upload-system")[0];
//var modalPricingTable = document.getElementsByClassName("modal-stand")[0];
var modal10 = document.getElementById("myModal-10");
var modalCompaniesOnly = document.getElementById("myModal-companies-only");
var modalPluginsBoard = document.getElementById("modal-plugins-board");
var modalRipaBoard = document.getElementById("modal-ripa-board");
var modalRipaBank = document.getElementById("modal-ripa-bank");
var modalActorsGroupsOnly = document.getElementById("myModal-actors-groups-only");
var modalSiteMap = document.getElementById("myModal-sitemap");
var modalStand = document.getElementById("myModal-stand");
var modal11 = document.getElementById("myModal-11");
var modal15 = document.getElementById("myModal-15");
var modalUpcomingUpdates = document.getElementById("myModal-upcoming-updates");
var gagaSubscription = document.getElementById("gaga-subscription");
var gagaSiteContentFromMore = 0, modalPositionChangeCount = 0, 
modalChange4Authors = 0, modalChange4Investors = 0;
// Get the modal
var modal12 = document.getElementById("myModal-12");
var modalSubscribeTutorials = document.getElementsByClassName("modal-subscribe")[0];
var modalSubscribe = document.getElementById("myModal-subscribe");
var modal13 = document.getElementById("myModal-13");
var modalSpecial = document.getElementById("myModal-special");
var modalRelief = document.getElementById("myModal-relief");
var modalTerms = document.getElementsByClassName("modal-Terms")[0];
var modalCookie = document.getElementsByClassName("modal-cookie")[0];
var modalSecurity = document.getElementsByClassName("modal-security")[0];
var modalHost = document.getElementsByClassName("modal-host-policy")[0];
var modalKnowTeam = document.getElementsByClassName("modal-know-team")[0];
var modalProfiles = document.getElementsByClassName("modal-profiles")[0];
var modalSubscribePolicy = document.getElementsByClassName("modal-subscribe-policy")[0];
var modalCEO = document.getElementsByClassName("modal-ceo")[0];
var modalSubscribeStandPolicy = document.getElementsByClassName("modal-subscribe-stand-policy")[0];
var modalAuthors = document.getElementsByClassName("modal-authors")[0];
var modalInvestors = document.getElementsByClassName("modal-investors")[0];
var modalMentors = document.getElementsByClassName("modal-mentors")[0];
var modalSubscribeWebPolicy = document.getElementsByClassName("modal-subscribe-web-policy")[0];
var modalCookieFullMode = document.getElementsByClassName("modal-cookie-full-mode")[0];
var modalTeam = document.getElementsByClassName("modal-team")[0];
var modalDispute = document.getElementsByClassName("modal-dispute-policy")[0];
var modalLimit = document.getElementsByClassName("modal-limit-policy")[0];
var modalKnowDevelopers = document.getElementsByClassName("modal-know-developers")[0];
var modalAdvertisementChannels = document.getElementsByClassName("modal-advertisement-channels")[0];
var modalSEOAdvertisement = document.getElementsByClassName("modal-seo-advertisement")[0];
var modalContentIntegration = document.getElementsByClassName("modal-content-integration")[0];
var filesContainer = [0, 0];
var popupAdTaskBeforeLoad = 0;
// Get the image and insert it inside the modal - use its "alt" text as a caption
//var img = document.getElementById("");
var modalImg12 = document.getElementById("img01-12");
var captionText12 = document.getElementById("caption-12");
var captionText15 = document.getElementById("caption-15");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("more");
var imgLeftSide = document.getElementById("more-left-side");
var modalImg = document.getElementById("img01");
var modalImg15 = document.getElementById("img01-15");
var captionText = document.getElementById("caption");
var caption10 = document.getElementById("caption-stand");
var captionStand = document.getElementById("caption-10");
var captionSpecial = document.getElementById("caption-special");
var captionRelief = document.getElementById("caption-relief");
var caption11 = document.getElementById("caption-11");
var cookieModal = null, subContainers = 0;
var $fileSet = 0;
img.onclick = function(){
  modal.style.display = "block";
 
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  captionText.innerHTML = "Didcy Insight";
}

imgLeftSide.onclick = function(){
  modal.style.display = "block";
 
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  captionText.innerHTML = "Didcy Insight";
}

// Get the <span> element that closes the modal
var spanCompaniesOnly = document.getElementsByClassName("close-companies-only")[0];
var spanPluginsBoard = document.getElementsByClassName("close-plugins-board")[0];
var spanRipaBoard = document.getElementsByClassName("close-ripa-board")[0];
var spanRipaBank = document.getElementsByClassName("close-ripa-bank")[0];
var spanActorsGroupsOnly = document.getElementsByClassName("close-actors-groups-only")[0];
var span = document.getElementsByClassName("close")[0];
var spanWork = document.getElementsByClassName("close-work")[0];
var spanNotification = document.getElementsByClassName("close-notification")[0];
var spanReach = document.getElementsByClassName("close-reach")[0];
var spanPayments = document.getElementsByClassName("close-payments")[0];
var spanRefundRequest = document.getElementsByClassName("close-refund-request")[0];
var spanSRecords = document.getElementsByClassName("close-s-records")[0];
var spanAdvertisementChannels = document.getElementsByClassName("close-advertisement-channels")[0];
var spanSEOAdvertisement = document.getElementsByClassName("close-seo-advertisement")[0];
var spanContentIntegration = document.getElementsByClassName("close-content-integration")[0];
var spanSiteMap = document.getElementsByClassName("close-sitemap")[0];
var spanDispute = document.getElementsByClassName("close-dispute-policy")[0];
var spanHost = document.getElementsByClassName("close-host-policy")[0];
var spanLimit = document.getElementsByClassName("close-limit-policy")[0];
var spanSubscribe = document.getElementsByClassName("close-dispute-policy")[0];
var spanUpcomingUpdates = document.getElementsByClassName("close-upcoming-updates")[0];
var spanTerms = document.getElementsByClassName("close-Terms")[0];
var spanCookie = document.getElementsByClassName("close-cookie")[0];
var spanSecurity = document.getElementsByClassName("close-security")[0];
var spanKnowTeam = document.getElementsByClassName("close-know-team")[0];
var spanPricingTable = document.getElementsByClassName("close-pricing-table")[0];
var spanProfiles = document.getElementsByClassName("close-profiles")[0];
var spanSubscribePolicy = document.getElementsByClassName("close-subscribe-policy")[0];
var spanCEO = document.getElementsByClassName("close-ceo")[0];
var spanSubscribeStandPolicy = document.getElementsByClassName("close-subscribe-stand-policy")[0];
var spanAuthors  = document.getElementsByClassName("close-authors")[0];
var spanInvestors  = document.getElementsByClassName("close-investors")[0];
var spanMentors  = document.getElementsByClassName("close-mentors")[0];
var spanSubscribeWebPolicy  = document.getElementsByClassName("close-subscribe-web-policy")[0];
var spanCookieFullMode = document.getElementsByClassName("close-cookie-full-mode")[0];
var spanTeam = document.getElementsByClassName("close-team")[0];
var spanKnowDevelopers = document.getElementsByClassName("close-know-developers")[0];
var spanChat4DidcyWorks = document.getElementsByClassName("close-chat-4-didcy-works")[0];
var spanDidcyBenefits = document.getElementsByClassName("close-didcy-benefits")[0];
var spanDidcyKeywords = document.getElementsByClassName("close-didcy-keywords")[0];
var spanDidcyGuide = document.getElementsByClassName("close-didcy-guide")[0];
var spanDidcyCmpAdv = document.getElementsByClassName("close-didcy-competitive-advantage")[0];
var spanDidcyPlatformsOffer = document.getElementsByClassName("close-didcy-platforms-offer")[0];

// When the user clicks on <span> (x), close the modal


spanSubscribe.onclick = function() { 
   modalSubscribe.style.display = "none";
}

spanDidcyBenefits.onclick = function() { 
   modalDidcyBenefits.style.height = "0%";
}

spanDidcyKeywords.onclick = function() { 
   modalDidcyKeywords.style.height = "0%";
}

spanDidcyGuide.onclick = function() { 
   modalDidcyGuide.style.height = "0%";
}

spanDidcyCmpAdv.onclick = function() { 
   modalDidcyCmpAdv.style.height = "0%";
}

spanChat4DidcyWorks.onclick = function() { 
   document.getElementsByClassName("username-didcywork")[0].value = "";
   document.getElementsByClassName("pwd-didcywork")[0].value = "";
   modalChat4DidcyWorks.style.height = "0%";
}

function ClosePluginsBoardInDiv(){
	var __plugins = document.getElementsByClassName("didcy-plugins-id");
	for(var plugins_ = 0;plugins_ < __plugins.length;plugins_++){
	  __plugins[plugins_].style.display = "none";
	}
}

function RecreatePluginsBoardInDiv(){
   {
	   var __plugins = document.getElementById("in-div");
	   var __advFt = document.getElementById("adv-ft");
	   document.body.removeChild(__plugins);
	   __plugins = document.createElement("div");
	   __plugins.setAttribute("class", "in-div");
	   __plugins.setAttribute("id", "in-div");
	   document.body.insertBefore(__plugins, __advFt);
   }
}

spanPluginsBoard.onclick = function() { 
   it.didcyFixes.mainSplit.style.height = "0%";
   it.didcyFixes.mainQuak.style.height = "0%";
   modalRipaBank.style.height = "0%";
   modalPluginsBoard.style.height = "0%";
   ClosePluginsBoardInDiv();
}

spanRipaBoard.onclick = function() { 
   //CloseExtrasFrom16();
   modalRipaBoard.style.height = "0%";
}

spanRipaBank.onclick = function() { 
   modalRipaBank.style.height = "0%";
}

spanSiteMap.onclick = function() { 
   modalSiteMap.style.height = "0%";
}

spanWork.onclick = function() { 
   modalWork.style.height = "0%";
}

spanUpcomingUpdates.onclick = function() { 
   modalUpcomingUpdates.style.display = "none";
}

spanNotification.onclick = function() { 
   modalNotification.style.height = "0%";
   subContainers = 0;
}

spanReach.onclick = function() { 
   modalReach.style.height = "0%";
   subContainers = 0;
}

spanPayments.onclick = function() { 
   modalPayments.style.height = "0%";
   subContainers = 0;
}

spanRefundRequest.onclick = function() { 
   modalRefundRequest.style.height = "0%";
   subContainers = 0;
}

spanSRecords.onclick = function() { 
   modalSRecords.style.height = "0%";
   subContainers = 0;
}

spanDispute.onclick = function() { 
   //modalDispute.style.display = "none";
   modalDispute.style.height = "0%";
}

spanAdvertisementChannels.onclick = function() { 
   modalAdvertisementChannels.style.width = "0%";
}

spanSEOAdvertisement.onclick = function() { 
   modalSEOAdvertisement.style.width = "0%";
   modalSEOAdvertisement.style.height = "0%";
}

spanContentIntegration.onclick = function() { 
   modalContentIntegration.style.height = "0%";
}

spanCompaniesOnly.onclick = function(){
	modalCompaniesOnly.style.height = "0%";
	modalCompaniesOnly.style.width = "0%";
}

spanActorsGroupsOnly.onclick = function(){
	modalActorsGroupsOnly.style.display = "none";
}

spanCookieFullMode.onclick = function() { 
    modalCookieFullMode.style.height = "0%";
    //modalCEO.style.bottom = "0%";
}

spanHost.onclick = function() { 
    modalHost.style.height = "0%";
    //modalCEO.style.bottom = "0%";
}

spanTeam.onclick = function() { 
    modalTeam.style.height = "0%";
    //modalCEO.style.bottom = "0%";
}

spanMentors.onclick = function() { 
    modalMentors.style.display = "none";
    modalMentors.style.width = "0%";
    modalMentors.style.height = "0%";
    //modalCEO.style.bottom = "0%";
}

spanSubscribePolicy.onclick = function() { 
    //modalSubscribePolicy.style.display = "none";
    modalSubscribePolicy.style.width = "0%";
    modalSubscribePolicy.style.height = "0%";
    //modalCEO.style.bottom = "0%";
}

spanCEO.onclick = function() { 
    modalCEO.style.width = "0%";
    modalCEO.style.height = "0%";
}

spanLimit.onclick = function() { 
    modalLimit.style.width = "0%";
    modalLimit.style.height = "0%";
}

spanSubscribeStandPolicy.onclick = function() { 
    modalSubscribeStandPolicy.style.width = "0%";
    modalSubscribeStandPolicy.style.height = "0%";
}

spanKnowDevelopers.onclick = function() { 
    modalKnowDevelopers.style.width = "0%";
    modalKnowDevelopers.style.height = "0%";
}

spanAuthors.onclick = function() { 
    modalAuthors.style.display = "none";
    //modalCEO.style.bottom = "0%";
}

spanInvestors.onclick = function() { 
    modalInvestors.style.display = "none";
    //modalCEO.style.bottom = "0%";
}

spanProfiles.onclick = function() { 
    modalProfiles.style.width = "0%";
    modalProfiles.style.height = "0%";
}

spanPricingTable.onclick = function() { 
  modalPricingTable.style.height = "0%";
}

spanSecurity.onclick = function(){
	modalSecurity.style.height = "0%";
	modalSecurity.style.width = "0%";
}

spanKnowTeam.onclick = function(){
	modalKnowTeam.style.height = "0%";
	modalKnowTeam.style.width = "0%";
}

spanSubscribeWebPolicy.onclick = function(){
	modalSubscribeWebPolicy.style.height = "0%";
	modalSubscribeWebPolicy.style.width = "0%";
}

function CloseCookie(){
	   if(cookieModal != null){
	       clearInterval(cookieModal);
		   cookieModal = null;
	   }
	   modalCookie.style.height = "0%";
	   modalCookie.style.width = "0%";	
}

spanCookie.onclick = function(){
	document.getElementById('myModal-upload-system').style.height='0%';
	CloseCookie();
}

spanTerms.onclick = function() {
	CloseCookie();
	document.getElementById('myModal-upload-system').style.height='0%';
	modalTerms.style.height = "0%";
	modalTerms.style.width = "0%";
}
 
function CloseBooksLogs(){
		modalSellerDashboard.style.width = "0%";
		modalSellerDashboard.style.height = "0%";	
		modalBuyer.style.width = "0%";
		modalBuyer.style.height = "0%"; 
}

span.onclick = function() { 
  CloseBooksLogs();
  CloseLogBooks();
  CloseCreateBooks();
  modal.style.display = "none";
}
// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close-1")[0];

var modal2 = document.getElementById("myModal-1");
// When the user clicks on <span> (x), close the modal
var tvList = document.getElementById("tvList");
var gagaReact = document.getElementById("gaga-react");
var gagaWebPrice = document.getElementById("gaga-web-price");
var gagaSpecial = document.getElementById("gaga-special");
var gagaRelief = document.getElementById("gaga-relief");
var gagaMiniWide = document.getElementById("gaga-mini-wide");
var gagaMiniCrop = document.getElementById("gaga-mini-crop");
var gagaMiniShort = document.getElementById("gaga-mini-short");
var gagaMiniWeb = document.getElementById("gaga-mini-web");

var myModal_1 = document.getElementById("myModal-1");
var img01_1 = document.getElementById("img01-1");
var caption1 = document.getElementById("caption-1");

var myModal_9 = document.getElementById("myModal-9");
var caption9 = document.getElementById("caption-9");
var modal9 = document.getElementById("myModal-9");

function CloseExtrasFrom16(){
	  modalRipaBank.style.height = "0%";
	  modalRipaBoard.style.height = "0%";
	  img01_1.value = '5';
	  reactContainerDelID = 0;
	  var gagaExtrasContainer2 = document.getElementById("gaga-extras-container");
	  modal2.removeChild(gagaExtrasContainer2);
	  RecreateReact();
}

span2.onclick = function() { 
  modal2.style.display = "none";
  img01_1.style.display = "block";
  modal2.style.zIndex = "1.5";
  if(img01_1.value == '1'){
	  let textTutorials = document.getElementById("text-tutorial");
	  modal2.removeChild(textTutorials);
	  img01_1.value = '0';
	  modal2.style.paddingTop = "100px";
  }
  else if(img01_1.value == '2'){
      img01_1.src = "";
	  img01_1.value = '0';
  }
  else if(img01_1.value == '3'){
	  let videoTutorials = document.getElementById("video-tutorial");
	  modal2.removeChild(videoTutorials);
	  img01_1.value = '0';	  
  }
  else if(img01_1.value == '4'){
	  let textTutorials = document.getElementById("text-tutorial");
	  modal2.removeChild(textTutorials);
	  img01_1.value = '0';
	  var captionChild = document.getElementById("gaga-relate-2");
	  caption1.removeChild(captionChild);
	  myModal_1.style.paddingTop = "100px";
	  //caption1.classList.remove("gaga-relate-2");
  }  
  else if(img01_1.value == '5'){
	  var gagaRContainer2 = document.getElementById("gaga-react-container");
	  modal2.removeChild(gagaRContainer2);
	  img01_1.value = '0';
	  reactContainerDelID = 0;
	  //caption1.classList.remove("gaga-relate-2");
  }
  else if(img01_1.value == '6'){
	  var gagaSContainer2 = document.getElementById("gaga-subscription-container");
	  modal2.removeChild(gagaSContainer2);
	  //caption1.classList.remove("gaga-relate-2");
	  img01_1.value = '0';
	  if(subContainers == 2){
		 modalReach.style.height = "0%";
		 subContainers = 0;
	  }else if(subContainers == 3){
		 modalNotification.style.height = "0%";
		 subContainers = 0;
	  }else if(subContainers == 4){
		 modalPayments.style.height = "0%";
		 subContainers = 0;
	  }else if(subContainers == 5){
		 modalRefundRequest.style.height = "0%";
		 subContainers = 0;
	  }else if(subContainers == 6){
		 modalSRecords.style.height = "0%";
		 subContainers = 0;
	  }
  }
  else if(img01_1.value == '8'){
	  modal2.style.display = "none";
	  img01_1.value = '8';
	  //caption1.classList.remove("gaga-relate-2");
  }
  else if(img01_1.value == '9'){
	  var tvListContainer2 = document.getElementById("tv-list-container");
	  modal2.removeChild(tvListContainer2);	 
      img01_1.value = '0';	  
  }
  else if(img01_1.value == '10'){
      //const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", "gaga-share-gaga", "gaga-share-pinterest"];
	  const GaGaShareID = ["gaga-share", "gaga-decide", "gaga-definition", 
	  "gaga-approved-by", "gaga-date-time", "jurisdiction", "gaga-download"];

	  var gagaCount = 0;
	  for(;gagaCount < GaGaShareID.length;gagaCount++){
		  var gagaShareWith = document.getElementById("button-1");
		  modal2.removeChild(gagaShareWith);
	  }
	  modal2.style.display = "none";
	  img01_1.value = '0';
	  //caption1.classList.remove("gaga-relate-2");				  
  }
  else if(img01_1i.value == '14'){
    var impactContainer = document.getElementById("impact-container");
    myModal_1i.removeChild(impactContainer);
    myModal_1i.style.display = "none";
    img01_1.style.display = "block";  
	img01_1.value = '0';
  }
  else if(img01_1.value == '15'){
	  modal2.style.display = "none";
	  img01_1.value = '0';
	  //caption1.classList.remove("gaga-relate-2");
  }
  else if(img01_1.value == '16'){
       CloseExtrasFrom16();
	  //caption1.classList.remove("gaga-relate-2");
  }
  else if(img01_1.value == '17'){
	  img01_1.value = '16';
	  var gagaRateUsContainer2 = document.getElementById("gaga-rate-container");
	  modal2.removeChild(gagaRateUsContainer2);
	  RecreateReact2();
	  //caption1.classList.remove("gaga-relate-2");
  }
  else if(img01_1.value == '20'){
	  img01_1.value = '0';
      modal2.removeChild(videoEl);
      videoEl = null;
	  videoElem = 0;
	  modal2.style.paddingTop = "100px";
  }
  else if(img01_1.value == '200'){
	  img01_1.value = '0';
      modal2.removeChild(videoEl);
      modal2.removeChild(document.getElementById("ap_container"));
      videoEl = null;
	  videoElem = 0;
	  modal2.style.paddingTop = "100px";
	  
  }
  else if(img01_1.value == '21'){
      const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", "gaga-share-gaga", "gaga-share-pinterest"];
	  var gagaCount = 0;
	  for(;gagaCount < GaGaShareID.length;gagaCount++){
		  var gagaShareWith = document.getElementById("button-12");
		  modal2.removeChild(gagaShareWith);
	  }
	  modal2.style.display = "none";
	  img01_1.value = '0';
	  //caption1.classList.remove("gaga-relate-2");				  
  }
  else{
	  img01_1.value = '0';
  }
  
  it.didcyFixes.mainSplit.style.height = "0%";
  it.didcyFixes.mainQuak.style.height = "0%";
  modalPluginsBoard.style.height = "0%";
  ClosePluginsBoardInDiv();
 
/*   var img01_1 = document.getElementById("img01-1");
  
  myModal_1.removeChild(img01_1); */
}
  
tvList.onclick = function() { 
  modal2.style.display = "block";
 
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  //document.getElementById("img01-1").src = "adv.actors.profiles/people2.jpg";


  //myModal_1.removeChild(img01_1);
  img01_1.style.display = "none";

	var tvListContainer = document.createElement("div");
	tvListContainer.setAttribute("class", "modal-content-1");
	tvListContainer.setAttribute("id", "tv-list-container");
  
  //myModal_1.append(tvListContainer);
 
  
  //myModal_1.insertBefore(tvListContainer, caption1);
  //var tvListContainer2 = document.getElementById("tv-list-container");
  //myModal_1.insertBefore(tvListContainer2, caption1);
  
  const tvListPlatforms = {ghana: ["UTV", "GHOne", "E-GHANA", "TV3", "GTV", "MAX-TV", "JOY PRIME", "TOP TV"]};
  const tvListPlatformsCountry = [
		"Åland Islands",
		"Afghanistan",
		"Albania",
		"Algeria",
		"American Samoa",
		"Andorra",
		"Angola",
		"Anguilla",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Aruba",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",
		"Belgium",
		"Belize",
		"Benin",
		"Bermuda",
		"Bhutan",
		"Bolivia",
		"Bonaire",
		"Bosnia and Herzegovina",
		"Botswana",
		"Brazil",
		"British Indian Ocean Territory",
		"British Virgin Islands",
		"Brunei",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",
		"Canada",
		"Cape Verde",
		"Cayman Islands",
		"Central African Republic",
		"Chad",
		"Chile",
		"China",
		"Colombia",
		"Comoros",
		"Democratic Republic of the Congo",
		"Republic of the Congo",
		"Cook Islands",
		"Costa Rica",
		"Croatia",
		"Cuba",
		"Curaçao",
		"Cyprus",
		"Czech Republic",
		"Denmark",
		"Djibouti",
		"Dominica",
		"Dominican Republic",
		"Ecuador",
		"Egypt",
		"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Falkland Islands",
		"Faroe Islands",
		"Fiji",
		"Finland",
		"France",
		"French Guiana",
		"French Polynesia",
		"French Southern and Antarctic Lands",
		"Gabon",
		"Gambia",
		"Georgia",
		"Germany",
		"Ghana",
		"Gibraltar",
		"Greece",
		"Greenland",
		"Grenada",
		"Guadeloupe",
		"Guam",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",
		"Hong Kong",
		"Hungary",
		"Iceland",
		"India",
		"Indonesia",
		"Iran",
		"Iraq",
		"Ireland",
		"Israel",
		"Italy",
		"Ivory Coast",
		"Jamaica",
		"Japan",
		"Jordan",
		"Kazakhstan",
		"Kenya",
		"Kiribati",
		"North Korea",
		"South Korea",
		"Kosovo",
		"Kurdistan",
		"Kuwait",
		"Kyrgyzstan",
		"Laos",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Libya",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"North Macedonia",
		"Macau",
		"Premium channels",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marquesas Islands",
		"Marshall Islands",
		"Martinique",
		"Mauritania",
		"Mauritius",
		"Mayotte",
		"Mexico",
		"Over-the-air",
		"National TV Broadcast",
		"Federated States of Micronesia",
		"Midway Islands",
		"Moldova",
		"Monaco",
		"Mongolia",
		"Montenegro",
		"Montserrat",
		"Morocco",
		"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepal",
		"Netherlands",
		"Netherlands Antilles",
		"New Caledonia",
		"New Zealand",
		"Nicaragua",
		"National channels",
		"Local channels",
		"Niger",
		"Nigeria",
		"Niue",
		"Northern Mariana Islands",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Palestine",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Government-owned networks",
		"Minor television networks",
		"Pitcairn Islands",
		"Poland",
		"Portugal",
		"Puerto Rico",
		"Qatar",
		"Réunion",
		"Romania",
		"Russia ",
		"Rwanda",
		"Saba",
		"Saint Barthélemy",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Sint Maarten",
		"Saint Pierre and Miquelon",
		"Saint Vincent and the Grenadines",
		"Samoa",
		"San Marino",
		"São Tomé and Príncipe",
		"Saudi Arabia",
		"Senegal",
		"Serbia",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Sint Eustatius",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",
		"South Africa",
		"Spain",
		"Sri Lanka",
		"Sudan",
		"South Sudan",
		"Suriname",
		"Eswatini",
		"Sweden",
		"Switzerland",
		"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",
		"Thailand",
		"Tibet",
		"Timor-Leste",
		"Togo",
		"Tokelau",
		"Tonga",
		"Trinidad and Tobago",
		"Tristan da Cunha",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Turks and Caicos Islands",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",
		"United Kingdom",
		"United States",
		"Over-the-air",
		"Cable and satellite",
		"Defunct",
		"United States Virgin Islands",
		"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Vatican City",
		"Venezuela",
		"Vietnam",
		"Wake Island",
		"Wallis and Futuna",
		"Western Sahara",
		"Yemen",
		"Zambia",
		"Zanzibar",
		"Zimbabwe"
  ];
  const tvListPlatformsCountryID = [
  		"Åland Islands",
		"Afghanistan",
		"Albania",
		"Algeria",
		"American Samoa",
		"Andorra",
		"Angola",
		"Anguilla",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Aruba",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",
		"Belgium",
		"Belize",
		"Benin",
		"Bermuda",
		"Bhutan",
		"Bolivia",
		"Bonaire",
		"Bosnia and Herzegovina",
		"Botswana",
		"Brazil",
		"British Indian Ocean Territory",
		"British Virgin Islands",
		"Brunei",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",
		"Canada",
		"Cape Verde",
		"Cayman Islands",
		"Central African Republic",
		"Chad",
		"Chile",
		"China",
		"Colombia",
		"Comoros",
		"Democratic Republic of the Congo",
		"Republic of the Congo",
		"Cook Islands",
		"Costa Rica",
		"Croatia",
		"Cuba",
		"Curaçao",
		"Cyprus",
		"Czech Republic",
		"Denmark",
		"Djibouti",
		"Dominica",
		"Dominican Republic",
		"Ecuador",
		"Egypt",
		"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Falkland Islands",
		"Faroe Islands",
		"Fiji",
		"Finland",
		"France",
		"French Guiana",
		"French Polynesia",
		"French Southern and Antarctic Lands",
		"Gabon",
		"Gambia",
		"Georgia",
		"Germany",
		"Ghana",
		"Gibraltar",
		"Greece",
		"Greenland",
		"Grenada",
		"Guadeloupe",
		"Guam",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",
		"Hong Kong",
		"Hungary",
		"Iceland",
		"India",
		"Indonesia",
		"Iran",
		"Iraq",
		"Ireland",
		"Israel",
		"Italy",
		"Ivory Coast",
		"Jamaica",
		"Japan",
		"Jordan",
		"Kazakhstan",
		"Kenya",
		"Kiribati",
		"North Korea",
		"South Korea",
		"Kosovo",
		"Kurdistan",
		"Kuwait",
		"Kyrgyzstan",
		"Laos",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Libya",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"North Macedonia",
		"Macau",
		"Premium channels",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marquesas Islands",
		"Marshall Islands",
		"Martinique",
		"Mauritania",
		"Mauritius",
		"Mayotte",
		"Mexico",
		"Over-the-air",
		"National TV Broadcast",
		"Federated States of Micronesia",
		"Midway Islands",
		"Moldova",
		"Monaco",
		"Mongolia",
		"Montenegro",
		"Montserrat",
		"Morocco",
		"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepal",
		"Netherlands",
		"Netherlands Antilles",
		"New Caledonia",
		"New Zealand",
		"Nicaragua",
		"National channels",
		"Local channels",
		"Niger",
		"Nigeria",
		"Niue",
		"Northern Mariana Islands",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Palestine",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Government-owned networks",
		"Minor television networks",
		"Pitcairn Islands",
		"Poland",
		"Portugal",
		"Puerto Rico",
		"Qatar",
		"Réunion",
		"Romania",
		"Russia ",
		"Rwanda",
		"Saba",
		"Saint Barthélemy",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Sint Maarten",
		"Saint Pierre and Miquelon",
		"Saint Vincent and the Grenadines",
		"Samoa",
		"San Marino",
		"São Tomé and Príncipe",
		"Saudi Arabia",
		"Senegal",
		"Serbia",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Sint Eustatius",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",
		"South Africa",
		"Spain",
		"Sri Lanka",
		"Sudan",
		"South Sudan",
		"Suriname",
		"Eswatini",
		"Sweden",
		"Switzerland",
		"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",
		"Thailand",
		"Tibet",
		"Timor-Leste",
		"Togo",
		"Tokelau",
		"Tonga",
		"Trinidad and Tobago",
		"Tristan da Cunha",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Turks and Caicos Islands",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",
		"United Kingdom",
		"United States",
		"Over-the-air",
		"Cable and satellite",
		"Defunct",
		"United States Virgin Islands",
		"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Vatican City",
		"Venezuela",
		"Vietnam",
		"Wake Island",
		"Wallis and Futuna",
		"Western Sahara",
		"Yemen",
		"Zambia",
		"Zanzibar",
		"Zimbabwe"
  ];
  var empty = [];
  //window.console.log(
  for(var tvCount = 0;tvCount < tvListPlatformsCountry.length;tvCount++){
	  var classID = "tv-list-a button " + tvListPlatformsCountryID[tvCount];
	  var tvListDoc = document.createElement("a");
	  var tvListDocText = document.createTextNode(tvListPlatformsCountry[tvCount]);
	  tvListDoc.setAttribute("class", classID);
	  tvListDoc.setAttribute("id", tvListPlatformsCountryID[tvCount]);
	  tvListDoc.append(tvListDocText);
	  tvListContainer.append(tvListDoc);
	  empty[tvCount] = tvListDoc;
  }
 // window.console.log(tvListContainer);
  
  //window.console.log("9300333"); 
  
  myModal_1.insertBefore(tvListContainer, caption1);
  caption1.innerHTML = "Didcy Home";
  img01_1.value = '9';
  //window.console.log("kdkdkd");
  if(img01_1.value == '9'){
	 empty[79].onclick = function(){showTvPlatforms(79, tvListPlatforms.ghana, 
	 tvListPlatforms.ghana.length);}
  }
}

function showTvPlatforms(id = undefined, tvList = [], tvStationsLength = 0){
		var tvListContainer = document.createElement("div");
		tvListContainer.setAttribute("class", "modal-content-12");
		tvListContainer.setAttribute("id", "tv-list-container-12");
	  
	  //myModal_1.append(tvListContainer);
	 
	  
	  //myModal_1.insertBefore(tvListContainer, caption1);
	  //var tvListContainer2 = document.getElementById("tv-list-container");
	  //myModal_1.insertBefore(tvListContainer2, caption1);
	  
	  const tvListPlatformsID = tvList;
	  var empty = [];
	  
	  for(var tvCount = 0;tvCount < tvStationsLength;tvCount++){
		  var classID = "tv-list-a button " + tvListPlatformsID[tvCount];
		  var tvListDoc = document.createElement("a");
		  var tvListDocText = document.createTextNode(tvListPlatformsID[tvCount]);
		  tvListDoc.setAttribute("class", classID);
		  tvListDoc.setAttribute("id", tvListPlatformsID[tvCount]);
		  tvListDoc.append(tvListDocText);
		  tvListContainer.append(tvListDoc);
		  empty[tvCount] = tvListDoc;
	  }

						  
		//window.console.log(modal12);
		modal12.insertBefore(tvListContainer, captionText12);	
        //window.console.log(modal12);		
        modal12.style.display = "block";
        modalImg12.style.display = "none";
		modalImg12.value = "13";	
		captionText12.innerHTML = "Didcy Watch";	
}

function StoryTime(tellYourStoryId = null, profileID = 0){
	switch(tellYourStoryId){
		case 0:
		{
			var ActorStory = {
				firstname : document.getElementById("fname"),
				middlename : document.getElementById("mname"),
				lastname : document.getElementById("lname"),
				profession : document.getElementById("profession"),
				privateTelOptional : document.getElementById("ptel"),
				publicTelOptional : document.getElementById("putel"),
				whatAppNoOptional : document.getElementById("wtel"),
				businessEmail : document.getElementById("bemail"),
				privatePersonalEmailOptional : document.getElementById("pemail"),
				facebookHandleOptional : document.getElementById("fb_handle"),
				twitterHandleOptional : document.getElementById("tw_handle"),
				instagramHandleOptional : document.getElementById("ins_handle"),
				youtubeHandleOptional : document.getElementById("you_handle"),
				websiteDomainOptional : document.getElementById("web_handle"),
				actorStory : document.getElementById("agpd"),
				countryOfBirth : document.getElementById("country"),
				done : document.getElementById("cancel-2")
			};
			
			function CheckTruthOfStory(){
				uploadz(ActorStory.firstname.value, ActorStory.middlename.value, ActorStory.lastname.value,
				ActorStory.profession.value, ActorStory.privateTelOptional.value, ActorStory.publicTelOptional.value, 
				ActorStory.whatAppNoOptional.value, ActorStory.businessEmail.value, 
				ActorStory.privatePersonalEmailOptional.value, ActorStory.facebookHandleOptional.value,
				ActorStory.twitterHandleOptional.value, ActorStory.instagramHandleOptional.value,
			    ActorStory.youtubeHandleOptional.value, ActorStory.websiteDomainOptional.value,
				ActorStory.actorStory.value, ActorStory.countryOfBirth.value, ActorStory.done.value);
			}
			CheckTruthOfStory();
		}
		break;
		case 1:
		case 2:
		{
			var CompanyStory = {
				institutionName : document.getElementById("iname-company-registration"),
				ein : document.getElementById("ein-company-registration"),
				tin : document.getElementById("tin-company-registration"),
				activity : document.getElementById("activity-company-registration"),
				privateTelOptional : document.getElementById("ptel-company-registration"),
				publicTelOptional : document.getElementById("putel-company-registration"),
				whatAppNoOptional : document.getElementById("wtel-company-registration"),
				businessEmail : document.getElementById("bemail-company-registration"),
				privatePersonalEmailOptional : document.getElementById("pemail-company-registration"),
				facebookHandleOptional : document.getElementById("fb_handle-company-registration"),
				twitterHandleOptional : document.getElementById("tw_handle"),
				instagramHandleOptional : document.getElementById("ins_handle-company-registration"),
				youtubeHandleOptional : document.getElementById("you_handle-company-registration"),
				websiteDomainOptional : document.getElementById("web_handle-company-registration"),
				companyStory : document.getElementById("agpd-company-registration"),
				location : document.getElementById("location-company-registration"),
				countryOfRegistration : document.getElementById("country-company-registration"),
				companyRegistrationDate : document.getElementById("crd-company-registration"),
				done : document.getElementById("cancel-2-company-registration")
			};
			
			function CheckTruthOfStory(){
				uploadzCompany(CompanyStory.institutionName.value, 
				CompanyStory.ein.value, CompanyStory.tin.value,
				CompanyStory.activity.value, CompanyStory.privateTelOptional.value, CompanyStory.publicTelOptional.value, 
				CompanyStory.whatAppNoOptional.value, CompanyStory.businessEmail.value, 
				CompanyStory.privatePersonalEmailOptional.value, 
				CompanyStory.facebookHandleOptional.value,
				CompanyStory.twitterHandleOptional.value, 
				CompanyStory.instagramHandleOptional.value,
			    CompanyStory.youtubeHandleOptional.value, 
				CompanyStory.websiteDomainOptional.value,
				CompanyStory.companyStory.value, 
				CompanyStory.location.value, 
				CompanyStory.countryOfRegistration.value, 
				CompanyStory.companyRegistrationDate.value, 
				CompanyStory.done.value);
			}
			CheckTruthOfStory();		   	
		}
		break;
		default: 
		 return;
	}
}

function uploadzCompany(institutionName, ein, tin, activity, 
  privateTelOptional, publicTelOptional, 
  whatAppNoOptional, businessEmail, privatePersonalEmailOptional, 
  facebookHandleOptional, twitterHandleOptional, instagramHandleOptional, 
  youtubeHandleOptional, websiteDomainOptional,
  companyStory, location, countryOfRegistration,
  companyRegistrationDate, done){
      //window.console.log(document.forms['adv-files-20']);

	  if($fileSet == 0){
		 return AlertBoxInModal("Please select a profile image!!!");
	  }
	  
	  if(document.forms['adv-files-20']['uploadz'].files.length == 0){
		 return AlertBoxInModal("Please select a company profile image/logo!!!");
	  }
	  
	  var drim = window.location.href;
      let files =  document.getElementById("upload-2");  
      var form = new FormData();
	  form.append("uploadz", document.forms['adv-files-20']['uploadz'].files[0]);
	  form.append("institutionName", institutionName);
	  form.append("ein", ein);
	  form.append("tin", tin);
	  if(activity != "Select Your Company's Activity :"){
	    form.append("activity", activity);
	  }else{
		return AlertBoxInModal("Please select your company's activity");
	  }
	  form.append("privateTelOptional", privateTelOptional);
	  form.append("publicTelOptional", publicTelOptional);
	  form.append("whatAppNoOptional", whatAppNoOptional);
	  form.append("businessEmail", businessEmail);
	  form.append("privatePersonalEmailOptional", privatePersonalEmailOptional);
	  form.append("facebookHandleOptional", facebookHandleOptional);
	  form.append("twitterHandleOptional", twitterHandleOptional);
	  form.append("instagramHandleOptional", instagramHandleOptional);
	  form.append("youtubeHandleOptional", youtubeHandleOptional);
	  form.append("websiteDomainOptional", websiteDomainOptional);
	  form.append("companyStory", companyStory);
	  form.append("location", location);
	  form.append("countryOfRegistration", countryOfRegistration);
	  form.append("companyRegistrationDate", companyRegistrationDate);
	  form.append("done", done);
	  form.append("imageId", drim.slice(36));
	  form.append("fetch", 11);

	  $.ajax({
	     type: "POST",
		 url: "adv-uploader.php",
		 data: form,
		 contentType: false,
		 cache : false,
		 processData: false,
		 success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);
			if(data_returned.state == 0){
				return AlertBoxInModal("Connection to Server Error!!!.");
			}
			else if(data_returned.state == 1){
				return AlertBoxInModal("Connection to Database Error!!!.");
			}
			else if(data_returned.state == 2){
				return AlertBoxInModal("User already exists!!!.");
			}	
			else if(data_returned.state == 3){
				return AlertBoxInModal("Profile Error!!!.");
			}
			else if(data_returned.state == 4){
				 var image = document.getElementById('profile');
				 image.src = data_returned.src;
				 image.onclick = function(){
				  // Get the modal
				  var modal = document.getElementById("myModal-1");

				  // Get the image and insert it inside the modal - use its "alt" text as a caption
				  //var img = document.getElementById("");
				  var modalImg = document.getElementById("img01-1");
				  var captionText = document.getElementById("caption-1");
				  
			      modal.style.display = "block";
			 
			      modalImg.src = image.src;
			      captionText.innerHTML = "Didcy Profile";	
                  modalImg.value = '8';				  
				 }
				 image.style.display = "block";
				 document.getElementById("uploads-2").value = "";
				 $fileSet = 0;
				 return AlertBoxInModal("File upload was successful.");
			}
			else if(data_returned.state == 2000){
				 return AlertBoxInModal("Please insert your institution Name!!!.");
			}
			else if(data_returned.state == 2001){
				 return AlertBoxInModal("Please insert your ein!!!.");
			}
			else if(data_returned.state == 2002){
				 return AlertBoxInModal("Please insert your tin!!!.");
			}
			else if(data_returned.state == 2003){
				 return AlertBoxInModal("Please insert your company's activity!!!.");
			}
			else if(data_returned.state == 2004){
				 return AlertBoxInModal("Please insert your company's public telephone number!!!.");
			}
			else if(data_returned.state == 2005){
				 return AlertBoxInModal("Please insert your company's story !!!.");
			}
			else if(data_returned.state == 2006){
				 return AlertBoxInModal("Please insert your physical location in the country!!!.");
			}
			else if(data_returned.state == 2007){
				 return AlertBoxInModal("Please insert your country of registration!!!.");
			}
			else if(data_returned.state == 2008){
				 return AlertBoxInModal("Please insert your company's registration date!!!.");
			}
			else if(data_returned.state == 2009){
				 return AlertBoxInModal("Please insert your company's business email!!!.");
			}
			else{
				
			}
		 },
		 error: function(){}
	  });
}

function uploadz(firstname, middlename, lastname, profession, privateTelOptional, publicTelOptional, 
  whatAppNoOptional, businessEmail, privatePersonalEmailOptional, facebookHandleOptional,
  twitterHandleOptional, instagramHandleOptional, youtubeHandleOptional, websiteDomainOptional,
  actorStory, countryOfBirth, done){
      
	  if($fileSet == 0){
		 return AlertBoxInModal("Please select a profile image!!!");
	  }else{
		  if(document.forms['adv-files-20']['uploadz'].files.length == 0){
			 return AlertBoxInModal("Please select a profile image!!!");
		  }
	  }
	  
	  var drim = window.location.href;
      let files =  document.getElementById("upload-2");  
      var form = new FormData();
	  form.append("uploadz", document.forms['adv-files-20']['uploadz'].files[0]);
	  form.append("firstname", firstname);
	  form.append("middlename", middlename);
	  form.append("lastname", lastname);
	  form.append("profession", profession);
	  form.append("privateTelOptional", privateTelOptional);
	  form.append("publicTelOptional", publicTelOptional);
	  form.append("whatAppNoOptional", whatAppNoOptional);
	  form.append("businessEmail", businessEmail);
	  form.append("privatePersonalEmailOptional", privatePersonalEmailOptional);
	  form.append("facebookHandleOptional", facebookHandleOptional);
	  form.append("twitterHandleOptional", twitterHandleOptional);
	  form.append("instagramHandleOptional", instagramHandleOptional);
	  form.append("youtubeHandleOptional", youtubeHandleOptional);
	  form.append("websiteDomainOptional", websiteDomainOptional);
	  form.append("actorStory", actorStory);
	  form.append("countryOfBirth", countryOfBirth);
	  form.append("done", done);
	  form.append("imageId", drim.slice(36));
	  form.append("fetch", 5);

	  $.ajax({
	     type: "POST",
		 url: "adv-uploader.php",
		 data: form,
		 contentType: false,
		 cache : false,
		 processData: false,
		 success: function(result){
			window.console.log(result);
			var data_returned = JSON.parse(result);
			if(data_returned.state == 0){
				return AlertBoxInModal("Connection to Server Error!!!.");
			}
			else if(data_returned.state == 1){
				return AlertBoxInModal("Connection to Database Error!!!.");
			}
			else if(data_returned.state == 2){
				return AlertBoxInModal("User already exists!!!.");
			}	
			else if(data_returned.state == 3){
				return AlertBoxInModal("Profile Error!!!.");
			}
			else if(data_returned.state == 4){
				 var image = document.getElementById('profile');
				 image.src = data_returned.src;
				 image.onclick = function(){
				  // Get the modal
				  var modal = document.getElementById("myModal-1");

				  // Get the image and insert it inside the modal - use its "alt" text as a caption
				  //var img = document.getElementById("");
				  var modalImg = document.getElementById("img01-1");
				  var captionText = document.getElementById("caption-1");
				  
			      modal.style.display = "block";
			 
			      modalImg.src = image.src;
			      captionText.innerHTML = "Didcy Profile";	
                  modalImg.value = '8';				  
				 }

				 image.style.display = "block";
				 document.getElementById("uploads-2").value = "";
				 $fileSet = 0;
				 return AlertBoxInModal("File upload was successful.");
			}
			else if(data_returned.state == 200){
				 return AlertBoxInModal("Please insert your first name!!!.");
			}
			else if(data_returned.state == 202){
				 return AlertBoxInModal("Please insert your last name!!!.");
			}
			else{
				
			}
		 },
		 error: function(){}
	  });
}
  
gagaSubscription.onclick = function() { 
  modal2.style.display = "block";
  modal2.style.zIndex = "1";
 
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  //document.getElementById("img01-1").src = "adv.actors.profiles/people2.jpg";


  //myModal_1.removeChild(img01_1);
  img01_1.style.display = "none";

	var gagaSubscriptionContainer = document.createElement("div");
	gagaSubscriptionContainer.setAttribute("class", "modal-content-1");
	gagaSubscriptionContainer.setAttribute("id", "gaga-subscription-container");
  
  //myModal_1.append(tvListContainer);
 
  
  //myModal_1.insertBefore(tvListContainer, caption1);
  //var tvListContainer2 = document.getElementById("tv-list-container");
  //myModal_1.insertBefore(tvListContainer2, caption1);
  
  const gagaSubscriptionPlatforms = ["Shyly", "Pricing", "Newsletter", "Notifications", 
  "Reach", "Payments", "Refund Request", "S-Records", "How to Subscribe", "Mini", 
  "Reset Background", "Blur Background"];
  const gagaSubscriptionID = ["gaga-chat", "gaga-pricing", "gaga-newsletter", "gaga-notification", "gaga-reach", "gaga-payments", "gaga-refund-request", 
  "gaga-s-records", "gaga-how-to-subscribe", "gaga-web-services", "gaga-reset-bg", 
  "gaga-blur-bg"];
  
  for(var gagaCount = 0;gagaCount < gagaSubscriptionPlatforms.length;gagaCount++){
	  var gagaSubscriptionDoc = document.createElement("a");
	  var gagaSubscriptionDocText = document.createTextNode(gagaSubscriptionPlatforms[gagaCount]);
	  let classID = gagaSubscriptionID[gagaCount] + " button";
	  gagaSubscriptionDoc.setAttribute("class", classID);
	  gagaSubscriptionDoc.setAttribute("id", gagaSubscriptionID[gagaCount]);
	  gagaSubscriptionDoc.append(gagaSubscriptionDocText);
	  gagaSubscriptionContainer.append(gagaSubscriptionDoc);
  }
 // window.console.log(tvListContainer);
  
  //window.console.log("9300333");
  
  myModal_1.insertBefore(gagaSubscriptionContainer, caption1);
  caption1.innerHTML = "Didcy Subscribe";
  img01_1.value = '6';
  
  var gagaPricing = document.getElementById("gaga-pricing");
  var gagaStand = document.getElementById("gaga-stand");
  var gagaNewsLetter = document.getElementById("gaga-newsletter");
  var gagaHowToSubscribe = document.getElementById("gaga-how-to-subscribe");
  var gagaHowToNotification = document.getElementById("gaga-notification");
  var gagaReach = document.getElementById("gaga-reach");
  var gagaPayments = document.getElementById("gaga-payments");
  var gagaRefundRequest = document.getElementById("gaga-refund-request");
  var gagaSRecords = document.getElementById("gaga-s-records");
  var gagaChat = document.getElementById("gaga-chat");
  var gagaWebServices = document.getElementById("gaga-web-services");
  var gagaResetBG = document.getElementById("gaga-reset-bg");
  var gagaBlurBG = document.getElementById("gaga-blur-bg");
  

  gagaPricing.style.display = "none";
  gagaHowToSubscribe.style.display = "none";
  gagaHowToNotification.style.display = "block";
  gagaReach.style.display = "none";
  gagaPayments.style.display = "none";
  gagaRefundRequest.style.display = "none";
  gagaSRecords.style.display = "none";
  gagaChat.style.display = "block"; //
  gagaWebServices.style.display = "none";
  
  
  gagaResetBG.style.display = "none";
  gagaBlurBG.style.display = "none";
  
  gagaChat.onclick = function(){
	  //ChatBoard();
	  document.getElementById('myModal-chat').style.display='block';
  }

  gagaResetBG.onclick = function(){
	  document.getElementById('logo').src = 'didcy.wall.jpg';
  }
  
  gagaBlurBG.onclick = function(){
	  document.getElementById('logo').src = 'didcy2.png';
  }
  
  gagaWebServices.onclick = function(){
	  //ChatBoard();
	  document.getElementById('myModal-WebServices').style.display='block';
  }

  gagaHowToSubscribe.onclick = function() { 
    modalSubscribe.style.display = "block";
  }
  gagaReach.onclick = function() {
      modalReach.style.height = "100%";
	  subContainers = 2;
	  document.getElementById('w3-slider').style.display='block';
	  return;
      ServicesNotAvailable('Reach Services', 
	  'Reach Services report is at the back side. Please tab/put the mouse on this box to view the report.');	  
  } 
  
  gagaPayments.onclick = function() {
	  modalPayments.style.height = "100%";
	  subContainers = 4;
	  return;	  
      ServicesNotAvailable('Payment Services', 
	  'Payment Services report is at the back side. Please tab/put the mouse on this box to view the report.');	  
  } 
  
  gagaRefundRequest.onclick = function() {
	  modalRefundRequest.style.height = "100%";
	  subContainers = 5;
	  return;	  
      ServicesNotAvailable('Refund Request', 
	  'Refund Request report is at the back side. Please tab/put the mouse on this box to view the report.');	  
  } 
  
  gagaSRecords.onclick = function() {
	  modalSRecords.style.height = "100%";
	  subContainers = 6;
	  return;	  
      ServicesNotAvailable('S-Records', 
	  'S-Records report is at the back side. Please tab/put the mouse on this box to view the report.');	  
  } 
  
  gagaHowToNotification.onclick = function() { 
      modalNotification.style.height = "100%";
      modalNotification.style.zIndex = '73';
	  subContainers = 3;
	  return;
      ServicesNotAvailable('Notification Services', 
	  'Notification Services report is at the back side. Please tab/put the mouse on this box to view the report.');
  }
  gagaStand.onclick = function() { 
    modalStand.style.zIndex = "11";
    modalStand.style.display = "block";
	modalStand.style.backgroundColor = "black";
    captionStand.innerHTML = "Didcy Pricing";
	setTimeout(() => {
	document.getElementsByClassName("columns-2")[0].style.display = "block";
	document.getElementsByClassName("columns-2")[1].style.display = "block";
    document.getElementsByClassName("columns-2")[2].style.display = "block";}, 1000);    
  }
  gagaPricing.onclick = function() { 
      modalPricingTable.style.height = "100%";
      modalPricingTable.style.zIndex = "10";
  }
  gagaWebPrice.onclick = function() { 
    modal10.style.zIndex = "11";
    modal10.style.display = "block";
	modal10.style.backgroundColor = "black";
    caption10.innerHTML = "Didcy Pricing";
	setTimeout(() => {
	document.getElementsByClassName("columns")[0].style.display = "block";
	document.getElementsByClassName("columns")[1].style.display = "block";
    document.getElementsByClassName("columns")[2].style.display = "block";}, 1000);
  }
  gagaSpecial.onclick = function() { 
    modalSpecial.style.zIndex = "11";
    modalSpecial.style.display = "block";
	modalSpecial.style.backgroundColor = "black";/*black*/
    captionSpecial.innerHTML = "Didcy Pricing";
	setTimeout(() => {
	document.getElementsByClassName("columns-special")[0].style.display = "block";
	document.getElementsByClassName("columns-special")[1].style.display = "block";
    document.getElementsByClassName("columns-special")[2].style.display = "block";}, 1000);
  }
  
  gagaRelief.onclick = function() { 
    modalRelief.style.zIndex = "11";
    modalRelief.style.display = "block";
	modalRelief.style.backgroundColor = "black";/*black*/
    captionRelief.innerHTML = "Didcy Pricing";
	setTimeout(() => {
	document.getElementsByClassName("columns-relief")[0].style.display = "block";
	document.getElementsByClassName("columns-relief")[1].style.display = "block";
	document.getElementsByClassName("columns-relief")[2].style.display = "block";}, 1000);
  }

  gagaMiniWide.onclick = function() { 
    modalRelief.style.zIndex = "11";
    modalRelief.style.display = "block";
	modalRelief.style.backgroundColor = "black";/*black*/
    captionRelief.innerHTML = "Didcy Pricing";
	setTimeout(() => {
	document.getElementsByClassName("columns-relief")[0].style.display = "block";
	document.getElementsByClassName("columns-relief")[1].style.display = "block";
	document.getElementsByClassName("columns-relief")[2].style.display = "block";}, 1000);
  }
  
  gagaNewsLetter.onclick = function(){
    modal11.style.display = "block";
	modal11.style.backgroundColor = "black";
    /* setTimeout(() => { */
    document.getElementsByClassName("form-newsletter")[0].style.display = "block";/* }, 0); */
    caption11.innerHTML = "Didcy Send";	  
	caption11.style.color = "white";
  }
}

var reactContainerDelID = 0;

var modal8 = document.getElementById("myModal-8");
var captionText8 = document.getElementById("caption-8");
var uploadProfileContainer = document.getElementById("upload-profile");
var gagaReactUpload, gagaPlugins, upload = null, gagaSiteContent, gagaMyStory, gagaAdImageRecords, gagaUpcomingUpdates, gagaMedia, gagaVideoFilmPrd,
gagaExtras, gagaRateUs, gagaCompaniesOnly, gagaActorsGroupsOnly, gagaSiteMap, 
gagaAdvertisementChannels, gagaSEOAdvertisements, gagaContentIntegration, 
gagaUplay, gagaRipaBet, gagaRipaBank, gagaRipa, myStoryId = 0, selectCloseCheck = 0;
var formPopup2 = document.getElementsByClassName("form-popup-2")[0];
var formPopup2_company_registration = document.getElementsByClassName("form-company-registration-popup-2")[0];
var formPopup21 = document.getElementsByClassName("form-popup-21")[0];
function removeModal27Contents(){
	modal2.removeChild(document.getElementById("gaga-extras-container"));
	img01_1.value = "0";
}
function removeModal2Contents(){
	modal2.removeChild(document.getElementById("gaga-react-container"));
	img01_1.value = "0";
	reactContainerDelID = 1;
}

function RecreateReact2(){
  if(reactContainerDelID != 1){
     removeModal2Contents();
  }
  modal2.style.display = "block";
 
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  //document.getElementById("img01-1").src = "adv.actors.profiles/people2.jpg";


  //myModal_1.removeChild(img01_1);
  img01_1.style.display = "none";

	var gagaExtrasContainer = document.createElement("div");
	gagaExtrasContainer.setAttribute("class", "modal-content-1");
	gagaExtrasContainer.setAttribute("id", "gaga-extras-container");
  
  //myModal_1.append(tvListContainer);
 
  
  //myModal_1.insertBefore(tvListContainer, caption1);
  //var tvListContainer2 = document.getElementById("tv-list-container");
  //myModal_1.insertBefore(tvListContainer2, caption1);
  
  const gagaExtrasPlatforms = ["Advertisement Channels", "SEO Advertisements", 
  "Content Integration", "Companies Only", "SiteMap", "Actors & Groups only", 
  "Ripa", "Upcoming Updates", "Rate Us"];//
  //"UPlay", "RipaBet", "RipaBank", 
  //"Upload a profile image999", "Create with us", "Video & Film Productions", 
  //"Media", "My Story", "Site Content", "Extras", "Ad Image Records"];//, 
  //"Advertisement Channels", "SEO Advertisements", "Content Integration"];
  //const gagaExtrasID = ["gaga-upload", "gaga-create-ads", "gaga-video-fm-product", "gaga-media", "gaga-my-story", "gaga-site-content", "gaga-extras", "gaga-upload-static-ads",
  const gagaExtrasID = ["gaga-advert-channels", "gaga-seo-advert", "gaga-content-integration", 
  "gaga-companies-only", "gaga-site-map", "gaga-actors-groups-only", 
  "gaga-ripa", "gaga-upcoming-updates", "gaga-rate-us"];
  //"gaga-uplay", "gaga-RipaBet", "gaga-RipaBank", 
  
  for(var gagaCount = 0;gagaCount < gagaExtrasPlatforms.length;gagaCount++){
	  var gagaExtrasDoc = document.createElement("a");
	  var gagaExtrasDocText = document.createTextNode(gagaExtrasPlatforms[gagaCount]);
	  let classID = gagaExtrasID[gagaCount] + " button";
	  gagaExtrasDoc.setAttribute("class", classID);
	  gagaExtrasDoc.setAttribute("id", gagaExtrasID[gagaCount]);
	  gagaExtrasDoc.append(gagaExtrasDocText);
	  gagaExtrasContainer.append(gagaExtrasDoc);
  }	
  
  myModal_1.insertBefore(gagaExtrasContainer, caption1);
  caption1.innerHTML = "Didcy Extras";
  img01_1.value = '16';

gagaUpcomingUpdates = document.getElementById("gaga-upcoming-updates");
gagaUpcomingUpdates.onclick = function(){
   modalUpcomingUpdates.style.display = "block";
}

gagaSiteMap = document.getElementById("gaga-site-map");
gagaAdvertisementChannels = document.getElementById("gaga-advert-channels");
gagaSEOAdvertisements = document.getElementById("gaga-seo-advert");
gagaContentIntegration = document.getElementById("gaga-content-integration");
gagaUplay = document.getElementById("gaga-uplay");
gagaRipaBet = document.getElementById("gaga-ripabet");
gagaRipaBank = document.getElementById("gaga-ripabank");
gagaRipa = document.getElementById("gaga-ripa");

gagaSiteMap.style.display = "none";
gagaAdvertisementChannels.style.display = "none";
gagaSEOAdvertisements.style.display = "none";
gagaContentIntegration.style.display = "none";
gagaUplay.style.display = "block";
gagaRipaBet.style.display = "block"; //BitBet
gagaRipaBank.style.display = "block"; //BitBet
gagaRipa.style.display = "none"; //BitBet


gagaSiteMap.onclick = function() { 
      modalSiteMap.style.height = "100%";
      //modalSiteMap.style.zIndex = "10";
}

function Ripa(){
  modalRipaBoard.style.height = "100%";
  AlertBoxInModal("Find out more about DidcyBank at DidcyFind");
}

gagaRipa.onclick = function() { 
  return Ripa();
  return ServicesNotAvailable('Ripa', 
  'Ripa report is at the back side. Please tab/put the mouse on this box to view the report.', -4);
}

gagaUplay.onclick = function() { 
  return ServicesNotAvailable('UPlay', 
  'UPlay report is at the back side. Please tab/put the mouse on this box to view the report.', -4);
}

gagaRipaBet.onclick = function() { 
  return ServicesNotAvailable('RipaBet', 
  'RipaBet report is at the back side. Please tab/put the mouse on this box to view the report.', -4);
}

gagaRipaBank.onclick = function() { 
  modalRipaBank.style.zIndex = "35";
  modalRipaBank.style.height = "100%";
  return;
  return ServicesNotAvailable('RipaBank', 
  'RipaBank report is at the back side. Please tab/put the mouse on this box to view the report.', -4);
}

gagaAdvertisementChannels.onclick = function() { 
      modalAdvertisementChannels.style.width = "100%";
      modalAdvertisementChannels.style.height = "100%";
     // modalAdvertisementChannels.style.display = "block";
      //modalSiteMap.style.zIndex = "10";
}

gagaSEOAdvertisements.onclick = function() { 
      modalSEOAdvertisement.style.height = "100%";
      modalSEOAdvertisement.style.width = "100%";
      //modalSiteMap.style.zIndex = "10";
}

gagaContentIntegration.onclick = function() { 
      modalContentIntegration.style.height = "100%";
      modalContentIntegration.style.width = "100%";
      //modalSiteMap.style.zIndex = "10";
}

gagaCompaniesOnly = document.getElementById("gaga-companies-only");
gagaActorsGroupsOnly = document.getElementById("gaga-actors-groups-only");

gagaCompaniesOnly.style.display = "none";
gagaActorsGroupsOnly.style.display = "none";

gagaCompaniesOnly.onclick = function(){
	modalCompaniesOnly.style.height = "100%";
	modalCompaniesOnly.style.width = "100%";
}

gagaActorsGroupsOnly.onclick = function(){
  modalActorsGroupsOnly.style.display = "block";
  modalActorsGroupsOnly.style.width = "100%";
/*   modalActorsGroupsOnly.setAttribute("class", "modal-actors-groups-only  w3-modal-content w3-animate-bottom"); */
}

gagaRateUs = document.getElementById("gaga-rate-us");
gagaRateUs.onclick = function(){
  removeModal27Contents();
  modal2.style.display = "block";
 
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  //document.getElementById("img01-1").src = "adv.actors.profiles/people2.jpg";


  //myModal_1.removeChild(img01_1);
  img01_1.style.display = "none";

	var gagaRateContainer = document.createElement("div");
	gagaRateContainer.setAttribute("class", "modal-content-1");
	gagaRateContainer.setAttribute("id", "gaga-rate-container");
  
  //myModal_1.append(tvListContainer);
 
  
  //myModal_1.insertBefore(tvListContainer, caption1);
  //var tvListContainer2 = document.getElementById("tv-list-container");
  //myModal_1.insertBefore(tvListContainer2, caption1);
  
  const gagaRatePlatforms = ["RATE"];//
  //"Upload a profile image999", "Create with us", "Video & Film Productions", 
  //"Media", "My Story", "Site Content", "Extras", "Ad Image Records"];//, 
  //"Advertisement Channels", "SEO Advertisements", "Content Integration"];
  const gagaRateID = ["gaga-rate"];
  
  for(var gagaCount = 0;gagaCount < 1;gagaCount++){
	  var gagaRateDoc = document.createElement("a");
	  var gagaRateDocText = document.createTextNode(gagaRatePlatforms[gagaCount]);
	  let classID = gagaRateID[gagaCount] + " button";
	  gagaRateDoc.setAttribute("class", classID);
	  gagaRateDoc.setAttribute("id", gagaRateID[gagaCount]);
	  gagaRateDoc.append(gagaRateDocText);
	  gagaRateContainer.append(gagaRateDoc);
  }	
  
  myModal_1.insertBefore(gagaRateContainer, caption1);
  caption1.innerHTML = "Didcy Rate";
  img01_1.value = '17';	
  
  gagaRateDoc.onclick = function(){
	  document.getElementsByClassName("modal-rater")[0].style.display = "block";
	  
	  var spanRater = document.getElementsByClassName("close-rater")[0];
	  
	  spanRater.onclick = function(){
		  document.getElementsByClassName("modal-rater")[0].style.display = "none";
	  }
  }
  
}
}
function RecreateReact(){
  modal2.style.display = "block";
 
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  //document.getElementById("img01-1").src = "adv.actors.profiles/people2.jpg";


  //myModal_1.removeChild(img01_1);
  img01_1.style.display = "none";

	var gagaReactContainer = document.createElement("div");
	gagaReactContainer.setAttribute("class", "modal-content-1");
	gagaReactContainer.setAttribute("id", "gaga-react-container");
  
  //myModal_1.append(tvListContainer);
 
  
  //myModal_1.insertBefore(tvListContainer, caption1);
  //var tvListContainer2 = document.getElementById("tv-list-container");
  //myModal_1.insertBefore(tvListContainer2, caption1);
  //Create with us
  const gagaReactPlatforms = ["Upload a profile image", "Studio", "Plugins", "Pick", "Crym", "My Story", "View AdCloud", "Extras", "Upload your Static ads"];//"Ad Image Records"];//, "Advertisement Channels", "SEO Advertisements", "Content Integration"];
  const gagaReactID = ["gaga-upload", "gaga-create-ads", "gaga-plugins", "gaga-video-fm-product", "gaga-media", "gaga-my-story", "gaga-site-content", "gaga-extras", "gaga-upload-static-ads"];//"gaga-upload-static-ads"];
  
  for(var gagaCount = 0;gagaCount < 9;gagaCount++){
	  var gagaReactDoc = document.createElement("a");
	  var gagaReactDocText = document.createTextNode(gagaReactPlatforms[gagaCount]);
	  let classID = gagaReactID[gagaCount] + " button";
	  gagaReactDoc.setAttribute("class", classID);
	  gagaReactDoc.setAttribute("id", gagaReactID[gagaCount]);
	  gagaReactDoc.append(gagaReactDocText);
	  gagaReactContainer.append(gagaReactDoc);
  }
 // window.console.log(tvListContainer);
  
  //window.console.log("9300333");
  
  myModal_1.insertBefore(gagaReactContainer, caption1);
  caption1.innerHTML = "Didcy React";
  img01_1.value = '5';
  
  
gagaReactUpload = document.getElementById("gaga-upload");
gagaSiteContent = document.getElementById("gaga-site-content");
gagaMyStory = document.getElementById("gaga-my-story");
gagaPlugins = document.getElementById("gaga-plugins");

gagaAdImageRecords = document.getElementById("gaga-upload-static-ads");
gagaExtras = document.getElementById("gaga-extras");
gagaMedia = document.getElementById("gaga-media");
gagaVideoFilmPrd = document.getElementById("gaga-video-fm-product");
/* var formPopup2 = document.getElementsByClassName("form-popup-2")[0];
var formPopup2_company_registration = document.getElementsByClassName("form-company-registration-popup-2")[0];
var formPopup21 = document.getElementsByClassName("form-popup-21")[0]; */

function MyStoryAsAdActor(){
	//document.getElementsByClassName("form-2-container")[0].setAttribute("class", "form-2-container site-content");
	//document.getElementsByClassName("form-2-container")[0].style.display = "block";
	formPopup2.style.display = "block";
	//document.getElementsByClassName("form-2-container")[0].style.zIndex = "9";
	formPopup2.style.zIndex = "9";
}
function MyStoryAsAdCompany(){
	//document.getElementsByClassName("form-2-container")[0].setAttribute("class", "form-2-container site-content");
	//document.getElementsByClassName("form-2-container")[0].style.display = "block";
	formPopup2_company_registration.style.display = "block";
	//document.getElementsByClassName("form-2-container")[0].style.zIndex = "9";
	formPopup2_company_registration.style.zIndex = "9";
}
function MyStaticAdsStory(){
   document.getElementById("cancel-21").value = "#";
   document.getElementById("done-21").style.display = "none";
   ads_count = 0; adsFilesLength =0;adForms = 0;selectAds(1);
   selectCloseCheck = 4;
}
gagaExtras.onclick = function(){
  RecreateReact2();
}

function Plugins(){
  modalPluginsBoard.style.height = "100%";
  AlertBoxInModal("Find out more about DidcyFix at DidcyFind");
}

gagaPlugins.onclick = function(){
	Plugins();
}

function digestImageAdRecords($_files, drim, fetchID){
	uploads($_files, drim, fetchID);
}
gagaVideoFilmPrd.style.display = "block";
gagaVideoFilmPrd.onclick = function(){
	  	 document.getElementById("didcy-cms").alt="Find out more about Didcy Pick";
		 document.getElementById("didcy-cms").title="Find out more about Didcy Pick";
		 return ServicesNotAvailable('Video & Film Production', 
		  'Video & Film Production report is at the back side. Please tab/put the mouse on this box to view the report.');	
}
gagaMedia.style.display = "block";
gagaMedia.onclick = function(){
	  	 document.getElementById("didcy-cms").alt="Find out more about Didcy Crym";
		 document.getElementById("didcy-cms").title="Find out more about Didcy Crym";
		 return ServicesNotAvailable('Media Services', 
		  'Media Service report is at the back side. Please tab/put the mouse on this box to view the report.', -2);	
}
gagaAdImageRecords.onclick = function(){
	modal2.style.zIndex = "-1";
/* 	 modal6.style.display = "block";
	 captionText6.innerHTML = "GaGa Ratings"; */
	 
	 var formhandle = document.createElement("form");
	 var filehandle = document.createElement("input");
	 var fileUpload = document.createElement("input");
	 formhandle.setAttribute("class", "adv-files");
	 formhandle.setAttribute("id", "adv-files");
	 formhandle.setAttribute("name", "adv-files-21");
	 
	 filehandle.setAttribute("class", "custom-file-input custom-file-input-2-ad-image-records");
	 filehandle.setAttribute("id", "uploads-2-ad-image-records");
	 filehandle.setAttribute("type", "file");
	 filehandle.setAttribute("enctype", "multipart/form-data");
	 filehandle.setAttribute("title", "Get your static ads uploaded here");
	 filehandle.setAttribute("multiple", "true");
	 //filehandle.setAttribute("multiple", "true");
	 filehandle.setAttribute("name", "uploadz-ad-image-records[]");
	 
	 fileUpload.setAttribute("class", "upload-ad-image-records");
	 fileUpload.setAttribute("id", "upload-2-ad-image-records");
	 fileUpload.setAttribute("name", "upload-2-ad-image-records");
	 fileUpload.setAttribute("type", "submit");
	 //fileUpload.setAttribute("value", "Submit");
	 //fileUpload.setAttribute("value", "Upload");
	 fileUpload.setAttribute("title", "");
	 /* fileUpload.setAttribute("", ""); */

	 if(window.location.href.slice(36) == ""){
		 filehandle.setAttribute("disabled", "true");
		 fileUpload.setAttribute("disabled", "true");
	 }
	 
	 formhandle.append(filehandle);
	 formhandle.append(fileUpload);
	 //window.console.log(formhandle);
	 uploadProfileContainer.append(formhandle);
	 
	 filesContainer[1] = formhandle;
	 
	 //window.console.log(uploadProfileContainer);
	 
	 modal8.style.height = "100%";
	 modal8.style.paddingTop = "100px"; //= "100%";
	 /* captionText8.innerHTML = "GaGa Uploads"; */
	 upload = 1;
	 
	 if(window.location.href.slice(36) == ""){
		 AlertBoxInModal("Please can't upload on Home Page.");
	 }
	 
	 formhandle.addEventListener("submit", (event) => event.preventDefault());
	 
	 var file_handle = document.getElementById("uploads-2-ad-image-records");

	 filehandle.addEventListener("change", () => {
		 //var openButton2 = document.getElementsByClassName("open-button-2")[0];
		 /*if(filehandle.files.length != 0){
			 MyStaticAdsStory();
			 document.getElementById("myModal-8").append(formPopup21);
			 formPopup2.style.padding = "0";
			 myStoryId = 2;
			 selectCloseCheck = 4;
		 }else{
			if(selectCloseCheck == 4){
				document.getElementById("myModal-8").removeChild(formPopup21);
				selectCloseCheck = 0;
			}else if(selectCloseCheck == 2){
				document.getElementById("myModal-8").removeChild(openButton21);
				selectCloseCheck = 0;				
			}else if(selectCloseCheck == 3){
				document.getElementById("myModal-8").removeChild(openButton21);
				document.getElementById("myModal-8").removeChild(formPopup21);
				selectCloseCheck = 0;				
			}
		 }*/
		 $fileSet = 1;
		 MyStaticAdsStory();
		 
	 });
	 fileUpload.addEventListener("click", function(){
		 if($fileSet == 0){
			return AlertBoxInModal("Please select a product/service image");
		 }
		 var drim = window.location.href;
		 digestImageAdRecords(document.forms['adv-files-21'], drim.slice(36), 9); //34
	 });	
}
gagaMyStory.onclick = function(){
	var drim = window.location.href;
	if(drim.slice(36) == ""){
	  	 document.getElementById("didcy-cms").alt="Find out more about StoryTime";
		 document.getElementById("didcy-cms").title="Find out more about StoryTime";
		 return ServicesNotAvailable('Story Time', 
		  'Story Time report is at the back side. Please tab/put the mouse on this box to view the report.', -1);
          		  
	}

	if(getCookieValue("GAGA_CMPO") == 0 && getCookieValue("GAGA_RESPONSE") == drim.slice(36)){
		MyStoryAsAdActor();
		document.getElementById("gaga-react-container").append(formPopup2);	
		myStoryId = 1;
		document.getElementById("update-ad-actor-infos").style.display = "block";
		//window.alert("po");
	}else if(getCookieValue("GAGA_CMPO") == 1 && getCookieValue("GAGA_RESPONSE") == drim.slice(36)){
		MyStoryAsAdCompany();
		document.getElementById("gaga-react-container").append(formPopup2_company_registration);	
		myStoryId = 1;
		document.getElementById("update-company-registration").style.display = "block";
		
	}else if(getCookieValue("GAGA_CMPO") == 2 && getCookieValue("GAGA_RESPONSE") == drim.slice(36)){
		MyStoryAsAdCompany();
		document.getElementById("gaga-react-container").append(formPopup2_company_registration);	
		myStoryId = 1;
		document.getElementById("update-company-registration").style.display = "block";
		
	}else{
		
	}
}
gagaSiteContent.onclick = function(){
	document.getElementById("select-display-type-modal").setAttribute("class", "select-display-type-modal site-content");
	document.getElementById("select-display-type-modal").style.display = "block";
	document.getElementById("select-display-type-modal").style.zIndex = "100";
	document.getElementById("select-display-type-modal").style.backgroundColor = "rgba(0, 0, 0, 1)";
	gagaSiteContentFromMore = 1;
	popupAdTaskBeforeLoad = 1;
}
gagaReactUpload.onclick = function(){
	modal2.style.zIndex = "-1";
/* 	 modal6.style.display = "block";
	 captionText6.innerHTML = "GaGa Ratings"; */
	 
	 var formhandle = document.createElement("form");
	 var filehandle = document.createElement("input");
	 var fileUpload = document.createElement("input");
	 formhandle.setAttribute("class", "adv-files");
	 formhandle.setAttribute("id", "adv-files-20");
	 formhandle.setAttribute("name", "adv-files-20");
	 
	 filehandle.setAttribute("class", "custom-file-input custom-file-input-2");
	 filehandle.setAttribute("id", "uploads-2");
	 filehandle.setAttribute("type", "file");
	 filehandle.setAttribute("enctype", "multipart/form-data");
	 filehandle.setAttribute("title", "Get your profile image uploaded here");
	 //filehandle.setAttribute("multiple", "true");
	 filehandle.setAttribute("name", "uploadz");
	 
	 fileUpload.setAttribute("class", "upload");
	 fileUpload.setAttribute("id", "upload-2");
	 fileUpload.setAttribute("name", "upload-2");
	 fileUpload.setAttribute("type", "submit");
	 fileUpload.setAttribute("title", "");
	 /* fileUpload.setAttribute("", ""); */

	 if(window.location.href.slice(36) == ""){
		 filehandle.setAttribute("disabled", "true");
		 fileUpload.setAttribute("disabled", "true");
	 }
	 
	 formhandle.append(filehandle);
	 formhandle.append(fileUpload);
	 //window.console.log(formhandle);
	 uploadProfileContainer.append(formhandle);
	 
	 filesContainer[0] = formhandle;
	 
	 //window.console.log(uploadProfileContainer);
	 
	 modal8.style.height = "100%";
	 modal8.style.paddingTop = "100px"; //= "100%";
	 /* captionText8.innerHTML = "GaGa Uploads"; */
	 upload = 1;

	 if(window.location.href.slice(36) == ""){
		 AlertBoxInModal("Please can't upload on Home Page.");
	 }
 
	 formhandle.addEventListener("submit", (event) => event.preventDefault());
	 var file_handle = document.getElementById("uploads-2");

	 filehandle.addEventListener("change", () => {
		 //var openButton2 = document.getElementsByClassName("open-button-2")[0];
		if(getCookieValue("GAGA_CMPO") == 0){ //actors.....
		 if(filehandle.files.length != 0){
			 MyStoryAsAdActor();
			 //var myForm2 = document.getElementById("myForm-2");
			 //myForm2.style.display = "block";
			 //document.getElementById("open-button-2").style.display = "block";
			 document.getElementById("myModal-8").append(formPopup2);
			 formPopup2.style.padding = "0";
			 myStoryId = 2;
			 selectCloseCheck = 1;
			 $fileSet = 1;
		 }else{
			if(selectCloseCheck == 1){
				document.getElementById("myModal-8").removeChild(formPopup2);
				selectCloseCheck = 0;
			}else if(selectCloseCheck == 2){
				document.getElementById("myModal-8").removeChild(openButton2);
				selectCloseCheck = 0;				
			}else if(selectCloseCheck == 3){
				document.getElementById("myModal-8").removeChild(openButton2);
				document.getElementById("myModal-8").removeChild(formPopup2);
				selectCloseCheck = 0;				
			}
		 }
		}else{ //--Companies.....
		 if(filehandle.files.length != 0){
		     MyStoryAsAdCompany();
			 //var myForm2 = document.getElementById("myForm-2");
			 //myForm2.style.display = "block";
			 //document.getElementById("open-button-2").style.display = "block";
			 document.getElementById("myModal-8").append(formPopup2_company_registration);
			 formPopup2_company_registration.style.padding = "0";
			 myStoryId = 2;
			 selectCloseCheck = 1;
			 $fileSet = 1;
		 }else{
			if(selectCloseCheck == 1){
				document.getElementById("myModal-8").removeChild(formPopup2_company_registration2);
				selectCloseCheck = 0;
			}else if(selectCloseCheck == 2){
				document.getElementById("myModal-8").removeChild(openButton2_company_registration);
				selectCloseCheck = 0;				
			}else if(selectCloseCheck == 3){
				document.getElementById("myModal-8").removeChild(openButton2_company_registration);
				document.getElementById("myModal-8").removeChild(openButton2_company_registration);
				selectCloseCheck = 0;				
			}
		 }			
		}
		 
	 });
	 fileUpload.addEventListener("click", function(){
		if(getCookieValue("GAGA_CMPO") == 0){
		    StoryTime(0);
		}else{
		    StoryTime(1);	
		}
	 });
	 
}  
var gagaCreateAds = document.getElementById("gaga-create-ads");
gagaCreateAds.style.display = "block";
gagaCreateAds.onclick = function(){
	modal2.style.zIndex = "-1";
	modal9.style.width = "100%";
	setTimeout(() => {
/* 	document.getElementsByClassName("split")[0].style.width = "50%";
	document.getElementsByClassName("split")[1].style.width = "50%"; */
  	//document.getElementsByClassName("split")[0].style.display = "block";
	//document.getElementsByClassName("split")[1].style.display ="block"; 
	//document.getElementsByClassName("split")[0].className += " horizontal-split";
	//document.getElementsByClassName("split")[1].className += " horizontal-split";
	}, 300);
	document.getElementsByClassName("close-9")[0].style.zIndex = "1";
	/* modal9.style.zIndex = "-1"; */
/* 	document.getElementsByClassName("split")[0].style.display = "block";
	document.getElementsByClassName("split")[0].style.zIndex = "1"; */
}	
}
gagaReact.onclick = function() { 
RecreateReact();
AlertBoxInModal("Find out more about DidcyReact at DidcyFind");
}

var howToGaGa = document.getElementById("howtogaga");
var modal5 = document.getElementById("myModal-howToGaGa");
var captionText5 = document.getElementById("caption-howToGaGa");
howToGaGa.onclick = function(){
  modal5.style.display = "block";
  document.getElementById("add-more-1").style.backgroundColor = "#000";
  //modalImg.src = "adv.actors.profiles/people2.jpg";
  captionText5.innerHTML = "Didcy Learn";
}
var gagaTERMS = document.getElementById("gaga-transparent");
/* var gagaTERMS = document.getElementById("gaga-transparent"); */

var gagaTC = document.getElementById("didcy-terms");
var gagaTC1 = document.getElementById("gaga-transparent-1");
var gagaTC2 = document.getElementById("gaga-transparent-2");

var gagaCookie = document.getElementById("didcy-cookie");
var gagaSecurity = document.getElementById("didcy-security");
var gagaKnowTeam = document.getElementById("jhal-team");
var gagaProfiles = document.getElementById("didcy-profiles");
var gagaSubscribePolicy = document.getElementById("didcy-subscribe");
var gagaCEO = document.getElementById("didcy-ceo");
var gagaLimit = document.getElementById("didcy-limit");
var gagaSubscribeStandPolicy = document.getElementById("didcy-stand-policy");
var gagaAuthors = document.getElementById("didcy-authors");
var gagaInvestors = document.getElementById("didcy-investors");
var gagaMentors = document.getElementById("didcy-mentors");
var gagaCookieFullMode = document.getElementById("didcy-cookie-full-mode");
var gagaTeam = document.getElementById("didcy-team");
var gagaKnowDevelopers = document.getElementById("jhal-developers");
var gagaSubscribeWebPolicy = document.getElementById("didcy-web-policy");
var gagaDispute = document.getElementById("didcy-dispute");
var gagaHost = document.getElementById("didcy-host-policy");
var gagaWork = document.getElementById("didcy-work");
var gagaUploadSystem = document.getElementById("didcy-upload-system");
var gagaWorkPolicyFromForm = document.getElementById("didcy-work-policy-from-form");

var modal5 = document.getElementById("myModal-howToGaGa");
var captionText5 = document.getElementById("caption-howToGaGa");

gagaTERMS.onclick = function(){
	        //window.console.log("--------");
	        modalTerms.style.height = "50%";
	        modalTerms.style.width = "100%";
	        modalTerms.style.height = "100%";
			AlertBoxInModal("Find out more about DidcyTransparent at DidcyFind");
	        //modalTerms.style.zIndex = "9";
}

gagaUploadSystem.onclick = function(){
	       //modalUploadSystem.style.display = "block";
		   //modalUploadSystem.style.height = "50%";
		   //setTimeout(() => {
	         modalUploadSystem.style.height = "100%";
		   //}, 2000);
}

gagaSubscribePolicy.onclick = function(){
	        //modalSubscribePolicy.style.display = "block";
	        modalSubscribePolicy.style.height = "50%";
	        modalSubscribePolicy.style.width = "100%";
	        modalSubscribePolicy.style.height = "100%";
	        //modalTerms.style.zIndex = "9";
}

gagaWorkPolicyFromForm.onclick = function() { 
      modalWork.style.height = "100%";
      //modalSiteMap.style.zIndex = "10";    
}

gagaWork.onclick = function() { 
      modalWork.style.height = "100%";
      //modalSiteMap.style.zIndex = "10";
}

gagaCookieFullMode.onclick = function(){
	        modalCookieFullMode.style.height = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalSecurity.style.zIndex = "9";
}

gagaHost.onclick = function(){
	        modalHost.style.height = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalSecurity.style.zIndex = "9";
}


gagaTeam.onclick = function(){
	        modalTeam.style.height = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalSecurity.style.zIndex = "9";
}

gagaDispute.onclick = function(){
	        //modalDispute.style.display = "block";
	        modalDispute.style.height = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalSecurity.style.zIndex = "9";
}

gagaSecurity.onclick = function(){
	        modalSecurity.style.height = "100%";
	        modalSecurity.style.width = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalSecurity.style.zIndex = "9";
}

gagaKnowTeam.onclick = function(){
	        modalKnowTeam.style.height = "100%";
	        modalKnowTeam.style.width = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalSecurity.style.zIndex = "9";
}

gagaSubscribeWebPolicy.onclick = function(){
	        modalSubscribeWebPolicy.style.height = "100%";
	        modalSubscribeWebPolicy.style.width = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalSecurity.style.zIndex = "9";
}

gagaAuthors.onclick = function(){
	       
	        modalAuthors.style.height = "100%";
	        modalAuthors.style.width = "100%";
	        //modalAuthors.style.zIndex = "9";
			modalAuthors.style.display = "block";
			
			if(modalChange4Authors  == 0){
			   modalAuthors.setAttribute("class", "modal-authors w3-modal-content w3-animate-right");
			   modalChange4Authors++;
			}
			else{
			   modalAuthors.setAttribute("class", "modal-authors w3-modal-content w3-animate-left");
			   modalChange4Authors = 0;
			}
			
}

gagaInvestors.onclick = function(){
	       
	        modalInvestors.style.height = "100%";
	        modalInvestors.style.width = "100%";
	        //modalAuthors.style.zIndex = "9";
			modalInvestors.style.display = "block";
			
			if(modalChange4Investors  == 0){
			   modalInvestors.setAttribute("class", "modal-authors w3-modal-content w3-animate-right");
			   modalChange4Investors++;
			}
			else{
			   modalInvestors.setAttribute("class", "modal-authors w3-modal-content w3-animate-left");
			   modalChange4Investors = 0;
			}
			
}

function Mentors(){
   modalMentors.style.height = "100%";
   modalMentors.style.width = "100%";
   //modalMentors.style.zIndex = "9";
   modalMentors.style.display = "block";	
}

gagaMentors.onclick = function(){
	     Mentors();
		 if(modalPositionChangeCount == 0){
            modalMentors.setAttribute("class", "modal-mentors  w3-modal-content w3-animate-top");
		    modalPositionChangeCount++;
		 }else if(modalPositionChangeCount == 1){
		   modalMentors.setAttribute("class", "modal-mentors  w3-modal-content w3-animate-right");
		   modalPositionChangeCount++;
		 }else if(modalPositionChangeCount == 2){
		   modalMentors.setAttribute("class", "modal-mentors  w3-modal-content w3-animate-bottom");  
		   modalPositionChangeCount++;
		 }else if(modalPositionChangeCount == 3){
		   modalMentors.setAttribute("class", "modal-mentors  w3-modal-content w3-animate-left"); 
		   modalPositionChangeCount = 0;
		 }
}

gagaCEO.onclick = function(){
    modalCEO.style.width = "100%";
    modalCEO.style.height = "100%";
	modalCEO.style.display = "block";
	//modalCEO.style.zIndex = "15";
}

gagaLimit.onclick = function(){
    modalLimit.style.width = "100%";
    modalLimit.style.height = "100%";
	modalLimit.style.display = "block";
	//modalCEO.style.zIndex = "15";
}

gagaSubscribeStandPolicy.onclick = function(){
    modalSubscribeStandPolicy.style.width = "100%";
    modalSubscribeStandPolicy.style.height = "100%";
	modalSubscribeStandPolicy.style.display = "block";
	//modalCEO.style.zIndex = "15";
}

gagaKnowDevelopers.onclick = function(){
    modalKnowDevelopers.style.width = "100%";
    modalKnowDevelopers.style.height = "100%";
	modalKnowDevelopers.style.display = "block";
	//modalCEO.style.zIndex = "15";
}

gagaProfiles.onclick = function(){
	        modalProfiles.style.height = "100%";
	        modalProfiles.style.width = "100%";
	        //modalSecurity.style.height = "100%";
	        //modalProfiles.style.zIndex = "9";
}

gagaCookie.onclick = function(){
	        modalCookie.style.height = "50%";
	        modalCookie.style.height = "50%";
	        modalCookie.style.width = "50%";
			//modalCookie.style.zIndex = "9";
			var width  = 50;
			var height  = 50;
			//setTimeout(() => {
			 cookieModal = setInterval(() => {
			  if(width == 100){
				 width = 50;
				 height = 50;
				 clearInterval(cookieModal);
				 return;
			  }
			  width += 10;
			  height += 10;
	          modalCookie.style.width = width + '%';
	          modalCookie.style.height = height + "%";
			 }, 1000);
			//}, 1000);
}

function TermsConditions(){
			var textTutorialContainer = document.createElement("div");
			let textTutorialH3 = document.createElement("h3");
			const textTutorialH3Text = document.createTextNode("Didcy Transparent");
			let textTutorialP = document.createElement("p");

			const pText =  "";
			const textTutorialPText = document.createTextNode(pText);
			
			textTutorialH3.append(textTutorialH3Text);
			
			{
				var treeContainer = {
					"Overview": [[document.createElement("ul"), 'myUL'], [document.createElement("li")], [document.createElement("span"), 'caret'],
					document.createTextNode("Overview")],
					"Product/Service": [[document.createElement("ul"), 'nested'], [document.createElement("li"), document.createTextNode("Product/Service")]],
					"Terminologies": [document.createElement("li"), document.createTextNode("Terminologies")],
					"Mission Statement": [[document.createElement("li")], [document.createElement("span"), 'caret'], document.createTextNode("Mission Statement")],
					"Internal Focus": [[document.createElement("ul"), 'nested'], [document.createElement("li"), document.createTextNode("Internal Focus")]],
					"Missionary Goals": [document.createElement("li"), document.createTextNode("Missionary Goals")],
					"Location Statement": [[document.createElement("li")], [document.createElement("span"), 'caret'], document.createTextNode("Location Statement")],
					"Relocation Terms": [[document.createElement("ul"), 'nested'], [document.createElement("li"), document.createTextNode("Relocation Terms")]]
				};
				
				//window.console.log(treeContainer["Overview"][0][0]);
				//window.console.log("pdpdpdpd");
				treeContainer["Overview"][0][0].setAttribute("class", treeContainer["Overview"][0][1]);
				treeContainer["Overview"][0][0].setAttribute("id", treeContainer["Overview"][0][1]);
				treeContainer["Overview"][0][0].append(treeContainer["Overview"][1][0]);
				treeContainer["Overview"][1][0].append(treeContainer["Overview"][2][0]);
				treeContainer["Overview"][2][0].setAttribute("class", treeContainer["Overview"][2][1]);
				treeContainer["Overview"][2][0].append(treeContainer["Overview"][3]);
				
				treeContainer["Product/Service"][0][0].setAttribute("class", treeContainer["Product/Service"][0][1]);
				treeContainer["Product/Service"][0][0].setAttribute("style", "background-color: black");
				treeContainer["Product/Service"][0][0].append(treeContainer["Product/Service"][1][0]);
				treeContainer["Product/Service"][1][0].append(treeContainer["Product/Service"][1][1]);
				
				treeContainer["Overview"][1][0].append(treeContainer["Product/Service"][0][0]);
				treeContainer["Terminologies"][0].append(treeContainer["Terminologies"][1]);
				
				treeContainer["Product/Service"][0][0].append(treeContainer["Terminologies"][0]);
				treeContainer["Mission Statement"][0][0].append(treeContainer["Mission Statement"][1][0]);
				treeContainer["Mission Statement"][1][0].setAttribute("class", treeContainer["Mission Statement"][1][1]);
				treeContainer["Mission Statement"][1][0].append(treeContainer["Mission Statement"][2]);
				
				treeContainer["Internal Focus"][0][0].setAttribute("class", treeContainer["Internal Focus"][0][1]);
				treeContainer["Internal Focus"][0][0].append(treeContainer["Internal Focus"][1][0]);
				treeContainer["Internal Focus"][1][0].append(treeContainer["Internal Focus"][1][1]);
				treeContainer["Internal Focus"][0][0].setAttribute("style", "background-color: black");
				
				treeContainer["Missionary Goals"][0].append(treeContainer["Missionary Goals"][1]);
				treeContainer["Internal Focus"][0][0].append(treeContainer["Missionary Goals"][0]);

				treeContainer["Location Statement"][0][0].append(treeContainer["Location Statement"][1][0]);
				treeContainer["Location Statement"][1][0].setAttribute("class", treeContainer["Location Statement"][1][1]);
				treeContainer["Location Statement"][1][0].append(treeContainer["Location Statement"][2]);


				treeContainer["Relocation Terms"][0][0].setAttribute("class", treeContainer["Relocation Terms"][0][1]);
				treeContainer["Relocation Terms"][0][0].append(treeContainer["Relocation Terms"][1][0]);
				treeContainer["Relocation Terms"][1][0].append(treeContainer["Relocation Terms"][1][1]);
				treeContainer["Relocation Terms"][0][0].setAttribute("style", "background-color: black");
				
				treeContainer["Product/Service"][0][0].append(treeContainer["Mission Statement"][0][0]);
				treeContainer["Mission Statement"][0][0].append(treeContainer["Internal Focus"][0][0]);
				treeContainer["Internal Focus"][0][0].append(treeContainer["Location Statement"][0][0]);
				treeContainer["Location Statement"][0][0].append(treeContainer["Relocation Terms"][0][0]);
				//window.console.log(treeContainer["Overview"][0][0]);
				//console.log(treeContainer["Overview"][0][0]);
			}
			
/* 			textTutorialContainer.innerHTML = "<ul id='myUL'><li><span class='caret'>Overview</span><ul class='nested'><li>Product/Service</li><li>Terminologies</li>"+
		 "<li><span class='caret'>Mission Statement</span><ul class='nested'><li>Internal Focus</li><li>Missionary Goals</li><li><span class='caret'>Location Statement</span>"+
         "<ul class='nested'><li>Relocation Terms</li><li>Gyokuro</li><li>Matcha</li><li>Pi Lo Chun</li></ul></li></ul></li> </ul></li></ul>"; */
			textTutorialP.append(textTutorialPText);
		
			textTutorialH3.setAttribute("color", "white");
			textTutorialH3.setAttribute("class", "gaga-text-header-2 gaga-relate");
			textTutorialH3.setAttribute("id", "gaga-text-header-2");
			textTutorialH3.setAttribute("style", "color: red");
			//textTutorialH3.setAttribute("style", "font-famil: Arial, Helvetica, sans-serif");
			textTutorialP.setAttribute("class", "gaga-text-tutorials-2");
			textTutorialP.setAttribute("id", "gaga-text-tutorials-2");
			textTutorialP.setAttribute("style", "color: white;font-family: Garamond, Helvetica, serif;");
		
			//textTutorialP.setAttribute("style", "font-famil: Arial, Helvetica, sans-serif");
			
			
			textTutorialContainer.setAttribute("class", "modal-content-1 modal-content-tc");
			textTutorialContainer.setAttribute("id", "text-tutorial");
			textTutorialContainer.setAttribute("style", "background-color: black");
			//textTutorialContainer.setAttribute("style", "position: relative");
			//textTutorialContainer.setAttribute("style", "width: 100%");
			textTutorialContainer.append(textTutorialH3);
			//textTutorialContainer.append(treeContainer["Overview"][0][0]); //--overview of TS(TERM OF SERVICE)
			textTutorialContainer.append(textTutorialP);

            myModal_1.style.paddingTop = "2px";
            textTutorialP.innerHTML = "<b class='tos'>TERMS OF SERVICE</b><br/>"+


"Welcome to Didcy.com, the place where <b><i>space</i></b> begins everything."+
" Thanks for viewing our site."+
" Before you create your account , please be sure you have read and understood our Terms and Conditions. Members who do not comply with our rules and regulations may find their didcy account suspended or deleted, possibly without prior notice."+
" With Didcy, businesses are done much efficiently and easier. We provide the best of all products and services to our customers to make them feel more reliable on our services."+
" Our terms and conditions are allowed to be viewed at any time on our platforms with absolute discretion."+
"<br/>ALERT!!! Our product and services are not for scamming,frauding and fraudualent activities,hacking,breaching of bounderies such as other didcy user's passwords and privacy protection or any illegal activities that is not accepted by the tech industry,the government, the users and our platform."+
"<br/>ATTENTION!!!. For agreeing to our terms and conditions, you  have to comply to the following;"+
"<br/>1. No illegal materials or anything which leads to illegal activities such as fraud or fraudulent activities or any other type of harmful content will not be accepted or allowed."+
"<br/>2. You are not allowed to copy or reproduce any page, image or other content related to our platforms or services or products without the express prior consent of the original copyright owner of that content or product."+
"<br/>3. All rights reserve from our services to delete,suspend,terminating any acccount at any time  for any reason or no reason at all. Disabled or suspended accounts can be enabled or reclaimed ONLY all debt are paid or misconducts has being resolved."+
"<br/>4. Adult materials without exceptions are forbidden or disapproved! This will lead to your account being terminated instantly or shutdown."+ 
"<br/>5. Do not run unapproved or unlinced ads on our platform or anything related or connnected to our platform. As soon as we discover any  misconduct in your didcy account, you'll be locked out from your account immediately and your inappropriate activity would be reported to the proper authorities."+
"<br/>6. You may not use your ADS to provide materials or links to materials that are grossly offensive to the Web society and the industry."+ 
"<br/>7. Immoral acts such as hatred, defamatory, anti-racial, terrorism, drugs, and other immoral related sites or any similar contents would not be allowed."+
"<br/>8. You are not allowed to ABUSE or use ABUSIVE CONTENTS or ADS whether you are a corporate entity, government body, small business, individual or any other type of business."+
"<br/>9. We do not condor contents or ads which are hazardious to the community such as COCAINE, TRAMADOL, WEE, POISONOUS ADS and any other type of harmful contents or ads to the communuty."+
"<br/>10. YOU are not to upload copyrighted contents or ads on DIDCY except when all legal procedures have being taken into consideration. All contents or ads should be made public except when still not decided whether or not to make public or still working on the creation of the content(s) or ad(s)."+
"<br/>11. We are not responsible if you mistakenly lose something due to server crash or by our negligence."+

"<br/>ALLERT!!! Failure to comply with the above terms and conditions will face the following consequences such as;"+
"<br/>1. Terminating or suspension of your account and pages without caring whether you are groups, private company, gorvernment body, small business or an individual etc."+
"<br/>2. Will pay a fine for agreeing and accepting our terms and policies while not complying with it."+
"<br/>3. Will pay a fine for breaching other didcy users account passwords and privacy protections. This wiill also lead to deleting your account."+
"<br/>4. Will be reported to the appropriate or the right authorities"+
"<br/>5. Will be suspended from your account for producing an unlicensed content or ads and will pay a fine for $700/month."+
"<br/>We reserve the right to suspend or delete any didcy account due to inappropriate behavior at our sole discretion. Accounts deleted or suspended for terms infringement can be restored from backups (if they are still available) for a fee, with the write promise that you won't abuse again.<br/>"+
 
"<br/>DIDCY FURTHER RESERVES THE RIGHT TO TAKE LEGAL ACTION AGAINST ANY MEMBER IN BREACH OF THESE RULES AND TO PROVIDE INFORMATION TO LAW ENFORCEMENT AUTHORITIES AND OTHER INTERESTED PARTIES REGARDING THESE MEMBERS.<br/>"+
 
"<br/>LEGAL TERMS<br/>"+
"<br/>Didcy is not responsible for the content of any personal misconduct. The contents of user-generated products/services or ads are not reviewed or censored in any way before they appear on the internet.<br/>"+
"<br/>You, as the account holder, take full responsibility for all contents posted on your account page and our main page. As the account holder, you state that your account page contain nothing illegal, obscene, degrading or abusive to another person, including products/services or ads that promote hate group propaganda and child pornography. As the account holder, you also state that nothing on your page is copyrighted material and that any links to other platforms/servers have been approved by that organization. As the acccount holder, you also state that nothing on your page infringes on the intellectual property rights of any third party. You agree that Didcy has the right to remove any post or page or accounts it determines, in its sole discretion, has violated these rules to cancel your membership and take against you whatever measures will be deemed appropriate, including legal action and disclosing information about you to law enforcement authorities and other interested third parties. Members who are in breach of these rules agree to indemnify and hold harmless Didcy for any loss, claim, damage and expenses (including reasonable attorneys' fees) arising from or in connection with the contents of any post or page or of any chat or messages on a bulletin board found to be infringing or illegal. By submitting this agreement, you agree to all the above terms.<br/>"+
"<br/>Didcy makes no guarantee as to availability of service. To the fullest extent permissible by law, Didcy excludes all liability with respect to accuracy, content or availability of information on its web site. The materials in this site are provided 'as is' and without warranties of any kind, either express or implied. Didcy does not warrant that the function contained in the materials available on this web site will be uninterrupted or error free, that defects will be corrected, or that this site or the servers that make them available are free of viruses or other harmful components. Any merchandise products or services available to users or members from links from this web site are provided by third parties who are not necessarily affiliated or connected with Didcy. To the fullest extent permissible by law, Didcy excludes all liability under any circumstances (including negligence) for any special or consequential damages that result from the use of, or the inability to use, the materials on this site. Applicable laws may not apply to all those who access the platform.<br/>"+


"<br/>By becoming a MEMBER you agree to all the above terms!. Kindly have a nice visit on our platform. <br>Thank you."; 
			
			caption1.innerHTML = "";
			var myModal = document.getElementById("myModal-1");
			var imgChild = document.getElementById("img01-1");
			myModal.insertBefore(textTutorialContainer, imgChild);
			imgChild.style.display = "none";
			myModal.style.display = "block";
			myModal.style.zIndex = "15";
			imgChild.value = "4";
			var pTC = document.createElement("p");
			pTC.setAttribute("class", "gaga-relate-2");
			pTC.setAttribute("id", "gaga-relate-2");
			var pTCText = document.createTextNode("Didcy Terms & Conditions");
			pTC.append(pTCText);
			caption1.append(pTC);
			//caption1.innerHTML = "<p class='gaga-relate-2' id='gaga-react-2'>GaGa Terms & Conditions</p>";
			//var captionChild = document.getElementById("gaga-relate");
			
			//caption1.setAttribute("class", "gaga-relate-2");
			//document.getElementById("caption-1").setAttribute("style", "background-color: inherit");
			/* magnify("text-tutorial", 3); */
			//magnify("gaga-text-header-2", 3);

			var toggler = document.getElementsByClassName("caret");
			/* var toggler2 = document.getElementsByClassName("caret-1"); */
			var i;

			for (i = 0; i < toggler.length; i++) {
			  toggler[i].addEventListener("click", function() {
				this.parentElement.querySelector(".nested").classList.toggle("active");
				this.classList.toggle("caret-down");
			  });
/* 			  toggler2[i].addEventListener("click", function() {
				this.parentElement.querySelector(".nested-1").classList.toggle("active");
				this.classList.toggle("caret-down");
			  }); */
			}

}

gagaTC1.onclick = function(){			
    TermsConditions();
}

gagaTC2.onclick = function(){			
    TermsConditions();
}

gagaTC.onclick = function(){			
    TermsConditions();
}

var modal6 = document.getElementById("myModal-6");
var captionText6 = document.getElementById("caption-6");
var gagaRatings = document.getElementById("gaga-ratings");
gagaRatings.onclick = function(){
/* 	 modal6.style.display = "block";
	 captionText6.innerHTML = "GaGa Ratings"; */
	 modal6.style.height = "100%";
	 modal6.style.paddingTop = "100px"; //= "100%";
	 captionText6.innerHTML = "";//"GaGa Ratings";
	 submitFeedBack(0);
}

var gagaShare = document.getElementById("gaga-share");
gagaShare.onclick = function(){
	              var gagaCounter = 0;
				  // Get the modal
				  var modal = document.getElementById("myModal-1");

				  // Get the image and insert it inside the modal - use its "alt" text as a caption
				  //var img = document.getElementById("");
				  var modalImg = document.getElementById("img01-1");
				  var modalImg12 = document.getElementById("img01-12");
				  var captionText = document.getElementById("caption-1");
				  var captionText12 = document.getElementById("caption-12");
                  var empty = [];
				  /* const loginWith = ["Meta", "Twitter", "Instagram", "Youtube", "GaGa", "Pinterest"]; */
				  const GaGaShare = ["Share with Meta", "Share with Twitter", "Share with Instagram", 
				  "Share with Youtube", "Share with Didcy", "Share with Pinterest"];
				  const GaGaShareBG = ["#3B5998", "#55ACEE", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
				  const GaGaShareID = ["gaga-share-meta-facebook fa fa-facebook fa-fw", "gaga-share-twitter fa fa-twitter fa-fw", 
				  "gaga-share-instagram fa fa-twitter fa-fw", "gaga-share-youtube fa fa-facebook fa-fw", 
				  "gaga-share-gaga-adv fa fa-twitter fa-fw", "gaga-share-pinterest fa fa-facebook fa-fw"];
                  var retrieveMediaType = 0;
				  for(var gagaCount = 0;gagaCount < GaGaShare.length;gagaCount++){
					  var gagaShareWithDoc = document.createElement("button");
					  var gagaShareWithDocText = document.createTextNode(GaGaShare[gagaCount]);
					  const classID = "button-12 " + GaGaShareID[gagaCount] + " btn";
					  var rand = didcx_random_number_generator(0, 228828281919191);
					  const GaGaBG = "background-color: " + GaGaShareBG[gagaCount];
					  gagaShareWithDoc.setAttribute("class", GaGaShareID[gagaCount]);
					  gagaShareWithDoc.setAttribute("id", "button-12");//rand.toString()
					  gagaShareWithDoc.setAttribute("style", GaGaBG);
					  gagaShareWithDoc.setAttribute("value", gagaCount.toString());
					  gagaShareWithDoc.append(gagaShareWithDocText);
                      modal.insertBefore(gagaShareWithDoc, captionText);
					  //var gagaShareClicks = document.getElementsByClassName(GaGaShareID[gagaCount]);//[gagaCount];
					  var gagaShareClicks = gagaShareWithDoc;//document.getElementsByClassName(GaGaShareID[gagaCount]);//[gagaCount];
                      empty[gagaCount] = gagaShareClicks;
					  retrieveMediaType += 1;
				  }


				  
			      modal.style.display = "block";
                  
				  modalImg.style.display = "none";
			      captionText.innerHTML = "Didcy Share";	
                  modalImg.value = '21';	
				  gagaCounter++;
                  if(modalImg.value == '21'){
					  empty[0].onclick = function(){
						  showMediaAccount(0, 0, 0);
					  }
					  empty[1].onclick = function(){
						  showMediaAccount(1, 0, 0);
					  }
					  empty[2].onclick = function(){
						  showMediaAccount(2, 0, 0);
					  }
					  empty[3].onclick = function(){
						  showMediaAccount(3, 0, 0);
					  }
					  empty[4].onclick = function(){
						  showMediaAccount(4, 0, 0);
					  }
					  empty[5].onclick = function(){
						  showMediaAccount(5, 0, 0);
					  }
				  }				  
}

function showMediaAccount(id = null, mediaEnvironmentID = null, mediaID = null, mediaTransport = null, drim = null){
	                      //return window.console.log(mediaTransport);
						  var loginWith = ["Meta", "Twitter", "Instagram", "Youtube", "Didcy", "Pinterest"];
						  var loginWithHeader = "Sign Up with " + loginWith[id];
                          var mediaAccount = {
							  mediaAccountForm : document.createElement("form"),
							  mediaAccountFormInnerContainer : document.createElement("div"),
							  mediaAccountFormInnerContainerHeader : document.createElement("h2"),
							  mediaAccountFormInnerContainerHeaderText : document.createTextNode(loginWithHeader),
							  mediaAccountFormInnerContainerCol : document.createElement("div"),
							  email : document.createElement("input"),
							  phoneNumber : document.createElement("input"),
							  passowrd : document.createElement("input"),
							  submitMediaInfo : document.createElement("input")
						  };
						  
						  mediaAccount.mediaAccountForm.setAttribute("class", "mediaForm");
						  mediaAccount.mediaAccountForm.setAttribute("id", "mediaForm");
						  mediaAccount.mediaAccountForm.setAttribute("action", "");
						  
						  mediaAccount.mediaAccountFormInnerContainer.setAttribute("class", "row");
						  mediaAccount.mediaAccountFormInnerContainer.setAttribute("id", "row");

						  mediaAccount.mediaAccountFormInnerContainerHeader.setAttribute("style", "text-align:center;color: white");
						  mediaAccount.mediaAccountFormInnerContainerHeader.append(mediaAccount.mediaAccountFormInnerContainerHeaderText);
						  
						  mediaAccount.mediaAccountFormInnerContainerCol.setAttribute("class", "col");
						  
						  mediaAccount.email.setAttribute("type", "email");
						  mediaAccount.email.setAttribute("class", "mediaInputs");
						  mediaAccount.email.setAttribute("id", "mediaInputs");
						  mediaAccount.email.setAttribute("name", "email");
						  mediaAccount.email.setAttribute("placeholder", "E-mail");
						  
						  mediaAccount.passowrd.setAttribute("type", "password");
						  mediaAccount.passowrd.setAttribute("class", "mediaInputs-2");
						  mediaAccount.passowrd.setAttribute("id", "mediaInputs-2");
						  mediaAccount.passowrd.setAttribute("name", "passowrd");
						  mediaAccount.passowrd.setAttribute("placeholder", "Password");

						  mediaAccount.submitMediaInfo.setAttribute("type", "submit");
						  mediaAccount.submitMediaInfo.setAttribute("class", "mediaSubmit mediaInputs");
						  mediaAccount.submitMediaInfo.setAttribute("id", "mediaSubmit");
						  mediaAccount.submitMediaInfo.setAttribute("value", "Sign Up");
						  mediaAccount.submitMediaInfo.setAttribute("style", "text-align: center");
						  
						  mediaAccount.mediaAccountForm.append(mediaAccount.mediaAccountFormInnerContainer);
						  mediaAccount.mediaAccountFormInnerContainer.append(mediaAccount.mediaAccountFormInnerContainerHeader);
						  mediaAccount.mediaAccountFormInnerContainer.append(mediaAccount.mediaAccountFormInnerContainerCol);
						  mediaAccount.mediaAccountFormInnerContainerCol.append(mediaAccount.email);
						  mediaAccount.mediaAccountFormInnerContainerCol.append(mediaAccount.passowrd);
						  mediaAccount.mediaAccountFormInnerContainerCol.append(mediaAccount.submitMediaInfo);
						  
						  mediaAccount.submitMediaInfo.addEventListener("click", (event) => event.preventDefault());
						  mediaAccount.mediaAccountForm.addEventListener("submit", (event) => event.preventDefault());
						  
						  modal12.insertBefore(mediaAccount.mediaAccountForm, captionText12);
						  
						  //window.console.log(modal12);
						  
                          modal12.style.display = "block";
                          modalImg12.style.display = "none";
						  modalImg12.value = "12";	
						  captionText12.innerHTML = "Didcy Share";
						  
                          CheckMediaInfo(mediaEnvironmentID, mediaID, mediaAccount, mediaTransport, drim);
						  
						  /*if(idFromAds == 1){
						    modal_015.style.display = "block";
						  }*/
						  //if(modal_015.value == "115"){
							  //modal12.style.zIndex = "-1";
							  //modal_015.style.display = "block";
						  //}
}

function CheckMediaInfo(mediaEnvironmentID = null, mediaID = null, mediaAccount = null, mediaTransport = null, drim = null){
						  switch(mediaEnvironmentID){
							 case 0:
							  switch(mediaID){
								  case 0: 
								    mediaAccount.submitMediaInfo.onclick = function(){
										var account  = {email : document.getElementById("mediaInputs"),
										                password : document.getElementById("mediaInputs-2")};
										SendMediaInfo("S-V-FB", 
										account.email.value.toString().trim(),
										account.password.value.toString().trim(), drim);
									}
								  break;
								  case 1: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 0: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 2: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 3: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 4: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 5: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  default: 
								   return;
							  }	
							 break;
							 case 1: 
							  switch(mediaID){
								  case 0: 
								    mediaAccount.submitMediaInfo.onclick = function(){
										var account  = {email : document.getElementById("mediaInputs"),
										                password : document.getElementById("mediaInputs-2")};
										SendMediaInfo("A-V-FB", 
										account.email.value.toString().trim(),
										account.password.value.toString().trim(), mediaTransport, drim);										
									}
								  break;
								  case 1: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 0: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 2: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 3: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 4: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 5: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  default: 
								   return;
							  }							 
							 break;
							 case 2: 
							  switch(mediaID){
								  case 0: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 1: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 0: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 2: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 3: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 4: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  case 5: 
								    mediaAccount.submitMediaInfo.onclick = function(){}
								  break;
								  default: 
								   return;
							  }							 
							 break;
						  }
}

function SendMediaInfo($Greed = "", $email = "", $password = "", mediaTransport = "", drim = null){
	var form = new FormData();
	if($email == ""){
		return AlertBoxInModal("Please enter your email");
	}
	if($password == ""){
		return AlertBoxInModal("Please enter your password");
	}
	form.append("email", $email);
	form.append("password", $password);
	form.append("mediaTransport", mediaTransport);
	form.append("drim", drim);
	form.append("GREED", $Greed);
	$.ajax({
		type: "POST",
		url: "adv-media-services.php",
		cache: false,
		contentType: false,
		processData: false,
		data: form,
		success: function(result){
		   window.console.log(result);
		   var data_returned = JSON.parse(result);
		   window.console.log(data_returned.TRANSPORT);
		},
		error: function(){}
	});
}

function closeNav() {
  document.getElementById("myModal-6").style.height = "0%";
}

var span5 = document.getElementsByClassName("close-howToGaGa")[0];
span5.onclick = function() { 
  modal5.style.display = "none";
}

var span6 = document.getElementsByClassName("close-6")[0];
span6.onclick = function() { 
  /* modal6.style.display = "none"; */
   modal6.style.height = "0%";
   modal6.style.paddingTop = "0";
}

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close-2")[0];

let modal3 = document.getElementById("myModal-2");
let modalImg3 = document.getElementById("img01-2");
// When the user clicks on <span> (x), close the modal
span3.onclick = function() { 
  ImageInfo = {fetchID : 0, src : "", contact_name : "", read_more_text : "", 
               readId : 0, src_id : "", src_2 : "", actorGroupInfo : "", 
			   rid : 0};
  if(hidden.value == '1'){
	  var contactName = document.getElementById("contactName");
	  var column5 = document.getElementById("column-5");
	  column5.removeChild(contactName);	
	  hidden.value = '0';
  }		   
  if(modalImg3.value == '2'){
	document.getElementById("column-5").removeChild(actorVideoHistoryButton); 
	document.getElementById("column-5").removeChild(actorImageHistoryButton);
	document.getElementById("column-5").removeChild(actorAudioHistoryButton);
  }
  else if(modalImg3.value == '3'){
	document.getElementById("column-5").removeChild(actorVideoHistoryButton); 
	document.getElementById("column-5").removeChild(actorImageHistoryButton); 
	document.getElementById("column-5").removeChild(actorAudioHistoryButton); 
	document.getElementById("container-c31").removeChild(historyContainer); 
  }
  else if(modalImg3.value == '4'){
	document.getElementById("column-5").removeChild(actorVideoHistoryButton); 
	document.getElementById("column-5").removeChild(actorImageHistoryButton);
	document.getElementById("column-5").removeChild(actorAudioHistoryButton);
  }
  modalImg3.value = '0';
  modal3.style.display = "none";
}


function closeNav2() {
  document.getElementById("myModal-8").style.height = "0%";
}

var span8 = document.getElementsByClassName("close-8")[0];
var span9 = document.getElementsByClassName("close-9")[0];
var span10 = document.getElementsByClassName("close-10")[0];
var spanSpecial = document.getElementsByClassName("close-special")[0];
var spanRelief = document.getElementsByClassName("close-relief")[0];
var spanStand = document.getElementsByClassName("close-stand")[0];
var span11 = document.getElementsByClassName("close-11")[0];
var span12 = document.getElementsByClassName("close-12")[0];
var span15 = document.getElementsByClassName("close-15")[0];
var span13 = document.getElementsByClassName("close-13")[0];
var spanSubscribeTutorials = document.getElementsByClassName("close-subscribe")[0];
var spanSelectDisplayTypes = document.getElementsByClassName("close-select-display-type-modal")[0];
span8.onclick = function() { 
  /* modal6.style.display = "none"; */
  var formPopup2 = document.getElementsByClassName("form-popup-2")[0];
  var formPopup21 = document.getElementsByClassName("form-popup-21")[0];
  var openButton = document.getElementsByClassName("open-button")[0];
  
	if(selectCloseCheck == 1){
		return AlertBoxInModal("Please exit the Forms first!!!");
		document.getElementById("myModal-8").removeChild(formPopup2);
		selectCloseCheck = 0;
	}else if(selectCloseCheck == 2){
		return AlertBoxInModal("Please exit the Forms first!!!");
		document.getElementById("myModal-8").removeChild(openButton2);
		selectCloseCheck = 0;				
	}else if(selectCloseCheck == 3){
		return AlertBoxInModal("Please exit the Forms first!!!");
		document.getElementById("myModal-8").removeChild(openButton2);
		document.getElementById("myModal-8").removeChild(formPopup2);
		selectCloseCheck = 0;				
	}
	else if(selectCloseCheck == 4){
		//document.getElementById("myModal-8").removeChild(openButton);
		document.getElementById("done-21").style.display = "none";
		openButton.style.display = "none";
		CloseForm(document.getElementById('myForm-21'), document.forms['myForm-21'], 1);
		//var formpopup21 = document.getElementById("myForm-21");
		//document.getElementById("myModal-8").removeChild(openButton);
		//document.getElementById("myModal-8").removeChild(formpopup21);
		//document.getElementById("myModal-8").removeChild(formPopup21);
		selectCloseCheck = 0;				
	}else{
		
		
	}
   if(upload == 1 && filesContainer[0] != 0){
	  var gagaUPContainer2 = document.getElementById("adv-files");
	  uploadProfileContainer.removeChild(filesContainer[0]);	  
      filesContainer = [0, 0];		  
   }else if(upload == 1 && filesContainer[1] != 0){
	  var gagaUPContainer2 = document.getElementById("adv-files");
	  uploadProfileContainer.removeChild(filesContainer[1]);	
      filesContainer = [0, 0];	  
   }   
   modal8.style.height = "0%";
   modal8.style.paddingTop = "0";
   modal2.style.zIndex = "1";
}

function closeNav3() {
  modal2.style.zIndex = "1";
/*   document.getElementsByClassName("split")[0].style.width = "0%";
  document.getElementsByClassName("split")[1].style.width = "0%"; */

  //document.getElementsByClassName("split")[0].style.display = "none";
  //document.getElementsByClassName("split")[1].style.display = "none";  
  
  modal9.style.width = "0%";
  /* document.getElementsByClassName("split")[0].style.display = "none"; */
  //document.getElementsByClassName("split")[0].style.width = "0%";
}

span9.onclick = function() { 
  /* modal6.style.display = "none"; */
   closeNav3();
}

spanSubscribeTutorials.onclick = function() { 
   modalSubscribeTutorials.style.display = "none";  
}

spanStand.onclick = function() { 
    modalStand.style.display = "none";
	document.getElementsByClassName("columns-2")[0].style.display = "none";
	document.getElementsByClassName("columns-2")[1].style.display = "none";
    document.getElementsByClassName("columns-2")[2].style.display = "none";
	modalStand.style.backgroundColor = "none";
}
span10.onclick = function() { 
    modal10.style.display = "none";
	document.getElementsByClassName("columns")[0].style.display = "none";
	document.getElementsByClassName("columns")[1].style.display = "none";
    document.getElementsByClassName("columns")[2].style.display = "none";
	modal10.style.backgroundColor = "none";
}

spanSpecial.onclick = function() { 
    modalSpecial.style.display = "none";
	document.getElementsByClassName("columns")[0].style.display = "none";
	document.getElementsByClassName("columns")[1].style.display = "none";
    document.getElementsByClassName("columns")[2].style.display = "none";
	modalSpecial.style.backgroundColor = "none";
}

spanRelief.onclick = function() { 
    modalRelief.style.display = "none";
	document.getElementsByClassName("columns")[0].style.display = "none";
	document.getElementsByClassName("columns")[1].style.display = "none";
    document.getElementsByClassName("columns")[2].style.display = "none";
	modalRelief.style.backgroundColor = "none";
}

span11.onclick = function() { 
    document.getElementsByClassName("form-newsletter")[0].style.display = "none";
    modal11.style.display = "none";
	modal11.style.backgroundColor = "none";
}

span12.onclick = function() { 
    if(modalImg12.value == '13'){
	   var tvListContainer2 = document.getElementById("tv-list-container-12");  
	   modal12.removeChild(tvListContainer2);
	}else{
       modal12.removeChild(document.getElementsByClassName("mediaForm")[0]);
	}
    modal12.style.display = "none";
	modal12.style.backgroundColor = "none";
	modalImg12.value = '0';
}

span13.onclick = function() { 
   modal13.style.display = "none";
}

function PopUpAdTasks(){
	  var taskClearID = null;
	  document.getElementById("modal-ad-tasks").style.display = "block";
	  taskClearID = setTimeout(() => {
		document.getElementById("modal-ad-tasks").style.display = "none";  
	  }, 20000);
	  
	  document.getElementById("close-ad-tasks").onclick = function(){
		 if(taskClearID != null){
		   clearTimeout(taskClearID);
		 }
		 taskClearID = null;
		 document.getElementById("modal-ad-tasks").style.display = "none";   
	  }
}

var clearFirstNewsletter = 0, clearFirstRandomizer = 0, abtUS = 0;
var about_set = 0;

function CloseAbtUS(){
  document.getElementById('abt-us').style.display="none";
  if(drim_2.slice(36) == ""){
	//exhibitEvents(2, null, 'av');
  }else{
	//exhibitEvents(3, drim.slice(36))  
  }
  if(about_set == 0){
	  setTimeout(() => {
		 document.getElementById('keywords').style.display='block';
		 about_set = 1;
	  }, 10000);
	   setTimeout(() => {
		   document.getElementById("didcy-platforms-offer").style.display="block";
	   }, 1000);
  }
}

function CloseDidcyPlatformsOffer(){
	   document.getElementById("didcy-platforms-offer").style.display="none";
	   setTimeout(() => {
		   document.getElementById("didcy-ad-creators").style.display = "block";
	   }, 1000);	
}

spanDidcyPlatformsOffer.onclick = function(){
	CloseDidcyPlatformsOffer();
}

function AbtUS(){
   if(abtUS == 1){
	document.getElementById('abt-us').style.display="block";
	abtUS = 0;
   }
}

function PopUpRandomizer(){
 	  var taskClearID = null;
	  document.getElementById("modal-didcy-work-keys").style.display = "block";

	  document.getElementById("randomize").innerHTML = $randomize;

	  document.getElementById("close-didcy-work-keys").onclick = function(){
		 if(taskClearID != null){
		   clearTimeout(taskClearID);
		 }
		 taskClearID = null;
		 document.getElementById("modal-didcy-work-keys").style.display = "none";
	     abtUS = 1;
		 if(about_set == 0){
		   AbtUS();
		 }
	  }	
	  clearFirstRandomizer = 1;	
}

function PopNewsletterSubscription(){
 	  var taskClearID = null;
	  document.getElementById("modal-newsletters").style.display = "block";
	  /*taskClearID = setTimeout(() => {
		document.getElementById("modal-newsletters").style.display = "none"; 
        //setTimeout(() => PopNewsletterSubscription, 2000);		
	  }, 20000);*/  

	  document.getElementById("close-newsletters").onclick = function(){
		 if(taskClearID != null){
		   clearTimeout(taskClearID);
		 }
		 taskClearID = null;
		 document.getElementById("modal-newsletters").style.display = "none";   
		 PopUpRandomizer();
		 newsletterDifference = 2;
	  }	
	  clearFirstNewsletter = 1;
}

function copyDevStrings() {
  var copyText = document.getElementById("randomize");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("devTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("devTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}

//document.getElementById("didcy-keys-btn").addEventListener("mouseout", () => outFunc());
document.getElementById("didcy-keys-btn").addEventListener("click", 
() => {
 $randomize = randomizChars();
 PopUpRandomizer();
 //setTimeout(function(){copyDevStrings();}, 2000);
});

function PopUpEServices(){
	  var taskClearID = null;
	  document.getElementById("modal-other-e-services").style.display = "block";
	  taskClearID = setTimeout(() => {
		document.getElementById("modal-other-e-services").style.display = "none"; 
		if(clearFirstNewsletter == 0){
		  newsletterDifference = 1;
          PopNewsletterSubscription();	
		}		
	  }, 20000);
	  
	  document.getElementById("close-other-e-services").onclick = function(){
		 if(taskClearID != null){
		   clearTimeout(taskClearID);
		 }
		 taskClearID = null;
		 document.getElementById("modal-other-e-services").style.display = "none"; 
		if(clearFirstNewsletter == 0){
          PopNewsletterSubscription();	
		}		 
	  }	
}

PopUpEServices();

spanSelectDisplayTypes.onclick = function() { 
    document.getElementsByClassName("select-display-type-modal")[0].style.display = "none";
    if(window.location.href.slice(35) == ""){
		//ShortNote(0);
	   //DidcyDefaultPageContentOnClose(null);
	}else{
	   //DidcyDefaultPageContentOnClose(window.location.href.slice(36));
	}
	
	if(popupAdTaskBeforeLoad == 0){
	   //PopUpAdTasks();
	   PopUpEServices();
	}else{
	  if(drim_2.slice(36) == ""){
		//exhibitEvents(2, null, 'av');
	  }else{
		//exhibitEvents(3, drim.slice(36))  
	  }
	}
}

function Digest2Insert(videoAds, staticAds, companiesProfiles, actorGroupProfiles, 
__actor_group = null, drim = null){
	   var actorGroupProfiles2, companiesProfiles2 = [];
	{
		  if(local == 1){
			  var advFiles = document.getElementById("adv-files-showcase-video-ads");
			  document.getElementById("container-c31").removeChild(advFiles);

			  var advFiles = document.getElementById("adv-files-showcase-static-ads");
			  document.getElementById("container-c31").removeChild(advFiles);

			  var advFiles = document.getElementById("adv-files-showcase-companies-profiles");
			  document.getElementById("container-c31").removeChild(advFiles);
			  
			  var advFiles = document.getElementById("adv-files-showcase-actors-n-groups-profiles");
			  document.getElementById("container-c31").removeChild(advFiles);
			  
			  
			  var advFilesShowcase = document.createElement("div");
			  advFilesShowcase.setAttribute("class", "row");
			  advFilesShowcase.setAttribute("id", "adv-files-showcase-video-ads");
			  document.getElementById("container-c31").append(advFilesShowcase);		

			  var advFilesShowcase = document.createElement("div");
			  advFilesShowcase.setAttribute("class", "row");
			  advFilesShowcase.setAttribute("id", "adv-files-showcase-static-ads");
			  document.getElementById("container-c31").append(advFilesShowcase);	
			  
			  var advFilesShowcase = document.createElement("div");
			  advFilesShowcase.setAttribute("class", "row");
			  advFilesShowcase.setAttribute("id", "adv-files-showcase-companies-profiles");
			  document.getElementById("container-c31").append(advFilesShowcase);	
			  
			  var advFilesShowcase = document.createElement("div");
			  advFilesShowcase.setAttribute("class", "row");
			  advFilesShowcase.setAttribute("id", "adv-files-showcase-actors-n-groups-profiles");
			  document.getElementById("container-c31").append(advFilesShowcase);	
			  			  
			  local = 0;
		  }		
		  if($fetchIDTemp != 0){
			  var advFiles = document.getElementById("adv-files-showcase");
			  document.getElementById("container-c31").removeChild(advFiles);
			  var advFilesShowcase = document.createElement("div");
			  advFilesShowcase.setAttribute("class", "row");
			  advFilesShowcase.setAttribute("id", "adv-files-showcase");
			  document.getElementById("container-c31").append(advFilesShowcase);			  
			  local = 0;		
              $fetchIDTemp = 0;			  
		  }	
		  if(fetchSearch != 0){
			  var advFiles = document.getElementById("adv-files-showcase");
			  document.getElementById("container-c31").removeChild(advFiles);
			  var advFilesShowcase = document.createElement("div");
			  advFilesShowcase.setAttribute("class", "row");
			  advFilesShowcase.setAttribute("id", "adv-files-showcase");
			  document.getElementById("container-c31").append(advFilesShowcase);			  
			  local = 0;		
              fetchSearch = 0;	
			  $fetchIDTemp = 0;					  
		  }	
	   //window.console.log(staticAds[0]);
	   document.getElementById("adv-files-showcase-video-ads").style.display = "block";
	   document.getElementById("adv-files-showcase-static-ads").style.display = "block";
	   document.getElementById("adv-files-showcase-companies-profiles").style.display = "block";
	   document.getElementById("adv-files-showcase-actors-n-groups-profiles").style.display = "block";
	}
	//return;
	if(videoAds.length != 0){
       local = 0;
   	   exhibitEvents(11, drim, 'agp');
	}else{
		  window.console.log("1");
		  TransformText(1);
	}
	//return;
	if(staticAds.length != 0){
       local = 0;
   	   exhibitEvents(12, drim, 'agp');
	}else{
		  window.console.log("2");
		  TransformText(2);
	}
	if(companiesProfiles.length != 0){
	   local = 0;
   	   exhibitEvents(9, drim, 'agp');
	 
	}else{
		  //TransformText(3);
		  local = 1;
	}
	if(actorGroupProfiles.length != 0){
       local = 0;
   	   exhibitEvents(10, drim, 'agp');
	}else{
		  //TransformText(4);
	}

}

function DidcyDefaultPageContentOnClose(drim = null){
	 var form = new FormData();
	 if(drim == null){
	   form.append("fetch", "15");
	 }else{
	   form.append("fetch", "16");
	   form.append("drim", window.location.href.slice(36));
	 }
	 $.ajax({
		 type: "POST",
		 url: "adv-uploader.php",
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: form,
		 success: function(result){
			 //window.console.log(result);
			 var data_returned = JSON.parse(result);
		     //window.console.log(data_returned["ads"]["static_ads"]["psid"][0]);
			 
			 Digest2Insert(data_returned["ads"]["video_ads"]["psn"],
			 data_returned["ads"]["static_ads"]["psn"],
			 data_returned["profiles"]["companies"],
			 data_returned["profiles"]["actors&groups"], 
			 data_returned["externalInfos"], drim);
			 
			 if(data_returned.state == 0){
				return window.alert("Server Error!!!");
			 }
			 else if(data_returned.state == 1){
				return window.alert("Connection Failed #1!!!"); 
			 }
			 else if(data_returned.state == 2){
				return window.alert("Connection Failed #2!!!");
			 }
			 else if(data_returned.state == -2){
				return window.alert("Connection Failed #ERR!!!");
			 }
			 else if(data_returned.state == -3){
				return window.alert("Connection Failed #MSK!!!");
			 }
			 else if(data_returned.state == -4){
				return window.alert("Connection Failed #SKW!!!");
			 }
			 else{
			   //return window.console.log(data_returned); 
			 }
		 },
		 error: function(){}
	 });
}
