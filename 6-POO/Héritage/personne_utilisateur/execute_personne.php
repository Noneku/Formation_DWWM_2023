<?php

include("personne.php");

$nbSaisie = readline("Entrez le nombre de profil  : ");

for ($i = 1; $i <= $nbSaisie; $i++) {

    $nom = readline("Entrez votre nom : ");
    $prenom = readline("Entrez votre prénom : ");
    $mail = readline ("Entrez votre mail : ");
    $telephone = readline ("Entrez votre n° tel : ");
    $salaire = readline ("Entrez votre salaire : "); 
    echo "\n";

    $personne[$i] = new Personne($nom, $prenom, $mail, $telephone, $salaire);


}

echo $personne[1]->afficher();
echo "\n";
echo $personne[2]->afficher();



?>