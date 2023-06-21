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
$numero = 3;
$rue= "rue marceau";
$code = 59290;
$code_Postal = 59290;
$ville ="wasquehal";

function adresse($numero,$rue,$code_Postal,$ville) :string {

return ($numero. $rue.$code_Postal.$ville);

}
echo ($numero." ". $rue." ". $code_Postal." ". $ville);
