<?php
require_once("clases/clases.php");
//print_r($_GET);
$tra=new clases();
$tra->eliminar_vehiculo($_GET["cod"]);
?>