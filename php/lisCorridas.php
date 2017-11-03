
<div class="container">
<?php
	echo"<h2>Listagem de corridas</h2>";
	
?>



<table class="table table-striped">
	<tr>
		<th>Motorista</th><th>Passgeiro</th><th>Valor</th> 
	</tr>
	<?php
		include("chamaListCorridas.php");
	?>
</table>
</div>