<?php

include_once "../modelo/conexion.php";

function medicosVer(){
	try {
		$conn = new Connection();
		$conn = $conn->connection();
		$sql = 'SELECT 
			    nombre, apellido, celular 
			    FROM medicos;';
		return $medicos = $conn->query($sql);
	} catch(PDOException $e) {
		return "Error: " . $e->getMessage();
	}
	$conn = null;
}
