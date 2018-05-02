<?php

class Persona {
    var $nombre;        

    function __construct ($nombre) {
        $this->nombre = $nombre;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }
}