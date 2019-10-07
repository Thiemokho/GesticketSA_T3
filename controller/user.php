<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données

    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $profil=$_POST['profil'];
    $login=$_POST['login'];
    $password=$_POST['password'];


    
   //3-Insertion => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->prepare("INSERT INTO `users`(`id`, `nom`, `prenom`, `profil`, `login`, `password`) VALUES (null, ?, ?, ?, ?, ?)");

         $query->execute(array($nom,$prenom,$profil,$login,$password));
         header("Location: ../views/listeUser.php");


?> 