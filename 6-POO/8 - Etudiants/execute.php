<?php

include_once "filiere.class.php";
include_once "etudiant.class.php";

$tFrancais = array();
$tAnglais = array();
$tMath = array();

$nbEtu = 3;

for ($i = 1; $i <= $nbEtu; $i++) {

    $nom = readline("Nom: ");
    $prenom = readline("prenom: ");
    $dateNaissance = readline("Date: ");

    $etu[$i] = new Etudiant($nom, $prenom, $dateNaissance);

    $t = readline("Matiere: ");

    switch ($t) {
        case 1:
            $tFrancais[] = $etu[$i];
            break;
        case 2:
            $tAnglais[] = $etu[$i];
            break;
        case 3:
            $tMath[] = $etu[$i];
            break;
        default:
            echo "Erreur";
            break;
    }
}

$Francais = new Filiere(1, "Français", $tFrancais);
$Anglais = new Filiere(2, "Anglais", $tAnglais);
$Math = new Filiere(3, "Math", $tMath);


if ($Francais->getListeEtudiant() != null) {
    echo "Français: ";
    echo "\n";
    foreach ($Francais->getListeEtudiant() as $Etudiant) {
        echo $Etudiant;
    }
}

if ($Anglais->getListeEtudiant() != null) {
    echo "\n";
    echo "Anglais: ";
    echo "\n";
    foreach ($Anglais->getListeEtudiant() as $Etudiant2) {
        echo $Etudiant2;
    }
}
if ($Math->getListeEtudiant() != null) {
    echo "\n";
    echo "Math: ";
    echo "\n";
    foreach ($Math->getListeEtudiant() as $Etudiant3) {
        echo $Etudiant3;
    }
}
