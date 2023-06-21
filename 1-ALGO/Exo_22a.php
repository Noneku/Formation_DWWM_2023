<?php
//Variables
    $plusGrandNombre = 0;

//Boucles
    for ($i = 1; $i <= 10; $i++) {
        $nombre = readline ("Veuillez entrer le nombre " . $i . " : ");
        

//Conditions        
        if ($nombre > $plusGrandNombre) {
            $plusGrandNombre = $nombre;
        }
    }

//Affichage du résultat
    echo "Le plus grand nombre est : " . $plusGrandNombre;
?>