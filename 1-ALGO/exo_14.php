<?php
// Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres


    #On déclare et saisit les variables

    echo "Entrez le premier nombre : ";
    $nb1 = trim(fgets(STDIN));

    echo "Entrez le second nombre : ";
    $nb2 = trim(fgets(STDIN));

    #On teste le signe du produit des deux nombres

    if (($nb1 > 0 and $nb2 > 0) || ($nb1 < 0 and $nb2 < 0)) {
        echo "Le produit est positif";
    }
    else {
        echo "Le produit est négatif";
    }
?>
     