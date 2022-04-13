 "use strict";
 
  var convert_to_object = null || undefined, array_js_init = 0, array_js = [];
  var names = null;
  var linkArr = null;
  var system_dirArr = [], storeAllCreatedIds = [], system_dirArr2 = [];
  var describeText = "", company_name_text = "", approvedByText = "", periodText = "", jurisdictionText = "";
  var height = 0;
  var device = null, advFileShowCaseNoAdsFound = 0, countValue = 0;
  var name = "", profileNameCreateId = 0, $footerCheck2 = 0, footer_content_id = 0;
  var footerContentResetId = 0;
  var modal_015, img_015, close15, caption15, modal_15_value = 0, res;
  var empty = [], _name = "";
  var deviceProfileCheck = null, exhibitionAdvShowCase = 0, actionInMotion = 0, 
  contactMode = 0, contactMode2 = 0, exhibitionAdvShowCase2 = 0, closeExhibitionAdvShowCase2 = 0, OpenDealer = 0;
  var historyContainer, closeHistoryContainer = null, mediaContainer = null;
  var actorVideoHistoryButton, actorImageHistoryButton, actorAudioHistoryButton, actorVideoHistoryText, 
  actorImageHistoryText, actorAudioHistoryText, actorVideoHistoryContainer, actorImageHistoryContainer = null, mediaCount = 0, fetchSearch = 0;
 var contactNamer = 0;
 var marked = 0, closeAdDealGalleryPortal = 0, OSAED_TABLE_FETCHID_4 = 1;
 var videoMarked = null, drimmer = null;
 var ImageInfo = {fetchID : 0, src : "", contact_name : "", read_more_text : "", 
                  readId : 0, src_id : "", src_2 : "", actorGroupInfo : "", rid : 0};
 var hidden = null, actGrpCount = 0, exhibitionAdvShowCase3 = 0, fetch4 = 0,
 fetch8 = 0, fetch5 = 0, fetchStart = 0;
 var local = 0;
 
 
  function RetrieveHistoricMaterials(fetchID = null, imageId = null, historyContainer = null, 
  historyMediaContainer = null, res = null, historicPerson = null){
      var form = new FormData();
	  form.append("fetch", fetchID);
	  if(imageId.slice(0, 19) == "adv.actors.profiles"){
	    form.append("imageId", imageId.slice(20));
      }else{
        form.append("imageId", imageId.slice(21));
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
			 if(data_returned.state == 0){
				 
			 }else if(data_returned.state == 1){
				 
			 }else if(data_returned.state == 2){
				 
			 }else if(data_returned.state == 3){
				 
			 }else if(data_returned.state == 4){
				 
			 }else if(data_returned.state == 5){
				 
			 }else if(data_returned.state == 6){
				 
			 }else if(data_returned.state == 7){
				//window.console.log(data_returned.files);
				convert_to_object = data_returned.files;
				//window.console.log(convert_to_object);
				for(var gagaCount = 0;gagaCount < convert_to_object.length;gagaCount++){
					 var mediaContainer = null;
					 if(fetchID == 7){
					   mediaContainer = document.createElement("video");
					 }else if(fetchID == 19){
					   mediaContainer = document.createElement("audio");
					   mediaContainer.setAttribute("controls", "true");
					 }else{
					   mediaContainer = document.createElement("img");
					 }
					 var rand = didcx_random_number_generator(0, 228828281919191);
					 const classID = rand.toString();
					 mediaContainer.setAttribute("class", "column video");
					 mediaContainer.setAttribute("id", classID);
					 mediaContainer.setAttribute("style", "cursor: pointer");
					 //mediaContainer.setAttribute("autoplay", "0");
					 //mediaContainer.setAttribute("height", "700px");
					 mediaContainer.src = convert_to_object[gagaCount];
					 historyContainer.append(mediaContainer);
					 empty[gagaCount] = mediaContainer;
                     mediaContainer.addEventListener("click", 
					 mediaListener(mediaContainer, res, mediaCount, fetchID, imageId, historicPerson));		 
				}
			     convert_to_object = null;
			 }
			 else if(data_returned.state == 8){
			     alertBox("No Static Ads Found!!!");
				 return;
			 }else if(data_returned.state == 9){
			     alertBox("No Audio Ads Found!!!");
				 return;
			 }
			 else{
				 
			 }
		  },
		  error: function(){}
	  });
	  
  }
  
  function mediaListener(mediaContainer, res, mediaCount, fetchID, imageId, historicPerson){
	      //window.console.log(mediaContainer);
	      mediaContainer.onclick = function(){
						var mediaBigViewContainer = document.createElement("div");
						var closeMediaBigViewContainer = document.createElement("span");
						var closeMediaBigViewContainerLink = document.createElement("a");

						closeMediaBigViewContainerLink.setAttribute("href", "javascript:void(0)");
						mediaBigViewContainer.setAttribute("class", "mediaBigViewContainer");
						mediaBigViewContainer.setAttribute("id", "mediaBigViewContainer");
	                    mediaBigViewContainer.setAttribute("style", "z-index: 26");
						
						closeMediaBigViewContainer.append(closeMediaBigViewContainerLink);
						mediaBigViewContainer.append(closeMediaBigViewContainer);
						closeMediaBigViewContainer.innerHTML = "&times;";

						closeMediaBigViewContainer.setAttribute("class", "closeMediaBigViewContainer");
						closeMediaBigViewContainer.setAttribute("id", "closeMediaBigViewContainer");

						mediaBigViewContainer.append(mediaContainer);
	
						closeMediaBigViewContainer.onclick = function() { 
						  /* modal6.style.display = "none"; */
						  //var mediaBigViewContainer = document.getElementById("mediaBigViewContainer");
						   if(fetchID == 7 || fetchID == 19){
						     mediaContainer.pause();
						   }
						   mediaContainer.style.height = "0";
						   mediaContainer.style.width = "33.3%";
						   mediaContainer.style.marginTop = "0px";
						   
						   mediaBigViewContainer.style.height = "0%";
						   mediaBigViewContainer.style.paddingTop = "0";
						   //mediaBigViewContainer.removeChild(mediaContainer);
						   res.removeChild(historyContainer);
						    createHistoryContainer(res, fetchID, imageId, historicPerson).style.display = "block";
							//historyContainer.style.width = "70%";
							historyContainer.className += " history-container-action";
							modalImg3.value = '3';
						}
						
						mediaContainer.style.cursor = "pointer";
						mediaContainer.style.width = "100%";
						mediaContainer.style.height = "80%";
						mediaContainer.style.marginTop = "70px";
						mediaBigViewContainer.style.height = "100%";
						res.append(mediaBigViewContainer);	
						mediaContainer.onclick = function(){}
		  }
  }  
 
  function createHistoryContainer(res = null, fetchID = null, imageId = null, historicPerson = null){
	    //window.console.log("console");
        //return window.console.log(imageId.slice(21));
        historyContainer = document.createElement("div");
		let closeHistoryContainer = document.createElement("span");
		var historicMaterialTitle = document.createElement("h1");
        historicMaterialTitle.setAttribute("class", "historic-header");
        historicMaterialTitle.setAttribute("id", "historic-header");
		historicMaterialTitle.setAttribute("style", "text-align: center;color: white");
		
		var hsPerson = null;
		
		if(fetchID == 7){
			hsPerson  = historicPerson + " Video Ads";
		}else if(fetchID == 19){
			hsPerson  = historicPerson + " Audio Ads";
		}else{
			hsPerson  = historicPerson + " Static Ads";
		}
		
		const historicMaterialTitleText = document.createTextNode(hsPerson);
		historicMaterialTitle.append(historicMaterialTitleText);
/*         var p = document.createElement("p");
        const pt = document.createTextNode("Read More Read Less Button"+
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+  
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+ 
				"Read More Read Less Button"+
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+  
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. ");
		p.setAttribute("style", "color: white");
        p.append(pt); */		
		
		
		//historyMediaContainer
		//RetrieveHistoricMaterials(fetchID, imageId, historyContainer, mediaContainer);
		
		historyContainer.append(closeHistoryContainer);
		historyContainer.append(historicMaterialTitle);
		//historyContainer.append(p);
		RetrieveHistoricMaterials(fetchID, imageId, historyContainer, null, 
		document.getElementById("container-c31"), historicPerson);
						
		closeHistoryContainer.innerHTML = "&times;";
		closeHistoryContainer.setAttribute("class", "close-history-container");
		closeHistoryContainer.setAttribute("id", "close-history-container");
						
		historyContainer.setAttribute("class", "w3-modal-content w3-animate-right history-container");
		historyContainer.setAttribute("id", "history-container");
		historyContainer.setAttribute("style", "z-index: 25");
		//historyContainer.setAttribute("style", "background-color: #000");
		//historyContainer.setAttribute("style", "position: fixed;top: 0");
						
		res.append(historyContainer);	  

		closeHistoryContainer.onclick = function(){
			res.removeChild(historyContainer);
			modalImg3.value = '4';
		}
       return historyContainer;
  }
  
  function createRecordServices(column5 = null, res = null, imageId = null, historicPerson = null){
				{
					actorVideoHistoryButton = document.createElement("button");
					actorImageHistoryButton = document.createElement("button");
					actorAudioHistoryButton = document.createElement("button");
					
					actorVideoHistoryText = document.createTextNode("Video Records");
					actorImageHistoryText = document.createTextNode("Static Records");
					actorAudioHistoryText = document.createTextNode("Audio Records");
			        
					actorVideoHistoryButton.setAttribute("class", "button-2 actor-video-history");
					actorVideoHistoryButton.setAttribute("id", "actor-video-history");

					actorImageHistoryButton.setAttribute("class", "button-2 actor-image-history");
					actorImageHistoryButton.setAttribute("id", "actor-image-history");
					
					actorAudioHistoryButton.setAttribute("class", "button-2 actor-audio-history");
					actorAudioHistoryButton.setAttribute("id", "actor-audio-history");
					
					actorVideoHistoryButton.append(actorVideoHistoryText);
					actorImageHistoryButton.append(actorImageHistoryText);
					actorAudioHistoryButton.append(actorAudioHistoryText);
					
					//column5 =  document.getElementById("column-5");
					column5.append(actorVideoHistoryButton);
					column5.append(actorImageHistoryButton);
					column5.append(actorAudioHistoryButton);
					
					actorVideoHistoryButton.onclick = function(){
                            createHistoryContainer(res, 7, imageId, historicPerson).style.display = "block";
							//historyContainer.style.width = "70%";
							historyContainer.className += " history-container-action";
							modalImg3.value = '3';
							
					}

					actorAudioHistoryButton.onclick = function(){
                            createHistoryContainer(res, 19, imageId, historicPerson).style.display = "block";
							//historyContainer.style.width = "70%";
							historyContainer.className += " history-container-action";
							modalImg3.value = '3';
							
					}
					
					actorImageHistoryButton.onclick = function(){
						    createHistoryContainer(res, 8, imageId, historicPerson).style.display = "block";
							//historyContainer.style.width = "70%";
							historyContainer.className += " history-container-action";
							modalImg3.value = '3';
					}
					modalImg3.value = '2';
				}	
             return;				
  }
  
function getImageName4ReadMore(profileID = 0, imageFileName = null, name = null, readMoreText = null, 
readMeId = null, elem_no = null, actor_groupInfo_name = null, actor_group_id = null, 
readMoreTextContainer =  null, company_groupInfo_name = null, company_group_id = null){ //11
	    //window.console.log(actor_group);
	    //window.console.log(elem_no);
	    //readMoreText = document.getElementById("read-more-text");
		//window.console.log(imageFileName);
		var form = new FormData();
		if(imageFileName != null){
		if(profileID == 4){
		 if(readMeId == 0){
				readMoreText.innerHTML = "Read More Read Less Button"+
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+  
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. ";	
		        
		 }else{
			 if(actor_groupInfo_name == "Jane Doe"){
	     //window.console.log("[[[[[]----=");
	     //window.console.log(actor_groupInfo_name);
				 readMoreText.innerHTML = "Tel : +2335543939393003.<br/>E-mail : jessy@didcy.com.<br>Facebook : jessy.<br/>Twitter : jessy."+"<br>"+
				 "Instagram : jessy_law.<br/>Didcy : jessy_law.<br/>WhatsApp : +2335539393020.<br>"+
				 "Website : https://wwww.jessy.law.com<br>Ad Interest : All"+
				 "<br/>Chargeable Fee Per Second : 0.0000";
		     }
		 }
		 form.append("fetch", 6);
		 form.append("ImageFileName", imageFileName.slice(20).toString());
		}else if(profileID == 6){
		 if(readMeId == 0){
				readMoreText.innerHTML = "Welcome to Didcy Action";	
		        
		 }else{
			 if(actor_groupInfo_name == "Jane Doe"){
	     //window.console.log("[[[[[]----=");
	     //window.console.log(actor_groupInfo_name);
				readMoreText.innerHTML = "Welcome to Didcy Action";
		     }
		 }			
		 form.append("fetch", 6);
		 form.append("ImageFileName", imageFileName.slice(20).toString());
		}else if(profileID == 7){
		 if(readMeId == 0){
				readMoreText.innerHTML = "Read More Read Less Button"+
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+  
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. ";	
		        
		 }else{
			 if(actor_groupInfo_name == "Jane Doe"){
	     //window.console.log("[[[[[]----=");
	     //window.console.log(actor_groupInfo_name);
				 readMoreText.innerHTML = "Tel : +2335543939393003.<br/>E-mail : jessy@didcy.com.<br>Facebook : jessy.<br/>Twitter : jessy."+"<br>"+
				 "Instagram : jessy_law.<br/>Didcy : jessy_law.<br/>WhatsApp : +2335539393020.<br>"+
				 "Website : https://wwww.jessy.law.com<br>Ad Interest : All"+
				 "<br/>Chargeable Fee Per Second : 0.0000";
		     }
		 }			
		 form.append("fetch", 6);
		 form.append("ImageFileName", imageFileName.slice(20).toString());
		}else if(profileID == 8){
		 if(readMeId == 0){
				readMoreText.innerHTML = "Read More Read Less Button"+
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+  
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta."+   
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. ";	
		        
		 }else{
			 if(company_groupInfo_name == "Jane Doe"){
	     //window.console.log("[[[[[]----=");
	     //window.console.log(actor_groupInfo_name);
				 readMoreText.innerHTML = "Tel : +2335543939393003.<br/>E-mail : jessy@didcy.com.<br>Facebook : jessy.<br/>Twitter : jessy."+"<br>"+
				 "Instagram : jessy_law.<br/>Didcy : jessy_law.<br/>WhatsApp : +2335539393020.<br>"+
				 "Website : https://wwww.jessy.law.com<br>Ad Interest : All"+
				 "<br/>Chargeable Fee Per Second : 0.0000";
		     }
		 }	
		 form.append("fetch", 13);
         form.append("ImageFileName", imageFileName.slice(21).toString());		 
		}else{
			
		}

		 {
			 //window.console.log(imageFileName.slice(52));
			 
			 //form.append("fetch", 6);
			 $.ajax({
				 url: "adv-uploader.php",
				 type: "POST",
				 processData: false,
				 contentType: false,
				 cache: false,
				 data: form,
				 success: function(result){
					 //window.console.log(result);
					 //var name = document.getElementById("name");
					 var data_returned = JSON.parse(result);
					 var actor_group = data_returned.externalInfos;
					 var company_group = data_returned.externalInfos;
					 //window.console.log(data_returned);
					 //window.console.log(company_group);
					 if(data_returned.state == 0){
						return window.alert("Connection not successful");
					 }
					 else if(data_returned.state == 1){
						return window.alert("Database not initiated"); 
					 }
					 else if(data_returned.state == 2){
						return window.alert("Unable to retrieve user data"); 
					 }
					 else if(data_returned.state == 6){	
					  if(data_returned.name != "" || data_returned.name != " "){
					    name.innerHTML = data_returned.name || "Jane Doe";
						_name = data_returned.name;
				        if(readMeId == 0){
							  if(profileID == 4){
							     readMoreText.innerHTML = data_returned.actorStory;
							  }
							  else if(profileID == 6){
								 readMoreText.innerHTML = "Welcome to Didcy Action";
							  }
							  else if(profileID == 7){
								 readMoreText.innerHTML = data_returned.actorStory; 
							  }
							  else if(profileID == 8){
								 readMoreText.innerHTML = data_returned.companyStory;  
							  }
							  else{
								  
							  }
					    }else{
								 //readMoreText.innerHTML = "Tel : +2335543939393003.<br/>E-mail : jessy@gaga.com.<br>Facebook : jessy.<br/>Twitter : jessy."+"<br>"+
								 //"Instagram : jessy_law.<br/>GaGa : jessy_law.<br/>WhatsApp : +2335539393020.<br>Website : https://wwww.jessy.law.com";

							  if(profileID == 4){
								   actor_group.publicTelOptional[(actor_group_id+2).toString()] = actor_group.publicTelOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.whatAppNoOptional[(actor_group_id+2).toString()] = actor_group.whatAppNoOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.username[(actor_group_id+2).toString()] = actor_group.username[(actor_group_id+2).toString()] || "N/A";
								   actor_group.facebookHandleOptional[(actor_group_id+2).toString()] = actor_group.facebookHandleOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.twitterHandleOptional[(actor_group_id+2).toString()] = actor_group.twitterHandleOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.instagramHandleOptional[(actor_group_id+2).toString()] = actor_group.instagramHandleOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.websiteDomainOptional[(actor_group_id+2).toString()] = actor_group.websiteDomainOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.adInterest[(actor_group_id+2).toString()] = actor_group.adInterest[(actor_group_id+2).toString()] || "N/A";
								   actor_group.adFee[(actor_group_id+2).toString()] = actor_group.adFee[(actor_group_id+2).toString()] || "N/A";



								   readMoreText.innerHTML = "Tel : "+actor_group.publicTelOptional+"<br>"+ 
															"E-mail : "+actor_group.email+"<br>"+
															"Facebook : "+actor_group.facebookHandleOptional+"<br>"+
															"Twitter : "+actor_group.twitterHandleOptional+"<br/>"+
															"Instagram : "+actor_group.instagramHandleOptional+"<br/>"+
															"Didcy : "+actor_group.username+"<br/>"+
															"WhatsApp : "+actor_group.whatAppNoOptional+"<br/>"+
															"Website : "+actor_group.websiteDomainOptional+"<br/>"+
															"Ad Interest : "+actor_group.adInterest+"<br/>"+
															"Chargeable Fee Per Second : $ "+actor_group.adFee;//+"<br/>"+
							  }else if(profileID == 6){
								  readMoreText.innerHTML = "Welcome to Didcy Action";
							  }
							  else if(profileID == 7){
								   actor_group.publicTelOptional[(actor_group_id+2).toString()] = actor_group.publicTelOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.whatAppNoOptional[(actor_group_id+2).toString()] = actor_group.whatAppNoOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.username[(actor_group_id+2).toString()] = actor_group.username[(actor_group_id+2).toString()] || "N/A";
								   actor_group.facebookHandleOptional[(actor_group_id+2).toString()] = actor_group.facebookHandleOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.twitterHandleOptional[(actor_group_id+2).toString()] = actor_group.twitterHandleOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.instagramHandleOptional[(actor_group_id+2).toString()] = actor_group.instagramHandleOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.websiteDomainOptional[(actor_group_id+2).toString()] = actor_group.websiteDomainOptional[(actor_group_id+2).toString()] || "N/A";
								   actor_group.adInterest[(actor_group_id+2).toString()] = actor_group.adInterest[(actor_group_id+2).toString()] || "N/A";
								   actor_group.adFee[(actor_group_id+2).toString()] = actor_group.adFee[(actor_group_id+2).toString()] || "N/A";



								   readMoreText.innerHTML = "Tel : "+actor_group.publicTelOptional+"<br>"+ 
															"E-mail : "+actor_group.email+"<br>"+
															"Facebook : "+actor_group.facebookHandleOptional+"<br>"+
															"Twitter : "+actor_group.twitterHandleOptional+"<br/>"+
															"Instagram : "+actor_group.instagramHandleOptional+"<br/>"+
															"Didcy : "+actor_group.username+"<br/>"+
															"WhatsApp : "+actor_group.whatAppNoOptional+"<br/>"+
															"Website : "+actor_group.websiteDomainOptional+"<br/>"+
															"Ad Interest : "+actor_group.adInterest+"<br/>"+
															"Chargeable Fee Per Second : "+actor_group.adFee;//+"<br/>"+
							  }
							  else if(profileID == 8){
								   company_group.publicTelOptional = company_group.publicTelOptional[(company_group_id+2).toString()] || "N/A";
								   company_group.whatAppNoOptional = company_group.whatAppNoOptional[(company_group_id+2).toString()] || "N/A";
								   company_group.facebookHandleOptional = company_group.facebookHandleOptional[(company_group_id+2).toString()] || "N/A";
								   company_group.twitterHandleOptional = company_group.twitterHandleOptional[(company_group_id+2).toString()] || "N/A";
								   company_group.instagramHandleOptional = company_group.instagramHandleOptional[(company_group_id+2).toString()] || "N/A";
								   company_group.websiteDomainOptional = company_group.websiteDomainOptional[(company_group_id+2).toString()] || "N/A";
								   company_group.adInterest = company_group.adInterest[(company_group_id+2).toString()] || "N/A";
								   company_group.adFee = company_group.adFee[(company_group_id+2).toString()] || "N/A";	 



								   readMoreText.innerHTML = "Tel : "+company_group.publicTelOptional+"<br>"+ 
															"E-mail : "+company_group.businessEmail+"<br>"+
															"Facebook : "+company_group.facebookHandleOptional+"<br>"+
															"Twitter : "+company_group.twitterHandleOptional+"<br/>"+
															"Instagram : "+company_group.instagramHandleOptional+"<br/>"+
															"Didcy : "+company_group.username+"<br/>"+
															"WhatsApp : "+company_group.whatAppNoOptional+"<br/>"+
															"Website : "+company_group.websiteDomainOptional+"<br/>"+
															"Ad Interest : "+company_group.adInterest+"<br/>"+
															"Chargeable Fee Per Second : "+company_group.adFee;//+"<br/>"+
							  }
							  else{
								  
							  }
						}
					  }else{
						if(profileID == 4){
							name.innerHTML = "Jane Doe";
							_name =  "Jane Doe";							
						}
						else if(profileID == 6){							
							name.innerHTML = "[COMPANY]";
							_name =  "[COMPANY]";	
						}
						else if(profileID == 7){
							name.innerHTML = "Jane Doe";
							_name =  "Jane Doe";
						}
						else if(profileID == 8){
							name.innerHTML = "[COMPANY]";
							_name =  "[COMPANY]";							
						}
						else{
								  
						}					
					  }
					 }
					 else if(data_returned.state == 7){						
					    name.innerHTML = "Jane Doe";
						_name =  "Jane Doe";
					 }
				 },
				 error: function(){
					 
				 }
			 });
		 }
		 
		}
		//return name;
}

