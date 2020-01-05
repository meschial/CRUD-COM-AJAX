<?php
	include('conexao.php');
	include('funcao.php');

	
	try
	{
		foreach ($_POST as $key => $value)
		{
            $$key = trim ( $value );
        }		

        $salario = formataValor( $salario );

		$sql = "UPDATE crud SET nome = '$nome', cargo = '$cargo', salario = '$salario', data = '$data' WHERE id = '$id'";
		
		if($pdo->exec($sql))
		{
			$resultado['msg'] = 'Atualizado com sucesso!!';
		} 
		else
		{
			$resultado['msg'] = 'Não foi possivel atualizar';
		}

	}
	catch(PDOException $erro)
	{
		$resultado['msg'] = 'Deu ruim!!'.$erro->getMessage();
	}

	echo json_encode($resultado);	
?>