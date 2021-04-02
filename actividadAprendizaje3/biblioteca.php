<?php
    /* Nombres y Apellidos: Johan Alexis Nieto Pérez
     * Programa de Formación: Desarrollo Web con PHP
     * Nombre de la evidencia: evidencia3_JohanNieto.rar
     */

    function operaciones($num1,$num2,$operacion="suma"){
        /*La función operaciones recibira del archivo index 3 parámetros, pero como vemos el
         * el último tiene un valor por defecto, así que se podría omitir
         */
        if($operacion=="suma"){//si se envia 'suma' o no se envía el tercer parametro 
            return  "La suma de $num1 + $num2 es: ".($num1+$num2);//retornamos un mensaje junto a la operación concatenada
        }elseif($operacion=="resta"){//aquí la resta, y así para las demás operaciones
            return  "La resta de $num1 - $num2 es: ".($num1-$num2);
        }
        elseif($operacion=="multi"){
            return  "La multiplicación de $num1 x $num2 es: ".($num1*$num2);
        }
        elseif($operacion=="divi"){
            return  "La división de $num1 / $num2 es: ".($num1/$num2);
        }else{
            return "Error: No se ha enviado un parametro correcto";//de enviarse un tercer parámetro que no corresponda a las operaciones, se enviara este mensaje de error
        }
    }