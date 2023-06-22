<?php

/*

1. Affichez un saut de ligne en utilisant la fonction `echo`

2. Créez deux variables avec le nom de votre choix, en respectant la syntaxe "camel case"
et écrivez une exemple de concaténation de variables

3. Créez une variable avec le nom de votre choix, en respectant la syntaxe "camel case"
et écrivez un exemple d'interpolation de variables

*/
echo (PHP_EOL);

$autosport1 = "ferrari"; 

$autosport2 = "nissan";

$autosport1B = "testarossa"; 

$autosportC = "J'aime les voitures $autosport1 "; 

$concatenation = $autosport1 . " " . $autosport1B . " " . $autosport2 ;

echo $autosportC;
echo (PHP_EOL);



?>
