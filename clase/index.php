<?php

//clase: molde para crear mas objetos

class Carro{
    //atributos o propiedades (variables)
    public $color = 'rojo';
    public $marca = 'Ferrati';
    public $modelo = 'Aventador';
    public $velocidad = 500;
    public $caballaje = 300;
    public $puestos = 2;

    // metodo -> acciones que el hace el carro(funciones)

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

     public function getVelocidad(){
       return $this->velocidad;
    }

     public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }

    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    


    }

//crear un objeto / instanciar la clase
$carroEspecial = new Carro();

//var_dump($carroEspecial);
echo 'la velocidad de mi carro es: '.$carroEspecial->getVelocidad().'<br>';

echo 'el color de mi carro es: '. $carroEspecial->getColor().'<br>';

$carroEspecial->setColor('amarillo');

echo $carroEspecial->getColor().'<br>';

$carroEspecial->acelerar();

echo 'la velocidad de mi carro es: '.$carroEspecial->getVelocidad().'<br>';


$carroEspecial->acelerar();
$carroEspecial->acelerar();
$carroEspecial->acelerar();
$carroEspecial->acelerar();

echo 'ahora la velocidad de mi carro es: '.$carroEspecial->getVelocidad().'<br>';

$carroEspecial->frenar();
$carroEspecial->frenar();

echo 'ahora frene la velocidad de mi carro es: '.$carroEspecial->getVelocidad().'<br>';
