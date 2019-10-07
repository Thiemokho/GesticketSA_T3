<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <link rel="stylesheet" href="../public/css/stylesession.css">
  <script src="script.js"></script>
</head>
<body>
        <div class="page">
                <!-- Page connexion -->
                <div class="session">
              
                 <div class="titre"> <h1 >INSCRIPTION</h1> </div> 

                 
                 <div class="div1">
                    <div class="vertical-menu">
                      <a href="#" class="active">Utilisateurs</a>
                      <div class="dropdown">
                      <button class="dropbtn" >session</button>
                      <div class="dropdown-content">
                        <a href="session.php">Nouvel session</a>
                        <a href="listeSession.php">Liste des sessions</a>
                        <a href="listeUser.php">Liste des utilisateurs</a>
                      </div>
            </div>
                      
            </div>
                 


       <!-- logo -->
    <div class="logo">
            <img src="../public/img/sonatel.png" id="logo">
          </div> 
          
          
          <!-- formulaire -->
          <form action="../controller/user.php" method="post">
              <div class="formulaire">

                <label for="NOM" id="label1"> NOM</label>
                <input type="text" name="nom" id="input1">
            
                <label for="ANNEE" id="label2"> PRENOM</label>
                <input type="text" name="prenom" id="input2">
         
                <label for="DATE DEBUT" id="label3"> PROFIL</label>
                <input type="text" name="profil" id="input3">

                <label for="DATE FIN" id="label4"> LOGIN</label>
                <input type="text" name="login" id="input4">
         
                <label for="EFFECTIF TOTAL" id="label5"> MOT DE PASSE</label>
                <input type="password" name="password" id="input5">
         
                <div class="annuler"><input type="submit" value="Annuler" id="annuler"></div>
                <div class="connexion1"><input type="submit" name="envoyer" value="Envoyer" id="connexion"></div>
     </form>

                  <!-- code php -->
    <?php 
        if(isset($_GET['erreur'])){
             echo $_GET['erreur'];file:///var/www/html/Test_Ticket/views/session.php

         }
 
?>
    

  
  

  

        </body>
        </html>