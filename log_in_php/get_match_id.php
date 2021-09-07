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
				<button name="go_back"> Go back </button>
				<input type="text" name="match_data" placeholder="Enter the match id">
				<button name="Enter"> update</button>
			</form>

		</div>
		
	</div>

	


</body>
</html>