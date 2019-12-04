<?php 
	//session_start();
	if (empty($_SESSION['email'])) {
		header('Location: /www/ZeroFila/view/login.php');
		exit();
	} else if($_SESSION['nivel_altenticacao'] == 1){
		header('Location: /www/ZeroFila/view/home.php?subcategorias_id_url=1');
	}