<?php

class Client
{
    protected  string $CIN;
    protected  string $Nom;
    protected  string $Prenom;
    protected  string $Tel;

    public function __construct(string $CIN, string $Nom, string $Prenom, string $Tel)
    {
        $this->CIN = $CIN;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Tel = $Tel;
    }


    /**
     * Get the value of CIN
     */
    public function getCIN(): string
    {
        return $this->CIN;
    }

    /**
     * Set the value of CIN
     *
     * @return  self
     */
    public function setCIN($CIN): self
    {
        $this->CIN = $CIN;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */
    public function setNom($Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */
    public function getPrenom(): string
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */
    public function setPrenom($Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of Tel
     */
    public function getTel(): string
    {
        return $this->Tel;
    }

    /**
     * Set the value of Tel
     *
     * @return  self
     */
    public function setTel($Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function Afficher(): void
    {
        echo "Prenom: " . $this->Prenom . "\n";
        echo "Nom: " . $this->Nom . "\n";
        echo "Tel: " . $this->Tel . "\n";
        echo "CIN: " . $this->CIN . "\n";
    }
}
