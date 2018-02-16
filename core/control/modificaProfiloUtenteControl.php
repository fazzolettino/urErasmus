<?php
include_once MODEL_DIR . "UtenteManager.php";
include_once BEANS_DIR . "Utente.php";

if(isset($_SESSION['user'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["username"])) { 
            $username = $_POST["username"];
            $um = new UtenteManager();
            $flag = $um->existUsername($username);

            if ($flag == 1) {
                $_SESSION['toast-type'] = "error";
                $_SESSION['toast-message'] = "Username già esistente!";
                header("Location:" . DOMINIO_SITO . "/modificaProfiloUtente");
            } else {

                if (isset($_POST["email"])) {
                    $email = $_POST["email"];
                    $um = new UtenteManager();
                    $flag = $um->existEmail($email);


                    if ($flag) {
                        $_SESSION['toast-type'] = "error";
                        $_SESSION['toast-message'] = "Email già esistente";
                        header("Location:" . DOMINIO_SITO . "/modificaProfiloUtente");
                    } else {

                        $user = unserialize($_SESSION['user']);
                        $user->setEmail($email);

                        if (isset($_POST["citta"])) {
                            $citta = $_POST["citta"];

                            }

                        $user = unserialize($_SESSION['user']);
                        if ($email != " " && $email != "") {
                            $user->setEmail($email);
                        }
            
                        if ($username != " " && $username != "") {
                            $user->setId($username);
                        }
                        if ($citta != " " && $citta != "") {
                        $user->setCitta($citta);
                        }

                        $um = new UtenteManager();


                        $um->updateUser($user->getKeyUtente(), $user);

                        unset($_SESSION['user']);
                        $_SESSION['user'] = serialize($user);

                        $_SESSION['toast-type'] = "success";
                        $_SESSION['toast-message'] = "Modifiche applicate con successo";
                        header("Location:" . DOMINIO_SITO . "/modificaProfiloUtente");





                    }
                }
            }
        } else {
            $_SESSION['toast-type'] = "error";
            $_SESSION['toast-message'] = "Password non inserita";
            header("Location:" . DOMINIO_SITO . "/modificaProfiloUtente");

        }

    } else{
    header("Location:".DOMINIO_SITO);

    }
}