$(document).ready(function(){
	setInterval(function(){
		updateUserList();	
		updateUnreadMessageCount();	
	}, 60000);	
	setInterval(function(){
		showTypingStatus();
		updateUserChat();			
	}, 5000);
	$(".messages").animate({ 
		scrollTop: $(document).height() 
	}, "fast");
	$(document).on("click", '#profile-img', function(event) { 	
		$("#status-options").toggleClass("active");
	});
	$(document).on("click", '.expand-button', function(event) { 	
		$("#profile").toggleClass("expanded");
		$("#contacts").toggleClass("expanded");
	});	
	$(document).on("click", '#status-options ul li', function(event) { 	
		$("#profile-img").removeClass();
		$("#status-online").removeClass("active");
		$("#status-away").removeClass("active");
		$("#status-busy").removeClass("active");
		$("#status-offline").removeClass("active");
		$(this).addClass("active");
		if($("#status-online").hasClass("active")) {
			$("#profile-img").addClass("online");
		} else if ($("#status-away").hasClass("active")) {
			$("#profile-img").addClass("away");
		} else if ($("#status-busy").hasClass("active")) {
			$("#profile-img").addClass("busy");
		} else if ($("#status-offline").hasClass("active")) {
			$("#profile-img").addClass("offline");
		} else {
			$("#profile-img").removeClass();
		};
		$("#status-options").removeClass("active");
	});	
	$(document).on('click', '.contact', function(){		
		$('.contact').removeClass('active');
		$(this).addClass('active');
		var to_user_id = $(this).data('touserid');
		showUserChat(to_user_id);
		$(".chatMessage").attr('id', 'chatMessage'+to_user_id);
		$(".chatButton").attr('id', 'chatButton'+to_user_id);
	});	
	$(document).on("click", '.submit', function(event) { 
		var to_user_id = $(this).attr('id');
		to_user_id = to_user_id.replace(/chatButton/g, "");
		sendMessage(to_user_id);
	});
	$(document).on('focus', '.message-input', function(){
		var is_type = 'yes';
	var form = new FormData();
	form.append("action", "update_typing_status");
	form.append("is_type", is_type);
		$.ajax({
			url:"chat_action.php",
			type:"POST",
			contentType: false,
			cache: false,
			processData: false,
			data: form,
			success:function(){
			}
		});
	}); 
	$(document).on('blur', '.message-input', function(){
		var is_type = 'no';
	var form = new FormData();
	form.append("action", "is_type");
	form.append("is_type", is_type);
		$.ajax({
			url:"chat_action.php",
			type:"POST",
			contentType: false,
			cache: false,
			processData: false,
			data: form,
			success:function() {
			}
		});
	}); 		
}); 
function updateUserList() {
	var drim = "";
	if(window.location.href.slice(39) == ""){
		drim = "";
	}else{
		drim = window.location.href.slice(39);
	}
	var form = new FormData();
	form.append("action", "update_user_list");
	form.append("drim", drim);
	form.append("from_user_id", from_user_id);
		$.ajax({
			url:"chat_action.php",
			type:"POST",
			contentType: false,
			cache: false,
			processData: false,
			data: form,
		success:function(response){		
		    //window.console.log(response);
		    response = JSON.parse(response);
			var obj = response.profileHTML;
			Object.keys(obj).forEach(function(key) {
				// update user online/offline status
				if($("#"+obj[key].userid).length) {
					if(obj[key].online == 1 && !$("#status_"+obj[key].userid).hasClass('online')) {
						$("#status_"+obj[key].userid).addClass('online');
					} else if(obj[key].online == 0){
						$("#status_"+obj[key].userid).removeClass('online');
					}
				}				
			});			
		}
	});
}
function sendMessage(to_user_id) {
	message = $(".message-input input").val();
	$('.message-input input').val('');
	if($.trim(message) == '') {
		return false;
	}
	var form = new FormData();
	form.append("to_user_id", to_user_id);
	form.append("chat_message", message);
	form.append("from_user_id", from_user_id);
	form.append("action", "insert_chat");
	$.ajax({
		type: "POST",
		url: "chat_action.php",
		data: form,
		contentType: false,
		processData: false,
		cache: false,
		success: function(response){
			//window.console.log(response);
			var resp = $.parseJSON(response);			
			$('#conversation').html(resp.conversation.conversation);				
			$(".messages").animate({ scrollTop: $('.messages').height() }, "fast");
		},
		error: function(){}
	});
	return;
	$.ajax({
		url:"chat_action.php",
		type:"POST",
		data: {to_user_id:to_user_id, chat_message:message, action:'insert_chat'},
		dataType: "json",
		success:function(response) {
			var resp = $.parseJSON(response);			
			$('#conversation').html(resp.conversation);				
			$(".messages").animate({ scrollTop: $('.messages').height() }, "fast");
		}
	});	
}
function showUserChat(to_user_id){
	var form = new FormData();
	form.append("action", "show_chat");
	form.append("to_user_id", to_user_id);
		$.ajax({
			url:"chat_action.php",
			type:"POST",
			contentType: false,
			cache: false,
			processData: false,
			data: form,
		success:function(response){
			$('#userSection').html(response.userSection);
			$('#conversation').html(response.conversation);	
			$('#unread_'+to_user_id).html('');
		}
	});
}
function updateUserChat() {
	$('li.contact.active').each(function(){
		var to_user_id = $(this).attr('data-touserid');
/*//{to_user_id:to_user_id, action:'update_user_chat'},
			//dataType: "json",*/
	var form = new FormData();
	form.append("action", "update_user_chat");
	form.append("to_user_id", to_user_id);
		$.ajax({
			url:"chat_action.php",
			type:"POST",
			contentType: false,
			cache: false,
			processData: false,
			data: form, 
			success:function(response){				
			    //window.console.log(response);
				$('#conversation').html(response.conversation);			
			}
		});
	});
}
function updateUnreadMessageCount() {
	$('li.contact').each(function(){
		if(!$(this).hasClass('active')) {
			var to_user_id = $(this).attr('data-touserid');
	var form = new FormData();
	form.append("action", "update_unread_message");
	form.append("to_user_id", to_user_id);
		$.ajax({
			url:"chat_action.php",
			type:"POST",
			contentType: false,
			cache: false,
			processData: false,
			data: form,
				success:function(response){		
					if(response.count) {
						$('#unread_'+to_user_id).html(response.count);	
					}					
				}
			});
		}
	});
}
function showTypingStatus() {
	$('li.contact.active').each(function(){
		var to_user_id = $(this).attr('data-touserid');
	var form = new FormData();
	form.append("action", "show_typing_status");
	form.append("to_user_id", to_user_id);
		$.ajax({
			url:"chat_action.php",
			type:"POST",
			contentType: false,
			cache: false,
			processData: false,
			data: form,
			success:function(response){				
				$('#isTyping_'+to_user_id).html(response.message);			
			}
		});
	});
}