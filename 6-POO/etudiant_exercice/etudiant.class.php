<?php

class Etudiant
{

    private static $id = 0;
    private string $nom;
    private string $prenom;
    private  $dateNaissance;


    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;

        self::$id++;
    }


    public function tableauEtudiants($tableau): array
    {

        return $tableau;
    }


    public function __toString()
    {

        return "ID : " . self::$id . " - " . "Je suis l'étudiant(e)" . " " . ($this->prenom) . " " . ($this->nom) . "," . " " . "ma date de naissance est" . " " . ($this->dateNaissance);
    }



    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }


    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }
}
