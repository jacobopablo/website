<?php

include("con_db.php");
#if (strlen($_POST['usuario']) <1 &&
#	strlen($_POST['distrito']) <1 &&
#	strlen($_POST['edad']) <1) {
#}
if (isset($_POST['enviar'])) {
	if (strlen($_POST['usuario']) >=1 &&
	strlen($_POST['distrito']) >=1 &&
	strlen($_POST['edad']) >=1) {
		$usuario = trim( $_POST['usuario']);
		$distrito = trim( $_POST['distrito']);
		$edad = trim( $_POST['edad']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO datos(usuario, distrito, edad) VALUES ('$usuario', '$distrito', '$edad')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
			header ("Location: ruleta.html");
			?>
			<h3 class="ok">!Estás participando correctamente!</h3>
			<?php 
		 } else {
		 	?>
		 	<h3 class="bad">!Ups ha ocurrido un error!</h3>
		 	<?php
		 }
	} else{
		?>
		<h3 class="bad">!Por favor complete los campos!</h3>
		<?php
	}
}

?>
