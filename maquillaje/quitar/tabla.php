<?php 

	$conexion=mysqli_connect('localhost','root','','marcas');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table>
		<tr>
			<td>ID</td>
			<td>Marca</td>
			<td>Producto</td>
			<td>Precio</td>
		</tr>

		<?php 
		$sql="SELECT * from nyx";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['Marca'] ?></td>
			<td><?php echo $mostrar['Producto'] ?></td>
			<td><?php echo $mostrar['Precio'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>