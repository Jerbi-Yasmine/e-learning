<?php
include('includes/session.php');
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
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
<?php if ((!est_connecte())):?>
        <<!-- Navbar Area -->
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
    
                                    <a type="button" class="btn active" href="formconnexion.php">Connexion</a>
    
                                </div>
    
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->

        <?php else :
        ?>
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
                                <li><a  <?php if(statut()==1):?> href="espace-prof1.php" <?php elseif (statut()==2): ?>href="espace-etudiant.php" <?php else: ?> href="administrateur.php" <?php endif; ?> >Mon Espace&nbsp;&nbsp;</a></li>

                            </ul>


                            <!-- Register / Login -->

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (est_connecte()) echo $_SESSION['nom'];?></a>
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
                       <!-- ##### Hero Area Start ##### -->


<?php endif; ?>
         <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-100" style="background-image: url(img/bg-img/bg2.jpg); height: 500px; ;" >
       
         
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <div class="container-fluid" style=" background-color:	#FFFACD" >
        <div class="row">
            <div class="col-12">
            <br/>
                <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc1.jpg); height: 100px ; width: 500px;">
                        <a href="cours -art.html">
                            <h6>Art &amp; Design</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img"  style="background-image: url(img/bg-img/bc2.jpg); ">
                        <a href="cours-business.html">
                            <h6>Business</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc3.jpg);">
                        <a href="cours -itsoftware .html">
                            <h6>IT &amp; Software</h6>
                        </a>
                    </div>
                    

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc4.jpg);">
                        <a href="cours-choixlangue.html">
                            <h6>Langages</h6>
                        </a> 
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc5.jpg);">
                        <a href="cours-choixlangueProgrammation.html">
                            <h6>Programming Languages</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc6.jpg);">
                        <a href="cours- psyco.html">
                            <h6>psychologie</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            
                <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/hist.png); height: 100px ; width: 500px;">
                        <a href="cours-hist.html">
                            <h6>Histoire</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img"  style="background-image: url(img/bg-img/marketing.jpg); ">
                        <a href="cours-marketing.html">
                            <h6>marketing</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/math.jpeg);">
                        <a href="cours - maths.html">
                            <h6> mathematique</h6>
                        </a>
                    </div>
                    

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/science.jpg);">
                        <a href="cours -science .html">
                            <h6>science</h6>
                        </a> 
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/gro.jpeg);">
                        <a href="cours-geo.html">
                            <h6>geographie</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    
                    <div class="single-catagories bg-img" style="background-image: url(img/bg-img/atome.jpg);">
                        <a href="cours - phy.html">
                            <h6>physique</h6>
                        </a>
                    </div>
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
    </body></html>
    <!-- ##### Footer Area Start ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="<?php if (!est_connecte())echo'acceuil.php' ;else echo 'login-acceuil.php'?>"><p style="font-size: xx-large;font-weight: bolder;">Glory</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!--Modal login -->
    <div class="container">      
        <div class="modal fade" id="login">
          <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 style="font-family:candara;margin-left: 3.5cm;">Connexion</h1>
      </div>
              <div class="modal-body">
                <form>
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