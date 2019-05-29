<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['username']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['password']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$item_venda_id = 1;

	$sql = "INSERT INTO clientes (nome, email, senha, telefone) VALUE ('$nome', '$email', '$senha', '$telefone')";

	/*echo 'nome: '.$nome;
	echo 'email: '.$email;
	echo 'senha: '.$senha;
	echo 'telefone: '.$telefone;*/

	if(mysqli_query($connect, $sql)):
		//$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../view/painel.php');
	else:
		//$_SESSION['mensagem'] = "Erro ao cadastra.";
		header('Location: ../view/login_bootstrap.php');
	endif;

endif;