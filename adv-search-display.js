"use strict";
//company_name.setAttribute("style", "color: green;font-family: sans-serif, arial;font-size: 25px;");
var $footerCheck = 0;
var columElemContainer = [];
var fileTypeIDLength = 0, videoElem = 0, videoEl = null, elemContainer = [];
var start = 0;
var clearT = null;
var pageLoadCheckTimer = 0;
var $fetchIDTemp = 0;
//var modal_015, img_015, close15, caption15, modal_15_value = 0, res;

 var exhibitEventsFromLiveSearch = function($fetchID = null, drim = null, searchResults = null, 
 productServiceAudioAdImage = null, productServiceVideoAdImage = null, clearContainerId = null, company_name_text = null, 
 fileTypeID = null){
  $fetchIDTemp = $fetchID;
  
  var didcxWelcome = document.getElementById("didcx-welcome");
  var selectDisplayTypes = document.getElementById("select-display-type-modal");
          
		  system_dirArr = searchResults;
		  fileTypeIDLength = fileTypeID.length;
		  document.getElementById("id012-in-dbox").style.display = "block";
		  if(system_dirArr != null){
			 //document.getElementById("logo").src = "didcy2.png";
			 if($fetchID == 2){
			   if(drim != null){
				 for(let i = 0;i < system_dirArr.length;i++){
				  var rand = didcx_random_number_generator(0, 228828281919191);
				  var imageID = "eventProf-"+rand.toString();
				  var classID1 = "eventVid-"+rand.toString()+" vid-3939302";
				  var classID = "eventVid-"+rand.toString();
				  //var elem = document.createElement("video");
				  //window.alert(system_dirArr);
				  var columElem = document.createElement("div");
				  var cardElem = null;
				  var containerElem = null;			  
				  var elem = null, centerPlayPause = null, audioSource = null,
				  playPauseBTN = null;

				  let column = null;
				  let card = null;
				  let container = null;

			      var company_name = null;
				  var audioService = 0;
				  
				  //window.console.log(searchResults);
				  
                  if(fileTypeIDLength > 0){
					  if(fileTypeID[i] == 1){
					
						 elem = document.createElement("img");
						 columElem.setAttribute("class", "column see-creatives");
					 
						 columElem.setAttribute("id", "column");
						 //elem.setAttribute("autoplay", "false");
						 /*elem.setAttribute("loop", "1");
						 elem.setAttribute("muted", "true");
						 elem.setAttribute("controls", "false");*/
						 column = document.getElementsByClassName("see-creatives");
						 elem.setAttribute("src", productServiceVideoAdImage[i]);
						 elem.setAttribute("class", classID1);
						 elem.setAttribute("id", classID);
					  }else if(fileTypeID[i] == 2){
			     classID1 = imageID+" profile-3939302";
			     classID = "audio";//imageID;

			     columElem = document.createElement("div");
			     cardElem = document.createElement("div");
			     containerElem = document.createElement("div");

				  columElem.setAttribute("class", "column-2");
				  columElem.setAttribute("id", "column-2");
				  
				  cardElem.setAttribute("class", "card");
				  cardElem.setAttribute("id", "card");
				  

				  containerElem.setAttribute("class", "container-1");
				  containerElem.setAttribute("id", "container-1");		
				  containerElem.setAttribute("width", "100%");		
				  containerElem.setAttribute("height", "1000px");		

				  //var columElem = document.createElement("div");
				  //var container_elem = document.createElement("div");
				  elem = document.createElement("audio");
				  
				  var audioSource = document.createElement("source");
				  audioSource.setAttribute("type", "audio/mp3");
				  
				  playPauseBTN = document.createElement("button");
				  playPauseBTN.setAttribute("class", "playPauseBTN");
				  playPauseBTN.setAttribute("id", "playPauseBTN");
				  
				  centerPlayPause = document.createElement("div");
				  centerPlayPause.setAttribute("class", "center-audio");


			  audioSource.setAttribute("src", system_dirArr[i]);

			  elem.setAttribute("controls", "");

			  elem.setAttribute("id", "audio");
			  $audioAdImage = "adv.audios.img/"+productServiceAudioAdImage[i];

			  containerElem.setAttribute("style", "width:100%;height:300px;background-image: url('"+$audioAdImage+"')");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  
			  elem.append(audioSource);

			  column = document.getElementsByClassName("column-2");
			  card = document.getElementsByClassName("card");
			  container = document.getElementsByClassName("container-1");

			  /*company_name = document.createElement("h3");
			  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
			  company_name.append(company_nameText);
			  company_name.setAttribute("style", "color: rgba(50, 50, 50, 1);font-family: sans-serif, arial;font-size: 25px;");
			  */
			  
			  centerPlayPause.append(playPauseBTN);
			  audioService = 1;
				 /*elem = document.createElement("audio");
			     //elem.setAttribute("autoplay", "false");
			     elem.setAttribute("loop", "1");
			     elem.setAttribute("muted", "true");
			     elem.setAttribute("controls", "false");	
				 $audioAdImage = "adv.audios.img/"+productServiceAudioAdImage[i];
                 elem.setAttribute("style", "background-image: url('"+$audioAdImage+"')");*/
					  }else{
						 elem = document.createElement("img");
						  columElem.setAttribute("class", "column");
						  /* columElem.setAttribute("style", "background-color:blue"); */
						  columElem.setAttribute("id", "column col-embed");
						  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
						  elem.setAttribute("src", searchResults[i]);
						  elem.setAttribute("class", classID1);
						  elem.setAttribute("id", classID);
						  column = document.getElementsByClassName("see-creatives");
					  }
				 }  
				  //window.console.log(productServiceVideoAdImage[i]);
                  fileTypeIDLength--;
				  //elem.setAttribute("style", "width:100%");
				  document.getElementById("contact-media-in-dbox").append(columElem);
				  //columElem.setAttribute("style", "display:block");
				  //document.getElementById("contact-media-in-dbox").style.backgroundColor = "white";
				  height += 300;
				  //document.getElementById("contact-media-in-dbox").value = height.toString();
				  //document.getElementById("contact-media-in-dbox").style.backgroundColor = "blue";
				  //document.getElementById("contact-media-in-dbox").style.display = "block";
				  //document.getElementById("column").append(elem);
                  
				  var company_name = document.createElement("h3");
				  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
				  company_name.append(company_nameText);
				  
				  
				  let gaga_share = document.createElement("button");
				  const gaga_shareText = document.createTextNode("Act");
				  gaga_share.setAttribute("class", "button-1 gaga-share");
				  gaga_share.setAttribute("id", "button-15");
				  
				  
				  //let column = document.getElementsByClassName("see-creatives");
				  for(var columnCount = 0;columnCount < column.length;columnCount++){
					  if(audioService == 1){
						  column[columnCount].append(cardElem);
						  //card[columnCount].append(elem);
						  card[columnCount].append(containerElem);
						  container[columnCount].append(centerPlayPause);						  
						  container[columnCount].append(elem);						  
					  }else{
					      column[columnCount].append(elem);
					  }
					  column[columnCount].append(company_name);
					  column[columnCount].append(gaga_share);
					  columElemContainer[columnCount] = column[columnCount];
				  }

				  if(audioService == 1){
					function PlayPauseAPI(audio, playPauseBTN){
					 playPauseBTN.innerHTML = "&#9658;";
					 playPauseBTN.onclick = function(){
						 playPause(audio, playPauseBTN);
						
						 //stop(audio);
					 }
					}
					
					PlayPauseAPI(elem, playPauseBTN);					  
				  }

              if(fileTypeID[i] == 0){
                elem.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 if(videoElem == 1){
					modal.removeChild(videoEl);
                    videoEl = null;
				 }
			     modal.style.display = "block";
				 modal.style.zIndex = "75";

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }
			  }else if(fileTypeID[i] == 2){
                 company_name.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }

                 var video_elem = document.createElement("audio");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "audiplay modal-content-20 modal-content-20-audio");
                 video_elem.setAttribute("id", "img01-20");
                 video_elem.setAttribute("controls", "true");
                 video_elem.setAttribute("style", "background-image: url('"+"adv.audios.img/"+productServiceAudioAdImage[i]+"')");

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "200";				
				 AudiPlay();
			   }

                elem.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }

                 var video_elem = document.createElement("audio");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20 modal-content-20-audio");
                 video_elem.setAttribute("id", "img01-20");
                 video_elem.setAttribute("controls", "true");
                 video_elem.setAttribute("style", "background-image: url('"+"adv.audios.img/"+productServiceAudioAdImage[i]+"')");

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "200";				 
				 AudiPlay();
			   }
			  }else{
                 elem.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }
				 
				 //-------------------custom controls------------
				 
				 var videoControls = document.createElement("div");
				 VideoControls4PageContent(videoControls, null, system_dirArr[i]);
				 //----------------------------------------------

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 //modal.insertBefore(video_elem, modalImg);
				 modal.insertBefore(videoControls, modalImg);

                 videoEl = videoControls;//video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";			

				 loadVideoControls();
			   }

                company_name.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }
				 
				 //-------------------custom controls------------
				 
				 var videoControls = document.createElement("div");
				 VideoControls4PageContent(videoControls, null, system_dirArr[i]);
				 //----------------------------------------------

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 //modal.insertBefore(video_elem, modalImg);
				 modal.insertBefore(videoControls, modalImg);

                 videoEl = videoControls;//video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";			

				 loadVideoControls();
			   }
			  }		

				  
				  document.getElementById("uploads").value = "";
				  storeAllCreatedIds[i] = classID;

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
	
				 modalImg.value = height.toString();
				  //window.console.log(columElem);
				  //window.console.log(document.getElementById("contact-media-in-dbox"));

				  gaga_share.append(gaga_shareText);
				  //window.console.log(gaga_share);
				  
				  //let gagaShare = document.getElementsByClassName("gaga-share")[gagaCounter];
				  gaga_share.onclick = function(){
					 
					Share(modal, captionText, modalImg, empty, system_dirArr[i], 
					elem, company_name_text[i], drim);					 
					  
					  modal.style.display = "block";
					  
					  modalImg.style.display = "none";
					  captionText.innerHTML = "Didcy Action";	
					  modalImg.value = '10';	
					  gagaCounter++;
				 }	
				}
				  if(clearContainerId == 'upload.multiple'){
/* 					device = window.matchMedia('(max-height: 1366px)');
					checkDeviceHeight(device, 1366);	
					device = window.matchMedia('(max-height: 1076px)');
					checkDeviceHeight(device, 1076);
					device = window.matchMedia('(max-height: 625px)');
					checkDeviceHeight(device, 625); */	  
				  }else{					
/* 					device = window.matchMedia('(max-height: 1366px)');
					checkDeviceHeight(device, 1366);	
					device = window.matchMedia('(max-height: 1076px)');
					checkDeviceHeight(device, 1076);
					device = window.matchMedia('(max-height: 625px)');
					checkDeviceHeight(device, 625);	 */
				  }
			}else{
		    //if(gagaSiteContentFromMore == 1){
				//if(clearContainerId == 'av'){
				  var advFilesContainer = document.getElementById("contact-media-in-dbox");
				  document.getElementById("contact-media-container-in-box").removeChild(advFilesContainer);
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "w3-container contact-media row");
				  advFileContainer.setAttribute("id", "contact-media-in-dbox");
				  document.getElementById("contact-media-container-in-box").append(advFileContainer);
				  
				//}else{
				
				//}
				var myModal_1 = document.getElementById("myModal-1");
				//document.getElementsByClassName("select-display-type-modal")[0].style.display = "none";
				myModal_1.style.display = "none";
				document.getElementsByClassName("modal")[0].style.display = "none";				
			//}else{
				if(document.getElementById("img01-1").value == '5'){
					  var gagaRContainer2 = document.getElementById("gaga-react-container");
					  myModal_1.removeChild(gagaRContainer2);
					  //caption1.classList.remove("gaga-relate-2");
				}	
			   selectDisplayTypes.style.display = "none";
			   didcxWelcome.innerHTML = "DIDCY - WHAT DO YOU THINK";
			   document.getElementById("img01-1").value = '0';
			//}
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
				  var imageID = "eventProf-"+rand.toString();
				  var classID1 = "eventVid-"+rand.toString()+" vid-3939302";
				  var classID = "eventVid-"+rand.toString();
				  //var elem = document.createElement("video");
				  //window.alert(system_dirArr);
				  var columElem = document.createElement("div");
				  var cardElem = null;
				  var containerElem = null;			  
				  var elem = null, centerPlayPause = null, audioSource = null,
				  playPauseBTN = null;

				  let column = null;
				  let card = null;
				  let container = null;

			      var company_name = null;
				  var audioService = 0;
				  
                  if(fileTypeIDLength > 0){
					  if(fileTypeID[i] == 1){
						 columElem = document.createElement("div");
					
						 elem = document.createElement("img");
						 columElem.setAttribute("class", "column see-creatives");
					 
						 columElem.setAttribute("id", "column");
						 //elem.setAttribute("autoplay", "false");
						 /*elem.setAttribute("loop", "1");
						 elem.setAttribute("muted", "true");
						 elem.setAttribute("controls", "false");*/
						 //window.console.log(productServiceVideoAdImage[i]);
						 elem.setAttribute("src", productServiceVideoAdImage[i]);
						 elem.setAttribute("class", classID1);
						 elem.setAttribute("id", classID);
						 column = document.getElementsByClassName("see-creatives");
					  }else if(fileTypeID[i] == 2){
			     classID1 = imageID+" profile-3939302";
			     classID = "audio";//imageID;

			     columElem = document.createElement("div");
			     cardElem = document.createElement("div");
			     containerElem = document.createElement("div");

				  columElem.setAttribute("class", "column-2");
				  columElem.setAttribute("id", "column-2");
				  
				  cardElem.setAttribute("class", "card");
				  cardElem.setAttribute("id", "card");
				  

				  containerElem.setAttribute("class", "container-1");
				  containerElem.setAttribute("id", "container-1");		
				  containerElem.setAttribute("width", "100%");		
				  containerElem.setAttribute("height", "1000px");		

				  //var columElem = document.createElement("div");
				  //var container_elem = document.createElement("div");
				  elem = document.createElement("audio");
				  
				  var audioSource = document.createElement("source");
				  audioSource.setAttribute("type", "audio/mp3");
				  
				  playPauseBTN = document.createElement("button");
				  playPauseBTN.setAttribute("class", "playPauseBTN");
				  playPauseBTN.setAttribute("id", "playPauseBTN");
				  
				  centerPlayPause = document.createElement("div");
				  centerPlayPause.setAttribute("class", "center-audio");

			  audioSource.setAttribute("src", system_dirArr[i]);

			  elem.setAttribute("controls", "");

			  elem.setAttribute("id", "audio");
			  $audioAdImage = "adv.audios.img/"+productServiceAudioAdImage[i];

			  containerElem.setAttribute("style", "width:100%;height:300px;background-image: url('"+$audioAdImage+"')");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  
			  elem.append(audioSource);

			  column = document.getElementsByClassName("column-2");
			  card = document.getElementsByClassName("card");
			  container = document.getElementsByClassName("container-1");

			  /*company_name = document.createElement("h3");
			  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
			  company_name.append(company_nameText);
			  company_name.setAttribute("style", "color: rgba(50, 50, 50, 1);font-family: sans-serif, arial;font-size: 25px;");
			  */
			  
			  centerPlayPause.append(playPauseBTN);
			  audioService = 1;
				 /*elem = document.createElement("audio");
			     //elem.setAttribute("autoplay", "false");
			     elem.setAttribute("loop", "1");
			     elem.setAttribute("muted", "true");
			     elem.setAttribute("controls", "false");	
				 $audioAdImage = "adv.audios.img/"+productServiceAudioAdImage[i];
                 elem.setAttribute("style", "background-image: url('"+$audioAdImage+"')");*/
					  }else{
						 elem = document.createElement("img");
						  columElem.setAttribute("class", "column see-creatives");
						  /* columElem.setAttribute("style", "background-color:blue"); */
						  columElem.setAttribute("id", "column col-embed");
						  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
						  elem.setAttribute("src", searchResults[i]);
						  elem.setAttribute("class", classID1);
						  elem.setAttribute("id", classID);
						  column = document.getElementsByClassName("see-creatives");
					  }
				 }  
                  fileTypeIDLength--;
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("contact-media-in-dbox").append(columElem);
			  //document.getElementById("contact-media-in-dbox").style.backgroundColor = "blue";
			  //columElem.style.backgroundColor = "red";
			  //elem.style.zIndex = "21";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("contact-media-in-dbox").value = height.toString();			  
			  window.console.log(productServiceVideoAdImage[i]);
			  //document.getElementById("column").append(elem);
			  
			  //let column = document.getElementsByClassName("see-creatives");
              
			  var company_name = document.createElement("h3");
			  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
			  company_name.append(company_nameText);
			  
             
              
				  for(var columnCount = 0;columnCount < column.length;columnCount++){
					  if(audioService == 1){
						  column[columnCount].append(cardElem);
						  //card[columnCount].append(elem);
						  card[columnCount].append(containerElem);
						  container[columnCount].append(centerPlayPause);						  
						  container[columnCount].append(elem);						  
					  }else{
					      column[columnCount].append(elem);
					  }
					  column[columnCount].append(company_name);
					  window.console.log(document.getElementById("contact-media-in-dbox"));
				  }

				  if(audioService == 1){
					function PlayPauseAPI(audio, playPauseBTN){
					 playPauseBTN.innerHTML = "&#9658;";
					 playPauseBTN.onclick = function(){
						 playPause(audio, playPauseBTN);
						
						 //stop(audio);
					 }
					}
					
					PlayPauseAPI(elem, playPauseBTN);					  
				  }

              if(fileTypeID[i] == 0){
                elem.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 if(videoElem == 1){
					modal.removeChild(videoEl);
                    videoEl = null;
				 }
			     modal.style.display = "block";
				 modal.style.zIndex = "75";

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }
			  }else if(fileTypeID[i] == 2){
                 company_name.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }

                 var video_elem = document.createElement("audio");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "audiplay modal-content-20 modal-content-20-audio");
                 video_elem.setAttribute("id", "img01-20");
                 video_elem.setAttribute("controls", "true");
                 video_elem.setAttribute("style", "background-image: url('"+"adv.audios.img/"+productServiceAudioAdImage[i]+"')");

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "200";				
				 AudiPlay();
			   }

                elem.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }

                 var video_elem = document.createElement("audio");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20 modal-content-20-audio");
                 video_elem.setAttribute("id", "img01-20");
                 video_elem.setAttribute("controls", "true");
                 video_elem.setAttribute("style", "background-image: url('"+"adv.audios.img/"+productServiceAudioAdImage[i]+"')");

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "200";				 
				 AudiPlay();
			   }
			  }else{
                 elem.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }
				 
				 //-------------------custom controls------------
				 
				 var videoControls = document.createElement("div");
				 VideoControls4PageContent(videoControls, null, system_dirArr[i]);
				 //----------------------------------------------

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 //modal.insertBefore(video_elem, modalImg);
				 modal.insertBefore(videoControls, modalImg);

                 videoEl = videoControls;//video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";			

				 loadVideoControls();
			   }

                company_name.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }
				 
				 //-------------------custom controls------------
				 
				 var videoControls = document.createElement("div");
				 VideoControls4PageContent(videoControls, null, system_dirArr[i]);
				 //----------------------------------------------

			     modal.style.display = "block";
				 modal.style.zIndex = "75";

				 //modal.insertBefore(video_elem, modalImg);
				 modal.insertBefore(videoControls, modalImg);

                 videoEl = videoControls;//video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";			

				 loadVideoControls();
			   }
			  }		
		    
 
 
