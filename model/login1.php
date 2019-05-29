<?php
session_start();
include('../controller/db_connect.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
		header('Location: ../view/login_bootstrap.php');
		exit();
	}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['password']);

$query = "SELECT id, email, senha FROM clientes WHERE email='{$email}' AND senha='{$senha}'";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: ../home.php?subcategorias_id_url=1');
    exit();
} else {
    $_SESSION['nao_altenticado'] = true;
    header('Location: ../view/login_bootstrap.php');
    exit();
}