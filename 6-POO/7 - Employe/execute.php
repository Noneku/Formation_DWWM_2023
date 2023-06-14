<?php
include_once "employe.class.php";

// $emp = new Employe(14500,"Michael","Desanta","08/05/2002","04/05/2013",10000);

$nbEmp = 1;


for ($i = 1; $i <= $nbEmp; $i++) {
    ${"emp" . $i} = new Employe(
        $Matricule = readline("Donner le matricule: "),
        $Nom = readline("Donner le nom: "),
        $Prenom = readline("Donner le prenom: "),
        $DateNaissance = readline("Donner la date de naissance (#/#/#): "),
        $DateEmbauche = readline("Donner la date d'embauche: "),
        $Salaire = readline("Donner le salaire: ")
    );
}

echo $emp1->afficherEmploye();
echo $emp1->augmentationDuSalaire()."\n";
echo $emp1->afficherEmploye();