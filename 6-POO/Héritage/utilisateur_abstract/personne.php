<?php

// Creation de la classe abstraite
// On instancie pas de classe abstraite 

abstract class Personne {


    protected static int $id = 0;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;
    


//  dans une classe abstraite, on déclare les methodes et les classe filles hériteront obligatoirement de ses méthodes
abstract function calculerSalaire();


abstract function afficher();


}

?>