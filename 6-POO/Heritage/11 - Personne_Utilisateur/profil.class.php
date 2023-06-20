<?php
include_once "utilisateur.class.php";
class Profil extends Utilisateur
{
    // private static int $id;
    private string $code;
    private string $libelle;
    // private array $liste;

    public function __construct(string $code, string $libelle)
    {
        $this->code = $code;
        $this->libelle = $libelle;
    }

    /**
     * Get the value of libelle
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
