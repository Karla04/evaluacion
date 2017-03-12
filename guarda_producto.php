<?php 
	
	require('conexion.php');
	
	$producto=$_POST['producto'];
	$descripcion=$_POST['descripcion'];
	$existencias=$_POST['existencias'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	
	$query="INSERT INTO productos (producto, descripcion, existencias, precio_compra, precio_venta) VALUES ('$producto','$descripcion','$existencias','$precio_compra','$precio_venta')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar producto</title>
				<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
	body,td,th {
	font-family: "Leelawadee UI Semilight";
	color: #000;
}
    body {
	background-color: #FFF;
	background-image: url(Imagenes/fondo.gif);
}
    .deen {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #000;
	text-decoration: underline overline;
}
    </style>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
		  <h1 class="deen">Producto Guardado</h1>
				<p>
				  <?php }else{ ?>
		  </p>
				<p><a href="index.php"><img src="Imagenes/Index.png" alt="" width="100" height="100"></a></p>
		  <h1 class="deen">Error al Guardar Producto</h1>		
			<p>
			  <?php	} ?>
		  </p>
			<p><a href="index.php"><img src="Imagenes/Index.png" width="100" height="100"></a></p>
		</center>
		<div align="center">
		  <script src="js/jquery.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  </body>
    </div>
	</html>	