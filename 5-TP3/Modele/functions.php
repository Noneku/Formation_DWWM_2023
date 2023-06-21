<?php

//en input un tableau associatif avec la liste des étudiants à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le répertoire sauvegarde
function studentsToFile(array $student) : void{

    // Récupère la date et l'heure actuelles au format 'année-mois-jour-heure-minute-seconde'
    $dateTime = date('Y-m-d-H-i-s');
    
    // Construit le nom du fichier avec la date et l'heure
    $fileName = '..\Modele\sauvegardes\save_students_'.$dateTime. '.txt';
    
    // Parcours le tableau d'étudiants
    foreach ($student as $key => $students) {
        // Modifie chaque étudiant pour inclure la clé et les données concatenation 
        $student[$key] = $key . " " . $students;
    }
    
    // Écrit les étudiants dans le fichier
    file_put_contents($fileName, $student);
}

// Charge la liste des étudiants à partir d'un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    
    // Lit le contenu du fichier et le sépare en lignes
    $studentList = explode("\n", file_get_contents($pathFile), 16);
    
    // Crée un tableau avec les clés prédéfinies et les valeurs des étudiants
    $key = array ('Place_1', 'Place_2', 'Place_3', 'Place_4', 'Place_5', 'Place_6', 'Place_7', 'Place_8', 'Place_9', 'Place_10', 'Place_11', 'Place_12', 'Place_13', 'Place_14', 'Place_15', 'Place_16');
    $tab = array_combine($key, $studentList);
    
    // Retourne le tableau des étudiants
    return $tab;
}

// Sauvegarde la liste des étudiants au format CSV (le séparateur entre le nom et le prénom est ";")
function saveStudentsToCSVFile(array $student) : void{
   
    // Récupère la date et l'heure actuelles au format 'année-mois-jour-heure-minute-seconde'
    $dateTime = date('Y-m-d-H-i-s');
    
    // Construit le nom du fichier CSV avec la date et l'heure
    $fileName = 'save_students_'.$dateTime. '.csv';

    $filePath = '..\Modele\sauvegardes\ ' . $fileName;
    
    // Parcours le tableau d'étudiants
    foreach ($student as $key => $students) {
       
        }
    
    // Remplace les espaces par des points-virgules dans chaque étudiant
    $student = str_replace(' ', ';', $student);
    
    // Modifie chaque étudiant pour inclure la clé et les données
    foreach ($student as $key => $students) {
        $student[$key] = $key . " " . $students;
    }
    
    // Écrit les étudiants dans le fichier filpath en provenant de $student
    file_put_contents($filePath, $student);
}
// Sauvegarde la liste des étudiants au format JSON (le séparateur entre le nom et le prénom est ";")
function saveStudentsToJSONFile(array $student) : void{

    // Récupère la date et l'heure actuelles au format 'année-mois-jour-heure-minute-seconde'
    $dateTime = date('Y-m-d-H-i-s');
    
    // Construit le nom du fichier JSON avec la date et l'heure
    $fileName = 'save_students_'.$dateTime. '.json';
    
    // $fileName sera sauvegarde dans le chemin 
    $filePath = '..\Modele\sauvegardes\ ' . $fileName;
    
    // Parcours le tableau d'étudiants
    foreach ($student as  $key => $students) {
        
    }
    
    // Modifie chaque étudiant pour inclure la clé et les données
    foreach ($student as $key => $students) {
        $student[$key] = $key . " " . $students;
    }
    
    // Écrit les étudiants dans le fichier 
    file_put_contents($filePath, json_encode($student));
}

/* En entrée, un tableau associatif d'étudiants [K,V], en sortie, un tableau associatif
avec les valeurs mélangées.
Exemple :
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
    // Mélange le tableau d'étudiants
    shuffle($studentList);
    
    // Crée un tableau avec les clés prédéfinies et les valeurs des étudiants mélangées
    $key = array ('Place_1', 'Place_2', 'Place_3', 'Place_4', 'Place_5', 'Place_6', 'Place_7', 'Place_8', 'Place_9', 'Place_10', 'Place_11', 'Place_12', 'Place_13', 'Place_14', 'Place_15', 'Place_16');
    $tabCombin = array_combine($key, $studentList);
    
    // Retourne le tableau des étudiants mélangées
    return($tabCombin);
}

?>