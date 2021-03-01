<?php

class Opcion
{
    //--------------------------PROPIEDADES    
    private $id;
    private $idPregunta;
    private $esCorrecta;
    private $cuerpo;

    //--------------------------CONSTRUCTOR
    function __construct($id, $idPregunta, $esCorrecta, $cuerpo)
    {
        $this->id = $id;
        $this->idPregunta = $idPregunta;
        $this->esCorrecta = $esCorrecta;
        $this->cuerpo = $cuerpo;
    }

    //--------------------------GET & SET
    function getId()
    {
        return $this->id;
    }

    function getIdPregunta()
    {
        return $this->idPregunta;
    }

    function getEsCorrecta()
    {
        return $this->esCorrecta;
    }

    function getCuerpo()
    {
        return $this->cuerpo;
    }

    function setEsCorrecta($esCorrecta): void
    {
        $this->esCorrecta = $esCorrecta;
    }

    function setCuerpo($cuerpo): void
    {
        $this->cuerpo = $cuerpo;
    }
}
