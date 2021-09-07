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
    
    <form action = "home.php" method="post"> 

    <section class = "matches">

      <?php require_once("validity.php") ;
          $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
          $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
          $statement = $pdo->prepare("SELECT * FROM match_") ;
          $statement->execute() ;
          $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
          $siz = sizeof($products)  ;
          
          $_SESSION['siz'] = $siz ;

          if ($_SESSION['siz'] >=1) {    
      ?>  
            <button class="live" name="live1">
              <?php require_once("validity.php") ;

                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
                $statement = $pdo->prepare("SELECT * FROM match_") ;
                $statement->execute() ;
                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
                $i = sizeof($products) - 1  ;
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
                ?> <br> <?php require_once("validity.php") ;


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

            </button >
      <?php
          }  
          if ($_SESSION['siz'] >=2){ 
      ?>
            <button class = "live" name="live2">
              <?php require_once("validity.php") ;

                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
                $statement = $pdo->prepare("SELECT * FROM match_") ;
                $statement->execute() ;
                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
                $i = sizeof($products) - 2  ;
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
                ?> <br> <?php require_once("validity.php") ;


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
            </button>
      <?php require_once("validity.php") ;

          }  
          if ($_SESSION['siz'] >=3) {
      ?>
            <button class = "live" name="live3">
              <?php 
                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
                $statement = $pdo->prepare("SELECT * FROM match_") ;
                $statement->execute() ;
                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
                $i = sizeof($products) - 3  ;
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
            </button>
      <?php require_once("validity.php") ;

          }  
          if ($_SESSION['siz'] >=4) {
      ?>
            <button class="live" name="live4">
              <?php 
                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
                $statement = $pdo->prepare("SELECT * FROM match_") ;
                $statement->execute() ;
                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
                $i = sizeof($products) - 4  ;
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
                ?> <br> <?php require_once("validity.php") ;


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
            </button>
      <?php require_once("validity.php") ;

          }   
          if ($_SESSION['siz'] >=5) {
      ?>
            <button class="live" name="live5">
              <?php 
                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sing_up','root','') ; 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) ;          
                $con = mysqli_connect("localhost", "root" ,"","sing_up") ;  
                $statement = $pdo->prepare("SELECT * FROM match_") ;
                $statement->execute() ;
                $products = $statement->fetchAll(PDO::FETCH_ASSOC) ;        
                $i = sizeof($products) - 5  ;
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
                
              ?> </button>
      <?php
          } 
      ?>

    </section>

    <script type="text/javascript">
      function fun() {
        alert("Comming Soon") ;
      }
    </script>

    <header> Latest News </header>

    <section class = "blogs">
      <button class="blog" onclick = "fun();">Buttler, Leach return to England squad for final Test against India</button>
      <button class="blog" onclick = "fun();">Plucky New Zealand hope to spring another surprise</button>
      <button class="blog" onclick = "fun();">Red hot Steven Taylor floors PNG</button>
      <button class="blog" onclick = "fun();">Pant set to be retained as DC captain</button>
    </section>


    </form>
  </body>
</html>
