<?php

include('filiere.class.php');

// Tableau étudiants vide à remplir 
$tableauEtudiants = array();

$nbSaisie = readline("Entrez le nombre d'étudiants : ");
$j = 0;

for ($i = 1; $i <= $nbSaisie; $i++) {

    $nom = readline("Entrez votre nom : ");
    $prenom = readline("Entrez votre prenom : ");
    $dateNaissance = readline("Entrez votre date de naissance : ");
    echo "\n";

    $eleve[$i] = new Etudiant($nom, $prenom, $dateNaissance);  // OU print_r(${'eleve'.$i} = new Etudiant($nom, $prenom, $dateNaissance));

    if ($i <= $nbSaisie) {

        $tableauEtudiants[$j++] = $eleve[$i];
    }
}

print_r($tableauEtudiants);
echo "\n";
echo "\n";


$droit = array();
$informatique = array();
$mathematique = array();
$j = 0;
$k = 0;
$l = 0;

for ($i = 0; $i < count($tableauEtudiants); $i++) {

    $libelle = readline("Dans quelle filière s'inscrire ? : ");
    echo "\n";

    if ($i < count($tableauEtudiants) && ($libelle == 'droit')) {

        $droit[$j++] = $tableauEtudiants[$i];
        // echo $tableauEtudiants[$i]->__toString()."\n";

    } elseif ($libelle == 'informatique' || 'info') {

        $informatique[$k++] = $tableauEtudiants[$i];

    } elseif ($libelle == 'math' || 'mathematique') {

        $mathematique[$l++] = $tableauEtudiants[$i];

    } else {

        echo "La filière demandée n'existe pas";
    }
}

echo "\n";
print_r($droit);
echo "\n";
print_r($informatique);
echo "\n";
print_r($mathematique);
echo "\n";


$code = readline(" Entrez le code filière pour afficher la liste des étudiants : ");
$incription = new Filiere($nom, $prenom, $dateNaissance, $code, $libelle);

if ($code == 'DT') {

    echo $incription->afficherEtudiantDroit($droit);

} elseif ($code == 'IT') {

    echo $incription->afficherEtudiantIT($informatique);

} elseif ($code == 'MTH') {

    echo $incription->afficherEtudiantMT($mathematique);

} else {

echo "La filière recherchée n'est pas disponible";

}














