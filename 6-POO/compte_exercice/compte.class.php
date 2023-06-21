<?php

// INJECTION DE DEPENDANCE : (DI) est un modèle de conception dans lequel une classe demande des dépendances à des sources externes (les injecteurs) plutôt que de les créer elle-même.

include("client.class.php");

class Compte {

private Client $client; 
private int $numeroCompte;
private float $solde;
private static int $nbCompte = 1;


public function __construct(string $cin, string $nom, string $prenom, int $tel, float $solde) {

// L'instanciation de la connexion est codée en dur dans le
// composant, ce qui fait qu'il est compliqué de le remplacer
// extérieurement ou de modifier son comportement
// Creation d'un objet dans un objet
$this->client = new Client ($cin, $nom, $prenom, $tel);
$this->solde = $solde;

// Incrémentation de l'attribut static nbCompte, Le numéro de compte va prendre la valeur du  Nb de compte 
$this->numeroCompte = self::$nbCompte++;

}


public function afficher(): void {

echo $this->client->afficher();

}

// Afficher le numéro de compte
public function afficherCompte() : void {

echo "Numéro de compte : ".$this->numeroCompte;

}


// afficher le solde
public function afficherSolde() : void {

echo "Solde de compte : ".$this->solde;

}


// méthode permettant de crediter() le compte, prenant une somme en paramètre.
public function crediter($credit) : float {

    return $this->solde += $credit;

}

// méthode permettant de debiter() le compte, prenant une somme en paramètre
public function debiter($debit) : float {

    return $this->solde -= $debit;

}


// méthode permettant de crediterCpt() le compte, prenant une somme et un compte en paramètres
public function crediterCpt($credit, $compte) : float {

    return $compte->crediter($credit);

}


// méthode permettant de crediterCpt() le compte, prenant une somme et un compte en paramètres
public function debiterCpt($debit, $compte) : float {

    return $compte->debiter($debit);

}


// méthode qui permet d’afficher le résumé d’un compte

public function resume() : void {

echo $this->afficherCompte()."\n";
echo $this->afficherSolde()."\n";
echo $this->client->afficher()."\n";

}

// méthode qui permet d’afficher le nombre des comptes crées
public function nbCompte() : void {

    echo " Le nombre de compte crée est de :".self::$nbCompte;
}


/**
 * Get the value of nbCompte
 */ 
public function getNbCompte()
{
return self::$nbCompte;
}

/**
 * Set the value of nbCompte
 *
 * @return  self
 */ 
public function setNbCompte($nbCompte)
{
$this->nbCompte = $nbCompte;

return $this;
}


/**
 * Get the value of solde
 */ 
public function getSolde()
{
return $this->solde;

}

/**
 * Set the value of solde
 *
 * @return  self
 */ 
public function setSolde($solde)
{

$this->solde = $solde;

return $this;

}


/**
 * Get the value of numeroCompte
 */ 
public function getNumeroCompte()
{
return $this->numeroCompte;
}

/**
 * Set the value of numeroCompte
 *
 * @return  self
 */ 
public function setNumeroCompte($numeroCompte)
{
$this->numeroCompte = $numeroCompte;

return $this;
}


/**
 * Get the value of client
 */ 
public function getClient()
{
return $this->client;
}

/**
 * Set the value of client
 *
 * @return  self
 */ 
public function setClient($client)
{
$this->client = $client;

return $this;
}
}
