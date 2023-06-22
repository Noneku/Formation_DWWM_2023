<?php
 #On déclare et saisit les variables

 echo "Entrez le premier nombre : ";
 $nb1 = readline();

 echo "Entrez le second nombre : ";
 $nb2 = trim(fgets(STDIN));


 if ($nombre > 0) {
    echo  " est positif";
} 

elseif ($nombre == 0) {
   echo "est egale";
}

else {
    echo  " est négatif";
}



?>