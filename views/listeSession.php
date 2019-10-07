<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des utilisateurs</title>
  <link rel="stylesheet" href="../public/css/style_usr.css">
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
					  
	</div>
	
	 <div class="page1">
  <!-- Page connexion -->
  <div class="connexion">

   <div class="titre"> <h2 >LISTE DES SESSIONS</h2> </div>
  

      <!-- logo -->
    <div class="logo">
      
    </div>

    <!-- trait -->
    <div class="trait">

    </div>



    	



</body>
</html> 

<?php
     include_once('../controller/db_connect.php');
           $query = $pdo->query("SELECT * FROM `session` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>

    <div id="tableau">
         <table border="1" >
                <thead>
                <tr>
                     <th>Nom</th>
                     <th>Annee</th>
                     <th>Date debut</th>
                     <th>Date fin</th>
                     <th>effectif</th>
                </tr>
                </thead>
                <tbody>
                </div>

                <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['annee'];?></td>
                       <td><?php echo $user['date_debut'];?></td>
                       <td><?php echo $user['date_fin'];?></td>
                       <td><?php echo $user['effectif'];?></td>
                    </tr>
                <?php
                     
                    }
                 ?>
                </tbody>
         </table>