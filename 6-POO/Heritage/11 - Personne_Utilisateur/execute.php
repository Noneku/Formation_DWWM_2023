<?php
include_once "personne.class.php";
include_once "profil.class.php";
include_once "utilisateur.class.php";

$CP = new Profil(1, "Chef de projet");
$MN = new Profil(2, "Manager");
$DP = new Profil(3, "Directeur de projet");
$DRG = new Profil(4, "Directeur des ressources humaines");
$DG = new Profil(5, "Directeur Général");

$uti = array();
$tCP = array();
$tMN = array();
$tDP = array();
$tDRG = array();
$tDG = array();

$nbUti = 3;



for ($i = 1; $i <= $nbUti; $i++) {
    $nom = readline("Nom: ");
    $prenom = readline("prenom: ");
    $mail = readline("mail: ");
    $telephone = readline("telephone:");
    $salaire = readline("salaire: ");
    $login = readline("login: ");
    $password = readline("password: ");
    $service = readline("service: ");

    // echo "\n";
    // echo "1=Chef de projet"."\n"."2=Manager"."\n"."3=Directeur de projet"."\n"."4=Directeur des ressources humaines"."\n"."5=Directeur Général";
    // echo "\n";

    $temp = readline("profil:");

    switch ($temp) {
        case 1:
            $profil = $CP;
            break;
        case 2:
            $profil = $MN;
            break;
        case 3:
            $profil = $DP;
            break;
        case 4:
            $profil = $DRG;
            break;
        case 5:
            $profil = $DG;
            break;
        default:
            echo "Erreur";
            break;
    }


    ${"moi" . $i} = new Utilisateur($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $profil);
    $uti[] = ${"moi" . $i};

    switch ($profil) {
        case $CP:
            $tCP[] = ${"moi" . $i};
            break;
        case $MN:
            $tMN[] = ${"moi" . $i};
            break;
        case $DP:
            $tDP[] = ${"moi" . $i};
            break;
        case $DRG:
            $tDRG[] = ${"moi" . $i};
            break;
        case $DG:
            $tDG[] = ${"moi" . $i};
            break;
        default:
            echo "Erreur";
            break;
    }
    echo "\n";
    echo "\n";
    echo "\n";
}


foreach ($uti as $u) {
    echo $u . "\n";
    echo "\n";
}


foreach ($tMN as $key) {
    echo "Liste des managers: " . "\n";
    echo $key . "\n";
    echo "-----------------\n";
}


// foreach ($tCP as $key) {
//     echo $key . "\n";
//     echo "-----------------\n";
// }


// foreach ($tDP as $key) {
//     echo $key . "\n";
//     echo "-----------------\n";
// }

// foreach ($tDRG as $key) {
//     echo $key . "\n";
//     echo "-----------------\n";
// }

// foreach ($tDG as $key) {
//     echo $key . "\n";
//     echo "-----------------\n";
// }
