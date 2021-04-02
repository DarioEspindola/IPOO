Ejercicio Nº10.

Incisos:


    a) Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, /.

    b) Diseñar e implementar la clase Reloj que simule el comportamiento de un cronómetro digital (con las
    características puesta_a_cero, incremento, etc.). 
    Cuando el contador llegue a 23:59:59 y reciba el mensaje de incremento deberá pasar a 00:00:00.

    c) Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y necesarios para almacenar el día, 
    el mes y el año, además de métodos que devuelvan un String con la fecha en forma abreviada (16/02/2000)
    y extendida (16 de Febrero de 2000) . 
    Implementar una función incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, 
    resultado de incrementar la fecha recibida por parámetro en el número de días definido por el parámetro entero.

        * Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, 
        salvo que lo sean de cuatrocientos, en cuyo caso si son bisiestos.
        * Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia.

    d) Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite recordar la
    contraseña ingresada y las ultimas 4 contraseñas utilizadas. 
    Implementar un método que permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, 
    el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente 
    (es decir no se encuentra dentro de las cuatro almacenadas). 
    Implementar el método recordar que dado el usuario, muestra la frase que permite recordar su contraseña.
