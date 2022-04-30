<?php
require_once "Triangulo.php";
require_once "Cuadrado.php";
/**Manipulado un objeto cuadrado */
echo "Informacion del cuadrado \n";
$cuadrado = new Cuadrado();
$cuadrado->setMedidaLado(10);

echo "numero de lados :".$cuadrado->getNumeroLados()."\n";
echo "la medida del lado es :".$cuadrado->getMedidaLado()."\n";
echo "el perimetro es :".$cuadrado->calcularPerimetro()."\n";
echo "el area es :".$cuadrado->calcularArea()."\n";

echo "-------------------------\n";

/**Manipulado un objeto triangulo */
echo "Informacion del triangulo \n";
$triangulo = new Triangulo();
$triangulo->setMedidaLado(10);
echo "numero de lados :".$triangulo->getNumeroLados()."\n";
echo "la medida del lado es :".$triangulo->getMedidaLado()."\n";
echo "el perimetro es :".$triangulo->calcularPerimetro()."\n";
echo "el area es :".$triangulo->calcularArea()."\n";

