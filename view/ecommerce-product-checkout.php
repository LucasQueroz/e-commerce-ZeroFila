        <?php 
            include_once 'header.php';

            if((!empty($_SESSION['compra_concluida']))&&($_SESSION['compra_concluida'])){
                echo "<script>
                    window.location='../model/logout.php';
                    alert('Seu pedido foi enviado! Aguarde, logo será entregue no endereço que você informou.');
                </script>";
            } else if((!empty($_SESSION['compra_concluida']))&&(!$_SESSION['compra_concluida'])){
                echo "<script>
                    window.location='../model/logout.php';
                    alert('Falha ao concluir a compra!!!');
                </script>";
            }
        ?>
        <!-- ============================================================== -->
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
                                <h2 class="pageheader-title">Verifíque Seu Carrinho e Informe o Local de Entrega </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Checkout</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Local de Entrega</h4>
                                        </div>
                                        <div class="card-body">
                                            <form form action="../controller/finalizar_compra.php" method="post" id="contactFrm" name="contactFrm">
                                                <div class="mb-3">
                                                    <label for="address">Rua</label>
                                                    <input type="text" class="form-control" name="rua" id="rua" placeholder="Nome da Rua " required="">
                                                    <div class="invalid-feedback">
                                                        Please enter your shipping address.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                        <label for="lastName">Número</label>
                                                        <input type="text" class="form-control" name="numero" id="numero" placeholder="" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Valid last name is required.
                                                        </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address">Bairo</label>
                                                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Nome do Bairro" required="">
                                                    <div class="invalid-feedback">
                                                        Please enter your shipping address.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address2">Complemento <span class="text-muted"></span></label>
                                                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Ponto de Refência" required="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address2">Cidade <span class="text-muted"></span></label>
                                                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Nome de Sua Cidade">
                                                </div>
                                                <hr class="mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                                    <label class="custom-control-label" for="same-address">Concordo com os termos</label>
                                                </div>
                                                <hr class="mb-4">
                                                <input type="submit" value="Concluir Pedido" name="btn-enviar" class="btn btn-primary btn-lg btn-block">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="d-flex justify-content-between align-items-center mb-0">
                                                        <span class="text-muted">Seu Carrinho</span>
                                          <span class="badge badge-secondary badge-pill">3</span>
                                                 </h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group mb-3">
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
                                                        
                                                    mysqli_close($connect);
                                            ?>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <div>
                                                        <h6 class="my-0"><?php echo $rows_produtos['nome']?></h6>
                                                        <small class="text-muted"><?php echo $rows_produtos['descricao']?></small>
                                                    </div>
                                                    <span class="text-muted">R$ <?php echo $rows_produtos['preco']?></span>
                                                </li>
                                            <?php endwhile; ?>

                                                <li class="list-group-item d-flex justify-content-between bg-light">
                                                    <div class="text-success">
                                                        <h6 class="my-0">Promo code</h6>
                                                        <small>EXAMPLECODE</small>
                                                    </div>
                                                    <span class="text-success">-$5</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Total </span>
                                                    <strong>R$ <?php echo $total?></strong>
                                                </li>
                                            </ul>
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
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
    <!-- jquery 3.3.1  -->
    <script src="../admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js-->
    <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="../admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js-->
    <script src="../admin/assets/libs/js/main-js.js"></script>
</body>

 
</html>