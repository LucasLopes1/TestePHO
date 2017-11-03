
<?php
		
		
	    include("conexao.php");
		 
	
	
	$id = $_GET['id'];

	
$consulta = "SELECT * FROM clientes WHERE id = '$id' ";
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
  
  <div class="container-fluid">
	<div class="col-md-6">
		 
		  <form id="addCliBdedi" name="add_frm" action="apagarCliBd.php" method="post" enctype="multipart/form-data">
			
				<h2>Apagar Passageiro</h2>
			
				<div>
					<label for="nome">Nome: <?=$nome?> </label>
					
				</div>
				
				<div>
					<label for="nascimento">Data de Nascimento:<?=$data?> </label>
						
				</div>
				<div>
					<label for="cpfe" >CPF:<?=$cpf?></label>
					<input type="hidden" name="cpf_num" value="<?=$cpf?>" />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" >Apagar</button>
				</div>
					<?php include("mensagens.php"); ?>
					
			
		</form>
		
	</div>
	</div>
	</div>
</div>