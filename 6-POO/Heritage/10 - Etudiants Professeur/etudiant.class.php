<?php

class Etudiant extends Personne
{
    private int $cne;

    public function __construct(int $id, string $nom, string $prenom, int $cne)
    {
        parent::__construct($id, $nom, $prenom);
        $this->cne = $cne;
    }

    public function __toString(): string
    {
        return parent::__toString() . " CNE: " . $this->cne;
    }
}
