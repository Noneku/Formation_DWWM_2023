<?php

/*$list = [ 'Coeur', 'oesophage', 'diaphragme', 'evh', 'urétre', 'rein' ];
$i = 0;
while( $i < 6 ) {
echo "{$list[$i]}.";
$i++;
}
$list = [ 'C', 'o', 'd', 'e', 'u', 'r' ];
for( $i = 0 ; $i < count($list) ; $i++ ) {
  echo "{$list[$i]}.";
}

$list = [ 'Cà', 'oa', 'da', 'ea', 'ua', 'ra' ];
foreach( $list as $key => $value ) {
  echo "{$value}.";
}


$list = [ 'C', 'o', 'd', 'e', 'u', 'r' ];
$i = 0;
do {
echo "{$list[$i]}.";
$i++;
} while( $i < 6 );

*/
#Déclaration et saisit des variables
echo "Entrez un nombre : ";
$nbInit = trim(fgets(STDIN));
$nbPos = 0;
$nbComp = -INF;
$i = 1;

#Traitement
while ($nbComp != 0) {
    if ($nbInit<$nbComp) {
        $nbInit = $nbComp;
        $nbPos = $i ;
    }
    $i++;
    echo "Entrez un nombre :";
    $nbComp = trim(fgets(STDIN));
}

echo "Le nombre le plus grand est ".$nbInit." il se trouve en position ".$nbPos.".";

?>