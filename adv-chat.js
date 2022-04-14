"use strict";

var modalChat = document.getElementById("myModal-chat");
var modalChatBoard = document.getElementsByClassName("modal-chat-board")[0];
var closeChat = document.getElementsByClassName("close-chat")[0];
var closeChatBoard = document.getElementsByClassName("close-chat-board")[0];

function ChatBoard(){
   modalChat.style.display = "block";
}

closeChat.addEventListener("click", closeChatBoard);

function closeChatBoard(){
  document.getElementsByClassName("username")[0].value = "";
  document.getElementsByClassName("pwd")[0].value = "";
  modalChat.style.display = "none";
}

function ChatBoarder(){
   modalChatBoard.style.display = "block";
}

closeChatBoard.addEventListener("click", closeChatBoarder);

function closeChatBoarder(){
	 var form = new FormData();
	 form.append("userid", usr);
	 
	 var drim = window.location.href.slice(39);
	 
     if(drim == ""){
		drim = "";
	 }	 
	 else{
	    drim = window.location.href.slice(39);
	 }
	 
	 form.append("drim", drim); 
	 $.ajax({
		type: "POST",
		url: "chat/logout2.php",
		contentType: false,
		cache: false,
		processData: false,
		data: form,
		success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);
			if(data_returned.state == 200){
			  document.getElementById("modal-content-chat-board").removeChild(
			  document.getElementById("container-chat-in"));
			}else if(data_returned.state == 506){
				
			}else{
			  
			}
		},
		error: function(){}
	 });
  modalChatBoard.style.display = "none";
}