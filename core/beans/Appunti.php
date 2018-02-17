<?php

class Appunti
{

    private $keyCorsi;
    private $nome;
    private $categoria;
    private $annocorso;
    private $dataDiCaricamento;
    private $keyUtente;

    /**
     * Appunti constructor.
     * @param $keyCorsi
     * @param $nome
     * @param $categoria
     * @param $descrizione
     * @param $dataDiCaricamento
     * @param $keyUtente
     */
    public function __construct($keyCorsi, $nome, $categoria, $annocorso, $dataDiCaricamento, $keyUtente)
    {
        $this->keyCorsi = $keyCorsi;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->annocorso = $annocorso;
        $this->dataDiCaricamento = $dataDiCaricamento;
        $this->keyUtente = $keyUtente;
    }

    public function getKeyCorsi(){
        return $this->keyCorsi;
    }

    public function setKeyCorsi($kc){
        $this->KeyCorsi=$kc;
    } 

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($kc){
        $this->categoria=$kc;
    }

    public function getAnnoCorso(){
        return $this->annocorso;
    }

    public function setAnnoCorso($kc){
        $this->annocorso=$kc;
    }

    public function getDataDiCaricamento(){
        return $this->dataDiCaricamento;
    }

    public function setDataDiCaricamento($kc){
        $this->dataDiCaricamento=$kc;
    }

    public function getKeyUtente(){
        return $this->categoria;
    }

    public function setKeyUtente($kc){
        $this->keyUtente=$kc;
    } 



   
    


}