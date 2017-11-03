<h2>Resultado da Busca</h2>
<?php
		
		include("conexao.php");
		
		$busca = $_POST["buscar_nome"];

$consulta = "SELECT * FROM motoristas WHERE nome='$busca'ORDER BY nome";
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
	$status = utf8_encode($registro["status"]);
	$modcar = utf8_encode($registro["modcar"]);	
	echo "
	<table>
	<tr><td>$nome</td><td>$data</td><td>$modcar</td><td>$cpf</td><td>$sexo</td><td>$status</td>
	<td><a href=php/editarMoto.php?id=$id/>Editar </a></td>
	<td><a href=php/apagarMoto.php?id=$id/>Apagar </a></td>
	</tr>
	</table>";
	
	
		}}
	echo "<br><br><a href='../index.php?op=listMoto' > Voltar</a>";

?>

