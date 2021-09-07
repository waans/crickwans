<?php require_once("validity.php") ;
	if (!isset($_SESSION['username'])) {
		header( 'Location: index.php' );
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
			<form action="admin.php" method="post" class="admin-form">
				<button name="go_back"> Go back </button> <br>
				<input type="text" name="Player_name" placeholder="Insert The Player name"> 
				<button name="add_p"> ADD </button> 
				
			</form>

		</div>
		
	</div>

	


</body>
</html>