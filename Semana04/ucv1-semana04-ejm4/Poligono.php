<?php
class Poligono{
    private $numero_lados;
    private $medida_lado;

    public function __construct($numero_lados = 3,$medida_lado=1)
    {
        $this->numero_lados = $numero_lados;
        $this->medida_lado = $medida_lado;
    }

    public function setNumeroLados($numero_lados){
        $this->numero_lados = $numero_lados;
    }
    public function setMedidaLado($medida_lado){
        $this->medida_lado = $medida_lado;

    }
    public function getNumeroLados(){
        return $this->numero_lados;
    }

    public function getMedidaLado(){
        return $this->medida_lado;
    }
}