<?php

include 'classes/Employe.php';
include 'include/Traitement.php';
include 'classes/Projet.php';
/*
 * Cette instruction appel la methode instanciationUnEmploye
 */
try {
//    Traitement::instanciationEmployeInformaticienV1();
//    Traitement::instanciationEmployeInformaticienV2();
    //Traitement::instanciationEmployeNonInformaticienV1();
    Traitement::testGainAnnuel();
//    
//    
//    Traitement::instanciationUnEmploye();
//    
//    Traitement::instanciationUnEmployeErreur();
//    
} catch (Exception $ex) {
    echo $ex->getMessage();
}