<?php
include('conexao.php');


		$id = $_POST['id'];
		$pdo = $pdo->prepare("SELECT * FROM crud WHERE id = :id");
		$pdo->bindParam(':id', $id);
		$pdo->execute();
				foreach($pdo as $row)
					{
						$resultado["id"]	 	= $row["id"];
						$resultado["nome"] 		= $row["nome"];
						$resultado["cargo"] 	= $row["cargo"];
						$salario  			 	= $row["salario"];
						$resultado["salario"]	= $salario = number_format($salario, 2, ",", ".");
						$resultado["data"]  	= $row["data"];						
					}

	$resultado['data'] = $resultado;
	echo json_encode($resultado);	
	
?>

					