/*               elemContainer[i] = column[i];
              checkSize(elemContainer);

function checkSize(elem){
  if(elem.length <= 0){
     return;
  }
  else{
   for(var i = 0;i < elem.length;i++){
	elem[i].addEventListener("keypress", keypressed, false);
	elem[i].addEventListener("keyup", keyup, false);
	elem[i].onmousedown = function(){}
	elem[i].onclick = function(){}
  }
 }
}

 function keypressed(event){
     window.console.log("event");
     var elem = column[i];
     if(event.keyCode == 99){
        elem.onmousedown = function(){
            elem.pause();
            videoMarked = null;
            marked = 0;
            videoMarked = document.createElement("div");
            var vidMarked = "event-"+didcx_random_number_generator(0, 337474732626281).toString();
			var vidMarkedId = "event";
            videoMarked.setAttribute("class", vidMarked);
            videoMarked.setAttribute("id", vidMarkedId);
            videoMarked.setAttribute("style", "z-index:9;position:absolute;top:1.6%;width:300px;height:200px;background:blue;");
            
            document.getElementById("contact-media-in-dbox").append(videoMarked);
            
            marked = 1;
       if(marked == 1){
			videoMarked.onclick = function(){
				var vis = document.getElementById("event");
			document.getElementById("contact-media-in-dbox").removeChild(videoMarked);
            videoMarked = null;
            marked = 0;
		    elem.onmousedown = function(){}
		    elem.onclick = function(){}
        }    
        }
       }
    }
 } */
 
