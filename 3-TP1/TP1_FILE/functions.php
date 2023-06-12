<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
    $dt=date('d-m-Y-His');
 
    //chemin d'accés
    $name="./sauvegardes/save_students_$dt.txt";
    file_put_contents($name,$studentList);
    // var_dump($studentList);
    // echo "je suis dans studentsToFile";

}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    //crée un tableau a partir d'un fichier \n caratere recherche pour crée la séparation
    $file=explode("\n",file_get_contents($pathFile));

 
   return $file;

    }

   
   
   
    



//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    $dt=date('d-m-Y-His');
 
    //chemin d'accés
    foreach ($studentList as $value) {
        $tab[]=str_getcsv($value);
    }
    $tableau=str_replace(" ",";",$studentList);
    file_put_contents(".\sauvegardes\save_students_01-06-2023-151650..csv",$tableau);

    echo "je suis dans saveStudentsToCSVFile";
}

?>