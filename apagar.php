<?php
	include('conexao.php');

	try
	{

    if ( isset ( $_POST["id"] ) ) 
    {
      $id = trim ( $_POST["id"] );
    }
    
		$sql = "DELETE FROM crud WHERE id = $id";

		if($pdo->exec($sql))
		{
			$resultado['msg'] = 'Funcionario excluido com sucesso';
		}
		else
		{			
			$resultado['msg'] = 'Não foi possivel excluir!!';
		} 
	}
	catch(PDOException $erro)
	{		
		$resultado['msg'] = $erro->getMessage();
	}
	echo json_encode($resultado);

?>