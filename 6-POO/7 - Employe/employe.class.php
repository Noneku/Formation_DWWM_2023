<?php
class Employe
{
    private $Matricule;
    private $Nom;
    private $Prenom;
    private $DateNaissance;
    private $DateEmbauche;
    private $Salaire;

    public function __construct($Matricule, $Nom, $Prenom, $DateNaissance, $DateEmbauche, $Salaire)
    {
        $this->Matricule = $Matricule;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->DateNaissance = $DateNaissance;
        $this->DateEmbauche = $DateEmbauche;
        $this->Salaire = $Salaire;
    }


    function getAge()
    {
        // 01/02/2002
        $date = date('d/m/Y');
        $date = explode("/", $date);
        $age = explode("/", $this->DateNaissance);
        return $date[2] - $age[2];
    }

    function getAnciennete()
    {
        $date = date('d/m/Y');
        $date = explode("/", $date);
        $an = explode("/", $this->DateEmbauche);
        return $date[2] - $an[2];
    }

    function augmentationDuSalaire()
    {
        if ($this->getAnciennete() >= 10) {
            $this->Salaire *= 1.10;
            // echo "10";
        } else if ($this->getAnciennete() >= 5) {
            $this->Salaire *= 1.02;
            // echo "5";
        }
    }

    function afficherEmploye()
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
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * Set the value of Matricule
     *
     * @return  self
     */
    public function setMatricule($Matricule)
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of DateNaissance
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    /**
     * Get the value of DateEmbauche
     */
    public function getDateEmbauche()
    {
        return $this->DateEmbauche;
    }

    /**
     * Set the value of DateEmbauche
     *
     * @return  self
     */
    public function setDateEmbauche($DateEmbauche)
    {
        $this->DateEmbauche = $DateEmbauche;

        return $this;
    }

    /**
     * Get the value of Salaire
     */
    public function getSalaire()
    {
        return $this->Salaire;
    }

    /**
     * Set the value of Salaire
     *
     * @return  self
     */
    public function setSalaire($Salaire)
    {
        $this->Salaire = $Salaire;

        return $this;
    }
}
