<!doctype html>
<html lang="en">
  <head>
    <title>NOUVEAU MENU</title>
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
        <div class="col-2 collapse d-md-flex px-1 pt-2 h-100 border border-secondary" id="sidebar">
            <ul class="nav flex-column w-100">
               
                <li class="nav-item">
                    <a class="nav-link collapsed text-primary border border-secondary" href="#submenu1" data-toggle="collapse" data-target="#submenu1"> <i class="fa fa-list " style="padding-right:10px;"></i>MENU </a> 
                  
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="menu.php">Nouveau menu</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="liste.php">Liste des menus</a></li>
                            <li class="nav-item">
                                <div class="collapse small" id="submenu1sub1" aria-expanded="false">
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed text-primary border border-secondary" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><i class="fa fa-dot-circle-o"  style="padding-right:10px;"></i>Choix</a>
                  
                    <div class="collapse" id="submenu2" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="choix.php">Nouveau choix</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="choix_menu.php">Listes des choix</a></li>
                            <li class="nav-item">
                                <div class="collapse small" id="submenu1sub1" aria-expanded="false">
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed text-primary border border-secondary" href="#submenu3" data-toggle="collapse" data-target="#submenu3"><i class="fa fa-calendar-o" style="padding-right:10px;"></i>Planification</a>
                  
                    <div class="collapse" id="submenu3" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="choix.php">Nouveau planification</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="choix_menu.php">Listes des planifications</a></li>
                            <li class="nav-item">
                                <div class="collapse small" id="submenu1sub1" aria-expanded="false">
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed text-primary border border-secondary" href="#submenu4" data-toggle="collapse" data-target="#submenu4"><i class="fa fa-user" style="padding-right:10px;"></i>Apprenant</a>
                  
                    <div class="collapse" id="submenu4" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="#">Nouveau apprenant</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="#">Listes des apprenant</a></li>
                            <li class="nav-item">
                                <div class="collapse small" id="submenu1sub1" aria-expanded="false">
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>



            <img src="img/sonatel.png" class="img-fluid fixed-bottom mb-3 ml-2" >
        </div>
        <div class="col pt-2" style='background:url("img/bg1.jpg"); background-size:cover;'>
        <h1 class="text-primary mt-3" style="margin-left:22%; font-size:50px;">NOUVEAU MENU</h1>


        <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle fa fa-user" data-toggle="dropdown">
                      ASTOU
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Mon profil</a>
                      <a class="dropdown-item" href="connexion.php"> Deconnexion</a>
                    </div>
                  </div>
        <!-- Default form register -->
  <div class="table">
  
  <form class="text-center border border-light p-5 col-5 mx-5 " action="controller/menu.php" style="background: black;opacity: 0.4; border-radius:10px;" method="POST">

  

    <div class="form-row mb-4" >
    
  

    <!-- E-mail -->
    <div class="input-group-prepend">
    <label class="input-group-text bg-warning " for="inputGroupSelect01" style="margin-left: 80px;position: relative;top: -40px;">Nom du plat</label>
  </div>
    <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="THIÉBOU DIEUNE" name="Nom_plat">




    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block bg-primary" type="submit">CREER</button>
    <button class="btn btn-info my-1 btn-block bg-danger" type="reset">ANNULER</button>

  

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
    top:20%;
}

.bg-primary {

    background-color: #2b9595 !important;

}   
.dropdown
{
    position:absolute;
    top:10px;
    right:10px;
}

</style>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

