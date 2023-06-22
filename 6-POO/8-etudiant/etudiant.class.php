<?php

class Etudiant {

    private int $id;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private static $counter = 0;

    public function __construct($nom, $prenom, $dateNaissance) {
        
        self::$counter++;
        $this->id = self::$counter;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function __toString(): string {
        return "Je suis l'étudiant {$this->nom} {$this->prenom} ma date de naissance est : {$this->dateNaissance}";
    }

    public function getStudent(){

        $nb = readline("Combien d'élève il y a dans la filiere informatique : \n");
        $tab1 = array();

        for ($i=0; $i < $nb; $i++) { 
        $nom = readline("Entrez le nom: \n");
        $prenom = readline("Entrez le prenom : \n");
        $dateNaissance = readline("Entrez la Date de Naissance : \n");

            $tab[] = new Etudiant($nom, $prenom, $dateNaissance);
    }
    new Filiere ("IT","Informatique", $tab1[]);

    $nb2 = readline("Combien d'élève il y a dans la Techno de l'info et de communication : \n");
    $tab2 = array();

    for ($i=0; $i < $nb2; $i++) { 
        $nom = readline("Entrez le nom \n");
        $prenom = readline("Entrez le prenom \n");
        $dateNaissance = readline("Entrez la Date de Naissance : \n");

    $tab2[] = new Etudiant($nom, $prenom, $dateNaissance);
    }
    new Filiere ("TIC","Techno de l'info et de communication", $tab2[]);


    $nb3 = readline("Combien d'élève il y a dans la Techno de l'info et de communication : \n");
    $tab3 = array();

    for ($i=0; $i < $nb3; $i++) { 
        $nom = readline("Entrez le nom \n");
        $prenom = readline("Entrez le prenom \n");
        $dateNaissance = readline("Entrez la Date de Naissance : \n");

    $tab3[] = new Etudiant($nom, $prenom, $dateNaissance);
    }
    new Filiere ("GCIV","Génie civil", $tab3[]);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

?>