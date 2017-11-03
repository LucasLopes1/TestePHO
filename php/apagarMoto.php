
<?php
		
		
	    include("conexao.php");
		 
	
	
	$id = $_GET['id'];

	
$consulta = "SELECT * FROM motoristas WHERE id = '$id' ";
$executar_consulta = $conexao->query($consulta);		
while($registro = $executar_consulta->fetch_assoc()){
	$id = utf8_encode($registro["id"]);
	$nome = utf8_encode($registro["nome"]);
	$data = utf8_encode($registro["dataNas"]);
	$cpf = utf8_encode($registro["cpf"]);
	$sexo = utf8_encode($registro["sexo"]);
	$status = utf8_encode($registro["status"]);
	$modcar = utf8_encode($registro["modcar"]);	
	
}


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <div class="container-fluid">
<form id="addCliBdedi" name="add_frm" action="apagarMotoBd.php" method="post" enctype="multipart/form-data">
	
		<h2>Apagar Motorista</h2>
	
		<div class="form-contro">
			<label for="nome">Nome: <?=$nome?> </label>
			
		</div>
		
		<div class="form-contro">
			<label for="nascimento">Data de Nascimento:<?=$data?> </label>
				
		</div>
		
			<div class="form-contro">
				<label for="cpfe" >CPF:<?=$cpf?></label>
				<input type="hidden" name="cpf_num" value="<?=$cpf?>" />
			</div>
		<div>
			<label for="nome">Modelo Do Carro: <?=$modcar?> </label>
			</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary" >Apagar</button>
		</div>
			<?php include("mensagens.php"); ?>
			
	</div>
</form>
