
<?php
	
include("conexao.php");



$cpf = $_POST['cpf_num'];

//mysql_query("UPDATE clientes SET nome='$nome', dataNas='$nascimento',  sexo='$sexo' WHERE cpf='$cpf'");




$consulta = "SELECT * FROM motoristas ";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//se já tem registros na tabela, ele fala que o email já existe
if($num_regs != 0){
	
	$consulta = "DELETE FROM motoristas WHERE cpf ='$cpf'";
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "O Motorista foi Apagado <b>$nome <br>CPF  $cpf </b>";
	else
		$mensagem = "Não foi possível apagar o Motorista <b>$nome <br> $cpf </b>";
	
	
	
} else{
	$mensagem = "A alteração na pode ser feita";
}

$conexao->close();



echo ('<script>window.location="../index.php?op=cadMoto&mensagem='.$mensagem.'";</script>');

?>


?>