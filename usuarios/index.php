<?php
	ob_start();
?>


<div id="formulario">
	<?php include 'formulario.php' ?>
</div>

<br><br>

<div id="tabela"> 
	<?php include 'tabela.php' ?>
</div>


<?php

 	$conteudo = ob_get_contents();

 	ob_end_clean ();

	include '../layout.php';

?>