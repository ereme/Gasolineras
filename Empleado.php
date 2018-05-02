<?php

require_once ("Persona.php");

class Empleado extends Persona {
    var $id;

    function __construct ($nombre, $id) {
        parent:: __construct ($nombre);
        $this->id = $id;
    }

    function setId ($id) {
        $this->id = $id;
    }

    function getId () {
        return $this->id;
    }

    function mostrar () {
        echo "<br> El ID del empleado ".$this->getNombre ()." es ".$this->getId ().".";
    }
}