<?php
//Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur,
//et qui lui dit ensuite quel était le plus grand parmis ces 20 nombres

//DECLARATION
$max = 0;

//INSTRUCTION
for ($i = 0; $i <= 20; $i++) {
    //sert à saisir nombre à chaque tour
    echo "\n";  
    $nombre = readline("Entrez un nombre : "); // Demande à l'utilisateur d'entrer un nombre
                                                                                                                                                 
    if ($nombre > $max) {
        $max = $nombre; // Remplace le précédent plus grand nombre par le nouveau nombre
    }
}
echo "Le plus grand nombre saisi est : " . $max;

/*$plusgrand = null;
echo "\n";
$nombre = readline("ecrit un nombre:");

//INSTRUCTION
for ($i = 1; $i <= 20; $i++) {
    //sert à saisir nombre à chaque tour
    echo "\n";
    $nombre = readline("entrer nombre");


    // Conversion de la saisie en nombre entier
    $nombre = intval($nombre);

    if (($plusgrand === null) || ($plusgrand >  $nombre)) {
        $plusGrand = $nombre;
    }
}
echo "Le plus grand nombre saisi est : $plusGrand";*/


