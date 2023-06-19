<?php

include "personne.class.php";
include "etudiant.class.php";
include "employe.class.php";
include "professeur.class.php";


//Instanciations
$personne = new Personne(3 , "OLIVIER" , "Quentin");
$etudiant1 = new Etudiant(5 , "OBAKA" , "Med" , "65678754");
$etudiant2 = new Etudiant(1 , "ALSENY" , "Thomas" , "87543543");

$employe1 = new Employe(1 , "DOUK" , "Rachid" , 10000);
$employe2 = new Employe(1 , "NGOYE" , "Roland" , 10000);

$professeur1 = new Professeur("JAVA/JEE" , 5700.0 , 2 ,"OBA" ,"Kevin");
$professeur2 = new Professeur("PHP" , 5000.0 , 2 ,"MAGASSOUBA" ,"Cheick");



echo "La liste des employes : \n";
echo $employe1."\n";
echo $employe2."\n";

echo "\n";

echo "La liste des étudiants : \n";
echo $etudiant1."\n";
echo $etudiant2."\n";

echo "\n";

echo "La liste des professeurs : \n";
echo $professeur1."\n";
echo $professeur2."\n";






?>