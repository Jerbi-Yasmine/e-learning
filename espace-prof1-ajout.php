<?php
//error_reporting(0);
include('session.php') ;
include('cours-bd.php') ;
require('connexion.php'); ?> 
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

    <!-- ##### Header Area Start ##### -->
  <header class="header-area">
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="acceuil.php"><img src="img/logoo.jpg" alt=""></a>

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
                        <div></div>

                         <!-- Nav Start -->
                         <div id="a" class="classynav">
                            <ul>
                                <li ><a href="acceuil.php">Acceuil</a></li>
                                <li><a href="cours.php">Cours en ligne</a></li>
<<<<<<< HEAD:espace-prof1.php
    <li><a <?php if(statut()==1):?> href="espace-prof1.php" <?php elseif (statut()==2): ?>href="espace-etudiant.php" <?php else: ?> href="administrateur.php" <?php endif; ?> >Mon Espace&nbsp;&nbsp;</a></li>

=======
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce:espace-prof1-ajout.php
                            </ul>


                            
                            <!-- Register / Login -->

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (est_connecte()) echo $_SESSION['nom'];?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.html">Profile</a>
<<<<<<< HEAD:espace-prof1.php
                                            <a type="submit" href="deconnexion.php"class="dropdown-item"  name="deconnexion">Déconnexion</a>
                
=======
                                            <a type="submit" href="acceuil.php"class="dropdown-item"  name="deconnexion">Déconnexion</a>
          
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce:espace-prof1-ajout.php
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img\divers\profile.jpg" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                       </header> </br>
                       <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/divers/ens.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2 style="font-family:candara">Le Bon Enseignant Fait Le Bon Eleve</h2>
                        <button  class="btn clever-btn " data-toggle="collapse" href="#creation" >Créer un Groupe</button>

                    </div>
                    <div class="collapse multi-collapse" id="creation">
                        <div class="container" style="padding:0.5cm;">
<<<<<<< HEAD:espace-prof1.php
                            <form action="espace-prof2.php" method="POST">
                                <div class="row">
                                  <div class="col">
                                    <input type="text" class="form-control" placeholder="Donner un titre pour la Matiére" name="matiere" required>
                                  </div>
                                </div>
                                <div style="margin-top: 0.2cm;padding-left: 10.5cm;">
                                    <button type="submit" class="btn btn-warning btn-lg" aria-hidden="true" ><b>Ajouter</b></button>
=======
                            <form action="espace-prof1.php">
                                <div class="row">
                                  <div class="col">
                                    <input type="text" class="form-control" placeholder="Matiére">
                                  </div>
                                  <div class="col">
                                    <input type="text" class="form-control" placeholder="Groupe">
                                  </div>
                                </div>
                                <div style="margin-top: 0.2cm;padding-left: 10.5cm;">
                                    <button type="submit" class="btn btn-warning btn-lg" aria-hidden="true" name="btajout"><b>Ajouter</b></button>
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce:espace-prof1-ajout.php

                                </div>

                              </form>
                        </div>
                        
                        </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- ##### Hero Area End ##### -->
                       
    <!--espace prof-->


    <section class="blog-area blog-page section-padding-100" style="margin: 0.5cm;">

        <div class="row">
            <!-- Single Blog Area -->
<<<<<<< HEAD:espace-prof1.php
           <?php
           ajout_matiere();
           ecriture_fichier();
           $reponse =$bd->query("SELECT nom FROM matiere WHERE prof= '" . $_SESSION['nom'] . "' ");
             while ($entree = $reponse->fetch()) 
            {
                $matiere = $entree['nom'] ;
                $redirection = $matiere.$_SESSION['nom'].".php" ;
                echo "<div class='col-12 col-lg-6'>
                <div class='single-blog-area mb-100 wow fadeInUp' data-wow-delay='250ms'>
                    <img style='width:1000px;height:300px'src='img\matiere.jpg' alt=''>
                    <div class='blog-content'>
                        <a href='".$redirection."' class='blog-headline'>
                            <h3 style='margin-left:3.5cm;'>".ucwords($matiere)."</h3>
                        </a>
                    </div>
                </div>
            </div>";
       
            }
            ?> 
         
=======
            <?php
            if(isset($_POST['btajout']))

                echo "<div class='col-12 col-lg-6'>
                <div class='single-blog-area mb-100 wow fadeInUp' data-wow-delay='250ms'>
                    <img src='img/blog-img/1.jpg' alt=''>
                    // Blog Content 
                    <div class='blog-content'>
                        <a href='#' class='blog-headline'>
                            <h4>Orienté Objet </h4>
                        </a>
                        <div class='meta d-flex align-items-center'>
                            <a href='#'>ii1E</a>
                        </div>
                    </div>
                </div>
            </div>";
            ?> 
            
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce:espace-prof1-ajout.php
            </div>


        
        
                
</section>
  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
    <!-- Top Footer Area -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
<<<<<<< HEAD:espace-prof1.php
                        <a href="acceuil.php"><p style="font-size: xx-large;font-weight: bolder;">Glory</p></a>
=======
                        <a href="login-acceuil"><p style="font-size: xx-large;font-weight: bolder;">Glory</p></a>
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce:espace-prof1-ajout.php
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
    <!-- ##### Footer Area End ##### -->

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
