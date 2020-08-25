<?php
include('../includes/session.php');
function insertion_fichiers()
{
    include('../includes/connexion.php') ;
        $name1=$_FILES['fich2']['name'] ;
        $number = count($name1);
        $prof=$_SESSION['nom'] ;
        $msg=$_POST['desc'] ;

        for($i=0;$i<$number;$i++)
        {
            $tmp =$_FILES['fich2']['tmp_name'][$i];
            $name = $_FILES['fich2']['name'][$i];
            $url = '../publique/'.$name ;
            $url2 = "publique/".$name;
            $genre=0;
            if ($name=="") continue;
            $bd->exec("INSERT INTO public (nom,url,prof,commentaire,acces)
            VALUES('".$name ."','".$url2 ."','".$prof ."', '".$msg ."', '".$genre ."')");
            move_uploaded_file($tmp,$url) ;

        }
    }
   
insertion_fichiers() ;
header('location:../acceuil.php')

?>