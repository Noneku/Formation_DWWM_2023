<?php

// Écrivez une fonction qui affiche la date du jour
// NOTE : la date du jour peut être récupérée en faisant l'appel de fonction suivant :

date('d/m/Y');

function afficherDateDuJour() {
    $dateDuJour = date('d/m/Y');
    echo "La date du jour est : $dateDuJour";
}


afficherDateDuJour();
