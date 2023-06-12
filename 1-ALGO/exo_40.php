<?php

//Déclaration de variable
    $better = [];
    $T = [
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8],
        [1,2,3,4,5,6,7,8]
    ];
//loop on size number of element in $T
 for ($i=0; $i < count($T); $i++) {
        //Browse the elements in 8 array
        for ($j=0; $j < count($T[$i]) ; $j++) { 

            //Compare element[0] with next element
            if($T[0][$j] >= $T[0][$j + 1]){
                //If the first element superior, stock this in $better
                $better[$i] = $T[0][$j];
            
            }
        }
 }
var_dump($better);
?>