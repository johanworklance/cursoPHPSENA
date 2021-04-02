<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia 2 Johan Nieto</title>
</head>
<style>
table,caption,th,td{
    border:1px solid black;
}/*Aquí algo de CSS para los bordes*/
</style>

<body>
    <?php
    /* Nombres y Apellidos: Johan Alexis Nieto Pérez
     * Programa de Formación: Desarrollo Web con PHP
     * Nombre de la evidencia: evidencia2_JohanNieto.php
     */
        $arregloPersonas= [//Arreglo con los datos de las personas con sintaxis []
            ["nombre"=> "Pepito",
            "direccion"=> "Av. 15 # 01 -12",
            "telefono"=> "1524522",
            "nacimiento"=> "07/06/1998",
            "color"=> "Violeta"
            ],
            ["nombre"=> "Juan Perez",
            "direccion"=> "Cra. 45 # 45 -56",
            "telefono"=> "3456789",
            "nacimiento"=> "23/12/1997",
            "color"=> "Amarillo"
            ],
            ["nombre"=> "Pablo Manrique",
            "direccion"=> "Clle. 23 # 12 -19 Sur",
            "telefono"=> "3214567",
            "nacimiento"=> "12/10/1980",
            "color"=> "Verde"
            ],
            ["nombre"=> "Nancy Peña",
            "direccion"=> "Av. 34 # 16 -12",
            "telefono"=> "2135423",
            "nacimiento"=> "07/06/2000",
            "color"=> "Rojo"
            ]
        ];
        
        $colores=array(//Arreglo con los colores disponibles con sintaxis del constructor array
            "Verde"=>"Naturaleza y Tranquilidad",
            "Amarillo"=>"Riqueza y Alegría.",
            "Violeta"=>"Sabiduría y Creatividad."
        )
    ?>
    <table><!--Estructura HTML para la tabla-->
        <caption>Lista de Personas</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de Cumpleaños</th>
                <th>Color Favorito</th>
                <th>Significado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($arregloPersonas as  $persona){
                    /* Recorrido correspondiente al arreglo de las
                     * personas, así podremos "introducir" sus datos en las 
                     * celdas de la tabla uno por uno
                     */
                    
                    echo"<tr>";
                        echo"<td>";
                            echo $persona['nombre'];
                        echo"</td>";
                        echo"<td>";
                            echo $persona['direccion'];
                        echo"</td>";
                        echo"<td>";
                            echo $persona['telefono'];
                        echo"</td>";
                        echo"<td>";
                            echo $persona['nacimiento'];
                        echo"</td>";
                        echo"<td>";
                            echo $persona['color'];
                        echo"</td>";
                        echo"<td>";
                        $resultado="";
                        foreach($colores as $color => $significado){
                            /* Recorrido para comparar el color de cada persona
                             * con los del arreglo colores; si esta el color muestra
                             * su significado y usamos el comando 'break' para
                             * salir del for, de lo contrario al haber más datos
                             * la variable 'resultado' que guarda el significado
                             * sera reescrita por el mensaje del else, al haber
                             * más iteraciones que tienen los otros colores
                             */
                            if($persona['color']==$color){
                                $resultado="$significado";
                                break;
                            }else{
                                $resultado="No se encuentra el significado.";
                            }
                        }
                            echo $resultado;
                        echo"</td>";
                    echo"</tr>";
                }
            ?>
        </tbody>
    </table>
</body>

</html>