<?php
$nbl = readline("Saisissez un nombre de ligne");
$tab1 = array ();
$tab2 = array ();
$i = 0;

//décaler un tableau en faisant un autre tableau
for ($i=0; $i < $nbl; $i++) { 

    $tab1[$i] = readline("Saisissez un nombre");
 
}
print_r ($tab1);

for ($i=0; $i < $nbl; $i++) { 

    $tab2[$i] = $tab1[$i] + 1;
 
}
print_r ($tab2);
?>