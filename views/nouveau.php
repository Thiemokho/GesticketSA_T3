<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>session</title>
  <link rel="stylesheet" href="../public/css/nouveau.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script.js"></script>
</head>
<body>
        <div class="page">
                <!-- Page connexion -->
                <div class="session">
              
                 <div class="titre"> <h1 >NOUVEAU REFERENTIEL</h1> </div> 


                 <?php include 'include/menu.php';?>
                          
                      </div>
                                
                      </div>
                          


       <!-- logo -->
    <div class="logo">
            <img src="../public/img/sonatel.png" id="logo">
          </div> 
          
          
          <!-- formulaire -->
          <form action="../controller/nouveaur.php" method="post">
              <div class="formulaire">
            
            

                <label for="NOM" id="label1"> NOM</label>
                <input type="text" name="nom" id="input1">
            
                <label for="ANNEE" id="label2"> ANNEE</label>
                <input type="date" name="annee" id="input2">
         
         
                <div class="annuler"><input type="submit" value="Annuler" id="Annuler"></div>
                <div class="connexion1"><input type="submit" value="Créer" id="Créer"></div>

                                  <!-- code php -->
     
     <?php
     if(isset($_GET['erreur'])){
     echo $_GET['erreur'];}
     ?>

    

     </form>
     </div>

  
  

  

        </body>
        </html>