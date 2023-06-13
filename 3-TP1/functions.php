<?php




//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile(String $pathFile): void
{
    if (file_exists($pathFile)) {
        global $studentList;
        $studentList =  explode("\n", file_get_contents($pathFile));
    } else {
        echo "Ce fichier n'existe pas";
    }
}

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList): void
{
    global $date;
    $fichier = 'sauvegardes/save_students_' . $date . '.txt';
    file_put_contents($fichier, $studentList);
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList): void
{
    global $date;
    global $studentList;
    $texte = str_replace(" ", ";", $studentList);
    file_put_contents('sauvegardes/save_students_' . $date . '.csv', $texte);
}
