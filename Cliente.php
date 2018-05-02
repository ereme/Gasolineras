<?php

require_once ("Persona.php");
require_once ("Repostaje.php");

class Cliente extends Persona {
    var $cif;
    var $repostajes;

    function __construct ($nombre, $cif) {
        parent:: __construct ($nombre);
        $this->cif = $cif;
    }

    function setCif ($cif) {
        $this->cif = $cif;
    }

    function getCif () {
        return $this->cif;
    }

    function addRepostaje ($repostaje) {
        $this->repostajes [] = $repostaje;
    }

    function mostrar () {
        echo "<br> El CIF del cliente ".$this->getNombre ()." es ".$this->getCif ().".";
        for ($i=0; $i < count ($this->repostajes) ; $i++) { 
            $this->repostajes [$i]->mostrar ();
        }
        $r = count ($this->repostajes) -1;
        $date1 = new DateTime( date('d-m-Y') );  
        $date2 = new DateTime($this->repostajes[$r]->getFecha());
        $diff = $date1->diff($date2); 
        
        echo " Su último repostaje fue hace ".$diff->days." días.";
        
    }
}