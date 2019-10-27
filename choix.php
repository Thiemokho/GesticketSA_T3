<?php
           include_once('controller/db_connect.php');
           $query = $pdo->query("SELECT * FROM `menu` ");
           $menus= $query->fetchAll();
          // var_dump($users) ;

         ?>

<!doctype html>
<html lang="en">
  <head>
    <title>CHOIX MENU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      

        
     
        <div class="col pt-2" style='background:url("img/bg1.jpg"); background-size:cover;'>

            <!-- icon profil -->

        <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle fa fa-user float-right" data-toggle="dropdown">
                      Apprenant
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Mon profil</a>
                      <a class="dropdown-item" href="connexion.php"> Deconnexion</a>
                    </div>
                  </div>


        <h1 class="text-primary" style="margin-left:20%; font-size:60px;"> CHOIX DU MENU</h1>

        <!-- Default form register -->
       



  <div class="table">
  
  
  <form class="text-center border border-light p-5 col-5 mx-5 " action="controller/choix.php" style="background: black;opacity: 0.4; border-radius:10px;" method="POST">

  <div class="input-group mb-3 mt-5">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Nom du plat</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="Nom">
  <option></option>

<?php
      foreach ($menus as $key => $menu) {
        ?>
      <option value="<?php  echo $menu['ID']; ?>"> <?php  echo $menu['Nom_plat']; ?>
      
        </option>
      <?php }  ?>
  </select>
</div>


<div class="jour">
      <label for=""><i class="fa fa-list-alt mr-2"></i>JOUR </label>
      <input type="date" name="Jour">
</div>



    <!-- Sign up button -->
    <button class="btn btn-info my-5 btn-block bg-primary" type="submit" name="VALIDER">VALIDER</button>

  

    <hr>

 

</form>
</div>

         
               <!-- code php -->
    <?php 
        if(isset($_GET['erreur'])){
             echo $_GET['erreur'];file:///var/www/html/Test_Ticket/views/connexion.php

         }
         
?> 
         
       
</div>
<style type="text/css">
body, html {
    height: 100%;
}

#sidebar {
    min-width: 130px;
}
.nav-link[data-toggle].collapsed:after {
    content: "▾";
}
.nav-link[data-toggle]:not(.collapsed):after {
    content: "▴";
}

.text-primary {
    color: #2b9595 !important;
}
.text-secondary {
    color: #ff730e !important;
}

.img-fluid {
    max-width: 50%;
    height: 13%;
}

.table
{
    width:80%;
    position:absolute;
    left:20%;
    color:orange;
}

.bg-primary {

    background-color: #2b9595 !important;

}   
.jour
{
  font-size:20px;
  position:absolute;
  top:2px;

}

</style>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

