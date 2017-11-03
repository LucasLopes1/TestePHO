
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
      <a class="navbar-brand" href="../?op=listCli">Voltar </a>
    </div>
  </nav>
  <div class="container">
<?php
		
		include("conexao.php");
		
		$busca= $_POST["buscar_nome"];
		
$consulta = "SELECT * FROM clientes WHERE nome='$busca' ORDER BY nome";
$executar_consulta = $conexao->query($consulta);		


$num_regs = $executar_consulta->num_rows;
		if($num_regs==0){
		echo "Nenhum registro encontrado: $busca";}else{
while($registro = $executar_consulta->fetch_assoc()){
	$id = $registro["id"];
	$nome = utf8_encode($registro["nome"]);
	$data = utf8_encode($registro["dataNas"]);
	$cpf = utf8_encode($registro["cpf"]);
	$sexo = utf8_encode($registro["sexo"]);	
	echo "
	
	<h2>Reultado da busca</h2>
	
	<table class='table table-striped'><tr><td>$nome</td><td>$data</td><td>$cpf</td><td>$sexo</td><td><a href=../php/editarCli.php?id=$id/>Editar </a></td>
	<td><a href=../php/apagarCli.php?id=$id/>Apagar </a></td>
	</tr></table>";
	
	
		}}
	echo "<br><br><a href='../index.php?op=listCli' > Voltar</a>";
	?>
	</div>