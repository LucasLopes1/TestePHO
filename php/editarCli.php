
<?php
		
		
	    include("conexao.php");
		
	
	
	$id = $_GET['id'];
	
$consulta = "SELECT * FROM clientes WHERE id = '$id'";
$executar_consulta = $conexao->query($consulta);		
while($registro = $executar_consulta->fetch_assoc()){
	$id = utf8_encode($registro["id"]);
	$nome = utf8_encode($registro["nome"]);
	$data = utf8_encode($registro["dataNas"]);
	$cpf = utf8_encode($registro["cpf"]);
	$sexo = utf8_encode($registro["sexo"]);
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <nav class="navbar navbar-inverse">
	<div class="navbar-header">
      <a class="navbar-brand" href="../?op=listCli">Voltar </a>
    </div>
  </nav>
	 
	 <div class="container">
	<div class="col-md-6">
  
  <div class="container-fluid">
  <form id="addCliBdedi" name="add_frm" action=" addCliBdEdi.php" method="post" enctype="multipart/form-data">
	
		<h2>Editar Passageiro</h2>
	
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" id="nome" class="form-control" name="nome_txt" value="<?=$nome?>" required />
		</div>
		
		<div class="form-group">
			<label for="nascimento">Data de Nascimento: </label>
				 <input type="text" id="nascimento" class="form-control" name="nascimento_txt" value="<?=$data?>" required>
		</div>
		<div class="form-group">
			<label for="cpfe">CPF: <?=$cpf?></label>
			<input type="hidden" name="cpf_num" value="<?=$cpf?>" />
			
		</div>
		<div class="form-group">
			<label for="m">Sexo: </label>
			<input type="radio" id="m" name="sexo_rdo" title="Seu sexo" value="M" checked required />&nbsp;<label for="m">Masculino</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sexo_rdo" title="Seu sexo" value="F" required />&nbsp;<label for="f">Feminino</label>
		
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" >Cadastrar</button>
		</div>
		<div>
			<?php include("mensagens.php"); ?>
		</div>	
	</div>
	</div>
	</div>
</form>