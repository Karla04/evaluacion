<html>
	<head>
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
    .den {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #000;
	text-decoration: underline overline;
	font-weight: bold;
}
        </style>
	</head>
	<body>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<form name="nuevo_producto" method="POST" action="guarda_producto.php">
			<table width="300" border="0" align="center">
			  <tr>
			    <th width="290" class="den">Nuevo Producto </th>
		      </tr>
		  </table>
			<table width="58%" align="center">
				<tr>
					<th width="322"><h3 align="left"><b>Producto</b></h3>					  <p align="left">
					  
					  <input type="text" name="producto" size="50" />
			        </p>
					  <h3 align="left"><b>Descripcion</b></h3>					  <p align="left">
                      <textarea name="descripcion" cols="50" rows="3"></textarea>
			        </p>
					  <h3 align="left"><b>Existencias</b></h3>					  <p align="left">
					  
					  <input type="text" name="existencias" size="50" />
			        </p>
					  <h3 align="left"><b>Precio Compra</b></h3>					  <p align="left">
					  
					  <input type="text" name="precio_compra" size="50" />
			        </p>
					  <h3 align="left"><b>Precio Venta</b></h3>					  <p align="left">
					  
					  <input type="text" name="precio_venta" size="50" />
			        </p>					  <p align="center">
				      <kbd>
				      <input type="submit" name="eviar" value="Enviar" />
			        </kbd></p></th>
					<th width="296"><img src="Imagenes/Nuevo1.png" width="300" height="300"></th>
				</tr>
			</table>
		</form>
	<div align="center">
		  <script src="js/jquery.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  </body>
    </div>
</html>						