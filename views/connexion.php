
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>

    <div class="page1">
  <!-- Page connexion -->
  <div class="connexion">

   <div class="titre"> <h1 >CONNEXION</h1> </div>
  

      <!-- logo -->
    <div class="logo">
      <a href="session.html"><img src="../public/img/sonatel.png" alt="sonatel" id="logo"> </a>
    </div>

      <!-- formulaire -->
          <form action="" method="post">
          <div class="formulaire">
            <label for="Login" id="label1"> LOGIN</label> <img src="../public/img/user1.png" class="icon1"> </br>
            

            <label for="password" id="label2"> Mot de passe</label> <img src="../public/img/cle.png" class="icon2" >
            

          </form>
        </div>
  </div>

  <h5>Gesticket SA 1.2.0</h5>


</div> 

     <!-- code php -->
    <?php 
        if(isset($_GET['erreur'])){
             echo $_GET['erreur'];file:///var/www/html/Test_Ticket/views/connexion.php

         }
         
?>
    </div>
    
      <form action="../controller/connexion.php" method="post" style="margin: 200px 0px 0px 500px;">
         <div>
              <input type="text" name="login" id="input1">
         </div>
         <div>
              <input type="password" name="password" id="input2">
         </div>
         <div>
              <input type="reset" name="" id="annuler">
              <input type="submit" name="" id="connexion">
         </div>
      
      </form> 
    
</body>


</html>