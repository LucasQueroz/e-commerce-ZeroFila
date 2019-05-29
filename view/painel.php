<?php 
	session_start();
	include_once('../model/verifica_login.php');
 ?>

 <h2>Olá, <?php echo $_SESSION['email'];?></h2>
 <h2><a href="../model/logout.php">Sair</a></h2>