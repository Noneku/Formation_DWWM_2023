<?php

//Variables
$check;
$nbrUser1 = readline("Entrer un nombre\n");
$nbrUser2 = readline("Entrer un nombre\n");

//Algo
if($nbrUser1 >= 1){
    //Display
    $result1 = "Votre nombre $nbrUser1 est positif\n";
}
else {
    //Display
     $result1 = "Votre nombre $nbrUser1 est negatif\n";
}
if($nbrUser2 >= 1){
    //Display
    $result2 = "Votre nombre $nbrUser2 est positif\n";
}
else {
    $result2 = "Votre nombre $nbrUser2 est negatif\n";
}

print("Nombre numéro 1 : ".$result1."Nombre numéro 2 : ".$result2);
?>