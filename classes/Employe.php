<?php

class employe {

    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDenaissance;
    protected float $salaireM;
    private const MINSALAIRE = 1000; //C'est une constante donc on s'appelle avec le mot clée self::nomconst

    function __construct(int $numero, string $nom, string $prenom, DateTime $dateDenaissance, float $salaireM) {
        $this->numero = $numero;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDenaissance = $dateDenaissance;
        $this->setSalaireM($salaireM);//permet de recuperer le salaireM via la méthode
    }
    
    

    public function getNumero(): int {
        return $this->numero;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getDateDeNaissance(): DateTime {
        return $this->dateDenaissance;
    }

    function getSalaireM(): float {
        return $this->salaireM;
    }

    function setSalaireM(float $unSalaireM): void {
        if ($unSalaireM >= self::MINSALAIRE) {
            $this->salaireM = $unSalaireM;//le salaire prend la valeur d'unsalaireM si elle est superieur ou égale.
        } else {
            throw new Exception("le salaire ne doit pas être inférieur à " . self::MINSALAIRE);
        }
    }

    /*
     * $this->dateDenaissance->format('d/m/Y') definit le format de la date
    */
    public function __toString(): string {
        return $this->numero . " - " . $this->getNom() . " - " . $this->getPrenom() . " - " . $this->dateDenaissance->format('d/m/Y') . " - " . $this->getSalaireM();
    }

}
