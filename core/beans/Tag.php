<?php


class Tag
{
    private $keyTag;
    private $nome;

    /**
     * Tag constructor.
     * @param $keyTag
     * @param $nome
     */
    public function __construct($keyTag,$nome)
    {
        $this->keyTag = $keyTag;
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getKeyTag()
    {
        return $this->keyTag;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }




}