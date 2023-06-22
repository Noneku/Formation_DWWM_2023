<?php

include "etudiant.class.php";
include "filiere.class.php";



$student->getStudent();

print_r($student);










// Création des filières
// $informatique = new Filiere("INFO", "Informatique");
// $tic = new Filiere("TIC", "Techno de l'info et de communication");
// $genieCivil = new Filiere("GCIV", "Génie civil");

// // Création des étudiants
// $etudiant1 = new Etudiant("Rashid", "Mohamed", "1995/01/02");
// $etudiant2 = new Etudiant("Yves", "Chakib", "1992/04/02");
// $etudiant3 = new Etudiant("Martin", "Manal", "2011/03/02");
// $etudiant4 = new Etudiant("Jacques", "Meriem", "2000/11/02");
// $etudiant5 = new Etudiant("Rami", "Mouad", "2013/01/02");

// Affichage des filières
// echo "La liste des filières de notre école :\n";
// $filieres = array($informatique, $tic, $genieCivil);

// foreach ($filieres as $filiere) {
//     echo $filiere . "\n";
// }

// echo "\n";



// $informatique = array($etudiant1,$etudiant2);
// $tic = array($etudiants3);
// $genieCivil = array($etudiant4, $etudiant5);



// Liste des étudiants par filière
echo "Liste des étudiants par filière :\n";

// // Filière : Informatique
// echo $informatique . "\n";
// echo $etudiant1 . "\n";
// echo $etudiant2 . "\n";

// // Filière : Techno de l'info et de communication
// echo $tic . "\n";
// echo $etudiant3. "\n";

// // Filière : Génie Civil
// echo $genieCivil ."\n";
// echo $etudiant4 . "\n";
// echo $etudiant5 . "\n";

// Affichage etudiant par filiere




?>