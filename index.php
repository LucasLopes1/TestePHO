<?php 
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];
switch($op){
	case "cadCli":
		$conteudo = "php/cadCli.php";
		$titulo = "Adicionar Cliente";
		break;
		
	case "listCli":
		$conteudo = "php/listCli.php";
		$titulo = "Listar Clientes";
		break;
		
	case "cadMoto":
		$conteudo = "php/cadMoto.php";
		$titulo = "Adiconar Motorista";
		break;
		
	case "listMoto":
		$conteudo = "php/listMoto.php";
		$titulo = "Listar Motoristas";
		break;
		
	default	:
		$conteudo = "php/home.php";
		$titulo = "Sistema PHP";
		break;
}
?>
<body>
<section id="conteudo">
<nav>
<ul>
<a class="config" href="index.php"><li> Home </li></a>
<a class="config" href="?op=cadCli"><li> Adicionar Cliente</li> </a>
<a class="config" href="?op=listCli"> <li>Listar Clientes</li> </a>
<a class="config" href="?op=cadMoto"> <li>Adicionar Motorista </li></a>
<a class="config" href="?op=listMoto"><li>Listar Motoristas</li></a>

</ul>

</nav>
<section id="principal">
<?php include($conteudo); ?>
</section>

</section>

</body>
</html>