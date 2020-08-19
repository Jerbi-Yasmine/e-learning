<?php
function etudiants()
{
    include('connexion.php') ;
    $etudiant = 0 ;
    $reponse =$bd->query('SELECT * FROM personne WHERE statut=\'2\'');
    while ($reponse->fetch()) 
    {
       $etudiant = $etudiant +1 ;
    }
    return($etudiant) ;
}
function prof()
{
    $prof = 0 ;
    include('connexion.php') ;
    $reponse =$bd->query('SELECT * FROM personne WHERE statut=\'1\'');
    while ($reponse->fetch()) 
    {
       $prof = $prof +1 ;
    }
    return($prof) ; 
}
?>