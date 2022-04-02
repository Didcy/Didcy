<?php 
session_start();
include('headerDidcy.php');
?>
<title>Didcy - Chat</title>
<link rel='stylesheet prefetch' href='font-awesome.min.css'>
<link href="styleDidcy.css" rel="stylesheet" id="bootstrap-css">
<script src="jquery.js"></script>
<script src="chatDidcy.js"></script>
<style>
.modal-dialog {
    width: 400px;
    margin: 30px auto;	
}
</style>
<?php //include('containerDidcy.php');?>
<div class="container">		
	<h1>Didcy Chat</h1>		
	<br>		
	<?php 
	if(isset($_SESSION['userid']) && $_SESSION['userid']) { ?> 	
		<div class="chat">	
			<div id="frame">		
				<div id="sidepanel">
					<div id="profile">
					<?php
					include ('ChatDidcy.php');
					$chat = new Chat();
					$loggedUser = $chat->getUserDetails($_SESSION['userid']);
					$numberOfUsers = 0;
					echo '<div class="wrap">';
					$currentSession = '';
					foreach ($loggedUser as $user) {
						$currentSession = $user['current_session'];
						echo '<img id="profile-img" src="userpics/'.$user['avatar'].'" class="online" alt="" />';
						echo  '<p>'.$user['username'].'</p>';
							echo '<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>';
							echo '<div id="status-options">';
							echo '<ul>';
								echo '<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>';
								echo '<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>';
								echo '<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>';
								echo '<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>';
							echo '</ul>';
							echo '</div>';
							echo '<div id="expanded" title="Logout" style="cursor:pointer">';			
							echo '<a href="http://www.localhost/logoutDidcy.php" style="color: white;position: absolute;top: 0">Logout</a>';
							echo '</div>';
					}
					echo '</div>';
					?>
					</div>
					<div id="search">
						<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
						<input type="text" placeholder="Search contacts..." />					
					</div>
					<div id="contacts">	
					<?php
					$userid = "";
					echo '<ul id="contact-list">';
					$chatUsers = $chat->chatUsers($_SESSION['userid']);
					$numberOfUsers = 0;
					$activeForCount = 0;
					foreach ($chatUsers as $user) {
						
						$status = 'offline';						
						if($user['online']) {
							$status = 'online';
						}
						$activeUser = '';
						if($user['userid'] == $currentSession+1) {
							$activeUser = "active";
							$activeForCount = $user['userid'];
						}
						$numberOfUsers += 1;
						echo '<li id="'.$user['userid'].'" class="contact '.$activeUser.'" data-touserid="'.$user['userid'].'" data-tousername="'.$user['username'].'">';
						echo '<div class="wrap">';
						echo '<span id="status_'.$user['userid'].'" class="contact-status '.$status.'"></span>';
						echo '<img src="userpics/'.$user['avatar'].'" alt="" />';
						echo '<div class="meta">';
						echo '<p class="name">'.$user['username'].'<span id="unread_'.$user['userid'].'" class="unread">'.$chat->getUnreadMessageCount($user['userid'], $_SESSION['userid']).'</span></p>';
						echo '<p class="preview"><span id="isTyping_'.$user['userid'].'" class="isTyping"></span></p>';
						echo '</div>';
						echo '</div>';
						echo '</li>'; 
					echo "<script type='text/javascript'>
					       'use strict';
						   
						   var ssid = '".$_SESSION['userid']."';
                            
							var message_count = 0, temp = 0, numberOfUsers = 0;
							var intervaler = null;
							
							var activeForCount = ".$activeForCount.";
							
							var userids = [], uids = 0;
							var respUsers = 0;
							
							function GetTypingStatus(userid){
								var form = new FormData();
								form.append('to_user_id', userid);
								form.append('action', 'show_typing_status');
								$.ajax({
									type: 'POST',
									url: 'chat_actionDidcy.php',
									data: form,
									contentType: false,
									cache: false,
									processData: false, 
									success: function(result){
									   var data_returned = JSON.parse(result);
									   if(data_returned.message.state == 1){
										  //window.console.log(data_returned.message.message);
									   }
									   //window.console.log(data_returned);
									   //window.console.log(userid);
									},
									error: function(){}
								});
							}
							
							setInterval(() => GetTypingStatus('".$user["userid"]."'), 1000);
							
							function GetNewUsers(sessionid){
								var form = new FormData();
								form.append('sessionid', sessionid);
								form.append('userid', sessionid);
								form.append('numberOfUsers', numberOfUsers);
								$.ajax({
									type: 'POST',
									url: 'retrieve.new.usersDidcy.php',
									data: form,
									contentType: false,
									processData: false,
									cache: false,
									success: function(response){
										//window.console.log(response);
										var resp = $.parseJSON(response);
										respUsers = resp.numberOfUsers;
						
										if(numberOfUsers != resp.numberOfUsers){
										  var contacts = 'contacts';
										  //$(contacts).html(resp.updateUsers);
										  
										  
										  for(var i = 0;i < resp.updateUsers.length;i++){
											
										  var usersUpdate = {
											  li: document.createElement('li'),
											  div: document.createElement('div'),
											  span: document.createElement('span'),
											  img: document.createElement('img'),
											  divMeta: document.createElement('div'),
											  pName: document.createElement('p'),
											  pPreview: document.createElement('p'),
											  spanUnread: document.createElement('span'),
											  spanTyping: document.createElement('span')
											  
										  };
										    
											//window.console.log(resp.updateUsers[i]['userid']);
											
											usersUpdate.li.setAttribute('class', 'contact ');
											usersUpdate.li.setAttribute('id', resp.updateUsers[i]['userid']);
											usersUpdate.li.setAttribute('data-touserid', resp.updateUsers[i]['userid']);
											usersUpdate.li.setAttribute('data-tousername', resp.updateUsers[i]['username']);
											
											usersUpdate.div.setAttribute('class', 'wrap');
											
											usersUpdate.span.setAttribute('class', 'contact-status '+resp.status[i]);
											usersUpdate.span.setAttribute('id', 'status_'+resp.updateUsers[i]['userid']);
											
											usersUpdate.img.setAttribute('src', 'userpics/'+resp.updateUsers[i]['avatar']);
											usersUpdate.img.setAttribute('alt', '');
											
											usersUpdate.divMeta.setAttribute('class', 'meta');
											
											usersUpdate.pName.setAttribute('class', 'name');
											usersUpdate.pName.innerHTML = resp.updateUsers[i]['username'];
											
											usersUpdate.spanUnread.setAttribute('class', 'unread');
											usersUpdate.spanUnread.setAttribute('id', 'unread_'+resp.updateUsers[i]['userid']);
											usersUpdate.spanUnread.innerHTML = '';
											
											usersUpdate.pName.append(usersUpdate.spanUnread);
											
											usersUpdate.pPreview.setAttribute('class', 'preview');
											
											usersUpdate.spanTyping.setAttribute('class', 'isTyping');
											usersUpdate.spanTyping.setAttribute('class', 'isTyping_'+resp.updateUsers[i]['userid']);
											usersUpdate.pPreview.append(usersUpdate.spanTyping);
											
											usersUpdate.div.append(usersUpdate.span);
											usersUpdate.div.append(usersUpdate.img);
									
											usersUpdate.divMeta.append(usersUpdate.pName);
											usersUpdate.divMeta.append(usersUpdate.pPreview);									
											usersUpdate.div.append(usersUpdate.divMeta);
											
											usersUpdate.li.append(usersUpdate.div);
											
											document.getElementById('contact-list').append(usersUpdate.li);
											
										function conversx(userid, username, sessionid, avatar){
						                    var userdata = ''; 
										    document.getElementById(userid).onclick = function(){
											   userid = document.getElementById(userid).id;
											   from_user_id = sessionid;
											   var form = new FormData();
											   form.append('userid', userid);
											   form.append('sessionid', sessionid);
											   $.ajax({
												   type: 'POST',
												   url: 'retrieve.chatDidcy.php',
												   data: form,
												   cache: false,
												   processData: false,
												   contentType: false,
												   success: function(result){
													   //window.console.log(result);
													   var data_returned = JSON.parse(result);
													   document.getElementById(userid).className += ' active';
													   document.getElementById('sidepanel').style.maxWidth = '340px';
													   document.getElementById('sidepanel').style.minWidth = '280px';
													   document.getElementsByClassName('content')[0].style.display = 'block';
													   //document.getElementById('sidepanel').style.display = 'none';
													   document.getElementById('right-avatar').src = 'userpics/'+avatar;
													   document.getElementById('usr-name').innerHTML = username;
													   document.getElementById('conversation').innerHTML = data_returned.conversation.conversation;
													   document.getElementsByClassName('chatButton')[0].id = 'chatButton'+userid;									   
												       
													   activeForCount = userid;
												   },
												   error: function(){}
											   });						
										    }		

										    intervaler = setInterval(
											  () => getMessageCount(from_user_id, userid), 1000);

											userids[uids] = userid;
											uids++;
										}
										    conversx(resp.updateUsers[i]['userid'], resp.updateUsers[i]['username'], sessionid, 
											resp.updateUsers[i]['avatar']);
										    numberOfUsers = resp.numberOfUsers;
											
										}
										  
										  //numberOfUsers = resp.numberOfUsers;
										}
									},
									error: function(){}
								});									
							}
				
							function GetNewCount(to_user_id, from_user_id){
								var form = new FormData();
								form.append('from_user_id', from_user_id);
								form.append('to_user_id', to_user_id);
								$.ajax({
									type: 'POST',
									url: 'retrieve.new.statusDidcy.php',
									data: form,
									contentType: false,
									processData: false,
									cache: false,
									success: function(response){
										//window.console.log(response);
										var resp = $.parseJSON(response);
										var unread = '#unread_'+from_user_id;
										$(unread).html(resp.status);
									},
									error: function(){}
								});								
							}
							
							function GetUpdate(from_user_id, to_user_id) {
								var form = new FormData();
								form.append('sessionid', from_user_id);
								form.append('userid', to_user_id);
								$.ajax({
									type: 'POST',
									url: 'retrieve.chatDidcy.php',
									data: form,
									contentType: false,
									processData: false,
									cache: false,
									success: function(response){
										//window.console.log(response);
										var resp = $.parseJSON(response);			
										$('#conversation').html(resp.conversation.conversation);
										$('.messages').animate({ scrollTop: $('.messages').height() }, 'fast');
									     GetNewCount(to_user_id, from_user_id);
									},
									error: function(){}
								});
							}

							function getMessageCount(sessionid, userid){
								//message_count = count; 
								
								var form = new FormData();
								form.append('sessionid', sessionid);
								form.append('userid', userid);
								//form.append('prev', prev);
								$.ajax({
								   type: 'POST',
								   url: 'updateConversationDidcy.php',
								   data: form,
								   processData: false,
								   cache: false,
								   contentType: false,
								   success: function(result){
									   //window.console.log(result);
									   var data_returned = JSON.parse(result);
									   if(activeForCount == userid){
										   if(data_returned.count != 0){
											if(message_count != data_returned.count){
											//if(data_returned.count == 1){
											  GetUpdate(userid, sessionid);
											 //}
											   message_count = data_returned.count;
											}
										   }
									   }else{
										   if(data_returned.count != 0){
											   GetNewCount(sessionid, userid);
										   }
									   }
								   },
								   error: function(){}
								});	
								//setInterval(() => getMessageCount(userid, sessionid), 10000);
							}

						   function convers(userid, username, sessionid){
						   var userdata = ''; 
						   
						   document.getElementById(userid).onclick = function(){
							   document.getElementById('conversation').innerHTML = '';
							   userid = document.getElementById(userid).id;
							   from_user_id = sessionid;
                               var form = new FormData();
							   form.append('userid', userid);
							   form.append('sessionid', sessionid);
							   $.ajax({
								   type: 'POST',
								   url: 'retrieve.chatDidcy.php',
								   data: form,
								   cache: false,
								   processData: false,
								   contentType: false,
								   success: function(result){
									    //window.console.log(result);
									   //document.getElementById('conversation').innerHTML = '';
									   var data_returned = JSON.parse(result);
									   document.getElementById(userid).className += ' active';
									   document.getElementById('sidepanel').style.maxWidth = '340px';
									   document.getElementById('sidepanel').style.minWidth = '280px';
									   document.getElementsByClassName('content')[0].style.display = 'block';
									   //document.getElementById('sidepanel').style.display = 'none';
									   document.getElementById('right-avatar').src = 'userpics/".$user['avatar']."';
									   document.getElementById('usr-name').innerHTML = username;
									   document.getElementById('conversation').innerHTML = data_returned.conversation.conversation;
									   document.getElementsByClassName('chatButton')[0].id = 'chatButton".$user["userid"]."';	
                                       
									   activeForCount = userid;
									
									   /*if(intervaler != null){
										  clearInterval(intervaler);
											intervaler = setInterval(
											  () => getMessageCount(from_user_id, userid), 1000);
									   }*/
								   },
								   error: function(){}
							   });						
						   }
						    intervaler = setInterval(
					          () => getMessageCount(from_user_id, userid), 1000);
							
							setInterval(
					          () => GetNewUsers('".$currentSession."'), 1000);
							  
							  userids[uids] = ".$user['userid'].";
							  uids++;
							  
						   }
						   convers('".$user['userid']."', '".$user['username']."', '".$_SESSION['userid']."');
					     </script>";
					}
					echo '</ul>';
					?>
					</div>
					<div id="bottom-bar">	
						<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
						<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>					
					</div>
				</div>			
				<div class="content" id="content"> 
					<div class="contact-profile" id="userSection">	
					<?php
					$userDetails = $chat->getUserDetails($currentSession+1);
					foreach ($userDetails as $user) {			
						if($user['userid'] != $currentSession) {
						echo '<img id="right-avatar" src="userpics/'.$user['avatar'].'" alt="" />';
							echo '<p id="usr-name">'.$user['username'].'</p>';
							echo '<div class="social-media">';
								echo '<i class="fa fa-facebook" aria-hidden="true"></i>';
								echo '<i class="fa fa-twitter" aria-hidden="true"></i>';
								 echo '<i class="fa fa-instagram" aria-hidden="true"></i>';
							echo '</div>';
						}					
					}	
					?>						
					</div>
					<div class="messages" id="conversation">		
					<?php
					$chat = $chat->getUserChat($_SESSION['userid'], $currentSession+1);
					$_SESSION["count"] = $chat["count"];
					echo $chat["conversation"];			
                    echo "<script>
					 message_count = '".$_SESSION["count"]."';
					 numberOfUsers = '".$numberOfUsers."';
					 var from_user_id='".$currentSession."';
					/*setInterval(
					  () => getMessageCount('".$currentSession."', '".$_SESSION['userid']."'), 10000);
					  */
					</script>";
					$_SESSION["userid"] = $currentSession;
					//$_SESSION["userid-2"] = $currentSession+1;
					?>
					</div>
					<div class="message-input" id="replySection">				
						<div class="message-input" id="replyContainer">
							<div class="wrap">
								<input type="text" class="chatMessage" id="chatMessage<?php echo $currentSession+1; ?>" placeholder="Write your message..." />
								<button class="submit chatButton" id="chatButton<?php echo $currentSession+1; ?>"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>	
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<br>
		<br>
		<strong><a href="http://www.localhost/loginDidcy.php"><h3>Login To Access Chat System</h3></a></strong>		
	<?php } ?>
	<br>
	<br>	
	<div style="margin:50px 0px 0px 0px;display: none">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/build-live-chat-system-with-ajax-php-mysql/">Back to Tutorial</a>		
	</div>	
	<div style="margin:50px 0px 0px 0px">
		<a class="btn btn-default read-more" style="color:black;font-size: 20px;text-decoration: none" href="http://www.localhost/logoutDidcy.php">Logout</a>		
	</div>	
</div>	
<script type="text/javascript">
 "use strict";
document.getElementById("conversation").addEventListener("scroll", topFunction());
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.getElementById("conversation").scrollBottom = 0; // For Safari
  document.documentElement.scrollBottom = 0; // For Chrome, Firefox, IE and Opera
}


</script>
<?php include('footerDidcy.php');?>