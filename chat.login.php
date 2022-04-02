<?php 
//SESSION_START();
//include('header.php');
 $loginError = '';
if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
 	include ('Chat.php');
	$chat = new Chat();
	$user = $chat->loginUsers($_POST['username'], $_POST['pwd']);
	if(!empty($user)) {
	/*	$_SESSION['username'] = $user[0]['username'];
		$_SESSION['userid'] = $user[0]['userid'];
		$chat->updateUserOnline($user[0]['userid'], 1);
		$lastInsertId = $chat->insertUserLoginDetails($user[0]['userid']);
		$_SESSION['login_details_id'] = $lastInsertId; */
		
		//header("Location:chat/chat.htm");
	
	 ?>
	 <script>
		document.getElementsByClassName("modal-chat")[0].innerHTML = "dkdkd";//append("<?php include('chat/chat.htm');?>");
	 </script>
	<?php	
	} else {
		$loginError = "Invalid username or password!";
		
    ?>
<?php //include('chat/container.php');?>
<div class="container">		
	<h2>Didcy Chat</h1>		
	<div class="row">
		<div class="col-sm-4">
			<h4>Chat Login:</h4>		
			<form method="post" class="chat-form">
				<div class="form-group">
				<?php if ($loginError ) { ?>
					<div class="alert alert-warning"><?php echo $loginError; ?></div>
				<?php } ?>
				</div>
				<div class="form-group">
					<label for="username">User:</label>
					<input type="username" class="username form-control" name="username" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="pwd form-control" name="pwd" required>
				</div>  
				<button type="submit" name="login" class="login btn btn-info" style="color: black">Login</button>
			</form>
			<br>
			<p><b>User</b> : adam<br><b>Password</b> : 123</p>
			<p><b>User</b> : rose<br><b>Password</b> : 123</p>
			<p><b>User</b> : smith<br><b>Password</b>: 123</p>
			<p><b>User</b> : merry<br><b>Password</b>: 123</p>
		</div>
		
	</div>
</div>	
<script type="text/javascript">
  "use strict";
  document.getElementsByClassName("chat-form")[0].addEventListener("submit", 
  (event) => event.preventDefault());

  document.getElementsByClassName("login")[0].onclick = function(){login();}
  
  function login(){
	 if(document.getElementsByClassName("username")[0].value == ""){
		return window.console.log("Empty username");
	 }
	 if(document.getElementsByClassName("pwd")[0].value == ""){
		return window.console.log("Empty Password");
	 }
	 
	 var form = new FormData();
	 form.append("username", document.getElementsByClassName("username")[0].value);
	 form.append("pwd", document.getElementsByClassName("pwd")[0].value);
	 $.ajax({
		type: "POST",
		url: "chat/chat.log.php",
		contentType: false,
		cache: false,
		processData: false,
		data: form,
		success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);
			if(data_returned.state == 200){
			 //window.alert(data_returned.session);
			 document.getElementsByClassName("modal-chat")[0].removeChild(documet.
			 getElementsByClassName("container")[0]);
			 document.getElementsByClassName("modal-chat")[0].append("<?php include('chat.htm');?>");
			}else if(data_returned.state == 506){
			  window.console.log(data_returned.session);
			}else{
			  
			}
		},
		error: function(){}
	 });
  }
  
</script>
<?php include('chat/footer.php');?>






	
	<?php
	}
}

?>
