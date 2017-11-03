<form id="addCorrida" action="php/addCorridaBd.php" method="post" enctype="multpart/from-data">	


<div class="container">
	<div class="col-md-6">
	<h2>Adicionar Corrida</h2>
		<div class="form-group">
			<label for="Cli">Cliente: </label>
			<select id="Cli" class="form-control" name="Cli_slc" required>
				<option value="">- - -</option>
				<?php include("chamaCli.php"); ?>
			</select>
		</div>

		<div class="form-group">
			<label for="Moto">Motorista: </label>
			<select id="Moto" class="form-control" name="Moto_slc" required >
				<option value="">- - -</option>
				<?php include("chamaMoto.php"); ?>
			</select>
		</div>
		<div class="form-group">
			<label for="valor">Valor: </label>
			<input type="text" id="valor" class="form-control" name="valor_num" placeholder="Insira o valor" title="Total" required />
		</div>	
				<div class="form-group">
		<button type="submit" class="btn btn-primary" >Cadastrar</button>
				</div>

		<?php include("php/mensagens.php"); ?>


	</div>
</div>	
</form>