<?php
	include ('conexaoBanco.php');
	$codigo = $_POST[codigo];
	$nome = $_POST[nome];
	$descricao = $_POST[descricao];
	$arquivo = $_FILES["arquivo"]["name"];

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["arquivo"]["name"]);

	echo $codigo."<br>";
	echo $nome."<br>";
	echo $descricao."<br>";
	echo $target_file."<br>";
	echo $_FILES['arquivo']['tmp_name']."<br>";

	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $target_file)) {
        echo "The file ". basename( $_FILES["arquivo"]["name"]). " has been uploaded.";
    } else {
        echo "Upload failed with error code " . $_FILES['arquivo']['error'];
    }

    $executa1 = $pdo->query("INSERT INTO tasks(Codigo, Nome, Descricao, Arquivo) VALUES ('$_POST[codigo]', '$_POST[nome]', '$_POST[descricao]', '$target_file')");
    header("Location: taskMain.php");
?>