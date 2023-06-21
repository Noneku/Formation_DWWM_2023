<?php

// declaration variable 
$pathFile = "..\ListeStagiaire.txt";
$date = date('dmY-his');

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{

     // Mettre la date avec l'heure minute et seconde afin de remplacer dateheureminuteseconde.txt
     $filename = ("sauvegardes/save_students_" . date("Ymd_His") . ".txt");
     

     file_put_contents($filename, $studentList);
   
     //  affichage
    echo "je suis dans studentsToFile";

}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile):array {

    // decoupe tous les elements d un fichier pour les mettres dans un tableau
    $studentList = explode("\n",file_get_contents($pathFile));
 return $studentList ;
    
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    
 // Autre méthode à utiliser avec copy() mais beaucoup trop longue
    // copy('./sauvegardes/save_students_20230602_095111.txt', 'save_students_20230602_095111.csv');

    // Mettre les séparateur entre les nom et prénom dans le tableau
    $studentList = str_replace(' ', ';', $studentList);
    $studentFile = fopen("./sauvegardes/save_students_20230602_095111.csv", "w");

    // Boucle foreach 
    foreach ($studentList as $key => $student) {
        fwrite($studentFile, $student);
        var_dump($studentFile);
    }
    // Affichage
    echo "Je suis dans saveStudentsToCSVFile";

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


    function shufflePositions(array $studentList){
    
        global $date ; 
        global $studentFile ;
    
        // affichage tableau
        print_r($studentList);


        // création d'un nouveau tableau 
        $k = array("place_1","place_2","place_3","place_4","place_5","place_6","place_7","place_8","place_9","place_10","place_11","place_12","place_13","place_14","place_15","place_16");
        shuffle($studentList);

        // combinaison des deux tableaux
        $student_print = array_combine($k,$studentList);
        
        // affichage tableau
        print_r($student_print);

    //   recuperation du fichier et transformation en csv
        $filename = '../Modele/sauvegardes/2savestudents' . $date . '.csv';
    $student_p = 'Place,Nom\n';
    $place = array();

    // fonction str_replace remplace des caractéres
    $studentList = str_replace(' ', ';', $studentList);
    for ($i = 0; $i < 16; $i++) {
        $place[$i] = $k[$i] . ";" . $studentList[$i] . "\n";
    }

    // affichage tableau
    print_r($place);
  
    // prend le chemin $filename pour enregistrer le document $place
    file_put_contents($filename, $place);
}
        
// affichage
var_dump($filename);


?>