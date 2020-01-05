<?php
    include('conexao.php');
    include('funcao.php');

    if ( $_POST )
    { 
        foreach ($_POST as $key => $value)
        {
            $$key = trim ( $value );
        }  

    $salario = formataValor( $salario );

    $pdo->beginTransaction();

    if ( empty ( $id ) )
    {       
     $sql = "insert into crud 
     (id, nome, cargo, salario, data) 
     values
     (null, :nome, :cargo, :salario, :data)";

            $consulta = $pdo->prepare( $sql );
            $consulta->bindValue(":nome",$nome);
            $consulta->bindValue(":cargo",$cargo);          
            $consulta->bindValue(":salario",$salario);
            $consulta->bindValue(":data",$data);   

    }
            
        if ( $consulta->execute() ) 
        {    
            $pdo->commit();
            $resultado['msg'] = 'Funcionario Adicionado!!';
        } 
        else 
        {
            $resultado['msg'] = 'Erro ao adicionar!!';
        }
         echo json_encode($resultado);
    }
