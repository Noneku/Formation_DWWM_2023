<?php
// Création de la class compte 
class Compte
{
    // Déclaration des attributs en private
    private static int $nbComptes = 0;
    private float $solde;
    private int $code;
    private client $proprietaire;

    // Constructeur avec infos du client en paramètre 
    public function __construct($CIN, $Nom, $Prénom, $Tél, $solde)
    {
        $this->proprietaire = new client($CIN, $Nom, $Prénom, $Tél, $solde);
        $this->solde = $solde;
        self::$nbComptes++;
        $this->code = self::$nbComptes;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getProprietaire(): client
    {
        return $this->proprietaire;
    }

    public function crediter($somme): void
    {
        $this->solde += $somme;
    }

    public function crediterCpt($somme, $compte): void
    {
        $this->solde += $somme;
        $compte->debiter($somme);
    }
    // Boucle if pour débiter 
    public function debiter($somme): void
    {
        if ($somme <= $this->solde) {
            $this->solde -= $somme;
        } else {
            echo "Solde insuffisant.\n";
        }
    }

    public function debiterCpt($somme, $compte): void
    {
        if ($somme <= $this->solde) {
            $this->solde -= $somme;
            $compte->crediter($somme);
        } else {
            echo "Solde insuffisant.\n";
        }
    }
    // Affichage
    public function afficherResume(): void
    {
        echo "Résumé du compte :\n";
        echo "numéro de compte : " . $this->code . "\n";
        echo "Solde : " . $this->solde . "\n";
        echo "Propriétaire : " . $this->proprietaire->getNom() . " " . $this->proprietaire->getPrénom() . "\n";
    }

    public static function afficherNombreComptes(): void
    {
        echo "Nombre de comptes créés : " . self::$nbComptes . "\n";
    }
}
