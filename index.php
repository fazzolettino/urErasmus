<?php

define('ROOT_DIR', dirname(__FILE__));
define('DOMINIO_SITO', '/urErasmus');
define('CORE_DIR', ROOT_DIR . '/core/');
define('VIEW_DIR', CORE_DIR . 'view/');
define('MODEL_DIR', CORE_DIR . 'model/');
define('BEANS_DIR', CORE_DIR . 'beans/');
define('CONTROL_DIR', CORE_DIR . 'control/');
define('UPLOAD_FOLDER','C:/xampp/htdocs'); //variabile per stabilire path totale pre - 'urErasmus'
define('UPLOADS_DIR', UPLOAD_FOLDER . DOMINIO_SITO. '/uploads/');
define('STYLE_DIR', DOMINIO_SITO . '/core/view/style/');
define('IMG_DIR', DOMINIO_SITO .'/img/');
define('UTILS_DIR', CORE_DIR . 'utils/');

    /*
     * URL Parsing, in pratica qualsiasi richiesta al sito arriva a questo file,
     * e quindi possiamo ricavare la richiesta da $_SERVER['SCRIPT_NAME']
     *
     * Successivamente rimuovo tutto ciò che non dovrebbe stare nella richiesta e faccio split
     *
     */
    $_URL = preg_replace("/^(.*?)index.php$/", "$1", $_SERVER['SCRIPT_NAME']);
    $_URL = preg_replace("/^" . preg_quote($_URL, "/") . "/", "", urldecode($_SERVER['REQUEST_URI']));
    $_URL = preg_replace("/(\/?)(\?.*)?$/", "", $_URL);
    $_URL = explode("/", $_URL);
    if (preg_match("/^index.(?:html|php)$/i", $_URL[count($_URL) - 1]))
        unset($_URL[count($_URL) - 1]);
    // definisco costante IP contenente l'ip del client
    if (isset($_SERVER['HTTP_X_REAL_IP'])) {
        define('IP', $_SERVER['HTTP_X_REAL_IP']);
    } else {
        define('IP', $_SERVER['REMOTE_ADDR']);
    }
    session_start(); //facciamo partire la sessione
    
    if (!defined("TESTING")) {
        switch (isset($_URL[0]) ? $_URL[0] : '') {
            case 'insertAnnuncio':
                include_once CONTROL_DIR . "inserisciAnnuncioControl.php";
                break;
            case 'insertAppunti':
                include_once CONTROL_DIR . "inserisciAppunti.php";
                break;
            case 'profiloUtente':
                include_once CONTROL_DIR ."getProfiloUtente.php";
                break;
            case 'urEvents':
                include_once CONTROL_DIR ."getAppunti.php";
                break;
            case 'urUniversity':
                include_once CONTROL_DIR ."getAnnunci.php";
                break;
            case 'modificaUtente':
                include_once CONTROL_DIR . "modificaProfiloUtenteControl.php";
                break;
            case 'cambiaPassword':
                include_once CONTROL_DIR ."cambiaPassword.php";
                break;
            case 'registrazione':
                include_once CONTROL_DIR . "registrazione.php";
                break;
            case 'login':
                include_once CONTROL_DIR . "loginControl.php";
                break;
            case 'logout':
                include_once CONTROL_DIR . "logoutControl.php";
                break;
            case 'myAppunti':
                include_once CONTROL_DIR ."myAppuntiControl.php";
                break;
            case 'Users':
                include_once CONTROL_DIR ."UtentiControl.php";
                break;
            case 'admin': 
                include_once VIEW_DIR ."admin.php";
                break;
            case 'AdminClasses':
                include_once CONTROL_DIR . "getAnnunciAdmin.php";
                break;
            case 'myAnnunci':
                include_once CONTROL_DIR ."myAnnunciControl.php";
                break;
            case '':
                include_once VIEW_DIR . "home.php";
                break;
            case 'categorie':
                include_once VIEW_DIR . "categorie.php";
                break;
            case 'home':
                include_once VIEW_DIR . "home.php";
                break;
            case 'AdminEvents':
                include_once CONTROL_DIR . "getAppuntiAdmin.php";
                break;
            case 'removeEventi':
                include_once CONTROL_DIR . "removeAppunti.php";
                break;
            case 'removeCorso':
                include_once CONTROL_DIR . "removeAnnuncio.php";
                break;
            case 'help':
                include_once VIEW_DIR . "help.php";
                break;
            case 'inserisciCorso':
                include_once VIEW_DIR . "inserisciAnnunci.php";
                break; 
            case 'inserisciEvento':
                include_once VIEW_DIR . "inserisciAppunti.php";
                break;
            case 'autenticazione':
                include_once VIEW_DIR . "autenticazione.php";
                break;
            case 'modificaProfiloUtente':
                include_once VIEW_DIR . "modificaProfiloUtente.php";
                break;
            case 'listauser':
                include_once CONTROL_DIR . "UtentiControl.php";
                break;
            case 'editEventi':
                include_once CONTROL_DIR . "editAppunti.php";
                break;
            case 'realEditEventi':
                include_once CONTROL_DIR . "realEditAppunti.php";
                break;
            case 'realEditCorso':
                include_once CONTROL_DIR . "realEditAnnuncio.php";
                break;
            case 'editProfilo':
                include_once CONTROL_DIR . "editProfiloUtenteControl.php";
                break;
            case 'editCorso':
                include_once CONTROL_DIR . "editAnnuncio.php";
                break;
            default:
                include_once VIEW_DIR ."404.php";
                break;
        }

    }

