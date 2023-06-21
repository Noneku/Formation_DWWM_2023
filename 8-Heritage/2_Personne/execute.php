<?php


include_once "personne.classe.php";
include_once "Etudiant.classe.php";
include_once "Employe.classe.php";
include_once "Professeur.classe.php";

/*$personne = new Personne(1,"Sahli","Asaad");
echo $personne->__toString();*/

//liste des étudiant
$Etudiant1 = new Etudiant(2,"Belahacen","Aimane","12AZE");
$Etudiant2 = new Etudiant(3,"Adjal","Karim","123UYT");

echo $Etudiant1->__toString();
echo PHP_EOL;
echo $Etudiant2->__toString();echo PHP_EOL;

//liste des employe
$Employe1 = new Employe(4,"Douk","Rachid",1200.45);
$Employe2 = new Employe(5,"Ngoye","Rolland",1677.12);


echo $Employe1->__toString();
echo PHP_EOL;
echo $Employe2->__toString();echo PHP_EOL;


$professeur1= new Professeur(1,"OBA","KEVIN",5700,"JAVA/JEE");
$professeur2= new Professeur(2,"MAGASSOUBA","Cheick",5000,"PHP");



echo $professeur1->__toString();
echo PHP_EOL;
echo $professeur2->__toString();


?>