function checkDeviceWidth4Profile(device = null, deviceId = null, profile = null, profileTextes = null, actor_group_id = null){
   if(window.screen.width == 650){
	  window.console.log("650px");
	if(device.matches == true){
		window.console.log("true");
		//window.console.log("true");
        /*profile.profession = profileTextes.profession[(actor_group_id+2).toString()] || "Ceo & Founder";
		profile.description = profileTextes.actorStory[(actor_group_id+2).toString()] || "Some text that describes me lorem ipsum ipsum lorem";
		profile.email = profileTextes.email[(actor_group_id+2).toString()] || "example@example";*/
		document.getElementById("title").innerHTML = "Ceo & Founder";
	}
	else{
		document.getElementById("title").innerHTML = "Ceo & Foun...";
		window.console.log("false");
	}
  }
}   
 
function checkDeviceWidth(device = null, deviceId){
	var res = document.getElementById("container-c31");
	if(device.matches == true){
		switch(deviceId){
			case '1279min':
			  res.style.marginBottom = "-10%";
			break;
			case '1075min':
			  res.style.marginBottom = "7%";
			break;
			case '1024min':
			  res.style.marginBottom = "4%";
			break;
			default: 
			 return;
		}
	}
}
 
function checkDeviceHeight(device = null, deviceId){
	//var advFileShowCase = document.getElementById("adv-files-showcase");
	var footer = document.getElementById("footer-x");
	var contentBeforeShowcase = 100, showCase = height, spaceAfterShowCase = 100;
	var totalPageHieght = contentBeforeShowcase + showCase + spaceAfterShowCase;
	//window.console.log(height);
	if(device.matches == true){
	 switch(deviceId){
	  case 1076:
	   if((1076 - totalPageHieght) > 30){
		   footer.style.position = "relative";
	   }else{
		   footer.style.position = "fixed";
		   //footer.style.bottom = "0";
	   }
	  break;
	  case 625:
	   window.console.log(625-totalPageHieght);
	   if((625 - totalPageHieght) > 30){
		   footer.style.position = "fixed";
	   }else{
		   footer.style.position = "relative";
		   //footer.style.bottom = "0";
	   }	  
	  break;
	  case 1366:
	   //window.console.log(1366-totalPageHieght);
	   if((1366 - totalPageHieght) > 30){
		   footer.style.position = "fixed";
	   }else{
		   footer.style.position = "relative";
		   //footer.style.bottom = "0";
	   }  
	  break;
	  case 827:
	   window.console.log(827-totalPageHieght);
	   if((827 - totalPageHieght) > 30){
		   footer.style.position = "fixed";
	   }else{
		   footer.style.position = "relative";
		   //footer.style.bottom = "0";
	   }  
	  break;
	  default: 
	  return;
	 }
	}
}
 
function TransformText(containerID = 0){

				  if(containerID == 0){
				    advFilesContainer = document.getElementById("adv-files-showcase");
				  }else if(containerID == 1 && local == 1){
					  document.getElementById("container-c31").removeChild(
					  document.getElementById("adv-files-showcase-video-ads"));
				  }else if(containerID == 2 && local == 1){
				      document.getElementById("container-c31").removeChild(
					  document.getElementById("adv-files-showcase-static-ads"));
				  }else if(containerID == 3 && local == 1){
					  document.getElementById("container-c31").removeChild(
					  document.getElementById("adv-files-showcase-companies-profiles"));
				  }else if(containerID == 4 && local == 1){
					  document.getElementById("container-c31").removeChild(
					  document.getElementById("adv-files-showcase-actors-n-groups-profiles"));
				  }

			      var didcxWelcome = document.getElementById("didcx-welcome");
			      var selectDisplayTypes = document.getElementById("select-display-type-modal");
				  var advFilesContainer = null;
				  
				  if(containerID == 0){
				    advFilesContainer = document.getElementById("adv-files-showcase");
				  }else if(containerID == 1){
				    advFilesContainer = document.getElementById("adv-files-showcase-video-ads");
				  }else if(containerID == 2){
				    advFilesContainer = document.getElementById("adv-files-showcase-static-ads");
				  }else if(containerID == 3){
				    advFilesContainer = document.getElementById("adv-files-showcase-companies-profiles");
				  }else if(containerID == 4){
				    advFilesContainer = document.getElementById("adv-files-showcase-actors-n-groups-profiles");
				  }
				  
				  if(fetchSearch == 5){
				    document.getElementById("container-c31").removeChild(advFilesContainer);
				  }
				  
				  //if(fetchSearch == 5){
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");

				  if(containerID == 0){
				    advFileContainer.setAttribute("id", "adv-files-showcase");
				  }else if(containerID == 1){
				    advFileContainer.setAttribute("id", "adv-files-showcase-video-ads");
				  }else if(containerID == 2){
				    advFileContainer.setAttribute("id", "adv-files-showcase-static-ads");
				  }else if(containerID == 3){
				    advFileContainer.setAttribute("id", "adv-files-showcase-companies-profiles");
				  }else if(containerID == 4){
				    advFileContainer.setAttribute("id", "adv-files-showcase-actor-n-groups-profiles");
				  }
				  
/* 				  advFileContainer.setAttribute("style", "background-color: black"); */
				  document.getElementById("container-c31").append(advFileContainer);
				  //}
				  fetchSearch = 1;
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";
			   document.getElementById("img01-1").value = '0';				
				
				//selectDisplayTypes.style.display = "none";
			    convert_to_object = null || undefined;
				var advFileShowCase = null;

				  if(containerID == 0){
				    advFileShowCase = document.getElementById("adv-files-showcase");
				  }else if(containerID == 1){
				    advFileShowCase = document.getElementById("adv-files-showcase-video-ads");
				  }else if(containerID == 2){
				    advFileShowCase = document.getElementById("adv-files-showcase-static-ads");
				  }else if(containerID == 3){
				    advFileShowCase = document.getElementById("adv-files-showcase-companies-profiles");
				  }else if(containerID == 4){
				    advFileShowCase = document.getElementById("adv-files-showcase-actors-n-groups-profiles");
				  }				

				  if(containerID == 0){
				    advFileShowCase.innerHTML = "No Ads Found!!!";
					advFileShowCaseNoAdsFound = 5;
				  }else if(containerID == 1){
				    advFileShowCase.innerHTML = "No Ads Found!!!";
				  }else if(containerID == 2){
				    advFileShowCase.innerHTML = "No Ads Found!!!";
				  }else if(containerID == 3){
				    advFileShowCase.innerHTML = "No Profiles Found!!!";
				  }else if(containerID == 4){
				    advFileShowCase.innerHTML = "No Profiles Found!!!";
					advFileShowCaseNoAdsFound = 1;
				  }		
			
				advFileShowCase.style.color = "#fff";
				//advFileShowCase.style.backgroundColor = "black";
				advFileShowCase.style.fontSize = "50px";
				//advFileShowCase.style.zIndex = "-1";
				advFileShowCase.style.fontFamily = "sans-serif, arial";
				advFileShowCase.style.textAlign = "center";
				advFileShowCase.setAttribute("class", "signup-header");
} 

var assign = (actor_groupInfo = null, actor_group = null, actor_group_id = undefined, readMoreText = null, profileID = 0, company_groupInfo = null, company_group = null, company_group_id = undefined) => {
  if(profileID == 0){
   actor_groupInfo.profession = actor_group.profession[(actor_group_id+2).toString()] || "Ceo & Founder";
   //actor_groupInfo.profession = (actor_groupInfo.profession.length > 11)?actor_groupInfo.profession.substring(0, 11)+'...':actor_groupInfo.profession;
   var actorDescription = actor_group.actorStory[(actor_group_id+2).toString()];
   if(actor_group.actorStory[(actor_group_id+2).toString()] != undefined){
     actorDescription = (actor_group.actorStory[(actor_group_id+2).toString()].length > 45)?actor_group.actorStory[(actor_group_id+2).toString()].substring(0, 45)+"...":actor_group.actorStory[(actor_group_id+2).toString()];
   }
   actor_groupInfo.description = actorDescription || "Some text that describes me lorem ipsum ipsum lorem.".substring(0, 45)+"..."; //30
   //actor_groupInfo.email = actor_group.email[(actor_group_id+2).toString()] || "example@example.".;
   if(actor_group.email[(actor_group_id+2).toString()] != undefined){
     actor_groupInfo.email = (actor_group.email[(actor_group_id+2).toString()].length > 13)?actor_group.email[(actor_group_id+2).toString()]:actor_group.email[(actor_group_id+2).toString()];
     actor_groupInfo.email = actor_groupInfo.email || "example@example.";//.substring(0, 13)+"..."; //13 .substring(0, 13)+"..."
   }  
   //actor_groupInfo. = actor_group.[(actor_group_id+2).toString()];
   actor_groupInfo.publicTelOptional = actor_group.publicTelOptional[(actor_group_id+2).toString()] || "N/A";
   actor_groupInfo.whatAppNoOptional = actor_group.whatAppNoOptional[(actor_group_id+2).toString()] || "N/A";
   actor_groupInfo.facebookHandleOptional = actor_group.facebookHandleOptional[(actor_group_id+2).toString()] || "N/A";
   actor_groupInfo.twitterHandleOptional = actor_group.twitterHandleOptional[(actor_group_id+2).toString()] || "N/A";
   actor_groupInfo.instagramHandleOptional = actor_group.instagramHandleOptional[(actor_group_id+2).toString()] || "N/A";
   actor_groupInfo.websiteDomainOptional = actor_group.websiteDomainOptional[(actor_group_id+2).toString()] || "N/A";
   actor_groupInfo.adInterest = actor_group.adInterest[(actor_group_id+2).toString()] || "N/A";
   actor_groupInfo.adFee = actor_group.adFee[(actor_group_id+2).toString()] || "N/A";
   
   return actor_groupInfo;
  }else{
   company_groupInfo.activity = company_group.activity[(company_group_id+2).toString()] || "COMPANY";
   //actor_groupInfo.profession = (actor_groupInfo.profession.length > 11)?actor_groupInfo.profession.substring(0, 11)+'...':actor_groupInfo.profession;
   var companyDescription = company_group.companyStory[(company_group_id+2).toString()];
   if(company_group.companyStory[(company_group_id+2).toString()] != undefined){
     companyDescription = (company_group.companyStory[(company_group_id+2).toString()].length > 45)?company_group.companyStory[(company_group_id+2).toString()].substring(0, 45)+"...":company_group.companyStory[(company_group_id+2).toString()];
   }
   company_groupInfo.description = companyDescription || "Some text that describes me lorem ipsum ipsum lorem.".substring(0, 45)+"..."; //30
   //actor_groupInfo.email = actor_group.email[(actor_group_id+2).toString()] || "example@example.".;
   if(company_group.businessEmail[(company_group_id+2).toString()] != undefined){
     company_groupInfo.businessEmail = (company_group.businessEmail[(company_group_id+2).toString()].length > 13)?company_group.businessEmail[(company_group_id+2).toString()]:company_group.businessEmail[(company_group_id+2).toString()];
     company_groupInfo.businessEmail = company_groupInfo.businessEmail || "example@example.";//.substring(0, 13)+"..."; //13 .substring(0, 13)+"..."
   }  
   //actor_groupInfo. = actor_group.[(actor_group_id+2).toString()];
   
   company_groupInfo.publicTelOptional = company_group.publicTelOptional[(company_group_id+2).toString()] || "N/A";
   company_groupInfo.whatAppNoOptional = company_group.whatAppNoOptional[(company_group_id+2).toString()] || "N/A";
   company_groupInfo.facebookHandleOptional = company_group.facebookHandleOptional[(company_group_id+2).toString()] || "N/A";
   company_groupInfo.twitterHandleOptional = company_group.twitterHandleOptional[(company_group_id+2).toString()] || "N/A";
   company_groupInfo.instagramHandleOptional = company_group.instagramHandleOptional[(company_group_id+2).toString()] || "N/A";
   company_groupInfo.websiteDomainOptional = company_group.websiteDomainOptional[(company_group_id+2).toString()] || "N/A";
   company_groupInfo.adInterest = company_group.adInterest[(company_group_id+2).toString()] || "N/A";
   company_groupInfo.adFee = company_group.adFee[(company_group_id+2).toString()] || "N/A";	  
   return company_groupInfo;
  }
}

