
<div class="card-panel">

	<h4 class="center-align">Cadastro de Produtos</h4>
   
	<form id="cadastro">

		<div class="row">
			 <div class="input-field col s12">
		        <input id="nome" type="text" name="nome" required>
		        <label for="nome">Nome</label>
		    </div>
		    <div class="input-field col s12">
		        <input id="email" type="text" name="email" required>
		        <label for="email">Email</label>
		    </div>

		     <div class="input-field col s12">
		        <input id="senha" type="text" name="senha">
		        <label for="senha">Senha</label>
		    </div>

		     <div class="input-field col s12">
		        <input id="confirma_senha" type="text" name="confirma_senha" required>
		        <label for="confirma_senha">Confirma Senha</label>
		    </div>
		 </div>


		<button class="btn waves-effect waves-light" type="submit">
			Salvar
	  	</button>

	  	<div id="mensagem">

	  	</div>

	</form>

</div>


<script type="text/javascript">

	$("#cadastro").submit(function(event){

		//Cancela o evento de submit do formulário
		event.preventDefault();

		//Envio via AJAX com JQuery
		$.ajax({

			url: "../repository/cadastro_usuario.php",
			method : "POST",
			data : $("#cadastro").serialize(),
			success: function(retorno){
				$("#mensagem").html(retorno)
				$("#cadastro").trigger("reset")

				$("#tabela").load("tabela.php")
			
			}
		})


	})

</script>