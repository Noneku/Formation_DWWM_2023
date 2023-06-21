<?php
include "employe.classe.php";


$employe = new Employe("FR9959", "SAHLI", "Asaad", "04/08/1990", "5/11/2012", 5000);
echo "Matricule: " . $employe->getMatricule() ;echo PHP_EOL ;
echo "Nom: " . $employe->getNom() ;echo PHP_EOL ;
echo "Prénom: " . $employe->getPrenom() ;echo PHP_EOL ;
echo "Date de naissance: " . $employe->getDateNaissance() ;echo PHP_EOL ;
echo "Date d'embauche: " . $employe->getDateEmbauche() ;echo PHP_EOL ;
echo "Salaire: " . $employe->getSalaire() ." ". "EURO" ;echo PHP_EOL ;
echo "Âge: " . $employe->age()." " ."ans";echo PHP_EOL ;
echo "Anciennté :" . $employe->anciennete()." " ."ans";echo PHP_EOL ;
echo "augmentation de salaire :".$employe->augmentationDuSalaire()." ". "EURO"; echo PHP_EOL ;

















?>