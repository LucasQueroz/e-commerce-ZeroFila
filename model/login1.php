<?php

session_start();
include('../controller/db_connect.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
	header('Location: ../view/login.php');
	exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['password']);

$query = "SELECT id, email, senha, nivel FROM usuarios WHERE email='{$email}' AND senha=md5('$senha')";

$result = mysqli_query($connect, $query);
$row_cliente = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    $_SESSION['id_usuario'] = $row_cliente['id'];
    $_SESSION['nivel_altenticacao'] = $row_cliente['nivel'];

    if($row_cliente['nivel'] == 1){
    	header('Location: ../view/home.php?subcategorias_id_url=1');
    } else if($row_cliente['nivel'] == 2){
    	header('Location: ../admin/index.php');
    }    
    exit();
} else {
    $_SESSION['nao_altenticado'] = 'Senha ou Email inválido!';
    header('Location: ../view/login.php');
    exit();
}

mysqli_close($connect);