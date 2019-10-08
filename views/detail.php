<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>session</title>
  <link rel="stylesheet" href="../public/css/styleDetail.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script.js"></script>
</head>
<body>
        <div class="page">
                <!-- Page connexion -->
                <div class="session">
              
                 <div class="titre"> <h1 >Detail Referentiel</h1> </div> 


                 <?php include 'include/menu.php';?>
                          
                      </div>
                                
                      </div>
                          


       <!-- logo -->
    <div class="logo">
            <img src="../public/img/sonatel.png" id="logo">
          </div> 
          
          
          <!-- formulaire -->
          <form action="../controller/detail.php" method="post">
              <div class="formulaire">

                <label for="NOM" id="label1"> Referentiel</label>
                <input type="text" name="referentiel" id="input1">
            
                <label for="ANNEE" id="label2"> Session</label>
                <input type="text" name="session" id="input2">
         
                <label for="effectif" id="label3"> Effectif</label>
                <input type="text" name="effectif" id="input3">

         
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