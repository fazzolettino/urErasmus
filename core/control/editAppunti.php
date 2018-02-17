<?php
include_once MODEL_DIR . "AppuntiManager.php";
include_once MODEL_DIR ."UtenteManager.php";





if (isset($_GET['keyToEdit'])){
    $editKey = $_GET['keyToEdit'];
    $AppuntiManager = new AppuntiManager();
    $appunto = $AppuntiManager->getAppuntiByKeyAppunti($editKey);

    include_once VIEW_DIR ."editEventiView.php";


} else {
    echo "Errore Modifica";
}





?>