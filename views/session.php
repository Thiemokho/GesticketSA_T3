<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>session</title>
  <link rel="stylesheet" href="../public/css/stylesession.css">
  <script src="script.js"></script>
</head>
<body>
        <div class="page">
                <!-- Page connexion -->
                <div class="session">
              
                 <div class="titre"> <h1 >SESSION</h1> </div> 

                 
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
          <form action="../controller/session.php" method="post">
              <div class="formulaire">

                <label for="NOM" id="label1"> NOM</label>
                <input type="text" name="nom" id="input1">
            
                <label for="ANNEE" id="label2"> ANNEE</label>
                <input type="text" name="annee" id="input2">
         
                <label for="DATE DEBUT" id="label3"> DATE DEBUT</label>
                <input type="date" name="date_debut" id="input3">

                <label for="DATE FIN" id="label4"> DATE FIN</label>
                <input type="date" name="date_fin" id="input4">
         
                <label for="EFFECTIF TOTAL" id="label5"> EFFECTIF TOTAL</label>
                <input type="text" name="effectif" id="input5">
         
                <div class="annuler"><input type="submit" value="Annuler" id="annuler"></div>
                <div class="connexion1"><input type="submit" value="Connexion" id="connexion"></div>
     </form>

                  <!-- code php -->
    <?php 
        if(isset($_GET['erreur'])){
             echo $_GET['erreur'];file:///var/www/html/Test_Ticket/views/session.php

         }
 
?>
    

  
  

  

        </body>
        </html>