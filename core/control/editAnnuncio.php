<?php
include_once MODEL_DIR . "AnnuncioManager.php";
include_once MODEL_DIR ."UtenteManager.php";





$manager = new AnnuncioManager();
if (isset($_GET['keyToEdit'])){
    $deleteKey = $_GET['keyToEdit'];


} else {
    echo "Errore Modifica";
}





?>