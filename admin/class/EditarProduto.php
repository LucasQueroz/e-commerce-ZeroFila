<?php

session_start();

require_once '../../controller/db_connect.php';

$prod_id = $_GET['prod_id'];

if(isset($_POST['Editar'])):
	$nome_produto = mysqli_escape_string($connect, $_POST['Nome']);
	$descricao_produto = mysqli_escape_string($connect, $_POST['Descricao']);
	$nome_imagem = mysqli_escape_string($connect, $_POST['Imagem']);
	$valor_produto = mysqli_escape_string($connect, $_POST['Valor']);

	$sql = "UPDATE produtos SET descricao='$descricao_produto', nome='$nome_produto', img_endereco='$nome_imagem', preco='$valor_produto' WHERE prod_id='$prod_id'";

	echo 'nome_produto: '.$nome_produto;
	echo 'descricao_produto: '.$descricao_produto;
	echo 'nome_imagem: '.$nome_imagem;
	echo 'valor_produto: '.$valor_produto;

	if(mysqli_query($connect, $sql)):
		echo " /n/n atualizado";
	else:
		echo " /n/n não atualizado";
	endif;

	/*if(mysqli_query($connect, $sql)):
		//$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../view/painel.php');
	else:
		//$_SESSION['mensagem'] = "Erro ao cadastra.";
		header('Location: ../view/login_bootstrap.php');
	endif;*/

endif;