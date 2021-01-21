

<!DOCTYPE html>
<html>
<head>
	<title>Segundo problema</title>
</head>
<body>


	<form method="post">
		
		Numero que quiere buscar <input type="number" name="numero">
		<input type="submit" name="enviar">
	</form>

</body>
</html>

<?php

//1, 2, 2, 2, 2, 3, 4, 7, 8, 8
//1,2,3,4,4,5,6,7,8,8,8,9
// 1,3,3,5,7,8,9,9,9,15

if($_SERVER['REQUEST_METHOD']=='POST'){

$numero = $_POST['numero'];





echo "Numero que se busca: ".$numero."<br>";
$arreglo= array(1,3,3,5,7,8,9,9,9,15);
echo "El arreglo es: ".implode(",",$arreglo)."<br>";
$longitud= count($arreglo);
echo "La longitud es: ".$longitud."<br>";




$primero = -1; 
$ultimo=-1;

for($i=0;$i<$longitud;$i++){

	if($numero != $arreglo[$i])
		continue;

	if($primero==-1)
		$primero=$i;
		$ultimo =$i;
	}

	if ($primero!=-1) {
		echo "Se encuentra entre ".$primero." , ".$ultimo;
	}else{
		echo "No se encuentra en ningun lado [-1,-1]";
	}




}


?>


