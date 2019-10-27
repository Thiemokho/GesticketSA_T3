<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['Login']) and !empty($_POST['password'])  ){
    $Login= $_POST['Login'];
    $password=$_POST['password'];
   //3-Traitement => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->query("SELECT * FROM `connexion` WHERE login='$Login' and password='$password'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['ID'])){
            header("Location: ../choix.php");  
         }else{
            header("Location: ../connexion.php?erreur=Login ou Mot de passe Incorrect"); 
         }

}else{
    header("Location: ../connexion.php?erreur=Login ou Mot de passe Obligatoire");  
}



?>