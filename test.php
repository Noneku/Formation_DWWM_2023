<?php

$droit = array();
$informatique = array();
$mathematique = array();

$nbSaisie = readline("Entrez le nombre d'étudiants : ");
$j = 0;


for ($i = 1; $i <= $nbSaisie; $i++) {

    $nom = readline("Entrez votre nom : ");
    $prenom = readline("Entrez votre prenom : ");
    $dateNaissance = readline("Entrez votre date de naissance : ");
    $filiere = readline("Dans quel filière l'inscrire ? : ");

    print_r($eleve[$i] = new Etudiant($nom, $prenom, $dateNaissance));  // OU print_r(${'eleve'.$i} = new Etudiant($nom, $prenom, $dateNaissance));

    if ($filiere == 'droit') {

        $droit[$j] == $eleve[$i];
    
    } elseif ($filiere == 'informatique') {
    
        $informatique[$j] = $eleve[$i];
    
    } elseif ($filiere == 'math' || 'mathematique') {
    
        $mathematique[$j] = $eleve[$i];
    
    } else {
    
        echo "La filière demandé n'existe pas";
    }

    print_r($droit);
    print_r($informatique);
    print_r($mathematique);
}




// Inscription etudiant en filière

for ($i = 0; $i < count($tableauEtudiants); $i++) {

    $libelle = readline("Dans quel filière s'inscrire ? : ");
    $code = readline("indiquez le code filière : ");


    if ($libelle == 'droit' || $code =='dt') {

        $droit[$i] = $tableauEtudiants[$i];
        echo $tableauEtudiants[$i]->__toString()."\n";
    
    } elseif ($libelle == 'informatique' || $code =='it') {
    
        $informatique[$j++] = $tableauEtudiants[$i];
        echo $tableauEtudiants[$i]->__toString()."\n";
    
    } elseif (($libelle == 'math' || 'mathematique') || ( $code == 'mt')) {
    
        $mathematique[$k++] = $tableauEtudiants[$i];
        echo $tableauEtudiants[$i]->__toString()."\n";
    
    } else {
    
        echo "La filière demandé n'existe pas";
    }

}

?>
