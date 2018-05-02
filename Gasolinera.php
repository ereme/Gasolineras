<?php

require_once ("Cliente.php");
require_once ("Empleado.php");
require_once ("SurtidorGasolina.php");
require_once ("SurtidorGasoil.php");

class Gasolinera {
    var $ciudad;
    var $marca;
    var $clientes;
    var $empleados;
    var $surtidores;

    function __construct ($ciudad, $marca) {
        $this->ciudad = $ciudad;
        $this->marca = $marca;
    }

    function setCiudad ($ciudad) {
        $this->ciudad = $ciudad;
    }

    function getCiudad () {
        return $this->ciudad;
    }

    function setMarca ($marca) {
        $this->marca = $marca;
    }

    function getMarca () {
        return $this->marca;
    }

    function addCliente ($cliente) {
        $this->clientes [] = $cliente;
    }

    function bajaCliente ($cif) {
        for ($i=0; $i < count ($this->clientes) ; $i++) { 
            if ($this->clientes [$i]->getCif () == $cif) {
                $this->clientes [$i] = null;
            }
        }
    }
    
    function addEmpleado ($empleado) {
        $this->empleados [] = $empleado;
    }

    function bajaEmpleado ($id) {
        for ($i=0; $i < count ($this->empleados) ; $i++) { 
            if ($this->empleados [$i]->getId () == $id) {
                $this->empleados [$i] = null;
            }
        }
    }
    
    function addSurtidor ($surtidor) {
        $this->surtidores [] = $surtidor;
    }

    
    function mostrar () {
        echo "<br>Esta gasolinera está en ".$this->getCiudad ()." y es de la marca ".$this->getMarca ().".";
        echo "<br><br>";
        echo "EMPLEADOS";
        echo "<br>";
        for ($i=0; $i < count ($this->empleados) ; $i++) { 
            $this->empleados [$i]->mostrar ();
        }
        echo "<br><br>";
        echo "CLIENTES";
        echo "<br>";
        for ($i=0; $i < count ($this->clientes) ; $i++) { 
            $this->clientes [$i]->mostrar ();
        }
        echo "<br><br>";
        echo "SURTIDORES";
        echo "<br>";
        for ($i=0; $i < count ($this->surtidores) ; $i++) { 
            $this->surtidores [$i]->mostrar ();
        }
    }

    function mostrarDatosGasolinera () {
        echo "<br> <center><font size=19> Gasolinera ".$this->getMarca ()." de ".$this->getCiudad ()."  </center> </font> <br>";
    }

    function mostrarClientes () {
        echo "<B> <font color=black> CLIENTES </B>";
        echo "<br>";
        for ($i=0; $i < count ($this->clientes) ; $i++) { 
            $this->clientes [$i]->mostrar ();
        }
    }

    function mostrarEmpleados () {
        echo "<B> <font color=black> EMPLEADOS </B>";
        echo "<br>";
        for ($i=0; $i < count ($this->empleados) ; $i++) { 
            $this->empleados [$i]->mostrar ();
        }
    }

    function mostrarPrecios () {
        echo "<B> <font color=black> PRECIOS </B>";
        echo "<br>";
        for ($i=0; $i < count ($this->surtidores) ; $i++) { 
            $this->surtidores [$i]->mostrar ();
        }
    }
}
