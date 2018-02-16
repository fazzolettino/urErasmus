<?php
include_once MODEL_DIR . "AnnuncioManager.php";
include_once MODEL_DIR ."UtenteManager.php";





$manager = new AnnuncioManager();
if (isset($_GET['keyToDelete'])){
	echo 'keyToDelete';
    $deleteKey = $_GET['keyToDelete'];

    
    $manager->cancellaAnnuncio($deleteKey);

    $_SESSION['toast-type'] = "success";
    $_SESSION['toast-message'] = "Deleted correctly";
    header ("location: ". DOMINIO_SITO ."/AdminClasses");

} else {
    echo "Errore Rimozione";
}





?>