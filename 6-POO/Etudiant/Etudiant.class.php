<?php 
include "Filiere.class.php";


Class Etudiant {

    private static int $idCounter = 0;
    private $id;
    private $nom;
    private $prenom;
    private $date;



    public function __construct(string $nom, string $prenom, string $date) {
        $this->id = ++self::$idCounter;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

   

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }



    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }




    public function __toString() {
        return "Étudiant #" . $this->id . ": " . $this->prenom . " " . $this->nom . " - Date de naissance: " . $this->date;
    }



}

?>