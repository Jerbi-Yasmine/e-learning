<?php
function compte()
{    if (statut()==0) return "Administrateur";
    if (statut()==1) return "Enseignant";
    if (statut()==2) return "Etudiant";

}

?>