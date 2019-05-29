<?php 
	//Sessão
	//session_start();
	// Verifica se existe a seção mensagem
	if(isset($_SESSION['mensagem'])): ?>
	<script>
	//Exibe uma mensagem em um toast
		window.onload = function(){
			M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
		};
	</script>

	<?php 
	endif;

	// Termina a sessão, limpa a sessão
	session_unset();
?>