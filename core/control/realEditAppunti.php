<?php
include_once MODEL_DIR . "AppuntiManager.php";
include_once MODEL_DIR ."UtenteManager.php";


$manager = new AppuntiManager();
$appunto = $manager->getAppuntiByKeyAppunti($_GET['keyToEdit']);


    if (isset($_POST['nome']) && $_POST['nome'] != NULL) {

    $nome = $_POST['nome'];

} else {
        $nome = $appunto->getNome();
    }

    if (isset($_POST['categorie']) && $_POST['categorie'] != NULL) {


    $categoria = $_POST['categorie'];

} else {
        $categoria = $appunto->getCategoria();

    }

    if (isset($_POST['annoCorso']) && $_POST['annoCorso'] != NULL) {

    $annoCorso = $_POST['annoCorso'];


} else {
        $annoCorso = $appunto->getAnnoCorso();
    }

    if (isset($_POST['dataDiCaricamento'])  && $_POST['dataDiCaricamento'] != NULL) {

    $dataDiCaricamento = $_POST['dataDiCaricamento'];

} else {
        $dataDiCaricamento = $appunto->getDataDiCaricamento();
    }


    $flag = $manager->modificaAppunti($_GET['keyToEdit'], $nome, $categoria, $annoCorso, $dataDiCaricamento);

    if($flag == 1) {

        $_SESSION['toast-type'] = "success";
        $_SESSION['toast-message'] = "Modifiche applicate con successo";
        header("Location:" . DOMINIO_SITO . "/editAppunti?keyToEdit=" . $_GET['keyToEdit']);

    } else {

        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Errore durante la modifica";
        header("Location:" . DOMINIO_SITO . "/editAppunti?keyToEdit=" . $_GET['keyToEdit']);
    }





?>