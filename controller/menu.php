<?php

 //2-validation des données
 include_once('db_connect.php');




    $id = $_POST['ID'];
    $Nom = $_POST['Nom_plat'];
    
    $query = $pdo->prepare("INSERT INTO `menu`(`ID`, `Nom_plat`) VALUES (null, ?)");  
    $query->execute(array($Nom));
    //var_dump($pdo);die();
   
   
         header("Location: ../liste.php");


?> 