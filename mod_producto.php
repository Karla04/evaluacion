<?php 
	
	require('conexion.php');
	
	$id_producto=$_POST['id_producto'];
	$producto=$_POST['producto'];
	$descripcion=$_POST['descripcion'];
	$existencias=$_POST['existencias'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	
	
	$query="UPDATE productos SET producto='$producto', descripcion='$descripcion', existencias='$existencias', precio_compra='$precio_compra', precio_venta='$precio_venta' WHERE id_producto='$id_producto'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar producto</title>
				<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
	body,td,th {
	font-family: "Leelawadee UI Semilight";
	color: #000;
	text-align: center;
}
body {
	background-color: #FFF;
	font-family: "Leelawadee UI Semilight";
	background-image: url(Imagenes/fondo.gif);
}
    .dan {
	font-family: Arial, Helvetica, sans-serif;
	color: #000;
	text-decoration: underline overline;
	font-size: 36px;
}
        </style>
	</head>
	
	<body>
		<center>
		  <table width="673" border="0">
		    <tr>
			    <th width="663"><?php 
				if($resultado>0){
				?></th>
		      </tr>
			  <tr>
			    <td><span class="dan">Producto Modificado</span></td>
		      </tr>
			  <tr>
			    <td><?php 	}else{ ?></td>
		      </tr>
			  <tr>
			    <td><a href="index.php"><img src="Imagenes/Index.png" alt="" width="100" height="100"></a></td>
		      </tr>
			  <tr>
			    <td><span class="dan">Error al Modificar Producto</span></td>
		      </tr>
			  <tr>
			    <td><?php	} ?></td>
		      </tr>
			  <tr>
			    <td><a href="index.php"><img src="Imagenes/Index.png" width="100" height="100"></a></td>
		      </tr>
		  </table>
	</center>
	<div align="center">
		  <script src="js/jquery.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		 
    </div>
 </body>
</html>
				
				
