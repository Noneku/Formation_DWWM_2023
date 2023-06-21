<?php
/* Soit un tableau T à deux dimensions (12,8)préablement rempli de valeur numériques, 
Ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau*/
$tabt2d = array (
             /*0*/  /*1*/    
/*0*/    array(12 ,  8),
/*1*/    array(3  ,  6),
/*2*/    array(9  , 15),

);
$iMax = 0;
$jMax = 0;



for ($i = 0; $i < count($tabt2d); $i++) {
    for ($j = 0; $j < count($tabt2d[$i]); $j++){
    if ($tabt2d[$i][$j] > $plusGrandeValeur) {
        $iMax = $i;
      $jMax = $j;
    }
}

}
echo "Le plus grand élément est : " . $tabt2d[$iMax][$jMax] . "\n";
echo "Il se trouve aux indices : " . $iMax . "; " . $jMax;
?>