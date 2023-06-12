<?php

    $tab = [];

    for ($i=0; $i < 5; $i++) { 
        $nbr = readline("Entre un nombre : ");
        //Add 1 to result of nbr
        $tab[$i] = $nbr + 1;
        var_dump($tab);
    }
    
?>