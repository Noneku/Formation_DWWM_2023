        <?php

    
include 'client.classe.php';

class Compte {
    private $client; // Objet de type Client
    private $solde;
    private $code;
    private static $nombre_comptes = 0;

    public function getClient() {
        return $this->client;
    }

    public function setClient($client) {
        $this->client = $client;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function getCode() {
        return $this->code;
    }

    public function __construct($CIN, $Nom, $Prénom, $Tél, $solde) {
        $this->client = new Client($CIN, $Nom, $Prénom, $Tél,$solde);
        $this->solde = $solde;
        self::$nombre_comptes++;
        $this->code = self::$nombre_comptes;
    }

    public function crediter($montant) {
        $this->solde += $montant;
    }

    public function crediterCpt($montant, $compte) {
        $this->solde += $montant;
        $compte->debiter($montant);
    }

    public function debiter($montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant";
            echo PHP_EOL;
        }
    }

    public function debiterCpt($montant, $compte) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
            $compte->crediter($montant);
        } else {
            echo "Solde insuffisant";
            echo PHP_EOL;
        }
    }

    public function afficher() {
        echo "CIN du client : " . $this->client->getCIN() . PHP_EOL;
        echo "Nom du client : " . $this->client->getNom() . PHP_EOL;
        echo "Prénom du client : " . $this->client->getPrenom() . PHP_EOL;
        echo "Téléphone du client : " . $this->client->getTél() . PHP_EOL;
        echo "Numéro de Compte : " . $this->code . PHP_EOL;
        echo "Solde du compte : " . $this->solde . PHP_EOL;
        echo "Propriétaire du compte : " . $this->client->getNom() . PHP_EOL;
    }

    public static function afficherNombreComptes() {
        echo "Nombre de comptes créés : " . self::$nombre_comptes . PHP_EOL;
    }
}



        ?>