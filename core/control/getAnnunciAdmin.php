<?php
include_once MODEL_DIR . "AnnuncioManager.php";
include_once MODEL_DIR ."UtenteManager.php";



    

    $manager = new AnnuncioManager();

    $appunti = $manager->getAllAnnunci();


    include_once VIEW_DIR . "AdminClasses.php";



function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>