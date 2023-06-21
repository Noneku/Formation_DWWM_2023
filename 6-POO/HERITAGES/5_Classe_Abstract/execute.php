<?php

include_once "personne.class.php";
include_once "manager.class.php";
include_once "developpeur.class.php";

// ($nom,$prenom,$mail,$telephone,$salaire,$service) 
$manager1 = new Manager("LACHGAR","Jean", "lachgarjean@gmail.com","0769546235",3000, "Informatique");
// ($nom,$prenom,$mail,$telephone,$salaire,$specialite)
$developpeur1 = new Developpeur("SALIM","Martin","salimartin@hotmail.fr","0625436218", 1000, "PHP");
// ($nom,$prenom,$mail,$telephone,$salaire,$service) 
$manager2 = new Manager("DUPONT", "Pierre","dupontpierre@yahoo.fr","0651148494", 4000, "Ressources Humaines");
// ($nom,$prenom,$mail,$telephone,$salaire,$specialite)
$developpeur2 = new Developpeur("LEGRAND","Sophie","legrandsophie@gmail.com","0684956231", 1500, "Javascript");

$manager1->afficherInformations();

$developpeur1->afficherInformations();

$manager2->afficherInformations();

$developpeur2->afficherInformations();


