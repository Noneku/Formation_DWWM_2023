<?php
include './Personne-abstract.php';
include './Manager-abstract.php';
include './Developpeur-abstract.php';


// Création des objets
$developpeur1 = new Developpeur("SALIM", "Martin", "martin.salim@example.com", "06 23 45 67 89", 1000.0, "PHP");
$developpeur2 = new Developpeur("SMITH", "John", "john.smith@example.com", "07 76 54 32 10", 1500.0, "Java");

$manager1 = new Manager("LACHGAR", "Jean", "jean.lachgar@example.com", "07 45 87 98 65", 3000.0, "Informatique");
$manager2 = new Manager("DUPONT", "Pierre", "pierre.dupont@example.com", "06 54 85 96 47", 2500.0, "Ressources humaines");

// Affichage des informations des objets
$developpeur1->afficher();
$developpeur2->afficher();

$manager1->afficher();
$manager2->afficher();

// // Création d'un objet de type Personne
// $personne = new Personne("Azaaouaj", "Younes", "yazaaouaj@gmail.com", "06 35 21 72 63", 20000.0);


?>