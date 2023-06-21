<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) {
    $fichier = '..\Modele\sauvegardes\save_students_' . (date("Ymd-H-i-s")) . ".txt";
    file_put_contents($fichier, $studentList);
    return studentsToFile($studentList);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    $places = array('Place_1','Place_2', 'Place_3', 'Place_4', 'Place_5', 'Place_6','Place_7',
    'Place_8', 'Place_9', 'Place_10', 'Place_11', 'Place_12', 'Place_13', 'Place_14', 'Place_15','Place_16');

        $pathFile = file_get_contents($pathFile, true);
        $student = explode("\n", $pathFile,16);


    $studentList = array_combine($places, $student);

    return $studentList;
}


//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")

function shufflePositions(array $studentList)
{
    $places = array('Place_1','Place_2', 'Place_3', 'Place_4', 'Place_5', 'Place_6','Place_7',
'Place_8', 'Place_9', 'Place_10', 'Place_11', 'Place_12', 'Place_13', 'Place_14', 'Place_15','Place_16');
    shuffle($studentList);
    $studentList = array_combine($places, $studentList);
    return $studentList;
}


    function saveStudentsToCSVFile(array $studentList) {

        foreach ($studentList as $key => $value) {
            $studentList[$key] = $key."=>".$value;
        }
        $columns = str_replace("=>",";",$studentList);
        $fp = "..\Modele\sauvegardes\save_students_" . (date("Ymd-H-i-s")) . ".csv";
        file_put_contents($fp,implode($columns));
    }

    function saveStudentsToJSONFile(array $studentList) {

        foreach ($studentList as $key => $value) {
        $studentList[$key] = $key." ".$value;
         }
        $fp = "..\Modele\sauvegardes\save_students_" . (date("Ymd-H-i-s")) . ".json";
        file_put_contents($fp,json_encode($studentList));
    


        // $re = '/\s([A-Z][a-z])/';
        // $separator = ';';
        // $fp = fopen("..\Modele\sauvegardes\save_students_" . (date("Ymd-H-i-s")) . ".csv", 'w');
        // fputcsv($fp, array('Places','Nom', 'Prénom'), $separator);
        // foreach ($studentList as $key => $values) {
        //     // $csv .= preg_replace("/ /", ";", $values,1);
        //     $result = preg_replace($re, ";$1", $values);
        //     $columns = explode(";", trim($result));
        //     fputcsv($fp, $columns, $separator);
        // }

        
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
// function shufflePositions(array $studentList): array
// {
//     ;
// }

?>