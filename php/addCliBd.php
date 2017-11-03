<?php
//variaveis que serão usadas no formulário


$nome = $_POST["nome_txt"];
$nascimento = $_POST["nascimento_txt"];
$cpf = $_POST["cpf_num"];
$sexo = $_POST["sexo_rdo"];





include("conexao.php");
$consulta = "SELECT * FROM clientes WHERE cpf='$cpf'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//se já tem registros na tabela, ele fala que o email já existe
if($num_regs == 0){
	
	$consulta = "INSERT INTO clientes (nome, dataNas, cpf, sexo) VALUES 
	('$nome','$nascimento','$cpf','$sexo')";
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "O Passageiro foi registrado <b>$nome <br> $cpf </b>";
	else
		$mensagem = "Não foi possível registrar o Passageiros <b>$nome <br> $cpf </b>";
	
	
	
} else{
	$mensagem = "O registro não será feito pois este CPF já está cadastrado!!";
}

$conexao->close();



echo ('<script>window.location="../index.php?op=cadCli&mensagem='.$mensagem.'";</script>');

?>

