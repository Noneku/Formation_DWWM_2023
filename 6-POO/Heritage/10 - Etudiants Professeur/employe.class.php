<?php

class Employe extends Personne
{
    protected string $salaire;

    public function __construct(int $id, string $nom, string $prenom, float $salaire)
    {
        parent::__construct($id, $nom, $prenom);
        $this->salaire = $salaire;
    }

    public function __toString(): string
    {
        return parent::__toString() . " Salaire: " . $this->salaire;
    }
}
