<?php

$tab1=["D","E","C","A","1L","A","G","E"];


$debut="D";

for ($i=0; $i < 8 ; $i++) { 

    if($i<7){
    $tab1[$i]= $tab1[$i+1];
}else{
$tab1[$i]=$debut;
}
}


print_r($tab1);
