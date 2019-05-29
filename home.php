<?php 
	//session_start();
	
	include_once 'header.php';
	//include_once 'view/message.php'; 
	
?>

<section id="corpo">
			<div class="row">
			<?php
				$subcategorias_id_url = $_GET['subcategorias_id_url'];
				$sql = "SELECT * FROM produtos WHERE subcategoria_id='$subcategorias_id_url'";
				$resultado = mysqli_query($connect ,$sql);
				while($dados = mysqli_fetch_array($resultado)):
			?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
						<img src="<?php echo VIEW.CAMINHO_IMAGEM.'/'.$dados['img_endereco']  ?>">
						<div class="caption">
							<h3><?php echo $dados['nome']?></h3>
							<p><?php echo $dados['preco']?></p>
							<button id="btMeio"><a href="view/detalhes_produto.php?prod_id=<?php echo $dados['prod_id']; ?>">Comprar</a></button>
						</div>
						</div>
					</div>
				
				<?php endwhile; ?>
			</div>

			<!--<?php
				$subcategorias_id_url = $_GET['subcategorias_id_url'];
				
				$sql = "SELECT * FROM produtos WHERE subcategoria_id='$subcategorias_id_url'"; 			
				$resultado = mysqli_query($connect ,$sql);

				while($dados = mysqli_fetch_array($resultado)):
			?>
					<table class="tabela-produto">
						<tr><img src="<?php echo CAMINHO_IMAGEM.'/'.$dados['img_endereco']  ?>"></tr><br>
						<tr><?php echo $dados['nome']?></tr><br>
						<tr><?php echo $dados['preco']?></tr><br>
						<tr><button>Comprar</button></tr>
					</table>		
				<?php endwhile; ?>
 
			<button id="btMeio"><a href="carrinho_compras.html">Ver carrinho de compras</a></button>-->










</section>

<?php  
include_once 'footer.php';
?> 