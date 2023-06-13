<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
    echo "je suis dans studentsToFile";
        //Declaration

$save = "..\Modele\sauvegardes\save_students".date("Y-m-d-H-i-s");
//Creation du fichier txt avec le tableau 
file_put_contents($save, implode("" , $studentList), FILE_APPEND);


// date("Y-m-d-H-i-s")
}





//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    echo "je suis dans loadFile";
    if (file_exists($pathFile)) {
        // le fichier existe
    
        // lecture de son contenu
        $studentList = file($pathFile);


        foreach($studentList as $line){
            //Réecriture
          $tab[] = $line; 
        }
        // affichage de son contenu
        // print_r($tab);
    } else {
        // le fichier n'existe pas
        echo "le fichier '$pathFile' n'existe pas\n";
    }
    print_r($studentList);
    return $tab;
   
    
}



//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    echo "je suis dans saveStudentsToCSVFile \n";
//Declaration d'un tableau pour les key et la dir de save
    $arraysKey = array('Place_1' ,'Place_2','Place_3','Place_4','Place_5','Place_6','Place_7','Place_8','Place_9','Place_10','Place_11','Place_12','Place_13','Place_14','Place_15','Place_16');

    $save = "..\Modele\sauvegardes\save_students".date("Y-m-d-H-i-s").".csv";
    //Combiné les deux tableaux

    //Declarations

    shuffle($studentList);

    $placesStudents = array_combine($arraysKey , $studentList );
    var_dump($placesStudents);


//Convertion des index en csv

foreach ($placesStudents as $key => $value) {
    $placesStudents[$key] = $key." ".$value;
}
//Modifié le tableau avec un str_replace pour changer l'espace vide par un ";"

$placesStudents = str_replace(" ", ";", $placesStudents);


//Création du fichier csv avec le tableau modifié.

file_put_contents($save, implode($placesStudents), FILE_APPEND);

// $save = fopen("..\Modele\sauvegardes\save_students".date("Y-m-d-H-i-s").".csv", 'w');

// // Écrit les en-têtes (clés) dans le fichier CSV
// fputcsv($save, array_keys($tableau_modifié));

// // Écrit les valeurs dans le fichier CSV
// fputcsv($save, $tableau_modifié );

// // Ferme le fichier
// fclose($save);

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


// function shufflePositions(array $placesStudents ) : array{
//     $save = "..\Modele\sauvegardes\save_students".date("Y-m-d-H-i-s").".csv";

//     shuffle($placesStudents);
//     file_put_contents($save, implode( " ", $placesStudents), FILE_APPEND);
//     print_r($placesStudents);

//     return $placesStudents;
// }

?>