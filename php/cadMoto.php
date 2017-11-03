
<div class="container">
<?php
echo "<h2>Cadastrar Motorista</h2>";

?>

	<div class="col-md-6">
<form id="addMotoBd" name="add_frm" action="php/addMotoBd.php" method="post" enctype="multipart/form-data">
	
		
		<div>
			<label for="nome">Nome: </label>
			<input type="text" id="nome" class="form-control" name="nome_txt" placeholder="Escreva seu nome" title="Seu Nome" required />
		</div>
		
		<div>
			<label for="nascimento">Data de Nascimento: (aaaa-mm-dd)</label>
				 <input type="text" class="form-control" placeholder="Ex.: aaaa-mm-dd"  maxlength="10" autocomplete="off" required />
		</div>
		<div>
			<label for="CPF">CPF: </label>
			<input type="text" id="cpf" class="form-control" name="cpf_num" maxlength="11" placeholder="Insira seu CPF" title="Seu cpf" required />
		</div>
		<div>
			<label for="nome">Modelo Do Carro: </label>
			<input type="text" id="carro" class="form-control" name="carro_txt" placeholder="Insira o modeo do carro" title="Seu Nome" required />
		</div>
		<div>
			<label for="m">Sexo: </label>
			<input type="radio" id="m" name="sexo_rdo" title="Seu sexo" value="M" required />&nbsp;<label for="m">Masculino</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sexo_rdo" title="Seu sexo" value="F" required />&nbsp;<label for="f">Feminino</label>
		
		</div>
		<div>
			<label for="i">Status: </label>
			<input type="radio" id="a" name="status_rdo" title="Seu Status" value="A" required />&nbsp;<label for="a">Ativo</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="i" name="status_rdo" title="Seu Status" value="I" required />&nbsp;<label for="i">Inativo</label>
		
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" >Cadastrar</button>
		</div>
			
 <?php include("php/mensagens.php"); ?>
	
	
</form>
</div>
</div>