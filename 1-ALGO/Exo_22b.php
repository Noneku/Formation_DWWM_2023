<?php
//Variables
    $plusGrandNombre = 0;
    $position = 0;

//Boucles for
    for ($i = 1; $i <= 10; $i++) {
        $nombre = readline ("Veuillez entrer le nombre " . $i . " : ");

//Conditions     
        if ($nombre > $plusGrandNombre) {
            $plusGrandNombre = $nombre;
            $position = $i;
        }
    }

//Affichage    
    echo "Le plus grand nombre est : " . $plusGrandNombre . " ";
    echo "Il a été saisi en position n° : " . $position;
?>