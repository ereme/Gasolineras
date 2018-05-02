<?php

class Repostaje {
    var $litros;
    var $fecha;

    function __construct ($litros, $fecha) {
        $this->litros = $litros;
        $this->fecha = $fecha;
    }

    function setLitros ($litros) {
        $this->litros = $litros;
    }

    function getLitros () {
        return $this->litros;
    }

    function setFecha ($fecha) {
        $this->fecha = $fecha;
    }

    function getFecha () {
        return $this->fecha;
    }

    function mostrar () {
        echo " Hizo un repostaje de ".$this->getLitros ()." litros el día ".$this->getFecha ().".";
    
    }

}