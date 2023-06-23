<?php

/*

écrire une fonction nommée `adresse` qui :

- prend un paramètre nommé `$numero`
- prend un paramètre nommé `$rue`
- prend un paramètre nommé `$code_postal`
- prend un paramètre nommé `$ville`
- concatène (met bout à bout, chaîne) tous les paramètres en les séparant d'une virgule suivie d'un espace `', '`
- renvoit le paramètre

appelez cette fonction avec quatre paramètres de votre choix et affichez le résultat

*/

function adresse($numero, $rue, $code_postal, $ville) : string {
    
    // Renvoyer le paramètre 
    return $numero . ', ' . $rue . ', ' . $code_postal . ', ' . $ville;
    }
    
    // Valeurs a afficher 
    $numero = "42";
    $rue = "Rue du luxembourg";
    $code_postal = "59205";
    $ville = "Villeville";
    
    // Affichage 
    $resultat = adresse($numero, $rue, $code_postal, $ville);
    echo $resultat;

?>





