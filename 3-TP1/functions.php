<?php

//en input un tableau simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $student): void
{
    $date = date('Y-m-d-H-i-s');

    // Mettre la date avec l'heure minute et seconde afin de remplacer dateheureminuteseconde.txt
    $fileName = 'C:\xampp\htdocs\DWWM\4_TP\TP1_FILE\sauvegardes' . $date . '.txt';

    // Parcours le tableau d'étudiants
    foreach ($student as $key => $students) {
        // Modifie chaque étudiant pour inclure la clé et les données
        $student[$key] = $key . " " . $students;
    }
    // Afficher les étudiants dans le tableau 
    file_put_contents($fileName, $student);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile(String $pathFile): array
{
    // séparer avec un saut de ligne 
    $studentList = explode("\n", file_get_contents($pathFile), 16);

    // Crée un tableau avec les clés prédéfinies et les valeurs des étudiants
    $key = array('Place 1', 'Place 2', 'Place 3', 'Place 4', 'Place 5', 'Place 6', 'Place 7', 'Place 8', 'Place 9', 'Place 10', 'Place 11', 'Place 12', 'Place 13', 'Place 14', 'Place 15', 'Place 16');
    $tab = array_combine($key, $studentList);

    // Retourne le tableau des étudiants
    return $tab;
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $student): void

{
    // Variable date 
    $date = date('Y-m-d-H-i-s');

    // Création du fichier CSV avec la date et l'heure
    $fileName = 'save_students_' . $date . '.csv';
    $filePath = 'C:\xampp\htdocs\DWWM\4_TP\TP1_FILE\sauvegardes' . $fileName;

    // Parcours le tableau d'étudiants
    foreach ($student as $key => $students) {
        // Convertit chaque étudiant en un tableau en utilisant le point-virgule comme séparateur
        $tab2[] =  str_getcsv($students, ';');
    }

    // Remplace les espaces par des points-virgules dans chaque étudiant
    $student = str_replace("\n", ';', $student);

    // Modifie chaque étudiant pour inclure la clé et les données en executant une boucle for 
    foreach ($student as $key => $students) {
        $student[$key] = $key . " " . $students;
    }

    // Affichage
    file_put_contents($filePath, $student);
}
