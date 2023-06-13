<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentsList) : void{
    echo "je suis dans studentsToFile";
        //Declaration

$save = "..\Modele\sauvegardes\save_students".date("Y-m-d-H-i-s");
//Creation du fichier txt avec le tableau 
file_put_contents($save, implode("" , $studentsList), FILE_APPEND);


// date("Y-m-d-H-i-s")
}





//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    echo "je suis dans loadFile";
    $tab = [];

    if (file_exists($pathFile)) {
        // le fichier existe
    
        // lecture de son contenu
        $studentsList = file($pathFile);


        foreach($studentsList as $line){
            //Réecriture
          $tab[] = $line; 
        }

        // var_dump($tab);

        // affichage de son contenu
        // print_r($tab);
    } else {
        // le fichier n'existe pas
        // echo "le fichier '$pathFile' n'existe pas\n";
    }  
    
    // print_r($studentsList);
    return $tab;


    
   
    
}



//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentsList) : array {

    echo "je suis dans saveStudentsToCSVFile \n";


//Declaration d'un tableau pour les key et la dir de save
    $arraysKey = array('Place_1' ,'Place_2','Place_3','Place_4','Place_5','Place_6','Place_7','Place_8','Place_9','Place_10','Place_11','Place_12','Place_13','Place_14','Place_15','Place_16');

    $save = "..\Modele\sauvegardes\save_students".date("Y-m-d-H-i-s").".json";
    //Combiné les deux tableaux

    //Declarations
    
    shuffle($studentsList);

    $studentsList = array_combine($arraysKey , $studentsList );

//Convertion des index en csv

// foreach ($studentsList as $key => $value) {
//     $studentsList[$key] = $key." ".$value;
// }

$studentsList = str_replace("\n", " ", $studentsList);


//Création du fichier csv avec le tableau modifié.

file_put_contents($save, json_encode($studentsList));

return $studentsList;

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




