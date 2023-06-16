<?php

include "Employee.class.php";

//renseigner les informations
$matricule=readline("Donnez votre matricule : ");
$nom=readline("Donnez votre nom : ");
$prenom=readline("donnez votre prenom : ");
$dateNaissance=readline("Donnez votre date de naissance jj-mm-aaaa : ");
$dateEmbauche=readline("Donnez votre date d'embauche jj-mm-aaaa : ");
$salaire=readline("Donnez votre salaire : ");

//création d'employé
$emp= new Employe($matricule,$nom,$prenom,$dateNaissance,$dateEmbauche,$salaire);

//affichage des informations
$emp->Afficher();






?>