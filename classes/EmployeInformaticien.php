<?php

namespace ClassesMetier\DRH;

class EmployeInformaticien extends Employe {

    private int $primeM;
    private Projet $sonProjet;

    function __construct(int $numero, string $nom, string $prenom, DateTime $dateDenaissance, int $salaireM, Projet $sonProjet) {
        parent::__construct($numero, $nom, $prenom, $dateDenaissance, $salaireM);

        $this->sonProjet = $sonProjet;
        $this->primeM = 0;
    }

    public function gainAnnuel(): float {
        return ($this->salaireM * 12) + ($this->primeM * 12);
    }

    public function getSonProjet(): Projet {
        return $this->sonProjet;
    }

    public function getPrime(): int {
        return $this->primeM;
    }

    function setPrimeM(int $primeM): void {
        if ($primeM <= ($this->salaireM * 0.3)) { // prime doit être inférieur à 30ù du salaire
            $this->primeM = $primeM;
        } else {
            throw new Exception("La prime ne doit pas excéder 30% du salaire");
        }
    }

    public function __toString(): string {
        return "Informaticien : " . parent::getNumero() .
                " - " . parent::getNom() . " - " . parent::getPrenom() . " - " . parent::getDateDeNaissance()->format('d/m/Y') . " - " . parent::getSalaireM() . " - " .
                '<br>' . "- Projet : " . $this->sonProjet->getCodeProjet() . " - " . $this->sonProjet->getNomProjet() . " - " . $this->sonProjet->getDureePrevue().
                '<br>';
    }

}
