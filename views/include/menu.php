<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>session</title>
  <link rel="stylesheet" href="../public/css/styleMenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script.js"></script>
</head>
<body>
<div class="sidenav">
            <button class="dropdown-btn">Utilisateur 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="user.php">Nouvel utilisateur</a>
              
            </div>
            
            <button class="dropdown-btn">Session 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="session.php">Nouvel session</a>
              
            </div>
            
            <button class="dropdown-btn">Référentiel 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="#">Nouveau référentiel</a>
              
            </div>
            <button class="dropdown-btn">Listes 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="listeUser.php">Liste des utilisateurs</a>
              <a href="listeSession.php">Liste des sessions</a>
              <a href="#">Liste des référentiels</a>
              



          <script>
          /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            } else {
            dropdownContent.style.display = "block";
            }
            });
          }
          </script>
                          
                      </div>
                                
                      </div>

    
</body>

</html>