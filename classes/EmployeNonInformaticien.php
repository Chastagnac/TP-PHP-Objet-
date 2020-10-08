<?php

class EmployeNonInformaticien extends Employe {

    private int $primeA;

    function __construct(int $primeA) {
        parent::__construct($primeA, $nom, $prenom, $dateDenaissance, $salaireM);

        $this->primeA = $primeA;
    }

}
