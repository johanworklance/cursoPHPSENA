
<?php
    function dibujarTabla($escenario){
        //recibiremos el string que llega desde el index, que guardamos en cadena
        
       $escenario= explode(',',$escenario);
       
       $escenario=array_chunk($escenario,5);
       //mismo proceso visto en el index, de string a array, y división de este último
      

        foreach($escenario as $numFila=>$fila){
            //usamos un doble for, el primero para dibujar la numeración de cada columna
            $numFila++;
            echo "<tr>
                      <th>$numFila</th>";

                      foreach($fila as $silla){
                          //y el segundo para cada silla de cada fila
                          echo "<td>$silla</td>";
                      }
            echo "</tr>";
        }
    }

