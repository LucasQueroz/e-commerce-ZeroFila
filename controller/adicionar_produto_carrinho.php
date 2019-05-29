<?php 
    session_start();
    require_once 'db_connect.php';

    $email = $_SESSION['email'];
    $prod_id = $_GET['prod_id'];
    //$prod_id = $_POST['prod_id'];

    $cliente_select = "SELECT id FROM clientes WHERE email = '{$email}'";
    $item_venda_select = $cliente_select;
    $cliente_query = mysqli_query($connect ,$item_venda_select);

    $row_cliente = mysqli_fetch_array($cliente_query);

    $item_venda_id = $row_cliente['id'];

    $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
    
    $item_produto_sql = "INSERT INTO item_produto (item_venda_id, quantidade, prod_id) VALUE ('$item_venda_id', '$quantidade', '$prod_id')";
    
    if(mysqli_query($connect, $item_produto_sql)){
        header('Location: ../view/carrinho_compras.php');
    } else {
        echo "falha ao adicionar o produtos";
    }

    /*echo ' email: '.$email;
    echo ' item_venda: '.$item_venda_id;
    echo ' quantidade: '.$quantidade;*/
?>