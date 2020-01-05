<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "crud";
	
	try 
	{
		$pdo = new PDO("mysql:host=$servidor;
			dbname=$banco;
			charset=utf8",
			$usuario,
			$senha);

	} catch (PDOException $erro) 
	{
		$msg = $erro->getMessage();
		echo "<p>Erro ao conectar no banco de dados: $msg </p>";
	}

