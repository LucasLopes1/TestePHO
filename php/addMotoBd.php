<?php
//variaveis que serão usadas no formulário


$nome = $_POST["nome_txt"];
$nascimento = $_POST["nascimento_txt"];
$cpf = $_POST["cpf_num"];
$carro = $_POST["carro_txt"];
$sexo = $_POST["sexo_rdo"];
$status = $_POST["status_rdo"];





include("conexao.php");
$consulta = "SELECT * FROM motoristas WHERE cpf='$cpf'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//se já tem registros na tabela, ele fala que o email já existe
if($num_regs == 0){
	
	$consulta = "INSERT INTO motoristas (nome, dataNas, cpf, modcar, sexo, status) VALUES 
	('$nome','$nascimento','$cpf','$carro','$sexo', '$status')";
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "O Motorista foi registrado <b>$nome <br> $cpf </b>";
	else
		$mensagem = "Não foi possível registrar o Motorista <b>$nome <br> $cpf </b>";
	
	
	
} else{
	$mensagem = "O registro não será feito pois este contato já está cadastrado!!";
}

$conexao->close();



echo ('<script>window.location="../index.php?op=cadMoto&mensagem='.$mensagem.'";</script>');

?>

