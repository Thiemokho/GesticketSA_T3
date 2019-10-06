<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données

    $nom= $_POST['nom'];
    $prenom=$_POST['prenom'];
    $profil=$_POST['profil'];
    $login=$_POST['login'];
    $prenom=$_POST['prenom'];
    $password=$_POST['password'];
   //3-Traitement => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->query("SELECT * FROM `user` WHERE nom='$nom' and prenom='$annee' and profil='$profil' and login='$login' and password='$password'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['id'])){
            header("Location: ../views/listeUser.php");  
         }else{
            header("Location: ../views/listeUser.php?erreur=Formulaire Incorrect"); 
         }




?>