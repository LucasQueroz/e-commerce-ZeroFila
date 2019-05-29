<?php

$hostname = "localhost";
$user = "Admin";
$password = "admin";
$db_name = "base_dados_loja";

$connect = mysqli_connect($hostname, $user, $password, $db_name);
mysqli_set_charset($connect, "utf8"); 

/*if(mysqli_connect_error()){
	print "Falha na conexão" . mysqli_connect_error();
 }
 else{
	print "Sem falha na conexão com o Banco de Dados";
}*/
?>