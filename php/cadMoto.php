
<?php
echo 'Cadastrar Cliente';

?>
<form id="addMotoBd" name="add_frm" action="php/addMotoBd.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Adicionar Motorista</legend>
		
		<div>
			<label for="nome">Nome: </label>
			<input type="text" id="nome" class="config" name="nome_txt" placeholder="Escreva seu nome" title="Seu Nome" required />
		</div>
		
		<div>
			<label for="nascimento">Data de Nascimento: </label>
				 <input type="text" id="nascimento" class="config" name="nascimento_txt" placeholder="Clique para Inserir" required>
		</div>
		<div>
			<label for="CPF">CPF: </label>
			<input type="text" id="cpf" class="config" name="cpf_num" placeholder="Insira seu CPF" title="Seu cpf" required />
		</div>
		<div>
			<label for="nome">Modelo Do Carro: </label>
			<input type="text" id="carro" class="config" name="carro_txt" placeholder="Insira o modeo do carro" title="Seu Nome" required />
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
		<div>
			<input type="submit" id="enviar-add" class="config" name="enviar_btn" value="Adicionar" />
		</div>
			<?php include("php/mensagens.php"); ?>
	</fieldset>
</form>