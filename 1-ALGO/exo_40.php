<?php
// variable du tableau à deux dimensions de 12x8
    $T = array();  

    $maxValeur = 0;  
    
    for ($i=0; $i <12; $i++) { 
        for ($j=0; $j <8 ; $j++) { 
          $T[$i][$j]=rand(1,100);
      }
      
      
          }
      //Boucle for
    for ($i = 0; $i < 12; $i++) { 
        for ($j = 0; $j < 8; $j++) {
            if ($T[$i][$j] > $maxValeur) { 
                $maxValeur = $T[$i][$j];  
            }
        }
    }
      
    print_r($maxValeur);
    
?>