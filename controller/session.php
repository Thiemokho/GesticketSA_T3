<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données

    $nom=$_POST['nom'];
    $annee=$_POST['annee'];
    $date_debut=$_POST['date_debut'];
    $date_fin=$_POST['date_fin'];
    $effectif=$_POST['effectif'];


    
   //3-Insertion => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->prepare("INSERT INTO `session`(`id`, `nom`, `annee`, `date_debut`, `date_fin`, `effectif`) VALUES (null, ?, ?, ?, ?, ?)");

         $query->execute(array($nom,$annee,$date_debut,$date_fin,$effectif));
         header("Location: ../views/listeSession.php");


?> 