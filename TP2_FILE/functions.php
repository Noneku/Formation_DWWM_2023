<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
 
    $date = new DateTime();
    $dateNow = $date->format("Y-m-d His");
    echo $dateNow;

    file_put_contents("sauvegardes/save_students_$dateNow.txt", $studentList);
    
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
function saveStudentsToCSVFile(array $studentList): void {
  
 //remplacement des espacements par ";"
 $studentList = str_replace(' ',';', $studentList);

 //sauvegarde au format csv
 $date = new DateTime();
 $dateNow = $date->format("Y-m-d His");
 echo $dateNow;
 file_put_contents("sauvegardes/save_students_$dateNow.csv", $studentList);


}




?>