<?php

//Variables
$sizeArray = readline("Choisissez la taille de votre tableau : ");
$tab = [];
$positif = [];
$negatif = [];

//Traitement
for ($i=0; $i < $sizeArray; $i++) {
    //Insert in $tab the number of loops in $sizeArray
    $tab[] = $i; //Size of $tab = $sizeArray
    $insertArray = readline("Entrer votre valeur : ");
    //Insert number by user in $tab
    $tab[$i] = $insertArray;

    //Compare negatif and positif numbers
    if($tab[$i] > 0){
        //All numbers positif in $tab push in $positif
        $positif[$i] = $tab[$i];
    }
    else{
        //All numbers positif in $tab push in $negatif
        $negatif[$i] = $tab[$i];
    }
}
//Display
echo "Le nombre de negatif est de : ".count($negatif)."\n"."Le nombre de positif est de : ".count($positif);

//Optimisation
/*
<?php
$nbValeurs = readline("Combien de valeurs?");

$tab = array();

$negatif = 0;
$positif = 0;
for ($i = 0; $i < $nbValeurs; $i++) {
    $tab[$i] = readline("Entrer une note");    

    if ($tab[$i] < 0) {
        $negatif++;
    } else {
        $positif++;
    }
}
echo "Il y a ".$negatif."Nombre negatif et".$positif."Nombre positif\n";

?>
 */
?>