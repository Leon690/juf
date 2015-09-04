<?php
	session_start();
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	
	require_once './vendor/autoload.php';
	Twig_Autoloader::register();
	
	$loader = new Twig_Loader_Filesystem('./templates');
	$twig = new Twig_Environment($loader, array(
	    //'cache' => './cache',
	    'cache' => false,
	));

	$html[] = null;
	switch(isset($_GET["seccion"]) ? $_GET["seccion"] : ''){
		case 'noticias':
			include('./noticias.php');
			echo $twig->render('noticias.html', $html);			
			break;
		case 'historia':
			echo $twig->render('historia.html', $html);
			break;
		case 'agrupacion':
			echo $twig->render('agrupacion.html', $html);
			break;
		case 'imagenes':
			echo $twig->render('imagenes.html', $html);
			break;	
		case 'admin':
			include('./login.php');
			if (isset($_SESSION["admin"])){
				include('./admin.php');
				echo $twig->render('admin.html', $html);
			}else{
				echo $twig->render('login.html', $html);
			}
			break;
		default:
			echo $twig->render('home.html', $html);
	}
?>