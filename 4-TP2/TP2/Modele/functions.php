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
        // Modifie chaque étudiant pour inclure la clé et les données
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
    $key = array ('Place 1', 'Place 2', 'Place 3', 'Place 4', 'Place 5', 'Place 6', 'Place 7', 'Place 8', 'Place 9', 'Place 10', 'Place 11', 'Place 12', 'Place 13', 'Place 14', 'Place 15', 'Place 16');
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
        // Convertit chaque étudiant en un tableau en utilisant le point-virgule comme séparateur
        $tab2[] =  str_getcsv($students, ';');
    }
    
    // Remplace les espaces par des points-virgules dans chaque étudiant
    $student = str_replace("\n", ';', $student);
    
    // Modifie chaque étudiant pour inclure la clé et les données
    foreach ($student as $key => $students) {
        $student[$key] = $key . " " . $students;
    }
    
    // Écrit les étudiants dans le fichier
    file_put_contents($filePath, $student);
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
    $key = array ('Place 1', 'Place 2', 'Place 3', 'Place 4', 'Place 5', 'Place 6', 'Place 7', 'Place 8', 'Place 9', 'Place 10', 'Place 11', 'Place 12', 'Place 13', 'Place 14', 'Place 15', 'Place 16');
    $love = array_combine($key, $studentList);
    
    // Retourne le tableau des étudiants mélangées
    return($love);
}

?>