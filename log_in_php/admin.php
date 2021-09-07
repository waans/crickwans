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
				<button name="new"> creat a new match </button> <br>
				<button name="old"> update an old match </button> <br>
				<button name="new_player"> add a new player </button> <br>
				<button name="logout"> logout </button>
			</form>

		</div>
		
	</div>

	


</body>
</html>