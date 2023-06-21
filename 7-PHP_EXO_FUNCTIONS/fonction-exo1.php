<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 7.3'`

*/


// void : indique que la fonction ne retourne pas de valeur (Même si une fonction a un type de retour void, elle retournera toujours une valeur, cette valeur est toujours null)
//  mais que la fonction peut quand même se terminer

function message(string $texte) : void {
    echo $texte;
    echo PHP_EOL;
}

message('Php 7.3');

?>