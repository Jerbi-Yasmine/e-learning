<?php
include('../includes/session.php');
include('../includes/connexion.php') ;
        $name1=$_FILES['fich2']['name'] ;
        $number = count($name1);
        $prof=$_SESSION['nom'] ;
        $msg=$_POST['desc'] ;

        for($i=0;$i<$number;$i++)
        {
            $name = $_FILES['fich2']['name'][$i];
            $size =  $_FILES['fich2']['size'][$i];
            if(isset($name) && $size<2097152)
            {
                $reponse =$bd->query("SELECT * FROM demande ");
                $j=($reponse->rowCount())+1;
                $tmp =$_FILES['fich2']['tmp_name'][$i];
                $url2 = str_replace(" ","","files/demande/"."$j".$name);
                if ($name=="") continue;
                $bd->exec("INSERT INTO demande (nom,prof,url,commentaire)
                VALUES('".$name ."','".$prof ."','".$url2 ."','".$msg ."')");
                 chdir("../");
                move_uploaded_file($tmp,$url2) ;
            }
            

        }
header('location:../acceuil.php')

?>