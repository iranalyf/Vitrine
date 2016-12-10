<?php ob_start(); ?>

<br>
<h1 style="margin-left: 40px" >Cadastro de Vendedor do Sistema</h1>
<br>

<form action="repository/cadastroUsuario.php" method="POST" >
	
	<div style="margin-left: 20px" >
		<label>Nome:</label>
		<input type="text" required name="nome" class="form-control" required="true" placeholder="Informe seu nome Completo">
		<br>

		<label>E-Mail:</label>
		<input type="text" name="email" required class="form-control" required="true" placeholder="Informe seu melhor E-Mail">
		<br>

		<label>Senha:</label>
		<input type="password" name="senha" required class="form-control" required="true" placeholder="Informe uma senha Segura">
		<br>

		<label>Confirma senha:</label>
		<input type="password" name="confirmaSenha" required class="form-control" placeholder="Confirme sua senha">
		<br>

		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>

<?php 
 
  $conteudo = ob_get_contents();
  $titulo = "Cadastro de Usuário";
  ob_end_clean();
  include "layout.php";
?>