<?php 
  require_once("validity.php") ;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Front Page</title>
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- styles -->
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>


    <header> 
      Crickwans </br>
      <p class="admin_"> 
        <a href="log_in_php/admin.php" target="_blank"> Admin </a> 
      </p>   
    </header >
    <div class="nothing">
	    <form action = "home.php" method="post"> 

	    	

<?php 
	                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
	                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
	                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
	                $statement = $pdo->prepare("SELECT * FROM match_") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
	                $i = sizeof($products) - $_SESSION['mid']  ;
	                $tmp1 = $products[$i]['team1_id'] ;
	                $tmp2 = $products[$i]['team2_id'] ;
	                $tmp = $products[$i]['match_id'] ;
	                // team1 name
	                $statement = $pdo->prepare("SELECT * FROM team where team_id = $tmp1") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                echo($products[0]['team_name']. ': ') ;

	                // team1 score
	                $statement = $pdo->prepare("SELECT * FROM team_ where team_id = $tmp1 and match_id = $tmp") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                echo($products[0]['run'] . '/' . $products[0]['wicket'] . ' (' .  (int) ($products[0]['ball']/6)   . '.' . $products[0]['ball']%6 .')' ) ;
	                ?> <br> <?php 

	                // team2 name
	                $statement = $pdo->prepare("SELECT * FROM team where team_id = $tmp2") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                echo($products[0]['team_name']. ': ') ;

	                // team2 score
	                $statement = $pdo->prepare("SELECT * FROM team_ where team_id = $tmp2 and match_id = $tmp") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                echo($products[0]['run'] . '/' . $products[0]['wicket'] . ' (' .  (int) ($products[0]['ball']/6)   . '.' . $products[0]['ball']%6 .')' ) ;

	                ?>
	                
	              <br>


	              

	              <?php 

	              	//1st batting

	              	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
	                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
	                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
	                $statement = $pdo->prepare("SELECT * FROM match_") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
	                $i = sizeof($products) - $_SESSION['mid']  ;
	                $tmp1 = $products[$i]['team1_id'] ;
	                $tmp = $products[$i]['match_id'] ;

	                $statement = $pdo->prepare("SELECT * FROM relation where match_id = '$tmp' and team_id = '$tmp1'  ") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                //echo(sizeof($products)) ;
	                echo "Batsman Card 1st Innings"; ?> <br> <?php
	                foreach ($products as $it) {
	                	$rcv = $it['player_id'] ;
	                //	echo($tmp . ' ' . $tmp1 . ' ' . $rcv . ' ') ;
	                	$statemen = $pdo->prepare("SELECT * FROM player where player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	if (sizeof($product) > 0)
	                	$name = $product[0]['player_name'];
	                	else $name = 'unknown' ;
	                	echo($name) ;
	                	
	                	$statemen = $pdo->prepare("SELECT * FROM player_ where match_id = '$tmp'  and player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	//echo(sizeof($product));
 	                	$rn = $product[0]['run_s'] ;
 	                	$bl = $product[0]['ball_f'] ;
 	                	echo( ' ' . $rn . ' ' . $bl . ' ' ) ; ?> <br> <?php
	                }
	                
	                //1st balling

	                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
	                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
	                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
	                $statement = $pdo->prepare("SELECT * FROM match_") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
	                $i = sizeof($products) - $_SESSION['mid']  ;
	                $tmp1 = $products[$i]['team2_id'] ;
	                $tmp = $products[$i]['match_id'] ;

	                $statement = $pdo->prepare("SELECT * FROM relation where match_id = '$tmp' and team_id = '$tmp1'  ") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                //echo(sizeof($products)) ;
	                echo "Bowlers Card 1st Innings"; ?> <br> <?php
	                foreach ($products as $it) {
	                	$rcv = $it['player_id'] ;
	                //	echo($tmp . ' ' . $tmp1 . ' ' . $rcv . ' ') ;
	                	$statemen = $pdo->prepare("SELECT * FROM player where player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	if (sizeof($product) > 0)
	                	$name = $product[0]['player_name'];
	                	else $name = 'unknown' ;
	                	
	                	
	                	$statemen = $pdo->prepare("SELECT * FROM player_ where match_id = '$tmp'  and player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	//echo(sizeof($product));
 	                	$rn = $product[0]['run_c'] ;
 	                	$bl = $product[0]['ball_b'] ;
 	                	$wk = $product[0]['wicket_g'] ;
 	                	if ($bl > 0)
 	                	echo($name . ' ' . $rn . ' ' . $bl . ' ' . $wk . ' ' ) ; ?> <br> <?php
	                }
	                




	              ?>

	             
	               <?php 

	              	//2nd batting

	              	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
	                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
	                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
	                $statement = $pdo->prepare("SELECT * FROM match_") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
	                $i = sizeof($products) - $_SESSION['mid']  ;
	                $tmp1 = $products[$i]['team2_id'] ;
	                $tmp = $products[$i]['match_id'] ;

	                $statement = $pdo->prepare("SELECT * FROM relation where match_id = '$tmp' and team_id = '$tmp1'  ") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                //echo(sizeof($products)) ;
	                echo "Batsman Card 2nd Innings"; ?> <br> <?php
	                foreach ($products as $it) {
	                	$rcv = $it['player_id'] ;
	                //	echo($tmp . ' ' . $tmp1 . ' ' . $rcv . ' ') ;
	                	$statemen = $pdo->prepare("SELECT * FROM player where player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	if (sizeof($product) > 0)
	                	$name = $product[0]['player_name'];
	                	else $name = 'unknown' ;
	                	echo($name) ;
	                	
	                	$statemen = $pdo->prepare("SELECT * FROM player_ where match_id = '$tmp'  and player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	//echo(sizeof($product));
 	                	$rn = $product[0]['run_s'] ;
 	                	$bl = $product[0]['ball_f'] ;
 	                	echo( ' ' . $rn . ' ' . $bl . ' ' ) ; ?> <br> <?php
	                }
	                
	                //balling

	                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
	                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
	                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
	                $statement = $pdo->prepare("SELECT * FROM match_") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
	                $i = sizeof($products) - $_SESSION['mid']  ;
	                $tmp1 = $products[$i]['team1_id'] ;
	                $tmp = $products[$i]['match_id'] ;

	                $statement = $pdo->prepare("SELECT * FROM relation where match_id = '$tmp' and team_id = '$tmp1'  ") ;
	                $statement->execute() ;
	                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;
	                //echo(sizeof($products)) ;
	                echo "Bowlers Card 2nd Innings"; ?> <br> <?php
	                foreach ($products as $it) {
	                	$rcv = $it['player_id'] ;
	                //	echo($tmp . ' ' . $tmp1 . ' ' . $rcv . ' ') ;
	                	$statemen = $pdo->prepare("SELECT * FROM player where player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	if (sizeof($product) > 0)
	                	$name = $product[0]['player_name'];
	                	else $name = 'unknown' ;
	                	
	                	
	                	$statemen = $pdo->prepare("SELECT * FROM player_ where match_id = '$tmp'  and player_id = '$rcv' ") ;
	                	$statemen->execute() ;
	                	$product = $statemen->fetchAll(PDO::FETCH_ASSOC) ;
	                	//echo(sizeof($product));
 	                	$rn = $product[0]['run_c'] ;
 	                	$bl = $product[0]['ball_b'] ;
 	                	$wk = $product[0]['wicket_g'] ;
 	                	if ($bl > 0)
 	                	echo($name . ' ' . $rn . ' ' . $bl . ' ' . $wk . ' ' ) ; ?> <br> <?php
	                }
	                




	              ?>


	    </form>
	</div>
  </body>
</html>

