<?php

class Projet {

    private string $codeProjet;
    private string $nomProjet;
    private int $dureePrevue;

    function __construct(string $codeProjet, string $nomProjet, int $dureePrevue) {
        
        $this->codeProjet = $codeProjet;
        $this->nomProjet = $nomProjet;
        $this->dureePrevue = $dureePrevue;
    }

    public function getCodeProjet(): string {
        return $this->codeProjet;
    }

    public function getNomProjet(): string {
        return $this->nomProjet;
    }
    
    public function setDureePrevue(): void{
        //todo
    }

}
