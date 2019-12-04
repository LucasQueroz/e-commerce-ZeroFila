<?php 

session_start();
include('../controller/db_connect.php');
$usuario_id = $_SESSION['id_usuario'];

$sql_endereco = "SELECT usuario_id FROM local_entrega WHERE usuario_id='{$usuario_id}'";
$result = mysqli_query($connect, $sql_endereco);
$num_rows_endereco = mysqli_num_rows($result);

if($num_rows_endereco == 0){
	header('Location: ../view/ecommerce-product-checkout.php');
} else if($num_rows_endereco == 1){
	header('Location: ../controller/finalizar_compra.php');
}

mysqli_close($connect);