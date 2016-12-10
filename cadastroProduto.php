<?php ob_start(); 

session_start();

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['email']);
	unset($_SESSION['senha']);

	header('location:login.php');
}

?>
<br>
<h1 style="margin-left: 40px" >Cadastro de Produto</h1>
<br>

<form action="repository/cadastroProduto.php" method="POST" enctype="multipart/form-data">
	
	<div style="margin-left: 20px">
		<label>Nome:</label>
		<input type="text" name="nome" required class="form-control" required placeholder="Informe o nome do Produto">
		<br>

		<label>Valor:</label>
		<input type="text" name="valor_unitario" required class="form-control" required placeholder="Informe o valor do Produto">
		<br>

		<label>Foto:</label>
		<input type="file" name="foto" required required="true" class="form-control">
		<br>

		<button class="btn btn-info"  type="submit">Cadastrar</button>
	</div>
</form>

<?php 
 
  $conteudo = ob_get_contents();
  $titulo = "Cadastro de Produto";
  ob_end_clean();
  include "layout.php";
?>