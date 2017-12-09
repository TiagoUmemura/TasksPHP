<?php
	include ('conexaoBanco.php');
	$login = $_POST[login];
	$password = $_POST[pwd];
	echo $login."<br>";
	echo $password;

	$executa1 = $pdo->query("INSERT INTO user(login, password) VALUES ('$_POST[login]', '$_POST[pwd]')");
	if($executa1) {
		echo ("<script>alert('Dados inseridos com sucesso!');window.location.assign('../project1');</script>");
	}

?>