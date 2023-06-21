<?php
    // Demande l'âge du parisien
    echo "Veuillez entrer l'âge du parisien : ";
    $age = trim(fgets(STDIN));

    // Demande le sexe du parisien
    echo "Veuillez entrer le sexe du parisien (M pour masculin, F pour féminin) : ";
    $sexe = trim(fgets(STDIN));

    // Vérifie si le parisien est imposable
    if (($sexe == 'M' && $age > 20 || ($sexe == 'F' && $age >= 18 && $age <= 35))) {
       echo "imposable";
    } else {
        echo "non imposable";
    }
?>
