<?php 
	//session_start();
	if (empty($_SESSION['email'])) {
		header('Location: /www/ZeroFila/view/login_bootstrap.php');
		exit();
	}
 ?>