<?php include('includes/session.php') ; ?>
        <!DOCTYPE html>
        <html lang='en'>
        
        <head>
            <meta charset='UTF-8'>
            <meta name='description' content=''>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
            <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->
        
            <!-- Title -->
            <title>Glory</title>
        
            <!-- Favicon -->
            <link rel='icon' href='img/Logo.jpg'>
        
            <!-- Stylesheet -->
            <link rel='stylesheet' href='style.css'>
        
        </head>
        
        <body>
        
            <!-- ##### Header Area Start ##### -->
            <header class='header-area'>
                <!-- Navbar Area -->
                <div class='clever-main-menu'>
                    <div class='classy-nav-container breakpoint-off'>
                        <!-- Menu -->
                        <nav class='classy-navbar justify-content-between' id='cleverNav'>
        
                            <!-- Logo -->
                            <a class='nav-brand' href='acceuil.php'><img src='img/logoo.jpg' alt=''></a>
        
                            <!-- Navbar Toggler -->
                            <div class='classy-navbar-toggler'>
                                <span class='navbarToggler'><span></span><span></span><span></span></span>
                            </div>
        
                            <!-- Menu -->
                            <div class='classy-menu'>
        
                                <!-- Close Button -->
                                <div class='classycloseIcon'>
                                    <div class='cross-wrap'><span class='top'></span><span class='bottom'></span></div>
                                </div>
                                <div></div>
        
                                 <!-- Nav Start -->
                                 <div id='a' class='classynav'>
                                    <ul>
                                        <li ><a href='acceuil.php'>Acceuil</a></li>
                                        <li><a href='cours.php'>Cours en ligne</a></li>
                                        <li><a href='espace-prof1.php'>Mon Espace</a></li>
                                    </ul>
        
        
                                    <!-- Register / Login -->
        
                                    <!-- Register / Login -->
                                    <div class='login-state d-flex align-items-center'>
                                        <div class='user-name mr-30'>
                                            <div class='dropdown'>
                                                <a class='dropdown-toggle' href='#' role='button'  data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><?php if (est_connecte()) echo 'amel';?></a>
                                                <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userName'>
                                                    <a class='dropdown-item' href='espace-prof1.php'>Mes groupes</a>
                                                    <a class='dropdown-item' href='profile.php'>Profile</a>
                                                    <a class='dropdown-item' href='deconnexion.php'>Déconnexion</a>
        
                                                </div>
                                            </div>
                                        </div>
                                        <div class='userthumb'>
                                            <img src='img\divers\profile.jpg' alt=''>
                                        </div>
                                    </div>
        
                                </div>
                                <!-- Nav End -->
                               </header> </br>
                               <!-- ##### Breadcumb Area Start ##### -->
            <div class='breadcumb-area'>
        
                <!-- ##### Catagory Area Start ##### -->
                <div class='clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400' style='background-color:#CF3868;'>
                    <div class='blog-details-headline'>
                        <h3><?php echo'aaa' ;             $id_fichier = fopen("temp.txt","a+") ; $r ='\n';
                                fwrite($id_fichier,"bbb");
                                fwrite($id_fichier,$r);



                        ?></h3>
                    </div>
                </div>
                <!-- ##### Catagory Area End ##### -->
            
                <div class='container'>
                    <div class='row justify-content-center'>
                        <!-- Post A Comment -->
                        <div class='col-12 col-lg-6'>
                            <div class='post-a-comments mb-70' style='margin-top: 0.5cm;'>
                                <button type='button' class='btn btn-light btn-lg btn-block' data-toggle='collapse' href='#choix1'><h5 style='color: black;'><i class='fa fa-user' aria-hidden='true'></i>&nbsp;&nbsp;Ajouter des Etudiants</h5></button>
                                <div class='collapse' id='choix1'>
                                    <form action="a.php">
                                        <div class='form-group'>
                                          <label for='mail'>Adresse E-mail</label>
                                          <input type='text' class='form-control form-control-sm' id='name' >
                                        </div>
                                        <div  style='padding-left: 4.3cm;'>
                                            <button type='submit' class='btn btn-outline-secondary'>Envoyer</button>
                                        </div>
                                    </form>
                                    </div>
            
                                
                                <button type='button' class='btn btn-btn btn-secondary btn-lg btn-block' data-toggle='collapse' href='#choix2'
                                ><h5><i class='fa fa-folder' aria-hidden='true'></i>&nbsp;&nbsp; Ajouter un cours</h5></button>
                               
                                <div class='collapse' id='choix2'>
                                    <form class='md-form' id='formfichier' method="POST" action="documents.php" enctype="multipart/form-data">
                                        <input type='file' hidden='hidden' id='fich1' name="fich1[]" multiple>
                                            <label for='fich1' id='bouton' style='margin-top: 0.3cm;padding-left: 4.9cm;'><img src='img\iplus.png'>

                                        </label></br>
                                        <span style='margin-left:4cm ;font-size:0.4cm;' id='fichier1'></span></br></br>
                                        <div>
                                    <input type='text' class='form-control' placeholder='Donner un titre' name='titre1' required>
                                  </div>                                   </br>     
                                  <div  style='padding-left: 4.7cm;'>
                                            <button  type="submit" class='btn btn-outline-secondary'>Envoyer</button>
                                        </div></br>
                                      </form>
                                    </div>
            
                                <button type='button' class='btn btn-light btn-lg btn-block' data-toggle='collapse' href='#choix3'><h5 style='color: black;'><i class='fa fa-video-camera' aria-hidden='true'></i>&nbsp;&nbsp; Demarrer une visioconférence</h5></button>
            
                                <div class='collapse' id='choix3'>
                                   
            
                                    
                                    </div>
            
                                <button type='button' class='btn btn-btn btn-secondary btn-lg btn-block' data-toggle='collapse' href='#choix4'
                                ><h5><i class='fa fa-file' aria-hidden='true' multiple></i>&nbsp;&nbsp;Lancer Un Devoir</h5></button>
            
                                <div class='collapse' id='choix4'>
                                    <form class='md-form' id='formfichier' method="POST" action='epreuves.php' enctype='multipart/form-data'>
                                        <input type='file' hidden='hidden' id='fich' name='fich[]' multiple>
                                            <label for='fich' id='bouton' style='padding-left: 4.9cm;'><img src='img\iplus.png'>

                                        </label></br>
                                        <span style='margin-left:2.7cm ;font-size:0.4cm;' id='fichier'></span></br></br>
                                        <div>
                                    <input type='text' class='form-control' placeholder='Donner un titre' name='titre' required>
                                  </div>  
                                  <div>
                                    <p>Date Limite : </p>
                                    <input type="datetime-local"  class='form-control' name='limite' required>
                                  </div> 
                                        <div  style='padding-left: 4.7cm;'>
                                            <button type='submit' class='btn btn-outline-secondary'>Envoyer</button>
                                        </div>
                                      </form>
                                    </div>                
                            </div>
                        </div>
                    </div></div>

                                <!-- devoirs et cours -->
                                <?php
                                function format($date)
                                {
                                    $occ = strrpos($date,":");
                                    $date_formate = substr($date,0,$occ) ;
                                    return($date_formate);
                                }
                                    include('includes/connexion.php') ;
                                    $utilisateur = $_SESSION['nom'] ;
                                     $reponse =$bd->query("SELECT * FROM cours ORDER BY date desc where prof='" . $utilisateur . "' ");
                                     while ($entree = $reponse->fetch()) 
                                     {
                                        echo"<div class='regular-page-area '>
                                        <div class='container' style='padding-left:6.4cm;'>
                                            <div class='row'>
                                                <div class='col-9'>
                                                    <div class='page-content'>
                                                        <h6>".ucwords($_SESSION['nom'])."";
                                                        if($entree['genre']==0) echo "a partagé un nouveau document : ".
                                                             $entree['titre']."  </h6>
                                                            <small class ='text-muted'>".format($entree['date'])."</small> <a href=".$entree['url']." 
                                                            download><img style='padding-left:14cm;margin-top:-1.2cm'src='img/telechargement.png'/></a>";
                                                        else echo "a lancé une nouvelle epreuve : ".
                                                        $entree['titre']."  </h6>
                                                       <small class ='text-muted'>".format($entree['date'])."  </small></br><small class ='text-muted'> Date Limite :".format($entree['limite'])."</small>
                                                       <a href=".$entree['url']." 
                                                        download><img style='padding-left:14cm;margin-top:-2.5cm'src='img/telechargement.png'/></a>";
                                                        echo" </div>
                                                                                                               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> </br>" ;
                                            
                                   } 
                                    ?>    
                                       
        
                           <!-- ##### Footer Area Start ##### -->
            <footer class='footer-area'>
                <!-- Top Footer Area -->
                <div class='top-footer-area'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-12'>
                                <!-- Footer Logo -->
                                <div class='footer-logo'>
                                    <a href='acceuil.html'><p style='font-size: xx-large;font-weight: bolder;'>Glory</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                                <!-- ##### Footer Area End ##### -->
        
            <!-- ##### All Javascript Script ##### -->
            <!-- jQuery-2.2.4 js -->
            <script src='../js/jquery/jquery-2.2.4.min.js'></script>
            <!-- Popper js -->
            <script src='../js/bootstrap/popper.min.js'></script>
            <!-- Bootstrap js -->
            <script src='../js/bootstrap/bootstrap.min.js'></script>
            <!-- All Plugins js -->
            <script src='../js/plugins/plugins.js'></script>
            <!-- Active js -->
            <script src='../js/active.js'></script>
            <script >
    document.getElementById('fich').addEventListener('change', function() {
    document.getElementById("fichier").innerHTML =this.files.length+" fichier(s) prêt(s) à partager";
});
document.getElementById('fich1').addEventListener('change', function() {
    document.getElementById('fichier1').innerHTML =this.files.length+" fichier(s) prêt(s) à partager";
});
</script>

            
        </body>
        
        </html>