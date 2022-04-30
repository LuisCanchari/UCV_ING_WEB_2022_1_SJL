<?php
require_once("Poligono.php");
require_once("IPoligono.php");
class Triangulo extends Poligono implements IPoligono
{
    public function __construct()
    {
        parent::setNumeroLados(3);
    }

    public function calcularPerimetro(){
        $perimetro = 3*$this->getMedidaLado();
        return $perimetro;

    }
    public function calcularArea(){
        $area = pow($this->getMedidaLado(),2)*sqrt(3)/4;
        return $area;

    }
}