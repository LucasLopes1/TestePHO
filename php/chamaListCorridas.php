
<?php
		
		include("conexao.php");

$consulta = "SELECT * FROM corridas ORDER BY id";
$executar_consulta = $conexao->query($consulta);		
while($registro = $executar_consulta->fetch_assoc()){
	$id = $registro["id"];
	$nomeMoto = utf8_encode($registro["nomeMoto"]);
	$nomeCli = utf8_encode($registro["nomeCli"]);
	$valor = utf8_encode($registro["valor"]);
	
	echo "<tr><td>$nomeMoto</td><td>$nomeCli</td><td>$valor</td>
	
	</tr>";
	
	
}
	

?>
