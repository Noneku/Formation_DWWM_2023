<?php

//Variables
    /*$plusGrandNombre = 0;
    $position = 0;
    $i = 0;

//Boucle while
    while (true) {
        $i++;
        echo "Veuillez entrer un nombre : ";
        $nombre = trim(fgets(STDIN));

//Conditions
        if ($nombre == 0) {
            break;
        }

        if ($nombre > $plusGrandNombre) {
            $plusGrandNombre = $nombre;
            $position = $i;
        }
    }

//Affichage du résultat
    echo "Le plus grand nombre parmi les nombres saisis est : " . $plusGrandNombre . " ";
    echo "Il a été saisi en position : " . $position;*/

    $nombre = 0;
    $plusGrandNombre = 0;
    $position = 0;
    $i = 0;

    do {
        $i++;
        $nombre = readline ("Veuillez entrer un nombre : ");
        if ($plusGrandNombre < $nombre) {
            $plusGrandNombre = $nombre;
            $position = $i;
        }
    } while ($nombre != 0);

    echo "Le nombre : " . $plusGrandNombre . " position : " . $position;
?>
