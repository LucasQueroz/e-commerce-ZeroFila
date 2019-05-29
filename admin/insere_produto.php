<?php 
	//session_start();
	
	include_once 'header.php';
	//include_once 'view/message.php'; 
	
?>

<section id="corpo">
<!DOCTYPE html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->  
</head>
<body>

<form class="form-horizontal" method="post" action="/www/ZeroFila/admin/class/InserirProduto.php">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Inserir Produto</div>
    
    <div class="panel-body">
<div class="form-group">
<!--
<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
</div>
<div class="col-md-4 control-label">
    <h1>Cadastro de Cliente</h1>
    
</div>
</div>
    -->
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome do Produto<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="Descricao">Descrição do Produto<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Descricao" name="Descricao" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="Imagem">Nome da imagem <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Imagem" name="Imagem" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Valor">Valor <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="Valor" name="Valor" placeholder="R$ 00.00" class="form-control input-md" required="" type="text" maxlength="11"> <!-- pattern="[0-9]+$" -->
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>
</fieldset>
</form>

</section>