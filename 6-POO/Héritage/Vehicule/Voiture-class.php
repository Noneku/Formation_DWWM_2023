<?php
class Voiture extends Vehicule {
    public function demarrer(): void {
        echo "La voiture démarre.\n";
    }

    public function accelerer(): void {
        echo "La voiture accélère.\n";
    }
}



?>