<?php

class Client {
    private $CIN;
    private $Nom;
    private $Prénom;
    private $Tél;

    public function __construct($CIN, $Nom, $Prénom, $Tél) {
        $this->CIN = $CIN;
        $this->Nom = $Nom;
        $this->Prénom = $Prénom;
        $this->Tél = $Tél;
    }

    public function getCIN() {
        return $this->CIN;
    }

    public function getNom() {
        return $this->Nom;
    }

    public function getPrénom() {
        return $this->Prénom;
    }

    public function getTél() {
        return $this->Tél;
    }

    public function AfficherRésumé() {
        echo "Client: {$this->Nom} {$this->Prénom}\n";
        echo "CIN: {$this->CIN}\n";
        echo "Tél: {$this->Tél}\n";
    }
}