<?php

include "employe.class.php";

$matricule = readline ("Veuillez saisir votre matricule : ");
$nom = readline ("Veuillez indiquer votre nom : ");
$prenom = readline ("Veuillez indiquer votre prénom : ");
$dateNaissance = readline ("Veuillez saisir votre date de naissance (jj-mm-aaaa) : ");
$dateEmbauche = readline ("Veuillez saisir votre date d'embauche (jj-mm-aaaa) : ");
$salaire = readline ("Précisez votre salaire : ");


$employe1 = new Employe ($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);
$employe1->age();
$employe1->anciennete();
$employe1->afficherEmploye();
echo "Après augmentation du salaire : \n";
$employe1->augmentationDuSalaire();
$employe1->afficherEmploye();
?>