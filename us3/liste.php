<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
                    <a class="nav-link collapsed text-primary border border-secondary" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Apprenant</a>
                  
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="#">Nouveau Apprenant</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="#">Liste Apprenants</a></li>
                            <li class="nav-item">
                                <div class="collapse small" id="submenu1sub1" aria-expanded="false">
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed text-primary border border-secondary" href="#submenu2" data-toggle="collapse" data-target="#submenu2">Apprenant</a>
                  
                    <div class="collapse" id="submenu2" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="#">Nouveau Apprenant</a></li>
                            <li class="nav-item"><a class="nav-link py-0 text-secondary " href="#">Liste Apprenants</a></li>
                            <li class="nav-item">
                                <div class="collapse small" id="submenu1sub2" aria-expanded="false">
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                
            </ul>

            <img src="img/sonatel.png" class="img-fluid fixed-bottom mb-3 ml-2" >
        </div>
        <div class="col pt-2" style='background:url("img/bg1.jpg"); background-size:cover;'>
            
         <h2 class="text-center text-primary">LISTE DES REFERENTIELS</h2>
         <div class="row ">
               <div class="col"></div>
                <div class="form-group col-3 ">
                  <label for=""></label>
                  <select class="form-control form-control-sm " name="" id="" >
                    <option>session</option>
                    <option>2018</option>
                    <option>2019</option>
                  </select>
                </div>

                
                
                <div class="col"></div>
                
                <div class="form-group col-3">
                  <label for=""></label>
                  <select class="form-control form-control-sm " name="" id="">
                    <option>référent digital</option>
                    <option>Développement Web</option>
                    <option>Data Artisan</option>
                  </select>
                </div>
         <div class="col"></div>
         </div>
         <div class="row">
         <div class="col"></div>
         <div class="col-9">

         <table class="table table-bordered " style="border:2px solid">
         <a href="#" id="imprimer"> <i class="fa fa-print" style="font-size:50px;position:absolute;left:-12%; top:10%;"></i></a>
         <h5>imprimer la liste</h5>
  <thead >
    <tr>
      <th scope="col" class="text-primary">Nom</th>
      <th scope="col" class="text-primary">Prénom</th>
      <th scope="col" class="text-primary">Profil</th>
      <th scope="col" class="text-primary">Sessions</th>
      <th scope="col" class="text-primary">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td><i class=""></i>
      <td><a href="#"><i class="fa fa-pencil w-50" style="font-size:30px;"></i></a>
      <a href=""><i class="fa fa-bars " style="font-size:30px;"></i> </a></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td><i class=""></i>
      <td><a href="#"><i class="fa fa-pencil w-50" style="font-size:30px;"></i></a>
      <a href=""><i class="fa fa-bars " style="font-size:30px;"></i> </a></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td><i class=""></i>
      <td><a href="#"><i class="fa fa-pencil w-50" style="font-size:30px;"></i></a>
      <a href=""><i class="fa fa-bars " style="font-size:30px;"></i> </a></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td><i class=""></i>
      <td><a href="#"><i class="fa fa-pencil w-50" style="font-size:30px;"></i></a>
      <a href=""><i class="fa fa-bars " style="font-size:30px;"></i> </a></td>
    </tr>
    
  
   
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

</style>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

