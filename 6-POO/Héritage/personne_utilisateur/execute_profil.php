<?php

include("profil.php");


// $alissa = new Profil ("SYTH", "Alissa", "A.S@gmail.com", "06.40.12.48.78", 5000, "AS", "AZERTY", "IT", "CP", "Chef de Projet");
// $aimane = new Profil ("Parker", "Aimane", "P.A@gmail.com", "06.50.22.78.18", 10000, "PA", "AZERTY", "Management", "MN", "manager");
// $asaad = new Profil ("El Croco", "Asaad", "elcroco@gmail.com", "06.80.22.08.58", 20000, "ElCroco", "AZERTY", "direction", "DP", "directeur de projet");
// $karim = new Profil ("K", "Karim", "KK@gmail.com", "06.85.54.78.02", 20000, "Karim.K", "AZERTY", "ressources humaines", "DRH", "directeur des ressources humaines");
// $loic = new Profil ("950", "Loic", "loic@gmail.com", "06.55.74.38.12", 30000, "L950", "AZERTY", "direction", "DG", "directeur général");



$nbSaisie = readline("Entrez un nombre d'utilisateur: ");
$tableauProfil = array ();
$tableauManager = array ();
$j=0;
$k=0;

for ($i = 1; $i <= $nbSaisie; $i++) {

    $nom = readline("Entrez votre nom : ");
    $prenom = readline("Entrez votre prénom : ");
    $mail = readline ("Entrez votre mail : ");
    $telephone = readline ("Entrez votre n° tel : ");
    $salaire = readline ("Entrez votre salaire : "); 
    $login = readline("Entrez le login : ");
    $password = readline("Entrez le MDP: ");
    $service = readline("Entrez le service: ");
    $code = readline("Entrez le code : ");
    $libelle = readline("Entrez le libelle : ");


    $profil[$i] = new Profil ($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $code, $libelle);
    echo "\n";
    $tableauProfil[$j++] = $profil[$i];
    echo "\n";

    if ($libelle == 'manager') {
        
        $tableauManager[$k++] = $profil[$i];

    }

}

$profil[1]->afficherListeUtilisateur($tableauProfil);
$profil[1] ->afficherListeManager($tableauManager);



?>


