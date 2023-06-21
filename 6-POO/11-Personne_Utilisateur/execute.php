<?php
include "personne.class.php";
include "utilisateur.class.php";
include "profil.class.php"; 

$employe = array();

$employe[] = new Utilisateur("Marie" , "Louis" ,"mLouis@outlook.fr" , "151456464" , "mLouis58", "Mogzergrze!" , "Gestion" , 2200 , "CP" , "Chef de projet");
$employe[] = new Utilisateur("Jon" , "Delome" ,"JDelome@outlook.fr" , "0484545878" , "JDelom35", "aefazf2!" , "Gestion" , 2200 , "MN" , "Manager");
$employe[] = new Utilisateur("Bertand" , "LaMain" ,"BMain@outlook.fr" , "0665485878" , "BertMain48", "Moazgzergz!" , "Direction" , 3400 , "DP" , "Directeur de projet");
$employe[] = new Utilisateur("Jean" , "Chopin" ,"jean.chopin@outlook.fr" , "0784545878" , "JChopin62", "Morethrt!" , "Direction" , 2400 , "DRH" , "Directeur ressources humaines");
$employe[] = new Utilisateur("Yves" , "Caillou" ,"yCaillou@outlook.fr" , "0654545878" , "YCaillou", "Mozergdfrth!" , "Direction" , 5400 , "DG" , "Directeur général");

print_r($employe);

//Affichage des utlisateurs avec le salaire modifié
echo "\n";
for($i=0 ; $i < count($employe); $i++) {
    $employe[$i]->calculerSalaire();
    $employe[$i]->affiche()."\n";
    echo "\n";

}

//Filtre liste et afficher la liste des managers

echo "Liste des managers : \n";
     foreach ($employe as $personne) {
        if ( $personne->getProfil()->getCode() === "MN") {
            $personne->affiche();
        }
    

}










?>