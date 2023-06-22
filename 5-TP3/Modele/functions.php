<?php

//en input un tableau associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
    $filename = "./sauvegardes/ListeStagiaire".date('Y-m-d_H-i-s').".txt";
    file_put_contents($filename, $studentList);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (string $pathFile) : array {
    $data = file_get_contents($pathFile);
    $studentList = explode("\n", $data, 16);
    $value = array_values($studentList);
    for($i=0; $i<16; $i++){
        unset($studentList[$i]);
        $studentList["place_".$i+1] = $value[$i];
    }
    return $studentList;
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    $filename = "../Modele/sauvegardes/ListeStagiaire".date('Y-m-d_H-i-s').".csv";
    foreach($studentList as $key => $value) {
        $key = str_getcsv($value);
    }
    file_put_contents($filename, $studentList);
    

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
["Place_16" => "GACEM Nassim"]
*/

function shufflePositions(array $studentList) : array{
    $values = array_values($studentList);
    shuffle($values);
    $shuffledList = array_combine(array_keys($studentList), $values);

    return $shuffledList;
}

function saveStudentsToJSONFile(array $studentList) : void{
     json_encode($studentList);
    $filename =  "../Modele/sauvegardes/ListeStagiaire".date('Y-m-d_H-i-s').".json";
    file_put_contents($filename, json_encode($studentList));  

}
    
    





?>