<?php
	require('conexion.php');
	
	$query="SELECT id_producto, producto, descripcion, existencias, precio_compra, precio_venta FROM productos";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
	<title>Productos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
	body,td,th {
	color: #333;
	font-family: "Arial Black", Gadget, sans-serif;
	text-align: center;
}
body {
	background-color: #FFF;
	background-image: url(Imagenes/fondo.gif);
}
    .New {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #333;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
}
    .din {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #000;
	text-decoration: underline overline;
}
    .New tbody tr th {
	font-family: Arial Black, Gadget, sans-serif;
}
    ta {
	font-family: Arial Black, Gadget, sans-serif;
}
    .New thead tr th {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 18px;
	color: #000;
}
        </style>
	</head>
	<body>
    <div align="center">
	  <table width="200" border="0">
	    <tr>
		      <th><p class="din">Productos</p></th>
	        </tr>
	      </table>
		  <p><a href="nuevo.php" >	 <img src="Imagenes/Nuevo.png" width="149" height="149" align="middle"></a></p>
		  <p>&nbsp;</p>
		  <table align="center" class="New" >
		    <thead>
		      <tr>
		        <th width="130"><b>Producto</b></th>
		        <th width="140"><b>Descripcion</b></th>
		        <th width="130"><b>Existencias</b></th>
		        <th width="160"><b>Precio Compra</b></th>
		        <th width="140"><b>Precio Venta</b></th>
	          </tr>
	        <tbody>
		        <?php while($row=$resultado->fetch_assoc()){ ?>
		        <tr>
		          <th width="130">
		            <p align="center"><?php echo $row['producto'];?>
	                </p>
		          </th>
		          <th width="140">
		            
		            <p align="center"><?php echo $row['descripcion'];?>
	                </p>
                  </th>
		          <th width="125">
		            
		            <p align="center"><?php echo $row['existencias'];?>
	                </p>
                  </th>
		          <th width="160">
		            
		            <p align="center"><?php echo $row['precio_compra'];?>
	                </p>
		            </th>
		          <th width="140">
                    
                    <p align="center"><?php echo $row['precio_venta'];?></p>
                  </th>
		          <th width="80">
		            <p align="center"><a href="modificar.php?id_producto=<?php echo $row['id_producto'];?>"><img src="Imagenes/Modificar.png" width="50" height="50"></a></p></th>
		          <th width="85">
		            <p align="center"><a href="eliminar.php?id_producto=<?php echo $row['id_producto'];?>"><img src="Imagenes/Eliminar.png" width="50" height="50"></a>
                  </p></th>
	          </tr>
		        <?php } ?>
	        </tbody>
	      </table>
    </div>
    <div align="center">
		  <script src="js/jquery.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  </body>
    </div>
	</html>