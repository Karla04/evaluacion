<?php
	
	require('conexion.php');
	
	$id_producto=$_GET['id_producto'];
	
	$query="SELECT producto, descripcion, existencias, precio_compra, precio_venta FROM productos WHERE id_producto='$id_producto'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Productos</title>
				<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
	body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #000;
	text-align: center;
}
body {
	background-color: #FFF;
	font-family: "Leelawadee UI Semilight";
	background-image: url(Imagenes/fondo.gif);
}
    body p {
	font-family: Leelawadee UI Semilight;
}
    body p {
	font-family: "Leelawadee UI Semilight";
}
    .dun {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 36px;
	color: #000;
	text-decoration: underline overline;
	font-weight: bold;
}
        </style>
	</head>
	<body>
		<form name="modificar_producto" method="POST" action="mod_producto.php">
		<table width="407" border="0" align="center">
	      <tr>
		      <th width="397" class="dun">Modificar Producto </th>
	        </tr>
	      </table>
		  <table width="58%" align="center">
			  <tr align="center" valign="middle">
					<input type="hidden" name="id" value="<?php echo $id_producto; ?>">
					<th width="322"><h3 align="justify">Producto</h3>					  <p align="justify">
					  
					  <input type="text" name="producto" size="50" value="<?php echo $row['producto']; ?>" />
                  </p>
					  <h3 align="justify">Descripcion</h3>					  <p align="justify">
                      <textarea name="descripcion" cols="50" rows="3"><?php echo $row['descripcion']; ?></textarea>
                  </p>
					  <h3 align="justify">Existencias</h3>					  <p align="justify">
					  
					  <input type="text" name="existencias" size="50" value="<?php echo $row['existencias']; ?>" />
                  </p>
					  <h3 align="justify">Precio Compra</h3>					  <p align="justify">
					  
					  <input type="text" name="precio_compra" size="50" value="<?php echo $row['precio_compra']; ?>" />
                  </p>
					  <h3 align="justify">Precio Venta</h3>					  <p align="justify">
					  
					  <input type="text" name="precio_venta" size="50" value="<?php echo $row['precio_venta']; ?>" />
					  </p>
					  <h3 align="center">
					    <input type="submit" name="Guardar" value="Guardar" />
			      </h3>                    </th>
				<th width="304"><img src="Imagenes/Modifica.png" width="300" height="300"></th>
	        </tr>	
		  </table>
	</form>
		<div align="center">
		  <script src="js/jquery.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  </body>
    </div>
</html>	
