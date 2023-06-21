<?php
$tab = array ("","","","","","","","","");
$nbl = readline("Saisissez un nombre de ligne que vous souhaitez ");
$nbp = 0;
$nbn = 0;


// boucle for avec une condition 
for($i=0; $i < $nbl; $i++){
    echo "Saisir un nombre : ";
    $nb1 = trim(fgets(STDIN));
    $tab[$i] = $nb1;
    if ($nb1 > 0) {
        $nbp = $nbp + 1 ;
    }
    else 
        $nbn = $nbn + 1;
}

echo "le nombre de positif est ".$nbp;
echo "\n";
echo " le nombre de négatif est ".$nbn;
?>