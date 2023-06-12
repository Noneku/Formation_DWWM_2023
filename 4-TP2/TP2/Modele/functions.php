<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void {
    
    //Create File save_student AND Import Array $studentList in file save_student
    file_put_contents("../Modele/sauvegardes/save_student_" . date("DMY-His") .".txt",$studentList);
}
function loadStudentsFromFile (String $pathFile) : array {
    //Put 1 element in array after line break
    $listeStudents = explode("\n",file_get_contents($pathFile));
    foreach ($listeStudents as $key => $value) {
        unset($listeStudents[$key]);
        $listeStudents["Place_".$key] = $value;
    }
    return $listeStudents;
}

function saveStudentsToCSVFile(array $studentListSave) : void {
    //Replace all " " by ";" in studentListSave
    foreach ($studentListSave as $key => $value) {
        $studentListSave[$key] = "  ".$key." ".$value;
            // str_replace(substr($value, -1),";", $studentListSave);
        }
    
    //Save a copy files in SAVE-FOLDER and exclude hide file
    $saveFolder = preg_grep('/^([^.])/', scandir("../Modele/sauvegardes"));
    //Browse a folder "sauvegardes"
    foreach ($saveFolder as $key => $value) {
        //Replace the extension of file ".txt" to ".csv"
        $value = str_replace("txt", "csv",$value);
        //Create new file from $studentListSave and put him in directory CSV
        file_put_contents("./".$value,$studentListSave);
        }
     
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
function shufflePositions(array $studentList ) : array{
    //Take values of $StudentList
    $randomSortValue = array_values($studentList);
    //Random Sort
    shuffle($randomSortValue);
    //Take keys of $StudentList
    $keysStudentListeArray = array_keys($studentList);
    //Fusion Key Array and Values Array
    $studentList = array_combine($keysStudentListeArray, $randomSortValue);
    
     return $studentList;
}

?>