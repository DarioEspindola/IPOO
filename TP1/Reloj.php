<?php


/*

    Para cada una de las siguientes clases implementar los métodos de acceso de cada una de las variables instancias, 
    el método _ _toString() (que permite visualizar los valores que poseen las variables instancia) y por último, 
    implementar la clase TestNombreClase para probar cada uno de los métodos implementados en cada clase.

    b) Diseñar e implementar la clase Reloj que simule el comportamiento de un cronómetro digital (con las
    características puesta_a_cero, incremento, etc.). 
    Cuando el contador llegue a 23:59:59 y reciba el mensaje de incremento deberá pasar a 00:00:00.
*/


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

