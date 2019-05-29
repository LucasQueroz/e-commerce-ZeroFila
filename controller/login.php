<?php
	//session_start();
	include_once('db_connect.php');

	if(empty($_POST['email']) || empty($_POST['password'])) {
		header('Location: ../view/login_cadastro.php');
		exit();
	}

	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$senha = mysqli_real_escape_string($connect, $_POST['password']);

	$sql = "SELECT id, nome, email FROM clientes WHERE email = '{$email}' AND senha = '{$senha}'";
	
	$result = mysqli_query($connect, $sql);

	$row = mysqli_num_rows($result);
	
	if ($row == 1) {
		session_start();

		$_SESSION['email'] = $email;
		//$_SESSION['nao_autenticado'] = false;
		header('Location: ../home.php?subcategorias_id_url=1');
		exit();
	} else {
		//$_SESSION['nao_autenticado'] = true;
		header('Location: ../view/login_cadastro.php');
		exit();
	}
 ?>