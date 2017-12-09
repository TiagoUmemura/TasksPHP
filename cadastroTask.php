<?php
	include ('conexaoBanco.php');
	$codigo = $_POST[codigo];
	$nome = $_POST[nome];
	$descricao = $_POST[descricao];
	$arquivo = $_POST[arquivo];

	echo $codigo."<br>";
	echo $nome."<br>";
	echo $descricao."<br>";
	echo $arquivo."<br>";
?>