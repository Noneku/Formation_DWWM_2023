<?php

include "personnne.class.php";
include "etudiant.class.php";
include "employe.class.php";
include "professeur.class.php";

$employe1 = new Employe(121,"DOUK", "Rachid", 10000.0);
$employe2 = new Employe(145,"NGOYE", "Roland", 10000.0);

$etudiant1 = new Etudiant("ST78",758,"OBAKA", "Med");
$etudiant2 = new Etudiant("ST89",78,"ALSENY", "Thomas");

$professeur1 = new Professeur(33,"OBA", "Kevin", 5700.0, "JAVA/JEE");
$professeur2 = new Professeur(39,"MAGASSOUBA", "Cheick", 5000.0, "PHP");

echo "La liste des employés :\n";
echo $employe1 . "\n";
echo $employe2 . "\n";

echo "La liste des étudiants:\n";
echo $etudiant1 . "\n";
echo $etudiant2 . "\n";

echo "La liste des professeurs :\n";
echo $professeur1 . "\n";
echo $professeur2 . "\n";


?>