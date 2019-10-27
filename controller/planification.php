<?php

 //2-validation des données
 include_once('db_connect.php');

 if (isset($_POST['CREER'])) {
    
    $id = $_POST['ID'];
    $Jour = $_POST['Jour_planif'];
    $Menu1 = $_POST['Menu1'];
    $Menu2 = $_POST['Menu2'];
    $Menu3 = $_POST['Menu3'];
    $Menu4 = $_POST['Menu4'];
    $Menu5 = $_POST['Menu5'];


    $pdo-> exec("INSERT INTO `planification` (`ID`, `Jour_planif`, `Menu1`, `Menu2`, `Menu3`, `Menu4`, `Menu5`) VALUES (NULL, '$Jour', '$Menu1', '$Menu2', '$Menu3', '$Menu4', '$Menu5')");
  
    //var_dump($pdo);die();
   
   header("Location: ../listePlannif.php");


 }

?> 