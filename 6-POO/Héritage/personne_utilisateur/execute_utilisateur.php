<?php

include("utilisateur.php");


$nbSaisie = readline("Entrez le nombre de profil  : ");

for ($i = 1; $i <= $nbSaisie; $i++) {

    $nom = readline("Entrez votre nom : ");
    $prenom = readline("Entrez votre prénom : ");
    $mail = readline ("Entrez votre mail : ");
    $telephone = readline ("Entrez votre n° tel : ");
    $salaire = readline ("Entrez votre salaire : "); 
    $login = readline("Entrez le login : ");
    $password = readline("Entrez le MDP: ");
    $service = readline("Entrez le service: ");
    echo "\n";

    $utilisateur[$i] = new Utilisateur($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service);

}

echo $utilisateur[1]->afficher();
echo "\n";



// $alissa = new Utilisateur ("SYTH", "Alissa", "A.S@gmail.com", "06.40.12.48.78", 5000, "AS", "AZERTY", "IT");
// echo $alissa->afficher();
// echo "\n";

// $aimane = new Utilisateur ("Parker", "Aimane", "P.A@gmail.com", "06.50.22.78.18", 10000, "PA", "AZERTY", "Management");
// echo $aimane->afficher();
// echo "\n";

// $asaad = new Utilisateur ("El Croco", "Asaad", "elcroco@gmail.com", "06.80.22.08.58", 20000, "ElCroco", "AZERTY", "direction");
// echo $asaad->afficher();
// echo "\n";

// $karim = new Utilisateur ("K", "Karim", "KK@gmail.com", "06.85.54.78.02", 20000, "Karim.K", "AZERTY", "ressources humaines");
// echo $karim->afficher();
// echo "\n";

// $loic = new Utilisateur ("950", "Loic", "loic@gmail.com", "06.55.74.38.12", 30000, "L950", "AZERTY", "direction");
// echo $loic->afficher();
// echo "\n";


?>