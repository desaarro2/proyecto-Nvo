<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
</html>
<?php
	header("Content-Type: text/html; charset=utf-8");

	$Categoria = $_GET["Categoria"];

	include("conex.inc");
   
    $respuesta = "SELECT * FROM catalogo WHERE Categoria='$Categoria'";
	
	$respuesta = mysqli_query($conexion,$respuesta);

	echo "<table border='1' style='background-color:White; width: 800px';>";
	echo "<tr>
		<th><font face='Arial' size='3'><CENTER>Nombre</font>
		<th><font face='Arial' size='3'><CENTER>Precio</font>
		<th><font face='Arial' size='3'><CENTER>Stock</font>
		<tr/>";
	while($fila=mysqli_fetch_object($respuesta)) {
		echo "<tr>
		<td><font face='Arial' size='3'><CENTER>$fila->Nombre</font>
		<td><font face='Arial' size='3'><CENTER>$fila->Precio</font>
		<td><font face='Arial' size='3'><CENTER>$fila->Stock</font>
		<tr/>";
		}
	echo "</table>"
?>