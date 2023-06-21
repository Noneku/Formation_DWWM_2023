<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
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
    $filename = "sauvegardes/save_students_".date("Y-m-d_H-i-s")."csv";
    
    $studentList= str_replace(" ", ";", $studentList);
    
    file_put_contents($filename,$studentList);
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

//print_r($studentList);

$k = array("place_1","place_2","place_3","place_4","place_5","place_6","place_7","place_8","place_9","place_10","place_11","place_12","place_13","place_14","place_15","place_16");
shuffle($studentList);
$student_print = array_combine($k,$studentList);

return $student_print;
}
function saveStudentsToCSV_File(array $student_print): void {

    $filename = "../Modele/sauvegardes" . '/' . date('Y-m-d_H-i-s') . '.csv';

    $file = new SplFileObject($filename, 'w');
    $file->fputcsv(['Place', 'Nom']);

    foreach ($student_print as $place => $nom) {
        $file->fputcsv([$place, $nom]);
    }
}

/*function saveStudentsToCSV_File(array $student_print): void {
   
    $filename = "../Modele/sauvegardes" . '/' . date('Y-m-d_H-i-s') . '.csv';
    $student_p = "Place,Nom\n";

    foreach ($student_print as $place => $nom) {
        $student_p .= $place . ',' . $nom . "\n";
        file_put_contents($filename, $student_p);
}

} */
  
?>


