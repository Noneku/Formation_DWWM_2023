<?php 
include('./etudiant.class.php');
include('./filiere.class.php');

$etudiant1 = new Etudiant('Gacem','Nassim','31/07/1996','IT','Informatique');
$etudiant2 = new Etudiant('Kaft','Kevin','21/06/1974','BC','Boucherie');
$etudiant3 = new Etudiant('Seft','Lola','05/07/1992','BTP','Batiment');
$etudiant4 = new Etudiant('Ruft','Quentin','23/04/2002','IG','Ingenieurie');

//Stock students in array
$students = [$etudiant1, $etudiant2, $etudiant3, $etudiant4];

$branches = (Filiere::$branches());

// //Display all Students
// foreach ($branches as $branche => $value) {
    
//     foreach ($students as $student => $value) {
//         echo $students->getLibelle();
//         // if($student->getFiliere()->getlib)
//     }
// }

?>