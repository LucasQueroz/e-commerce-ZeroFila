<?php 
    session_start();
    require_once 'db_connect.php';

    $email = $_SESSION['email'];
    $prod_id = $_GET['prod_id'];
    $quantidade = mysqli_real_escape_string($connect, $_POST['quantidade']);
    $item_venda_id = null;
    $valor = 0;
    $id_cliente = $_SESSION['id_usuario'];

    $query_item_venda = mysqli_query($connect, "SELECT item_venda_id FROM item_venda WHERE cliente_id='$id_cliente' AND finalizado='0'");

    if(mysqli_num_rows($query_item_venda) == 0) {
        mysqli_query($connect, "INSERT INTO item_venda (quantidade_itens, valor, cliente_id, finalizado) VALUE ('$quantidade','0','$id_cliente', '0')");

        $query_item_venda = mysqli_query($connect, "SELECT item_venda_id FROM item_venda WHERE cliente_id='$id_cliente' AND finalizado='0'");
        $row_item_venda = mysqli_fetch_assoc($query_item_venda);
        $item_venda_id = $row_item_venda['item_venda_id'];

        
    //echo "Dentro  /////item_venda_id: ";
    //echo $item_venda_id;
    //echo "##############";


    } else {
        $query_item_venda = mysqli_query($connect, "SELECT item_venda_id FROM item_venda WHERE cliente_id='$id_cliente' AND finalizado='0'");
        $row_item_venda = mysqli_fetch_assoc($query_item_venda);
        $item_venda_id = $row_item_venda['item_venda_id'];

        $query_quantidade_itens = mysqli_query($connect, "SELECT quantidade_itens FROM item_venda WHERE cliente_id='$id_cliente' AND finalizado='0'");
        $row_quantidade_itens = mysqli_fetch_assoc($query_quantidade_itens);
        $quantidade_itens = $quantidade + $row_quantidade_itens['quantidade_itens'];

        mysqli_query($connect, "UPDATE item_venda SET valor='0', quantidade_itens='$quantidade_itens' WHERE item_venda_id='$item_venda_id'");
    }

    //echo "Fora  /////item_venda_id: ";
    //echo $item_venda_id;
    //exit();

    $item_produto_sql = "INSERT INTO item_produto (item_venda_id, quantidade, prod_id) VALUE ('$item_venda_id', '$quantidade', '$prod_id')";

    if(mysqli_query($connect, $item_produto_sql)){
        $_SESSION['item_venda_id'] = $item_venda_id;
    } else {
        echo "falha ao adicionar o produtos";
        exit();
    }

    $quare_valor_item_produto = mysqli_query($connect, "SELECT produtos.preco, item_produto.quantidade FROM item_produto JOIN produtos ON item_produto.item_venda_id='$item_venda_id' AND produtos.prod_id=item_produto.prod_id");

    //$rows_valor_item_venda = mysqli_fetch_array($connect, $quare_valor_item_venda);
    //$valor += $rows_valor_item_venda['valor'];

    while ($rows_item_venda = mysqli_fetch_array($quare_valor_item_produto)) {
       $valor += $rows_item_venda['preco'] * $rows_item_venda['quantidade'];
    }

    if(mysqli_query($connect, "UPDATE item_venda SET valor='$valor' WHERE item_venda_id='$item_venda_id'")){
        header('Location: ../view/shopping-cart.php');
        exit();
    } else {
        echo "Erro ao atualizar item venda!";
    }

mysqli_close($connect);