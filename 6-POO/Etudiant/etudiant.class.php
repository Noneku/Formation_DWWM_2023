<?php

class Etudiant {
    
    private int $id;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    
    private Filiere $filiere;

    private static int $nbrStudent = 0;

    
    public function __construct($nom, $prenom, $dateNaissance) {

        $this->id = self::$nbrStudent++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = DateTime::createFromFormat('d/m/Y', $dateNaissance);

    }

    

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Get the value of dateNaissance
     *
     * @return DateTime
     */
    public function getDateNaissance(): DateTime {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @param DateTime $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(DateTime $dateNaissance): self {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }
}

?>