<?php

require_once ("Surtidor.php");

class SurtidorGasolina extends Surtidor {
    var $octanaje;

    function __construct ($precio, $octanaje) {
        parent:: __construct ($precio);
        $this->octanaje = $octanaje;
    }

    function setOctanaje ($octanaje) {
        $this->octanaje = $octanaje;
    }

    function getOctanaje () {
        return $this->octanaje;
    }

    function mostrar () {
        echo "<br> El precio de la gasolina es de ".$this->getPrecio()." euros.";
        echo " Su octanaje es de ".$this->getOctanaje ().".";
    }

}
