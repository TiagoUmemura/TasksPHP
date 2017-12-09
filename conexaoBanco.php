<?php
	$pdo =new PDO ("mysql: host=localhost; dbname=tasksphp", "root", "root");
	if (!$pdo){
		die ('Erro ao criar conexão');
	}
?>