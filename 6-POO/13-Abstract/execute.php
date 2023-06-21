<?php
include "personne.class.php";
include "manager.class.php";
include "developpeur.class.php";

$personne1 = new Manager("Informatique" , "Hulu" , "Lulu" , "Hlu@outlook.fr" , "0651248789" ,2300);
$personne2 = new Developpeur("PHP" , "Mucci" , "Julien" , "mJulien@outlook.fr" , "0897548789" ,1800);
$personne3 = new Manager("Informatique" , "Hulu" , "Lulu" , "Hlu@outlook.fr" , "0651248789" ,2300);
$personne4 = new Developpeur("Java/JEE" , "Mucci" , "Julien" , "mJulien@outlook.fr" , "0897548789" ,1800);

//Tentative d'instanciation de la class abstract 
// $personne5 = new Personne("Olivier" , "Quentin" , "jbg@outlook.fr" , "0656415787" , 2100);

$personne1 -> calculerSalaire();
$personne2 -> calculerSalaire();
 print_r($personne1);


$personne1->afficher();
$personne2->afficher();
$personne3->afficher();
$personne4->afficher();


?>