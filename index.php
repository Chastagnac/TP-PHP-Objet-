<?php

namespace APP;

require_once './vendor/autoload.php';
include 'include/Traitement.php';




/*
 * Cette instruction appel la methode instanciationUnEmploye
 */
try {
    \Traitement::testGainAnnuel();
} catch (Exception $ex) {
    echo $ex->getMessage();
}