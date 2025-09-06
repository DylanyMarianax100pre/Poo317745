<?php

class Carro{
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $puestos;


//    public function __construct()
//    {
//        $this->color = "Rojo";
//        $this->color = "Ferrari";
//        $this->color = "Gallardo";
//        $this->velocidad = 500;
//        $this->caballaje = 300;
//        $this->puestos = 2;
//    }

       public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $puestos)
    {
        $this->color = $color;
        $this->color = $marca;
        $this->color = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->puestos = $puestos;
    }
}