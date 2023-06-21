<?php

include("employe.class.php");

// Demande d'infos
$matricule = readline("Entrez le matricule : ");
$nom = readline ("Entrez le nom : ");
$prenom = readline ("Entrez le prenom : ");
$dateNaissance = readline("Entrez la date de naissance au format AA/MM/JJ: ");
$dateEmbauche = readline("Entrez la date d'embauche au format AA/MM/JJ: ");
$salaire = readline ("Entrez le salaire : ");

// initialisateur 
$employe = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

// Affichage des methodes
echo $employe->age($dateNaissance)."\n";
$anciennete = $employe->anciennete($dateEmbauche);
echo $anciennete."\n";
echo $employe->augmentationDuSalaire($anciennete)."\n";
echo $employe->afficherEmploye();



?>