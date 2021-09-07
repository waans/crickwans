<?php 
	session_start() ;
	if (isset($_POST['live1'])) {
 		$_SESSION['mid'] = 1 ;
 		header( 'Location: match_update.php' );
 		exit() ;
 	}
 	if (isset($_POST['live2'])) {
 		$_SESSION['mid'] = 2 ;
 		header( 'Location: match_update.php' );
 		exit() ;
 	}
 	if (isset($_POST['live3'])) {
 		$_SESSION['mid'] = 3 ;
 		header( 'Location: match_update.php' );
 		exit() ;
 	}
 	if (isset($_POST['live4'])) {
 		$_SESSION['mid'] = 4 ;
 		header( 'Location: match_update.php' );
 		exit() ;
 	}
 	if (isset($_POST['live5'])) {
 		$_SESSION['mid'] = 5 ;
 		header( 'Location: match_update.php' );
 		exit() ;
 	}


?>