<?php 

include_once "Fecha.php";

    $unaFecha = new Fecha(11, 11, 1111);

    do{
        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
        echo "░░░░░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬╗ ░░░░░\n";
        echo "░░░░░ ║      -------------------------------     ║ ░░░░░\n";
        echo "░░░░░ ║                MENÚ FECHA                ║ ░░░░░\n";
        echo "░░░░░ ║           SELECCIONE UNA OPCIÓN          ║ ░░░░░\n";
        echo "░░░░░ ║      -------------------------------     ║ ░░░░░\n";
        echo "╔▬▬▬╦▬╝                                          ╚▬╦▬▬▬╗\n";
        echo "║ 1 ║ ← CARGAR FECHA               MOSTRAR FECHA → ║ 2 ║\n";
        echo "╚▬▬▬╩╗                                            ╔╩▬▬▬╝\n";
        echo "╔▬▬▬╦╝                                            ╚╦▬▬▬╗\n";
        echo "║ 3 ║ ← MODIFICAR DÍA              MODIFICAR MES → ║ 4 ║\n";
        echo "╚▬▬▬╩╗                                            ╔╩▬▬▬╝\n";  
        echo "╔▬▬▬╦╝                                            ╚╦▬▬▬╗\n";
        echo "║ 5 ║ ← MODIFICAR AÑO             CALCULAR FECHA → ║ 6 ║\n";
        echo "╚▬▬▬╩╗                                            ╔╩▬▬▬╝\n";
        echo "╔▬▬▬╦╝                                            ║ ░░░░\n";
        echo "║ 7 ║ ← SALIR                                     ║ ░░░░\n";
        echo "╚▬▬▬╩▬╗                                           ║ ░░░░\n"; 
        echo "░░░░░ ║      -------------------------------      ║ ░░░░\n";
        echo "░░░░░ ║                                           ║ ░░░░\n";
        echo "░░░░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬╝ ░░░░\n";
        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";         
        echo "░░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
        echo "░░ ║ Seleccione una opción: ";
        $opcion = trim(fgets(STDIN));
        echo "░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
        echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";

  
    switch ($opcion) {

        case 1: echo "░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                echo "░ ║ Para cargar una Fecha ingrese los siguientes datos: \n";
                echo "░ ╚▬▬▬╗";
                echo "\n░░░░░ ║ → DÍA: ";
                $unDia = trim(fgets(STDIN));
                echo "░░░░░ ║ → MES: ";
                $unMes = trim(fgets(STDIN));
                echo "░░░░░ ║ → AÑO: ";
                $unAnio = trim(fgets(STDIN));
                echo "░░░░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                $unaFecha = new Fecha($unDia, $unMes, $unAnio);
            break;

        case 2: echo "░░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                echo "░░ ║ ".$unaFecha."\n";
                echo "░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
            break;
        
        case 3: echo "░░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                echo "░░ ║ Ingrese el DÍA: ";
                $diaModificado = trim(fgets(STDIN));
                echo "░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                $unaFecha -> setDia($diaModificado);
            break;

        case 4: echo "░░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                echo "░░ ║ Ingrese el MES: ";
                $mesModificado = trim(fgets(STDIN));
                echo "░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                $unaFecha -> setMes($mesModificado);
        break; 

        case 5: echo "░░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n"; 
                echo "░░ ║ Ingrese el AÑO: ";
                $anioModificado = trim(fgets(STDIN));
                echo "░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                $unaFecha -> setAnio($anioModificado);
            break;

        case 6: echo "░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                echo "░ ║ Para cargar una Fecha ingrese los siguientes datos: \n";
                echo "░ ╚▬▬▬╗";
                echo "\n░░░░░ ║ → DÍA: ";
                $otroDia = trim(fgets(STDIN));
                echo "░░░░░ ║ → MES: ";
                $otroMes = trim(fgets(STDIN));
                echo "░░░░░ ║ → AÑO: ";
                $otroAnio = trim(fgets(STDIN));
                echo "░░░░░ ║ → DÍAS A CALCULAR: ";
                $unEntero = trim(fgets(STDIN));
                echo "░░░░░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                $otraFecha = new Fecha($otroDia, $otroMes, $otroAnio);
                $otraFecha -> incremento($unEntero, $otraFecha);
                echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
                echo "░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                echo "░ ║ SI A LA FECHA " .$otraFecha." LE SUMAMOS ". $unEntero ." DíAS\n";
                echo "░ ║ OBTENEMOS LA FECHA:\n";  
                echo "░ ║ ".$otraFecha."\n";
                echo "░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
            break;

        case 7: echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
                echo "░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                echo "░ ║ ►► FIN PROGRAMA ◄◄ \n";
                echo "░ ╚▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
            break;
        
        default: echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░\n";
                 echo "░ ╔▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
                 echo "░ ║ Opción ingresada no válida";     
            break;
        }

    } while ($opcion < 7);
