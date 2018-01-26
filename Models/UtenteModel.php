<?php
include_once "User.php";
include_once  "Connector.php";

class utenteModel
{

    public function __construct() {
    }

    public function getAll() {
        $selectsql = "SELECT * FROM `UTENTE`";
        $res = mysqli_query(Connector::getConnector(), $selectsql);
        $users = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $user = new User($obj['ID'],$obj['TITLE'], $obj['AUTHOR'], $obj['GENRE'], $obj['EDITOR'], $obj['POSITION'], $obj['DATA'], $obj['AVIABLE']);
                $users[] = $user;
            }
        }
        return $users;
    }

    public function like($key) {
        $sql = "SELECT * FROM `BOOK` WHERE `TITLE` LIKE '%$key%' OR `GENRE` LIKE '%$key%' OR `EDITOR` LIKE '%$key%' OR `AUTHOR` LIKE '%$key%'";
        $res = mysqli_query(Connector::getConnector(), $sql);
        $users = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $book = new Book($obj['ID'],$obj['TITLE'], $obj['AUTHOR'], $obj['GENRE'], $obj['EDITOR'], $obj['POSITION'], $obj['DATA'], $obj['AVIABLE']);
                $users[] = $user;
            }
            return $users;
        }
        return $users;
    }

    public function getById($id) {
        $sql = "SELECT * FROM `UTENTE` WHERE `ID` = '%s'";
        $query = sprintf($sql, $id);
        $res = mysqli_query(Connector::getConnector(), $query);
        $users = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $user = new User($obj['ID'],$obj['TITLE'], $obj['AUTHOR'], $obj['GENRE'], $obj['EDITOR'], $obj['POSITION'], $obj['DATA'], $obj['AVIABLE']);
                $users[] = $user;
            }
            return $users;
        }
        return $users;

    }

}
