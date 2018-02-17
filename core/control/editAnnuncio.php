<?php
include_once MODEL_DIR . "AnnuncioManager.php";
include_once MODEL_DIR ."UtenteManager.php";





$manager = new AnnuncioManager();
if (isset($_GET['keyToEdit'])){
    $deleteKey = $_GET['keyToEdit'];
    $manager = new AnnuncioManager();
    $annuncio = $manager->getAnnuncioByKey($_GET['keyToEdit']);
    include_once VIEW_DIR . "editCorsoView.php";


} else {
    echo "Errore Modifica";
}





?>