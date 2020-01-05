<html>
<head>
	<meta charset="utf-8">
	<title>CRUD PDO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Cadastro de Funcionario</h1>
	    <p class="lead"> Crud de funcionario com PHP usando PDO e AJAX!!</p>
	  </div>
	</div>

<div class="container">
  <div class="form-row">
    <div class="col">
      <button type="button" class="btn btn-outline-primary" style="margin-bottom: 15px;" data-toggle="modal" data-target="#modalAdicionar">Novo Funcionario</button>
    </div>

    <div class="col">
      <input id="busca" type="search" class="form-control" style="margin-bottom: 15px;" placeholder="Buscar Funcionario">
    </div>
  </div>
</div>

	<div class="container">
			<table id="user_data" class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
						<td width="5%">ID</td>
						<td width="30%">Nome Completo</td>
						<td width="15%">Cargo</td>
						<td width="10%">Salario</td>
						<td width="20%">Data De Nascimento</td>
						<td width="20%">Ação</td>
					</tr>
				</thead>
				<tbody id="tbody"></tbody>
			</table>	
	</div>


<?php 
	include('modalEditar.php'); 
	include('modalNovo.php'); 
?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>   
<script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>

</body>

</html>