<?php require_once("validity.php")  ;
	if (isset($_SESSION['username'])) {
		header( 'Location: admin.php' );
		exit() ;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form action="index.php" method="post" class="register-form">
				<input type="text" name="username" placeholder="user name">
				<input type="password" name="password" placeholder="password">
				<button name="submit"> Creat</button>
				<p class="message"> Already registered <a href="#"> Login </a> </p>
			</form>

			<form action="index.php" method="post" class="login-form">
				<input type="text" name="lusername" placeholder="user name">
				<input type="password" name="lpassword" placeholder="password">
				<button name="login">Log in</button>
				<p class="message"> Not registered <a href="#"> Register </a> </p>
			</form>
		</div>
		
	</div>

	<script src='http://code.jquery.com/jquery-3.3.1.min.js'></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstarp.min.js"></script>
	<script src="js/custom.js"></script>

	<script>
		$('.message a').click(function(){
			$('form').animate({height: "toggle",opacity: "toggle"}, "slow");
		});
	</script>


</body>
</html>