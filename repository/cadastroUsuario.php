<?php 

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	require "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();


	$comando = $conexao->prepare("INSERT INTO vendedor(nome,email,senha) VALUES (:nome, :email,:senha) ");

	$comando->bindParam(":nome",$nome);
	$comando->bindParam(":email",$email);
	$comando->bindParam(":senha",$senha);

	$comando->execute();

	header("location: ../login.php")	

 ?>