<?php

// Écrivez une fonction qui affiche la date du jour
// NOTE : la date du jour peut être récupérée en faisant l'appel de fonction suivant :

date('d/m/Y');

// Fonction pour afficher la date du jour
function afficherDateDuJour()
{
    $dateDuJour = date('d/m/Y');
    // Affichage
    echo "La date du jour est: " . ($dateDuJour);
}

// Appel de la fonction pour afficher la date du jour
echo afficherDateDuJour();
