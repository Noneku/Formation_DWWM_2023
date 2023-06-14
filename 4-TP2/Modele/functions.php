<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile($studentsList) : void {

    $fileName = '../Modele/sauvegardes/save_date'.date("d-m-Y_His"). '.txt';
    file_put_contents($fileName, $studentsList);
}



//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile)  {
    // Je récupère le fichier.txt et le transforme en tableau simple nommé 'StudentsList' :
    $fichier = file_get_contents($pathFile);
    $studentsList = explode("\n", $fichier, 16); // pour chaque interligne, une ligne de tableau est créé à partir du fichier, avec une limite à 16 pour les 16 étudiants présents dans la liste 

    // Je déclare un nouveau tableau qui correspondra aux clés du nouveau tableau associatif :
    $places = array("place_1", "place_2", "place_3", "place_4", "place_5", "place_6", "place_7", "place_8", "place_9", "place_10", "place_11", "place_12", "place_13", "place_14", "place_15", "place_16");

    // J'utilise la fonction "array_combine" pour associer les deux tableaux et créer le tableau associatif nommé "assoStudents" :
    $assoStudents = array_combine($places, $studentsList);
    
    return $assoStudents;
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


function shufflePositions(array $assoStudents) : array {

    // Je crée le tableau représentant les clés de mon futur tableau associatif :
    $places = array("place_1", "place_2", "place_3", "place_4", "place_5", "place_6", "place_7", "place_8", "place_9", "place_10", "place_11", "place_12", "place_13", "place_14", "place_15", "place_16");
    
    // Je mélange les valeurs du tableau :
    shuffle($assoStudents);

    // Je créé le nouveau tableau associatif à partir du tableau de clés et du tableau de valeurs :
    $assoStudents = array_combine($places, $assoStudents);

    // J'affiche le tableau final après mélange :
    return $assoStudents;
}


//sauvegarde de la liste des students au format CSV :
function saveStudentsToCSVFile(array $assoStudents) {

    $fileName = '../Modele/sauvegardes/save_date'.date("d-m-Y_His"). '.csv';


// Boucle avec concaténation permettant de reprendre les clés et de les associer individuellement à chaque stagiaire :
    foreach ($assoStudents as $key => $student) {
        $assoStudents[$key] = $key. " => %" .$student;
    }

    $noms = str_replace("%", ";", $assoStudents);
    file_put_contents($fileName, implode($noms));
}

?>