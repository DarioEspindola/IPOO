<?php

class Reloj{

    private $horas;
    private $minutos;
    private $segundos;

    public function __construct($horas, $minutos, $segundos){

        $this -> horas = $horas;
        $this -> minutos = $minutos;
        $this -> segundos = $segundos;
    }

    public function getHoras(){
        return $this -> horas;
    }

    public function getMinutos(){
        return $this -> minutos;
    }

    
    public function getSegundos(){
        return $this -> segundos;
    }

    
    public function setHoras($h){
        $this -> horas = $h;
    }

    public function setMinutos($m){
        $this -> minutos = $m;
    }

    public function setSegundos($s){
        $this -> segundos = $s;
    }

    public function puesta_a_cero (){
        $this -> setHoras(0);
        $this -> setMinutos(0);
        $this -> setSegundos (0);
    }

    /*public function incrementar(){
        
        for ($i = 0; $i < 60; $i++){
            if ()
        }

    }*/


}

$unReloj = new Reloj(10, 3, 34);

echo $unReloj -> getSegundos();

$unReloj -> setSegundos(0);

echo $unReloj -> getSegundos();

$unReloj -> puesta_a_cero();

echo "\n";


echo $unReloj -> getHoras();


?>

