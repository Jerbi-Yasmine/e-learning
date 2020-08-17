<?php
/*function insertion()
{
    $name=$_FILES['fichier']['name'] ;
    $tmp =$_FILES['fichier']['tmp_name'];
    $chemin = 'cours/'.$name ;
    if(move_uploaded_file($tmp,$chemin))
    {
        include('connexion.php') ;
        $requete = $bd->prepare('INSERT INTO cours (matiere,email,acces,nom,url)
        VALUES(:email, :mdp, :nom, :statut)');
        $requete->execute(array('email' => $_POST['email'],'mdp' => $_POST['mdp'],
        'nom' => $_POST['nom'], 'statut' => $_POST['statut']));



        $data['file_url']
        
    }*/
    function ajout_matiere()
    {
        include('connexion.php') ;
        if(isset($_POST['matiere']))
        {
            $requete="UPDATE personne SET matiere= '" . $_POST['matiere'] . "' WHERE nom= '" . $_SESSION['nom'] . "' " ;
            $reponse = $bd->exec($requete);
            
        }
    }

?>