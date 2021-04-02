<?php

/*
    Para cada una de las siguientes clases implementar los métodos de acceso de cada una de las variables instancias, 
    el método _ _toString() (que permite visualizar los valores que poseen las variables instancia) y por último, 
    implementar la clase TestNombreClase para probar cada uno de los métodos implementados en cada clase.

    c) Diseñar e implementar la clase Fecha.
    La clase deberá disponer de los atributos mínimos y necesarios para almacenar el día, el mes y el año, además de métodos que devuelvan un String con la fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000). 
    Implementar una función incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado de incrementar la fecha recibida por parámetro en el número de días definido por el parámetro entero.

        Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de cuatrocientos, en cuyo caso si son bisiestos.
        Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia.

*/


class Fecha {

    // ATRIBUTOS
    private $dia;   
    private $mes;
    private $anio;

    // MÉTODOS

    // 1. Constructor

        public function __construct($dia, $mes, $anio){
        // Se especifíca la estructura del Objeto.
            $this -> dia = $dia;
            $this -> mes = $mes;
            $this -> anio = $anio;
        }
    
    // 2. Observadores **Métodos que nos muestran los valores (instancia) de cada atributo.**

        public function getDia(){
		    return $this -> dia;
	    }

        public function getMes(){
		    return $this -> mes;
	    }

        public function getAnio(){
		    return $this -> anio;
	    }

    // 3. Modificadores **Métodos que modifican los valores (instancia) de cada atributo.**

	    public function setDia($dia){
		    $this -> dia = $dia;
	    }

	    public function setMes($mes){
		    $this -> mes = $mes;
	    }
	
	    public function setAnio($anio){
		    $this -> anio = $anio;
	    }

    // 4. Propios **Métodos propios de la case que realizan operaciones específicas.**

        public function incremento($unEntero, $unaFecha){

            $diaN = $unaFecha -> getDia();
            $mesN = $unaFecha -> getMes();
            $anioN = $unaFecha -> getAnio();

            while ($unEntero > 0){
                
                if ($diaN < $this -> obtener_total_dias ($mesN, $anioN)){
                    $diaN = $diaN + 1;
                } 
                else {
                    if ($mesN == 12){
                        $anioN = $anioN + 1;
                        $mesN = 1;
                    } 
                    else {
                        $mesN = $mesN + 1;
                    }
                    $diaN = 1;
                }

                $unEntero = $unEntero - 1;
            }

            $unaFecha -> setDia($diaN);
            $unaFecha -> setMes($mesN);
            $unaFecha -> setAnio($anioN);
            return $unaFecha;
        }

        public function obtener_total_dias($unMes, $unAnio){
           
            if ($unMes == 4 || $unMes == 6 || $unMes == 9 || $unMes == 11){
                $diasTotales = 30;
            } 
            else {
                if ($unMes == 2 && $this -> año_bisiesto($unAnio)) {
                    $diasTotales = 29; 
                } 
                else {    
                    if ($unMes == 2 && !$this -> año_bisiesto($unAnio)){
                        $diasTotales = 28;
                    } 
                    else {
                        $diasTotales = 31;
                    }
                }
            }

            return $diasTotales;        
        }

        public function año_bisiesto ($anioN){

            $esBisiesto = false;
            
            if (($anioN % 4 == 0) || ($anioN % 400 == 0)){   
                $esBisiesto = true;
            }

            return $esBisiesto;
        }

        public function fecha_abreviada (){

            $conocerDia = $this -> getDia();
            $conocerMes = $this -> getMes();

            if ($conocerDia < 10) {
                $conocerDia = "0".$this -> getDia();
            }

            if ($this -> getMes() < 10){
                $conocerMes = "0" . $this -> getMes();
            }

            $fechaAbr = $conocerDia."/".$conocerMes."/". $this -> getAnio();
            return $fechaAbr;
        }

        public function fecha_extendida (){
           
            $fechaExt = $this -> getDia()." de ". $this -> obtener_mes($this -> getMes()) ." de ". $this -> getAnio();
            return $fechaExt;    
        }

        public function obtener_mes ($mes){
            
            switch ($mes){
                case 1: $conocerMes = "Enero";
                    break;
                case 2: $conocerMes = "Febrero";
                    break;
                case 3: $conocerMes = "Marzo";
                    break;
                case 4: $conocerMes = "Abril";
                    break;
                case 5: $conocerMes = "Mayo";
                    break;
                case 6: $conocerMes = "Junio";
                    break;
                case 7: $conocerMes = "Julio";
                    break;
                case 8: $conocerMes = "Agosto";
                    break;
                case 9: $conocerMes = "Septiembre";
                    break;
                case 10: $conocerMes = "Octubre";
                    break;
                case 11: $conocerMes = "Noviembre";
                    break;
                case 12: $conocerMes = "Diciembre";
                    break;
                default: $conocerMes = "0";
                    break;
            }

            return $conocerMes;
        }

        public function __toString(){
            
            return "Fecha (Abreviada):\n░░ ║\n░░ ║\t ►► " .$this -> fecha_abreviada() ."\n░░ ║ Fecha (Extendida):\n░░ ║\n░░ ║\t ►► ".$this -> fecha_extendida();
        }


}

?>