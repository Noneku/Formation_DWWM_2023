<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{

// Récupère la date et l'heure actuelles au format 'année-mois-jour-heure-minute-seconde'
    $dateTime = date('Y-m-d-H-i-s');

  // Construit le nom du fichier avec la date et l'heure
    $fileName = 'sauvegardes/save_students_'.$dateTime. '.txt';

    
    // Écrit les étudiants dans le fichier
    file_put_contents($fileName, $studentList);

}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    $studentList = explode("\n", file_get_contents($pathFile));
    return $studentList;
    
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{

// Récupère la date et l'heure actuelles au format 'année-mois-jour-heure-minute-seconde'
    $dateTime = date('Y-m-d-H-i-s');

    
    // Construit le nom du fichier avec la date et l'heure
    $fileName = 'save_students_'.$dateTime. '.csv';


    $filePath = './sauvegardes/' . $fileName;

     // Parcours le tableau d'étudiants
    foreach ($studentList as $student) {
        $tab[] =  str_getcsv($student, ';');
    }
// Remplace les espaces par des points-virgules dans chaque étudiant
    $studentList = str_replace(' ', ';', $studentList);

    // Écrit les étudiants dans le fichier filpath en provenant de $student
    file_put_contents($filePath, $studentList);
}

?>