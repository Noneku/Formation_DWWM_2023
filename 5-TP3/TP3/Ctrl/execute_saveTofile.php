<?php
include "../Modele/functions.php";
session_start();

//Save the file on CSV and in folder SAVE
studentsToFile($_SESSION['studentsListSort']);
saveStudentsToCSVFile($_SESSION['studentsListSort']);

//Panel display folder SAVE
$folder = preg_grep('/^([^.])/', scandir("../Modele/sauvegardes"));

if(!isset($folder)){
    var_dump("test");
}

$_SESSION['folder'] = $folder;

//Redirection
header("Location: ../View/Affichage.php");

?>