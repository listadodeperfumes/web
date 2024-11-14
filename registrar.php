<?php
if (isset($_POST['btngrabar'])) {
	include_once 'clases/clases.php';
	$cod_mar=$_POST['txtcod'];
	$des_mar=$_POST['txtdes'];
	$marca=new clases();
	$reg=$marca->registrar_marca($cod_mar,$des_mar);
}

if (isset($_POST['btngrabar1'])) {
	include_once 'clases/clases.php';
	$cod_mod=$_POST['txtcod'];
	$des_mod=$_POST['txtdes'];
	$modelo=new clases();
	$reg=$modelo->registrar_modelo($cod_mod,$des_mod);
}
if (isset($_POST['btngrabar2'])) {
	include_once 'clases/clases.php';
	$cod=$_POST['txtcod'];
	$des=$_POST['txtdes'];
	$cod_mar=$_POST['cbomar'];
	$cod_mod=$_POST['cbomod'];
	$placa=$_POST['txtplaca'];
	$fec_reg=$_POST['fecha'];
	$vehiculo=new clases();
	$reg=$vehiculo->registrar_vehiculo($cod,$des,$cod_mar,$cod_mod,$placa,$fec_reg);
}


?>