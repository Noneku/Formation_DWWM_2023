<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile($studentList){
    echo "je suis dans studentsToFile";

    //Declaration
$save = ".\sauvegardes\save_students_".date("Y-m-d-H-i-s");
//Creation du fichier txt avec le tableau 
file_put_contents($save, implode("" , $studentList), FILE_APPEND);


// date("Y-m-d-H-i-s")
}



//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile){
 

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
    return $tab;
   
    
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{

    //Declarations
    $save = ".\sauvegardes\save_students_".date("Y-m-d-H-i-s").".csv";

//test
    echo "je suis dans saveStudentsToCSVFile";



//Convertion des index en csv
foreach($studentList as $line){
            //Réecriture
          $tab[] = str_getcsv($line); 
        }

        //Modifié le tableau avec un str_replace pour changer l'espace vide par un ";"

     $tableau_modifié = str_replace(" ", ";", $studentList);

//Création du fichier csv avec le tableau modifié.
file_put_contents($save, implode( " ", $tableau_modifié), FILE_APPEND);


}

?>