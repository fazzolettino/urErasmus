<?php

include_once MODEL_DIR . "AppuntiManager.php";
include_once BEANS_DIR ."Appunti.php";
include_once BEANS_DIR ."Utente.php";

if(isset($_SESSION['user'])) {

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Name not inserted";
        header("Location:" . DOMINIO_SITO . "/inserisciCorso");
    }



    if (isset($_POST['categorie'])) {


        if($_POST['categorie'] !="Fun Events" && $_POST['categorie']!="University Events"){

            header("Location:".DOMINIO_SITO."/inserisciCorso");
            $_SESSION['toast-type'] = "error";
            $_SESSION['toast-message'] = "Category not aviable";

        }else{
            $categoria = $_POST['categorie'];
        }

    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Class not inserted";
        header("Location:" . DOMINIO_SITO . "/inserisciCorso");
    }

    if (isset($_POST['annoCorso'])) {

        $annoCorso = $_POST['annoCorso'];

    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Year not inserted";
        header("Location:" . DOMINIO_SITO . "/inserisciCorso");
    }



    $data = date("Y-m-d");
    $user = unserialize($_SESSION["user"]);
    $keyUtente = $user->getKeyUtente();
    $keyAppunti = 0;
    $manager = new AppuntiManager();
    $appunti = new Appunti($keyAppunti, $nome, $categoria, $annoCorso, $data, $keyUtente);
    $manager->insertAppunti($appunti);


    $_SESSION['toast-type'] = "success";
    $_SESSION['toast-message'] = "Event succesfully inserted";
    header("Location:" . DOMINIO_SITO . "/urEvents");
}else{
    header("Location:" . DOMINIO_SITO);
}
?>