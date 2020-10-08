<?php

class EmployeInformaticien extends Employe {

    private int $primeM;
    private Projet $sonProjet;

    function __construct(int $numero, string $nom, string $prenom, DateTime $dateDenaissance, float $salaireM, Projet $sonProjet) {
        parent::__construct($numero, $nom, $prenom, $dateDenaissance, $salaireM);

        $this->sonProjet = $sonProjet;
        $this->primeM = 0;
    }

    public function getSonProjet(): Projet {
        return $this->sonProjet;
    }

    public function getPrime(): int {
        return $this->primeM;
    }

    public function setPrime(int $unePrime): void {
        if ($unePrime > (parent::salaireM * 0.30)) {
            throw new Exception("La prime ne peut pas excéder 30%");
        } else {
            $this->salaireM *= $unePrime;
        }
    }

}
