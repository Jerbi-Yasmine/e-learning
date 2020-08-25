<?php
//error_reporting(0);
include('includes/session.php') ;
include('includes/cours-bd.php') ;
require('includes/connexion.php'); 
//if(!est_connecte() || (statut()!=0)) header('location:formconnexion.php') ;
?>

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
    <li><a <?php if(statut()==1):?> href="espace-prof1.php" <?php elseif (statut()==2): ?>href="espace-etudiant.php" <?php else: ?> href="administrateur.php" <?php endif; ?> >Mon Espace&nbsp;&nbsp;</a></li>

                            </ul>


                            <!-- Register / Login -->

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (est_connecte() && statut()!=0) echo $_SESSION['nom']; else echo "Administrateur";?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.html">Profile</a>
                                            <a type="submit" href="deconnexion.php"class="dropdown-item"  name="deconnexion">Déconnexion</a>
                
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
                       <?php
                                    include('includes/supprimer.php');
                                    
                                    ?>