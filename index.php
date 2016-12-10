<?php ob_start(); 
session_start();

	require "config/BancoDados.php";

	$conexao = BancoDados::criar_conexao();

	$consulta = $conexao->prepare("select * from produto");

	$consulta->execute();

	$produtos = $consulta->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
 <?php foreach ($produtos as $p): ?>
          <div class="row placeholders">

            <div class="col-xs-6 col-sm-3 placeholder">
              <img src ="<?= $p["foto"]?>" height="100" width="180" >
              <h4><? echo $p["nome"] ?></h4>
              <span class="text-muted"><? echo $p["valor_unitario"] ?></span>
             <br>
            </div>
          
          </div>
  <?php endforeach; ?>
</body>
</html>

<?php 
 
  $conteudo = ob_get_contents();
  $titulo = "Página Incial";
  ob_end_clean();
  include "layout.php";
?>