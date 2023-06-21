<?php
// Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieurs à la moyenne de la classe. 

// Saisir le nombre d'étudiants dans la classe 
$tab = array();
$total = 0;
$noteSuperieur = array();

// Boucle for pour entre un nombre 
for ($i = 0; $i < 5; $i++) {
    $nb = readline("Entrer un nombre");
    $tab[$i] = ($nb);
    $total += $tab[$i];
}

// Calculer la moyenne 
$moyenne = $total / count($tab);

// Boucle for pour checher les moyenne au dessus de la moyenne 
for ($i = 0; $i < 5; $i++) {

    if ($tab[$i] > $moyenne) {
        $noteSuperieur[$i] = $tab[$i];
    }
}

// Affichage 
print_r($noteSuperieur);

?>