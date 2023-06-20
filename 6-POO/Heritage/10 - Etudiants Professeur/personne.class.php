<?php

class Personne
{
    protected int $id;
    protected string $nom;
    protected string $prenom;

    public function __construct(int $id, string $nom, string $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __toString(): string
    {
        return "ID: " . $this->id . " Nom: " . $this->nom . " Prenom: " . $this->prenom;
    }
}
