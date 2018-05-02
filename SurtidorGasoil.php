<?php

require_once ("Surtidor.php");

class SurtidorGasoil extends Surtidor {
    var $premium;

    function __construct ($precio, $premium) {
        parent:: __construct ($precio);
        $this->premium = $premium;
    }

    function setPremium ($premium) {
        $this->premium = $premium;
    }

    function getPremium () {
        return $this->premium;
    }

    function mostrar () {
        echo "<br> El precio del gasoil es de ".$this->getPrecio ()." euros.";
        echo $this->getPremium () ? " Es premium" : " No es premium";
    }
}