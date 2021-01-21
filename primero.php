<?php
$cadena = "abrkaabcdefghijjxxx";

function primero($cadena) {
    $longitud = strlen($cadena);
    echo "La cadena es: ".$cadena." cuenta con una longitud de: ". $longitud."<br>";
    
    $resultado = [];
 
    for($i=0;$i<$longitud;$i++){

        $arr_1 = [];
        $arr_1[] = $cadena[$i];


        for($r=$i+1;$r<$longitud;$r++){
            $arr_1[] = $cadena[$r];


            //echo die(var_dump($cadena[$r]));
            //echo die(var_dump($arr_1[0]));
            //array_unique para quitar duplicado

            $sin_duplicar = count(array_unique($arr_1));
            $conteo = count($arr_1);
            //echo die(var_dump($sin_duplicar));
            if($sin_duplicar!=$conteo){
                array_pop($arr_1);
                break;
            }
 
        }

        if ($conteo>count($resultado)){
        	$resultado=$arr_1;
        }

    }
    return count($resultado);
}

echo "Caracteres autenticos: ".primero($cadena);




?>