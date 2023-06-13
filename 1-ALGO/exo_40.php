<?php
/* Soit un tableau T à deux dimensions(12,8) préalablement rempli de valeurs numériques.Ecrire un algo qui recherche la plus grande valeur au sein du tableau */  
//Declaration en dur
$pg = 0 ;
$tab[0] = array(1,2,100,6,5,8,10,5);
$tab[1] = array(1,2,5,6,5,8,10,5);
$tab[2] = array(1,2,5,6,5,8,74,5);
$tab[3] = array(1,2,5,6,54,58,10,5);
$tab[4] = array(1,2,5,600,5,8,10,5);
$tab[5] = array(1,2,5,6,5,8,10,5);
$tab[6] = array(1,2,5,6,5,8,69,5);
$tab[7] = array(1,2,5,6,5,8,10,5);
$tab[8] = array(1,2,5,6,1000,8,10,5);
$tab[9] = array(1,2,5,6,5,8,10,5);
$tab[10] = array(1,2,5,41,5,8,10,5);
$tab[11] = array(1,2,20,6,5,36,10,5);

// $T = [1,2,5,6,5,8,10,5];
$pos1 = 0;
$pos2 = 0;

//Instruction
// for ($i=0; $i < $tab ; $i++) { 

//     if($tab[[$i][$i]] > $tab[[$i++][$i++]]){

//         $pg = $tab[$i][$i];

//     }else {

//         $pg = $tab[$i++][$i++];
//     }
// }


// //Ajout de 12 colonnes et 8 lignes
// for ($i=0; $i < 12 ; $i++) { 

//     $tab[$i]= $T;

//     // Augmentation pour avoir des chiffres différent
//     for ($j=1; $j < count($T) ; $j++) { 

//         $T[$j] += $T[$j]+1;
//     }
// }


//Instruction pour comparer le plus grand
for ($i=0; $i <count($tab) ; $i++) { 

        // print_r($tab[$i]);

    for ($j=0; $j < count($tab[$j]) ; $j++) { 

                // echo $j;

            if($tab[$i][$j] > $pg){
                $pg = $tab[$i][$j];
                $pos2 = $j;
                $pos1= $i;

        
    }
    }
}


print_r($tab);
//Affichage
echo " La valeur la plus grande ".$pg ." en colonne ".$pos1." et ligne ".$pos2 ; 



?>