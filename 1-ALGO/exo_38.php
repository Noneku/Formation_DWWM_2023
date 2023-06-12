<?php
    $tab = [];
    $better = 0;
        for ($i=0; $i <= 5; $i++) { 
            $nbr = readline("Entrer un nombre : ");

            $tab[$i] = $nbr;
            
            if($i == 5){
                for ($j=0; $j < count($tab) - 1; $j++) { 
                    if($tab[$j] > $tab[$j+1]){
                        $better = $tab[$j];
                    }
                }
            }
        }
        print_r($better);
?>