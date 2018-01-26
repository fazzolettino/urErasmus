<?php

include_once MODEL_DIR . 'UtenteManager.php';
include_once BEANS_DIR . 'Utente.php';


$manager = new UtenteManager();
$utenti = array();

$utenti = $manager->getAll();


include_once MODEL_DIR ."listautenti.php";





?>