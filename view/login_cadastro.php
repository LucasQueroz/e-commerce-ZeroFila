<?php/*
	session_start();*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="_css/estiloCadastro.css">
	<link rel="stylesheet" type="text/css" href="_css/login_bootstrap.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
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
		<h1>Faça seu cadastro ou entre na sua conta e comece a fazer suas compras</h1>
		<hr><br><br><br>
		
		<form method="post" action="../model/login1.php">
		<p>Realizar Login</p>
        <div><label for="eLogin">E-mail:</label><input type="text" name="emailLogin" id="emailLogin" /></div>
        <div><label for="sLogin">Senha:</label><input type="password" name="senhaLogin" id="senhaLogin" maxlength="12"/></div>
        <div><button type="submit" name="btn-logar" class="btn">Entrar</button></div>

        <!--<?php
        	if (isset($_SESSION['nao_autenticado'])) {
        		$mensagem = "Senha ou Usuário inválidos";
        	} else{
				$mensagem = "";
        		unset($_SESSION['nao_autenticado']);
        	}
        ?>-->
        <p><?php echo $mensagem; ?></p>
        
        <br><br><br><br>
		</form>

		<form method="post" action="../controller/create.php">
			<p>Criar Conta</p>
			<div class="input-field">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome">
			</div>

			<div class="input-field">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email">
			</div>

			<div class="input-field">
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha">
			</div>

			<div class="input-field">
				<label for="telefone">Telefone:</label>
				<input type="text" name="telefone" id="telefone">
			</div>

			<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
			<button type="reset" class="btn">Voltar</button>
		</form>
	</section>
	</div>
</body>
</html>