<?php
class Employe
{
    private int $Matricule;
    private string $Nom;
    private string $Prenom;
    private string $DateNaissance;
    private string $DateEmbauche;
    private int $Salaire;

    public function __construct(int $Matricule, string $Nom, string $Prenom, string $DateNaissance, string $DateEmbauche, int $Salaire)
    {
        $this->Matricule = $Matricule;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->DateNaissance = $DateNaissance;
        $this->DateEmbauche = $DateEmbauche;
        $this->Salaire = $Salaire;
    }


    function getAge(): int
    {
        // 01/02/2002
        $date = date('d/m/Y');
        $date = explode("/", $date);
        $age = explode("/", $this->DateNaissance);

        if ($date[1] < $age[1]) {
            return $date[2] - $age[2];
        } else {
            return $date[2] - $age[2] - 1;
        }
    }

    function getAnciennete(): int
    {
        $date = date('d/m/Y');
        $date = explode("/", $date);
        $an = explode("/", $this->DateEmbauche);
        return $date[2] - $an[2];
    }

    function augmentationDuSalaire(): void
    {
        if ($this->getAnciennete() >= 10) {
            $this->Salaire *= 1.05;
        } else if ($this->getAnciennete() >= 5) {
            $this->Salaire *= 1.02;
        } else if ($this->getAnciennete() > 10) {
            $this->Salaire *= 1.1;
        }
    }

    function afficherEmploye(): void
    {
        echo "- Matricule: " . $this->Matricule . "\n";
        echo "- Nom complet: " . strtoupper($this->Nom) . " " . ucfirst($this->Prenom) . "\n";
        echo "- Age: " . $this->getAge() . "\n";
        echo "- Ancienneté: " . $this->getAnciennete() . "\n";
        echo "- Salaire: " . $this->Salaire . "\n";
    }

    /**
     * Get the value of Matricule
     */
    public function getMatricule(): string
    {
        return $this->Matricule;
    }

    /**
     * Set the value of Matricule
     *
     * @return  self
     */
    public function setMatricule($Matricule): self
    {
        $this->Matricule = $Matricule;

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
     * Get the value of DateNaissance
     */
    public function getDateNaissance(): string
    {
        return $this->DateNaissance;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    /**
     * Get the value of DateEmbauche
     */
    public function getDateEmbauche(): string
    {
        return $this->DateEmbauche;
    }

    /**
     * Set the value of DateEmbauche
     *
     * @return  self
     */
    public function setDateEmbauche($DateEmbauche): self
    {
        $this->DateEmbauche = $DateEmbauche;

        return $this;
    }

    /**
     * Get the value of Salaire
     */
    public function getSalaire(): string
    {
        return $this->Salaire;
    }

    /**
     * Set the value of Salaire
     *
     * @return  self
     */
    public function setSalaire($Salaire): self
    {
        $this->Salaire = $Salaire;

        return $this;
    }
}
