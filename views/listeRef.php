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

            
            <?php include 'include/menu.php';?>
              

	</div>
					  
	</div>
	
	 <div class="page1">
  <!-- Page connexion -->
  <div class="connexion">

   <div class="titre"> <h2 >LISTE DES REFERENTIELS</h2> </div>
  

      <!-- logo -->
    <div class="logo">
      
    </div>


    	



</body>
</html> 

<?php
     include_once('../controller/db_connect.php');
           $query = $pdo->query("SELECT * FROM `referentiel` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>

    <div id="tableau">
         <table border="1" >
                <thead>
                <tr>
                     <th>Nom</th>
                     <th>Annee</th>
                     <th>Action</th>
                    
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
                       <td><input type="button" value="modifier" id="btn_mod">  <input type="button" value="supprimer" id="btn_sup"> </td>
                       
                    </tr>
                <?php
                     
                    }
                 ?>
                    
                    
                </tbody>
         </table>