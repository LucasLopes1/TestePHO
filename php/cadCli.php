<div class="container">
<?php
echo "<h2>Cadastar Passageiro</h2>";

?>



	<div class="col-md-6">
<form id="addCliBd" name="add_frm"  action="php/addCliBd.php" method="post" enctype="multipart/form-data">
	
		
		
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" class="form-control"  name="nome_txt" placeholder="Escreva seu nome" title="Seu Nome" required />
		</div>
		
		<div class="form-group">
			<label for="nascimento">Data de Nascimento (aaaa-mm-dd): </label>
			<input type="text" id="nascimento" class="form-control" name="nascimento_txt"  placeholder="Ex.: aaaa-mm-dd" required>
		</div>
		<div class="form-group">
			<label for="cpfe">CPF: </label>
			<input type="text" id="cpf" class="form-control" name="cpf_num" maxlength="11" placeholder="Insira Cpf" title="Seu cpf" required />
		</div>
		<div class="form-group">
			<label for="m">Sexo: </label>
			<input type="radio" id="m" name="sexo_rdo" title="Seu sexo" value="M" required />&nbsp;<label for="m">Masculino</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sexo_rdo" title="Seu sexo" value="F" required />&nbsp;<label for="f">Feminino</label>
		
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" >Cadastrar</button>
		</div>
	 <?php include("php/mensagens.php"); ?>
		
	
</form>
</div>
</div>