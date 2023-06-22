<?php 

include "employe.class.php";

// Programme de test

// $employe = new Employe(123456,"delourme", "amaury", "1995-05-15", "2020-07-01", 1200);

// $employe->afficherEmploye();
// echo "\n";
// $employe->augmentationDuSalaire();

// echo "apres augmentation";
// echo "\n";
// echo "\n";
// $employe->afficherEmploye();
// echo "\n";
// echo "\n";

// $employe = new Employe(16748,"flo", "emanuel", "1990-05-15", "2010-07-01", 2500);

// $employe->afficherEmploye();
// echo "\n";
// $employe->augmentationDuSalaire();

// echo "apres augmentation";
// echo "\n";
// echo "\n";
// $employe->afficherEmploye();

$matricule = readline("Matricule : ");

$nom = readline("NOM : ");

$prenom = readline("Prenom : ");

$dateNaissance = readline("Date de Naissance (aaaa-MM-JJ) : ");

$dateEmbauche = readline("Date d'embauche (aaaa-MM-JJ): ");

$salaire = readline("Salaire : ");

$employe = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

echo "\n";
$employe->afficherEmploye();
echo "\n";
$employe->augmentationDuSalaire();

echo "apres augmentation du salaire";
echo "\n";
echo "\n";
$employe->afficherEmploye();
echo "\n";

?>