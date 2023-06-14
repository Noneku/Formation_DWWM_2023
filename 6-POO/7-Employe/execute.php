<?php

include "employe.class.php";

$employe1 = new Employe ($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

echo $dateNaissance;
?>