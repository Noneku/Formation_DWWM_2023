<?php

class Personne
{
    protected static int $nbP = 0;
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
        self::$nbP++;
        $this->id = self::$nbP;
    }

    public function __toString(): string
    {
        return
            "ID: " . $this->id . "\n" .
            "Nom: " . $this->nom . "\n" .
            "Prenom: " . $this->prenom . "\n" .
            "Mail: " . $this->mail . "\n" .
            "Telephone: " . $this->telephone . "\n" .
            "salaire: " . $this->salaire . "\n";
    }

}
