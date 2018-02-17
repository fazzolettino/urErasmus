<?php

include_once BEANS_DIR .'Annuncio.php';
include_once MODEL_DIR . 'Connector.php';
class AnnuncioManager
{
    private $tagManager;

    public function __construct() {

    }



    public function insertAnnuncio($annuncio){

        $insertSql = "INSERT INTO ANNUNCIO(TITOLO, DESCRIZIONE, CONTATTO, DATADICARICAMENTO, KEYUTENTE) 
              VALUES ('%s', '%s', '%s', '%s', '%s');";
        $query = sprintf($insertSql, $annuncio->getTitolo(), $annuncio->getDescrizione(), $annuncio->getContatto(), $annuncio->getDataDiCaricamento(), $annuncio->getKeyUtente());
        mysqli_query(Connector::getConnector(), $query);
    }

    public function getAllAnnunci(){
        $selectSql = "SELECT * FROM ANNUNCIO";
        $res = mysqli_query(Connector::getConnector(), $selectSql);
        $listAnnunci = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $annuncio = new Annuncio($obj['KEYANNUNCIO'],$obj['TITOLO'],$obj['DESCRIZIONE'],$obj['CONTATTO'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE']);
                array_push($listAnnunci,$annuncio);
            }
        }
        return $listAnnunci;
    }

    public function getAnnuncioByKey($keyAnnunci){
        $selectSql = "SELECT * FROM ANNUNCIO WHERE KEYANNUNCIO = '%s'";
        $query = sprintf($selectSql,$keyAnnunci);
        $res = mysqli_query(Connector::getConnector(), $query);
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $annuncio = new Annuncio($obj['KEYANNUNCIO'],$obj['TITOLO'],$obj['DESCRIZIONE'],$obj['CONTATTO'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE']);
            }
        }
        return $annuncio;
    }


    public function getAnnunciByUser($idUser){
        $selectSql = "SELECT * FROM ANNUNCIO WHERE KEYUTENTE = '%s'";
        $query = sprintf($selectSql,$idUser);
        $res = mysqli_query(Connector::getConnector(), $query);
        $listAnnunci = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $listTag = $this->tagManager->getTagByAnnuncio($obj['KEYANNUNCIO']);
                $annuncio = new Annuncio($obj['KEYANNUNCIO'],$obj['TITOLO'],$obj['DESCRIZIONE'],$obj['CONTATTO'],$obj['DATADICARICAMENTO'],$obj['KEYUTENTE'],$listTag);
                array_push($listAnnunci,$annuncio);
            }
        }
        return $listAnnunci;
    }

    public function cancellaAnnuncio($keyAnnuncio){
        $selectSql = "DELETE FROM `annuncio` WHERE `KEYANNUNCIO` = '%s'";
        $query = sprintf($selectSql,$keyAnnuncio);
        $res = mysqli_query(Connector::getConnector(),$query);
        //echo $query;
    }

    public function modificaAnnuncio($keyAnnuncio, $titolo, $descrizione, $contatto){
        $selectSql = "UPDATE `annuncio` SET `TITOLO`='%s',`DESCRIZIONE`='%s',`CONTATTO`='%s' WHERE `KEYANNUNCIO` = '%s'";
        $query = sprintf($selectSql,$titolo, $descrizione, $contatto, $keyAnnuncio);
        $res = mysqli_query(Connector::getConnector(),$query);
        echo $query;
        if($res) {
            return true;
        } else {
            return false;
        }
        
    }



}
