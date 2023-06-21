<?php

include "Personne.class.php";
include "Employe.class.php";
include "Etudiant.class.php";
include "Professeur.class.php";



$etu1 = new Etudiant (1, "OBAKA", "Med", 65678754);
$etu2 = new Etudiant (2, "ALSENY", "Thomas", 87543543);

$emp1 = new Employe (3, "DOUK", "Rachid", 10000);
$emp2 = new Employe (4, "NGOYE", "Roland", 10000);

$prof1 = new Professeur (5, "OBA", "Kevin", 5700, "JAVA/JEE");
$prof2 = new Professeur (6, "MAGASSOUBA", "Cheick", 5000, "PHP");


echo "La liste des employés : \n";
echo $emp1;
echo "\n";
echo $emp2;
echo "\n";
echo "\n";

echo "La liste des étudiants : \n";
echo $etu1;
echo "\n";
echo $etu2;
echo "\n";
echo "\n";

echo "La liste des professeurs : \n";
echo $prof1;
echo "\n";
echo $prof2; 





?>