<?php
		
		include("conexao.php");
		
		
		
$consulta = "SELECT * FROM clientes ORDER BY nome";
$executar_consulta = $conexao->query($consulta);		
while($registro = $executar_consulta->fetch_assoc()){
	$id = $registro["id"];
	$nome = utf8_encode($registro["nome"]);
	$data = utf8_encode($registro["dataNas"]);
	$cpf = utf8_encode($registro["cpf"]);
	$sexo = utf8_encode($registro["sexo"]);	
	echo "<tr><td>$nome</td><td>$data</td><td>$cpf</td><td>$sexo</td><td><a href=php/editarCli.php?id=$id/>Editar </a></td>
	<td><a href=php/apagarCli.php?id=$id/>Apagar </a></td>
	</tr>";
	
	
	}?>