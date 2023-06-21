<?php

include("utilisateur.php");

class Profil extends Utilisateur
{

    // private static int $ID;
    private string $code;
    private string $libelle;


    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service, string $code, string $libelle)
    {

        parent::__construct($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service);

        $this->code = $code;
        $this->libelle = $libelle;

        // self::$ID++; 
    }


    public function calculerSalaire(): float
    {
        if ($this->libelle == 'manager') {

            $montantAugmentation = $this->salaire * 0.10;
            return $this->salaire + $montantAugmentation;

        } elseif ($this->libelle == 'directeur general') {

            $montantAugmentation = $this->salaire * 0.40;
            return $this->salaire + $montantAugmentation;
            
        } else {

            return parent::calculerSalaire();
        }
    }


    public function afficher(): void
    {
        echo parent::afficher();
        echo "Code: " . $this->getCode() . PHP_EOL;
        echo "libelle: " . $this->getLibelle() . PHP_EOL;
    }


    public function afficherListeUtilisateur($tableau): void
    {

        echo "La liste des utilisateurs : ";
        echo "\n";
        echo "\n";

        for ($i = 0; $i <= count($tableau); $i++) {

            echo $tableau[$i]->afficher();
            echo "\n";
        }
    }


    public function afficherListeManager($tableau): void
    {

        echo "La liste des managers : ";
        echo "\n";
        echo "\n";

        for ($i = 0; $i <= count($tableau); $i++) {

                echo $tableau[$i]->afficher();
                echo "\n";
        }
    }


    // echo "profil ID n° :".self::$ID;

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }


    /**
     * Get the value of ID
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of ID
     *
     * @return  self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }
}
