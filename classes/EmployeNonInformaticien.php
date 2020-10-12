<?php

namespace ClassesMetier\DRH;

class EmployeNonInformaticien extends Employe {

    private int $primeA;

    function __construct(int $numero, string $nom, string $prenom, \DateTime $dateDenaissance, float $salaireM) {
        parent::__construct($numero, $nom, $prenom, $dateDenaissance, $salaireM);
        $this->primeA = 0;
    }

    public function gainAnnuel(): float {
        return ($this->salaireM * 12) + ($this->primeA);
    }

    function setPrimeA(int $unePrime): void {
        if ($unePrime < $this->salaireM) {
            $this->primeA = $unePrime;
        } else {
            $this->primeA = $this->salaireM;
        }
    }

    function getPrimeA(): int {
        return $this->primeA;
    }

    public function __toString(): string {
        return "Non Informaticien : " . parent::getNumero() .
                " - " . parent::getNom() . " - " . parent::getPrenom() . " - " . parent::getDateDeNaissance()->format('d/m/Y') . " - " . parent::getSalaireM() . " - " .
                '<br>' . "- prime annuelle : " . $this->getPrimeA().
                '<br>';
    }

}
