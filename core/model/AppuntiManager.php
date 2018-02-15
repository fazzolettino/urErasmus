<?php

include_once BEANS_DIR.'Appunti.php';
include_once MODEL_DIR.'Connector.php';
include_once MODEL_DIR.'TagManager.php';
include_once BEANS_DIR.'Tag.php';
class AppuntiManager

{


    private $tagManager;

    public function __construct() {
        $this->tagManager = new TagManager();
    }

    private function lastInsertKey(){
        $lastInsert = "SELECT MAX(KEYAPPUNTI) FROM APPUNTI";
        $result_query = mysqli_query(Connector::getConnector(),$lastInsert);
        if($result_query){
            while($r = $result_query->fetch_assoc()){
                $keyAppunti = $r["MAX(KEYAPPUNTI)"];
                return $keyAppunti;
            }
        }
    }

    public function insertAppunti($appunti){
        $insertSql = "INSERT INTO APPUNTI (KEYCORSI, NOME, CATEGORIA, ANNOCORSO, DATADICARICAMENTO, KEYUTENTE) 
                VALUES ('%s', '%s', '%s', '%s','%s', '%s')" ;
        $query = sprintf($insertSql, null, $appunti->getNome(), $appunti->getCategoria(), $appunti->getAnnoCorso(), $appunti->getDataDiCaricamento(), $appunti->getKeyUtente());
        mysqli_query(Connector::getConnector(), $query);
        $keyAppunti = $this->lastInsertKey();
    }


    public function getAllAppunti() {
        $selectSql = "SELECT * FROM APPUNTI";
        $res = mysqli_query(Connector::getConnector(), $selectSql);
        $listAppunti = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $appunti = new Appunti($obj['KEYCORSI'],$obj['NOME'],$obj['CATEGORIA'],$obj['ANNOCORSO'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE']);
                array_push($listAppunti,$appunti);
            }
        }
        return $listAppunti;
    }

    public function getAppuntiByCategoria ($nameCategory){
        $selectSql = "SELECT * FROM APPUNTI WHERE CATEGORIA = '%s'";
        $query = sprintf($selectSql,$nameCategory);
        $res = mysqli_query(Connector::getConnector(), $query);
        $listAppunti = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $listTag = $this->tagManager->getTagByAppunti($obj['KEYAPPUNTI']);
                $appunti = new Appunti($obj['KEYAPPUNTI'],$obj['NOME'],$obj['CATEGORIA'],$obj['DESCRIZIONE'],$obj['PATH'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE'],$listTag);
                array_push($listAppunti,$appunti);
            }
        }
        return $listAppunti;
    }

    public function getAppuntiByUser ($idUser){
        $selectSql = "SELECT * FROM APPUNTI WHERE KEYUTENTE = '%s'";
        $query = sprintf($selectSql,$idUser);
        $res = mysqli_query(Connector::getConnector(), $query);
        $listAppunti = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $listTag = $this->tagManager->getTagByAppunti($obj['KEYAPPUNTI']);
                $appunti = new Appunti($obj['KEYAPPUNTI'],$obj['NOME'],$obj['CATEGORIA'],$obj['DESCRIZIONE'],$obj['PATH'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE'],$listTag);
                array_push($listAppunti,$appunti);
            }
        }
        return $listAppunti;
    }

    public function getAppuntiByTitolo ($name){
        $selectSql = "SELECT * FROM APPUNTI WHERE NOME LIKE '%s'";
        $name = "%%".$name."%%";
        $query = sprintf($selectSql,$name);
        $res = mysqli_query(Connector::getConnector(), $query);
        $listAppunti = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $listTag = $this->tagManager->getTagByAppunti($obj['KEYAPPUNTI']);
                $appunti = new Appunti($obj['KEYAPPUNTI'],$obj['NOME'],$obj['CATEGORIA'],$obj['DESCRIZIONE'],$obj['PATH'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE'],$listTag);
                array_push($listAppunti,$appunti);
            }
        }
        return $listAppunti;
    }

    public function  getAppuntiByKeyAppunti($keyAppunti){
        $selectSql = "SELECT * FROM APPUNTI WHERE KEYAPPUNTI = '%s'";
        $query = sprintf($selectSql,$keyAppunti);
        $res = mysqli_query(Connector::getConnector(),$query);

        if($res){

            while($obj =$res->fetch_assoc()){
                $listTag = $this->tagManager->getTagByAppunti($obj['KEYAPPUNTI']);
                $appunti = new Appunti($obj['KEYAPPUNTI'],$obj['NOME'],$obj['CATEGORIA'],$obj['DESCRIZIONE'],$obj['PATH'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE'],$listTag);
                return $appunti;
            }
        }

        return null;

    }

    public function cancellaAppunti($keyCorsi){
        $selectSql = "DELETE FROM `appunti` WHERE `KEYCORSI` = '%s'";
        $query = sprintf($selectSql,$keyCorsi);
        $res = mysqli_query(Connector::getConnector(),$query);
        //echo $query;
    }

    public function modificaAppunti($keyCorsi){
        $selectSql = "UPDATE * FROM APPUNTI WHERE KEYCORSI = '%S'";
        $query = sprintf($selectSql,$keyCorsi);
        $res = mysqli_query(Connector::getConnector(),$query);
        
        
    }


}