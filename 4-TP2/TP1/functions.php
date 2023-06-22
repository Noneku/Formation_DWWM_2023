<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{

    $pathFile = "ListeStagiaires.txt";

    $fileContent = file_get_contents($pathFile);
    $studentList = explode("\n", $fileContent);
    
    // Suppression des lignes vides
    $studentList = array_filter($studentList, 'strlen');
    
    // Affichage du tableau résultant
    print_r($studentList);

  

    $pathFile2 = "save_students_date-heureminiteseconde.txt";

    // Convertir le tableau en une chaîne de texte
    $tableauTexte = '';
    foreach ($studentList as $ligne) {
        $tableauTexte .= implode("\t", $ligne) . "\n";
}
    // Écrire le contenu dans le fichier
    file_put_contents($pathFile2, $tableauTexte, FILE_APPEND);



   

   /*$directory = "save_students_date-heureminiteseconde.txt";
    $filename = "save_students_" . date('Ymd-His') . ".txt";
    $pathFile2 = $directory . $filename;

   // Ouverture du fichier en mode écriture
    $file = fopen($pathFile2, 'w');

    // Écriture des étudiants
    foreach ($pathFile2 as $student) {
    fwrite($file, $student . "\n");
    }*/

}   
//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{ 
    $file = explode("\n", file_get_contents($pathFile));
    return $file;
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    $dateTime = date('Y-m-d-H-i-s');
    $fileName = 'savestudents'.$dateTime. '.csv';
    $filePath = './sauvegardes/' . $fileName;
    foreach ($studentList as $student) {
        $tab[] =  str_getcsv($student, ';');
    }
    $studentList = str_replace(' ', ';', $studentList);
    file_put_contents($filePath, $studentList);
}


?>