var assign2 = (actor_groupInfo = null, actor_group = null, actor_group_id = undefined, readMoreText = null, profileID = 0, company_groupInfo = null, company_group = null, company_group_id = undefined) => {
  if(profileID == 0){
   actor_groupInfo.profession = actor_group.profession[(actor_group_id)] || "Ceo & Founder";
   //actor_groupInfo.profession = (actor_groupInfo.profession.length > 11)?actor_groupInfo.profession.substring(0, 11)+'...':actor_groupInfo.profession;
   var actorDescription = actor_group.actorStory[(actor_group_id)];
   if(actor_group.actorStory[(actor_group_id)] != undefined){
     actorDescription = (actor_group.actorStory[(actor_group_id)].length > 45)?actor_group.actorStory[actor_group_id].substring(0, 45)+"...":actor_group.actorStory[(actor_group_id)];
   }
   actor_groupInfo.description = actorDescription || "Some text that describes me lorem ipsum ipsum lorem.".substring(0, 45)+"..."; //30
   //actor_groupInfo.email = actor_group.email[(actor_group_id+2).toString()] || "example@example.".;
   if(actor_group.email[(actor_group_id)] != undefined){
     actor_groupInfo.email = (actor_group.email[(actor_group_id)].length > 13)?actor_group.email[(actor_group_id)]:actor_group.email[(actor_group_id)];
     actor_groupInfo.email = actor_groupInfo.email || "example@example.";//.substring(0, 13)+"..."; //13 .substring(0, 13)+"..."
   }  
   //actor_groupInfo. = actor_group.[(actor_group_id+2).toString()];
   actor_groupInfo.publicTelOptional = actor_group.publicTelOptional[(actor_group_id)] || "N/A";
   actor_groupInfo.whatAppNoOptional = actor_group.whatAppNoOptional[(actor_group_id)] || "N/A";
   actor_groupInfo.facebookHandleOptional = actor_group.facebookHandleOptional[(actor_group_id)] || "N/A";
   actor_groupInfo.twitterHandleOptional = actor_group.twitterHandleOptional[(actor_group_id)] || "N/A";
   actor_groupInfo.instagramHandleOptional = actor_group.instagramHandleOptional[(actor_group_id)] || "N/A";
   actor_groupInfo.websiteDomainOptional = actor_group.websiteDomainOptional[(actor_group_id)] || "N/A";
   actor_groupInfo.adInterest = actor_group.adInterest[(actor_group_id)] || "N/A";
   actor_groupInfo.adFee = actor_group.adFee[(actor_group_id)] || "N/A";
   
   return actor_groupInfo;
  }else{
   company_groupInfo.activity = company_group.activity[(company_group_id)] || "COMPANY";
   //actor_groupInfo.profession = (actor_groupInfo.profession.length > 11)?actor_groupInfo.profession.substring(0, 11)+'...':actor_groupInfo.profession;
   var companyDescription = company_group.companyStory[(company_group_id)];
   if(company_group.companyStory[(company_group_id).toString()] != undefined){
     companyDescription = (company_group.companyStory[(company_group_id)].length > 45)?company_group.companyStory[(company_group_id)].substring(0, 45)+"...":company_group.companyStory[(company_group_id)];
   }
   company_groupInfo.description = companyDescription || "Some text that describes me lorem ipsum ipsum lorem.".substring(0, 45)+"..."; //30
   //actor_groupInfo.email = actor_group.email[(actor_group_id+2).toString()] || "example@example.".;
   if(company_group.businessEmail[(company_group_id)] != undefined){
     company_groupInfo.businessEmail = (company_group.businessEmail[(company_group_id)].length > 13)?company_group.businessEmail[(company_group_id)]:company_group.businessEmail[(company_group_id)];
     company_groupInfo.businessEmail = company_groupInfo.businessEmail || "example@example.";//.substring(0, 13)+"..."; //13 .substring(0, 13)+"..."
   }  
   //actor_groupInfo. = actor_group.[(actor_group_id+2).toString()];
   company_groupInfo.publicTelOptional = company_group.publicTelOptional[(company_group_id)] || "N/A";
   company_groupInfo.whatAppNoOptional = company_group.whatAppNoOptional[(company_group_id)] || "N/A";
   company_groupInfo.facebookHandleOptional = company_group.facebookHandleOptional[(company_group_id)] || "N/A";
   company_groupInfo.twitterHandleOptional = company_group.twitterHandleOptional[(company_group_id)] || "N/A";
   company_groupInfo.instagramHandleOptional = company_group.instagramHandleOptional[(company_group_id)] || "N/A";
   company_groupInfo.websiteDomainOptional = company_group.websiteDomainOptional[(company_group_id)] || "N/A";
   company_groupInfo.adInterest = company_group.adInterest[(company_group_id)] || "N/A";
   company_groupInfo.adFee = company_group.adFee[(company_group_id)] || "N/A";	  
   return company_groupInfo;
  }
}

