<?php
/* ecrire un algo qui saisie 2 nombres est affiche leur moyenne */
// Declaration
$moyenne=0;
echo "donnez un nombre : ";
$nbr1 = trim(fgets(STDIN));
echo "donner un 2eme nombre : ";
$nbr2 = trim(fgets(STDIN));
//traitement
$moyenne=($nbr1+$nbr2)/2;
echo "la moyenne de ".$nbr1." et ".$nbr2." est ".$moyenne;
?>
