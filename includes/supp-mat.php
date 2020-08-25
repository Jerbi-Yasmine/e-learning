<?php
include('connexion.php');
include('session.php');
$bd->exec("DELETE FROM matiere WHERE nom='".$_SESSION['matiere']."' AND prof='".$_SESSION['nom']."'  ");
header('location:../espace.php');

?>