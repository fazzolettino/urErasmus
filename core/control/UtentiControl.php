<?php

include_once MODEL_DIR . 'UtenteManager.php';


$manager = new UtenteManager();
$utenti = array();

$utenti = $manager->getAll();


include_once VIEW_DIR . "Users.php";





?>