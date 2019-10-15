<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
 if(!empty($_POST['nom']) and !empty($_POST['annee'])  ){
   
    $Nom= $_POST['nom'];
    $Annee=$_POST['annee'];
   //3-Traitement => Connexion dans une BD
   include_once('db_connect.php');
            //var_dump("INSERT INTO `referentiel` VALUES ($session,$referentiel,$effectif)"); die();
            $req = $pdo->exec("INSERT INTO `referentiel` VALUES (NULL,'$Nom','$Annee')");  
       
            header("Location: ../views/listeUser.php");  
     

        }else{
            header("Location: ../views/nouveau.php?erreur=Formulaire Obligatoire");  
        }


?>