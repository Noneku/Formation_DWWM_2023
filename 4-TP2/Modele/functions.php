<?php

//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde

$pathFile = "ListeStagiaire.txt";
$date = date('dmY-his');

function studentsToFile(array $studentList): void
{
    global $date;
    global $studentListSimple;
    $fichier = 'Modele/sauvegardes/save_students_' . $date . '.txt';
    file_put_contents($fichier, ($studentListSimple));
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile(String $pathFile): void
{
    if (file_exists($pathFile)) {
        global $studentList;
        global $studentListSimple;
        $studentListSimple =  explode("\n", file_get_contents($pathFile));

        for ($i = 1; $i <= 16; $i++) {
            $studentList[$i] = ["Place_" . $i => $studentListSimple[$i - 1]];
        }
    } else {
        echo "Ce fichier n'existe pas";
    }
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList): void
{
    global $date;
    global $studentList;
    global $studentListSimple;
    for ($i = 0; $i < 16; $i++) {
        $key[$i] = "Place_" . ($i + 1);
        $temp[$i] = $key[$i] . ";" . $studentListSimple[$i];
    }
    $temp = str_replace(" ", ";", $temp);

    file_put_contents('Modele/sauvegardes/save_students_' . $date . '.csv', $temp);
}

/*en en entrée un tableau associatif de stagiaire [K,V], en sorti un tableau associatif
avec les values mélangé. */

function shufflePositions(array $studentList)
{
    global $studentListSimple;
    global $date;

    $studentList = null;
    $temp = $studentListSimple;

    shuffle($temp);

    for ($i = 0; $i < 16; $i++) {
        $key[$i] = "Place_" . ($i + 1);
        $studentList[$i] = [$key[$i] => $temp[$i]];
        $a[$i] = $key[$i] . " " . $temp[$i] . "\n";
        $a = str_replace(" ", ";", $a);
    }
    file_put_contents('Modele/sauvegardes/shuffle_save_students_' . $date . '.csv', $a);
}
