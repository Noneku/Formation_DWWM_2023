<?php

/*

afficher les nombres pairs, entre 1 et 100

résultat attendu :

    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    ...

*/

//Instruction
for ($i = 0 ; $i<100 ; $i++){
    //si modulo de $i = 0 alors il est pair 
    if($i % 2 == 0){
        //afficher $i
        echo $i."\n";
    }
}

