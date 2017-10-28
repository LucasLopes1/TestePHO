<?php
echo 'Cadastrar Cliente';

?>
<form id="addCliBd" name="add_frm" action="php/addCliBd.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Adicionar Cliente</legend>
		
		<div>
			<label for="nome">Nome: </label>
			<input type="text" id="nome" class="config" name="nome_txt" placeholder="Escreva seu nome" title="Seu Nome" required />
		</div>
		
		<div>
			<label for="nascimento">Data de Nascimento: </label>
				 <input type="text" id="nascimento" class="config" name="nascimento_txt" placeholder="Clique para Inserir" required>
		</div>
		<div>
			<label for="telefone">CPF: </label>
			<input type="text" id="cpf" class="config" name="cpf_num" placeholder="Insira Cpf" title="Seu cpf" required />
		</div>
		<div>
			<label for="m">Sexo: </label>
			<input type="radio" id="m" name="sexo_rdo" title="Seu sexo" value="M" required />&nbsp;<label for="m">Masculino</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sexo_rdo" title="Seu sexo" value="F" required />&nbsp;<label for="f">Feminino</label>
		
		</div>
		<div>
			<input type="submit" id="enviar-add" class="config" name="enviar_btn" value="Adicionar" />
		</div>
			<?php include("php/mensagens.php"); ?>
	</fieldset>
</form>