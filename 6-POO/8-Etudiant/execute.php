<?php
include "Etudiant.class.php";
include "Filiere.class.php";


//DECLARATION

$tabEtudiants = array();

$tabFiliere = array();





//Integration des etudiants dans la filiere Info

$nb = readline("Combien d'etudiants avez-vous en informatique? :");

for($i = 0 ; $i < $nb ; $i++){
$nom = readline("Saisir nom : ");
$prenom = readline("Saisir prenom : ");
$dateNaissance = readline("Saisir date de naissance : ");


$tabEtudiants[$i] = new Etudiant($nom, $prenom , $dateNaissance);

}
$informatique = new Filiere("IT" , "Informatique" , $tabEtudiants );
$tabFiliere[]= $informatique;








//Integration des etudiants dans la filiere Techno
$tabEtudiants = array();
$nb = readline("Combien d'etudiants avez-vous en Techno de l'info ? :");

for($i = 0 ; $i < $nb ; $i++){
$nom = readline("Saisir nom : ");
$prenom = readline("Saisir prenom : ");
$dateNaissance = readline("Saisir date de naissance : ");


$tabEtudiants[$i] = new Etudiant($nom, $prenom , $dateNaissance);

}
$techno = new Filiere("tech" , "Techno de l'info et de communication" , $tabEtudiants );
$tabFiliere[]= $techno;









//Integration des etudiants dans la filiere Geni
$tabEtudiants = array(); //réinitialise le tableau

$nb = readline("Combien d'etudiants avez-vous en Génie Civil:");


for($i = 0 ; $i < $nb ; $i++){
$nom = readline("Saisir nom : ");
$prenom = readline("Saisir prenom : ");
$dateNaissance = readline("Saisir date de naissance : ");


$tabEtudiants[$i] = new Etudiant($nom, $prenom , $dateNaissance);

}

$geni = new Filiere("geni" , "Genie Civil" , $tabEtudiants );
$tabFiliere[]= $geni;
// $tabEtudiants = implode("\n" , $tabEtudiants);









//Stockage des filieres dans un array avec les etudiants
$tabFiliere= array($informatique  , $techno  , $geni );
print_r($tabFiliere);








//Affichage des etudiants par filière


foreach ($tabFiliere as $filiere) {
    //cité le libellé pour chaque filier
    echo "Filière: " . $filiere->getLibelle() . "\n";

    // deuxième boucle dans la deuxieme partie du tableau ( les etudiants)
    $etudiants = $filiere->getTabEtudiants();
    foreach ($etudiants as $etudiant) {
        echo $etudiant->__toString() . "\n";
    }
    echo "\n";
}







?>