<html>
<head>
<title>practica 11 php</title>
</head>
<body>
<?php
	//hecor humberto hernandez nataren
	//Usando variables en PHP
	echo"<h1>variables</h1>";
	$nombre='hector humberto';//tipo de cadena
	$apellidos='hernandez nataren';
	$edad=22;
	$salario=12345.50;
	$fechaNacimiento='06/08/1994';
	$estatus=true;
	echo $nombre.'<br/>';
	echo $apellidos.'<br/>';
	echo 'Nombre Completo:'.$nombre.' '.$apellidos.'<br/>';
	echo 'TU EDAD ES: '.$edad.'<br/>';
	echo 'TU SALARIO ES:'.$salario;
?>
	<h1>OPERADORES ARITMETICOS</h1>
<?php
		$a=5;
		$b=3;
		$suma=$a+$b;
		$resta=$a-$b;
		$multiplica=$a*$b;
		$divide=$a/$b;
		echo 'La suma de '.$a.'+'.$b.'='.$suma.'<br/>';
		echo 'La resta es '.$a.'-'.$b.'='.$resta.'<br/>';
		echo 'La multiplicacion es '.$a.'*'.$b.'='.$multiplica.'<br/>';
		echo 'La division es '.$a.'/'.$b.'='.$divide.'<br/>';
?>
</body>
</html>