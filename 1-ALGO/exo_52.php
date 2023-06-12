<?php
//declaration
$Valeurs = array(1,2,5,8,50,68,45,89);
$pair=0;
$impair=0;

for ($i=0; $i < count($Valeurs); $i++) { //parcours le tableau 
//compare le resultat de modulo 2
    if($Valeurs[$i]%2==0){//division avec reste
        $pair++;//increment des nombres pair
    }else{
        $impair++;//increment des nombres impair
    }

}
//affichage
echo"il y'a ".$pair." chiffres pairs et ".$impair." chiffres impair dans le tableau";


?>

