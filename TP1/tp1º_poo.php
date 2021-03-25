<?php

/*

    Para cada una de las siguientes clases implementar los métodos de acceso de cada una de las variables instancias, 
    el método _ _toString() (que permite visualizar los valores que poseen las variables instancia) y por último, 
    implementar la clase TestNombreClase para probar cada uno de los métodos implementados en cada clase.

        a) Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, /

        b) Diseñar e implementar la clase Reloj que simule el comportamiento de un cronómetro digital (con las
        características puesta_a_cero, incremento, etc.). 
        Cuando el contador llegue a 23:59:59 y reciba el mensaje de incremento deberá pasar a 00:00:00.

        c) Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y necesarios para almacenar el día, 
        el mes y el año, además de métodos que devuelvan un String con la fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000). 
        Implementar una función incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, 
        resultado de incrementar la fecha recibida por parámetro en el numero de días definido por el parámetro entero.

        Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de cuatrocientos, en cuyo caso si son bisiestos.
        Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia.

        d) Implementar una clase Login que almacene el nombreUsuario, contraseña, 
        frase que permite recordar la contraseña ingresada y las ultimas 4 contraseñas utilizadas. 
        Implementar un método que permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, 
        el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se encuentra dentro de las cuatro almacenadas). 
        Implementar el método recordar que dado el usuario, muestra la frase que permite recordar su contraseña. 
        
        
*/

class Calculadora {

    // Atributos
    private $n1;
    private $n2;

    // Constructores
    public function __construct ($n1, $n2){
        $this -> n1 = $n1;
        $this -> n2 = $n2; 
    }

    // Metodos
    public function getN1(){
        return $this -> n1;
    }

    public function getN2(){
        return $this -> n2;
    }

    public function sumar (){
        $suma = $this -> getN1() + $this -> getN2();
        return $suma;
    }

    public function restar (){
        $resta = $this -> getN1() - $this -> getN2();
        return $resta;
    }

    public function multiplicar (){
        $producto = $this -> getN1() * $this -> getN2();
        return $producto;
    }

    public function dividir (){
        $cociente = $this -> getN1() / $this -> getN2();
        return $cociente;
    }

    public function __toString(){
        return "La Suma entre ".$this -> getN1()." y ".$this -> getN2()." es: ".$this -> sumar()."\nLa Resta entre ".$this -> getN1()." y ".$this -> getN2()." es: ".$this -> restar()."\nEl Producto entre ".$this -> getN1()." y ".$this -> getN2()." es: ".$this -> multiplicar()."\nLa División entre ".$this -> getN1()." y ".$this -> getN2()." es: ".$this -> dividir();
    }

}


    $n1 = new Calculadora (0, 20);
    
    echo $n1 -> __toString();

