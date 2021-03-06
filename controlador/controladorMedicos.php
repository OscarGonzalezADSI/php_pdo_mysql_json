<?php
include_once "../modelo/modeloMedicos.php";
include_once "../modelo/medicosVer.php";

Class ControladorMedicos {
	
    function __construct() {
		$this->accion = new ModeloMedicos();
	}
	
	function insertarUsuario($row){
		$this->accion->insertUser($row);
	}
	
	function modificarUsuario($row){
		$this->accion->modificar($row);
	}
	
	function eliminarUsuario($row){
		$this->accion->eliminar($row);
	}
	
	function recibirData(){
		$data = [];
		$medicos = medicosVer();
		foreach($medicos as $medico){
			array_push($data, $medico);
		}
		$data = json_encode($data);
		return $data;
	}
	
	function control($row){
		$ordenes = json_decode($row, true);
		foreach($ordenes as $orden) {
			$data = $orden["data"];
			if ($orden["orden"] == "registrar") {
				foreach($data as $registro){
					$this->insertarUsuario($registro);
				}
			} else if ($orden["orden"] == "modificar") {
				foreach($data as $registro){
					$this->modificarUsuario($registro);
				}
			} else if ($orden["orden"] == "eliminar") {
				foreach($data as $registro){
					$this->eliminarUsuario($registro);
				} 
			} else if ($orden["orden"] == "mostrar") {
				return $this->recibirData();
			}	
		}
	}
}
