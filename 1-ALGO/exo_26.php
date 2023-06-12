<?php
/* ecrire un algo qui saisie 2 nombres est affiche leur moyenne */
// Declaration
$racine1=0;
$racine2=0;
$d=0;
echo "donnez un nombre : ";
$nbr1 = trim(fgets(STDIN));
echo "donner un 2eme nombre : ";
$nbr2 = trim(fgets(STDIN));
echo "donner un 3eme nombre : ";
$nbr3= trim(fgets(STDIN));
//traitement
if($nbr1<>0){

$d=($nbr2*$nbr2)-4*($nbr1*$nbr3); //calcul du discriminant
//clacul des solutions
        if ($d<0) {

            echo "il n'y pas de solution à l'équation : ".$nbr1."x² + ".$nbr2."x + ".$nbr3."= 0 ";
        
        }elseif($d==0){

            $racine1=$nbr2/(2*$nbr1);//calcul une seule solution
            echo "la solution à l'équation : ".$nbr1."x² + ".$nbr2."x + ".$nbr3."= 0 est ".$racine1;

        }else{

            $racine1=(-1*$nbr2-sqrt($d))/(2*$nbr1);//calcul deux solutions 
            echo "la  1ere solution à l'équation : ".$nbr1."x² + ".$nbr2."x + ".$nbr3."= 0 est ".$racine1;

            $racine2=(-1*$nbr2+sqrt($d))/(2*$nbr1);
            echo "\nla  2eme solution à l'équation : ".$nbr1."x² + ".$nbr2."x + ".$nbr3."= 0 est ".$racine2;
            
            echo "\n le discriminant ".$d;
        }

}else{
    echo "l'equation est impossible";
}

?>