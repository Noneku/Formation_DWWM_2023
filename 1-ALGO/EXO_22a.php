<?php
//Variables
$plusGrandNombre = 0;

//Boucles
    for ($i = 1; $i <= 10; $i++) {
        echo "Veuillez entrer le nombre " . $i . " : ";
        $nombre = trim(fgets(STDIN));

//Conditions        
        if ($nombre > $plusGrandNombre) {
            $plusGrandNombre = $nombre;
        }
    }

//Affichage du résultat
    echo "Le plus grand nombre parmi ces 10 nombres est : " . $plusGrandNombre;

?>