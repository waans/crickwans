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
	<div class="login-page1">
		<div class="form">
			<form action="admin.php" method="post" class="admin-form">
				<button name="go_back"> Go back </button> <br>
				<button name="player"> Search A palyer ID </button> <br>

				<input type="text" name="Team1" placeholder="Team batting First"> 
				
				<input type="text" name="1player1" placeholder="Insert The Player Id"> 
				<input type="text" name="1player2" placeholder="Insert The Player Id"> 
				<input type="text" name="1player3" placeholder="Insert The Player Id"> 
				<input type="text" name="1player4" placeholder="Insert The Player Id"> 
				<input type="text" name="1player5" placeholder="Insert The Player Id"> 
				<input type="text" name="1player6" placeholder="Insert The Player Id"> 
				<input type="text" name="1player7" placeholder="Insert The Player Id"> 
				<input type="text" name="1player8" placeholder="Insert The Player Id"> 
				<input type="text" name="1player9" placeholder="Insert The Player Id"> 
				<input type="text" name="1player10" placeholder="Insert The Player Id"> 
				<input type="text" name="1player11" placeholder="Insert The Player Id"> 
		
			
		<br>
	
			
				<input type="text" name="Team2" placeholder="Team batting Second">

				<input type="text" name="2player1" placeholder="Insert The Player Id"> 
				<input type="text" name="2player2" placeholder="Insert The Player Id"> 
				<input type="text" name="2player3" placeholder="Insert The Player Id"> 
				<input type="text" name="2player4" placeholder="Insert The Player Id"> 
				<input type="text" name="2player5" placeholder="Insert The Player Id"> 
				<input type="text" name="2player6" placeholder="Insert The Player Id"> 
				<input type="text" name="2player7" placeholder="Insert The Player Id"> 
				<input type="text" name="2player8" placeholder="Insert The Player Id"> 
				<input type="text" name="2player9" placeholder="Insert The Player Id"> 
				<input type="text" name="2player10" placeholder="Insert The Player Id"> 
				<input type="text" name="2player11" placeholder="Insert The Player Id"> 
				<button name="creat"> Creat</button>
			</form>

		</div>
		
	</div>

	


</body>
</html>