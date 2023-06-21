<?php
// Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmis ces 20 nombres.

$plusGrand = null;

for ($i = 0; $i < 20; $i++) {

    // Demande à l'utilisateur d'entrer un nombre
    $nombre = readline("Entrez le nombre numéro "); 

    $nombre = ($i + 1) . ": ";

    // Vérifie si le nombre est plus grand que celui enregistré précédemment
    if ($plusGrand === null || $nombre > $plusGrand) {
        $plusGrand = $nombre;
    }
}

// Affiche le plus grand nombre
echo "Le plus grand nombre est : " . $plusGrand;

?>