<?php

	require "../config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$nome = $_POST['nome'];
	$valor_unitario = $_POST['valor_unitario'];
	$foto = $_FILES['foto'];

	$comando = $conexao->prepare("insert into produto(nome,valor_unitario,foto) values (:nome, :valor_unitario, :foto) ");

	$comando->bindParam(":nome", $nome);
	$comando->bindParam(":valor_unitario", $valor_unitario);

	$caminho = "../upload/" . $foto["name"];

	move_uploaded_file($foto["tmp_name"], $caminho);

	$url = "http://localhost/Vitrine/upload/" . $foto["name"];

	$comando->bindParam(":foto", $url);

	$comando->execute();

	header("location: ../index.php");

  ?>