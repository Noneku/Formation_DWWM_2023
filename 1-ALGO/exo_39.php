<?php
$note=array();
$moyenne=0;
$compteur=0;
$i=0;
$accord="";
do{

    
    $note[$i]=readline("entrez la note de l'éleve: ");
    $i++;
    $accord=readline("voulez vous entrez une nouvelle note ");



}while ($accord <>"n");



for ($i=0; $i <count($note); $i++) { //parcours le tableau 
    $moyenne+=$note[$i];
}
$moyenne=$moyenne/count($note);
for ($i=0; $i <count($note); $i++) { //parcours le tableau 

if($moyenne<$note[$i]){

    $compteur++;
      
  }
}
echo"la moyenne de la classe est: ".$moyenne;
echo "le nombre de note au dessus de la moyenne est ".$compteur;
?>