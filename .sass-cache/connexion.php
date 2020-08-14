<?php

    try {
        $bd = new PDO('mysql:host=localhost;dbname=e-learning;charset=utf8','root','');
        }
        catch(Exception $e)
        {
            die('ERREUR'.$e->getMessage());
        }
        if(isset($_POST['email']) && isset($_POST['mdp']) &&  $_POST['nom'] && isset($_POST['statut']))
{
        $requete = $bd->prepare('INSERT INTO personne (email,mdp,nom,statut)
        VALUES(:email, :mdp, :nom, :statut)');
        $requete->execute(array('email' => $_POST['email'],'mdp' => $_POST['mdp'],
        'nom' => $_POST['nom'], 'statut' => $_POST['statut']));}
?>

