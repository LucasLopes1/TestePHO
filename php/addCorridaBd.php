<?php
//variaveis que serão usadas no formulário


$nomeMoto = $_POST["Moto_slc"];
$nomeCli = $_POST["Cli_slc"];
$valor= $_POST["valor_num"];






include("conexao.php");






	
	$consulta = "INSERT INTO corridas (nomeMoto, nomeCli, valor) VALUES 
	('$nomeMoto','$nomeCli','$valor')";
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "Adicionada a Corrida do Motorista  <b>$nomeMoto</b> <br>com o cliente <b> $nomeCli</b> no valor de  <b>$valor</b> reais";
	else
		$mensagem = "Não foi possivel registar a corrida de Motorista <b>$nomeMoto</b> <br>com cliente $nomeCli <br>no valor de <b>$valor</b>";
	
	


$conexao->close();



echo ('<script>window.location="../index.php?op=novaCorrida&mensagem='.$mensagem.'";</script>');
?>


