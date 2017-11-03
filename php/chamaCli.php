<?php


include("conexao.php");


$consulta = "SELECT * FROM clientes ORDER BY nome";
$executar_consulta = $conexao->query($consulta);

while($registro = $executar_consulta->fetch_assoc()){
	$nome_cli = utf8_encode($registro["nome"]);	
	echo "<option value='$nome_cli'>$nome_cli</option>";
	/*
	$nome_pais = utf8_encode($registro[""]);
	echo "<option value='$nome_pais'";
	if($nome_pais==utf8_decode($registro_contato["pais"]))
	{
		echo " selected";
	}
	echo ">$nome_pais</option>";*/
}
	
	
	

?>