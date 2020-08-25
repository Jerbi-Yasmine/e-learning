<?php
function cours ($order)
{
    include('connexion.php') ;
    $reponse =$bd->query("SELECT * FROM public where acces=0 order by id $order");
    $i=0 ;
    if(($reponse->rowCount())==0) echo "<h1 class='text-muted' style='text-align:center;margin-top:5cm'>Aucun cours à visualiser pour le moment</h1>";
    {while ($entree = $reponse->fetch()) 
    {
       echo"
       <form action='includes/choix.php' method='POST'>
       <div class='regular-page-area '>
       <div class='container' style='padding-left:6.4cm;'>
           <div class='row'>
               <div class='col-10'>
                   <div class='page-content'>";
                       echo "<a href=".$entree['url']." target='_blank'>".$entree['prof']." a partagé un document : ".$entree['nom']." </a>
                       <button type='submit' class='btn btn-sm btn-success' style='margin-left:13cm;margin-top:-1cm' name='agree$i'>Accepter</button>
                       <button  type='submit'class='btn btn-sm btn-danger ' style='margin-top:-1cm;' name='cancel$i'>Refuser</button> </form>
                       <p>"; if($entree['commentaire']!="")echo $entree['commentaire']."</br>";

                       echo"
                        </div>
                                                                              
                   </div>
               </div>
           </div>
       </div>
   </div> </br>" ;
   if(isset($_POST['agree'.($i)])) echo "agree".($i) ;
   if(isset($_POST['cancel'.($i)])) { $bd->exec("DELETE FROM public WHERE id='".$entree['id']."'"); header('location:../administrateur.php');}
   $i = $i+1;
          
  } }

}
cours("desc") ;

?>