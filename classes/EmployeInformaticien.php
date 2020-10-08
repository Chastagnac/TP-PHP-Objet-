<?php

class EmployeInformaticien extends Employe {

    private int $primeM;

    function __construct(int $primeM) {
        parent::__construct($primeA, $nom, $prenom, $dateDenaissance, $salaireM);

        $this->primeM = $primeM;
    }

}
