<?php
include_once MODEL_DIR . "AppuntiManager.php";
include_once MODEL_DIR ."UtenteManager.php";


$manager = new AppuntiManager();
$appunto = $manager->getAppuntiByKeyAppunti($_GET['keyToEdit']);


if (isset($_POST['nome'])) {
        
        $nome = $_POST['nome'];

        if (isset($_POST['Categorie'])) {
        
        $categoria = $_POST['Categorie'];

		} else { //redirect $post_categoria

        //categoria
    }

    } else { //redirect $post_nome
        
        //nome
    }



?>