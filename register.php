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
<<<<<<< HEAD
=======

>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
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
                        <a class="nav-brand" href="acceuil.php"><img src="img\Logoo.jpg" alt=""></a>
    
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
                                    <li ><a href="acceuil.php">Acceuil</a></li>
                                    <li><a href="cours.php">Cours en ligne</a></li>
                                </ul>

    
                                <!-- Register / Login -->
                                <div class="register-login-area">
                                    <a href="register.php" class="btn">Inscription</a>
    
<<<<<<< HEAD
<<<<<<< HEAD:register.php
                                    <a type="button" class="btn active" href="formconnexion.php">Connexion</a>
=======
                                    <a type="button" class="btn active" href="#">Connexion</a>
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce:formconnexion.php
=======
                                    <a type="button" class="btn active" href="formconnexion.php">Connexion</a>
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
    
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
<<<<<<< HEAD
<<<<<<< HEAD:register.php
=======
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
  <div class="container" style="width: 10cm;height: 15cm;border: solid;border-width: 0.05cm;">
    <h1 style="font-family:candara ">Inscription</h1>
          <form action="register.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nom">Nom d'Utilisateur</label>
              <input type="text" class="form-control form-control-sm" name="nom" required value="<?php if(isset($_POST['nom'])) echo $_POST['nom'] ;?>">
              <?php
<<<<<<< HEAD
              include ("inscription.php") ;
=======
              include ("manipulation.php") ;
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
              if (inscription()=="a") echo "<p style='color:red;'>Nom d'utilisateur non disponible</p>" ;
              ?>
            </div>
            <div class="form-group">
              <label for="email">Adresse E-mail</label>
              <input type="email" class="form-control form-control-sm" name="email" required value="<?php if(isset($_POST['email'])) echo $_POST['email'] ;?> ">
              <?php
              if (inscription()=="b") echo "<p style='color:red;'>Ce Compte existe déja</p>" ;
              ?>
            </div>
            <div class="form-group">
              <label for="mdp">Mot de Passe</label>
              <input type="password" class="form-control form-control-sm" name="mdp" required>
              <?php if (inscription()=="c")
              echo "<p style='color:red;'>Mot de Passe trop Court</p>" ;
              ?>
            </div>
            <hr>
            <p>Vous Visiter Le Site en tant que : </p>
            <div class="custom-control custom-radio">
              <input type="radio" id="etudiant" name="statut" class="custom-control-input" value="2" required <?php if(isset($_POST['statut']) && $_POST["statut"]=="2")   echo "checked=\"checked\"" ?>>
              <label class="custom-control-label" for="etudiant">Etudiant</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="enseignant" name="statut" class="custom-control-input" value="1" <?php if(isset($_POST['statut']) && $_POST["statut"]=="1")   echo "checked=\"checked\"" ?>>
              <label class="custom-control-label" for="enseignant">Enseignant</label>
            </div></br>
            <button type="submit" class="btn btn-info btn-lg btn-block">S'inscrire</button>
            <a style="margin-left:2cm;text-decoration:underline" href="formconnexion.php">Vous avez déja un compte ?</a>
<<<<<<< HEAD
=======
  <div class="container" style="width: 10cm;height: 10cm;border: solid;border-width: 0.05cm;margin-top:2.5cm;">
    <h1 style="font-family:candara ">Inscription</h1>
          <form action="formconnexion.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="email">Adresse E-mail</label>
              <input type="email" class="form-control form-control-sm" name="email">
            </div>
            <div class="form-group">
              <label for="mdp">Mot de Passe</label>
              <input type="password" class="form-control form-control-sm" name="mdp">
            </div>
            <hr>

            <?php 
    include('session.php');
    if(authentification())
    echo"<div class='text-danger' style='margin-left : 1.5cm;'><b>Mot de Passe ou E-mail Incorrecte</b></div>            ";


    ?>
                      <button type="submit" class="btn btn-primary btn-lg btn-block" name="connexion">Connexion</button>
                      <button type="submit" class="btn btn-success btn-lg btn-block" name="connexion">Inscription</button>

    
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce:formconnexion.php
=======
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
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
                        <a href="acceuil.php"><p style="font-size: xx-large;font-weight: bolder;">Glory</p></a>
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
<<<<<<< HEAD
                <input type="text" class="form-control form-control-sm" id="mail" required >
              </div>
              <div class="form-group">
                <label for="passwd">Mot de Passe</label>
                <input type="password" class="form-control form-control-sm" id="passwd" required>
              </div> 
              <hr>
              <button type="submit" class="btn btn-success btn-lg btn-block">Connexion</button>
              
=======
                <input type="text" class="form-control form-control-sm" id="mail" >
              </div>
              <div class="form-group">
                <label for="passwd">Mot de Passe</label>
                <input type="password" class="form-control form-control-sm" id="passwd">
              </div> 
              <hr>
              <button type="submit" class="btn btn-success btn-lg btn-block">Connexion</button>
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
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



