<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentsList) : void {
    $fileName = './sauvegardes/save_date'.date("d-m-Y_His"). '.txt';
    file_put_contents($fileName, $studentsList);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array {
    $fichier = file_get_contents($pathFile);
    $studentsList = explode("\n", $fichier);
    return $studentsList;
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentsList) : void {
    $fileName = './sauvegardes/save_date'.date("d-m-Y_His"). '.csv';
    
    $studentsList = str_replace(" ", " ; ", $studentsList);

    file_put_contents($fileName, $studentsList);
}

?>