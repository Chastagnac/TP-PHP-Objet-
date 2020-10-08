<?php

include 'classes/Employe.php';
include 'include/Traitement.php';
include 'classes/Projet.php';
/*
 * Cette instruction appel la methode instanciationUnEmploye
 */
try {
    Traitement::instanciationProjetV1();
    
    
    Traitement::instanciationUnEmploye();
    
    Traitement::instanciationUnEmployeErreur();
    
    
} catch (Exception $ex) {
    echo $ex->getMessage();
}