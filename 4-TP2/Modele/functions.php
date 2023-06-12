<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{

    $dt=date('d-m-Y-His');

    //chemin d'accés
    $name="./sauvegardes/save_students_$dt.txt";
    file_put_contents($name,$studentList);

    echo "je suis dans studentsToFile";
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    
    $file=explode("\n",file_get_contents($pathFile),16);
    $studentList = file($pathFile);


    $i=1;
    foreach ($file as $key => $value) {

        unset($file[$key]);//detruit la clés
        $file['place_'.$i] = $value;
        $i++;
    }

    echo "\nje suis dans loadstudentsfromfile\n";
    // print_r($file);
    return $file;

}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{

    $dt=date('d-m-Y-H-i-s');

    foreach ($studentList as $key => $value) {

        //dans le tableau student list on concataine la clé et sa valeur
        $studentList[$key]=$key." ".$value;

    }

    foreach ($studentList as $key => $value) {

        $key=str_getcsv($value);

    }

    $tableau=str_replace("\n",";",$studentList);

    file_put_contents("..\Modele\sauvegardes\save_$dt.csv",$studentList);

    echo "je suis dans saveStudentsToCSVFile";
    
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

    $key=array_keys($studentList);
    $tab=array_values($studentList);
    $i=1;
    shuffle($studentList);

    array_combine($key,$studentList);

    foreach ($studentList as $key => $value) {
        
        unset($studentList[$key]);//detruit la clés
        $studentList['place_'.$i] = $value;
        $i++;

    }

    echo "\nje suis dans shuffle\n";
    var_dump($studentList);
    return $studentList;
}