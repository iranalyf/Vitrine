<?php session_start(); ?>
<!DOCTYPE html>
<html>

<div style="margin-left:470px;margin-top: 200px" >

	<form method="post" action="repository/seguranca.php">

			<h1>Login</h1>
			<br />
			
			<label>E-mail:</label><br />
			<input class="form-control input-lg" size="40" name="email"  /> <br />
			
			<label>Senha:</label><br />
			<input class="form-control input-lg" size="40" type="password" name="senha"/>
			
			<br/>
			<br/>
			<a style="margin-left: 260px;color: red" href="cadastroUsuario.php" >Não sou Cadastrado??</a>
			
			<br/>
			<br/>
			
			<button class="btn btn-success" style="margin-left:340px" >Log in</button>
	
	</form>
</div>
</html>