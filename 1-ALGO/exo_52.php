<?php

for ($i=0; $i < count($Valeurs); $i++) { //parcours le tableau 
//compare le resultat de modulo 2
    if($Valeurs[$i]%2==0){//division avec reste
        $pair++;//increment des nombres pair
    }else{
        $impair++;//increment des nombres impair
    }

}

?>
