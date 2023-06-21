<?php

//on input un tableau simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminuteseconde.txt dans le repertoire sauvegarde

function studentsToFile(array $studentList) {

    
    // « r » – Lecture seule.
    // « r + » – Lecture / écriture. 
    // « w » – Écriture uniquement
    // Créer un fichier texte vide dont le nom va contenir la date du jour : $nom_fichier = date('Ymd').'.txt'; fopen($nom_fichier, 'w');


// Créer un fichier PHP avec $variable = fopen("", 'r');

    $fichier = 'sauvegardes/save_students_'.date('ymd-his').'.txt';


// Écrire dans un fichier avec file_put_contents()
    file_put_contents($fichier, $studentList);

}


//charger la liste des students à partir d'un fichier (listStudents.txt)

function loadStudentsFromFile (string $cheminAcces) : array { 

// lecture de son contenu
$liste = file_get_contents($cheminAcces);

    
// creation du tableau avec la fonction explode()
$listeStagiaire = explode("\n", $liste);

// affichage du tableau et de son contenu
return $listeStagiaire;

}


// //sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")

function saveStudentsToCSVFile(array $studentList) : void {
    
    $fichier = 'sauvegardes/save_students_'.date('ymd-his').'.csv';

    $studentList= str_replace( ' ', ';', $studentList);

    file_put_contents($fichier, $studentList);

}


?>