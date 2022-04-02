<?php 
                    include("ChatDidcy.php");
					$numberOfUsers = 0;
					$appendedUsers = 0;
					$chat = new Chat();
                    $chatBoard = array();
					$userid = "";
					$status = array();
					$chatUsers = $chat->chatUsers($_POST['userid']);
					foreach ($chatUsers as $user) {
						$status[$appendedUsers] = 'offline';						
						if($user['online']) {
							$status[$appendedUsers] = 'online';
						}
						$activeUser = '';
						if($user['userid'] == ($_POST["sessionid"]+$_POST["numberOfUsers"])+1) {
                          $chatBoard[$appendedUsers] = $user;
						}
						$numberOfUsers += 1;

					}
						
						echo json_encode(array("updateUsers"=>$chatBoard, 
						"numberOfUsers"=>$numberOfUsers, "status"=>$status));
?>


<?php

/* 							$chatBoard .= '<li id="'.$user['userid'].'" class="contact '.$activeUser.'" data-touserid="'.$user['userid'].'" data-tousername="'.$user['username'].'">';
							$chatBoard .= '<div class="wrap">';
							$chatBoard .= '<span id="status_'.$user['userid'].'" class="contact-status '.$status.'"></span>';
							$chatBoard .= '<img src="userpics/'.$user['avatar'].'" alt="" />';
							$chatBoard .= '<div class="meta">';
							$chatBoard .= '<p class="name">'.$user['username'].'<span id="unread_'.$user['userid'].'" class="unread">'.$chat->getUnreadMessageCount($user['userid'], $_POST['userid']).'</span></p>';
							$chatBoard .= '<p class="preview"><span id="isTyping_'.$user['userid'].'" class="isTyping"></span></p>';
							$chatBoard .= '</div>';
							$chatBoard .= '</div>';
							$chatBoard .= '</li>';  */

?>