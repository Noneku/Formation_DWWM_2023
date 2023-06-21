<?php
include "personne.class.php";
include "etudiant.class.php";
include "employe.class.php";
include "professeur.class.php";

//création employé 1
$id = 1;
$nom = "DOUK";
$prenom = "Rachid";
$s = 10000;
$employe1 = new Employe($id,$nom, $prenom, $s);


//création employé 2 
$id = 2;
$nom = "NGOYE";
$prenom = "Roland";
$s = 10000;
$employe2 = new Employe($id,$nom, $prenom, $s);

//création Etudiant 1 
$id = 3;
$nom = "OBAKA";
$prenom = "Med";
$cne = 65678754;
$etudiant1 = new Etudiant($id, $nom, $prenom, $cne);

//création Etudiant 2
$id = 4;
$nom = "ALSENY";
$prenom = "Thomas";
$cne = 87543543;
$etudiant2 = new Etudiant($id, $nom, $prenom, $cne);

//création Professeur 1
$id = 5;
$nom = "OBA";
$prenom = "Kevin";
$s = 5700;
$sp = "JAVA/JEE";
$professeur1 = new Professeur($id, $nom, $prenom, $s, $sp);

//création Professeur 2
$id = 6;
$nom = "MAGASSOUBA";
$prenom = "Cheik";
$s = 5000;
$sp = "PHP";
$professeur2 = new Professeur($id, $nom, $prenom, $s, $sp);


echo "La liste des employes : ";
echo "\n";
echo($employe1);
echo "\n";
echo($employe2);
echo "\n";
echo "La liste des étudiants : ";
echo "\n";
echo($etudiant1);
echo "\n";
echo($etudiant2);
echo "\n";
echo "La liste des professeurs : ";
echo "\n";
echo($professeur1);
echo "\n";
echo($professeur2);


// echo $bat;
// echo "\n";
// echo $maison;