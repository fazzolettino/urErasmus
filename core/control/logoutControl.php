<?php


if(isset($_SESSION['user'])) {
    session_destroy();

    header("Location: " . DOMINIO_SITO . "/autenticazione");

}else{

    header("Location:".DOMINIO_SITO);

}