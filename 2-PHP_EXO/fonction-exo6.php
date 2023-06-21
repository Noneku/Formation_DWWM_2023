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

function adresse($numero, $rue, $code_postal, $ville) {
    $adresse_complete =  $numero . ', ' . $rue . ', ' . $code_postal . ', ' . $ville;
    return $adresse_complete;
}

$resultat = adresse(9, 'Rue de l\'Abbé Bonapain', '59491', 'Villeneuve d\'ascq');

echo 'J\'habite au '.  $resultat;
