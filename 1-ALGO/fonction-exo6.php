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

function adresse (int $numéro,string $rue,int $code_postal,string $ville) : string{
    return $numéro." ,".$rue ." ,".$code_postal." ,".$ville;
}

echo adresse(143, 'sercus', 59190, 'hazebrouck');