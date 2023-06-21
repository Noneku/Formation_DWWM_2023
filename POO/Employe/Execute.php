<?php
include "Employe.class.php";

/*************************************Employe*1*******************************************/

$employe1 = new Employe("254541514", "Mario ", "Bros ", "07/03/1984", "12/01/1990", 7000 );

 echo "Matricule 1 = " .$employe1->getMatricule() . "\n"; 
 echo "Nom  = " .$employe1->getNom() . "\n" ;
 echo "Prénom  = " .$employe1->getPrenom() . "\n";
 echo "DateNaissance  = " .$employe1->getDateNaissance() . "\n";
 echo "DateEmbauche  = " .$employe1->getDateEmbauche() . "\n" ;
 echo "Age = " .$employe1->age()  . "\n";
 echo "Ancienneté = " .$employe1->anciennete()  . "\n";
 echo "Salaire  = " .$employe1->getsalaire(). "\n";
 echo "Salaire + Ancienneté  = " .$employe1->augmentationDuSalaire();



?>