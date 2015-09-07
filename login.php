<?php

if (isset($_GET["login"]) and isset($_POST["usuario"])){
	if ($_POST["usuario"] == "root" AND $_POST["password"] == "34343974"){
		$_SESSION["admin"] = "root";
	}else{
		$html["error"] = "usuario o clave incorrecta";
	}
}
if (!isset($_SESSION["admin"])){
        echo $twig->render('login.html', $html);
        exit();
    }
?>