/*   function keyup(event){
   var elem = column[i];
   elem.onmousedown = function(){elem.pause();}
   elem.onclick = function(){elem.pause();}
 } */
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("contact-media-in-dbox"));
			 }	

				  // Get the modal
			     //var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 
				  //var modalImg = document.getElementById("img01-1");
				 //var captionText = document.getElementById("caption-1");
				 
				 //modalImg.value = height.toString();


/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */

			}
		   }else if($fetchID == 3){
				  var advFilesContainer = document.getElementById("contact-media-in-dbox");
				  document.getElementById("contact-media-container-in-box").removeChild(advFilesContainer);
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "w3-container contact-media row");
				  advFileContainer.setAttribute("id", "contact-media-in-dbox");
				  document.getElementById("contact-media-container-in-box").append(advFileContainer);
				//}else{
				
				//}
				var myModal_1 = document.getElementById("myModal-1");
				//document.getElementsByClassName("select-display-type-modal")[0].style.display = "none";
				myModal_1.style.display = "none";
				document.getElementsByClassName("modal")[0].style.display = "none";				
			//}else{
				if(document.getElementById("img01-1").value == '5'){
					  var gagaRContainer2 = document.getElementById("gaga-react-container");
					  myModal_1.removeChild(gagaRContainer2);
					  //caption1.classList.remove("gaga-relate-2");
				}	
			   selectDisplayTypes.style.display = "none";
			   didcxWelcome.innerHTML = "DIDCY - WHAT DO YOU THINK";
			   document.getElementById("img01-1").value = '0';
               
			   //selectDisplayTypes.style.display = "none";
