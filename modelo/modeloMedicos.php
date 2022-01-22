<?php

include_once "../modelo/conexion.php";

class ModeloMedicos{
	
    function __construct() {
		$conn = new Connection();
		$this->conn = $conn->connection();
	}

	function insertUser($row){
		try {
			$conn = $this->conn;
			
			$nombre = $row["nombre"];
			$apellido = $row["apellido"];
			$celular = $row["celular"];
			
			$sql = "INSERT INTO medicos (
					nombre, apellido, celular	
					) VALUES (
					:nombre, :apellido, :celular
					)";
					
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':nombre', $this->nombre);
			$stmt->bindParam(':apellido', $this->apellido);
			$stmt->bindParam(':celular', $this->celular);
			
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->celular = $celular;
			
			$stmt->execute();
			return 1;
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	
	function modificar($row){
		try {
			$conn = $this->conn;
			
			$id_medico = $row["id_medico"];
			$nombre = $row["nombre"];
			$apellido = $row["apellido"];
			$celular = $row["celular"];
			
			$sql = "UPDATE medicos SET 
					nombre=:nombre,
					apellido=:apellido,
					celular=:celular 
					WHERE id_medico=:id_medico";
					
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id_medico', $this->id_medico);
			$stmt->bindParam(':nombre', $this->nombre);
			$stmt->bindParam(':apellido', $this->apellido);
			$stmt->bindParam(':celular', $this->celular);
			
			$this->id_medico = $id_medico;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->celular = $celular;
			
			$stmt->execute();
			return 1;
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	
	function eliminar($row){
		try {
			$conn = $this->conn;
			
			$id_medico = $row["id_medico"];
			
			$sql = "DELETE FROM medicos
			        WHERE id_medico=:id_medico";
					
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id_medico', $this->id_medico);
			
			$this->id_medico = $id_medico;
			
			$stmt->execute();
			return 1;
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	function closeconnection(){
		$this->conn = null;
	}
}
