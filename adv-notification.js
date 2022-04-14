"use strict";

var modalNotificatorLink = document.getElementsByClassName("modal-notificator-link")[0];
var modalNotificator = document.getElementsByClassName("modal-notificator")[0];
var spanNotificator = document.getElementsByClassName("close-notificator")[0];
var spanNotificatorLink = document.getElementsByClassName("close-notificator-link")[0];
var attachFileID = 0, numberOfReadFiles = 0, numberOfUnReadFiles = 0;

function badgeClick(){
		var form = new FormData();
		if(window.location.href.slice(39) != ""){
		   form.append("drim", window.location.href.slice(39));
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
   //modalNotificator.style.height = "0%";	
}

spanNotificator.onclick = function() { 
  //ClearNotificator();
  modalNotificator.style.height = "0%";
}

function NotificationLink(){
   if(attachFileID == 1){
	  document.getElementById("notice-link").pause();
	  attachFileID = 0;  
   }
   var noticeLink = document.getElementById("notice-link");
   document.getElementById("modal-content-notificator-link").removeChild(noticeLink);
   modalNotificatorLink.style.display = "none";   
}

spanNotificatorLink.onclick = function() { 
/*    var noticeLinks = document.querySelectorAll("a.notification-links");
   for(var noticeCount = 0;noticeCount < noticeLinks.lenght;noticeCount++){
	   document.getElementById("modal-content-notificator-link").
   }  */
   NotificationLink();
}

function ClearAllNotes(){
	ClearNotificator();
/* 	if(attachFileID == 1){
		NotificationLink();
		attachFileID = 0;  
	} */
}

function FetchNotifications(){
	//if(window.navigator.onLine == true){
       var reloaderID = window.location.href;
		/*if(reloaderID == "localhost/?id=1"){
		   reloaderID = reloaderID.slice(14);
		}
		if(reloaderID == "www.localhost/?id=1"){
		   reloaderID = reloaderID.slice(18);
		}
		if(reloaderID == "http://www.localhost/?id=1"){
	        reloaderID = reloaderID.slice(25);
	    }*/

/*         var reloaderID2 = 0;
		
		if(reloaderID == "didcy.ueuo.com/?id=1"){
		   reloaderID2 = reloaderID.slice(19);
		}
		if(reloaderID2 == "www.didcy.ueuo.com/?id=1"){
		   reloaderID2 = reloaderID.slice(23);
		}
		if(reloaderID == "http://www.didcy.ueuo.com/?id=1"){
	        reloaderID = reloaderID.slice(30);
	    }
	  
	  if(reloaderID != "" && reloaderID2 != 1){ */
    var form = new FormData();
	if(reloaderID.slice(39) != ""){
		form.append("notification", 0);
		form.append("drim", reloaderID.slice(39));
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
				//window.console.log(reloaderID.slice(39));
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
							
							function notificator(notificationLinks, filename, fileId, fileType){
								notificationLinks.onclick = function(){
								   var attachFile = null;
                                   if(fileType == 0){
									   attachFile = document.createElement("img");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");		
									   attachFileID = 0;
								   }else if(fileType == 1){
									   attachFile = document.createElement("video");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");									   
									   attachFile.setAttribute("controls", "true");		
									   attachFileID = 1;
								   }else{
									   attachFile = document.createElement("audio");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");									   
									   attachFile.setAttribute("controls", "true");		
									   attachFileID = 1;
								   }
								    
								    document.getElementById("myModal-notificator-link")
								    .style.zIndex = "25";
									document.getElementById("modal-content-notificator-link")
								    .append(attachFile);
									document.getElementById("notice-link-header").innerHTML = fileId;
									document.getElementById("myModal-notificator-link")
									.style.display = "block";
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType);
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
							function notificator(notificationLinks, filename, fileId, fileType){
								notificationLinks.onclick = function(){
                                   var form = new FormData();
								   if(reloaderID.slice(39) != ""){
								     form.append("notification", "1");
								     form.append("drim", reloaderID.slice(39));
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
											   attachFile.setAttribute("class", "notice-link");
											   attachFileID = 0;
										    }else if(fileType == 1){
											   attachFile = document.createElement("video");
											   attachFile.setAttribute("src", filename);		
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "notice-link");			
											   attachFile.setAttribute("controls", "true");	
											   attachFileID = 1;
										    }else{
											   attachFile = document.createElement("audio");
											   attachFile.setAttribute("src", filename);
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "notice-link");									   
											   attachFile.setAttribute("controls", "true");		
											   attachFileID = 1;
										    }
											
											document.getElementById("myModal-notificator-link")
											.style.zIndex = "25";

											document.getElementById("modal-content-notificator-link")
											.append(attachFile);
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
							
							notificator(notificationLinks, filename, fileId, fileType);
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
							
							function notificator(notificationLinks, filename, fileId, fileType){
								notificationLinks.onclick = function(){
								   var attachFile = null;
                                   if(fileType == 0){
									   attachFile = document.createElement("img");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");
									   attachFileID = 0;
								   }else if(fileType == 1){
									   attachFile = document.createElement("video");
									   attachFile.setAttribute("src", filename);									   
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");			
									   attachFile.setAttribute("controls", "true");	
									   attachFileID = 1;
								   }else{
									   attachFile = document.createElement("audio");
									   attachFile.setAttribute("src", filename);									   
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");			
									   attachFile.setAttribute("controls", "true");	
									   attachFileID = 1;									   
								   }
								    
									document.getElementById("myModal-notificator-link")
									.style.zIndex = "25";

									document.getElementById("modal-content-notificator-link")
								    .append(attachFile);
									document.getElementById("notice-link-header").innerHTML = fileId;
									document.getElementById("myModal-notificator-link")
									.style.display = "block";
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType);
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
							
							function notificator(notificationLinks, filename, fileId, fileType){
								notificationLinks.onclick = function(){
                                   var form = new FormData();
								   if(reloaderID.slice(39) != ""){
								     form.append("notification", "1");
								     form.append("drim", reloaderID.slice(39));
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
										    }else if(fileType == 1){
											   attachFile = document.createElement("video");
											   attachFile.setAttribute("src", filename);	
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "notice-link");	
											   attachFile.setAttribute("controls", "true");	
											   attachFileID = 1;
										    }else{
											   attachFile = document.createElement("audio");
											   attachFile.setAttribute("src", filename);									   
											   attachFile.setAttribute("id", "notice-link");									   
											   attachFile.setAttribute("class", "notice-link");			
											   attachFile.setAttribute("controls", "true");	
											   attachFileID = 1;									   
										    }									
											
											document.getElementById("myModal-notificator-link")
											.style.zIndex = "25";
											document.getElementById("modal-content-notificator-link")
											.append(attachFile);
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
							
							notificator(notificationLinks, filename, fileId, fileType);
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
							
							function notificator(notificationLinks, filename, fileId, fileType){
								notificationLinks.onclick = function(){
								   var attachFile = null;
                                   if(fileType == 0){
									   attachFile = document.createElement("img");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");		
									   attachFileID = 0;
								   }else if(fileType == 1){
									   attachFile = document.createElement("video");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");									   
									   attachFile.setAttribute("controls", "true");		
									   attachFileID = 1;
								   }else{
									   attachFile = document.createElement("audio");
									   attachFile.setAttribute("src", filename);
									   attachFile.setAttribute("id", "notice-link");									   
									   attachFile.setAttribute("class", "notice-link");									   
									   attachFile.setAttribute("controls", "true");		
									   attachFileID = 1;
								   }
								   
								   
								    
								    document.getElementById("myModal-notificator-link")
								    .style.zIndex = "25";
									document.getElementById("modal-content-notificator-link")
								    .append(attachFile);
									document.getElementById("notice-link-header").innerHTML = fileId;
									document.getElementById("myModal-notificator-link")
									.style.display = "block";
								}
							}
							
							notificator(notificationLinks, filename, fileId, fileType);
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

/* $(document).ready(function(){
  if(window.location.href.slice(39) != ""){
    FetchNotifications();
  }else{
   //setInterval(() => FetchNotifications(), 1000);
    FetchNotifications();
  }
}); */


setInterval(() => FetchNotifications(), 1000);
