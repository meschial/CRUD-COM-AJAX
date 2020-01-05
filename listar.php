
<?php
include("conexao.php");

  try
  {

  if ( $_POST )
  {
      if ( isset ( $_POST["busca"] ) )
      {
        $busca = trim ( $_POST["busca"] );
      }

    

    $sql = ("SELECT *, date_format(data, '%d/%m/%Y') data FROM crud WHERE id LIKE '%$busca%' OR nome LIKE '%$busca%' OR cargo LIKE '%$busca%' OR salario LIKE '%$busca%' OR data LIKE '%$busca%'");

    $consulta = $pdo->prepare($sql);
    $consulta->execute();

  }
  else
  {
    $sql = ("SELECT *, date_format(data, '%d/%m/%Y') data FROM crud");
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
  }
    foreach($consulta AS $linha)
    { 
       $id      = $linha['id'];
       $nome    = $linha['nome'];
       $cargo   = $linha['cargo'];
       $data    = $linha['data'];
       $salario = $linha['salario'];
       $salario = number_format($salario, 2, ",", ".");

      echo "
        <tr>
            <td>$id</td>
            <td>$nome</td>  
            <td>$cargo</td>
            <td>$salario</td>
            <td>$data</td>
          <td>       
            <button type='button' class='btn btn-outline-success editarFuncionario' data-target='#modalEditar' data-id='$id'>Editar</button>        
            <button type='button' class='btn btn-outline-danger excluir' data-id='$id'>Excluir</button>
          </td>
        </tr>";
    }

  }
  catch(PDOException $erro)
  {
      echo 'Deu ruim!!'. $erro->getMessage();
  }
?>