/* 			   var advFilesContainer = document.getElementById("contact-media-in-dbox");
			   advFilesContainer.style.display = "block"; */

			 var gagaCounter = 0;
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
			  const classID = "eventVid-"+rand.toString();
			  //var elem = document.createElement("video");
			  //window.alert(system_dirArr);
			  var columElem = document.createElement("div");
			  var elem = document.createElement("video");
			  columElem.setAttribute("class", "column");
			  /* columElem.setAttribute("style", "background-color:blue"); */
			  columElem.setAttribute("id", "column");
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			  //elem.setAttribute("autoplay", "true");
			  elem.setAttribute("loop", "1");
			  elem.setAttribute("muted", "true");
			  elem.setAttribute("controls", "false");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("contact-media-in-dbox").append(columElem);
			  //document.getElementById("column").append(elem);

			  height += 300;
			  //document.getElementById("contact-media-in-dbox").value = height.toString();
			  
			  let gaga_share = document.createElement("button");
			  const gaga_shareText = document.createTextNode("Share");
	          gaga_share.setAttribute("class", "button-1 gaga-share");
	          gaga_share.setAttribute("id", "button-1");
	          //gaga_share.setAttribute("style", "margin-top: 20px");
			  
			  let column = document.getElementsByClassName("see-creatives");

