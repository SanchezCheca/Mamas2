<?php

class Pregunta
{

    //--------------------------PROPIEDADES
    private $id;
    private $cuerpo;
    private $tipo;
    private $valor;

    //--------------------------CONSTRUCTOR
    function __construct($id, $cuerpo, $tipo, $valor)
    {
        $this->id = $id;
        $this->cuerpo = $cuerpo;
        $this->tipo = $tipo;
        $this->valor = $valor;
    }

    //--------------------------GET & SET
    function getCuerpo()
    {
        return $this->cuerpo;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    function getValor()
    {
        return $this->valor;
    }

    function setCuerpo($cuerpo): void
    {
        $this->cuerpo = $cuerpo;
    }

    function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    function setValor($valor): void
    {
        $this->valor = $valor;
    }

    function getId()
    {
        return $this->id;
    }
}
