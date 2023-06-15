<?php
include 'employe.class.php';


$employe = new Employé($matricule, $nom , $prenom , $dateNaissance , $dateEmbauche , $salaire);

// $employe -> setMatricule(readline("Saisir votre matricule : "));

var_dump($employe);


$employe-> calculateAge();

$employe -> afficherEmployé();


?>