<?php 

	require_once "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->query("SELECT * FROM usuario");

	$consulta->execute();

	$usuarios = $consulta->fetchAll();

?>

<div class="card-panel">

	<h4 class="center-align">Usuarios Cadastrados no Sistema</h4>

	<table class="responsive-table highlight bordered">
	    <thead>
		    <tr>
		    	<th>Código</th>
		    	<th>Nome</th>
		    	<th>Email</th>	    	
		    	<th>Excluir</th>
		    </tr>
	    </thead>
	    	
	    <tbody>

	    	<?php foreach ($usuarios as $u): ?>

	    		<tr>
	    			<td><?= $u["idUsuario"] ?></td>
	    			<td><?= $u["nome"] ?></td>
	    			<td><?= $u["email"] ?></td>
	    			<td> <a href="#tabela" onclick="excluir(<?=$u["idUsuario"]?>)">Excluir</a> </td>

	    		</tr>


	    	<?php endforeach; ?>
	    	
	    </tbody>
	    
	</table>


</div>

<!-- <script type="text/javascript">

	function excluir(codigomedico){
		$.ajax({
			url : "../php/excluir_medico.php",
			method : "GET",
			data : { id : codigomedico},
			success : function(retorno){
				//mensagem retorno
				$("#tabela").load("tabela.php")
			}
		})
	}

</script> -->