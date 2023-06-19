<?php 
include('./etudiant.class.php');
include('./filiere.class.php');

// $startProgram = readline("Selectionner le nombre d'étudiant");
$studentsLists = [];

// for ($i=0; $i < $startProgram; $i++) { 

//     $name = readline("Entrer le Nom");
//     $prenom = readline("Entrer le Prenom");
//     $dateNaissance = readline("Entrer le date de naissance");
//     $code = readline("Entrer le Code");
//     $libelle = readline("Entrer le libelle");

//     //C
//     $etudiant = new Etudiant($name, $prenom, $dateNaissance, $code, $libelle);
//     array_push($studentsLists, $etudiant);
// }

// $codeBranches = ["IT", "BC", "BTP","IG"];

$etudiant1 = new Etudiant('Gacem','Nassim','31/07/1996','IT','Informatique');
$etudiant2 = new Etudiant('Kaft','Kevin','21/06/1974','GC','Boucherie');
$etudiant3 = new Etudiant('Seft','Lola','05/07/1992','GC','Batiment');
$etudiant4 = new Etudiant('Ruft','Quentin','23/04/2002','COM','Ingenieurie');
$etudiant5 = new Etudiant('Amar','Gest','23/04/1994','IT','Informatique');

$studentsLists = [
    $etudiant1,
    $etudiant2,
    $etudiant3,
    $etudiant4,
    $etudiant5,
];


 $sortArray = [];

for ($i=0; $i < count($studentsLists); $i++) { 

    if($studentsLists[$i]->getFiliere()->getCode() === 'IT'){

        $tempIT[] = $studentsLists[$i]->getNom();

    }

    if($studentsLists[$i]->getFiliere()->getCode() === 'GC'){

        $tempGC[] = $studentsLists[$i]->getNom();


    }

    if($studentsLists[$i]->getFiliere()->getCode() === 'COM'){

        $tempCOM[] = $studentsLists[$i]->getNom();


    }

}

$sortArray['Informatique'] = $tempIT;
$sortArray['GénieCivil'] = $tempGC;
$sortArray['Communication'] = $tempCOM;

//Display

var_dump($sortArray['Informatique']);
var_dump($sortArray['GénieCivil']);
var_dump($sortArray['Communication']);

?>




