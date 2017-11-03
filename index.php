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
	case "novaCorrida":
		$conteudo = "php/cadCorrida.php";
		$titulo = "Nova Corrida";
		break;
	case "lisCorridas":
		$conteudo = "php/lisCorridas.php";
		break;		
	default	:
		$conteudo = "php/home.php";
		$titulo = "Sistema PHP";
		break;
}
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
<div class="container-fluid">
	<div class="navbar-header">
      <a class="navbar-brand" href="index.php">CARONAS </a>
    </div>
<ul class="nav navbar-nav">
	<li class="active"><a class="config" href="index.php">Home </a></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="?op=listCli">Passageiros <span class="caret"></span></a>

		 <ul class="dropdown-menu">
	<li><a class="config" href="?op=cadCli"> Adicionar Passageiro </a></li>
	<li><a class="config" href="?op=listCli"> Listar Passageiros </a></li>
		</ul>
	</li>	
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="?op=listMoto">Motoristas <span class="caret"></span></a>	
		
		<ul class="dropdown-menu">
	<li><a class="config" href="?op=cadMoto"> Adicionar Motorista </a></li>
	<li><a class="config" href="?op=listMoto">Listar Motoristas</a></li>
		</ul>
	
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="?op=lisCorridas">Corridas <span class="caret"></span></a>	
		<ul class="dropdown-menu">
	<li><a class="config" href="?op=novaCorrida">Nova corrida</a></li>
	<li><a class="config" href="?op=lisCorridas">Listar Corridas</a></li>
		</ul>
</ul>

</div>
</nav>
<div class="container-fluid" >
<?php include($conteudo); ?>


</div>

</body>
<footer class="page-footer blue center-on-small-only" >
	<div class="footer-copyright" color="black">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

        </div>
    </div>
</footer>
</html>