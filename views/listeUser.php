<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des utilisateurs</title>
  <link rel="stylesheet" href="../public/css/style_usr.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="script.js"></script>
</head>
<body>

	<a href="index.html" > <img src="../public/img/sonatel.png"  id="logo" >  </a>
	<div class="div1">
  <button class="dropdown-btn">Utilisateur 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="user.php">Nouvel utilisateur</a>
              
            </div>
            
            <?php include 'include/menu.php';?>
					  
	</div>
	
	 <div class="page1">
  <!-- Page connexion -->
  <div class="connexion">

   <div class="titre"> <h2 >LISTE DES UTILISATEURS</h2> </div>
  

      <!-- logo -->
    <div class="logo">
      
    </div>






<?php
     include_once('../controller/db_connect.php');
           $query = $pdo->query("SELECT * FROM `users` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>


         <table border="1" id="tableau">
                <thead>
                <tr>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>Login</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['prenom'];?></td>
                       <td><?php echo $user['login'];?></td>
                    </tr>
                <?php
                     
                    }
                 ?>
                </tbody>
         </table>


         </body>
</html> 