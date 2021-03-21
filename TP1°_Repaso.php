<?php

/*

        ●   Trabajo Práctico N° 1 - Repaso
        ●   Espindola Dario G.
        ●   FAI-1220
        ●   Introducción a la Programación Orientada a Objetos
        ●   Tecnicatura Universitaria en Desarrollo Web


*/
 
/** ----- FUNCIÓN N° 1 (obtenerPromedio) ----------------------------------------------------------------------------------------------
* Módulo encargado de generar una Colección de Vinos.
* Recibe por parámetro un Arreglo multidimensional.
* Este arreglo multidimensional obtiene el precio promedio por unidad, respecto a cada variedad de vino.
* El valor promedio se obtiene al multiplicar todas las botellas de una cosecha por su precio.
* Luego se suman los valores totales de cada cosecha y se dividen por la cantidad total de Botellas de cada vino particular.
* @return array
*/      

    function obtenerPromedio ($coleccionVinos){
    # INT $totalBotellas, $precioTotal, $cantVariedades, $i, $j, $precioCosecha, $cantBotellas;
    # FLOAT $promedio

        $totalBotellas = 0;
        $precioTotal = 0;
        $cantVariedades = count($coleccionVinos);   // Variable que contiene la logitud del array $coleccionVinos (Cantidad Total de Variedades).
        $nuevaColVinos = array();

        for ($i = 0; $i < $cantVariedades; $i++){                   
            // Estructura Repetitiva que recorre de manera exhaustiva el array $coleccionVinos.

            if ($i == 0){
                $cantBotellas = count($coleccionVinos["malbec"]);   // Variable que contiene la logitud del array $malbec (Cantidad Total de vinos "Malbec").

                    for ($j = 0; $j < $cantBotellas; $j++){                   
                        // Estructura Repetitiva que recorre de manera exhaustiva el array $malbec.
                        $totalBotellas = $totalBotellas + $coleccionVinos["malbec"][$j]["botellas"];   // Obtengo la cantidad Total de Botellas de la colección.
                        $precioCosecha = $coleccionVinos["malbec"][$j]["botellas"] * $coleccionVinos["malbec"][$j]["precio"];   // Obtengo el valor del Precio de cada posición del Arreglo "Malbec".
                        $precioTotal = $precioTotal + $precioCosecha;   // Obtengo el valor del Precio de todas las posiciones del Arreglo.
                    }

                $promedio = $precioTotal/$totalBotellas;   // Obtengo el Promedio total de botellas "Malbec". 
                $nuevaColVinos [$i] = array ("variedad" => "Malbec", "valorPromedio" => $promedio);   //Almaceno los datos en la posición "0" del nuevo array $nuevaColVinos.    
            
            } elseif ($i == 1){
                $cantBotellas = count($coleccionVinos["merlot"]);   // Variable que contiene la logitud del array $merlot (Cantidad Total de vinos "Merlot").

                    for ($j = 0; $j < $cantBotellas; $j++){                   
                        // Variable que contiene la logitud del array $merlot (Cantidad Total de vinos "Merlot").
                        $totalBotellas = $totalBotellas + $coleccionVinos["merlot"][$j]["botellas"];        // Obtengo la cantidad Total de Botellas de la colección.
                        $precioCosecha = $coleccionVinos["merlot"][$j]["botellas"] * $coleccionVinos["merlot"][$j]["precio"];        // Obtengo el valor del Precio de cada posición del Arreglo "Merlot".
                        $precioTotal = $precioTotal + $precioCosecha;       // Obtengo el valor del Precio de todas las posiciones del Arreglo.
                    }

                $promedio = $precioTotal/$totalBotellas;       // Obtengo el Promedio total de botellas "Merlot".
                $nuevaColVinos [$i] = array ("variedad" => "Merlot", "valorPromedio" => $promedio);       //Almaceno los datos en la posición "1" del nuevo array $nuevaColVinos.

            } else {
                $cantBotellas = count($coleccionVinos["cabernet"]);       // Variable que contiene la logitud del array $cabernet (Cantidad Total de vinos "Cabernet Savignon").

                    for ($j = 0; $j < $cantBotellas; $j++){
                        // Variable que contiene la logitud del array $cabernet(Cantidad Total de vinos "Cabernet Savignon").
                        $totalBotellas = $totalBotellas + $coleccionVinos["cabernet"][$j]["botellas"];       // Obtengo la cantidad Total de Botellas de la colección.
                        $precioCosecha = $coleccionVinos["cabernet"][$j]["botellas"] * $coleccionVinos["cabernet"][$j]["precio"];       // Obtengo el valor del Precio de cada posición del Arreglo "Cabernet Savignon".    
                        $precioTotal = $precioTotal + $precioCosecha;       // Obtengo el valor del Precio de todas las posiciones del Arreglo.
		    }

                $promedio = $precioTotal/$totalBotellas;       // Obtengo el Promedio total de botellas "Cabernet Savignon".
                $nuevaColVinos [$i] = array ("variedad" => "Cabernet Savignon", "valorPromedio" => $promedio);       //Almaceno los datos en la posición "2" del nuevo array $nuevaColVinos.

            }
        }
            
        return $nuevaColVinos;       // Retorno la nueva colección a la funcion main();
    }


    /** ----- FUNCIÓN MAIN (Programa Principal) -----------------------------------------------------------------------------------------------------
* Módulo encargado de generar una Colección de Palabras al principio del programa, para poder comenzar a jugar al AHORCADO.
* Este arreglo multidimensional contiene la información de cada palabra disponible para jugar: palabra, pista y puntos
* obtenidos al descubrirla. 
* No utiliza parámetros de entrada. Retorna el arreglo de palabras.   
* @return array
*/

    $malbec = array();   // Arreglo multidimensional de Vinos "MALBEC" 
    $malbec[0] = array ("botellas" => 3, "produccion" => "1990", "precio" => 500);
    $malbec[1] = array ("botellas" => 2, "produccion" => "1995", "precio" => 280);
    $malbec[2] = array ("botellas" => 4, "produccion" => "1999", "precio" => 700);

    $merlot = array();   // Arreglo multidimensional de Vinos "MERLOT" 
    $merlot[0] = array ("botellas" => 1, "produccion" => "1958", "precio" => 850);
    $merlot[1] = array ("botellas" => 5, "produccion" => "1998", "precio" => 500);
    $merlot[2] = array ("botellas" => 7, "produccion" => "2019", "precio" => 975);

    $cabernetSavignon = array();   // Arreglo multidimensional de Vinos "CABERNET SAVIGNON" 
    $cabernetSavignon[0] = array ("botellas" => 3, "produccion" => "2013", "precio" => 350);
    $cabernetSavignon[1] = array ("botellas" => 9, "produccion" => "2020", "precio" => 420);
    $cabernetSavignon[2] = array ("botellas" => 1, "produccion" => "1978", "precio" => 800);

    $coleccionVinos = array ();   // Arreglo multidimensional de colección de "VINOS"     
    $coleccionVinos["malbec"] = $malbec;
    $coleccionVinos["merlot"] = $merlot;
    $coleccionVinos["cabernet"] = $cabernetSavignon;

    $vinoteca = array ();   
    $vinoteca = obtenerPromedio($coleccionVinos);   // Llamo a la función $obtenerPromedio y almaceno el array que dicha funcion me retorna, para luego mostrar los resultados por pantalla.

    
    echo "┌─────────────────────────────────────────────────────────────────────────────────────────────────────────\n";
    echo "<br>";
    echo "│─● El promedio del valor de cada vino MALBEC es $".$vinoteca[0]["valorPromedio"]." por Unidad.\n";
    echo "<br>";
    echo "│─● El promedio del valor de cada vino MERLOT es $".$vinoteca[1]["valorPromedio"]." por Unidad.\n";
    echo "<br>";
    echo "│─● El promedio del valor de cada vino CABERNET SAVIGNON es $".$vinoteca[2]["valorPromedio"]." por Unidad.\n";
    echo "└─────────────────────────────────────────────────────────────────────────────────────────────────────────\n"; 
