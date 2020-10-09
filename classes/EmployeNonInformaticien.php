<?php
include 'classes/EmployeNonInformaticien.php';
class EmployeNonInformaticien extends Employe {

    private int $primeA;

    function __construct(int $numero, string $nom, string $prenom, DateTime $dateDenaissance, float $salaireM) {
        parent::__construct($numero, $nom, $prenom, $dateDenaissance, $salaireM);

        if ($this->primeA < $this->salaireM) {
            $this->salaireM += $this->primeA;
        } else {
            $this->salaireM += $this->salaireM;
        }
    }
}
