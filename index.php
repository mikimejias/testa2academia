<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Academia Test</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<header>
		<nav>
			<ul>
				<li><figure><img src="img/logo.png" alt="Logo A2 Academia"></figure></li>
				<li><a href="#cursos" class="strong">CURSOS</a></li>
				<li><a href="#a2team" class="strong">A2TEAM</a></li>
				<li><a href="#contact" class="strong">CONTACT</a></li>
				<li class="right">
					<a class="green strong" href="#login" id="myBtn">
						<span class="fa-stack fa-1x black">
							<i class="fa fa-user-circle-o fa-2x"></i>
						</span>
						 LOGIN
					</a>
				</li>
			</ul>
		</nav>
	</header>

	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="modal1">
				<p class="center">¿Ya tienes una cuenta?</p>
				<h2>Ingresa Aquí</h2>
				<form action="ingresar.php" method="post">
					<div class="container-form">
						<input id="username" class="input" type="text" value="" placeholder="&#xf007; Nombre de Usuario" name="username" required/>
						<input id="password" class="input" type="password" value="" placeholder="&#xf13e; Contraseña" name="password" required/>
						<input type="checkbox" checked="checked"> <strong class="grey">Recordar Usuario</strong>
					</div>
					<div class="container-form">
						<button type="submit" class="btn">Entrar</button>
						<span class="psw"><a href="#">¿Olvidó su contraseña?</a></span>
					</div>
				</form>
			</div>

			<div class="modal1">
				<p class="center">¿No tienes una cuenta?</p>
				<h2>Regístrate Aquí</h2>
				<form action="#">
					<div class="container-form">
						<input type="text" placeholder="&#xf007; Nombre de Usuario" name="uname" required>
						<input type="password" placeholder="&#xf13e; Contraseña" name="psw" required>
						<input type="password" placeholder="&#xf13e; Confirmar Contraseña" name="psw" required>
					</div>
					<div class="container-form">
						<button type="button" class="btn">Crear Cuenta</button>
					</div>
				</form>
			</div>

		</div>

	</div>

	<section class="content1">
		<h1>¿Quiénes Somos?</h1>

		<div class="container">

			<p>Somos un entorno dedicado al entrenamiento continuo del canal de <span class="red">Distribución de a2 Softway y usuarios finales</span>, por medio de herramientas tecnológicas innovadoras y basadas en la constante interacción entre distribuidores y el personal especializado de nuestra empresa.</p>

			<p>Nuestro interés es brindarles programas de <span class="red">E-learning</span> que desarrollen las competencias para ser un empresario exitoso utilizando nuestros <span class="red">sistemas administrativos</span>.</p>
		</div>


	</section>

	<footer>
		<div class="footer-container">
			<figure class="expand"><img src="img/logo.png" alt="Logo A2 Academia"></figure>
		</div>
		<div class="footer-container">
			<p>Quines somos</p>
			<p>a2 Team</p>
			<p>Contacto</p>
		</div>
		<div class="footer-container2">
			<p>Cursos</p>
			<ul>
				<li class="border-red"><a href="#">Introducción a2</a></li>
				<li class="border-red2"><a href="#">Herramienta Administrativa</a></li>
				<li class="border-yellow"><a href="#">Alimentos y Bebidas</a></li>
				<li class="border-black"><a href="#">Hotel</a></li>
				<li class="border-green"><a href="#">Contabilidad</a></li>
				<li class="border-green2"><a href="#">Nómina</a></li>
				<li class="border-orange"><a href="#">Punto de Venta</a></li>
				<li class="border-purple"><a href="#">Importaciones</a></li>
				<li class="border-grey"><a href="#">RMA</a></li>
			</ul>
		</div>
		<div class="footer-container center small">
			<p>¿Tienes alguna duda? Chatea con nosotros</p>
			<figure class="center"><img src="img/micro.jpg" alt="Chatea con nosotros"></figure>
		</div>


		<div class="footer-container3">
			<hr>
			<div class="footer-container4 ">
				<p class="right">Todos los derechos reservados <span><a href="#">a2 Academia</a></span></p>
			</div>
			<div class="footer-container4 ">
				<p class="left">Diseñado y desarrollado por a2 Academia</p>
			</div>
		</div>

	</footer>

	<script>
		var modal = document.getElementById('myModal');

		var btn = document.getElementById("myBtn");
		var span = document.getElementsByClassName("close")[0];

		btn.onclick = function() {
			modal.style.display = "block";
		}

		span.onclick = function() {
			modal.style.display = "none";
		}

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

</body>
</html>
