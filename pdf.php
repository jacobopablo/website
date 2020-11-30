<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM datos";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:#a5cbf0;">
		<th>Codigo</th>
		<th>Usuario</th>
		<th>Distrito</th>
		<th>Edad</th>
		<th>Fecha Registro</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['usuario']; ?></td>
					<td><?php echo $row['distrito']; ?></td>
					<td><?php echo $row['edad']; ?></td>
					<td><?php echo $row['fecha_reg']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>