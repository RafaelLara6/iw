<?php 

$arreglo= array(4, 3, 2, 4, 1, 3, 2);
$longitud= count($arreglo);
echo "<br>"."La longitud del arreglo es: ".$longitud."<br>";

function tercer($arreglo,$longitud) 
{ 
	for ($i = 0; $i < $longitud; $i++){

	
		$compara; 
		for ($compara = 0; $compara< $longitud; $compara++){

			if ($i != $compara && $arreglo[$i] == $arreglo[$compara]){
				break;
			} 
				 
		}
		if ($compara == $longitud){ 
			return "El numero que no se repite es: ".$arreglo[$i]. " dentro del arreglo ".implode(",",$arreglo); 
		}
	} 
	return "Ningun numero es unico "; 




} 

	echo tercer($arreglo,$longitud); 

?> 







