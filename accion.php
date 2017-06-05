<?php
// Declaración de Variables
$Nombre= $_POST['Nombre'];
$Cedula= $_POST['Cedula'];
$Nhoras= $_POST['CantidadH'];
$PrecioH= $_POST['CostoH'];
$PORCENTAJED= 11; //modificar aqui el porcentaje de descuento
//Si algun campo esta vacio retornamos al formulario
if ($Nhoras == 0 || $PrecioH == 0){
	header('location:index.html');
}
if ($Nombre == "" || $Cedula == ""){
	header('location:index.html');
}
//operación
$Totaln= $PrecioH * $Nhoras * 4;

$Porcentaje= $PORCENTAJED * $Totaln / 100;

$Total = $Totaln - $Porcentaje;
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Actividad #2 Aplicaciones de Internet 1</title>
</head>
<body>
	<h1>Calcular las horas de un profesor</h1>

	<div id="space">
		<h3>Nombre del Profesor</h3>
		<h4><?php echo $Nombre ?></h4>
		<h3>Número de Cédula</h3>
		<h4><?php echo $Cedula ?></h4>
		<h3>Número de Horas trabajadas</h3>
		<h4><?php echo $Nhoras ?></h4>
		<h3>Precio de cada hora</h3>
		<h4><?php echo $PrecioH ?></h4>
		<h3>Sueldo Base</h3>
		<h4><?php echo $Totaln ?></h4>
		<h3>Descuentos Realizados (11%)</h3>
		<h4><?php echo $Porcentaje ?></h4>
		<h3>Total a cobrar</h3>
		<h4><?php echo $Total ?></h4>
		<a href="index.html" id="return">Realizar otra consulta</a>
	</div>
	<h2 id="make">Realizado por: Gerardo Oropeza CI: 26.195.902</h2>
</body>
</html>