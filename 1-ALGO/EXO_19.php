<?php
//on declare et saisie les variables

$nbrDepart= readline("Entrez un nombre de départ : ");

echo "Les dix nombres suivants sont :\n";

//on teste

for ($i = 0; $i < 10; $i++) {
    echo  ++$nbrDepart ."\n";         
}











?>