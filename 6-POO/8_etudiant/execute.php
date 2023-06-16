<?php

include "Etudiant.class.php";
include "Filiere.class.php";

// $etudiant=new Etudiant("Deweireld","Nicolas","29/05/1989");
// $etudiant2 = new Etudiant("Dupond","Jacques","05/08/1990");
// $etudiant3 = new Etudiant("Gilbert","Danielle","30/08/1990");
// $etudiant4 = new Etudiant("Henry","Cavil","05/07/1990");
// $etudiant5 = new Etudiant("Gara","Amelie","20/09/1992");


// $informatique= array ($etudiant,$etudiant2);
// $technodeInfoetComm=array ($etudiant3);
// $genieCivil = array($etudiant4,$etudiant5);

//Creation de la liste de la filière 1
$nb = readline("Combien d'élèves veulent s'inscrire dans la filière ?");

for ($i=0; $i < $nb; $i++) { 
    $nom=readline("donnez le nom de l'étudiant  : ");
    $prenom=readline("donnez le prénom de l'étudiant  : ");
    $date=readline("donnez la date de naisssance de l'étudiant  : ");
    $informatique[]=$etudiant[$i]=new Etudiant($nom,$prenom,$date);
}

$f1=new Filliere("IT","Informatique",$informatique);


// //Creation de la liste de la filière 2 
$nb = readline("Combien d'élèves veulent s'inscrire dans la filière ?");

for ($i=0; $i < $nb; $i++) { 
    $nom=readline("donnez le nom de l'étudiant  : ");
    $prenom=readline("donnez le prénom de l'étudiant  : ");
    // $date=readline("donnez la date de naisssance de l'étudiant  : ");
    $technodeInfoetComm[]=$etudiant[$i]=new Etudiant($nom,$prenom,$date);
}

$f2 =new Filliere("TIC","Techno de l'info et de la communication",$technodeInfoetComm);

// //Creation de la liste de la filière 3
$nb = readline("Combien d'élèves veulent s'inscrire dans la filière ?");

for ($i=0; $i < $nb; $i++) { 
    $nom=readline("donnez le nom de l'étudiant  : ");
    $prenom=readline("donnez le prénom de l'étudiant  : ");
    // $date=readline("donnez la date de naisssance de l'étudiant  : ");
    $genieCivil[]=$etudiant[$i]=new Etudiant($nom,$prenom,$date);
}

$f3=new Filliere("GC","Genie Civil",$genieCivil);




//Affichage
echo $f1->getNom();
echo "\n";
echo $f2->getNom();
echo "\n";
echo $f3->getNom();
echo "\n";
echo "\n";
echo $f1;
echo "\n";
echo "\n";
echo $f2;
echo "\n";
echo "\n";
echo $f3;


?>