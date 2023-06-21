<?php

include_once "personne.class.php";
include_once "Etudiant.class.php";
include_once "Employe.class.php";
include_once "Professeur.class.php";

/*$personne = new Personne(1,"Sahli","Asaad");
echo $personne->__toString();*/

//liste des étudiant
$Etudiant1 = new Etudiant(2,"Belahcen","Aimane","18FRE06");
$Etudiant2 = new Etudiant(3,"Adjal","Karim","03FRE15");

echo $Etudiant1->__toString()."\n";
echo $Etudiant2->__toString()."\n";

//liste des employe
$Employe1 = new Employe(4,"Dupuis","François",1200.45);
$Employe2 = new Employe(5,"Ngoye","Rolland",1677.12);

echo $Employe1->__toString() ."\n";
echo $Employe2->__toString()."\n";

// Liste des professeurs 
$professeur1= new Professeur(1,"Sahli","Asaad",5700,"JAVA/JEE");
$professeur2= new Professeur(2,"Sayarath","Alissa",5000,"PHP");

echo $professeur1->__toString()."\n";
echo $professeur2->__toString();
