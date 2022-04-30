<?php
class Pentagono{
    private $medida_lado=1;
    private $numero_lados=5;

    public function getMedidaLado(){
        return $this->medida_lado;
    }
    public function setMedidaLado($medida_lado){
        $this->medida_lado = $medida_lado;
    }

    public function setNumeroLados($numero_lados){
        $this->numero_lados = $numero_lados;
    }

    public function calcularArea(){
        $perimetro = $this->calcularPerimetro();
        $apotema = $this->calcularApotema();
        $area = ($apotema*$perimetro)/2;
        return $area;
    }

    public function calcularPerimetro(){
        $perimetro = $this->numero_lados*$this->medida_lado;
        return $perimetro;
    }

    public function calcularDiagonal(){
        return sqrt(2)*$this->medida_lado;
    }

    public function calcularApotema(){
        $tetha = 2*PI()/(2*$this->numero_lados);
        $apotema  =  $this->medida_lado/2*(tan($tetha));
        return $apotema;
    }


}