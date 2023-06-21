<?php
// Déclaration du Tableau 
$notes = array();
$i = 1;

// Boucle 
while ($i < 10) {
    $notes[$i] = readline("Veuillez entrer vôtre notes : ");
    $i++;
    
}
print_r($notes);

?>