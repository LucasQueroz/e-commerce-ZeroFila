        <?php  
            include_once 'header.php';
        ?>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Carrinho de Compras </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-comerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Carrinho de Compras</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->



                    <!--- Formatação do carrinho de compras ---->
                    <head>
						<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
						<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
						<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
					</head>
					<!--- Formatação do carrinho de compras ---->



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
													<a href="/www/ZeroFila/view/home.php?subcategorias_id_url=1" class="btn btn-primary btn-sm btn-block">
														<span class="glyphicon glyphicon-share-alt"></span> Continue comprando
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="panel-body">
							
							<?php 
									require_once '../controller/db_connect.php';
									
									$email = $_SESSION['email'];
									if(empty($_SESSION['item_venda_id'])){
										echo "Carrinho vazio! Click no botão continue comprando, para poder adicionar produtos.";
										exit();
									} else {
										$item_venda_id = $_SESSION['item_venda_id'];
									}
									$cliente_select = "SELECT id FROM usuarios WHERE email = '{$email}'";
									$item_venda_select = $cliente_select;
									$cliente_query = mysqli_query($connect ,$item_venda_select);

									$row_cliente = mysqli_fetch_array($cliente_query);

									$sql_item_produto = "SELECT produtos.nome, produtos.descricao, produtos.preco, item_produto.quantidade, item_produto.item_produto_id FROM produtos JOIN item_produto
									ON item_produto.prod_id=produtos.prod_id 
									JOIN item_venda
									ON item_produto.item_venda_id='{$item_venda_id}' AND item_venda.item_venda_id='{$item_venda_id}'";
									$item_produto_result = mysqli_query($connect, $sql_item_produto);

									$total = 0;
									$quantidade_itens = 0;

									while($rows_produtos = mysqli_fetch_array($item_produto_result)):
										$total += $rows_produtos['preco'] * $rows_produtos['quantidade'];
										$quantidade_itens += $rows_produtos['quantidade'];
							?>		
										<div class="row">
											<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
											</div>
											<div class="col-xs-4">
												<h4 class="product-name"><strong><?php echo $rows_produtos['nome']?></strong></h4><h4><small><?php echo $rows_produtos['descricao']?></small></h4>
											</div>
											<div class="col-xs-6">
												<div class="col-xs-6 text-right">
													<h6><strong>R$ <?php echo $rows_produtos['preco']?> <span class="text-muted">x</span></strong></h6>
												</div>
												<div class="col-xs-4">
													<input type="text" readonly="true" class="form-control input-sm" value="<?php echo $rows_produtos['quantidade']?>">
												</div>
												<div class="col-xs-2">
													<button type="button" class="btn btn-link btn-xs">
														<a href="../model/remover_item_produto.php?item_produto_id=<?php echo $rows_produtos['item_produto_id']?>" class="glyphicon glyphicon-trash"> </a>
													</button>
												</div>
											</div>
										</div>
										<hr>
									<?php endwhile; ?>
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
												<h4 class="text-right">Total <strong>R$ <?php echo $total?></strong></h4>
											</div>
											<div class="col-xs-3">
												<a type="button" class="btn btn-success btn-block" href="../view/ecommerce-product-checkout.php">
													Confirmar
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Carrinho de compras -->
                    

                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <?php  
                    include_once '../footer.php';
                ?>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="../admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="../admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="../admin/assets/libs/js/main-js.js"></script>
</body>
 
</html>