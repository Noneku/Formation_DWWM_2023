<?php

Class Filière {
private static int $idCounter = 0;
 private int $id;
 private string $code;
 private string $libelle;
 private array $listeEtudiants;

 public static array $branches = [
    "PB" => "Plombier",
    "PB" => "Plombier",
    "SD" => "Soldat",
    "PRC" => "Princesse",
    "ROY" => "Roy",
];

 
 public function __construct(string $code, string $libelle, array $tabEtud) {
    $this->id = ++self::$idCounter;
    $this->code = $code;
    $this->libelle = $libelle;
    $this->listeEtudiants = $tabEtud;
}

public function __toString(): string {
    $etudiants = implode("\n", $this->listeEtudiants);
    return "Filière: $this->code - $this->libelle\n$etudiants";
}
 /**
  * Get the value of id
  */ 
 public function getId()
 {
  return $this->id;
 }

 /**
  * Set the value of id
  *
  * @return  self
  */ 
 public function setId($id)
 {
  $this->id = $id;

  return $this;
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

}


?>