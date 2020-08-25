<?php
include('session.php');
function insertion_fichiers()
{
    if(isset($_POST['titre']) && isset($_POST['limite']))
    {
        $name1=$_FILES['fich']['name'] ;
        $number = count($name1);
        for($i=0;$i<$number;$i++)
        {
            include('connexion.php') ;
            $date = date('Y-m-d H:i');
            $prof = $_SESSION['nom'] ;
            $matiere=$_POST['matiere'] ;
            $mess= $_POST['titre'];
            $tmp =$_FILES['fich']['tmp_name'][$i];
            $name = $_FILES['fich']['name'][$i];
            $url = 'ep/'.$name ;
            $genre = 1 ;
            $limite=$_POST['limite'] ;
            $bd->exec("INSERT INTO cours (matiere,prof,titre,nom,url,date,limite,genre)
            VALUES('".$matiere ."','".$prof ."','".$mess ."', '".$name ."','".$url ."','".$date ."','".$limite ."','".$genre ."')");
             chdir("../");
            move_uploaded_file($tmp,$url) ;

        }
    }
   
}
insertion_fichiers() ;
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;

?>
