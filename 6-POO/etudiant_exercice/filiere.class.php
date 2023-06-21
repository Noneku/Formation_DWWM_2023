<?php

include("etudiant.class.php");

class Filiere {

private Etudiant $etudiant;
private string $code;
private string $libelle;
private static $id = 0; 


public function __construct(string $nom, string $prenom, $dateNaissance, string $code, string $libelle)
{
    $this->etudiant = new Etudiant ($nom, $prenom, $dateNaissance);
    $this->code = $code;
    $this->libelle = $libelle;
    self::$id++;
}


public function afficherEtudiantDroit ($tableauDroit) : void {
    
    echo "Filière droit : "."\n";
    
    for ($i = 0; $i < count($tableauDroit); $i++) {

    echo $tableauDroit[$i]->__toString();
    echo "\n";
}

}

public function afficherEtudiantIT ($tableauIT) : void {

    echo " Filière Informatique : "."\n";

    for ($i = 0; $i < count($tableauIT); $i++) {

        
        echo $tableauIT[$i]->__toString();
        echo "\n";
    }

}

public function afficherEtudiantMT ($tableauMT) : void {

    echo " Filière Mathématique : "."\n";

    for ($i = 0; $i < count($tableauMT); $i++) {

        
        echo $tableauMT[$i]->__toString();
        echo "\n";
    }

}


public function afficherTableauEtudiants($tableau): array
{

    return $this->etudiant->tableauEtudiants($tableau);

}


public function afficherString() : string
{

    return $this->etudiant->__toString();
    
}


/**
 * Get the value of code
 */ 
public function getCode()
{
return $this->code;
}

/**
 * Set the value of code
 *
 * @return  self
 */ 
public function setCode($code)
{
$this->code = $code;

return $this;
}

/**
 * Get the value of libelle
 */ 
public function getLibelle()
{
return $this->libelle;
}

/**
 * Set the value of libelle
 *
 * @return  self
 */ 
public function setLibelle($libelle)
{
$this->libelle = $libelle;

return $this;
}


/**
 * Get the value of etudiant
 */ 
public function getEtudiant()
{
return $this->etudiant;
}

/**
 * Set the value of etudiant
 *
 * @return  self
 */ 
public function setEtudiant($etudiant)
{
$this->etudiant = $etudiant;

return $this;
}

}