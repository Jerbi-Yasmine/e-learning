<?php
/*function insertion()
{
    $name=$_FILES['fichier']['name'] ;
    $tmp =$_FILES['fichier']['tmp_name'];
    $chemin = 'cours/'.$name ;
    if(move_uploaded_file($tmp,$chemin))
    {
        include('connexion.php') ;
        $requete = $bd->prepare('INSERT INTO cours (matiere,email,acces,nom,url)
        VALUES(:email, :mdp, :nom, :statut)');
        $requete->execute(array('email' => $_POST['email'],'mdp' => $_POST['mdp'],
        'nom' => $_POST['nom'], 'statut' => $_POST['statut']));



        $data['file_url']
        
    }*/
<<<<<<< HEAD

    function ajout_matiere()
    {
       /* include('connexion.php') ;
=======
    function ajout_matiere()
    {
        include('connexion.php') ;
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
        if(isset($_POST['matiere']))
        {
            $requete="UPDATE personne SET matiere= '" . $_POST['matiere'] . "' WHERE nom= '" . $_SESSION['nom'] . "' " ;
            $reponse = $bd->exec($requete);
            
<<<<<<< HEAD
        }*/
        if(!empty($_POST['matiere']))
        {
            include('connexion.php') ;
            $requete = $bd->prepare('INSERT INTO matiere (nom,prof)
            VALUES(:nom, :prof)');
            $requete->execute(array('nom' => $_POST['matiere'],'prof' => $_SESSION['nom']));
           
        

            
    }
}
    function creation_page()
    {
        if(isset($_POST['matiere']))
        {
            $matiere = $_POST['matiere'] ;
            $nom = $_SESSION['nom'] ;
            $fichier = "$matiere"."$nom".".php" ;
            if(!file_exists($fichier))
        {
            touch($fichier) ;
        }
       
        return $fichier;
        }
       
    }
    function ecriture_fichier()
    {
        if(file_exists(creation_page()))
       {
            $id_fichier = fopen(creation_page(),"w") ;
        if(!$id_fichier) echo"erreur d'acces ";
        $chaine = "<?php include('session.php') ; ?>
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
                                                <a class='dropdown-toggle' href='#' role='button'  data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><?php if (est_connecte()) echo '".$_SESSION['nom']."';?></a>
                                                <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userName'>
                                                    <a class='dropdown-item' href='espace-prof1.php'>Mes groupes</a>
                                                    <a class='dropdown-item' href='profile.php'>Profile</a>
                                                    <a class='dropdown-item' href='acceuil.php'>Déconnexion</a>
        
                                                </div>
                                            </div>
                                        </div>
                                        <div class='userthumb'>
                                            <img src='img/bg-img/t1.png' alt=''>
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
                        <h3><?php echo'".$_POST['matiere']."'?></h3>
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
                                    <form>
                                        <div class='form-group'>
                                          <label for='mail'>Adresse E-mail</label>
                                          <input type='text' class='form-control form-control-sm' id='name' >
                                        </div>
                                        <div  style='padding-left: 4.3cm;'>
                                            <button type='boutton' class='btn btn-outline-success'>Envoyer</button>
                                        </div>
                                    </div>
            
                                
                                <button type='button' class='btn btn-btn btn-secondary btn-lg btn-block' data-toggle='collapse' href='#choix2'
                                ><h5><i class='fa fa-folder' aria-hidden='true'></i>&nbsp;&nbsp; Ajouter un cours</h5></button>
                               
                                <div class='collapse' id='choix2'>
                                    <form class='md-form' id='formfichier'>
                                        <input type='file' hidden='hidden' id='fich'>
                                            <label for='fich' id='bouton' style='margin-top: 0.3cm;padding-left: 6cm;'><img src='iplus.png'>
                                        </label>
                                        
                                      </form>
                                    </div>
            
                                <button type='button' class='btn btn-light btn-lg btn-block' data-toggle='collapse' href='#choix3'><h5 style='color: black;'><i class='fa fa-video-camera' aria-hidden='true'></i>&nbsp;&nbsp; Demarrer une visioconférence</h5></button>
            
                                <div class='collapse' id='choix3'>
                                   
            
                                    
                                    </div>
            
                                <button type='button' class='btn btn-btn btn-secondary btn-lg btn-block' data-toggle='collapse' href='#choix4'
                                ><h5><i class='fa fa-file' aria-hidden='true'></i>&nbsp;&nbsp;Lancer Un Devoir</h5></button>
            
                                <div class='collapse' id='choix4'>
                                    <form class='md-form' id='formfichier'>
                                        <input type='file' hidden='hidden' id='fich'>
                                            <label for='fich' id='bouton' style='padding-left: 4.7cm;'><img src='iplus.png'>
                                        </label>
                                        
                                      </form>
                                    </div>
            
                                <button type='button' class='btn btn-light btn-lg btn-block' data-toggle='collapse' href='#choix5'><h5 style='color: black;'><i class='fa fa-envelope' aria-hidden='true'></i>&nbsp;&nbsp;Contacter Le groupe</h5></button>
            
                                <div class='collapse' id='choix5'>
                                   
            
                                    <form>
                                        <div class='form-group'>
                                          <label for='mail'>Message</label>
                                        <textarea class='form-control form-control-sm' id='name' ></textarea>
                                        </div>
                                        <div  style='padding-left: 4.3cm;'>
                                            <button type='boutton' class='btn btn-outline-success'>Envoyer</button>
                                        </div>
                                    </div>                  
            
                                
                            </div>
                        </div>
                    </div></div>
                <!-- ##### Blog Details Content ##### -->
                    <div class='container-fluid'>
                        <div class='row justify-content-center'>
                            <div class='col-12 col-lg-8'>
                                <!-- devoirs et cours -->
                                <ul class='list-group list-group-flush'>
                                    <li class='list-group-item'>Cras justo odio</li>
                                    <li class='list-group-item'>Dapibus ac facilisis in</li>
                                    <li class='list-group-item'>Morbi leo risus</li>
                                    <li class='list-group-item'>Porta ac consectetur ac</li>
                                    <li class='list-group-item'>Vestibulum at eros</li>
                                  </ul>
                            </div>
                        </div>
        
        
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
            <script src='js/jquery/jquery-2.2.4.min.js'></script>
            <!-- Popper js -->
            <script src='js/bootstrap/popper.min.js'></script>
            <!-- Bootstrap js -->
            <script src='js/bootstrap/bootstrap.min.js'></script>
            <!-- All Plugins js -->
            <script src='js/plugins/plugins.js'></script>
            <!-- Active js -->
            <script src='js/active.js'></script>
            
        </body>
        
        </html>" ;
        fwrite($id_fichier,$chaine);
        fclose($id_fichier) ;

    }}

=======
        }
    }
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce

?>