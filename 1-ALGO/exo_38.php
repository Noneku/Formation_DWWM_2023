<?php
// Saisir un nombre de valeur
$valeur = readline("Saisir le nombre de valeur : ");

// Variable tableau
$tab = array();

// Variable pour stocker le nombre le plus grand
$pg = 0;

// Variable de la position du plus grand nombre
$pos = 0;

// Boucle pour le tableau
for ($i=0; $i < $valeur; $i++) { 
    $val = readline ("Saisir votre valeur : ");
    $tab[$i] = $val;
// Voir si c'est le plus grand nombre
if ( $val > $pg) {
    
    //   PG prend la valeur la plus grand a chaque boucle 
     $pg = $val; 
  
  // le nombre le plus grand sera stocké dans la variable pos
     $pos = $i+1;
    
 }


}


echo "Le plus grand nombre saisi est : $pg";
echo "\n";
echo "Il était à la position : $pos";




?>