<?php
include_once('./class/noticia.php');

if (isset($_GET["agregar"])){
	$noticia = (new Noticia)->agregar($_POST["titulo"], $_POST["texto"], time());
	move_uploaded_file($_FILES["foto"]["tmp_name"], './noticias/'.$noticia->id.'.jpg');
}

if (isset($_GET["eliminar"])){
	(new Noticia)->buscarPorId($_GET["eliminar"])->eliminar();	
	
}

$html["noticias"] = (new Noticia)->listar();

?>