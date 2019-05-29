<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="view/_css/estilo.css">-->
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="view/_css/menu_vertical_bootstrap.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  	<link rel="stylesheet" type="text/css" href="view/_css/index.css">
  	<link rel="stylesheet" type="text/css" href="view/_css/footer.css">


</head>
<body>

	<div id="interface">

		<header id="cabecalho">
			<img id="corrinho" src="_imagens/_icones/carrinho_de_compras.png">

			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">Mercado Online</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="view/login_bootstrap.php">Entrar</a></li>
			      <li><a href="#">Page 1</a></li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li>
			    </ul>
			  </div>
			</nav>


			<!---<nav id="menuPro">
				<ul type="disc" start="4">
					<li><a href="view/login_cadastro.php">Camisa</a></li>
					<li><a href="view/login_cadastro.php">Blusas</a></li>
					<li><a href="view/login_cadastro.php">Acessórios</a></li>
					<li><a href="view/login_cadastro.php">Eletronicos</a></li>
					<li><a href="view/login_cadastro.php">Calsa Masculina</a></li>
					<li><a href="view/login_cadastro.php">Calsa Feminina</a></li>
					<li><a href="view/login_cadastro.php">Viagens</a></li>
					<li><a href="view/login_cadastro.php">Auto Peças</a></li>
				</ul>
			</nav>--->





			<!--<nav id="menuPro">
				<ul type="disc" start="4">
				<?php foreach($categories as $category): ?>
					<li role="presentation">
						<a href="#"> <?= $category ?>
						<i class="glyphicon glyphicon-chevron-right"></i></a>
						<ul>
							<?php foreach($subCategories as $subCategory): ?>
								<?php if($subCategory['category']['category_name'] == $category): ?>
									<li role="presentation">
										<a href="#"> <?= $subCategory['sub_category_name'] ?></a>
									</li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endforeach; ?>
				</ul>
			</nav>-->



			<!-- Menu bootstrap --->
			<div class="col-md-3 column margintop20">
			    <ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Home</a></li>
				  <li><a href="view/login_bootstrap.php"><span class="glyphicon glyphicon-chevron-right"></span> Camisas</a></li>
				  <li><a href="view/login_bootstrap.php" class="active2"><span class="glyphicon glyphicon-chevron-right"></span> Blusas</a></li>
				  <li><a href="view/login_bootstrap.php"><span class="glyphicon glyphicon-chevron-right"></span> Acessórios</a></li>
				  <li><a href="view/login_bootstrap.php"><span class="glyphicon glyphicon-chevron-right"></span> Calçados</a></li>
				  <li><a href="view/login_bootstrap.php"><span class="glyphicon glyphicon-chevron-right"></span> Calsa</a></li>
				</ul>
			</div>
			<!-- Menu bootstrap --->
		</header>

		<section id="corpo">

			<!--<h2>Em Oferta</h2>
			<table id="produtos">
				<tr>
					<td>[imagem do produto1]</td> <td>[imagem do produto]</td> <td>[imagem do produto]</td> <td>[imagem do produto]</td> <td>[imagem do produto]</td>
				</tr>
				<tr>
					<td id="produto1">[Nome do produto1]</td> <td>[Nome do produto]</td> <td>[Nome do produto]</td> <td>[Nome do produto]</td> <td>[Nome do produto]</td> 
				</tr>
				<tr>
					<td>[Preço atual1]</td> <td>[Preço atual]</td> <td>[Preço atual]</td> <td>[Preço atual]</td> <td>[Preço atual]</td>
				</tr>
				<tr>
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd1"> <button>Adicionar1</button></td> 
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd"> <button>Adicionar</button></td> 
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd"> <button>Adicionar</button></td> 
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd"> <button>Adicionar</button></td>
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd"> <button>Adicionar</button></td>
				</tr>
			</table>

			<table id="produtos">
				<tr>
					<td>[imagem do produto]</td> <td>[imagem do produto]</td> 
					<td>[imagem do produto]</td> <td>[imagem do produto]</td>
				</tr>
				<tr>
					<td>[Nome do produto]</td> <td>[Nome do produto]</td> 
					<td>[Nome do produto]</td> <td>[Nome do produto]</td>
				</tr>
				<tr>
					<td>[Preço antigo]</td> <td>[Preço antigo]</td> 
					<td>[Preço antigo]</td> <td>[Preço antigo]</td>
				</tr>
				<tr>
					<td>[Preço atual]</td> <td>[Preço atual]</td> 
					<td>[Preço atual]</td> <td>[Preço atual]</td>
				</tr>
				<tr>
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd"> <button class="btAdicionar">Adicionar</button></td> 
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd" > <button class="btAdicionar">Adicionar</button></td> 
					<td><input type="number" name="tQtd" min="0" value="1" class="inpQtd"> <button class="btAdicionar">Adicionar</button>
					</td> <td><input type="number" name="tQtd" min="0" value="1" class="inpQtd"> <button class="btAdicionar">Adicionar</button></td>
				</tr>
			</table>-->


			<div>
				<a href="view/login_bootstrap.php"><img src="view/_imagens/_icones/grande-promocao.jpg" id="baner_oferta"></a>
			</div>
		</section>

		<<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


	</div>

</body>
</html>