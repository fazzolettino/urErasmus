<?php

include_once MODEL_DIR . "AnnuncioManager.php";
include_once MODEL_DIR ."UtenteManager.php";


$manager = new AnnuncioManager();
$annuncio = $manager->getAnnuncioByKey($_GET['keyToEdit']);


if(isset($_POST['titolo']) && $_POST['titolo']) {
    $titolo = $_POST['titolo'];
} else {
    $titolo = $annuncio->getTitolo();
}

if(isset($_POST['descrizione']) && $_POST['descrizione']) {
    $descrizione = $_POST['descrizione'];
} else {
    $descrizione = $annuncio->getDescrizione();
}

if(isset($_POST['contatto']) && $_POST['contatto']) {
    $contatto = $_POST['contatto'];
} else {
    $contatto = $annuncio->getContatto();
}

    $flag = $manager->modificaAnnuncio($_GET['keyToEdit'], $titolo, $descrizione, $contatto);

    if ($flag == 1){
        $_SESSION['toast-type'] = "success";
        $_SESSION['toast-message'] = "Modifiche applicate con successo";
        header("Location:" . DOMINIO_SITO . "/urUniversity");
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Errore durante la modifica";
        header("Location:" . DOMINIO_SITO . "/editCorso?keyToEdit=" . $_GET['keyToEdit']);
    }


?>