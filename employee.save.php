<?php
header('Content-type: application/json; charset=utf-8');

require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_POST['id'];

$employee_data = [
	'nombre' => $_POST['nombre'],
	'apellido' => $_POST['apellido'],
	'direccion' => $_POST['direccion'],
	'telefono' => $_POST['telefono'],
	'correo' => $_POST['correo'],
	'fecha_registro' =>  $_POST['fecha_registro'],
];

if($id==0){ // Nuevo
	$r = $objDB->Insert('crud_employees', $employee_data);
	if($r['result']){
		$arr = ['resultado' => true, 'mensaje' => 'Cliente añadido', 'id' => $r['insert_id'] ];
	}else{
		$arr = ['resultado' => false, 'mensaje' => $r['error']];
	}
}else{ // Update
	$r = $objDB->Update('crud_employees', $employee_data, ["id" => $id]);
	if($r['result']){
		$arr = ['resultado' => true, 'mensaje' => 'Cliente actualizado' ];
	}else{
		$arr = ['resultado' => false, 'mensaje' => $r['error']];
	}
}
die(json_encode($arr));
