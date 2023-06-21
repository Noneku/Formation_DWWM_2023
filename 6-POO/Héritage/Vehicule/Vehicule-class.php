<?php
// Création d'une class abstraite Vehicule
abstract class Vehicule {
    // Définition des attributs
    private static int $compteurMatricule = 0;
    private int $matricule;
    private int $anneeModele;
    private float $prix;

    public function __construct(int $anneeModele, float $prix) {
        self::$compteurMatricule++;
        $this->matricule = self::$compteurMatricule;
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
    }

    public function getMatricule(): int {
        return $this->matricule;
    }

    public function getAnneeModele(): int {
        return $this->anneeModele;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public abstract function demarrer(): void;

    public abstract function accelerer(): void;

    public function __toString(): string {
        return "Matricule: " . $this->matricule . ", Année du modèle: " . $this->anneeModele . ", Prix: " . $this->prix;
    }
}










?>