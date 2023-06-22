<?php
require_once 'Etudiant.class.php';
require_once 'Filiere.class.php';

$etudiant_1 = new Etudiant(1, "Mario", "Bros", "07/03/1984", "PB","Plombier"); 
$etudiant_2 = new Etudiant(2, "Luigi", "Bros", "07/03/1984", "PB","Plombier");
$etudiant_3 = new Etudiant(3, "Wario", "Bros", "09/06/1992", "SD", "Soldat");
$etudiant_4 = new Etudiant(4, "Princesse", "Peach", "2002-08-22", "PRC", "Princesse");
$etudiant_5 = new Etudiant(5, "Roi", "Bowser", "2003-11-30","ROY", "Roy" );

$nb = readline("Combien d'étudiants ? ");
$tabEtud = array();

for ($i = 0; $i < $nb; $i++) {
    $nom = readline("Nom de l'étudiant : ");
    $prenom = readline("Prénom de l'étudiant : ");
    $dateNaissance = readline("Date de naissance de l'étudiant : ");
    
    $tabEtud[$i] = new Etudiant($nom, $prenom, $dateNaissance);
}

$filiere = new Filière("INFO", "Informatique", $tabEtud[$i]);

echo "Filière : " . $filiere->getLibelle() . "\n";
echo $filiere;


?> 