<?php
include('../includes/session.php');
function insertion_fichiers()
{
    if(isset($_POST['titre1']))
    {
        $name1=$_FILES['fich1']['name'] ;
        $number = count($name1);
        for($i=0;$i<$number;$i++)
        {
            include('../includes/connexion.php') ;
            $date = date('Y-m-d H:i');
            $prof = $_SESSION['nom'] ;
            $mess= $_POST['titre1'];
            $tmp =$_FILES['fich1']['tmp_name'][$i];
            $name = $_FILES['fich1']['name'][$i];
            $url = 'cp/'.$name ;
            $matiere=$_POST['matiere'] ;
            $genre=0;
            $bd->exec("INSERT INTO cours (matiere,prof,titre,nom,url,date,genre)
            VALUES('".$matiere ."','".$prof ."','".$mess ."', '".$name ."','".$url ."','".$date ."','".$genre ."')");
            chdir("../");
            move_uploaded_file($tmp,$url) ;
        }
    }
   
}
insertion_fichiers() ;
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;

?>
