<?php

$date = date('dmY-his');

function studentsToFile(array $studentList): void
{
    global $date;
    $studentListSimple = array_values($studentList);
    $fichier = 'Modele/sauvegardes/save_students_' . $date . '.txt';
    file_put_contents($fichier, ($studentListSimple));
}

function loadStudentsFromFile(String $pathFile, int $x): array
{
    if (file_exists($pathFile)) {
        $studentListSimple =  explode("\n", file_get_contents($pathFile));
        if ($x == 2) {
            echo "Associatif";
            for ($i = 0; $i < 16; $i++) {
                $key[$i] = "Place_" . ($i + 1);
                $studentList[$key[$i]] = $studentListSimple[$i];
            }
            return $studentList;
        } else if ($x == 1) {
            return $studentListSimple;
        } else {
            echo "Erreur";
        }
    } else {
        echo "Ce fichier n'existe pas";
    }
}

function saveStudentsToCSVFile(array $studentList): void
{
    global $date;
    $studentListSimple = array_values($studentList);
    for ($i = 0; $i < 16; $i++) {
        $key[$i] = "Place_" . ($i + 1);
        $temp[$i] = $key[$i] . ";" . $studentListSimple[$i];
    }
    $temp = str_replace(" ", ";", $temp);

    file_put_contents('Modele/sauvegardes/save_students_' . $date . '.csv', $temp);
}

function shufflePositions(array $studentList)
{
    global $date;
    $studentListSimple = array_values($studentList);
    $temp = $studentListSimple;
    shuffle($temp);
    $studentList = null;
    for ($i = 0; $i < 16; $i++) {
        $key[$i] = "Place_" . ($i + 1);
        $studentList[$key[$i]] = $temp[$i];
        $a[$i] = $key[$i] . " " . $temp[$i] . "\n";
        $a = str_replace(" ", ";", $a);
    }
    file_put_contents('../Modele/sauvegardes/shuffle_save_students_' . $date . '.csv', $a);
    return $studentList;
}

function arrayToJson(array $studentList)
{
    global $date;
    $temp = json_encode($studentList);

    file_put_contents('../Modele/sauvegardes/save_students_' . $date . '.json', $temp);
    return $studentList;
}

