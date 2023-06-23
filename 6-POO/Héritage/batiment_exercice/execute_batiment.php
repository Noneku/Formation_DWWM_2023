<?php

include("batiment.php");

// instanciation
$batiment = new Batiment ("10 rue de l'AFPA", 12,5 );
echo $batiment->__toString();
echo "\n";
print_r($batiment);

?>