
<?php
           include_once('controller/db_connect.php');
           $query = $pdo->query("SELECT * FROM `apprenant` ");
           $apps= $query->fetchAll();
          // var_dump($users) ;

         ?>
         
<!doctype html>
<html lang="en">
  <head>
    <title>Liste des Apprenants</title>
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
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="planification.php">Nouveau planification</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="listeplannif.php">Listes des planifications</a></li>
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
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="apprenant.php">Nouveau apprenant</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="listeAp.php">Listes des apprenant</a></li>
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
            
         <h2 class="text-center text-primary">LISTE DES APPRENANTS</h2>
         <div class="row ">
               <div class="col"></div>
                <div class="form-group col-3 ">
                  <label for=""></label>
                  <select class="form-control form-control-sm " name="" id="" >
                    <option>période</option>
                    <option>du 1 au 7 octobre 2019</option>
                    <option>du 8 au 14 octobre 2019</option>
                    <option>du 15 au 21 octobre 2019</option>
                    <option>du 22 au 28 octobre 2019</option>
                  </select>
                </div>

                <button class="btn btn-danger btn-circle btn-lg" style="position: absolute;top: 15px;left: 5px;width: 140px;font-size: 20px;"><span class="fa fa-file-pdf-o">imprimer la liste</button>
    <!-- Login  -->

                
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle fa fa-user" data-toggle="dropdown">
                      ASTOU
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Mon profil</a>
                      <a class="dropdown-item" href="#"> Deconnexion</a>
                    </div>
                  </div>




                
                <div class="col"></div>
                
                <div class="form-group col-3">
                  <label for=""></label>
                  <select class="form-control form-control-sm " name="" id="">
                    <option>Menu</option>
                    <option>Thiebou dieune</option>
                    <option>Hamburger</option>
                    <option>Chawarma</option>
                  </select>
                </div>
         <div class="col"></div>
         </div>
         <div class="row">
         <div class="col"></div>
         <div class="col-9">


         <table class="table table-bordered " style="border:2px solid">
        
  <thead >
    <tr>
      <th scope="col" class="text-primary">Nom</th>
      <th scope="col" class="text-primary">Prénom</th>
      <th scope="col" class="text-primary">Profil</th>
      <th scope="col" class="text-primary">Sessions</th>
      <th scope="col" class="text-primary">Téléphone</th>
      <th scope="col" class="text-primary">Etat</th>
      <th scope="col" class="text-primary">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
                    foreach ($apps as $key => $ap) {
                   
                ?>
    <tr>
                       <td><?php echo $ap['NomAp'];?></td>
                       <td><?php echo $ap['PrenomAp'];?></td>
                       <td><?php echo $ap['Profil'];?></td>
                       <td><?php echo $ap['Session'];?></td>
                       <td><?php echo $ap['TelAp'];?></td>
                       <td><?php echo $ap['Etat'];?></td>
      <td><a href="form_ap.php?id=<?php echo $ap['id']; ?>"><i class="fa fa-pencil w-50" style="font-size:30px;"></i></a>
      <a href="#"><i class="fa fa-bars " style="font-size:30px;"></i> </a></td>
    </tr>

    <?php
                     
                    }
     ?>
  
   
  </tbody>
</table>

         
         </div>
         <div class="col"></div>
         
         </div>
        </div>
    </div>
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

.table thead th {
    border-bottom: 2px solid;
}
.table-bordered td, .table-bordered th {
    border: 1px solid black;
}
.fa
{
 color:#f48322;
}
h5
{
  position:absolute;
  top:1px;
  left:-16%;
}
.dropdown
{
  position:absolute;
  top:5px;
  left:86%;
  }

</style>

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



