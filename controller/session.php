<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
 if(!empty($_POST['nom']) and !empty($_POST['annee']) and !empty($_POST['date_debut']) and !empty($_POST['date_fin']) and !empty($_POST['effectif'])){
    $nom= $_POST['nom'];
    $annee=$_POST['annee'];
    $date_debut=$_POST['date_debut'];
    $date_fin=$_POST['date_fin'];
    $effectif=$_POST['effectif'];
   //3-Traitement => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->query("SELECT * FROM `session` WHERE nom='$nom' and annee='$annee' and date_debut='$date_debut' and date_fin='$date_fin' and effectif='$effectif'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['id'])){
            header("Location: ../views/listeSession.php");  
         }else{
            header("Location: ../views/session.php?erreur=formulaire Incorrect"); 
         }

      }else{
         header("Location: ../views/session.php?erreur=Formulaire Obligatoire");  
     }
     



?> 




