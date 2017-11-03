<div class="container">
<?php
	echo"<h2>Listagem de Motoristas</h2>";
	
?>

<form id="resultBd" name="add_frm" action="php/resultBuscaMoto.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<div><label for="buscar">Digite o Nome que deseja procurar</label></div>
	<div class="col-sm-4">
	<input type="text" name="buscar_nome" class="form-control" placeholder="insira o nome" />
	</div>
	
	<div class="form-group">
<button type="submit" class="btn btn-primary" >Buscar</button>
	</div>
</form>
<table class="table table-striped">
	<tr>
		<th>Nome</th><th>Data de nascimento	</th><th>Modelo</th><th>cpf</th><th>Sexo</th><th>Status</th><th></th><th></th>
	</tr>
	<?php
		include("chamaListMoto.php");
	?>
</table>
</div>