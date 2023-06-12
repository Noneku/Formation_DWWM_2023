<?php
/* ecrire un algo qui permet a user de saisir un nombre quelquonque de valeurs qui devront être stocké dans un tableau
 -entrez la longueur du tableau 
 -effectuer la saisie
 -afficher le nombre de valeurs + et - */
$Valeurs = array();
$longueur=readline("donner un nombre : ");
$negatif=0;
$positif=0;

for ($i=0; $i < $longueur; $i++) { 
    
    $Valeurs[$i]=readline("donner un nombre : ");

    if($Valeurs[$i]<0){

        $negatif++;

    }elseif($Valeurs>0){

        $positif++;
    }


}
echo " le nombre de de chiffre positif : ".$positif;
echo " le nombre de de chiffre negatif : ".$negatif;
?>