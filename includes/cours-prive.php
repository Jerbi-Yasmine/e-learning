<?php
function format($date)
{
    $occ = strrpos($date,":");
    $date_formate = substr($date,0,$occ) ;
    return($date_formate);
}
function cours()
{
    require('connexion.php') ;
    session_start();
    $utilisateur = $_SESSION['nom'];
    $reponse =$bd->query("SELECT * FROM cours order by date desc ");
    $i=0;
    while ($entree = $reponse->fetch()) 
     { if(($entree['prof']==$utilisateur) && ($entree['matiere']==$_SESSION['matiere'] )) {
        echo"
        <form action='includes/cours-prive.php' method='POST'>
        <div class='regular-page-area '>
        <div class='container' style='padding-left:4.5cm;'>
            <div class='row'>
                <div class='col-10'>";
                if($entree['genre']==0) echo "<div class='page-content' >";
                if($entree['genre']==1) echo "<div class='page-content'  style='border:solid #CF3868'>";
                    
                    echo"<a href=".$entree['url']." target='_blank'><h6>Vous ";
                        if($entree['genre']==0) echo "avez partagé un nouveau document : ".
                             $entree['titre']."  </h6></a>
                            <small class ='text-muted'>".format($entree['date'])."</small>";
                        else echo "a lancé une nouvelle epreuve : ".
                        $entree['titre']."  </h6>";
                        echo "<button style='margin-top:-0.5cm' type='submit' name='supprimer$i' class='btn close' > 
                        <span aria-hidden='true'>x</span> 
                    </button> ";
                       if($entree['genre']==1) echo "<small class ='text-muted'>".format($entree['date'])."  </small></br><small class ='text-muted'> Date Limite :".format($entree['limite'])."</small>";
                      
                        echo" </div>
                         </form>

                    </div>
                </div>

            </div>
        </div>
    </div> </br>" ;
    if(isset($_POST['supprimer'.($i)])) { $bd->exec("DELETE FROM cours WHERE id='".$entree['id']."' AND prof='".$_SESSION['nom']."' AND matiere='".$_SESSION['matiere']."'");header('location:'.$_SERVER['HTTP_REFERER']);}
    $i=$i+1;


}
      
   
}
}
cours();
?>