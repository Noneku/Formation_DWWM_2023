<?php
$max=0;
$T=array();

    $T[0]=array(58,7,6,4,8,9,4,1);
    $T[1]=array(5,7,6,4,8,9,4,1);
    $T[2]=array(5,7,6,4,8,9,4,1);
    $T[3]=array(5,7,6,4,8,9,4,1);
    $T[4]=array(5,7,6,4,8,9,4,18);
    $T[5]=array(5,7,6,4,8,9,4,1);
    $T[6]=array(5,7,6,4,8,9,4,1);
    $T[7]=array(5,7,68,4,8,9,4,1);
    $T[8]=array(5,7,6,48,8,9,4,1);
    $T[9]=array(5,7,61,4,8,9,4,1);
    $T[10]=array(5,78,6,4,8,9,4,1);
    $T[11]=array(5,77,6,47,8,90,4,1);

for ($ligne=0; $ligne < count($T) ; $ligne++) { 

    for($col=0;$col<count($T[$ligne]);$col++){

        if($max<$T[$ligne][$col]){

            $max=$T[$ligne][$col];
        }
    }
    
}
echo "le maximum est :".$max;
?>