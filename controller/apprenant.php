<?php

 //2-validation des données
 include_once('db_connect.php');

 if (isset($_POST['VALIDER'])) {
    
    $id = $_POST['ID'];
    $Nom = $_POST['NomAp'];
    $Prenom = $_POST['PrenomAp'];
    $Profil = $_POST['Profil'];
    $Session = $_POST['Session'];
    $Tel = $_POST['TelAp'];
    $Etat = $_POST['Etat'];


    $pdo-> exec("INSERT INTO `apprenant` (`ID`, `NomAp`, `PrenomAp`, `Profil`,`Session`, `TelAp`, `Etat`) VALUES (NULL, '$Nom', '$Prenom', '$Profil','$Session', '$Tel', '$Etat')");
  
    //var_dump($pdo);die();
   
   header("Location: ../listeAp.php");


 }

?> 