<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données

    $nom=$_POST['nom'];
    $annee=$_POST['annee'];
   

    
   //3-Insertion => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->prepare("INSERT INTO `referentiel`(`id`, `nom`, `annee`) VALUES (null, ?, ?)");

         $query->execute(array($nom,$annee));
         header("Location: ../views/detail.php");


?> 