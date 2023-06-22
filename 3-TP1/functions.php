<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
    echo "je suis dans studentsToFile";
    $directory = 'sauvegarde';
    $fileName = 'save_students_' . date('Ymd-His') . '.txt';
    $filePath = $directory . '/' . $fileName;


    $file = fopen($filePath, 'w');

    if ($file) {
        foreach ($studentList as $student) {
            $name = $student['name'];
            $id = $student['id'];

            $line = $name . ',' . $id . PHP_EOL;

            fwrite($file, $line);
        }

        fclose($file);
        echo 'Les étudiants sont enregistrés dans le fichier texte avec succès : ' . $filePath;
    } else {
        echo 'Impossible douvrir le fichier texte pour lécriture .';
    }
}




//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function loadStudentsFromFile(string $pathFile):array {   //--ENLEVER LARRAY 
   

 // Vérifier si le fichier existe
 if (file_exists($pathFile)) {
    // Lire le contenu du fichier
    $pathFile = file_get_contents($pathFile);
    
    // Convertir le contenu en tableau de lignes
    $pathFile = explode("\n", $pathFile);
    
 //print_r($pathFile);
    return $pathFile ;
}
}

//PRINT R




//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $ListeStagiaire): void {
    $filePath = 'students.csv';
    $file = fopen('students.csv', 'w');

    if ($file) {
        foreach ($ListeStagiaire as $student) {
            $name = $student['name'];
            $id = $student['id'];

            $line = $name . ';' . $id . PHP_EOL;

            fwrite($file, $line);
        }

        fclose($file);
        echo 'Les étudiants ont enregistré dans un fichier CSV avec succès.';
    } else {
        echo 'Impossible d’ouvrir le fichier CSV pour l’écriture.';
    }
}

?>