<?php

//en input un tableau simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminuteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void {
    $fileName = 'sauvegardes/ListeStagiaire' . date('Y-m-d_H-i-s') . '.txt';
    file_put_contents($fileName, $studentList);
    echo "La liste des étudiants a été enregistrée dans le fichier : $fileName";
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (string $pathFile) : array {
    $data = file_get_contents($pathFile);
    $studentList = explode("\n", $data);
    return $studentList;
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void {
    $fileName = 'sauvegardes/ListeStagiaire' . date('Y-m-d_H-i-s') . '.csv';
    $file = fopen($fileName, 'w');
    foreach ($studentList as $student) {
        $fields = explode(" ", $student);
        fputcsv($file, $fields, ';');
    }
    echo "La liste des étudiants a été enregistrée au format CSV dans le fichier : $fileName";
}

?>






