<?php 
	session_start();

	include_once('controller/db_connect.php');
	
	include_once('model/verifica_login.php');
	include_once('view/menu_multinivel.php');

	include_once('model/Produto_Config.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="/www/ZeroFila/view/_css/estilo.css">-->


	<!-- Menus horizontal e vertical -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="view/_css/menuVerticalBootstrap.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Menus horizontal e vertical -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<!-- Menus horizontal e vertical -->

  	<link rel="stylesheet" type="text/css" href="/www/ZeroFila/view/_css/menuSubmenu.css">
  	<link rel="stylesheet" type="text/css" href="/www/ZeroFila/view/_css/footerBootstrap.css">

</head>

<body>

	<nav class="navbar navbar-default">
		 <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Mercado Online</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="view/login_bootstrap.php">Entrar</a></li>
		      <li><a href="model/logout.php">Sair</a></li>
		      <li><a href="#">Page 2</a></li>
		      <li><a href="#">Page 3</a></li>
		    </ul>
		</div>
	</nav>

	
	<!-- Menu com sub menu --->
	<div class="menu-container">
	    <ul class="menu clearfix">
	        <li><a href="/www/ZeroFila/home.php?subcategorias_id_url=1">Home</a></li>
	        <li><a href="#">Camisas</a>
	        	<ul class="sub-menu clearfix"><?php echo mostrar_menu(CATEGORIA_CAMISAS); ?></ul>
	        </li>
	        <li><a href="#">Blusas</a>
	        	<ul class="sub-menu clearfix"><?php echo mostrar_menu(CATEGORIA_BLUSAS); ?></ul>
	        </li>
	        <li><a href="#">Acesssorio</a>
	        	<ul class="sub-menu clearfix"><?php echo mostrar_menu(CATEGORIA_ACESSORIOS); ?></ul>
	        </li>
	        <li><a href="#">Calsados</a>
	        	<ul class="sub-menu clearfix"><?php echo mostrar_menu(CATEGORIA_CALCADOS); ?></ul>
	        </li>
	        <li><a href="#">Calças</a>
	        	<ul class="sub-menu clearfix"><?php echo mostrar_menu(CATEGORIA_CALCAS); ?></ul>
	        </li>
	    </ul>
	</div>
	<!-- Menu com sub menu --->


	

	<!--<div id="interface">
		<header id="cabecalho">
			<p id="sm">Mercado</p>
			<p id="nomMerc">Online</p>
			<img id="corrinho" src="_imagens/_icones/carrinho_de_compras.png">
		</header>




			<nav id="menuPro">
				<ul>
					<li><a href="index.php">Início</a></li>
					<li>Camisas<ul><?php echo mostrar_menu(CATEGORIA_CAMISAS); ?></ul></li>
					<li>Blusas<ul><?php echo mostrar_menu(CATEGORIA_BLUSAS); ?></ul></li>
					<li>Acessórios<ul><?php echo mostrar_menu(CATEGORIA_ACESSORIOS); ?></ul></li>
					<li>Eletronicos <ul><?php echo mostrar_menu(CATEGORIA_ELETRONICOS); ?></ul> </li>
					<li>Calsa Masculina <ul><?php echo mostrar_menu(CATEGORIA_CALSA_MASCULINA); ?></ul> </li>
					<li>Calsa Feminina<ul><?php echo mostrar_menu(CATEGORIA_CALSA_FEMININA); ?></ul></li>
					<li>Calçados Femininos<ul><?php echo mostrar_menu(CATEGORIA_CALCADO_MASCULINO); ?></ul></li>
					<li>Calçados Masculinos<ul><?php echo mostrar_menu(CATEGORIA_CALCADO_FEMININO); ?></ul></li>
				</ul>
			</nav>

			<h2>Olá, <?php echo $_SESSION['email'];?></h2>
			<nav id="menuOpc">
				<ul type="disc" start="4">
					<li><a href="model/logout.php">Sair</a></li>
				</ul>
			</nav>
		</header>-->