<?php
// Les habitants de paris paient l'impôt selon les règles suivantes :
// les hommes de plus de 20 ans paient l'impot
// les autres ne paient pas d'import
// Le programme demandera donc l'âge et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable.

#Déclaration des variables

$age =  readline("quel est votre age?:");
$sexe =  readline("quel est votre sexe?:");

//

if($age < 20 && $sexe == "homme") {
echo "tu paie l'impot";

}elseif (($age > 18 && $sexe == "femme") && ($age < 35 && $sexe == "femme") ) {
    echo "tu paie l'impot";
}else  {
 echo "tu ne paie pas l'impot";   
}

?>