<?php/* 

// conexão [codigo novo]


// Inicia a sessão
session_start();

require_once 'db_connect.php';

// Verifica se existe a variavel: -- btn-cadastrar --
if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);

	$sql = "INSERT INTO clientes (nome, email, senha, telefone) VALUE ('$nome', '$email', '$senha', '$telefone')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: index.php?');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastra.";
		header('Location: index.php?');
	endif;

endif;*/