/* 				  var modal = document.getElementById("myModal-1");

				  // Get the image and insert it inside the modal - use its "alt" text as a caption
				  //var img = document.getElementById("");
			  var modalImg = document.getElementById("img01-1");
			  var captionText = document.getElementById("caption-1"); */
			  
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
				  column[columnCount].append(gaga_share);			 
			  }
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

			  gaga_share.append(gaga_shareText);
			  //window.console.log(gaga_share);
			  
			  //let gagaShare = document.getElementsByClassName("gaga-share")[gagaCounter];
			  gaga_share.onclick = function(){
                  
				  const GaGaShare = ["Share with Facebook", "Share with Twitter", "Share with Instagram", 
				  "Share with Youtube", "Share with GaGa", "Share with Pinterest"];
				  const GaGaShareBG = ["#3B5998", "#55ACEE", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
				  const GaGaShareID = ["gaga-share-fb fa fa-facebook fa-fw", "gaga-share-tw fa fa-twitter fa-fw", "gaga-share-ins fa fa-facebook fa-fw", 
				  "gaga-share-ybe fa fa-twitter fa-fw", "gaga-share-gaga fa fa-twitter fa-fw", "gaga-share-pinterest fa fa-facebook fa-fw"];

				  for(var gagaCount = 0;gagaCount < GaGaShare.length;gagaCount++){
					  var gagaShareWithDoc = document.createElement("button");
					  var gagaShareWithDocText = document.createTextNode(GaGaShare[gagaCount]);
					  const classID = "button-1 " + GaGaShareID[gagaCount];
					  const GaGaBG = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
					  GaGaBG = "background-color: " + GaGaShareBG[gagaCount];
					  gagaShareWithDoc.setAttribute("class", GaGaShareID);
					  gagaShareWithDoc.setAttribute("id", "button-1");
					  gagaShareWithDoc.setAttribute("style", GaGaBG);
					  gagaShareWithDoc.append(gagaShareWithDocText);
                      modal.insertBefore(gagaShareWithDoc, captionText);
					  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
					  gagaShareClicks.onclick = function(){
						  var elem = system_dirArr[i];
						  return window.alert(elem);
					  }
				  }
				  //window.console.log(modal);
				  
/* 				  let gaga_share_fb = document.createElement("button");
				  const gaga_shareText2 = document.createTextNode(GaGaShare[0]);
				  const classID = GaGaShareID[
				  gaga_share_fb.setAttribute("class", "button-1 gaga-share-fb");
				  gaga_share_fb.setAttribute("id", "button-1");
				  gaga_share_fb.setAttribute("style", "width: 50%;position: relative;left: 25%;top:");
				  //gaga_share_fb.setAttribute("style", "margin: auto");
				  gaga_share_fb.append(gaga_shareText2); */
				  
				  //modal.insertBefore(gaga_share_fb, captionText);
				  
			      modal.style.display = "block";
                  
				  modalImg.style.display = "none";
			      captionText.innerHTML = "GaGa Share";	
                  modalImg.value = '10';	
				  gagaCounter++;
			  }			  
			  
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("contact-media-in-dbox"));
		    }	
