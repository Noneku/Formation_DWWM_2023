<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void {
    
    //Create File save_student AND Import Array $studentList in file save_student
    file_put_contents("./sauvegardes/save_student_" . date("DMY-His") .".txt",$studentList);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array {
    //Put 1 element in array after line break
    $listeStudents = explode("\n",file_get_contents($pathFile));

    return $listeStudents;
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentListSave) : void {

    //Replace all " " by ";" in studentListSave
        $studentListSave = str_replace(" ", "; ",$studentListSave);
    
    //Save a copy files in SAVE-FOLDER and exclude hide file
    $saveFolder = preg_grep('/^([^.])/', scandir("./sauvegardes"));
    //Browse a folder "sauvegardes"
    foreach ($saveFolder as $key => $value) {
        //Replace the extension of file ".txt" to ".csv"
        $value = str_replace("txt", "csv",$value);
        //Create new file from $studentListSave and put him in directory CSV
        file_put_contents("./CSV/".$value,$studentListSave);
        }
    }


?>