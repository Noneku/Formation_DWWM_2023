<?php
// Saisie de la note par l'étudiant
$note1 = readline("Entrée vôtre note : ");
$note2 = readline("Entrée vôtre note : ");
// Variables Coefficient
$coeff1 = 1;
$coeff2 = 2;
if (($note1 * $coeff1) + ($note2 * $coeff2)/2 >= 10) {
    echo "Vous êtes reçu ! \n";
}
else {
    echo "Vous avez échoué !";
}


?>
