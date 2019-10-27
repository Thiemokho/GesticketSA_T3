<?php

 //2-validation des données
 include_once('db_connect.php');

 if (isset($_POST['VALIDER'])) {
    
    $id = $_POST['ID'];
    $Nom = $_POST['Nom'];
    $Jour = $_POST['Jour'];

    $pdo-> exec("INSERT INTO `choix` (`ID`, `Jour`, `Nom`) VALUES (NULL, '$Jour', '$Nom')");
  
    //var_dump($pdo);die();
   
   header("Location: ../choixmenu.php");


 }

?> 