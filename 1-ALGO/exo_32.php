<?php
// Ecrire un alhgorithme qui déclare un tableau de 9 notes,dont on fait ensuite saisir les valeurs par l'utilisateur. 

// Variables
$note = array();

// Boucle for
for ($i = 0; $i < 9 ;$i++) {
    
// Affichage des notes saisies
$note[$i]= readline("Entrer la note : ");

}  
    
print_r($note);

?>