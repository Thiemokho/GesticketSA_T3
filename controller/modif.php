<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
 include_once('db_connect.php');


if (isset($_POST['modifier'])) {

    $id = $_POST['id'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Profil = $_POST['Profil'];
    $Session = $_POST['Seesion'];
    $Tel = $_POST['Tel'];

    $pdo->exec("UPDATE inscription SET `Nom` = '$Nom', `Prenom` = '$Prenom', `Profil` = '$Profil', `Session` = '$Session', `Tel` = '$Tel' WHERE `id` = $id ");
    //var_dump($pdo);die();
}
   
   
         header("Location: ../liste.php");


?> 