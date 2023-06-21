<?php

//en input un tableau simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $student): void
{
    $date = date('Y-m-d-H-i-s');

    // Mettre la date avec l'heure minute et seconde afin de remplacer dateheureminuteseconde.txt
    $fileName = '../Modele/sauvegardes/' . $date . '.txt';

    // Parcours le tableau d'étudiants
    foreach ($student as $key => $students) {
        // Modifie chaque étudiant pour inclure la clé et les données
        $student[$key] = $key . " " . $students;
    }
    // Afficher les étudiants dans le tableau 
    file_put_contents($fileName, $student);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile(String $pathFile): array
{
    // séparer avec un saut de ligne 
    $studentList = explode("\n", file_get_contents($pathFile), 16);

    // Crée un tableau avec les clés prédéfinies et les valeurs des étudiants
    $key = array ('Place_1', 'Place_2', 'Place_3', 'Place_4', 'Place_5', 'Place_6', 'Place_7','Place_8', 'Place_9', 'Place_10', 'Place_11', 'Place_12', 'Place_13', 'Place_14', 'Place_15', 'Place_16');
    $tab = array_combine($key, $studentList);

    // Retourne le tableau des étudiants
    return $tab;
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $student): void

{
    // Variable date 
    $date = date('Y-m-d-H-i-s');

    // Création du fichier CSV avec la date et l'heure
    $fileName = 'save_students_' . $date . '.csv';
    $filePath = 'C:\xampp\htdocs\DWWM\4_TP\TP1_FILE\sauvegardes' . $fileName;

    // Parcours le tableau d'étudiants
    foreach ($student as $key => $students) {
        // Convertit chaque étudiant en un tableau en utilisant le point-virgule comme séparateur
        $tab2[] =  str_getcsv($students, ';');
    }

    // Remplace les espaces par des points-virgules dans chaque étudiant
    $student = str_replace("\n", ';', $student);

    // Modifie chaque étudiant pour inclure la clé et les données en executant une boucle for 
    foreach ($student as $key => $students) {
        $student[$key] = $key . " " . $students;
    }

    // Affichage
    file_put_contents($filePath, $student);
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
    // Mélange le tableau d'étudiants
    shuffle($studentList);
    
    // Crée un tableau avec les clés prédéfinies et les valeurs des étudiants mélangées
    $key = array ('Place_1', 'Place_2', 'Place_3', 'Place_4', 'Place_5', 'Place_6', 'Place_7','Place_8', 'Place_9', 'Place_10', 'Place_11', 'Place_12', 'Place_13', 'Place_14', 'Place_15', 'Place_16');
    $akhy = array_combine($key, $studentList);
    
    // Retourne le tableau des étudiants mélangées
    return($akhy);
}

function saveStudentsToJSONFile(array $student) : void{

    // Récupère la date et l'heure actuelles 
    $date = date('Y-m-d-H-i-s');

    // Construit le nom du fichier JSON avec la date et l'heure
    $fileName = 'save_students_'. $date. '.json';

    // $fileName sera sauvegarde dans le chemin 
    $filePath = '..\Modele\sauvegardes\ ' . $fileName;

    // Parcours le tableau d'étudiants en y incluant uen boucle for 
    foreach ($student as  $key => $students) {

    }
    // Modifie chaque étudiant pour inclure la clé et les données
    foreach ($student as $key => $students) {
        $student[$key] = $key . " " . $students;
    }

    // affiche les étudoiants dans le tableau 
    file_put_contents($filePath, json_encode($student));
}

