<?php

require_once 'carro.php';

//$carro1 = new Carro();

$carro1 = new Carro("amarillo","ferrari","gallardo",500,200,40,2);
$carro2 = new Carro("Lila","Lamborguini","Alpha",1500,200,40,2);
$carro3 = new Carro("Negro","audi","A5",1200,200,40,4);
$carro4 = new Carro("Rosa","Mercedes","Clase A",500,200,40,2);



var_dump($carro1);
var_dump($carro2);
var_dump($carro3);
var_dump($carro4);
