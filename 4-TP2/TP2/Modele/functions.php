<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
    $dateTime = date('Y-m-d-H-i-s');
    $fileName = 'sauvegardes/savestudents' . $dateTime . '.txt';
    $content = implode("\n", $studentList);
    mkdir('sauvegardes', 0777, true);
    file_put_contents($fileName, $content);

}

// Charger la liste des étudiants à partir d'un fichier (.txt)
function loadStudentsFromFile(string $pathFile): array {
    $studentList = explode("\n", file_get_contents($pathFile));
    
    $keys = array("Place_1", "Place_2", "Place_3", "Place_4", "Place_5", "Place_6", "Place_7", "Place_8", "Place_9", "Place_10", "Place_11", "Place_12", "Place_13", "Place_14", "Place_15", "Place_16");
    
    $tabAsso = array_combine($keys, $studentList);
    return $tabAsso;
}

// Sauvegarde de la liste des étudiants au format CSV (séparateur entre le nom et le prénom ";")
function saveStudentsToCSVFile(array $studentList): void {
    $dateTime = date('Y-m-d-H-i-s');
    $fileName = 'savestudents' . $dateTime . '.csv';
    $filePath = './sauvegardes/' . $fileName;
    $file = fopen($filePath, 'w');
    foreach ($studentList as $student) {
        $data = str_getcsv($student, ';');
        fputcsv($file, $data, ';');
    }
    fclose($file);
}

/*en en entrée un tableau associatif de stagiaire [K,V], en sorti un tableau associatif
avec les values mélangé.
ex :
["Place_1" => "MOUACI Leila"]
["Place_2" => "DEWEIRELD Nicolas"] 
["Place_3" => "BOUCHER Alex"] 
["Place_4" => "M'HMEMDI Quentin"] 
["Place_5" => "ADJAL Karim"] 
["Place_6" => "BELAHCEN Aimane"] 
["Place_7" => "GIRARD Fabien"] 
["Place_8" => "LE PEUCH Loick"] 
["Place_9" => "BALLOY Julien"] 
["Place_10" => "DELOURME Amaury"] 
["Place_11" => "AZAAOUAJ Younes"] 
["Place_12" => "SAHLI Asaad"] 
["Place_13" => "SAYARATH Alissa"] 
["Place_14" => "LYAGOUBI Mohamed"] 
["Place_15" => "OLIVIER Quentin"]
["Place_16" => "GACEM Nassim"]*/


function shufflePositions(array $tabAsso) {

    $keys = array("Place_1", "Place_2", "Place_3", "Place_4", "Place_5", "Place_6", "Place_7", "Place_8", "Place_9",
    "Place_10", "Place_11", "Place_12", "Place_13", "Place_14", "Place_15", "Place_16");

    shuffle($tabAsso);

    $tabAsso = array_combine($keys,$tabAsso);

    return($tabAsso);

//   $tabValeurs = array_values($tabAsso);

//   shuffle($tabValeurs);

//   $tabKeys = array_keys($tabAsso);

//   $tabAsso = array_combine($tabKeys,$tabValeurs); 

//   print_r($tabAsso);

}

?>