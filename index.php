<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <div class="loader"></div>
	<div class="contenedor">
        <!--<h1 style="color: transparent;">BLUE WISH</h1>-->
        <img src="img/logo-circulo.png" style="width: 200px; height: 200px;display: block; margin: auto; margin-top: 20px; margin-bottom: -70px; ">
		<!--<div class="blue_wish">
			<canvas id="idcanvas" width="600" height="600">
				
			</canvas>
			<br>
			<button onclick="girar()"><span id="idestado">Girar</span></button>
			<div class="mark-winner"></div>
        </div> -->

        <section class="form-user">
        	<div>
        		<form class="form" method="post">
        			<h2>REGISTRATE</h2>
        			<br>
        			<p type="Usuario:">
        				<input name="usuario" placeholder="Ingresa tu usuario @.."></input></p>
        			<p type="Distrito:">
        				<input name="distrito" placeholder="Ingresa tu Distrito.."></input>
        			</p>
        			<p type="Edad:"><input name="edad" placeholder="Ingresa tu edad.."></input></p>
        			
                    <div class="btn"><input name="enviar" type="submit" value="Participar" onclick="red()" ></input></div>
                    <!--<div class="btn"><button>Participar</button></div>-->
                    <div class="admi" style="text-align: center; margin-top: 10px; text-decoration: none; color: #a5cbf0;"><a href="index.html">Administrador</a></div>
        			
        		</form>

        	</div>
        </section>
    </div>
    <?php
    include("registrar.php");
    ?>


    <!--<script>
        function red() { 
            location.href = "ruleta.html"; 
        }
    </script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(window).load(function() 
        {
            $(".loader").fadeOut("slow");
        });
    </script>
    

    
</body>
</html>