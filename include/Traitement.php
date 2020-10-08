<?php

class Traitement{
    
    /*
     * Méthode déclarer static pour l'avoir à porté de classe, en l'occurence la classe employe.
     * new DateTime("12/07/1980"") créer un nouvel objet de la classe datetime avec le jour le mois et l'année.
     */
    public static function instanciationUnEmploye(): void{
        $e = new employe(1, "Dupont","Jacques", new DateTime("1980/07/12"), 1000.00);
        echo $e;
    }
    
    public static function instanciationUnEmployeErreur(): void{
        $e = new employe(2, "Durant","Sylvie", new DateTime("1975/06/14"), 800.00);
        echo $e;
    }
}

