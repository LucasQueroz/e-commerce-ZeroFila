<?php 
// Conexão
include_once '../db_connect.php';

// verifica se existe o id da super global get
if (isset($_GET[id])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	// Seleciona todos os campos da tabela clientes
	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Cliente [ Novo codigo ]</title>
	<link rel="stylesheet" type="text/css" href="_css/estiloCadastro.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<li>Voltar</li>
				<li>Consulta</li>
			</ul>
		</nav>

		<section>
		<h1>Faça seu cadastro e comece a fazer suas compras</h1>
		<hr><br><br><br>
		
		<form method="post" action="updete.php">
			<div class="input-field">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
			</div>

			<div class="input-field">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
			</div>

			<div class="input-field">
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>">
			</div>

			<div class="input-field">
				<label for="telefone">Telefone:</label>
				<input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
			</div>

			<button type="submit" name="btn-cadastrar" class="btn">Atualizar</button>
			<button type="reset" class="btn">Voltar</button>
		</form>

	</section>
	</div>


</body>
</html>