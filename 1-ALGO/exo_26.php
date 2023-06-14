<?php
echo "saisi un entier";
$a = trim(fgets(STDIN));
echo "saisi un entier";
$b = trim(fgets(STDIN));
echo "saisi un entier";
$c = trim(fgets(STDIN));

$delta=pow($b,2)-(4*$a*$c);

if ($delta<0) {
    echo "l'equation n'a pas de solution";
}
elseif($delta==0)
{

$x = $b/(2*$a);
echo "l'equation a une solution x = $x";

}

else{
$x1


}

?>