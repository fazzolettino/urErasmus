<?php
include_once BEANS_DIR ."Annuncio.php";
include_once MODEL_DIR . "AnnuncioManager.php";
include_once BEANS_DIR . "Utente.php";

if(isset($_SESSION['user'])) {
    if (isset($_POST['titolo'])) {
        $titolo = $_POST['titolo'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Inserisci il titolo";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnunci");
    }


    if (isset($_POST['descrizione'])) {
        $descrizione = $_POST['descrizione'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Inserisci la descrizione";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnunci");
    }

    if (isset($_POST['contatto'])) {
        $contatto = $_POST['contatto'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Inserisci un contatto";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnunci");
    }

    $user = unserialize($_SESSION['user']);

    $data = date("Y-m-d");
    $keyAnnuncio = 0;
    $manager = new AnnuncioManager();
    $annuncio = new Annuncio($keyAnnuncio, $titolo, $descrizione, $contatto, $data, $user->getKeyUtente(), $result);

    $manager->insertAnnuncio($annuncio);

    $_SESSION['toast-type'] = "success";
    $_SESSION['toast-message'] = "Annuncio inserito con successo!";

    header("Location:" . DOMINIO_SITO . "/getAnnunci");

}else{
    header("Location:".DOMINIO_SITO);
}
?>

