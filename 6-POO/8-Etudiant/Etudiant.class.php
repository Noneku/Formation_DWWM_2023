<?php
class Etudiant {
    private static $idCounter = 1;
    private int $id;
    private string $nom;
    private string $prenom;
    private $dateDeNaissance;
    

    public function __construct(string $nom, string $prenom, $dateDeNaissance) {
        $this->id = self::$idCounter++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
    }

    public function __toString() {
        return "Je suis l'étudiant {$this->prenom} {$this->nom}, je suis né le : {$this->dateDeNaissance}\n";
    }
}
