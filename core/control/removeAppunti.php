<?php
include_once MODEL_DIR . "AppuntiManager.php";
include_once MODEL_DIR ."UtenteManager.php";





$manager = new AppuntiManager();
if (isset($_GET['keyToDelete'])){
    $deleteKey = $_GET['keyToDelete'];

    
    $manager->cancellaAppunti($deleteKey);

    $_SESSION['toast-type'] = "success";
    $_SESSION['toast-message'] = "Deleted correctly";
    header ("location: ". DOMINIO_SITO ."/AdminEvents");

} else {
    echo "Errore Rimozione";
}





?>