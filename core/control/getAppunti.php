<?php
include_once MODEL_DIR . "AppuntiManager.php";
include_once MODEL_DIR ."UtenteManager.php";



    

    $manager = new AppuntiManager();

    $appunti = $manager->getAllAppunti();


    include_once VIEW_DIR . "categorie.php";



function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>