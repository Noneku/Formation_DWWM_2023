<?php

//on input un tableau simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminuteseconde.txt dans le repertoire sauvegarde

function studentsToFile(array $studentList) {

    
    // « r » – Lecture seule.
    // « r + » – Lecture / écriture. 
    // « w » – Écriture uniquement
    // Créer un fichier texte vide dont le nom va contenir la date du jour : $nom_fichier = date('Ymd').'.txt'; fopen($nom_fichier, 'w');


// Créer un fichier PHP avec $variable = fopen("", 'r');

    $fichier = './sauvegardes/save_students_'.date('ymd-his').'.txt';


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
    
    $fichier = '../Modele/sauvegardes/save_students_'.date('ymd-his').'.csv';

    $studentList= str_replace( ' ', ';', $studentList);

    file_put_contents($fichier, $studentList);

}


function shufflePositions(array $studentList) : array{
    
//  On créer un premier tableau qui servira pour les keys du tableau associatif 
    $tableauPlace = array (
        "Place_1",
        "Place_2",
        "Place_3",
        "Place_4",
        "Place_5",
        "Place_6",
        "Place_7",
        "Place_8",
        "Place_9",
        "Place_10",
        "Place_11",
        "Place_12",
        "Place_13",
        "Place_14",
        "Place_15",
        "Place_16"
        );

        // Va mélanger la liste des stagiaires
        shuffle($studentList);

//  Va combiner la liste des places (keys) avec la liste des stagiaires qui a été mélangée
$tableauStagiaireAssociatif = array_combine($tableauPlace, $studentList);

// Va retourner un tableau associatif avec les keys qui ne bougent pas et des valeurs mélangées
return $tableauStagiaireAssociatif;

}

function createTableStudentsToCSVFile (array $studentList) {

    shuffle($studentList);
    $tableauStagiaires = array ();

    for ($i =1; $i <= count($studentList);  $i++) {

        $tableauStagiaires[$i] = "PLACE_".$i." => ".$studentList[$i-1];
    }

return $tableauStagiaires;

}

function saveTableStudentsToCSVFile($studentListAssociatif) : void {

// Sauvegarde la liste des stagiaires avec la clé qui qui ne bouge pas et les noms en shuffle au format CSV
$fichier = '../Modele/sauvegardes/save_TableStudents_'.date('ymd-his').'.csv';

file_put_contents($fichier, $studentListAssociatif);

}

// Sauvegarde Tableau style Associatif en format JSON____________________________________________________________________________________________________________

function saveTableStudentToJSONFile ($studentListAssociatif) : void {

// convertir les données stockées dans le tableau en une chaîne JSON
    $fichierJson = json_encode($studentListAssociatif);

    file_put_contents('../Modele/sauvegardes/tableauStagiaire_'.date('ymd-his').'.json', $fichierJson);

}


?>