<?php

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	require "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->prepare("SELECT * FROM vendedor where email = :email and senha = :senha");

	$consulta->bindParam(":email",$email);
	$consulta->bindParam(":senha", $senha);

	$consulta->execute();

	$usuario = $consulta->fetch();

	if($usuario == false){
		echo "Usuario ou senha inválidos, por favor volte e tente novamente!!";

	}else{

		session_start();
		$_SESSION['email'] = $usuario['email'];
		header("location: ../cadastroProduto.php");
	}

  ?>