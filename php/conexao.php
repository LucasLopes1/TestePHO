
<?php
// função para conectar ao banco local
function conectar(){
	$servidor = "localhost";
	$usuario = "root";
	$senha= "";
	$bd = "carona";
	
	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
	
}
global $recebeIDcli;
$conexao = conectar();


/*
//função para conectar ao banco hospedado
function conectar(){
	$servidor = "localhost";
	$usuario = "makel783_hugofbd";
	$senha= "hugo123456";
	$bd = "makel783_bd_contatos";
	
	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
	
}

$conexao = conectar();
*/
?>