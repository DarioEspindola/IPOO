<?php

class Login {

    private $nombreUsuario;
    private $contraseña;
    private $frase;
    private $colContraseñas = array ();

    public function __construct ($nombreUsuario, $contraseña, $frase, $colContraseñas){

        $this -> nombreUsuario = $nombreUsuario;
        $this -> contraseña = $contraseña;
        $this -> frase = $frase;
        
        $colContraseñas[0] = array ("contraseña" => $contraseña , "recordatorio" => $frase);
        $colContraseñas[1] = array("contraseña" => "" , "recordatorio" => "");
        $colContraseñas[2] = array("contraseña" => "" , "recordatorio" => "");
        $colContraseñas[3] = array("contraseña" => "" , "recordatorio" => "");
        
        $this -> colContraseñas = $colContraseñas;
    }

    // OBSERVADORES.


    public function getNombreUsuario(){
		return $this -> nombreUsuario;
	}

    public function getContraseña(){
		return $this -> contraseña;
	}

    public function getFrase(){
		return $this -> frase;
	}

    public function getColContraseñas(){
		return $this-> colContraseñas;
	}

    // MODIFICADORES.

	public function setNombreUsuario($nombreUsuario){
		$this -> nombreUsuario = $nombreUsuario;
	}

	public function setContraseña($contraseña){
		$this -> contraseña = $contraseña;
	}

	public function setRecordatorio($frase){
		$this -> frase = $frase;
	}

	public function setAlmacenContraseñas($colContraseñas){
        $this -> colContraseñas = $colContraseñas;
	}

    // PROPIOS DE LA CLASE

    public function validarContraseña ($ingresoContraseña){
        
        $logueo = false;

        if ($ingresoContraseña == $this -> getContraseña()){
            $logueo = true;
        }

        return $logueo;
    }

    public function cambiarContraseña ($nuevaContraseña, $nuevaFrase){

        $i = 0;
        $existe = false;
        $cantClaves = count($colContraseñas);
        $colContraseñas = $this -> getColContraseñas();
        $salvado = false;

        do {//Verifica si la contraseña a guardar existe dentro de la coleccion.
            
            if ($nuevaContraseña == $colContraseñas[$i]["contraseña"]){
                $existe = true;
            } else {
                $i++;
            }

        } while ($existe != true && $i < $cantClaves);

        if ($existe != false){
            cargarPassword($nuevaContraseña, $nuevaFrase);
            $salvado = true; 
        }

        return $salvado;
    }

    public function cargarPassword ($nuevaContraseña, $nuevaFrase){

        $colContraseñas = $this -> getColContraseñas(); // Obtengo la colecccion de Claves y Recordatorios;
        $cantClaves = count($colContraseñas); 
        $i = 0;
        $continuar = true;

        while ($continuar && $i < $cantClaves){

            if ($colContraseñas[$i]["contraseña"] == ""){

                $colContraseñas[$i+1] = $colContraseñas[$i];
                $colContraseñas[$i]["contraseña"] = $nuevaContraseña;
                $colContraseñas[$i]["recordatorio"] = $nuevaFrase;
            
            } else {
                $i++;
            }
        }
// Tenes que ordenar el "arreglo" de claves para que te vaya borrando la primer clave ingresada y almacenando la ultima

        if ($i == 4){
            
            for ($i = 3; $i > 0; $i--){
               $colContraseñas[$i] = $colContraseñas[$i-1];
            }

            $colContraseñas[0]["contraseña"] = $nuevaContraseña;
            $colContraseñas[0]["recordatorio"] = $nuevaFrase;
        }

        $this -> setAlmacenContraseñas($colContraseñas);
    }


    public function recordarContraseña ($nuevaContraseña){

        $recordarFrase = "";
        if (validarContraseña($nuevaContraseña)){
            $colContraseñas = $this -> getColContraseñas();
            $cantContraseñas = count($colContraseñas);
            $i = 0;

            do {
            
                if ($nuevaContraseña == $colContraseñas[$i]["contraseña"]){
                    $recordarFrase = $colContraseñas[$i]["recordatorio"];
                    $existe = true;
                } else {
                    $i++;
                }
    
            } while ($existe != true && $i < $cantClaves);
        }
        
        return $recordarFrase;
    }


}
    $nuevaColContra[0] = array("contraseña" => "" , "recordatorio" => "");
    $nuevaColContra[1] = array("contraseña" => "" , "recordatorio" => "");
    $nuevaColContra[2] = array("contraseña" => "" , "recordatorio" => "");
    $nuevaColContra[3] = array("contraseña" => "" , "recordatorio" => "");

$prueba = new Login ("Dario G. Espindola", "A", "1ª Vocal", $nuevaColContra);

$unaPass = "E";
$unRecord = "2ª Vocal";

$prueba -> cargarPassword($unaPass, $unRecord);

$unaPass = "I";
$unRecord = "3ª Vocal";

$prueba -> cargarPassword($unaPass, $unRecord);

$unaPass = "O";
$unRecord = "4ª Vocal";

$prueba -> cargarPassword($unaPass, $unRecord);

print_r($prueba);

echo "\n\n\n";


$unaPass = "U";
$unRecord = "5ª Vocal";

$prueba -> cargarPassword($unaPass, $unRecord);

print_r ($prueba);



//print_r($prueba);


/*

if ($prueba -> validarContraseña("Ingreso02")){
    echo "Password Correcta";
}else {
    echo "Ta machao hijo";
}

$unaPass = "Masterchef";
$unRecord = "Programa de TV de Cocina";

$prueba -> cargarPassword($unaPass, $unRecord);

print_r ($prueba);
*/
