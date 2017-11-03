
<?php
		
		include("conexao.php");

$consulta = "SELECT * FROM motoristas ORDER BY nome";
$executar_consulta = $conexao->query($consulta);		
while($registro = $executar_consulta->fetch_assoc()){
	$id = $registro["id"];
	$nome = utf8_encode($registro["nome"]);
	$data = utf8_encode($registro["dataNas"]);
	$cpf = utf8_encode($registro["cpf"]);
	$sexo = utf8_encode($registro["sexo"]);
	$status = utf8_encode($registro["status"]);
	$modcar = utf8_encode($registro["modcar"]);	
	echo "<tr><td>$nome</td><td>$data</td><td>$modcar</td><td>$cpf</td><td>$sexo</td><td>$status</td>
	<td><a href=php/editarMoto.php?id=$id/>Editar </a></td>
	<td><a href=php/apagarMoto.php?id=$id/>Apagar </a></td>
	</tr>";
	
	
}
	

?>

