"use strict";

var modalNotificatorLink = document.getElementsByClassName("modal-notificator-link")[0];
var modalNotificator = document.getElementsByClassName("modal-notificator")[0];
var spanNotificator = document.getElementsByClassName("close-notificator")[0];
var spanNotificatorLink = document.getElementsByClassName("close-notificator-link")[0];
var attachFileID = 0, numberOfReadFiles = 0, numberOfUnReadFiles = 0;
var mediaSet = 0;

function badgeClick(){
		var form = new FormData();
		if(window.location.href.slice(36) != ""){
		   form.append("drim", window.location.href.slice(36));
		   form.append("click-state", 0);
		}else{
		   form.append("click-state", 1);
		}
		form.append("click", 1);
		$.ajax({
			type: "POST",
			url: "adv-click.php",
			contentType: false,
			data: form,
			processData: false,
			cache: false,
			success: function(result){
				//window.console.log(result);
				var data_returned = JSON.parse(result);
				if(data_returned.state == 0){}
				if(data_returned.state == 1){}
				if(data_returned.state == 2){
					document.getElementsByClassName("badge")[0].innerHTML = "";
					document.getElementsByClassName("badge")[1].innerHTML = "";
					document.getElementsByClassName("badge")[0].style.display = "none";
					document.getElementsByClassName("badge")[1].style.display = "none";
				}
			},
			error: function(){}
		});	
}

function Notificator(){
   badgeClick();
   modalNotificator.style.height = "100%";
}

document.getElementsByClassName("notification")[0].addEventListener("click", Notificator);
document.getElementsByClassName("notification")[1].addEventListener("click", Notificator);

function ClearNotificator(){
   var noticeLinks = document.querySelectorAll("a.notification-links");
   for(var noticeCount = 0;noticeCount < noticeLinks.length;noticeCount++){
	   document.getElementById("modal-content-notificator").removeChild(noticeLinks[noticeCount]);
   } 
}

spanNotificator.onclick = function() { 
  modalNotificator.style.height = "0%";
}

function NotificationLink(){
   if(attachFileID == 1){
	  document.getElementById("notice-link").pause();
	  attachFileID = 0;  
   }
   var noticeLink = null;
   if(mediaSet == 0){
	 noticeLink = document.getElementById("notice-link");
   }else if(mediaSet == 1){  
	 noticeLink = document.getElementById("notice-link");
	 document.getElementById("video-container").removeChild(noticeLink);
	 
	 noticeLink = document.getElementById("video-controls");
	 document.getElementById("video-container").removeChild(noticeLink);
	 
	 noticeLink = document.getElementById("video-container");
   }else{
	 noticeLink = document.getElementById("notice-link");
	 document.getElementById("modal-content-notificator-link").removeChild(noticeLink);
	 noticeLink = document.getElementById("ap_container");
   }
   document.getElementById("modal-content-notificator-link").removeChild(noticeLink);
   modalNotificatorLink.style.display = "none";  
   mediaSet = 0;   
}

spanNotificatorLink.onclick = function() { 
   NotificationLink();
}

function ClearAllNotes(){
	ClearNotificator();
}

