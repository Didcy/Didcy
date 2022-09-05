<?php

function FetchLoggedChat($chatTable){
  $chatBoard = "";
  $i = 0;
  $user_same_id = 0;
  $chatUserIDs = array("session_id"=>$_SESSION["userid"], "username"=>array(), "userid"=>array(),
  "avatar"=>array());
  $userLtImage = "";
  $numberOfUsers = 0;
  $chatBoard .= '<div class="container" id="container-chat-in">';		
	$chatBoard .= '<!--<h1 style="text-align: center;color: white">Didcy Chat</h1>-->';	 
		$chatBoard .= '<div class="chat" style="background: black">';	
			$chatBoard .= '<div id="frame">';		
				$chatBoard .= '<div id="sidepanel" class="sidepanel">';
					$chatBoard .= '<div id="profile">';
					//$chatTable = "chat_".$_POST["drim"];
					$chat = new Chat($chatTable);
					$loggedUser = $chat->getUserDetails($_SESSION['userid']);
					$chatBoard .= '<div class="wrap">';
					$currentSession = '';
					$typingUser = "";
					$user_fid = '';
					foreach ($loggedUser as $user) {
						$currentSession = $user['current_session'];
						$typingUser = $user['userid'];
						$user_fid = $user['userid'];
						$userLtImage = $user['avatar']; 
						$chatBoard .= '<img id="profile-img" src="userpics/'.$user['avatar'].'" class="online" alt="" />';
						  $chatBoard .= '<p>'.$user['username'].'</p>';
							 $chatBoard .= '<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>';
							 $chatBoard .= '<div id="status-options">';
							 $chatBoard .= '<ul>';
								 $chatBoard .= '<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>';
								 $chatBoard .= '<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>';
								 $chatBoard .= '<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>';
								 $chatBoard .= '<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>';
							 $chatBoard .= '</ul>';
							 $chatBoard .= '</div>';
							 $chatBoard .= '<div id="expanded" title="Logout" style="cursor:pointer">';			
							 $chatBoard .= '<a href="" id="logout-chat" target="_self" style="color: white;position: absolute;top: 0">Logout</a>';
							 $chatBoard .= '</div>';
							 $chatBoard .= '<script>document.getElementById("logout-chat").addEventListener("click", (event) => event.preventDefault();
								function LogOut() {
								  const xhttp = new XMLHttpRequest();
								  xhttp.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										window.location.reload();
									}
								  };
								  xhttp.open("POST", "chat/logout2.php");
								  xhttp.send();
								}
								
								LogOut();
							
							);</script>';
					}
					 $chatBoard .= '</div>';
					$chatBoard .= '</div>';
					$chatBoard .= '<div id="search">';
						$chatBoard .= '<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>';
						$chatBoard .= '<input type="text" placeholder="Search contacts..." />';
					$chatBoard .= '</div>';
					$chatBoard .= '<div id="contacts">';
					$userid = "";
					$chatBoard .= '<ul>';
					$chatUsers = $chat->chatUsers($_SESSION['userid']);
					$currentSession = 1;
					foreach ($chatUsers as $user) {
						$status = 'offline';						
						if($user['online']) {
							$status = 'online';
						}
						$activeUser = '';
						if($user['userid'] == $currentSession) {
							$activeUser = "active";
						}
						$numberOfUsers += 1;
						 $chatBoard .= '<li id="'.$user['userid'].'" class="contact '.$activeUser.'" data-touserid="'.$user['userid'].'" data-tousername="'.$user['username'].'">';
						 $chatBoard .= '<div class="wrap">';
						 $chatBoard .= '<span id="status_'.$user['userid'].'" class="contact-status '.$status.'"></span>';
						 $chatBoard .= '<img src="userpics/'.$user['avatar'].'" alt="" />';
						 $chatBoard .= '<div class="meta">';
						 $chatBoard .= '<p class="name">'.$user['username'].'<span id="unread_'.$user['userid'].'" class="unread">'.$chat->getUnreadMessageCount($user['userid'], $_SESSION['userid']).'</span></p>';
						 $chatBoard .= '<p class="preview"><span id="isTyping_'.$user['userid'].'" class="isTyping"></span></p>';
						 $chatBoard .= '</div>';
						 $chatBoard .= '</div>';
						 $chatBoard .= '</li>'; 		
			
						 $chatUserIDs["username"][$i] = $user["username"];
						 $chatUserIDs["userid"][$i] = $user["userid"];
						 $chatUserIDs["avatar"][$i] = $user['avatar'];
						 $user_same_id = $user['userid'];
                         $i++;
					}
					 $chatBoard .= '</ul>';
					$chatBoard .= '</div>';
					$chatBoard .= '<div id="bottom-bar">';
						$chatBoard .= '<button id="addcontact" onclick="PopupAddBoard()"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>';
						$chatBoard .= '<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>';					
					$chatBoard .= '</div>';
				$chatBoard .= '</div>';	
				$chatMessages = "";
			   if($user_same_id != 0){
				$chatBoard .= '<div class="content fcontent" id="content">'; 
					/*$chatBoard .= '<div id="expanded" class="switcher" title="Back">';			
					$chatBoard .= '<span class="switch" onclick="switcher()" id="switch">&larr;</span>';
					$chatBoard .= '</div>';*/
					$chatBoard .= '<div class="contact-profile" id="userSection">';
					$userDetails = $chat->getUserDetails($currentSession);
					foreach ($userDetails as $user) {										
						 $chatBoard .= '<img id="right-avatar" src="userpics/'.$user['avatar'].'" alt="" />';
							 $chatBoard .= '<p style="color: black" id="usr-name">'.$user['username'].'</p>';
							 $chatBoard .= '<div class="social-media">';
								$chatBoard .=  '<i class="fa fa-facebook" aria-hidden="true"></i>';
								 $chatBoard .= '<i class="fa fa-twitter" aria-hidden="true"></i>';
								  $chatBoard .= '<i class="fa fa-instagram" aria-hidden="true"></i>';
							 $chatBoard .= '</div>';
					}			
					$chatBoard .= '</div>';
					$chatBoard .= '<div class="messages" id="conversation">';		
					$chatMessages = $chat->getUserChat($_SESSION['userid'], $currentSession);
					if($chatMessages["chatMessages"] == ""){
					  $chatMessages = "";
					  $chatBoard .= $chatMessages;		
					}else{
					  $chatBoard .= $chatMessages["conversation"];	
					  $_SESSION["count"] = $chatMessages["count"];
					  $_SESSION["userid"] = $currentSession;
	
	                    

	
                    }					
					$chatBoard .= '</div>';
					$chatBoard .= '<div class="message-input" id="replySection">';				
						$chatBoard .= '<div class="message-input" id="replyContainer">';
							$chatBoard .= '<div class="wrap">';
								$chatBoard .= '<input type="text" onkeypress="SendUserTypingStatus('.$typingUser.', 1)" onkeyup="SendUserTypingStatus('.$typingUser.', 0)" class="chatMessage" id="chatMessage'.$currentSession.'" placeholder="Write your message..." />';
								$chatBoard .= '<button class="submit chatButton" id="chatButton'.$currentSession.'"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>';
							$chatBoard .= '</div>';
						$chatBoard .= '</div>';					
					$chatBoard .= '</div>';
				$chatBoard .= '</div>';
			$chatBoard .= '</div>';
		$chatBoard .= '</div>';
		  }
		
		return array("chatBoard"=>$chatBoard, "chatUserIDs"=>$chatUserIDs, "chatMessages"=>$chatMessages, 
		"user_same_id"=>$user_same_id);
}

?>