<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données

    $referentiel=$_POST['referentiel'];
    $session=$_POST['session'];
    $effectif=$_POST['effectif'];

    
   //3-Insertion => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->prepare("INSERT INTO `detail`(`id`, `referentiel`, `session`, `effectif`) VALUES (null, ?, ?, ?)");

         $query->execute(array($referentiel,$annee,$session,$effectif));
         header("Location: ../views/listeRef.php");


?> 