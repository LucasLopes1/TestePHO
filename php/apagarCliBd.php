
<?php
	
include("conexao.php");



$cpf = $_POST['cpf_num'];

//mysql_query("UPDATE clientes SET nome='$nome', dataNas='$nascimento',  sexo='$sexo' WHERE cpf='$cpf'");




$consulta = "SELECT * FROM clientes ";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

//se já tem registros na tabela, ele fala que o email já existe
if($num_regs != 0){
	
	$consulta = "DELETE FROM clientes WHERE cpf ='$cpf'";
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "O Cliente foi Apagado <b>$nome <br> $cpf </b>";
	else
		$mensagem = "Não foi possível apagar o Cliente <b>$nome <br> $cpf </b>";
	
	
	
} else{
	$mensagem = "A alteração na pode ser feita";
}

$conexao->close();



echo ('<script>window.location="../index.php?op=cadCli&mensagem='.$mensagem.'";</script>');

?>


?>