<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Glory</title>

    <!-- Favicon -->
    <link rel="icon" href="img/Logo.jpg">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">

            <!-- Navbar Area -->
            <div class="clever-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cleverNav">
    
                        <!-- Logo -->
                        <a class="nav-brand" href="acceuil.html"><img src="img\Logoo.jpg" alt=""></a>
    
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
    
                        <!-- Menu -->
                        <div class="classy-menu">
    
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
    
                            <!-- Nav Start -->
                            <div id="a" class="classynav">
                                <ul>
                                    <li ><a href="acceuil.html">Acceuil</a></li>
                                    <li><a href="cours.html">Cours en ligne</a></li>
                                </ul>

    
                                <!-- Register / Login -->
                                <div class="register-login-area">
                                    <a href="register.html" class="btn">Inscription</a>
    
                                    <a type="button" class="btn active" data-toggle="modal" data-target="#login">Connexion</a>
    
                                </div>
    
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
        <!-- ##### Header Area End ##### -->
  <div class="container" style="width: 10cm;height: 13cm;border: solid;border-width: 0.05cm;">
    <h1 style="font-family:candara ">Inscription</h1>
          <form action="espace.html" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nom">Nom d'Utilisateur</label>
              <input type="text" class="form-control form-control-sm" name="nom" >
            </div>
            <div class="form-group">
              <label for="email">Adresse E-mail</label>
              <input type="email" class="form-control form-control-sm" name="email">
            </div>
            <div class="form-group">
              <label for="mdp">Mot de Passe</label>
              <input type="password" class="form-control form-control-sm" name="mdp">
            </div>
            <hr>
            <p>Vous Visiter Le Site en tant que : </p>
            <div class="custom-control custom-radio">
              <input type="radio" id="etudiant" name="statut" class="custom-control-input" value="0">
              <label class="custom-control-label" for="etudiant">Etudiant</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="enseignant" name="statut" class="custom-control-input" value="1">
              <label class="custom-control-label" for="enseignant">Enseignant</label>
            </div></br>
            <button type="submit" class="btn btn-info btn-lg btn-block">S'inscrire</button>
          </form>
      </div>

    </div>
  </div>

</div></br>

 <!-- ##### Footer Area Start ##### -->
 <footer class="footer-area">
    <!-- Top Footer Area -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="acceuil.html"><p style="font-size: xx-large;font-weight: bolder;">Glory</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- ##### Footer Area Start ##### -->

<!--Modal login -->
<div class="container">      
    <div class="modal fade" id="login">
      <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
              <div class="modal-header">
                <h1 style="font-family:candara;margin-left: 3.5cm;">Connexion</h1>
  </div>
          <div class="modal-body">
            <form  >
              <div class="form-group">
                <label for="mail">Adresse E-mail</label>
                <input type="text" class="form-control form-control-sm" id="mail" >
              </div>
              <div class="form-group">
                <label for="passwd">Mot de Passe</label>
                <input type="password" class="form-control form-control-sm" id="passwd">
              </div> 
              <hr>
              <button type="submit" class="btn btn-success btn-lg btn-block">Connexion</button>
            </form>
        </div>
  
      </div>
    </div>
  
  </div>


 <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>

<?php
include('connexion.php') ;
?>

