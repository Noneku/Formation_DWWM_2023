<?php

include "filiere.classe.php";

$nbrEtudiants = readline("Combien d'étudiants : ");
$dataEtud = array();

for ($i = 0; $i < $nbrEtudiants; $i++) {
    $nom = readline("Entrer le nom de l'étudiant : ");
    $prenom = readline("Entrer le prénom de l'étudiant : ");
    $dateNaissance = readline("Entrer la date de naissance : ");

    // Créer une instance de la classe Etudiant et ajouter au tableau $dataEtud
    $etudiant = new Etudiant($nom, $prenom, $dateNaissance);

    // Demander à l'utilisateur de saisir la filière pour cet étudiant
    $filiereCode = readline("Entrer le code de la filière pour l'étudiant " . ($i + 1) . " : ");
    $filiereLibelle = readline("Entrer le libellé de la filière pour l'étudiant " . ($i + 1) . " : ");

    // Créer une instance de la classe Filiere avec les informations saisies
    $filiere = new Filiere($etudiant, $filiereCode, $filiereLibelle);

    $dataEtud[$i] = array(
        "etudiant" => $etudiant,
        "filiere" => $filiere
    );
    if (!empty($dataEtud)) {
        // Afficher les informations de chaque étudiant et sa filière associée
        foreach ($dataEtud as $etudiantInfo) {
            $etudiant = $etudiantInfo["etudiant"];
            $filiere = $etudiantInfo["filiere"];

            echo "Étudiant : " . $etudiant . "\n";
            echo "Filière : " . $filiere . "\n";
            echo "\n";
        }
    }
}
