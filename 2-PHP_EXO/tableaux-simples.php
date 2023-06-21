<?php











// 1. Créez une variable avec le nom de votre choix, en respectant la syntaxe "camel case"
// et affectez-lui un tableau contenant trois nombres entiers
$nombresEntiers = array(1, 2, 3);
$deuxiemeNombre = $nombresEntiers[1];
echo $deuxiemeNombre;
echo PHP_EOL;

// 2. Même exercice avec des nombres à virgule flottante
$nombresFlottants = array(1.2, 3.4, 5.6);

$troisiemeNombre = $nombresFlottants[2];
echo $troisiemeNombre;
echo PHP_EOL;

// 3. Même exercice avec des chaînes de caractères
$chainesCaracteres = array("foo", "bar", "baz");

$deuxiemeChaine = $chainesCaracteres[1];
echo $deuxiemeChaine;
echo PHP_EOL;

// 4. Même exercice avec un tableau contenant un nombre entier, un nombre à virgule flottante et une chaîne de caractères
$tableau = array(10, 3.14, 'Hello, world!');

$entier = $tableau[0];
$flottant = $tableau[1];
$chaine = $tableau[2];

echo $entier;    
echo PHP_EOL;
echo $flottant;  
echo PHP_EOL;
echo $chaine;    
echo PHP_EOL;