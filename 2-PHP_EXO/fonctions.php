<?php

// Écrivez une fonction qui affiche la date du jour
// NOTE : la date du jour peut être récupérée en faisant l'appel de fonction suivant :

date('d/m/Y');

function afficherDate() {
    $date = date('d/m/Y');
    return $date;
}
echo afficherDate();