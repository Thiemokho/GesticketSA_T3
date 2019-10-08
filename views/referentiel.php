<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>session</title>
  <link rel="stylesheet" href="../public/css/styleMenu.css">
  <link rel="stylesheet" href="../public/css/styleRef.css">
  <script src="script.js"></script>
</head>
<body>

<div class="page">
                <!-- Page connexion -->
                <div class="session">
              
                      <div class="titre"> <h1 >REFERENTIEL</h1> </div> 
                 </div>
                                
 </div>
                          


       <!-- logo -->
    <div class="logo">
            <img src="../public/img/sonatel.png" id="logo">
    </div> 
          
          
          <!-- formulaire -->
          <form action="../controller/referentiel.php" method="post">
              <div class="formulaire">

                <label for="NOM" id="label1"> NOM</label>
                <input type="text" name="nom" id="input1">
            
                <label for="ANNEE" id="label2"> ANNEE</label>
                <input type="text" name="annee" id="input2">
         
               
         
                <div class="annuler"><input type="submit" value="Annuler" id="annuler"></div>
                <div class="connexion1"><input type="submit" value="Connexion" id="connexion"></div>
     </form>
<?php include 'include/menu.php';?>

</body>

</html>