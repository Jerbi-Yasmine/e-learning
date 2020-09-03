<?php
include('../includes/session.php');
    if(isset($_POST['titre1']))
    {
        $name1=$_FILES['fich1']['name'] ;
        $number = count($name1);
        include('../includes/connexion.php') ;
        for($i=0;$i<$number;$i++)
        {
            $name = $_FILES['fich1']['name'][$i];
            $size = $_FILES['fich1']['size'][$i];
            if(isset($name) && $size<2097152)
            {
                $reponse =$bd->query("SELECT * FROM cours ");
                $j=($reponse->rowCount())+1;
                $date = date('Y-m-d H:i');
                $prof = $_SESSION['nom'] ;
                $mess= $_POST['titre1'];
                $tmp =$_FILES['fich1']['tmp_name'][$i];
                $url = str_replace(" ","",'files/cp/'."$j".$name) ;
                $matiere=$_POST['matiere'] ;
                $genre=0;
                $bd->exec("INSERT INTO cours (matiere,prof,titre,nom,url,date,genre)
                VALUES('".$matiere ."','".$prof ."','".$mess ."', '".$name ."','".$url ."','".$date ."','".$genre ."')");
                chdir("../");
                move_uploaded_file($tmp,$url) ;
            }
            
        }
    }
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;

?>
