

<?php

//Variables
$plusGrandNombre = 0;
$position = 0;

//Boucles
    for ($i = 1; $i <= 20; $i++) {
        echo "Veuillez entrer le nombre " . $i . " : ";
        $nombre = trim(fgets(STDIN));

//Conditions        
        if ($nombre > $plusGrandNombre) {
            $plusGrandNombre = $nombre;
            $position = $i ;
        }
    }

//Affichage du résultat
    echo "Le plus grand nombre parmi ces 10 nombres est : " . $plusGrandNombre ."\n";           
    echo "Il a été saisi en position n° : " . $position;

?>