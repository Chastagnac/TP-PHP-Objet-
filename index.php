<?php 
include 'classes/Employe.php';
include 'include/Traitement.php';

/*
 * Cette instruction appel la methode instanciationUnEmploye
 */
try{
    Traitement::instanciationUnEmploye();
    Traitement::instanciationUnEmployeErreur();
    Traitement::instanciationUnEmploye();//il n'apparait pas car l'instanciationUnEmployeErreur a retrouné une erreur.
} catch (Exception $ex) {
    echo $ex->getMessage();
}