function VideoControlRegion(video_elem){
				 //-------------------custom controls------------
				 
				 var videoControls = document.createElement("div");
				 videoControls.setAttribute("class", "video-container");
				 videoControls.setAttribute("id", "video-container");	
				 
				 var videoControlsContainer = document.createElement("div");
				 videoControlsContainer.setAttribute("class", "video-controls video-controls-notify");
				 videoControlsContainer.setAttribute("id", "video-controls");
				 
				 
				 var playPause = document.createElement("button");
				 const playPauseText = document.createTextNode("Play");
				 playPause.setAttribute("class", "play");
				 playPause.setAttribute("id", "play-pause");
				 playPause.setAttribute("class", "play-pause play-pause-notify");
				 playPause.setAttribute("type", "button");
				 playPause.append(playPauseText);
				 
				 var range = document.createElement("input");
				 range.setAttribute("value", "0");
				 range.setAttribute("type", "range");
				 range.setAttribute("id", "seek-bar");
				 range.setAttribute("class", "seek-bar seek-bar-notify");
				 			 
				 var mute = document.createElement("button");
				 const muteText = document.createTextNode("Mute");
				 mute.setAttribute("class", "mute mute-notify");
				 mute.setAttribute("id", "mute");
				 mute.setAttribute("type", "button");
				 mute.setAttribute("title", "Mute");
				 mute.append(muteText);				 

				 var volume_range = document.createElement("input");
				 volume_range.setAttribute("value", "1");
				 volume_range.setAttribute("type", "range");
				 volume_range.setAttribute("id", "volume-bar");
				 volume_range.setAttribute("class", "volume-bar volume-bar-notify");
				 volume_range.setAttribute("min", "0");
				 volume_range.setAttribute("max", "1");
				 volume_range.setAttribute("step", "0.1");
				 
				 var fullscreen = document.createElement("button");
				 const fullscreenText = document.createTextNode("Full-Screen");
				 fullscreen.setAttribute("class", "full-screen full-screen-notify");
				 fullscreen.setAttribute("id", "full-screen");
				 fullscreen.setAttribute("type", "button");
				 fullscreen.append(fullscreenText);		

                 videoControlsContainer.append(playPause);				 
                 videoControlsContainer.append(range);				 
                 videoControlsContainer.append(mute);				 
                 videoControlsContainer.append(volume_range);				 
                 videoControlsContainer.append(fullscreen);		

				 videoControls.append(video_elem);
				 videoControls.append(videoControlsContainer);

				 document.getElementById("modal-content-notificator-link")
				 .append(videoControls);
				 
				 loadVideoControls(1);
}

function AudioControls(video_elem){
				 document.getElementById("modal-content-notificator-link")
				 .append(video_elem);
				 
				 AudiPlay(1);
}

function ImageAttach(image_file = null){
				 document.getElementById("modal-content-notificator-link")
				 .append(image_file);	
}

