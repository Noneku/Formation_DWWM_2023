<?php
include"Personne.class.php";
include"Employe.class.php";
include"Etudiant.class.php";
include"Professeur.class.php";

$emp1=new Employe("Douk","Rachid",10000);
$emp2=new Employe("NGOYE","Roland",10000);
$etu1=new Etudiant("OBAKA","Med",65678754);
$etu2=new Etudiant("ALSENY","Thomas",87543543);
$prof1=new Professeur("OBA","Kevin",5700,"JAVA/JEE");
$prof2=new Professeur("MAGASSOUBA","Cheick",5000,"PHP");






echo "Liste des Employés";
echo $emp1;
echo "\n";
echo $emp2;
echo "\n";
echo "\n";
echo "Liste des Etudiants";
echo $etu1;
echo "\n";
echo $etu2;
echo "\n";
echo "\n";
echo "Liste des Professeurs";
echo "\n";
echo $prof1;
echo "\n";
echo $prof2;
?>