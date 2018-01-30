<?php

include_once BEANS_DIR . 'Utente.php';
include_once MODEL_DIR .'Connector.php';
/**
 * Created by PhpStorm.
 * User: Paolo
 * Date: 12/01/2017
 * Time: 09:43
 */
class UtenteManager
{

    public function __construct() {
    }

    public function getAll() {
        $query = "SELECT * FROM UTENTE";
        $users = array();
        $res = mysqli_query(Connector::getConnector(), $query);
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $utente = new Utente($obj['KEYUTENTE'], $obj['ID'], $obj['EMAIL'], $obj['CITTA'], $obj['PASS']);
                array_push($users, $utente);
            }
            
            
        }
        return $users;
    }



    private function lastInsertKey(){
        $lastInsert = "SELECT MAX(KEYUTENTE) FROM UTENTE";
        $result_query = mysqli_query(Connector::getConnector(),$lastInsert);
        if($result_query){
            while($r = $result_query->fetch_assoc()){
                $keyUtente = $r["MAX(KEYUTENTE)"];
                return $keyUtente;
            }
        }
    }

    public function insertUser($user){
        $insertSql = "INSERT INTO UTENTE (ID, EMAIL, CITTA, PASS) VALUES ('%s', '%s', '%s', '%s');";
        $query = sprintf($insertSql,$user->getId(),$user->getEmail(),$user->getCitta(),$user->getPassword());
        mysqli_query(Connector::getConnector(), $query);
        $keyUtente = $this->lastInsertKey();
        return $keyUtente;
    }

    /**
    public function deleteUser($user){
        $deleteSql = "DELETE FROM UTENTE (ID, EMAIL, CITTA, PASS) VALUES ('%s', '%s', '%s', '%s');";
        $query = sprintf($insertSql,$user->getId(),$user->getEmail(),$user->getCitta(),$user->getPassword());
        mysqli_query(Connector::getConnector(), $query);
        $keyUtente = $this->lastInsertKey();
        return $keyUtente;
    } */

    public function updateUser($keyUtente,$utente){
        $updateSql = "UPDATE UTENTE SET ID='%s', EMAIL='%s', CITTA='%s', PASS='%s' WHERE KEYUTENTE = '%s'";
        $query = sprintf($updateSql,$utente->getId(),$utente->getEmail(),$utente->getCitta(),$utente->getPassword(), $keyUtente);
        mysqli_query(Connector::getConnector(), $query);
    }

    public function getUtenteByKeyUtente($keyUtente){
        $selectSql ="SELECT * FROM UTENTE WHERE KEYUTENTE = '%s'";
        $query = sprintf($selectSql,$keyUtente);
        $res = mysqli_query(Connector::getConnector(), $query);
        if ($res) {     
            while ($r = $res->fetch_assoc()) {
                $user = new Utente($r['KEYUTENTE'],$r['ID'], $r['EMAIL'], $r['CITTA'], $r['PASS']);
                return $user;
            }
        }

        return false;
    }

    public function getUtenteById($id){
        $selectSql ="SELECT * FROM UTENTE WHERE ID = '%s'";
        $query = sprintf($selectSql,$id);
        $res = mysqli_query(Connector::getConnector(), $query);
        if ($res) {
            while ($r = $res->fetch_assoc()) {
                $user = new Utente($r['KEYUTENTE'],$r['ID'], $r['EMAIL'], $r['CITTA'], $r['PASS']);
                return $user;
            }
        } else {
             return false;
        }
       
    }

    public function checkAdmin($username,$password){
        $checkLogin ="SELECT * FROM UTENTE WHERE ID ='%s' AND PASS = '%s'";
        $query = sprintf($checkLogin,$username,$password);
        $res = mysqli_query(Connector::getConnector(), $query);

        if($res->num_rows >0){
            return true;
        }else {
            return false;
        }
    }


    public function checkLogin($username,$password){
        $checkLogin ="SELECT * FROM UTENTE WHERE ID ='%s' AND PASS = '%s'";
        $query = sprintf($checkLogin,$username,$password);
        $res = mysqli_query(Connector::getConnector(), $query);

        if($res->num_rows >0){
            return true;
        }else {
            return false;
        }
    }

    public function existEmail($email){
        $checkLogin ="SELECT * FROM UTENTE WHERE EMAIL ='%s'";
        $query = sprintf($checkLogin,$email);
        $res = mysqli_query(Connector::getConnector(), $query);
        if($res->num_rows >0){
            return true;
        }else {
            return false;
        }
    }

    public function existUsername($username){
        $checkLogin ="SELECT * FROM UTENTE WHERE ID ='%s'";
        $query = sprintf($checkLogin,$username);
        $res = mysqli_query(Connector::getConnector(), $query);
        if($res->num_rows >0){
            return true;
        }else {
            return false;
        }
    }




}