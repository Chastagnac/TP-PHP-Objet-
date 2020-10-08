<?php

class Projet {

    private string $condeProjet;
    private string $nomProjet;
    private int $dureePrevue;

    function __construct(string $condeProjet, string $nomProjet, int $dureePrevue) {
        
        $this->condeProjet = $condeProjet;
        $this->nomProjet = $nomProjet;
        $this->dureePrevue = $dureePrevue;
    }

}
