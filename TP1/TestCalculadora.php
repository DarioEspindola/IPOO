<?php

include_once "Calculadora.php";

echo "░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "░ ║ Favor de ingresar 2 números para operar entre sí.\n";
echo "░ ╚▬▬▬╗";
echo "\n░░░░░ ║ → 1º Valor: ";
$numero1 = trim(fgets(STDIN));
echo "░░░░░ ║ → 2º Valor: ";
$numero2 = trim(fgets(STDIN));
echo "░░░░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";

$calculo = new Calculadora($numero1, $numero2);

    do {

        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
        echo "░░░░░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬╗ ░░░░░\n";
        echo "░░░░░ ║        -------------------------------       ║ ░░░░░\n";
        echo "░░░░░ ║                  MENÚ FECHA                  ║ ░░░░░\n";
        echo "░░░░░ ║             SELECCIONE UNA OPCIÓN            ║ ░░░░░\n";
        echo "░░░░░ ║        -------------------------------       ║ ░░░░░\n";
        echo "╔▬▬▬╦▬╝                                              ╚▬╦▬▬▬╗\n";
        echo "║ 1 ║ ← RESULTADO SUMA               RESULTADO RESTA → ║ 2 ║\n";
        echo "╚▬▬▬╩╗                                                ╔╩▬▬▬╝\n";
        echo "╔▬▬▬╦╝                                                ╚╦▬▬▬╗\n";
        echo "║ 3 ║ ← RESULTADO PRODUCTO        RESULTADO DIVISION → ║ 4 ║\n";
        echo "╚▬▬▬╩╗                                                ╔╩▬▬▬╝\n";  
        echo "╔▬▬▬╦╝                                                ╚╦▬▬▬╗\n";
        echo "║ 5 ║ ← VER TODOS LOS RESULTADOS               SALIR → ║ 6 ║\n";
        echo "╚▬▬▬╩▬╗                                              ╔▬╩▬▬▬╝\n"; 
        echo "░░░░░ ║        -------------------------------       ║ ░░░░░\n";
        echo "░░░░░ ║                                              ║ ░░░░░\n";
        echo "░░░░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬╝ ░░░░░\n";
        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";          
        echo "░░╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
        echo "░░║ Seleccione una opción: ";
        $opcion = trim(fgets(STDIN));
        echo "░░╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";

            switch ($opcion) {
                case 1: echo "░░╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                        echo "░░║ El resultado de la SUMA es: ".$calculo -> sumar()."\n";
                        echo "░░╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                    break;
                case 2: echo "░░╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                        echo "░░║ El resultado de la RESTA es: ".$calculo -> restar()."\n";
                        echo "░░╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                    break;
                case 3: echo "░░╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                        echo "░░║ El resultado de la PRODUCTO es: ".$calculo -> multiplicar()."\n";
                        echo "░░╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                    break;
                case 4: echo "░░╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                        echo "░░║ El resultado de la DIVISIÓN es: ".$calculo -> dividir()."\n";
                        echo "░░╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                    break;                
                case 5: echo "░░╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                        echo "░░║ ".$calculo."\n";
                        echo "░░╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                    break;
            }

        } while ($opcion != 6);

?>