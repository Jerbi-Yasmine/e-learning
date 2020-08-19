<?php  
session_start() ;
function authentification()
{
    include('connexion.php');

   if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['connexion']))
   {
<<<<<<< HEAD
        $util =$_POST['email'] ;
        $reponse =$bd->query("SELECT mdp FROM personne WHERE email= '" . $util . "' ");
       /*$requete = $bd -> prepare('SELECT * FROM personne where email=:email AND mdp=:mdp') ;
=======

       $requete = $bd -> prepare('SELECT * FROM personne where email=:email AND mdp=:mdp') ;
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
       $requete->execute(array('email'=>$_POST['email'],'mdp'=>$_POST['mdp'])) ;
       if(($requete->rowCount())!=0)
       {
   
               //redirection vers l'espace utilisateur
               session_start() ;
               $_SESSION['utilisateur'] = $_POST['email'];
               header("location:acceuil.php");
   
<<<<<<< HEAD
       }*/
       $entree = $reponse->fetch() ;

       $pass = $_POST['mdp'] ;     $hpass= $entree['mdp'];
        if(password_verify($pass,$hpass))
        {
    
                //redirection vers l'espace utilisateur
                session_start() ;
                $_SESSION['utilisateur'] = $_POST['email'];
                header("location:acceuil.php");
    
        }
=======
       }
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
       else 
       { return(true) ;
           }

<<<<<<< HEAD
}}
=======

       }

}
>>>>>>> 88e37dc539d8ef7f1c0b44dd9bcb144c4fd924ce
authentification();
function est_connecte()
{
    if(isset($_SESSION['utilisateur']))
    return true ;
}
function statut()
{
    require('connexion.php') ;
    $utilisateur =$_SESSION['utilisateur'] ;
    $reponse =$bd->query("SELECT * FROM personne WHERE email= '" . $utilisateur . "' ");
    while ($entree = $reponse->fetch()) 
    {
        $_SESSION['nom']=$entree['nom'] ;
        $_SESSION['statut'] =$entree['statut'] ;
    }
echo $_SESSION['nom'];
if($_SESSION['statut']==0)
  return 0 ;
  if($_SESSION['statut']==1)
  return 1 ;
  if($_SESSION['statut']==2)
  return 2 ;
}
    
?>