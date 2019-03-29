<?php
	include("conexion.php");
	
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	$matricula = $_POST['matricula'];
	$carrera = $_POST['carrera'];
	$query = "insert into registro(nombre,apellidop,apellidom,matricula,carrera)values('$nombre','$apellidop','$apellidom','$matricula','$carrera')";
	$resultado = $conexion->query($query);
	
	if($resultado){
		include("login.php");
	}else{
		echo "fallo";
	}
?>	
	