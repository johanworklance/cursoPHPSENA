<?php

function retornarTabla($escenario=array(
    ['L','L','L','L','L'],
    ['L','L','L','L','L'],
    ['L','L','L','L','L'],
    ['L','L','L','L','L'],
    ['L','L','L','L','L'],
)){//la primera vez usaremos un valor por defecto con el array lleno de sillas libres


    $escenario= cambiarRegistros($escenario);
    //llamamos a cambiarRegistros para actualizar con los datos del formulario la tabla



    foreach($escenario as $indice=>$fila){
        $fila=implode(',',$fila);
        $escenario[$indice]=$fila;
    }//transformamos cada array con las sillas en un string

    $escenario=implode(',',$escenario);
    //ahora el array contenedor de todo, lo convertiremos tambien en string
    return $escenario;//este retorno lo recibiar la variable cadena en el index
}



function cambiarRegistros($escenario){

    if(isset($_POST['fila'])){
        /* la primera vez no habra datos del formulario, asi que simplemente
         * retornara la tabla original
         */

        $numFila= intval($_POST['fila']);
        $numSilla= intval($_POST['puesto']);
        $accion= $_POST['acciones'];
        //las variables del formulario, la fila, silla y que acción a realizar

            switch($accion){
                /*este switch es fácil de leer, evaluaremos la letra correspondiente a la acción 
                 * a realizar, si por ejemplo reservamos, sustituiremos el valor de 'L' de la silla
                 * correspondiente por la letra 'R', los 'echos' son bastante descriptivos de la
                 * validación a realizar
                 */
                case'R':
                    if($escenario[$numFila-1][$numSilla-1]=='V'){
                        
                        echo "<p>Proceso invalido, la silla $numSilla en la fila
                        $numFila ya esta <b>vendida</b>, no se puede <b>reservar</b>.</p>";
                    }elseif($escenario[$numFila-1][$numSilla-1]=='R'){
                        echo "<p>Proceso invalido, la silla $numSilla en la fila
                        $numFila ya esta <b>reservada</b>, no se puede <b>reservar</b> de nuevo.</p>";
                    }else{
                        $escenario[$numFila-1][$numSilla-1]=$accion;
                        echo "<p>¡<b>Reserva</b> exitosa de la silla $numSilla en la fila
                        $numFila!</hp";
                    }
                break;
                case'V':
                    if($escenario[$numFila-1][$numSilla-1]=='V'){
                        echo "<p>Proceso invalido, la silla $numSilla en la fila
                        $numFila ya esta <b>vendida</b>, no se puede <b>vender</b> de nuevo.</p>";
                    }else{
                        $escenario[$numFila-1][$numSilla-1]=$accion;
                        echo "<p>¡<b>Venta</b> exitosa de la silla $numSilla en la fila
                        $numFila!</p>";
                    }
                break;
                case'L':
                    if($escenario[$numFila-1][$numSilla-1]=='V'){
                        echo "<p>Proceso invalido, la silla $numSilla en la fila
                        $numFila ya esta <b>vendida</b>, no se puede <b>liberar</b>.</p>";
                    }elseif($escenario[$numFila-1][$numSilla-1]=='L'){
                    echo "<p>Proceso invalido, la silla $numSilla en la fila
                    $numFila ya esta <b>liberada</b>, no se puede <b>liberar</b> de nuevo.</p>";
                    }else{
                        $escenario[$numFila-1][$numSilla-1]=$accion;
                        echo "<p>¡<b>Liberación</b> exitosa de la silla $numSilla en la fila
                        $numFila!</p>";
                    }
                    break;
                }
     }
     return $escenario;//si es primera vez, o ya se uso el formulario mandaremos el array 
}

