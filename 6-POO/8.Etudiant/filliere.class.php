<?php


class filliere
{
    private string $id;
    private string $code;
    private string $libelle;
    private array $listEtudiant;
    public static int $cpt = 0;


    public function __construct(string $C, int $L, array $LE)
    {
        $this->code = $C;
        $this->libelle = $L;
        $this->listEtudiant = $LE;
        self::$cpt++;
        $this->id = self::$cpt;
    }
}