<?php
include 'classes/EmployeInformaticien.php';

class Traitement {

    public static function instanciationProjetV1(): void {
        $p = new Projet('PR7', 'Librairie Gelistout', 102);
        echo $p;
        echo " Nom du projet : " . $p->getNomProjet();
        echo '<br>';
    }

    public static function instanciationEmployeInformaticienV1(): void {
        $p = new Projet('PR7', 'Librairie Gelistout', 102);
        $informaticien = new EmployeInformaticien(2, 'Dimoont', 'Patrick', new DateTime("1980/07/12"), 1200, $p);
        echo $informaticien;
        echo '<br>';
    }

    /*
     * Méthode déclarer static pour l'avoir à porté de classe, en l'occurence la classe employe.
     * new DateTime("12/07/1980"") créer un nouvel objet de la classe datetime avec le jour le mois et l'année.
     */

    public static function instanciationUnEmploye(): void {
        $e = new employe(1, "Dupont", "Jacques", new DateTime("1980/07/12"), 1000.00);
        echo '<br>';
        echo $e;
    }

    public static function instanciationUnEmployeErreur(): void {
        $e = new employe(2, "Durant", "Sylvie", new DateTime("1975/06/14"), 8500.00);
        echo '<br>';
        echo $e;
    }

}