function FetchNotifications(){
       var reloaderID = window.location.href;

    var form = new FormData();
	if(reloaderID.slice(36) != ""){
		form.append("notification", 0);
		form.append("drim", reloaderID.slice(36));
	}else{
		form.append("notification", 2);
	}
		$.ajax({
			type: "POST",
			url: "adv-notification.php",
			contentType: false,
			data: form,
			processData: false,
			cache: false,
			success: function(result){
				//window.console.log(result);
				var $senderIndex = 0;
				//window.console.log(reloaderID.slice(36));
				var data_returned = JSON.parse(result);
				//window.console.log(data_returned.sender);
				if(data_returned.state == 0){
					return window.console.log("Table not exists");
				}

				if(data_returned.state == 1){
					 if(numberOfReadFiles != data_returned.numberOfReadFiles){
						ClearAllNotes();
						for(var count = 0;count < data_returned.readfilename.length;count++){
							var notificationLinks = document.createElement("a");
							var filename = data_returned.readfilename[count.toString()];
							var fileId = data_returned.readfileId[count.toString()];
							var fileType = data_returned.file_type_2[count];
							var audioAdImage = data_returned.audioAdImage[count];
							
							notificationLinks.setAttribute("class", "notification-links");
							notificationLinks.setAttribute("id", "notification-links");
							notificationLinks.setAttribute("style", "opacity:1");
							notificationLinks.setAttribute("title", fileId);
							notificationLinks.setAttribute("href", filename);
							//notificationLinks.setAttribute("", "");
							document.getElementById("modal-content-notificator").append(notificationLinks);
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							//window.console.log(data_returned.sender);
							//window.alert(data_returned.sender);
							if(typeof data_returned.sender == typeof ""){
							    notificationLinks.innerHTML = "<b>"+data_returned.sender+"</b>, shared this "+
							fileId;
							}else{
							    notificationLinks.innerHTML = "<b>"+data_returned.sender[count.toString()]+
								"</b>, shared this "+
							fileId;								
							}
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							
							function notificator(notificationLinks, filename, fileId, fileType, 
							audioAdImage){
								notificationLinks.onclick = function(){
								   var attachFile = null;
                                   if(fileType == 0){
									   attachFile = document.createElement("img");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");		
									   attachFileID = 0;
									   ImageAttach(attachFile);
								   }else if(fileType == 1){
									   attachFile = document.createElement("video");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");									   
									   //attachFile.setAttribute("controls", "true");	
									   VideoControlRegion(attachFile);
									   attachFileID = 1;
									   mediaSet = 1;
								   }else{
									   attachFile = document.createElement("audio");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "audiplay notice-link");									   
									   attachFile.setAttribute("controls", "true");		
									   attachFile.setAttribute("style", 
									   "background-image: url('"+audioAdImage+"')");		
									   attachFileID = 1;
									   mediaSet = 2;
									   AudioControls(attachFile);
								   }
								    
								    document.getElementById("myModal-notificator-link")
								    .style.zIndex = "25";
									document.getElementById("notice-link-header").innerHTML = fileId;
									document.getElementById("myModal-notificator-link")
									.style.display = "block";
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType, audioAdImage);
						}
						numberOfReadFiles = data_returned.numberOfReadFiles;
					 }
				}
				if(data_returned.state == 2){
				  if(data_returned.click != 1){
					if(data_returned.notice > 99){
					 document.getElementsByClassName("badge")[0].innerHTML = "99+";//data_returned.notice;
					 document.getElementsByClassName("badge")[1].innerHTML = "99+";//data_returned.notice;
					}else{
					 document.getElementsByClassName("badge")[0].innerHTML = data_returned.notice;
					 document.getElementsByClassName("badge")[1].innerHTML = data_returned.notice;						
					}
					document.getElementsByClassName("badge")[0].style.display = "block";
					document.getElementsByClassName("badge")[1].style.display = "block";
					if(data_returned.notice > 0){
					  if(numberOfUnReadFiles != data_returned.numberOfUnReadFiles){
						ClearAllNotes();
						for(var count = 0;count < data_returned.filename.length;count++){
							var notificationLinks = document.createElement("a");
							var filename = data_returned.filename[count.toString()];
							var fileId = data_returned.fileId[count.toString()];
							var fileType = data_returned.file_type_1[count];
							var audioAdImage = data_returned.audioAdImage[count];
							
							notificationLinks.setAttribute("class", "notification-links");
							notificationLinks.setAttribute("id", "notification-links");
							notificationLinks.setAttribute("title", fileId);
							notificationLinks.setAttribute("href", filename);
							//notificationLinks.setAttribute("", "");
							document.getElementById("modal-content-notificator").append(notificationLinks);
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							
					        if(typeof data_returned.sender == typeof ""){
							    notificationLinks.innerHTML = "<b>"+data_returned.sender+"</b>, shared this "+
							fileId;
							}else{
							    notificationLinks.innerHTML = "<b>"+data_returned.sender[count.toString()]+
								"</b>, shared this "+
							fileId;								
							}
							function notificator(notificationLinks, filename, fileId, fileType, audioAdImage){
								notificationLinks.onclick = function(){
                                   var form = new FormData();
								   if(reloaderID.slice(36) != ""){
								     form.append("notification", "1");
								     form.append("drim", reloaderID.slice(36));
								   }else{
									 form.append("notification", "3");
								   }
								   form.append("fileId", fileId);
								   $.ajax({
									  type: "POST",
									  url: "adv-notification.php",
									  data: form,
									  processData: false,
									  cache: false,
									  contentType: false,
									  success: function(result){
										 if(data_returned.state == 0){}
										 if(data_returned.state == 1){}
										 if(data_returned.state == 2){
											notificationLinks.style.opacity = "1";
										    var attachFile = null;
										    if(fileType == 0){
											   attachFile = document.createElement("img");
											   attachFile.setAttribute("src", filename);
											   attachFile.setAttribute("id", "notice-link");	
											   ImageAttach(attachFile);							   
											   attachFile.setAttribute("class", "notice-link");
											   attachFileID = 0;
											   mediaSet = 0;
										    }else if(fileType == 1){
											   attachFile = document.createElement("video");
											   attachFile.setAttribute("src", filename);		
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "notice-link");			
											   //attachFile.setAttribute("controls", "true");
											   VideoControlRegion(attachFile);
											   attachFileID = 1;
											   mediaSet = 1;
										    }else{
											   attachFile = document.createElement("audio");
											   attachFile.setAttribute("src", filename);
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "audiplay notice-link");									   
											   attachFile.setAttribute("controls", "true");		
											   attachFile.setAttribute("style", 
											   "background-image: url('"+audioAdImage+"')");
											   attachFileID = 1;
											   mediaSet = 2;
											   AudioControls(attachFile);
										    }
											
											document.getElementById("myModal-notificator-link")
											.style.zIndex = "25";


											document.getElementById("notice-link-header").innerHTML = fileId;
											document.getElementById("myModal-notificator-link")
											.style.display = "block";											
										 }
										 if(data_returned.state == 3){}
									  },
									  error: function(){
										  
									  },
								   });
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType, audioAdImage);
						}
						numberOfUnReadFiles = data_returned.numberOfUnReadFiles;
					  }
					  if(numberOfReadFiles != data_returned.numberOfReadFiles){
						$senderIndex = data_returned.filename.length;
						for(var count = 0;count < data_returned.readfilename.length;count++){
							var notificationLinks = document.createElement("a");
							var filename = data_returned.readfilename[count.toString()];
							var fileId = data_returned.readfileId[count.toString()];
							var fileType = data_returned.file_type_2[count];
							var audioAdImage = data_returned.audioAdImage[count];
							
							notificationLinks.setAttribute("class", "notification-links");
							notificationLinks.setAttribute("id", "notification-links");
							notificationLinks.setAttribute("style", "opacity:1");
							notificationLinks.setAttribute("title", fileId);
							notificationLinks.setAttribute("href", filename);
							//notificationLinks.setAttribute("", "");
							document.getElementById("modal-content-notificator").append(notificationLinks);
							
					        if(typeof data_returned.sender == typeof ""){
							    notificationLinks.innerHTML = "<b>"+data_returned.sender+"</b>, shared this "+
							fileId;
							}else{
							    notificationLinks.innerHTML = "<b>"+data_returned.sender[$senderIndex.toString()]+
								"</b>, shared this "+
							fileId;								
							}
							
							$senderIndex++;
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							
							function notificator(notificationLinks, filename, fileId, fileType, audioAdImage){
								notificationLinks.onclick = function(){
								   var attachFile = null;
                                   if(fileType == 0){
									   attachFile = document.createElement("img");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");
									   attachFileID = 0;
									   ImageAttach(attachFile);
								   }else if(fileType == 1){
									   attachFile = document.createElement("video");
									   attachFile.setAttribute("src", filename);									   
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");			
									   //attachFile.setAttribute("controls", "true");	
									   VideoControlRegion(attachFile);
									   attachFileID = 1;
									   mediaSet = 1;
								   }else{
									   attachFile = document.createElement("audio");
									   attachFile.setAttribute("src", filename);									   
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "audiplay notice-link");			
									   attachFile.setAttribute("controls", "true");
									   attachFile.setAttribute("style", 
									   "background-image: url('"+audioAdImage+"')");									   
									   attachFileID = 1;
									   mediaSet = 2;
									   AudioControls(attachFile);
								   }
								    
									document.getElementById("myModal-notificator-link")
									.style.zIndex = "25";


									document.getElementById("notice-link-header").innerHTML = fileId;
									document.getElementById("myModal-notificator-link")
									.style.display = "block";
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType, audioAdImage);
						}
						numberOfReadFiles = data_returned.numberOfReadFiles;
					  }
					}
				  }else{
					if(data_returned.notice > 0){
					  if(numberOfUnReadFiles != data_returned.numberOfUnReadFiles){
						ClearAllNotes();
						for(var count = 0;count < data_returned.filename.length;count++){
							var notificationLinks = document.createElement("a");
							var filename = data_returned.filename[count.toString()];
							var fileId = data_returned.fileId[count.toString()];
							var fileType = data_returned.file_type_1[count.toString()];
							var audioAdImage = data_returned.audioAdImage[count];
							
							notificationLinks.setAttribute("class", "notification-links");
							notificationLinks.setAttribute("id", "notification-links");
							notificationLinks.setAttribute("title", fileId);
							notificationLinks.setAttribute("href", filename);
							//notificationLinks.setAttribute("", "");
							document.getElementById("modal-content-notificator").append(notificationLinks);
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							
					        if(typeof data_returned.sender == typeof ""){
							    notificationLinks.innerHTML = "<b>"+data_returned.sender+"</b>, shared this "+
							fileId;
							}else{
							    notificationLinks.innerHTML = "<b>"+data_returned.sender[count.toString()]+
								"</b>, shared this "+
							fileId;								
							}
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							
							function notificator(notificationLinks, filename, fileId, fileType, audioAdImage){
								notificationLinks.onclick = function(){
                                   var form = new FormData();
								   if(reloaderID.slice(36) != ""){
								     form.append("notification", "1");
								     form.append("drim", reloaderID.slice(36));
								   }else{
									 form.append("notification", "3");
								   }
								   form.append("fileId", fileId);
								   $.ajax({
									  type: "POST",
									  url: "adv-notification.php",
									  data: form,
									  processData: false,
									  cache: false,
									  contentType: false,
									  success: function(result){
										 if(data_returned.state == 0){}
										 else if(data_returned.state == 1){}
										 else if(data_returned.state == 2){
											notificationLinks.style.opacity = "1";
										    var attachFile = null;
										    if(fileType == 0){
											   attachFile = document.createElement("img");
											   attachFile.setAttribute("src", filename);
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "notice-link");
											   attachFileID = 0;
											   ImageAttach(attachFile);
										    }else if(fileType == 1){
											   attachFile = document.createElement("video");
											   attachFile.setAttribute("src", filename);	
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "notice-link");	
											   //attachFile.setAttribute("controls", "true");	
											   VideoControlRegion(attachFile);
											   attachFileID = 1;
										    }else{
											   attachFile = document.createElement("audio");
											   attachFile.setAttribute("src", filename);									   
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "audiplay notice-link");			
											   attachFile.setAttribute("controls", "true");	
											   attachFile.setAttribute("style", 
											   "background-image: url('"+audioAdImage+"')");											   
											   attachFileID = 1;
											   mediaSet = 2;
											   AudioControls(attachFile);
										    }									
											
											document.getElementById("myModal-notificator-link")
											.style.zIndex = "25";

											document.getElementById("notice-link-header").innerHTML = fileId;
											document.getElementById("myModal-notificator-link")
											.style.display = "block";											
										 }
										 else if(data_returned.state == 3){}
									  },
									  error: function(){
										  
									  },
								   });
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType, audioAdImage);
						}
						numberOfUnReadFiles = data_returned.numberOfUnReadFiles;
					  }
					  if(numberOfReadFiles != data_returned.numberOfReadFiles){
						$senderIndex = data_returned.filename.length;
						for(var count = 0;count < data_returned.readfilename.length;count++){
							var notificationLinks = document.createElement("a");
							var filename = data_returned.readfilename[count.toString()];
							var fileId = data_returned.readfileId[count.toString()];
							var fileType = data_returned.file_type_2[count];
							var audioAdImage = data_returned.audioAdImage[count];
							
							notificationLinks.setAttribute("class", "notification-links");
							notificationLinks.setAttribute("id", "notification-links");
							notificationLinks.setAttribute("style", "opacity:1");
							notificationLinks.setAttribute("title", fileId);
							notificationLinks.setAttribute("href", filename);
							//notificationLinks.setAttribute("", "");
							document.getElementById("modal-content-notificator").append(notificationLinks);
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							
					        if(typeof data_returned.sender == typeof ""){
							    notificationLinks.innerHTML = "<b>"+data_returned.sender+"</b>, shared this "+
							fileId;
							}else{
							    notificationLinks.innerHTML = "<b>"+data_returned.sender[$senderIndex.toString()]+
								"</b>, shared this "+
							fileId;								
							}
							
							$senderIndex++;
							
							notificationLinks.addEventListener("click", (event) => event.preventDefault());
							
							function notificator(notificationLinks, filename, fileId, fileType, audioAdImage){
								notificationLinks.onclick = function(){
								   var attachFile = null;
                                   if(fileType == 0){
									   attachFile = document.createElement("img");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");		
									   attachFileID = 0;
									   ImageAttach(attachFile);
								   }else if(fileType == 1){
									   attachFile = document.createElement("video");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");									   
									   //attachFile.setAttribute("controls", "true");		
									   VideoControlRegion(attachFile);
									   attachFileID = 1;
									   mediaSet = 1;
								   }else{
									   attachFile = document.createElement("audio");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "audiplay notice-link");									   
									   attachFile.setAttribute("controls", "true");	
									   attachFile.setAttribute("style", 
									   "background-image: url('"+audioAdImage+"')");									   
									   attachFileID = 1;
									   mediaSet = 2;
									   AudioControls(attachFile);
								   }
								   
								   
								    
								    document.getElementById("myModal-notificator-link")
								    .style.zIndex = "25";

									document.getElementById("notice-link-header").innerHTML = fileId;
									document.getElementById("myModal-notificator-link")
									.style.display = "block";
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType, audioAdImage);
						}
						numberOfReadFiles = data_returned.numberOfReadFiles;
					  }
						//)
					}
				  }
				}
			},
			error: function(){}
		});
	//}
}


setInterval(() => FetchNotifications(), 1000);
