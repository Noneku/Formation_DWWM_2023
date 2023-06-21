<?php
// Variables de la Saisie de l'utilisateur
$nb = 1;
// Variables pour stocker le nombre le plus grand
$a = 0;
// Variables de la Position du plus grand nombre
$pos = 0;
// Variables de la position au fur et à mesure
$i = 0;
// Boucles Tant que $nb n'est pas pas égal à 0
while ($nb != 0) {
    // La saisie continue
    $nb = readline("Entré un nombre $i : ");
   

    // Voir si c'est le plus grand nombre
    if ( $nb > $a) {
       // Faire avancer la position de 1
         
        // 
        $a = $nb; 
     
     // le nombre le plus grand sera stocké dans la variable pos
        $pos = $i+1;
       

    }
    $i++;
}
echo "Le plus grand nombre saisi est : $a";
echo "\n";
echo "Il était à la position : $pos";

?>