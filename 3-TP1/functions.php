<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile($studentList)
{
    $fichier = ".\sauvegardes\save_students_" . (date("Ymd-H-i-s")) . ".txt";
    file_put_contents($fichier, $studentList);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile(string $pathFile)
{
    $pathFile = file_get_contents($pathFile, true);
    $studentList = explode("\n", $pathFile);
    return $studentList;
}

// foreach ($file as $key => $value) {
//     echo $key.PHP_EOL;
// }


//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList)
{
    $re = '/\s([A-Z][a-z])/';
    $separator = ';';
    $fp = fopen(".\sauvegardes_csv\save_students_" . (date("Ymd-H-i-s")) . ".csv", 'w');
    fputcsv($fp, array('Nom', 'Prénom'), $separator);
    foreach ($studentList as $values) {
        // $csv .= preg_replace("/ /", ";", $values,1);

        $result = preg_replace($re, ";$1", $values);
        $columns = explode(";", trim($result));
        fputcsv($fp, $columns, $separator);
    }

    return fclose($fp);

}


?>