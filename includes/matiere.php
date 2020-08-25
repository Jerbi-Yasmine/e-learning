<?php
ajout_matiere();
$reponse =$bd->query("SELECT id,nom FROM matiere WHERE prof= '" . $_SESSION['nom'] . "' ");
  while ($entree = $reponse->fetch()) 
 {
    $id = $entree['id']; 
    $matiere = $entree['nom'] ;
     echo "<div class='col-12 col-lg-6'>
     <div class='single-blog-area mb-100 wow fadeInUp' data-wow-delay='250ms'>
         <img style='width:1000px;height:300px'src='img/fond.png' alt=''>
         <div class='blog-content'>
             <a href='matiere.php?id=$id' class='blog-headline'>
                 <h3 style='margin-left:3.5cm;'>".ucwords($matiere)."</h3>
             </a>
         </div>
     </div>
 </div>";
 }


?>