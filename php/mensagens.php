<?php
if(isset($_GET["mensagem"])){
	$mensagem = $_GET["mensagem"];
	
	echo "<div class='alert alert-success'>
			<strong>$mensagem!</strong> 
		</div> ";
}

?>
	
	