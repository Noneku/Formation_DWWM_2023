<?php
$pg = 0;
$nbsaisie = 100;
$nbPos = 0;
$i = 0;

do{ $i++; 
    $nb = readline("entrez un nombre");

if ($pg<$nbsaisie){
$pg = $nbsaisie;
$pos = $i;
}

}while($nb!=0);
echo "le nombre". $pg." position:".$pos;

?>