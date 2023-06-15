<?php


class Filiere {
    private int $id;
    private string $code;
    private string $libelle;

    public static array $branches = [
        "IT" => "Informatique",
        "TIC" => "Tehcno Info Communication",
        "BC" => "Boucherie"
    ];
    
    private static int $nbrFiliere = 0;

    
    public function __construct($code, $libelle) {

        $this->id = self::$nbrFiliere++;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function checkLibelleExist($libelle) : void{
        foreach ($this->branches as $key => $value) {
            if($libelle = $value) {
                
            }
        }
    }
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Get the value of code
     *
     * @return string
     */
    public function getCode(): string {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self {
        $this->code = $code;
        return $this;
    }

    /**
     * Get the value of libelle
     *
     * @return string
     */
    public function getLibelle(): string {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @param string $libelle
     *
     * @return self
     */
    public function setLibelle(string $libelle): self {
        $this->libelle = $libelle;
        return $this;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "\nFiliere : \nId: {$this->id}\n, \nCode: {$this->code}\n, \nLibelle: {$this->libelle}\n";
    }

    /**
    * @return array
    */
    public function getBranches(): array {
    	return $this->branches;
    }
}
