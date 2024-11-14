<?php
include_once 'clases/clases.php';

$vehiculo=new clases();
$reg=$vehiculo->listar_vehiculo();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table width="90%" border="0" align="center">
<form action="registrar.php" method="post">
<h3>  PERFUMES MANIA, S.A.</h3>
<h3>  INGRESAR PRODUCTO</h3>
<hr color="#0000FF" />
  <tr>
    <td width="25%">CODIGO:</td>
    <td width="75%"><label>
      <input type="text" name="txtcod" id="txtcod" size="35"  />
    </label></td>
  </tr>
  <tr>
    <td>DESCRIPCION:</td>
    <td><label>
      <input type="text" name="txtdes" id="txtdes" size="40" />
    </label></td>
  </tr>
  <tr>
       
    <td>PRECIO:</td>
    <td><label>
      <input type="text" name="txtplaca" id="txtplaca" />
    </label></td>
  </tr>
  <tr>
    <td>FECHA REGISTRO:</td>
    <td><label>
      <input type="text" name="fecha" id="fecha" size="20" />
    </label></td>
  </tr>
  <tr>
      <td colspan="2"><label>
      <input type="submit" name="btngrabar2" id="btngrabar2" value="Enviar" />
    </label></td>
  </tr>
  <a href="index.htm">Pagina Anterior</a>
</table>
 
<table width="90%" border="0" align="center">
<H3><center>LISTADO DE TODO LOS PRODUCTOS</center></H3>
<hr color="#FF0000" />
 <tr>
    <td><div align="center" class="Estilo2"><h5>CODIGO<hr color="blue"></h5></div></td>
    <td><div align="center" class="Estilo2"><h5>DESCRIPCION<hr color="blue"></h5></div></td>
    <td><div align="center" class="Estilo2"><h5>PRECIO<hr color="blue"></h5></div></td>
    <td><div align="center" class="Estilo2"><h5>FECHA<hr color="blue"></h5></div></td>
  </tr>
  <tr>
  
  <?php
  for($i=0;$i < count($reg);$i++){
  ?>
  <td  align="center" width="100">
    <?php echo $reg[$i]["cod"];?>
    </td>
    <td  align="center" width="100">
    <?php echo $reg[$i]["des"];?>
    </td>
    <td  align="center" width="100">
    <?php echo $reg[$i]["placa"];?>
    </td>
    <td  align="center" width="100">
    <?php echo $reg[$i]["fec_reg"];?>
    </td>
     <td><a href="editar_vehiculo.php?cod=<?php echo $reg[$i]["cod"]; ?>" > <img src="img/editar.png" border="0px" > </a>
         |<a href="eliminar_vehiculo.php?cod=<?php echo $reg[$i]["cod"]; ?>" > <img src="img/eliminar.png" border="0px" > </a>  
  
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>


