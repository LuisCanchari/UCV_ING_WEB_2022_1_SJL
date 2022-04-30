<?php
require_once("Poligono.php");
require_once("IPoligono.php");

class Cuadrado extends Poligono implements IPoligono
{
    public function __construct($medida_lado=1)
    {
        parent::__construct(4,$medida_lado);
        
    }
    public function calcularPerimetro(){
        $perimetro = 4*$this->getMedidaLado();
        return $perimetro;

    }
    public function calcularArea(){
        $area = pow($this->getMedidaLado(),2);
        return $area;

    }
    
}
