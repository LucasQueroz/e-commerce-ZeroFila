<?php

session_start();
include('../controller/db_connect.php');

$item_produto_id = $_GET['item_produto_id'];

$sql = "DELETE FROM item_produto WHERE item_produto_id='$item_produto_id'";

if (mysqli_query($connect, $sql)) {
    header('Location: ../view/shopping-cart.php');
} else {
    echo "Error deleting record: ";
}
mysqli_close($connect);