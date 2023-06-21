<?php
$nbl = readline("Saisissez un nombre de ligne");
$tab1 = array ();
$stock = 0;
$pstock = 1;
$i = 0;


for ($i=0; $i < $nbl; $i++) { 

    $tab1[$i] = readline("Saisissez un nombre");
 
}
print_r ($tab1);

for ($i=0; $i < $nbl; $i++) { 
    if($stock < $tab1[$i]){
        $stock = $tab1[$i];
        $pstock = $i;

    }else{
        
    
    }
    
 
}
print_r ($tab1);

echo "le plus grand chiffre est ".$stock." saisie en position ".$pstock;
?>