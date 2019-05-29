<?php 
	//session_start();
	
	include_once '../header.php';
	//include_once 'view/message.php'; 
	$prod_id = $_GET['prod_id'];
?>

<section id="corpo">
    <?php
		$sql = "SELECT * FROM produtos WHERE prod_id='$prod_id'"; 			
        $resultado = mysqli_query($connect ,$sql);
        $row = mysqli_fetch_assoc($resultado);
	?>
			
</section>

<aside id="parte_lateral">
	<form method="POST" action="../controller/adicionar_produto_carrinho.php?prod_id=<?php echo $prod_id; ?>">
		<h2>Detalhes do Produto</h2>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?php echo CAMINHO_IMAGEM.'/'.$row['img_endereco'] ?>">
			</div>
		</div>

        <div>

        	<h3><?php echo $row['nome']?></h3>
			<h3>R$ <?php echo $row['preco']?></h3>
			<h5><?php echo $row['descricao']?></h5>
			<div><label for="quantidade">Quantidade:</label><input type="number" name="quantidade" id="quantidade" min="1" /></div>
			<div><button type="submit" name="btn-adicionar" class="btn">Adicionar</button></div>
		</div>
	</form>
</aside>

<?php  
	include_once '../footer.php';
?> 