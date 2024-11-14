<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 
move_uploaded_file($_FILES["foto"]["tmp_name"], 
          "archivos/" . $_FILES["foto"]["name"]); 
  echo "¡Archivo Subido! "; 
        
		  ?>
<a href="index.htm">REGRESAR</a>		  
</body>
</html>
