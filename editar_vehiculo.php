<?php
include_once("clases/clases.php");
$tras=new clases();

	if (isset($_GET["cod"])) {
		$reg=$tras->get_visitas_por_cod($_GET["cod"]);
		$codigo_marca=$reg[0]['cod_mar'];
		$codigo_modelo=$reg[0]['cod_mod'];
	}

if (isset($_POST["btnguardar"]) and $_POST["btnguardar"]=="si"){
	//print_r($_POST);
	$tras->editar_vehiculo($_POST["txtdes"],$_POST["cbomar"],$_POST["cbomod"],$_POST["txtplaca"],$_POST["fecha"],$_POST["txtcod"]);
	exit;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Editar Registros</title>
</head>

<body>
<center>
<form name="form" action="editar_vehiculo.php" method="post">
<table width="400" align="center">

<tr>
<td align="center" width="400" valign="top" colspan="2">
<h2>Editar Producto</h2>

</td>
</tr>

<tr>
<td valign="top" align="right">
Codigo
</td>
<td valign="top" align="left">
<input type="text" name="txtcod" value="<?php echo $reg[0]["cod"];?>" />
</td>
</tr>

<tr>
<td valign="top" align="right">
Descripcion
</td>
<td valign="top" align="left">
<input type="text" name="txtdes" value="<?php echo $reg[0]["des"];?>" required="" title="Ingresar descripcion" />
</td>
</tr>

<td valign="top" align="right">
Placa
</td>
<td valign="top" align="left">
<input type="text" name="txtplaca" value="<?php echo $reg[0]["placa"];?>" required="" title="Ingresar placa" />
</td>
</tr>

<tr>
<td valign="top" align="right">
Fecha de Registro
</td>
<td valign="top" align="left">
<input type="text" name="fecha" value="<?php echo $reg[0]["fec_reg"];?>" required="" title="Ingresar fecha"/>
</td>
</tr>

<tr>
<td valign="top" width="400" align="center" colspan="2">
<hr />
<input type="hidden" name="btnguardar" value="si">
<input type="hidden" name="txtcod" value="<?php echo $_GET["cod"];?>">
<input type="button" value="Volver" title="Volver" onClick="window.location='vehiculo.php';">
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="submit" value="Editar" name="btneditar" id="btneditar"title="Editar"  />
</td>
</tr>

</table>

</center>
</body>
</html>
