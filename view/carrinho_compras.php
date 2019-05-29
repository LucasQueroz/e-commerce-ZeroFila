<?php 
	//session_start();
	
	include_once '../header.php';
	//include_once 'view/message.php'; 	
?>

<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>


<section>
	<table class="table table-striped">
		<thead>
		  <tr>
			<th scope="col">Produto</th>
			<th scope="col">Quantidade</th>
			<th scope="col">Valor Unitario</th>
			<th scope="col">Valor</th>
		  </tr>
		</thead>
		
		<?php 
				//session_start();
				require_once '../controller/db_connect.php';
				
				$email = $_SESSION['email'];

				$cliente_select = "SELECT id FROM clientes WHERE email = '{$email}'";
				$item_venda_select = $cliente_select;
				$cliente_query = mysqli_query($connect ,$item_venda_select);

				$row_cliente = mysqli_fetch_array($cliente_query);

				$item_venda_id = $row_cliente['id'];
				
				/*$sql = "SELECT * FROM item_produto WHERE item_venda_id='{$item_venda_id}'";
				$item_produto_result = mysqli_query($connect, $sql);*/

				/*$sql = "SELECT item_produto.id, item_produto.quantidade, produtos.nome, produtos.preco FROM item_produto
					INNER JOIN produtos ON item_produto.prod_id=produtos.id";
				$item_produto_result = mysqli_query($connect, $sql);*/

				/*$sql = "SELECT itProd.*, prod. 'nome' AS 'produtos' FROM 'item_produto' AS itProd
				INNER JOIN 'produtos' AS prod ON itProd.'prod_id' = prod.'id' 
				ORDER BY itProd.'item_produto_id' ASC";*/

				$sql = "SELECT * FROM clientes 
				INNER JOIN item_produto ON clientes.item_venda_id=item_produto.item_venda_id
				INNER JOIN produtos ON item_produto.prod_id=produtos.prod_id";
				
				$item_produto_result = mysqli_query($connect, $sql);

				while($rows_produtos = mysqli_fetch_array($item_produto_result)):
		?>
					<tbory>
					<th scope="row"><?php echo $rows_produtos['nome']?></th>
					<td><?php echo $rows_produtos['quantidade']?></td>
					<td><?php echo $rows_produtos['preco']?></td>
					<td> <?php echo $rows_produtos['preco']*$rows_produtos['quantidade'] ?> </td>
					</tbody>
				<?php endwhile; ?>

	  </table>




	  <!-- Carrinho de compras -->
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>$50.00</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								Checkout
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</section>

<?php  
include_once '../footer.php';
?> 