/* 				 var footer = document.createElement("div");
				 const footerText = document.createTextNode("Footer");
				 footer.setAttribute("class", "footer-x");
				 footer.setAttribute("id", "footer-x");
				 footer.setAttribute("style", "height: 200px;text-align: center;color: white;background-color: black;width: 100%;left: 0;right: 0;bottom: 0;position: relative;");
				 footer.append(footerText);
				 document.body.append(footer); */			
/* 					device = window.matchMedia('(max-height: 1366px)');
					checkDeviceHeight(device, 1366);	
				    device = window.matchMedia('(max-height: 1076px)');
					checkDeviceHeight(device, 1076);
					device = window.matchMedia('(max-height: 625px)');
					checkDeviceHeight(device, 625);	 */
				    //selectDisplayTypes.style.display = "none";					
		   }else{
		    //if(gagaSiteContentFromMore == 1){
				  var advFilesContainer = document.getElementById("contact-media-in-dbox");
				  document.getElementById("contact-media-container-in-box").removeChild(advFilesContainer);
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "w3-container contact-media row");
				  advFileContainer.setAttribute("id", "contact-media-in-dbox");
				  document.getElementById("contact-media-container-in-box").append(advFileContainer);			  
				
				var myModal_1 = document.getElementById("myModal-1");
				//document.getElementsByClassName("select-display-type-modal")[0].style.display = "none";
				myModal_1.style.display = "none";
				document.getElementsByClassName("modal")[0].style.display = "none";
				if(document.getElementById("img01-1").value == '5'){
					  var gagaRContainer2 = document.getElementById("gaga-react-container");
					  myModal_1.removeChild(gagaRContainer2);
					  //caption1.classList.remove("gaga-relate-2");
				}				
			//}else{
			 selectDisplayTypes.style.display = "none";
			 didcxWelcome.innerHTML = "DIDCY - YOU DO THE MATH";
			 document.getElementById("img01-1").value = '0';
			//}
			 var imageIdContainer = [];
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  var imageID = "eventProf-"+rand.toString();
			  const classID1 = imageID+" profile-3939302";
			  const classID = imageID;
			  imageIdContainer[i] = imageID;
			  //var elem = document.createElement("video");
			  
			  var columElem = document.createElement("div");
			  var cardElem = document.createElement("div");
			  var containerElem = document.createElement("div");
			  
			  var elem = document.createElement("img");
			  
			  //----------------------------------------
			  var h2 = document.createElement("h2");
			  var p1 = document.createElement("p");
			  var p2 = document.createElement("p");
			  var p3 = document.createElement("p");
			  var p4 = document.createElement("p");
			  var button1 = document.createElement("button");
			  var readMoreBtn = document.createElement("button");
			  //----------------------------------------

			  //----------------------------------------
			  
			  var actor_groupInfo = {
				  name : "",
				  profession : "CEO & Founder",
				  description : "Some text that describes me lorem ipsum ipsum lorem.",
				  email : "example@example.",
				  contact : "Contact",
				  readMore : "Read More"
			  };
			  actor_groupInfo.name = system_dirArr2[i];
			  //window.console.log(system_dirArr2[i]);
			  var h2Text = document.createTextNode(actor_groupInfo.name);
			  var p1Text = document.createTextNode(actor_groupInfo.profession);
			  var p2Text = document.createTextNode(actor_groupInfo.description);
			  var p3Text = document.createTextNode(actor_groupInfo.email);
			  var button1Text = document.createTextNode(actor_groupInfo.contact);
			  var readMoreBtnText = document.createTextNode(actor_groupInfo.readMore);
			  //----------------------------------------
			  
			  //---------------------------------------
			   h2.append(h2Text);
			   p1.append(p1Text);
			   p2.append(p2Text);
			   p3.append(p3Text);
			   button1.append(button1Text);
			   readMoreBtn.append(readMoreBtnText);
			  
			  //---------------------------------------
			  
			  //---------------------------------------
			  h2.setAttribute("class", "name");
			  h2.setAttribute("id", "name");
			  h2.setAttribute("style", "color: white");

			  p1.setAttribute("id", "title");
			  p1.setAttribute("class", "title");
			  p1.setAttribute("style", "color:white");

			  p2.setAttribute("id", "description");
			  p2.setAttribute("class", "description");
			  p2.setAttribute("style", "color:white");

			  p3.setAttribute("id", "email");
			  p3.setAttribute("class", "email");
			  p3.setAttribute("style", "color:white");

			  p4.setAttribute("id", "contact");
			  p4.setAttribute("class", "contact");
			  p4.setAttribute("style", "color:white");

			  button1.setAttribute("id", "button-1");
			  button1.setAttribute("class", "button-1");		
			  
			  readMoreBtn.setAttribute("class", "button-2");		  
			  readMoreBtn.setAttribute("id", "button-2");		  
			  //---------------------------------------
			  
			  columElem.setAttribute("class", "column-2");
			  columElem.setAttribute("id", "column-2");
			  
			  cardElem.setAttribute("class", "card");
			  cardElem.setAttribute("id", "card");			  

			  containerElem.setAttribute("class", "container-1");
			  containerElem.setAttribute("id", "container-1");				  
			  
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			  elem.setAttribute("alt", "");
			  elem.setAttribute("width", "100%");
			  elem.setAttribute("height", "300px");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  elem.setAttribute("style", "cursor: pointer");
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("contact-media-in-dbox").append(columElem);
			  //document.getElementById("contact-media-in-dbox").style.backgroundColor = "white";
			  height += 300;
			  //document.getElementById("column").append(elem);
			  cardElem.style.backgroundColor = "black";
			  let column = document.getElementsByClassName("column-2");
			  let card = document.getElementsByClassName("card");
			  let container = document.getElementsByClassName("container-1");
			  
			  let h2Name = document.getElementsByClassName("name");
			  //let h2Name2 = document.getElementById("name");
			  let p1Title = document.getElementsByClassName("title");
			  let p2Description = document.getElementsByClassName("description");
			  let p3Email = document.getElementsByClassName("email");
			  let p4Contact = document.getElementsByClassName("contact");
			  let button1Contact = document.getElementsByClassName("button-1");
			  let readMoreBtnData = document.getElementsByClassName("button-2");

			  // Get the modal
			  var modal = document.getElementById("myModal-1");

			  // Get the image and insert it inside the modal - use its "alt" text as a caption
			  var img = document.getElementById(classID);
			  var modalImg = document.getElementById("img01-1");
			  var captionText = document.getElementById("caption-1");
			  
			  
			  // Get the modal
			  var modal2 = document.getElementById("myModal-2");

			  // Get the image and insert it inside the modal - use its "alt" text as a caption
			  var img2 = document.getElementById(classID);
			  var modalImg2 = document.getElementById("img01-2");
			  var captionText2 = document.getElementById("caption-2");			  

			  var slideShow = (className) => {
				 w3.slideshow(className, 3000);
			  }	
			  
			  elem.onclick = function(){
			     modal.style.display = "block";
			 
			     modalImg.src = system_dirArr[i];
			     captionText.innerHTML = "GaGa Act";
				 /* magnify2("img01-1", 3); */
			   }
			  			  
			  //var readMoreText = document.getElementById("read-more-text");
			  
              //name = getImageName4ReadMore(system_dirArr[i], "", readMoreText, 0, 'n');
			  //h2.innerHTML = name;


				 var contactName = document.createElement("h4");
				 const contactNameText = document.createTextNode(actor_groupInfo.name);
				 contactName.append(contactNameText);

				 contactName.setAttribute("class", "contactName");
				 contactName.setAttribute("id", "contactName");
				 contactName.setAttribute("style", "color: white");
			  
			  readMoreBtn.onclick = function(){
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 //modalImg2.style.position = "relative";
				 //modalImg2.style.width = "100%";
				 let column5 = document.getElementById("column-5");
				 var readMoreText = document.getElementById("read-more-text");
				 //var h2 = document.getElementsByClassName("name")[i];
				 column5.insertBefore(contactName, readMoreText);
				 getImageName4ReadMore(system_dirArr[i], contactName, readMoreText, 0, i);				
				 //readMoreText.style.position = "relative";
				 //readMoreText.style.width = "100%";
				 captionText2.innerHTML = "GaGa Act";
				 //column5.insertBefore(contactName, readMoreText);
				 column5.setAttribute("style", "background-color: black");
				 profileNameCreateId = 1;
			  }
				 

			  button1.onclick = function(){
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 
				 let column5 = document.getElementById("column-5");
				 var readMoreText = document.getElementById("read-more-text");
				 
				 getImageName4ReadMore(system_dirArr[i], contactName, readMoreText, 1, i);				 
				 column5.insertBefore(contactName, readMoreText);
				 
			     captionText2.innerHTML = "GaGa Act";
			   }
			  
			  var elems = document.getElementsByClassName(classID1);
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(cardElem);
				  card[columnCount].append(elem);
				  card[columnCount].append(containerElem);
				  container[columnCount].append(h2);
				  container[columnCount].append(p1);
				  container[columnCount].append(p2);
				  container[columnCount].append(p3);
				  p3.append(readMoreBtn);
				  container[columnCount].append(p4);
				  p4Contact[columnCount].append(button1);

				  elems.onmouseover = function(){
					  elems.src = "adv.actors.profiles/people3.jpg";
				  }

				  elems.onmouseout = function(){
					  elems.src = system_dirArr[columnCount];
				  }
			  }
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  modalImg.style.display = "block";
			  //window.console.log(columElem);
		    }	
/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */
		   }     
/* 		        if($footerCheck != 1){
				 var footer = document.createElement("div");
				 const footerText = document.createTextNode("No more ads");
				 footer.setAttribute("class", "footer-x signup-header");
				 footer.setAttribute("id", "footer-x");
				 footer.setAttribute("style", "font-size:  30px;text-align: center;color: white;background-color: black;width: 100%;left: 0;right: 0;bottom: 0;position: relative;");
				 
				 
				 
				 footer.append(footerText);
				 document.body.append(footer);	
 				 device = window.matchMedia('(max-height: 1366px)');
				 checkDeviceHeight(device, 1366);	
				 device = window.matchMedia('(max-height: 1076px)');
				 checkDeviceHeight(device, 1076);
				 device = window.matchMedia('(max-height: 625px)');
				 checkDeviceHeight(device, 625);	

                 $footerCheck = 1;
                 $footerCheck2 = 1;
               } */				 
				
		  }else{
		      system_dirArr = null;
		  }
 };