var describeProductService = (drim = null, $company = null, approvedBy = null, $productServiceName = null, 
engineId = 0) => {
	if(drim == null){
		return window.console.log("Data Error!!!");
	}

    //return window.alert($company);
	
	if(drim != window.location.href.slice(39)){
		drim = window.location.href.slice(39);
	}
    
	var form = new FormData();
	form.append("drim", drim);
/* 	if(engineId == 1){
	  form.append("productServiceName", $productServiceName.slice(11));
	}else{
	  form.append("productServiceName", $productServiceName.slice(11));
	} */
	form.append("productServiceName", $productServiceName.slice(11));
	form.append("company", $company);
    if(approvedBy == 1){
	   form.append("describe", 1);
	}
	else if(approvedBy == 3){
	   form.append("describe", 3);
	}
	else if(approvedBy == 4){
	   form.append("describe", 4);
	}
	else if(approvedBy == 5){
	   form.append("describe", 5);
	}
	else{
		
	}
	
	$.ajax({
		type: "POST",
		url: "adv-describe.php",
		cache: false,
		processData: false,
		contentType: false,
		data: form,
		success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);
			if(data_returned.state == 0){
				window.console.log(0);
			}else if(data_returned.state == 1){
				window.console.log(1);
			}else if(data_returned.state == 2){
				window.console.log(2);
			}else if(data_returned.state == 3){
				window.console.log(3);
			}else if(data_returned.state == 4){
				describeText = data_returned.describe;
				//window.console.log(describeText);
			}else if(data_returned.state == 5){
				approvedByText = data_returned.productServiceApprovedBy;
				//window.console.log(describeText);
			}else if(data_returned.state == 6){
				periodText = data_returned.productServicePeriod;
				//window.console.log(data_returned.productServicePeriod);
			}else if(data_returned.state == 7){
				jurisdictionText = data_returned.productServiceCountry;
				//window.console.log(data_returned.productServicePeriod);
			}
		},
		error: function(){}
	});
	//window.console.log(describeText);
	return describeText || approvedByText;
}

 var exhibitEvents = function($fetchID = null, drim = null, clearContainerId = null, $fetchDecide = 0, 
 adTypeId = null, adDisplayType = null){
  var didcxWelcome = document.getElementById("didcx-welcome");
  var selectDisplayTypes = document.getElementById("select-display-type-modal");
  
   var form = new FormData();
  if($fetchID == 2){
     form.append("fetch", 2);
  }else if($fetchID == 3){
     form.append("fetch", 2);
  }else if($fetchID == 4){
	 form.append("fetch", 4);
  }else if($fetchID == 5){
	 form.append("fetch", 10);
  }else if($fetchID == 6){
	 actGrpCount = 1;
	 form.append("fetch", 4);
  }else if($fetchID == 7){
	 form.append("fetch", 4);
  }else if($fetchID == 8){	  
	 form.append("fetch", 12);
  }else if($fetchID == 9){
	 form.append("fetch", 12);
  }else if($fetchID == 13){
	 form.append("ad-type-id", adTypeId);
	 form.append("ad-display-type-id", adDisplayType);
	 form.append("fetch", 17);
  }else if($fetchID == 14){
	 form.append("fetch", 18);
  }else{
	  
  }

  drimmer = drim;
  if(drim != null){
	  form.append("imageId", drim);
	  form.append("drim", drim);
  }else{
	  form.append("drim", "");
	  form.append("dId", "1");
  }
   $.ajax({
     type: "POST",
	 url: "adv-uploader.php",
	 data: form,
	 processData: false,
	 cache: false,
	 contentType: false,
	 success:  function(result){
		 //window.console.log(result);
		 //return;
		if(contactNamer == 1){
			var contactNamerRm = document.getElementById("contactName");
			document.getElementById("column-5").removeChild(contactNamerRm);
			contactNamer = 0;
			hidden.value = "0";
            profileNameCreateId = 0, exhibitionAdvShowCase = 0, actionInMotion = 0, 
		    contactMode = 0, contactMode2 = 0, exhibitionAdvShowCase2 = 0, 
		    closeExhibitionAdvShowCase2 = 0, OpenDealer = 0, closeAdDealGalleryPortal = 0,
		    OSAED_TABLE_FETCHID_4 = 1, actGrpCount = 0, exhibitionAdvShowCase3 = 0;
		}
		if($fetchID == 9 && local == 1 || $fetchID == 10 && local == 1 || $fetchID == 11 && local == 1 || $fetchID == 12 && local == 1
		  || $fetchID == 14 && local == 1){
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
		}else if($fetchID != 9 && local == 1 || $fetchID != 10 && local == 1 || $fetchID != 11 && local == 1 || $fetchID != 12 && local == 1
		 || $fetchID != 10 && local == 1){ 
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
		//}
		$fetchIDTemp = $fetchID;
		var fileType = null;
	    //window.console.log(result);
 		storeAllCreatedIds = [];
		convert_to_object = null;
		system_dirArr = [];
		array_js_init = 0, array_js = [], linkArr = null;		
	    let data_returned = JSON.parse(result);
		var actor_group = null;
		if(data_returned.externalInfos != ""){
			actor_group = data_returned.externalInfos;
		}else{
		    company_name_text = data_returned.productServiceCompany;
		}
		hidden = document.getElementById("hidden");
        if(hidden.value.toString().trim() == "1"){
			var contactName = document.getElementById("contactName");
			var column5 = document.getElementById("column-5");
			column5.removeChild(contactName);	
			hidden.value = "0";
		}
	    if(OSAED_TABLE_FETCHID_4 == 0){
			if(profileNameCreateId == 1){
				var contactName = document.getElementById("contactName");
				var column5 = document.getElementById("column-5");
				column5.removeChild(contactName);
				profileNameCreateId = 0;
			}
		}
		if(data_returned.state == 0){
				return alertBox("Connection to Server Error!!!.");
		}
		else if(data_returned.state == 1){
				return alertBox("Connection to Database Error!!!.");
		}
		else if(data_returned.state == 2){
				return alertBox("User already exists!!!.");
		}
		else if(data_returned.state == 3){
				return alertBox("Data insertion Error!!!");
		}
		else if(data_returned.state == 4){
				return alertBox("No Ads Found!!!");
		}
		else if(data_returned.state == 403){
				return alertBox("No Static Ads Found!!!");
		}
		else if(data_returned.state == 404){
				return alertBox("No Profiles Found!!!");
		}
		else if(data_returned.state == 550){
				return alertBox("No Audio Ads Found!!!");
		}
		else if(data_returned.state == 551){
				return alertBox("No Audio Ads Found!!!");
		}
		else if(data_returned.state == 553){
				return alertBox("No Audio Ads Found!!!");
		}
		else{
		    convert_to_object = null; 
			names = null;
			 if(data_returned.state == 5){
				//window.console.log(data_returned);
				
                TransformText();
				
/* 				var footer = document.getElementById("footer");
				if(footer.className == 'footer'){
					footer.className += ' footer-2';
				} */
/* 					device = window.matchMedia('(max-height: 1366px)');
					checkDeviceHeight(device, 1366);	
					device = window.matchMedia('(max-height: 1076px)');
					checkDeviceHeight(device, 1076);
					device = window.matchMedia('(max-height: 625px)');
					checkDeviceHeight(device, 625);		 */					
				
			 }else{
				data_returned = result;
				var gaga = JSON.parse(data_returned);
				//window.console.log(data_returned);
				if(gaga.state == 601){
				   fileType = gaga.fileType;
				}
			    if(gaga.state != 601){
				//window.console.log(gaga.files);
				convert_to_object = gaga.files;
				
				names = gaga.names;
				
				//window.console.log(convert_to_object);
				//window.console.log(names);
				//return;

		    if(convert_to_object != null || convert_to_object != undefined){
			   for(var getEachData in convert_to_object){
			     if(convert_to_object[getEachData] == "."){
			       break;
				 }
				 system_dirArr[array_js_init] = convert_to_object[getEachData];
				 system_dirArr2[array_js_init] = names[getEachData];
				 array_js_init += 1;
			   }
			}else{
			     system_dirArr = convert_to_object;
			     system_dirArr2 = names;
			}
		
		  }else{
			  system_dirArr = gaga.files;
		  }		

		  let didcx_random_number_generator = function(min, max){
				return Math.floor(Math.random() * (max - min)) + min;
		  }
		  
/* 		  if(clearContainerId == 'upload.multiple'){
			  system_dirArr.pop();
		  } */
/* 		  var footer = document.getElementById("footer");
		  footer.setAttribute("class", "footer"); */
		  if(exhibitionAdvShowCase2 == 2){
			document.getElementById("container-c31").removeChild(
			document.getElementById("adv-files-showcase"));
			var advFileContainer = document.createElement("div");
			advFileContainer.setAttribute("class", "row");
			advFileContainer.setAttribute("id", "adv-files-showcase");
			document.getElementById("container-c31").append(advFileContainer);
			exhibitionAdvShowCase = 2;
			exhibitionAdvShowCase2 = 2;
		  }		
		  //document.getElementById("adv-files-showcase").setAttribute("class", "row");
		  //document.getElementById("adv-files-showcase").setAttribute("id", "adv-files-showcase");
		  if(system_dirArr != null){
			 document.getElementById("logo").src = "didcy2.png";
			 if($fetchID == 2){
			   if(drim != null){
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
				  columElem.setAttribute("id", "column col-embed");
				  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
				  elem.setAttribute("src", system_dirArr[i]);
				  //elem.setAttribute("autoplay", "false");
				  elem.setAttribute("loop", "1");
				  elem.setAttribute("muted", "true");
				  elem.setAttribute("controls", "false");
				  elem.setAttribute("class", classID1);
				  elem.setAttribute("id", classID);
				  //elem.setAttribute("style", "width:100%");
				  document.getElementById("adv-files-showcase").append(columElem);
				  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
				  height += 300;
				  //document.getElementById("adv-files-showcase").value = height.toString();
				  //document.getElementById("column").append(elem);
                  
				  var company_name = document.createElement("h3");
				  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
				  company_name.append(company_nameText);
				  company_name.setAttribute("style", "color: green;font-family: sans-serif, arial;font-size: 25px;");
				  
				  let gaga_share = document.createElement("button");
				  const gaga_shareText = document.createTextNode("Act");
				  gaga_share.setAttribute("class", "button-1 gaga-share");
				  gaga_share.setAttribute("id", "button-1");
				  
				  let column = document.getElementsByClassName("column");
				  for(var columnCount = 0;columnCount < column.length;columnCount++){
					  column[columnCount].append(elem);
					  column[columnCount].append(company_name);
					  column[columnCount].append(gaga_share);	
/* 					  elem.addEventListener("keypress", (function(elem){keypressed(event, elem);})(elem), false);
					  elem.addEventListener("keyup", (function(elem){keyup(event, elem);})(elem), false);
					  elem.onmousedown = function(){}
					  elem.onclick = function(){} */
				  }
				  

 function keypressed(event, elem){
     if(event.keyCode == 97){
        elem.onmousedown = function(){
            elem.pause();
            videoMarked = null;
            marked = 0;
            videoMarked = document.createElement("div");
            var vidMarked = "event-"+didcx_random_number_generator(0, 337474732626281).toString();
			var vidMarkedId = "event";
            videoMarked.setAttribute("class", vidMarked);
            videoMarked.setAttribute("id", vidMarkedId);
            videoMarked.setAttribute("style", "position:absolute;top:1.6%;width:300px;height:200px;background:blue;");
            
            document.getElementById("adv-files-showcase").append(videoMarked);
            
            marked = 1;
       if(marked == 1){
			videoMarked.onclick = function(){
				var vis = document.getElementById("event");
			document.getElementById("adv-files-showcase").removeChild(videoMarked);
            videoMarked = null;
            marked = 0;
		    elem.onmousedown = function(){}
		    elem.onclick = function(){}
        }    
        }
       }
    }

 }
 
  function keyup(event, elem){
   elem.onmousedown = function(){elem.pause();}
   elemelem.onclick = function(){elem.pause();}
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
				  //window.console.log(document.getElementById("adv-files-showcase"));

				  gaga_share.append(gaga_shareText);
				  //window.console.log(gaga_share);
				  
				  //let gagaShare = document.getElementsByClassName("gaga-share")[gagaCounter];
				  gaga_share.onclick = function(){
					  
					  const GaGaShare = ["Share with Facebook", "Share with Twitter", "Share with Instagram", 
					  "Share with Youtube", "Share with Didcy", "Share with Pinterest"];
					  const GaGaShareBG = ["#3B5998", "#55ACEE", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID = ["gaga-share-fb fa fa-facebook fa-fw", "gaga-share-tw fa fa-twitter fa-fw", "gaga-share-ins fa fa-facebook fa-fw", 
					  "gaga-share-ybe fa fa-twitter fa-fw", "gaga-share-gaga fa fa-twitter fa-fw", "gaga-share-pinterest fa fa-facebook fa-fw"];

					  const GaGaShare2 = ["Didcy Share", "Didcy Decide", "Definition", 
					  "Approved by", "Date & Time", "Jurisdiction"];
					  const GaGaShareBG2 = ["blue", "rgba(125, 25, 225, 1)", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID2 = ["gaga-share", "gaga-decide", "gaga-definition", 
					  "gaga-approved-by", "gaga-date-time", "jurisdiction"];

					  for(var gagaCount = 0;gagaCount < GaGaShare2.length;gagaCount++){
						  var gagaShareWithDoc = document.createElement("button");
						  var gagaShareWithDocText = document.createTextNode(GaGaShare2[gagaCount]);
						  const classID = "button-1 " + GaGaShareID2[gagaCount];
						  const GaGaBG2 = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
						  gagaShareWithDoc.setAttribute("class", GaGaShareID2);
						  gagaShareWithDoc.setAttribute("id", "button-1");
						  gagaShareWithDoc.setAttribute("style", GaGaBG2);
						  gagaShareWithDoc.append(gagaShareWithDocText);
						  modal.insertBefore(gagaShareWithDoc, captionText);
						  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
						  if(gagaCount == 0){
							  //var img_015x = document.getElementById("img01-15");
							  //modalImg.value = "15";
							  gagaShareClicks.onclick = function(){
							  //var elem = system_dirArr[i];
							  //return window.alert(elem);
							      //window.console.log("dkdkd-fr");
                                   
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	

								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  
								  for(var gagaCount = 0;gagaCount < GaGaShare.length;gagaCount++){
									  var gagaShareWithDoc = document.createElement("button");
									  var gagaShareWithDocText = document.createTextNode(GaGaShare[gagaCount]);
									  const classID = "button-12 " + GaGaShareID[gagaCount];
									  const GaGaBG = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
									  gagaShareWithDoc.setAttribute("class", GaGaShareID);
									  gagaShareWithDoc.setAttribute("id", "button-1");
									  gagaShareWithDoc.setAttribute("style", GaGaBG);
									  gagaShareWithDoc.append(gagaShareWithDocText);					  							  
									  modal_015.insertBefore(gagaShareWithDoc, caption15);
									  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
									  empty[gagaCount] = gagaShareClicks;
/* 									  gagaShareClicks.onclick = function(){
										  var elem = system_dirArr[i];
										  return window.alert(elem);										  
									  } */		
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										///for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }									  
								  }

								  modal_015.style.display = "block";
								  img_015.style.display = "none";
								  caption15.innerHTML = "Didcy Share";											  						  


								  modalImg.value = '10';
								  if(modalImg.value == '10'){
									  modal12.style.zIndex = "9";
									  empty[0].onclick = function(){
										  //modal_015.style.display = "none";
										  //modal_015.value = "15";
										  showMediaAccount(0, 2);
									  }
									  empty[1].onclick = function(){
										  showMediaAccount(1);
									  }
									  empty[2].onclick = function(){
										  showMediaAccount(2);
									  }
									  empty[3].onclick = function(){
										  showMediaAccount(3);
									  }
									  empty[4].onclick = function(){
										  showMediaAccount(4);
									  }
									  empty[5].onclick = function(){
										  showMediaAccount(5);
									  }
								  }	
							  
/* 							  modal_015.style.display = "block";
							  img_015.style.display = "none";
							  img_015.value = "15";
							  caption15.innerHTML = "GaGa Share"; */
						   }
						 }
						  else if(gagaCount == 1){
							  gagaShareClicks.style.display = "none";
							  gagaShareClicks.onclick = function(){
								  ServicesNotAvailable('Decide Services', 
								  'Decide Service report is at the back side. Please tab/put the mouse on this box to view the report.');}
						  }
						  else if(gagaCount == 2){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 1, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(describeText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 19px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "GaGa Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 3){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 3, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(approvedByText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 4){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 4, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var period = 
								  "Product/Service Commencement Date : " +periodText[0]+"<br>"+
								  "Product/Service Elapsing Date : " +periodText[1]+"<br>"+
								  "Product/Service Commencement Time : " +periodText[2]+"<br>"+
								  "Product/Service Elapsing Time : " +periodText[3]+"<br>"+
								  "Product/Service Shipmet Date : " +periodText[4]+"<br>"+
								  "Product/Service Shipmet Time : " +periodText[5];
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(period);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 20px;color: white;text-align: center");
								  describe.append(describeTxt);
								  describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 5){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 5, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(jurisdictionText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  //describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
					  }


					  
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
				if(fetchStart == 1){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
				  fetchStart = 0;
				}
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
				  fetchStart = 1;
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";//"Didcy - STOP THINKING TOO MUCH && JUST DO IT";
			   document.getElementById("img01-1").value = '0';
			//}
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
			  //elem.setAttribute("autoplay", "false");
			  elem.setAttribute("loop", "1");
			  elem.setAttribute("muted", "true");
			  elem.setAttribute("controls", "false");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase").append(columElem);
			  ////document.getElementById("adv-files-showcase").style.backgroundColor = "white";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("adv-files-showcase").value = height.toString();			  
			  
			  //document.getElementById("column").append(elem);
			  
			  let column = document.getElementsByClassName("column");
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
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

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
				 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
			   }
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
			 }	

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */

			}
			      footer_content_id = 21;
		   }else if($fetchID == 3){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";
			   document.getElementById("img01-1").value = '0';
               
			   //selectDisplayTypes.style.display = "none";
/* 			   var advFilesContainer = document.getElementById("adv-files-showcase");
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
				  columElem.setAttribute("id", "column col-embed");
				  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
				  elem.setAttribute("src", system_dirArr[i]);
				  //elem.setAttribute("autoplay", "false");
				  elem.setAttribute("loop", "1");
				  elem.setAttribute("muted", "true");
				  elem.setAttribute("controls", "false");
				  elem.setAttribute("class", classID1);
				  elem.setAttribute("id", classID);
					  
				  //elem.setAttribute("style", "width:100%");
				  document.getElementById("adv-files-showcase").append(columElem);
				  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
				  height += 300;
				  //document.getElementById("adv-files-showcase").value = height.toString();
				  //document.getElementById("column").append(elem);
                  
				  var company_name = document.createElement("h3");
				  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
				  company_name.append(company_nameText);
				  company_name.setAttribute("style", "color: green;font-family: sans-serif, arial;font-size: 25px;");
				  
				  let gaga_share = document.createElement("button");
				  const gaga_shareText = document.createTextNode("Act");
				  gaga_share.setAttribute("class", "button-1 gaga-share");
				  gaga_share.setAttribute("id", "button-1");
				  
				  let column = document.getElementsByClassName("column");
				  for(var columnCount = 0;columnCount < column.length;columnCount++){
					  column[columnCount].append(elem);
					  column[columnCount].append(company_name);
					  column[columnCount].append(gaga_share);

/* 					  elem.addEventListener("keypress", keypressed, false);
					  elem.addEventListener("keyup", keyup, false);
					  elem.onmousedown = function(){}
					  elem.onclick = function(){} 	 */				  

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

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
				 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
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

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
				 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
			   }

 function keypressed(event){
     if(event.keyCode == 97){
		 window.console.log("%%%%");
        elem.onmousedown = function(){
            elem.pause();
            videoMarked = null;
            marked = 0;
            videoMarked = document.createElement("div");
            var vidMarked = "event-"+"-00099";//didcx_random_number_generator(0, 337474732626281).toString();
			var vidMarkedId = "event";
            videoMarked.setAttribute("class", vidMarked);
            videoMarked.setAttribute("id", vidMarkedId);
            videoMarked.setAttribute("style", 
			"position: relative;top: 1.6%;width:300px;height:200px;background:blue;");
            
            document.getElementById("adv-files-showcase").append(videoMarked);
            
            marked = 1;
       if(marked == 1){
			videoMarked.onclick = function(){
				var vis = document.getElementById("event");
			document.getElementById("adv-files-showcase").removeChild(videoMarked);
            videoMarked = null;
            marked = 0;
		    elem.onmousedown = function(){}
		    elem.onclick = function(){}
        }    
        }
       }
    }

 }
 
  function keyup(event){
   elem.onmousedown = function(){elem.pause();}
   elem.onclick = function(){elem.pause();}
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
				  //window.console.log(document.getElementById("adv-files-showcase"));

				  gaga_share.append(gaga_shareText);
				  //window.console.log(gaga_share);
				  
				  //let gagaShare = document.getElementsByClassName("gaga-share")[gagaCounter];
				  gaga_share.onclick = function(){
					  
					  const GaGaShare = ["Share with Facebook", "Share with Twitter", "Share with Instagram", 
					  "Share with Youtube", "Share with Didcy", "Share with Pinterest"];
					  const GaGaShareBG = ["#3B5998", "#55ACEE", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID = ["gaga-share-fb fa fa-facebook fa-fw", "gaga-share-tw fa fa-twitter fa-fw", "gaga-share-ins fa fa-facebook fa-fw", 
					  "gaga-share-ybe fa fa-twitter fa-fw", "gaga-share-gaga fa fa-twitter fa-fw", "gaga-share-pinterest fa fa-facebook fa-fw"];

					  const GaGaShare2 = ["Didcy Share", "Didcy Decide", "Definition", 
					  "Approved by", "Date & Time", "Jurisdiction"];
					  const GaGaShareBG2 = ["blue", "rgba(125, 25, 225, 1)", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID2 = ["gaga-share", "gaga-decide", "gaga-definition", 
					  "gaga-approved-by", "gaga-date-time", "jurisdiction"];

					  for(var gagaCount = 0;gagaCount < GaGaShare2.length;gagaCount++){
						  var gagaShareWithDoc = document.createElement("button");
						  var gagaShareWithDocText = document.createTextNode(GaGaShare2[gagaCount]);
						  const classID = "button-1 " + GaGaShareID2[gagaCount];
						  const GaGaBG2 = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
						  gagaShareWithDoc.setAttribute("class", GaGaShareID2);
						  gagaShareWithDoc.setAttribute("id", "button-1");
						  gagaShareWithDoc.setAttribute("style", GaGaBG2);
						  gagaShareWithDoc.append(gagaShareWithDocText);
						  modal.insertBefore(gagaShareWithDoc, captionText);
						  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
						  if(gagaCount == 0){
							  //var img_015x = document.getElementById("img01-15");
							  //modalImg.value = "15";
							  gagaShareClicks.onclick = function(){
							  //var elem = system_dirArr[i];
							  //return window.alert(elem);
							      //window.console.log("dkdkd-fr");
                                   
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	

								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  
								  for(var gagaCount = 0;gagaCount < GaGaShare.length;gagaCount++){
									  var gagaShareWithDoc = document.createElement("button");
									  var gagaShareWithDocText = document.createTextNode(GaGaShare[gagaCount]);
									  const classID = "button-12 " + GaGaShareID[gagaCount];
									  const GaGaBG = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
									  gagaShareWithDoc.setAttribute("class", GaGaShareID);
									  gagaShareWithDoc.setAttribute("id", "button-1");
									  gagaShareWithDoc.setAttribute("style", GaGaBG);
									  gagaShareWithDoc.append(gagaShareWithDocText);					  							  
									  modal_015.insertBefore(gagaShareWithDoc, caption15);
									  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
									  empty[gagaCount] = gagaShareClicks;
/* 									  gagaShareClicks.onclick = function(){
										  var elem = system_dirArr[i];
										  return window.alert(elem);										  
									  } */		
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }									  
								  }

								  modal_015.style.display = "block";
								  img_015.style.display = "none";
								  caption15.innerHTML = "Didcy Share";											  						  


								  modalImg.value = '10';
								  if(modalImg.value == '10'){
									  modal12.style.zIndex = "9";
									  empty[0].onclick = function(){
										  //modal_015.style.display = "none";
										  //modal_015.value = "15";
										  showMediaAccount(0, 2);
									  }
									  empty[1].onclick = function(){
										  showMediaAccount(1);
									  }
									  empty[2].onclick = function(){
										  showMediaAccount(2);
									  }
									  empty[3].onclick = function(){
										  showMediaAccount(3);
									  }
									  empty[4].onclick = function(){
										  showMediaAccount(4);
									  }
									  empty[5].onclick = function(){
										  showMediaAccount(5);
									  }
								  }	
							  
/* 							  modal_015.style.display = "block";
							  img_015.style.display = "none";
							  img_015.value = "15";
							  caption15.innerHTML = "GaGa Share"; */
						   }
						 }
						  else if(gagaCount == 1){
							  gagaShareClicks.onclick = function(){ServicesNotAvailable('Decide Services', 
								  'Decide Service report is at the back side. Please tab/put the mouse on this box to view the report.');}
						  }
						  else if(gagaCount == 2){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 1, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(describeText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 19px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "GaGa Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 3){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 3, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(approvedByText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 4){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 4, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var period = 
								  "Product/Service Commencement Date : " +periodText[0]+"<br>"+
								  "Product/Service Elapsing Date : " +periodText[1]+"<br>"+
								  "Product/Service Commencement Time : " +periodText[2]+"<br>"+
								  "Product/Service Elapsing Time : " +periodText[3]+"<br>"+
								  "Product/Service Shipmet Date : " +periodText[4]+"<br>"+
								  "Product/Service Shipmet Time : " +periodText[5];
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(period);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 20px;color: white;text-align: center");
								  describe.append(describeTxt);
								  describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 5){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 5, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(jurisdictionText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  //describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
					  }

					  
					  modal.style.display = "block";
					  
					  modalImg.style.display = "none";
					  captionText.innerHTML = "Didcy Action";	
					  modalImg.value = '10';	
					  gagaCounter++;
				 }	 //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
		    }	
			    footer_content_id = 22;
/* 		        if($footerCheck2 != 1){
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

                 $footerCheck2 = 1;
                 $footerCheck = 1;
               } */					
		   }else if($fetchID == 13){
			   if(drim != null){
				 for(let i = 0;i < system_dirArr.length;i++){
				  var rand = didcx_random_number_generator(0, 228828281919191);
				  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
				  const classID = "eventVid-"+rand.toString();
				  //var elem = document.createElement("video");
				  //window.alert(system_dirArr);
				  var columElem = document.createElement("div");
				  var elem = null;
				  
			  if(fileType[i] == 0){
				 elem = document.createElement("img");
			  }else if(fileType[i] == 2){
				 elem = document.createElement("audio");
			     //elem.setAttribute("autoplay", "false");
			     elem.setAttribute("loop", "1");
			     elem.setAttribute("muted", "true");
			     elem.setAttribute("controls", "false");				  
			  }else{
				 elem = document.createElement("video");
			     //elem.setAttribute("autoplay", "false");
			     elem.setAttribute("loop", "1");
			     elem.setAttribute("muted", "true");
			     elem.setAttribute("controls", "false");
			  }
				  
				  columElem.setAttribute("class", "column");
				  /* columElem.setAttribute("style", "background-color:blue"); */
				  columElem.setAttribute("id", "column col-embed");
				  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
				  elem.setAttribute("src", system_dirArr[i]);
				  elem.setAttribute("class", classID1);
				  elem.setAttribute("id", classID);
				  //elem.setAttribute("style", "width:100%");
				  document.getElementById("adv-files-showcase").append(columElem);
				  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
				  height += 300;
				  //document.getElementById("adv-files-showcase").value = height.toString();
				  //document.getElementById("column").append(elem);
                  
				  var company_name = document.createElement("h3");
				  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
				  company_name.append(company_nameText);
				  company_name.setAttribute("style", "color: green;font-family: sans-serif, arial;font-size: 25px;");
				  
				  let gaga_share = document.createElement("button");
				  const gaga_shareText = document.createTextNode("Act");
				  gaga_share.setAttribute("class", "button-1 gaga-share");
				  gaga_share.setAttribute("id", "button-1");
				  
				  let column = document.getElementsByClassName("column");
				  for(var columnCount = 0;columnCount < column.length;columnCount++){
					  column[columnCount].append(elem);
					  column[columnCount].append(company_name);
					  column[columnCount].append(gaga_share);	
/* 					  elem.addEventListener("keypress", (function(elem){keypressed(event, elem);})(elem), false);
					  elem.addEventListener("keyup", (function(elem){keyup(event, elem);})(elem), false);
					  elem.onmousedown = function(){}
					  elem.onclick = function(){} */
				  }
				  

              if(fileType[i] == 0){
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
				 
				 //modal.style.backgroundImage = "url('didcx.logo.2.jpg')";

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }
			  }else if(fileType[i] == 2){
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
                 video_elem.setAttribute("class", "modal-content-20 modal-content-20-audio");
                 video_elem.setAttribute("id", "img01-20");
                 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
			   }
			  }else{
                 company_name.onclick = function(){
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
                 
                 if(videoEl != null){
                    modal.removeChild(videoEl);
				 }

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
				 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
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

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
				 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
			   }
			  }		
		    				  
				  

 function keypressed(event, elem){
     if(event.keyCode == 97){
        elem.onmousedown = function(){
            elem.pause();
            videoMarked = null;
            marked = 0;
            videoMarked = document.createElement("div");
            var vidMarked = "event-"+didcx_random_number_generator(0, 337474732626281).toString();
			var vidMarkedId = "event";
            videoMarked.setAttribute("class", vidMarked);
            videoMarked.setAttribute("id", vidMarkedId);
            videoMarked.setAttribute("style", "position:absolute;top:1.6%;width:300px;height:200px;background:blue;");
            
            document.getElementById("adv-files-showcase").append(videoMarked);
            
            marked = 1;
       if(marked == 1){
			videoMarked.onclick = function(){
				var vis = document.getElementById("event");
			document.getElementById("adv-files-showcase").removeChild(videoMarked);
            videoMarked = null;
            marked = 0;
		    elem.onmousedown = function(){}
		    elem.onclick = function(){}
        }    
        }
       }
    }

 }
 
  function keyup(event, elem){
   elem.onmousedown = function(){elem.pause();}
   elemelem.onclick = function(){elem.pause();}
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
				  //window.console.log(document.getElementById("adv-files-showcase"));

				  gaga_share.append(gaga_shareText);
				  //window.console.log(gaga_share);
				  
				  //let gagaShare = document.getElementsByClassName("gaga-share")[gagaCounter];
				  gaga_share.onclick = function(){
					  
					  const GaGaShare = ["Share with Facebook", "Share with Twitter", "Share with Instagram", 
					  "Share with Youtube", "Share with Didcy", "Share with Pinterest"];
					  const GaGaShareBG = ["#3B5998", "#55ACEE", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID = ["gaga-share-fb fa fa-facebook fa-fw", "gaga-share-tw fa fa-twitter fa-fw", "gaga-share-ins fa fa-facebook fa-fw", 
					  "gaga-share-ybe fa fa-twitter fa-fw", "gaga-share-gaga fa fa-twitter fa-fw", "gaga-share-pinterest fa fa-facebook fa-fw"];

					  const GaGaShare2 = ["Didcy Share", "Didcy Decide", "Definition", 
					  "Approved by", "Date & Time", "Jurisdiction"];
					  const GaGaShareBG2 = ["blue", "rgba(125, 25, 225, 1)", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID2 = ["gaga-share", "gaga-decide", "gaga-definition", 
					  "gaga-approved-by", "gaga-date-time", "jurisdiction"];

					  for(var gagaCount = 0;gagaCount < GaGaShare2.length;gagaCount++){
						  var gagaShareWithDoc = document.createElement("button");
						  var gagaShareWithDocText = document.createTextNode(GaGaShare2[gagaCount]);
						  const classID = "button-1 " + GaGaShareID2[gagaCount];
						  const GaGaBG2 = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
						  gagaShareWithDoc.setAttribute("class", GaGaShareID2);
						  gagaShareWithDoc.setAttribute("id", "button-1");
						  gagaShareWithDoc.setAttribute("style", GaGaBG2);
						  gagaShareWithDoc.append(gagaShareWithDocText);
						  modal.insertBefore(gagaShareWithDoc, captionText);
						  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
						  if(gagaCount == 0){
							  //var img_015x = document.getElementById("img01-15");
							  //modalImg.value = "15";
							  gagaShareClicks.onclick = function(){
							  //var elem = system_dirArr[i];
							  //return window.alert(elem);
							      //window.console.log("dkdkd-fr");
                                   
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	

								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  
								  for(var gagaCount = 0;gagaCount < GaGaShare.length;gagaCount++){
									  var gagaShareWithDoc = document.createElement("button");
									  var gagaShareWithDocText = document.createTextNode(GaGaShare[gagaCount]);
									  const classID = "button-12 " + GaGaShareID[gagaCount];
									  const GaGaBG = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
									  gagaShareWithDoc.setAttribute("class", GaGaShareID);
									  gagaShareWithDoc.setAttribute("id", "button-1");
									  gagaShareWithDoc.setAttribute("style", GaGaBG);
									  gagaShareWithDoc.append(gagaShareWithDocText);					  							  
									  modal_015.insertBefore(gagaShareWithDoc, caption15);
									  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
									  empty[gagaCount] = gagaShareClicks;
/* 									  gagaShareClicks.onclick = function(){
										  var elem = system_dirArr[i];
										  return window.alert(elem);										  
									  } */		
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										///for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }									  
								  }

								  modal_015.style.display = "block";
								  img_015.style.display = "none";
								  caption15.innerHTML = "Didcy Share";											  						  


								  modalImg.value = '10';
								  if(modalImg.value == '10'){
									  modal12.style.zIndex = "9";
									  empty[0].onclick = function(){
										  //modal_015.style.display = "none";
										  //modal_015.value = "15";
										  showMediaAccount(0, 2);
									  }
									  empty[1].onclick = function(){
										  showMediaAccount(1);
									  }
									  empty[2].onclick = function(){
										  showMediaAccount(2);
									  }
									  empty[3].onclick = function(){
										  showMediaAccount(3);
									  }
									  empty[4].onclick = function(){
										  showMediaAccount(4);
									  }
									  empty[5].onclick = function(){
										  showMediaAccount(5);
									  }
								  }	
							  
/* 							  modal_015.style.display = "block";
							  img_015.style.display = "none";
							  img_015.value = "15";
							  caption15.innerHTML = "GaGa Share"; */
						   }
						 }
						  else if(gagaCount == 1){
							  gagaShareClicks.style.display = "none";
							  gagaShareClicks.onclick = function(){
								  ServicesNotAvailable('Decide Services', 
								  'Decide Service report is at the back side. Please tab/put the mouse on this box to view the report.');}
						  }
						  else if(gagaCount == 2){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 1, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(describeText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 19px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "GaGa Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 3){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 3, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(approvedByText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 4){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 4, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var period = 
								  "Product/Service Commencement Date : " +periodText[0]+"<br>"+
								  "Product/Service Elapsing Date : " +periodText[1]+"<br>"+
								  "Product/Service Commencement Time : " +periodText[2]+"<br>"+
								  "Product/Service Elapsing Time : " +periodText[3]+"<br>"+
								  "Product/Service Shipmet Date : " +periodText[4]+"<br>"+
								  "Product/Service Shipmet Time : " +periodText[5];
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(period);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 20px;color: white;text-align: center");
								  describe.append(describeTxt);
								  describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 5){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 5, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(jurisdictionText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  //describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
					  }


					  
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
				if(fetchStart == 1){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
				  fetchStart = 0;
				}
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
				  fetchStart = 1;
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";//"Didcy - STOP THINKING TOO MUCH && JUST DO IT";
			   document.getElementById("img01-1").value = '0';
			//}
			
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
			  const classID = "eventVid-"+rand.toString();
			  //var elem = document.createElement("video");
			  //window.alert(system_dirArr);
			  var columElem = document.createElement("div");
			  var elem = null;
			  
			  if(fileType[i] == 0){
				 elem = document.createElement("img");
			  }else if(fileType[i] == 2){
				 elem = document.createElement("audio");
			     //elem.setAttribute("autoplay", "false");
			     elem.setAttribute("loop", "1");
			     elem.setAttribute("muted", "true");
			     elem.setAttribute("controls", "false");
                 //columElem.setAttribute("background-image", "url(didcx.logo.2.jpg)");	//-image		 
                 //columElem.setAttribute("z-index", "9");	//-image		 
			  }else{
				 elem = document.createElement("video");
			     //elem.setAttribute("autoplay", "false");
			     elem.setAttribute("loop", "1");
			     elem.setAttribute("muted", "true");
			     elem.setAttribute("controls", "false");
			  }
			  
			  columElem.setAttribute("class", "column");
			  /* columElem.setAttribute("style", "background-color:blue"); */
			  columElem.setAttribute("id", "column");
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase").append(columElem);
			  ////document.getElementById("adv-files-showcase").style.backgroundColor = "white";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("adv-files-showcase").value = height.toString();			  
			  
			  //document.getElementById("column").append(elem);
			  
			  let column = document.getElementsByClassName("column");
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
			  }
			  
			  //document.getElementById("column").style.backgroundImage = "url('didcx.logo.2.jpg')";
			  
              if(fileType[i] == 0){
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

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }
			  }else if(fileType[i] == 2){
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

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 //modal.style.backgroundImage = "url('didcx.logo.2.jpg')";
				 //modal.style.backgroundSize = "50%";
                 //modalImg.src = "didcx.logo.2.jpg";
                 //modalImg.style.display = "block";
                 //
				 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
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

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
                 video_elem.setAttribute("controls", "true");

			     modal.style.paddingTop = "2px";
			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
			   }
			  }		
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
			 }	

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */

			}
			      footer_content_id = 21;
		   }else if($fetchID == 14){
				if(fetchStart == 1){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
				  fetchStart = 0;
				}
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
				  fetchStart = 1;
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";//"Didcy - STOP THINKING TOO MUCH && JUST DO IT";
			   document.getElementById("img01-1").value = '0';
			   if(drim != null){
				 for(let i = 0;i < system_dirArr.length;i++){
				  var rand = didcx_random_number_generator(0, 228828281919191);
				  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
				  const classID = "eventVid-"+rand.toString();
				  //var elem = document.createElement("video");
				  //window.alert(system_dirArr);
				  var columElem = document.createElement("div");
				  var elem = document.createElement("audio");
				  columElem.setAttribute("class", "column");
				  /* columElem.setAttribute("style", "background-color:blue"); */
				  columElem.setAttribute("id", "column col-embed");
				  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
				  elem.setAttribute("src", system_dirArr[i]);
				  //elem.setAttribute("autoplay", "false");
				  elem.setAttribute("loop", "1");
				  elem.setAttribute("muted", "true");
				  elem.setAttribute("controls", "false");
				  elem.setAttribute("class", classID1);
				  elem.setAttribute("id", classID);
				  //elem.setAttribute("style", "width:100%");
				  document.getElementById("adv-files-showcase").append(columElem);
				  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
				  height += 300;
				  //document.getElementById("adv-files-showcase").value = height.toString();
				  //document.getElementById("column").append(elem);
                  
				  var company_name = document.createElement("h3");
				  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
				  company_name.append(company_nameText);
				  company_name.setAttribute("style", "color: green;font-family: sans-serif, arial;font-size: 25px;");
				  
				  let gaga_share = document.createElement("button");
				  const gaga_shareText = document.createTextNode("Act");
				  gaga_share.setAttribute("class", "button-1 gaga-share");
				  gaga_share.setAttribute("id", "button-1");
				  
				  let column = document.getElementsByClassName("column");
				  for(var columnCount = 0;columnCount < column.length;columnCount++){
					  column[columnCount].append(elem);
					  column[columnCount].append(company_name);
					  column[columnCount].append(gaga_share);	
/* 					  elem.addEventListener("keypress", (function(elem){keypressed(event, elem);})(elem), false);
					  elem.addEventListener("keyup", (function(elem){keyup(event, elem);})(elem), false);
					  elem.onmousedown = function(){}
					  elem.onclick = function(){} */
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

                 var video_elem = document.createElement("audio");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20 modal-content-20-audio");
                 video_elem.setAttribute("id", "img01-20");
                 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
			   }
				  

 function keypressed(event, elem){
     if(event.keyCode == 97){
        elem.onmousedown = function(){
            elem.pause();
            videoMarked = null;
            marked = 0;
            videoMarked = document.createElement("div");
            var vidMarked = "event-"+didcx_random_number_generator(0, 337474732626281).toString();
			var vidMarkedId = "event";
            videoMarked.setAttribute("class", vidMarked);
            videoMarked.setAttribute("id", vidMarkedId);
            videoMarked.setAttribute("style", "position:absolute;top:1.6%;width:300px;height:200px;background:blue;");
            
            document.getElementById("adv-files-showcase").append(videoMarked);
            
            marked = 1;
       if(marked == 1){
			videoMarked.onclick = function(){
				var vis = document.getElementById("event");
			document.getElementById("adv-files-showcase").removeChild(videoMarked);
            videoMarked = null;
            marked = 0;
		    elem.onmousedown = function(){}
		    elem.onclick = function(){}
        }    
        }
       }
    }

 }
 
  function keyup(event, elem){
   elem.onmousedown = function(){elem.pause();}
   elemelem.onclick = function(){elem.pause();}
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
				  //window.console.log(document.getElementById("adv-files-showcase"));

				  gaga_share.append(gaga_shareText);
				  //window.console.log(gaga_share);
				  
				  //let gagaShare = document.getElementsByClassName("gaga-share")[gagaCounter];
				  gaga_share.onclick = function(){
					  
					  const GaGaShare = ["Share with Facebook", "Share with Twitter", "Share with Instagram", 
					  "Share with Youtube", "Share with Didcy", "Share with Pinterest"];
					  const GaGaShareBG = ["#3B5998", "#55ACEE", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID = ["gaga-share-fb fa fa-facebook fa-fw", "gaga-share-tw fa fa-twitter fa-fw", "gaga-share-ins fa fa-facebook fa-fw", 
					  "gaga-share-ybe fa fa-twitter fa-fw", "gaga-share-gaga fa fa-twitter fa-fw", "gaga-share-pinterest fa fa-facebook fa-fw"];

					  const GaGaShare2 = ["Didcy Share", "Didcy Decide", "Definition", 
					  "Approved by", "Date & Time", "Jurisdiction"];
					  const GaGaShareBG2 = ["blue", "rgba(125, 25, 225, 1)", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID2 = ["gaga-share", "gaga-decide", "gaga-definition", 
					  "gaga-approved-by", "gaga-date-time", "jurisdiction"];

					  for(var gagaCount = 0;gagaCount < GaGaShare2.length;gagaCount++){
						  var gagaShareWithDoc = document.createElement("button");
						  var gagaShareWithDocText = document.createTextNode(GaGaShare2[gagaCount]);
						  const classID = "button-1 " + GaGaShareID2[gagaCount];
						  const GaGaBG2 = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
						  gagaShareWithDoc.setAttribute("class", GaGaShareID2);
						  gagaShareWithDoc.setAttribute("id", "button-1");
						  gagaShareWithDoc.setAttribute("style", GaGaBG2);
						  gagaShareWithDoc.append(gagaShareWithDocText);
						  modal.insertBefore(gagaShareWithDoc, captionText);
						  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
						  if(gagaCount == 0){
							  //var img_015x = document.getElementById("img01-15");
							  //modalImg.value = "15";
							  gagaShareClicks.onclick = function(){
							  //var elem = system_dirArr[i];
							  //return window.alert(elem);
							      //window.console.log("dkdkd-fr");
                                   
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	

								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  
								  for(var gagaCount = 0;gagaCount < GaGaShare.length;gagaCount++){
									  var gagaShareWithDoc = document.createElement("button");
									  var gagaShareWithDocText = document.createTextNode(GaGaShare[gagaCount]);
									  const classID = "button-12 " + GaGaShareID[gagaCount];
									  const GaGaBG = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
									  gagaShareWithDoc.setAttribute("class", GaGaShareID);
									  gagaShareWithDoc.setAttribute("id", "button-1");
									  gagaShareWithDoc.setAttribute("style", GaGaBG);
									  gagaShareWithDoc.append(gagaShareWithDocText);					  							  
									  modal_015.insertBefore(gagaShareWithDoc, caption15);
									  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
									  empty[gagaCount] = gagaShareClicks;
/* 									  gagaShareClicks.onclick = function(){
										  var elem = system_dirArr[i];
										  return window.alert(elem);										  
									  } */		
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										///for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }									  
								  }

								  modal_015.style.display = "block";
								  img_015.style.display = "none";
								  caption15.innerHTML = "Didcy Share";											  						  


								  modalImg.value = '10';
								  if(modalImg.value == '10'){
									  modal12.style.zIndex = "9";
									  empty[0].onclick = function(){
										  //modal_015.style.display = "none";
										  //modal_015.value = "15";
										  showMediaAccount(0, 2);
									  }
									  empty[1].onclick = function(){
										  showMediaAccount(1);
									  }
									  empty[2].onclick = function(){
										  showMediaAccount(2);
									  }
									  empty[3].onclick = function(){
										  showMediaAccount(3);
									  }
									  empty[4].onclick = function(){
										  showMediaAccount(4);
									  }
									  empty[5].onclick = function(){
										  showMediaAccount(5);
									  }
								  }	
							  
/* 							  modal_015.style.display = "block";
							  img_015.style.display = "none";
							  img_015.value = "15";
							  caption15.innerHTML = "GaGa Share"; */
						   }
						 }
						  else if(gagaCount == 1){
							  gagaShareClicks.style.display = "none";
							  gagaShareClicks.onclick = function(){
								  ServicesNotAvailable('Decide Services', 
								  'Decide Service report is at the back side. Please tab/put the mouse on this box to view the report.');}
						  }
						  else if(gagaCount == 2){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 1, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(describeText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 19px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "GaGa Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 3){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 3, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(approvedByText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 4){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 4, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var period = 
								  "Product/Service Commencement Date : " +periodText[0]+"<br>"+
								  "Product/Service Elapsing Date : " +periodText[1]+"<br>"+
								  "Product/Service Commencement Time : " +periodText[2]+"<br>"+
								  "Product/Service Elapsing Time : " +periodText[3]+"<br>"+
								  "Product/Service Shipmet Date : " +periodText[4]+"<br>"+
								  "Product/Service Shipmet Time : " +periodText[5];
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(period);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 20px;color: white;text-align: center");
								  describe.append(describeTxt);
								  describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 5){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 5, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(jurisdictionText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  //describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
					  }


					  
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
				if(fetchStart == 1){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
				  fetchStart = 0;
				}
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
				  fetchStart = 1;
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";//"Didcy - STOP THINKING TOO MUCH && JUST DO IT";
			   document.getElementById("img01-1").value = '0';
			//}
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
			  const classID = "eventVid-"+rand.toString();
			  //var elem = document.createElement("video");
			  //window.alert(system_dirArr);
			  var columElem = document.createElement("div");
			  var elem = document.createElement("audio");
			  columElem.setAttribute("class", "column");
			  /* columElem.setAttribute("style", "background-color:blue"); */
			  columElem.setAttribute("id", "column");
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			  //elem.setAttribute("autoplay", "false");
			  elem.setAttribute("loop", "1");
			  elem.setAttribute("muted", "true");
			  elem.setAttribute("controls", "false");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase").append(columElem);
			  ////document.getElementById("adv-files-showcase").style.backgroundColor = "white";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("adv-files-showcase").value = height.toString();			  
			  
			  //document.getElementById("column").append(elem);
			  
			  let column = document.getElementsByClassName("column");
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
			  }
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
			 }	

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */

			}
			      footer_content_id = 21;
		   }else if($fetchID == 4){	
                  if(exhibitionAdvShowCase3 == 2){
					  var img01_1 = document.getElementById("img01-1");
					  img01_1.value = "5";
					  exhibitionAdvShowCase3 = 0;
					  closeExhibitionAdvShowCase2 = 0;
				  }	
                  if(exhibitionAdvShowCase3 == -1){
					  document.getElementById("img01-1").value = '5';
					  exhibitionAdvShowCase3 = 0;
					  closeExhibitionAdvShowCase2 = 0;
				  }		   
				  if(actionInMotion == 1){
					document.getElementById("column-5").removeChild(document.getElementsByClassName(
					"OpenDeal")[0]);
					actionInMotion = 0;
				  }	
				  exhibitionAdvShowCase = 1;
				  exhibitionAdvShowCase2 = 1;
				  //if(OSAED_TABLE_FETCHID_4 != 1){
					 if(fetch4 == 1 || fetch8 == 1){
					  var advFilesContainer = document.getElementById("adv-files-showcase");
					  document.getElementById("container-c31").removeChild(advFilesContainer);
					  fetch4 = 0;
					 }
				/*  OSAED_TABLE_FETCHID_4 = 1;
				  }else{
					  OSAED_TABLE_FETCHID_4 = 0;
				  }*/
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);fetch4 = 1;			  
				
			  if(closeExhibitionAdvShowCase2 == 0){
				var myModal_1 = document.getElementById("myModal-1");
				//document.getElementsByClassName("select-display-type-modal")[0].style.display = "none";
				myModal_1.style.display = "none";
				document.getElementsByClassName("modal")[0].style.display = "none";
				if(document.getElementById("img01-1").value == '5'){
					  var gagaRContainer2 = document.getElementById("gaga-react-container");
					  myModal_1.removeChild(gagaRContainer2);
					  //caption1.classList.remove("gaga-relate-2");
				}				
			  }else{
				closeExhibitionAdvShowCase2 = 0;
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
				  profession : "Ceo & Founder",
				  description : "Some text that describes me lorem ipsum ipsum lorem.",
				  username : "N/A",
				  email : "example@example.", //.substring(0, 13)+'...'
				  contact : "Contact",
				  readMore : "Read More",
				  publicTelOptional : "N/A",
				  whatAppNoOptional : "N/A",
				  facebookHandleOptional  : "N/A",
				  twitterHandleOptional : "N/A",
				  instagramHandleOptional : "N/A",
				  websiteDomainOptional : "N/A",
				  adInterest : "All",
				  adFee : "0.0000"
			  };
			  var readMoreText = document.getElementById("read-more-text");
			  actor_groupInfo.name = system_dirArr2[i];
			  assign(actor_groupInfo, actor_group, i, readMoreText);
			  //window.console.log(readMoreText.innerHTML+"\\\\");
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

			  button1.setAttribute("id", "button1");
			  button1.setAttribute("class", "button-1 button1");		
			  
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
			  elem.setAttribute("style", "cursor: pointer;z-index: 18");
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase").append(columElem);
			  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
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
			     captionText.innerHTML = "Didcy Act";
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
				if(actGrpCount > 1){
					actGrpCount = 1;
					var contactNamex = document.getElementById("contactName");
					var column5x = document.getElementById("column-5");
					column5x.removeChild(contactNamex);	
					hidden.value = "0";
				}
				 actGrpCount++;
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 //modalImg2.style.position = "relative";
				 //modalImg2.style.width = "100%";
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 //var h2 = document.getElementsByClassName("name")[i];
				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 getImageName4ReadMore(4, system_dirArr[i], contactName, readMoreText, 0, i, system_dirArr2[i]);			
				 setTimeout(() => {
				 createRecordServices(column5, document.getElementById("container-c31"), system_dirArr[i],
				 _name);}, 100);
				 //readMoreText.style.position = "relative";
				 //readMoreText.style.width = "100%";
				 captionText2.innerHTML = "Didcy Act";
				 //column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 column5.setAttribute("style", "background-color: black");
				 profileNameCreateId = 1;
				 
				 if(closeOSAED_TABLE != 6){
				    closeOSAED_TABLE = 3;
			     }
			  }
				 

			  button1.onclick = function(){
				if(actGrpCount > 1){
					actGrpCount = 1;
					var contactNamex = document.getElementById("contactName");
					var column5x = document.getElementById("column-5");
					column5x.removeChild(contactNamex);	
					hidden.value = "0";
				}
				 actGrpCount++;
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 if(closeOSAED_TABLE != 6){
				    closeOSAED_TABLE = 3;
			     }
				 
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 
				 getImageName4ReadMore(4, system_dirArr[i], contactName, readMoreText, 1, i, system_dirArr2[i], 
				 actor_groupInfo, i);//.name != "Jane Doe"?actor_groupInfo:null);				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 
			     captionText2.innerHTML = "Didcy Act";
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
			
			      //CheckProfileDevice650();
				  
			      footer_content_id = 23;
/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */
		   }else if($fetchID == 5){
			   if(drim != null){
		    //if(gagaSiteContentFromMore == 1){
				//if(clearContainerId == 'av'){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
				  
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";
			   document.getElementById("img01-1").value = '0';
			//}
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
			  const classID = "eventVid-"+rand.toString();
			  //var elem = document.createElement("video");
			  //window.alert(system_dirArr);
			  var columElem = document.createElement("div");
			  var elem = document.createElement("img");
			  columElem.setAttribute("class", "column");
			  /* columElem.setAttribute("style", "background-color:blue"); */
			  columElem.setAttribute("id", "column");
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			 /* elem.setAttribute("autoplay", "false");
			  elem.setAttribute("loop", "1");
			  elem.setAttribute("muted", "true");
			  elem.setAttribute("controls", "false");*/
			  elem.setAttribute("width", "100%");
			  elem.setAttribute("height", "300px");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase").append(columElem);
			  ////document.getElementById("adv-files-showcase").style.backgroundColor = "white";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("adv-files-showcase").value = height.toString();			  
			  
			  //document.getElementById("column").append(elem);
			  
			  let column = document.getElementsByClassName("column");
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
			  }

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

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
			 }	

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */

			  }else{
		       //if(gagaSiteContentFromMore == 1){
				//if(clearContainerId == 'av'){
				if(fetch5 == 1){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
				  fetch5 = 0;
				}
				  fetch5 = 1;
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
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
			   didcxWelcome.innerHTML = "DIDCY - WE'VE GOT YOUR BACK";
			   document.getElementById("img01-1").value = '0';
			//}
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
			  const classID = "eventVid-"+rand.toString();
			  //var elem = document.createElement("video");
			  //window.alert(system_dirArr);
			  var columElem = document.createElement("div");
			  var elem = document.createElement("img");
			  columElem.setAttribute("class", "column");
			  /* columElem.setAttribute("style", "background-color:blue"); */
			  columElem.setAttribute("id", "column");
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			  /*elem.setAttribute("autoplay", "false");
			  elem.setAttribute("loop", "1");
			  elem.setAttribute("muted", "true");
			  elem.setAttribute("controls", "false");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);*/
			  elem.setAttribute("width", "100%");
			  elem.setAttribute("height", "300px");
			  document.getElementById("adv-files-showcase").append(columElem);
			  ////document.getElementById("adv-files-showcase").style.backgroundColor = "white";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("adv-files-showcase").value = height.toString();			  
			  
			  //document.getElementById("column").append(elem);
			  
			  let column = document.getElementsByClassName("column");
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
			  }

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

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }

			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
			 }	

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */

			}
		   //}
/* 		   }
			      footer_content_id = 21; */			   
		   //}
		       
          //}
			      footer_content_id = 21;	
                  //return footerMe($footerCheck2, $footerCheck);	
		 }else if($fetchID == 6){
		    if(exhibitionAdvShowCase == 1){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
			}
		    if(exhibitionAdvShowCase == 2){
				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer);
			}
					  var advFilesContainer2 = document.getElementById("adv-company-ads-deal-container");
					  document.getElementById("myModal-13").removeChild(advFilesContainer2);
					 
					  var advFileContainer2 = document.createElement("div");
					  advFileContainer2.setAttribute("class", "row");
					  advFileContainer2.setAttribute("id", "adv-company-ads-deal-container");
					  
					  var advCaption13 = document.getElementById("caption-13");
					  document.getElementById("myModal-13").insertBefore(
					  advFileContainer2, advCaption13);	
					
					
				  var advFilesContainer = document.getElementById("adv-exhibition-platform");
				  document.getElementById("myModal-adv-exhibition-platform").removeChild(advFilesContainer);
				 
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-exhibition-platform");
				  
				  var advExhibitCaption = document.getElementById("caption-adv-exhibition-platform");
				  document.getElementById("myModal-adv-exhibition-platform").insertBefore(
				  advFileContainer, advExhibitCaption);			  
				
/* 				var myModal_1 = document.getElementById("myModal-1");
				//document.getElementsByClassName("select-display-type-modal")[0].style.display = "none";
				myModal_1.style.display = "none";
				document.getElementsByClassName("modal")[0].style.display = "none"; */
			//}
			 var imageIdContainer = [];
			 contactMode = 0;
			 
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
			  
			  var actionButton = document.createElement("button");
			  //----------------------------------------

			  //----------------------------------------
			  
			  var actor_groupInfo = {
				  name : "",
				  profession : "Ceo & Founder",
				  description : "Some text that describes me lorem ipsum ipsum lorem.",
				  username : "N/A",
				  email : "example@example.", //.substring(0, 13)+'...'
				  contact : "Contact",
				  readMore : "Read More",
				  action: "Action",
				  publicTelOptional : "N/A",
				  whatAppNoOptional : "N/A",
				  facebookHandleOptional  : "N/A",
				  twitterHandleOptional : "N/A",
				  instagramHandleOptional : "N/A",
				  websiteDomainOptional : "N/A",
				  adInterest : "All",
				  adFee : "0.0000"
			  };
			  var readMoreText = document.getElementById("read-more-text");
			  actor_groupInfo.name = system_dirArr2[i];
			  assign(actor_groupInfo, actor_group, i, readMoreText);
			  //window.console.log(readMoreText.innerHTML+"\\\\");
			  //window.console.log(system_dirArr2[i]);
			  var h2Text = document.createTextNode(actor_groupInfo.name);
			  var p1Text = document.createTextNode(actor_groupInfo.profession);
			  var p2Text = document.createTextNode(actor_groupInfo.description);
			  var p3Text = document.createTextNode(actor_groupInfo.email);
			  var button1Text = document.createTextNode(actor_groupInfo.contact);
			  var readMoreBtnText = document.createTextNode(actor_groupInfo.readMore);
			  var actionButtonText = document.createTextNode(actor_groupInfo.action);
			  //----------------------------------------
			  
			  //---------------------------------------
			   h2.append(h2Text);
			   p1.append(p1Text);
			   p2.append(p2Text);
			   p3.append(p3Text);
			   //p3.append(p3Text);
			   button1.append(button1Text);
			   readMoreBtn.append(readMoreBtnText);
			   actionButton.append(actionButtonText);
			  
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

			  button1.setAttribute("id", "button1");
			  button1.setAttribute("class", "button-1 button1");		
			  
			  readMoreBtn.setAttribute("class", "button-2");		  
			  readMoreBtn.setAttribute("id", "button-2");		
			  
			  actionButton.setAttribute("class", "button-1 button1");		  
			  actionButton.setAttribute("id", "button1");		  
			  //---------------------------------------
			  
			  columElem.setAttribute("class", "column-2");
			  columElem.setAttribute("id", "column-2");
			  //columElem.setAttribute("style", "z-index: 14");
			  
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
			  document.getElementById("adv-exhibition-platform").append(columElem);
			  document.getElementById("adv-exhibition-platform").style.backgroundColor = "white";
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
			     modal.style.zIndex = "14";
			     modalImg.src = system_dirArr[i];
			     captionText.innerHTML = "Didcy Act";
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
                if(actionInMotion == 1){
				  document.getElementById("column-5").removeChild(document.getElementsByClassName(
				  "OpenDeal")[0]);
				  actionInMotion = 0;
				}
				 modal2.style.zIndex = "13";
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 //modalImg2.style.position = "relative";
				 //modalImg2.style.width = "100%";
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 //var h2 = document.getElementsByClassName("name")[i];
				 contactMode = 0;
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 getImageName4ReadMore(4, system_dirArr[i], contactName, readMoreText, 0, i, system_dirArr2[i]);			
				 setTimeout(() => {
				 createRecordServices(column5, document.getElementById("container-c31"), system_dirArr[i],
				 _name, 6);}, 100);
				 hidden.value = '1';
				 //readMoreText.style.position = "relative";
				 //readMoreText.style.width = "100%";
				 captionText2.innerHTML = "Didcy Act";
				 //column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 column5.setAttribute("style", "background-color: black");
				 profileNameCreateId = 1;
			  }
				 

			  button1.onclick = function(){
			     /* modal2.style.zIndex = "19"; */
                if(actionInMotion == 1){
				  document.getElementById("column-5").removeChild(document.getElementsByClassName(
				  "OpenDeal")[0]);
				  actionInMotion = 0;
				}
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 
				 getImageName4ReadMore(4, system_dirArr[i], contactName, readMoreText, 1, i, system_dirArr2[i], 
				 actor_groupInfo, i);//.name != "Jane Doe"?actor_groupInfo:null);				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 hidden.value = '1';
			     captionText2.innerHTML = "Didcy Act";
			   }
			   
			   actionButton.onclick = function(){
			     modal2.style.display = "block";
			     modal2.style.zIndex = "12";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 
				 ImageInfo = {
					 fetchID : 6,
					 src : system_dirArr[i],
					 contact_name : contactName,
					 read_more_text : readMoreText,
					 readId : 1,
					 src_id : i,
					 src_2 : system_dirArr2[i],
					 actorGroupInfo : actor_groupInfo,
					 rid : i
				 };
				 
				 getImageName4ReadMore(6, system_dirArr[i], contactName, readMoreText, 1, i, system_dirArr2[i], 
				 actor_groupInfo, i);//.name != "Jane Doe"?actor_groupInfo:null);
	             hidden.value = '1';
				contactMode = 1;
				contactMode2 = 1;
				
                if(actionInMotion == 1){
				  document.getElementById("column-5").removeChild(document.getElementsByClassName(
				  "OpenDeal")[0]);
				  actionInMotion = 0;
				}

				 var OpenDeal = document.createElement("button");
				 const OpenDealText = document.createTextNode("Open Deals");
				 OpenDeal.append(OpenDealText);
				 
				 OpenDeal.setAttribute("class", "button-2 OpenDeal");
				 OpenDeal.setAttribute("id", "button-2");

				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 column5.append(OpenDeal);
				 
				 function OpenProviderDealsPortal(){
					if(OpenDealer == 1){
					  var advFilesContainer2 = document.getElementById("adv-company-ads-deal-container");
					  document.getElementById("myModal-13").removeChild(advFilesContainer2);
					 
					  var advFileContainer2 = document.createElement("div");
					  advFileContainer2.setAttribute("class", "row");
					  advFileContainer2.setAttribute("id", "adv-company-ads-deal-container");
					  
					  var advCaption13 = document.getElementById("caption-13");
					  document.getElementById("myModal-13").insertBefore(
					  advFileContainer2, advCaption13);	
				  
					  OpenDealer = 0;
					}
					for(var i = 0;i < system_dirArr.length;i++){
					  var rand = didcx_random_number_generator(0, 228828281919191);
					  var imageID = "eventProf-"+rand.toString();
					  const classID1 = imageID+" profile-3939302";
					  const classID = imageID;
					  //imageIdContainer[i] = imageID;

					  var columnElem = document.createElement("div");
					  var cardElem = document.createElement("div");
					  var containerElem = document.createElement("div");
					  
					  var elem = document.createElement("img");
					  
					  var productServiceName = document.createElement("p");
					  var productServiceNameText = document.createTextNode("Product Name");

					  /* var p4 = document.createElement("p"); */
					  //var productServiceNameText = document.createTextNode("Product Name");
					  
					  
					  var checkOut = document.createElement("button");

					  var checkOutText = document.createTextNode("Check out");
					  
					  checkOut.append(checkOutText);

					  productServiceName.append(productServiceNameText);

					  productServiceName.setAttribute("class", "name");
					  productServiceName.setAttribute("id", "name");
					  productServiceName.setAttribute("style", "color: white");

/* 					  p4.setAttribute("class", "contact");
					  p4.setAttribute("id", "contact"); */
					  
					  checkOut.setAttribute("class", "button-2 OpenDeal");
					  checkOut.setAttribute("id", "button-2");
					  
					  columnElem.setAttribute("class", "column-2 column-11");
					  columnElem.setAttribute("id", "column-2");
					  //columElem.setAttribute("style", "z-index: 14");
					  
					  cardElem.setAttribute("class", "card card-11");
					  cardElem.setAttribute("id", "card");			  

					  containerElem.setAttribute("class", "container-1 container-11");
					  containerElem.setAttribute("id", "container-1");							 

					  elem.setAttribute("src", system_dirArr[i]);
					  elem.setAttribute("alt", "");
					  elem.setAttribute("width", "100%");
					  elem.setAttribute("height", "300px");
					  elem.setAttribute("class", classID1);
					  elem.setAttribute("id", classID);
					  elem.setAttribute("style", "cursor: pointer");
					  var advCompanyAdsContainer = document.getElementById("adv-company-ads-deal-container");
					  advCompanyAdsContainer.append(columnElem);
					  /* advCompanyAdsContainer.style.backgroundColor = "white"; */
					  columnElem.append(cardElem);
					  cardElem.append(containerElem);
					  
					  cardElem.style.backgroundColor = "black";	
					  
/* 					  let column = document.getElementsByClassName("column-11")[0];
					  let card = document.getElementsByClassName("card-11")[0];
					  let container = document.getElementsByClassName("container-11")[0]; */

                      /* var elems = document.getElementsByClassName("classID1")[0]; */
					  
					  columnElem.append(cardElem);
					  cardElem.append(elem);
					  cardElem.append(containerElem);
					  containerElem.append(productServiceName);
					  //containerElem.append(p4);
					  containerElem.append(checkOut);
					  //p4.append(checkOut);
					  //p4.append(checkOut);
					}
					
					  //window.console.log(advCompanyAdsContainer);
					 
					  document.getElementsByClassName("modal-13")[0].style.display = "block";
				      
					  OpenDealer = 1;
				 }
				 
				 OpenDeal.onclick = function(){
					 exhibitEvents_id = 1;
					 OpenProviderDealsPortal();
				 }
				 
				 
				 actionInMotion = 1;
				 closeOSAED_TABLE = 5;
			     captionText2.innerHTML = "Didcy Act";				   
			   }
			  
			  closeOSAED_TABLE = 2;
			  
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
				  p4Contact[columnCount].append(actionButton);

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
			
			      //CheckProfileDevice650();
             //window.console.log(document.getElementById("adv-exhibition-platform"));
			 
		    if(exhibitionAdvShowCase == 1){
				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);
				  exhibitionAdvShowCase = 0;
			}
				  
			      footer_content_id = 23;
/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */		  
		   }else if($fetchID == 7){		
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
				  profession : "Ceo & Founder",
				  description : "Some text that describes me lorem ipsum ipsum lorem.",
				  username : "N/A",
				  email : "example@example.", //.substring(0, 13)+'...'
				  contact : "Contact",
				  readMore : "Read More",
				  publicTelOptional : "N/A",
				  whatAppNoOptional : "N/A",
				  facebookHandleOptional  : "N/A",
				  twitterHandleOptional : "N/A",
				  instagramHandleOptional : "N/A",
				  websiteDomainOptional : "N/A",
				  adInterest : "All",
				  adFee : "0.0000"
			  };
			  var readMoreText = document.getElementById("read-more-text");
			  actor_groupInfo.name = system_dirArr2[i];
			  assign(actor_groupInfo, actor_group, i, readMoreText);
			  //window.console.log(readMoreText.innerHTML+"\\\\");
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
			  button1.setAttribute("class", "button-1 button1");		
			  
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
			  elem.setAttribute("style", "cursor: pointer;z-index: 18");
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-exhibition-platform").append(columElem);
			  document.getElementById("adv-exhibition-platform").style.backgroundColor = "white";
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
			     captionText.innerHTML = "Didcy Act";
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
				 //var readMoreText = document.getElementById("read-more-text");
				 //var h2 = document.getElementsByClassName("name")[i];
				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 getImageName4ReadMore(7, system_dirArr[i], contactName, readMoreText, 0, i, system_dirArr2[i]);			
				 setTimeout(() => {
				 createRecordServices(column5, document.getElementById("container-c31"), system_dirArr[i],
				 _name);}, 100);
				 //readMoreText.style.position = "relative";
				 //readMoreText.style.width = "100%";
				 captionText2.innerHTML = "Didcy Act";
				 //column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 column5.setAttribute("style", "background-color: black");
				 profileNameCreateId = 1;
			  }
				 

			  button1.onclick = function(){
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 
				 getImageName4ReadMore(7, system_dirArr[i], contactName, readMoreText, 1, i, system_dirArr2[i], 
				 actor_groupInfo, i);//.name != "Jane Doe"?actor_groupInfo:null);				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 
			     captionText2.innerHTML = "Didcy Act";
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
			
			      //CheckProfileDevice650();
				  
			      footer_content_id = 23;
/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */
		  }else if($fetchID == 8){
				  exhibitionAdvShowCase = 2;
				  exhibitionAdvShowCase2 = 2;
				  exhibitionAdvShowCase3 = 2;
				  
/* 				  var advFilesContainer = document.getElementById("adv-files-showcase");
				  document.getElementById("container-c31").removeChild(advFilesContainer); */
				  if(fetch8 == 1 || fetch4 == 1 || fetch5 == 1 ){
 				    var advFileContainer = document.getElementById("adv-files-showcase");
				    document.getElementById("container-c31").removeChild(advFileContainer);
					fetch8 = 0; 
					fetch4 = 0;
					fetch5 = 0;
				  }
				  // if(fetch8 == 0){
					  // fetch8 = 
				  // }
 				  var advFileContainer = document.createElement("div");
				  advFileContainer.setAttribute("class", "row");
				  advFileContainer.setAttribute("id", "adv-files-showcase");
				  document.getElementById("container-c31").append(advFileContainer);fetch8 = 1; 
				if(exhibitionAdvShowCase3 == 1){
					exhibitionAdvShowCase3 = 5;
				}			
				if(document.getElementById("img01-1").value == '5'){
					var myModal_1 = document.getElementById("myModal-1");
					//document.getElementsByClassName("select-display-type-modal")[0].style.display = "none";
					myModal_1.style.display = "none";
					document.getElementsByClassName("modal")[0].style.display = "none";
						  var gagaRContainer2 = document.getElementById("gaga-react-container");
						  myModal_1.removeChild(gagaRContainer2);
						  document.getElementById("img01-1").value = '0';
						  exhibitionAdvShowCase3 = 1;
						  //caption1.classList.remove("gaga-relate-2");
				}		
				if(exhibitionAdvShowCase3 == 5){
					document.getElementById("img01-1").value = '5';
					exhibitionAdvShowCase3 = -1;
				}				
			//}else{
			 selectDisplayTypes.style.display = "none";
			 didcxWelcome.innerHTML = "Lets dig together";
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
				  profession : "[COMPANY]",
				  description : "Some text that describes me lorem ipsum ipsum lorem.",
				  username : "N/A",
				  email : "example@example.", //.substring(0, 13)+'...'
				  contact : "Contact",
				  readMore : "Read More",
				  publicTelOptional : "N/A",
				  whatAppNoOptional : "N/A",
				  facebookHandleOptional  : "N/A",
				  twitterHandleOptional : "N/A",
				  instagramHandleOptional : "N/A",
				  websiteDomainOptional : "N/A",
				  adInterest : "All",
				  adFee : "0.0000"
			  };
			  var readMoreText = document.getElementById("read-more-text");
			  actor_groupInfo.name = system_dirArr2[i];
			  assign(null, null, null, readMoreText, 1, 
			  actor_groupInfo, actor_group, i);
			  //window.console.log(readMoreText.innerHTML+"\\\\");
			  //window.console.log(system_dirArr2[i]);
			  var h2Text = document.createTextNode(actor_groupInfo.name);
			  var p1Text = document.createTextNode(actor_groupInfo.activity);
			  var p2Text = document.createTextNode(actor_groupInfo.description);
			  var p3Text = document.createTextNode(actor_groupInfo.businessEmail);
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

			  button1.setAttribute("id", "button1");
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
			  elem.setAttribute("style", "cursor: pointer;z-index: 18");
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase").append(columElem);
			  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
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
			     captionText.innerHTML = "Didcy Act";
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
				 //var readMoreText = document.getElementById("read-more-text");
				 //var h2 = document.getElementsByClassName("name")[i];
				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 //window.console.log(system_dirArr[i]);
				 getImageName4ReadMore(8, system_dirArr[i], contactName, readMoreText, 0, i, system_dirArr2[i]);			
				 setTimeout(() => {
				 createRecordServices(column5, document.getElementById("container-c31"), system_dirArr[i],
				 _name);}, 100);
				 //readMoreText.style.position = "relative";
				 //readMoreText.style.width = "100%";
				 captionText2.innerHTML = "Didcy Act";
				 //column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 column5.setAttribute("style", "background-color: black");
				 profileNameCreateId = 1;
			  }
				 

			  button1.onclick = function(){
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 
				 getImageName4ReadMore(8, system_dirArr[i], contactName, readMoreText, 1, i, system_dirArr2[i], 
				 actor_groupInfo, i);//.name != "Jane Doe"?actor_groupInfo:null);				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 
			     captionText2.innerHTML = "Didcy Act";
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
			      //CheckProfileDevice650();		  
			      footer_content_id = 23;
/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */		
		  }else if($fetchID == 9){
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
				  profession : "[COMPANY]",
				  description : "Some text that describes me lorem ipsum ipsum lorem.",
				  username : "N/A",
				  email : "example@example.", //.substring(0, 13)+'...'
				  contact : "Contact",
				  readMore : "Read More",
				  publicTelOptional : "N/A",
				  whatAppNoOptional : "N/A",
				  facebookHandleOptional  : "N/A",
				  twitterHandleOptional : "N/A",
				  instagramHandleOptional : "N/A",
				  websiteDomainOptional : "N/A",
				  adInterest : "All",
				  adFee : "0.0000"
			  };
			  var readMoreText = document.getElementById("read-more-text");
			  actor_groupInfo.name = system_dirArr2[i];
			  assign(null, null, null, readMoreText, 1, 
			  actor_groupInfo, actor_group, i);
			  //window.console.log(readMoreText.innerHTML+"\\\\");
			  //window.console.log(system_dirArr2[i]);
			  var h2Text = document.createTextNode(actor_groupInfo.name);
			  var p1Text = document.createTextNode(actor_groupInfo.activity);
			  var p2Text = document.createTextNode(actor_groupInfo.description);
			  var p3Text = document.createTextNode(actor_groupInfo.businessEmail);
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
			  columElem.setAttribute("class", "column-2");
			  p3.setAttribute("style", "color:white");

			  p4.setAttribute("id", "contact");
			  p4.setAttribute("class", "contact");
			  p4.setAttribute("style", "color:white");

			  button1.setAttribute("id", "button1");
			  button1.setAttribute("class", "button-1");		
			  
			  readMoreBtn.setAttribute("class", "button-2");		  
			  readMoreBtn.setAttribute("id", "button-2");		  
			  //---------------------------------------
			  
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
			  elem.setAttribute("style", "cursor: pointer;z-index: 18");
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase-companies-profiles").append(columElem);
			  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
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
			     captionText.innerHTML = "Didcy Act";
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
				 //var readMoreText = document.getElementById("read-more-text");
				 //var h2 = document.getElementsByClassName("name")[i];
				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 //window.console.log(system_dirArr[i]);
				 getImageName4ReadMore(8, system_dirArr[i], contactName, readMoreText, 0, i, system_dirArr2[i]);			
				 setTimeout(() => {
				 createRecordServices(column5, document.getElementById("container-c31"), system_dirArr[i],
				 _name);}, 100);
				 //readMoreText.style.position = "relative";
				 //readMoreText.style.width = "100%";
				 captionText2.innerHTML = "Didcy Act";
				 //column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 column5.setAttribute("style", "background-color: black");
				 profileNameCreateId = 1;
			  }
				 

			  button1.onclick = function(){
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 
				 getImageName4ReadMore(8, system_dirArr[i], contactName, readMoreText, 1, i, system_dirArr2[i], 
				 actor_groupInfo, i);//.name != "Jane Doe"?actor_groupInfo:null);				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 
			     captionText2.innerHTML = "Didcy Act";
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
			 
			 }
			     local = 1;
			      //CheckProfileDevice650();		  
			      footer_content_id = 23;
/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */		
		  }else if($fetchID == 10){	
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
				  profession : "Ceo & Founder",
				  description : "Some text that describes me lorem ipsum ipsum lorem.",
				  username : "N/A",
				  email : "example@example.", //.substring(0, 13)+'...'
				  contact : "Contact",
				  readMore : "Read More",
				  publicTelOptional : "N/A",
				  whatAppNoOptional : "N/A",
				  facebookHandleOptional  : "N/A",
				  twitterHandleOptional : "N/A",
				  instagramHandleOptional : "N/A",
				  websiteDomainOptional : "N/A",
				  adInterest : "All",
				  adFee : "0.0000"
			  };
			  var readMoreText = document.getElementById("read-more-text");
			  actor_groupInfo.name = system_dirArr2[i];
			  assign(actor_groupInfo, actor_group, i, readMoreText);
			  //window.console.log(readMoreText.innerHTML+"\\\\");
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

			  button1.setAttribute("id", "button1");
			  button1.setAttribute("class", "button-1 button1");		
			  
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
			  elem.setAttribute("style", "cursor: pointer;z-index: 18");
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase-actors-n-groups-profiles").append(columElem);
			  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
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
			     captionText.innerHTML = "Didcy Act";
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
				if(actGrpCount > 1){
					actGrpCount = 1;
					var contactNamex = document.getElementById("contactName");
					var column5x = document.getElementById("column-5");
					column5x.removeChild(contactNamex);	
					hidden.value = "0";
				}
				 actGrpCount++;
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 //modalImg2.style.position = "relative";
				 //modalImg2.style.width = "100%";
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 //var h2 = document.getElementsByClassName("name")[i];
				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 getImageName4ReadMore(4, system_dirArr[i], contactName, readMoreText, 0, i, system_dirArr2[i]);			
				 setTimeout(() => {
				 createRecordServices(column5, document.getElementById("container-c31"), system_dirArr[i],
				 _name);}, 100);
				 //readMoreText.style.position = "relative";
				 //readMoreText.style.width = "100%";
				 captionText2.innerHTML = "Didcy Act";
				 //column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 column5.setAttribute("style", "background-color: black");
				 profileNameCreateId = 1;
				 
				 if(closeOSAED_TABLE != 6){
				    closeOSAED_TABLE = 3;
			     }
			  }
				 

			  button1.onclick = function(){
				if(actGrpCount > 1){
					actGrpCount = 1;
					var contactNamex = document.getElementById("contactName");
					var column5x = document.getElementById("column-5");
					column5x.removeChild(contactNamex);	
					hidden.value = "0";
				}
				 actGrpCount++;
			     modal2.style.display = "block";
			 
			     modalImg2.src = system_dirArr[i];
				 
				 if(closeOSAED_TABLE != 6){
				    closeOSAED_TABLE = 3;
			     }
				 
				 let column5 = document.getElementById("column-5");
				 //var readMoreText = document.getElementById("read-more-text");
				 
				 getImageName4ReadMore(4, system_dirArr[i], contactName, readMoreText, 1, i, system_dirArr2[i], 
				 actor_groupInfo, i);//.name != "Jane Doe"?actor_groupInfo:null);				 
				 column5.insertBefore(contactName, readMoreText);contactNamer = 1;
				 
			     captionText2.innerHTML = "Didcy Act";
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
			
			      //CheckProfileDevice650();
				  local = 1;
				  
			      footer_content_id = 23;
/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */
		   }else if($fetchID == 11){

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
				  columElem.setAttribute("id", "column col-embed");
				  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
				  elem.setAttribute("src", system_dirArr[i]);
				  //elem.setAttribute("autoplay", "false");
				  elem.setAttribute("loop", "1");
				  elem.setAttribute("muted", "true");
				  elem.setAttribute("controls", "false");
				  elem.setAttribute("class", classID1);
				  elem.setAttribute("id", classID);
					  
				  //elem.setAttribute("style", "width:100%");
				  document.getElementById("adv-files-showcase-video-ads").append(columElem);
				  //document.getElementById("adv-files-showcase").style.backgroundColor = "white";
				  height += 300;
				  //document.getElementById("adv-files-showcase").value = height.toString();
				  //document.getElementById("column").append(elem);
                  
				  var company_name = document.createElement("h3");
				  const company_nameText = document.createTextNode(company_name_text[i]);//+" Company");
				  company_name.append(company_nameText);
				  company_name.setAttribute("style", "color: green;font-family: sans-serif, arial;font-size: 25px;");
				  
				  let gaga_share = document.createElement("button");
				  const gaga_shareText = document.createTextNode("Act");
				  gaga_share.setAttribute("class", "button-1 gaga-share");
				  gaga_share.setAttribute("id", "button-1");
				  
				  let column = document.getElementsByClassName("column");
				  for(var columnCount = 0;columnCount < column.length;columnCount++){
					  column[columnCount].append(elem);
					  column[columnCount].append(company_name);
					  column[columnCount].append(gaga_share);

/* 					  elem.addEventListener("keypress", keypressed, false);
					  elem.addEventListener("keyup", keyup, false);
					  elem.onmousedown = function(){}
					  elem.onclick = function(){} 	 */				  

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

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
				 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
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

                 var video_elem = document.createElement("video");
                 video_elem.setAttribute("src", system_dirArr[i]);
                 video_elem.setAttribute("class", "modal-content-20");
                 video_elem.setAttribute("id", "img01-20");
				 video_elem.setAttribute("controls", "true");

			     modal.style.display = "block";

				 modal.insertBefore(video_elem, modalImg);

                 videoEl = video_elem;

                 modalImg.src = "";
                 modalImg.style.display = "none";
			     captionText.innerHTML = "Didcy Act";
					
			     videoElem = 1;

				 modalImg.value = "20";				  
			   }

 function keypressed(event){
     if(event.keyCode == 97){
		 window.console.log("%%%%");
        elem.onmousedown = function(){
            elem.pause();
            videoMarked = null;
            marked = 0;
            videoMarked = document.createElement("div");
            var vidMarked = "event-"+"-00099";//didcx_random_number_generator(0, 337474732626281).toString();
			var vidMarkedId = "event";
            videoMarked.setAttribute("class", vidMarked);
            videoMarked.setAttribute("id", vidMarkedId);
            videoMarked.setAttribute("style", 
			"position: relative;top: 1.6%;width:300px;height:200px;background:blue;");
            
            document.getElementById("adv-files-showcase").append(videoMarked);
            
            marked = 1;
       if(marked == 1){
			videoMarked.onclick = function(){
				var vis = document.getElementById("event");
			document.getElementById("adv-files-showcase").removeChild(videoMarked);
            videoMarked = null;
            marked = 0;
		    elem.onmousedown = function(){}
		    elem.onclick = function(){}
        }    
        }
       }
    }

 }
 
  function keyup(event){
   elem.onmousedown = function(){elem.pause();}
   elem.onclick = function(){elem.pause();}
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
				  //window.console.log(document.getElementById("adv-files-showcase"));

				  gaga_share.append(gaga_shareText);
				  //window.console.log(gaga_share);
				  
				  //let gagaShare = document.getElementsByClassName("gaga-share")[gagaCounter];
				  gaga_share.onclick = function(){
					  
					  const GaGaShare = ["Share with Facebook", "Share with Twitter", "Share with Instagram", 
					  "Share with Youtube", "Share with Didcy", "Share with Pinterest"];
					  const GaGaShareBG = ["#3B5998", "#55ACEE", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID = ["gaga-share-fb fa fa-facebook fa-fw", "gaga-share-tw fa fa-twitter fa-fw", "gaga-share-ins fa fa-facebook fa-fw", 
					  "gaga-share-ybe fa fa-twitter fa-fw", "gaga-share-gaga fa fa-twitter fa-fw", "gaga-share-pinterest fa fa-facebook fa-fw"];

					  const GaGaShare2 = ["Didcy Share", "Didcy Decide", "Definition", 
					  "Approved by", "Date & Time", "Jurisdiction"];
					  const GaGaShareBG2 = ["blue", "rgba(125, 25, 225, 1)", "#f993ea", "gray", "rgb(33, 54, 123)", "#3affe3"];
					  const GaGaShareID2 = ["gaga-share", "gaga-decide", "gaga-definition", 
					  "gaga-approved-by", "gaga-date-time", "jurisdiction"];

					  for(var gagaCount = 0;gagaCount < GaGaShare2.length;gagaCount++){
						  var gagaShareWithDoc = document.createElement("button");
						  var gagaShareWithDocText = document.createTextNode(GaGaShare2[gagaCount]);
						  const classID = "button-1 " + GaGaShareID2[gagaCount];
						  const GaGaBG2 = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
						  gagaShareWithDoc.setAttribute("class", GaGaShareID2);
						  gagaShareWithDoc.setAttribute("id", "button-1");
						  gagaShareWithDoc.setAttribute("style", GaGaBG2);
						  gagaShareWithDoc.append(gagaShareWithDocText);
						  modal.insertBefore(gagaShareWithDoc, captionText);
						  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
						  if(gagaCount == 0){
							  //var img_015x = document.getElementById("img01-15");
							  //modalImg.value = "15";
							  gagaShareClicks.onclick = function(){
							  //var elem = system_dirArr[i];
							  //return window.alert(elem);
							      //window.console.log("dkdkd-fr");
                                   
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	

								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  
								  for(var gagaCount = 0;gagaCount < GaGaShare.length;gagaCount++){
									  var gagaShareWithDoc = document.createElement("button");
									  var gagaShareWithDocText = document.createTextNode(GaGaShare[gagaCount]);
									  const classID = "button-12 " + GaGaShareID[gagaCount];
									  const GaGaBG = "cursor: pointer;padding: 5px;font-size: 17px;display:  block;margin-bottom: 2%;width: 50%;position: relative;left: 25%;background-color: " + GaGaShareBG[gagaCount];
									  gagaShareWithDoc.setAttribute("class", GaGaShareID);
									  gagaShareWithDoc.setAttribute("id", "button-1");
									  gagaShareWithDoc.setAttribute("style", GaGaBG);
									  gagaShareWithDoc.append(gagaShareWithDocText);					  							  
									  modal_015.insertBefore(gagaShareWithDoc, caption15);
									  var gagaShareClicks = gagaShareWithDoc; //document.getElementsByClassName(GaGaShareID[gagaCount])[0];
									  empty[gagaCount] = gagaShareClicks;
/* 									  gagaShareClicks.onclick = function(){
										  var elem = system_dirArr[i];
										  return window.alert(elem);										  
									  } */		
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }									  
								  }

								  modal_015.style.display = "block";
								  img_015.style.display = "none";
								  caption15.innerHTML = "Didcy Share";											  						  


								  modalImg.value = '10';
								  if(modalImg.value == '10'){
									  modal12.style.zIndex = "9";
									  empty[0].onclick = function(){
										  //modal_015.style.display = "none";
										  //modal_015.value = "15";
										  showMediaAccount(0, 2);
									  }
									  empty[1].onclick = function(){
										  showMediaAccount(1);
									  }
									  empty[2].onclick = function(){
										  showMediaAccount(2);
									  }
									  empty[3].onclick = function(){
										  showMediaAccount(3);
									  }
									  empty[4].onclick = function(){
										  showMediaAccount(4);
									  }
									  empty[5].onclick = function(){
										  showMediaAccount(5);
									  }
								  }	
							  
/* 							  modal_015.style.display = "block";
							  img_015.style.display = "none";
							  img_015.value = "15";
							  caption15.innerHTML = "GaGa Share"; */
						   }
						 }
						  else if(gagaCount == 1){
							  gagaShareClicks.style.display = "none";
							  gagaShareClicks.onclick = function(){ServicesNotAvailable('Decide Services', 
								  'Decide Service report is at the back side. Please tab/put the mouse on this box to view the report.');}
						  }
						  else if(gagaCount == 2){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 1, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(describeText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 19px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "GaGa Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 3){
							  gagaShareClicks.onclick = function(){
								  describeProductService(drim, company_name_text[i], 3, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(approvedByText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 4){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 4, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  var period = 
								  "Product/Service Commencement Date : " +periodText[0]+"<br>"+
								  "Product/Service Elapsing Date : " +periodText[1]+"<br>"+
								  "Product/Service Commencement Time : " +periodText[2]+"<br>"+
								  "Product/Service Elapsing Time : " +periodText[3]+"<br>"+
								  "Product/Service Shipmet Date : " +periodText[4]+"<br>"+
								  "Product/Service Shipmet Time : " +periodText[5];
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(period);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 20px;color: white;text-align: center");
								  describe.append(describeTxt);
								  describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
						  else if(gagaCount == 5){
							  gagaShareClicks.onclick = function(){
								  //window.alert("yyyy");
								  describeProductService(drim, company_name_text[i], 5, system_dirArr[i]);
								 setTimeout(() => {
	                              if(modal_15_value == 1){
									modal_015 = document.createElement("div");
									close15 = document.createElement("span");
									img_015 = document.createElement("img");
									caption15 = document.createElement("div");

									const caption15Text = document.createTextNode("Didcy Share");
									//const close15Text = document.createTextNode("x");

									modal_015.setAttribute("class", "modal-15 w3-modal-content w3-animate-bottom");	
									modal_015.setAttribute("id", "myModal-15");
									modal_015.setAttribute("style", "display: none");
									
									close15.setAttribute("class", "close-15");	
									close15.setAttribute("id", "close-15");	
									
									img_015.setAttribute("class", "modal-content-15");	
									img_015.setAttribute("id", "img01-15");	
									
									caption15.setAttribute("class", "caption-15");	
									caption15.setAttribute("id", "caption-15");
									
									caption15.append(caption15Text);
									//close15x.append(close15Text);	
									close15.innerHTML = "&times;";									  
                                    
									modal_015.append(close15);
									modal_015.append(img_015);
									modal_015.append(caption15);
									
									res = document.getElementById("container-c31");
									res.append(modal_015);
									
									//window.console.log(modal_015);
									//window.console.log(res);
									
									modal_15_value = 0;
									  close15.onclick = function() {
										const GaGaShareID = ["gaga-share-fb", "gaga-share-tw", "gaga-share-ins", "gaga-share-ybe", 
										"gaga-share-gaga", "gaga-share-pinterest"];
										const shareLength = GaGaShareID.length;
										//var button1 = document.getElementsByClassName("button-12");

										//for(var gagaCount = 0;gagaCount < shareLength;gagaCount++){
											//var button1 = document.getElementsByClassName("button-12");
											//modal_015 = document.getElementById("myModal-15");
											modal_015 = document.getElementsByClassName("modal-15")[0];
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }	
								  }
								  modal_015 = document.getElementById("myModal-15");
								  img_015 = document.getElementById("img01-15");
							 	  caption15 = document.getElementById("caption-15");
								  close15 = document.getElementById("close-15");
								  //window.console.log(describeText);
								  
								  var describe = document.createElement("div");
								  const describeTxt = document.createTextNode(jurisdictionText);
								  describe.setAttribute("class", "describe modal-content-15");
								  describe.setAttribute("id", "describe");
								  describe.setAttribute("style", "font-family: sans-serif, arial; font-size: 30px;color: white;text-align: center");
								  describe.append(describeTxt);
								  //describe.innerHTML = period;
								  modal_015.insertBefore(describe, caption15);
								  caption15.innerHTML = "Didcy Express";
								  
								  modal_015.style.display = "block";
								  
										  close15.onclick = function() {
											modal_015 = document.getElementById("myModal-15");
											res = document.getElementById("container-c31");
											res.removeChild(modal_015);//.removeChild(gagaShareWithDoc);
										    modal_15_value = 1;
										//}										
								       }							  
							  }, 2000);
						    }
						  }
					  }

					  
					  modal.style.display = "block";
					  
					  modalImg.style.display = "none";
					  captionText.innerHTML = "Didcy Action";	
					  modalImg.value = '10';	
					  gagaCounter++;
				 }	 //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
		    }	
			    local = 1;
				
			    footer_content_id = 22;
/* 		        if($footerCheck2 != 1){
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

                 $footerCheck2 = 1;
                 $footerCheck = 1;
               } */					
		   }else if($fetchID == 12){
			   if(drim != null){

		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
			  const classID = "eventVid-"+rand.toString();
			  //var elem = document.createElement("video");
			  //window.alert(system_dirArr);
			  var columElem = document.createElement("div");
			  var elem = document.createElement("img");
			  columElem.setAttribute("class", "column");
			  /* columElem.setAttribute("style", "background-color:blue"); */
			  columElem.setAttribute("id", "column");
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			 /* elem.setAttribute("autoplay", "false");
			  elem.setAttribute("loop", "1");
			  elem.setAttribute("muted", "true");
			  elem.setAttribute("controls", "false");*/
			  elem.setAttribute("width", "100%");
			  elem.setAttribute("height", "300px");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);
			  //elem.setAttribute("style", "width:100%");
			  document.getElementById("adv-files-showcase-static-ads").append(columElem);
			  ////document.getElementById("adv-files-showcase").style.backgroundColor = "white";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("adv-files-showcase").value = height.toString();			  
			  
			  //document.getElementById("column").append(elem);
			  
			  let column = document.getElementsByClassName("column");
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
			  }

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

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }
			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
			 }	

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */
				  local = 1;

			  }else{
		     for(let i = 0;i < system_dirArr.length;i++){
			  var rand = didcx_random_number_generator(0, 228828281919191);
			  const classID1 = "eventVid-"+rand.toString()+" vid-3939302";
			  const classID = "eventVid-"+rand.toString();
			  //var elem = document.createElement("video");
			  //window.alert(system_dirArr);
			  var columElem = document.createElement("div");
			  var elem = document.createElement("img");
			  columElem.setAttribute("class", "column");
			  /* columElem.setAttribute("style", "background-color:blue"); */
			  columElem.setAttribute("id", "column");
			  //columElem.setAttribute("style", "float:left;padding:10px;width:25%;");
			  elem.setAttribute("src", system_dirArr[i]);
			  /*elem.setAttribute("autoplay", "false");
			  elem.setAttribute("loop", "1");
			  elem.setAttribute("muted", "true");
			  elem.setAttribute("controls", "false");
			  elem.setAttribute("class", classID1);
			  elem.setAttribute("id", classID);*/
			  elem.setAttribute("width", "100%");
			  elem.setAttribute("height", "300px");
			  document.getElementById("adv-files-showcase").append(columElem);
			  ////document.getElementById("adv-files-showcase").style.backgroundColor = "white";
			  //document.getElementById("column").append(elem);
			  //columElem.style.backgroundColor = "white";			  
			  height += 300;
			  //document.getElementById("adv-files-showcase").value = height.toString();			  
			  
			  //document.getElementById("column").append(elem);
			  
			  let column = document.getElementsByClassName("column");
			  for(var columnCount = 0;columnCount < column.length;columnCount++){
				  column[columnCount].append(elem);
			  }

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

			     modalImg.src = system_dirArr[i];

			     captionText.innerHTML = "Didcy Act";

				 modalImg.value = "19";				  
			   }

			  
			  document.getElementById("uploads").value = "";
			  storeAllCreatedIds[i] = classID;
			  //window.console.log(columElem);
			  //window.console.log(document.getElementById("adv-files-showcase"));
			 }	

				  // Get the modal
			     var modal = document.getElementById("myModal-1");

			     // Get the image and insert it inside the modal - use its "alt" text as a caption
					  //var img = document.getElementById("");
				 var modalImg = document.getElementById("img01-1");
				 var captionText = document.getElementById("caption-1");
				 
				 modalImg.value = height.toString();

/* 				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;	 */

			}
		   //}
/* 		   }
			      footer_content_id = 21; */			   
		   //}
		       
          //}
		          local = 1;
			      footer_content_id = 21;	
                  //return footerMe($footerCheck2, $footerCheck);	
		 }

		  else{
		      system_dirArr = null;
		  }
		 }
		}	 
		  return;
		  
		}
	 },
	 error: function(){}
   });
 };
 
 function CheckProfileDevice650(){
			  deviceProfileCheck = window.matchMedia('(max-width: 650px)');
			  
			  window.addEventListener("resize",
				function(){
					//checkDeviceWidth4Profile(deviceProfileCheck, null, actor_groupInfo, actor_group, i);
					checkDeviceWidth4Profile(deviceProfileCheck, null, null, null, 0);
				}
			  );
 }
 
 function footerMe(footerCheck2 = 0, footerCheck = 0){
		      //while(footer_content_id != 20 || footer_content_id != 21 || footer_content_id != 22){		
		        if(footerCheck2 != 1){
				  if(footerContentResetId == 1){
					 var footer = document.getElementById("footer-x");
                     //let footerContainer = document.getElementById("container-c31");
                     document.body.removeChild(footer);					 
				  }
					 var footer = document.createElement("div");
					 var footerText = "";
					 if(footer_content_id == 20){
					     footerText = document.createTextNode("No more ads");
						 footerContentResetId = 1;
					 }else if(footer_content_id == 21){
                         footerText = document.createTextNode("No more ads");
						 footerContentResetId = 1;
					 }else if(footer_content_id == 22){
						 footerText = document.createTextNode("No more ads");
						 footerContentResetId = 1;
					 }else if(footer_content_id == 23){
						 footerText = document.createTextNode("No more profiles");
						 footerContentResetId = 1;
					 }else{
						 footerText = "";
						 footer = null;
						 return footerMe();
					 }
					 footer.setAttribute("class", "footer-x signup-header");
					 footer.setAttribute("id", "footer-x");
					 footer.setAttribute("style", "font-size:  30px;text-align: center;color: white;background-color: white;width: 100%;left: 0;right: 0;bottom: 0;position: relative;");
				 
				 
				 
				 footer.append(footerText);
				 document.body.append(footer);	
 				 device = window.matchMedia('(max-height: 1366px)');
				 checkDeviceHeight(device, 1366);	
				 device = window.matchMedia('(max-height: 1076px)');
				 checkDeviceHeight(device, 1076);
				 device = window.matchMedia('(max-height: 625px)');
				 checkDeviceHeight(device, 625);	

                 $footerCheck2 = footerCheck2;
                 $footerCheck = footerCheck;
               }
              //}			 
 }
 
 

 
   



