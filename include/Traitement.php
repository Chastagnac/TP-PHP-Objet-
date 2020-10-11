<?php

include 'classes/EmployeInformaticien.php';
include 'classes/EmployeNonInformaticien.php';

class Traitement {

    public static function testGainAnnuel() {
        $p = new Projet('PR7', 'Librairie Gelistout', 102);
        $informaticien = new EmployeInformaticien(2, 'Dimoont', 'Patrick', new DateTime("1980/07/12"), 1200, $p);
        $informaticien->setPrimeM(200);
        echo "<p>";
        echo $informaticien . " - Gain annuel : " . $informaticien->gainAnnuel();
        echo '</p>';
        $nonInformaticien = new EmployeNonInformaticien(5, 'Roman', 'Denis', new DateTime("1992/06/25"), 1300);
        $nonInformaticien->setPrimeA(1200);
        echo "<p>";
        echo $nonInformaticien . " - Gain annuel : " . $nonInformaticien->gainAnnuel();
        $nonInformaticien = new EmployeNonInformaticien(5, 'Roman', 'Denis', new DateTime("1992/06/25"), 1300);
        $nonInformaticien->setPrimeA(1400);
        echo '<p>';
        echo $nonInformaticien. " - Gain annuel : ".$nonInformaticien->gainAnnuel();
    }

    public static function instanciationEmployeInformaticienV1(): void {
        $p = new Projet('PR7', 'Librairie Gelistout', 102);
        $informaticien = new EmployeInformaticien(2, 'Dimoont', 'Patrick', new DateTime("1980/07/12"), 1200, $p);
        echo "Nom du Projet de l'employe numéro " . $informaticien->getNumero() . " : " . $p->getNomProjet();
        echo '<br><br>';
        echo $informaticien;
    }

    public static function instanciationEmployeInformaticienV2() {
        $p = new Projet('PR8', 'Association Bolide', 34);
        $informaticien = new EmployeInformaticien(3, 'Juvani', 'Adèle', new DateTime("1990/12/09"), 1100, $p);
        echo "<p>";
        echo $informaticien;
        echo "</p>";
        $informaticien->setPrimeM(400);
        echo "<br>";
        echo "Nouvelle prime = " . $informaticien->getPrime();
    }

    public static function instanciationEmployeNonInformaticienV1() {
        $nonInformaticien = new EmployeNonInformaticien(4, 'Duvernon', 'Hélène', new DateTime("1987/06/19"), 1150);
        echo '<p>';
        echo $nonInformaticien;
        echo '</p>';
        $nonInformaticien->setPrimeA(4500);
        echo "Nouvelle prime : " . $nonInformaticien->getPrimeA();
    }

}
