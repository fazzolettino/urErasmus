<?php
include_once MODEL_DIR . "AppuntiManager.php";
include_once MODEL_DIR ."UtenteManager.php";





$manager = new AppuntiManager();
if (isset($_GET['keyToEdit'])){
    $deleteKey = $_GET['keyToEdit'];


} else {
    echo "Errore Modifica";
}





?>