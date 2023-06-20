<?php

include('./Etudiant.php');
include('./Employe.php');
include('./Professeur.php');

$etudiant1 = new Etudiant("Gacem", "Nassim","ID-F423");
$etudiant2 = new Etudiant("Lorilop", "Rakmar","ID-G201");

$employe1 = new Employe("Garne", "Eric", 1200);
$employe2 = new Employe("Perole", "John", 1200);

$prof1 = new Professeur("René", "Damien", 1350, "Histoire");
$prof2 = new Professeur("Jsaispas", "Fabien", 1350, "Mathématique");



print_r($etudiant1);
print_r($employe1);
print_r($prof1);


?>