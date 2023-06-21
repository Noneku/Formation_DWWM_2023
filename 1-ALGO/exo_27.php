<?php
$note1 = readline("entrer une note");

$note2 = readline("entrer une note");




$moy = ($note1 + ($note2*2))/3 ;
echo "la moyenne est " . $moy."\n";
if ($moy >=10)
 {
   
    echo "le module est validé "."\n "  ;

}
  else 
  {
    echo "le module n'est pas validé";
  }       

  
  
?>