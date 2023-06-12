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
function adresse(int $numero,string $rue,int $code_postal,string $ville):string{

    $adresse=array ($numero,$rue,$code_postal,$ville);
    return implode(', ',$adresse);
    
}
echo adresse(5,'des tilleuls',59480,'la bassée');
