<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
    $filename = "sauvegardes/save_students_".date("Y-m-d_H-i-s")."txt";
    file_put_contents($filename,$studentList);
}



//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{

    $studentList = explode("\n",file_get_contents($pathFile));
    return $studentList;

}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    
    // Replacement avec fichier csv

    $filename = "sauvegardes/save_students_".date("Y-m-d_H-i-s")."csv";
    
    $studentList= str_replace(" ", ";", $studentList);
    
    file_put_contents($filename,$studentList);
    
    
}
?>