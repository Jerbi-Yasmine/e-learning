<?php

    function ajout_matiere()
    {
       /* include('connexion.php') ;
        if(isset($_POST['matiere']))
        {
            $requete="UPDATE personne SET matiere= '" . $_POST['matiere'] . "' WHERE nom= '" . $_SESSION['nom'] . "' " ;
            $reponse = $bd->exec($requete);
            
        }*/

        if(!empty($_POST['matiere']))
        {
            include('connexion.php') ;
            $prof = $_SESSION['nom'] ;
            $requete2 = $bd -> prepare("SELECT * FROM matiere where nom='".$_POST['matiere']."' AND prof='".$prof."'") ;
            $requete2->execute(array('nom'=>$_POST['nom'],'prof'=>$prof)) ;
            if(($requete2->rowCount())==0) {
            $acces = 0 ;
            $matiere = $_POST['matiere'] ;
            $prof = $_SESSION['nom'] ;
            $bd->exec("INSERT INTO matiere (nom,prof,acces)
            VALUES('".$matiere ."','".$prof ."', '".$acces ."')");

            }
            
    }
}

   ?>