

<!-- Editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">  
            <h5 class="modal-title" id="exampleModalLabel">Editar Funcionario</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form id="formEdital">
				<input hidden  id="id" name="id">
							

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label" >Nome:</label>
						<input type="text" id="nome" class="form-control" required name="nome">
					</div>					
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label" >Cargo:</label>
						<input type="text" id="cargo" class="form-control cargo" required name="cargo">
					</div>					
				</div>
				<div class="row form-group">
					<div class="col-sm-6">
						<label class="control-label">Salario:</label>
						<input type="text" id="salario" onkeyup="k(this);" class="form-control" required name="salario">
					</div>
					<div class="col-sm-6">
						<label class="control-label">Data Nascimento:</label>
						<input type="date" id="data" class="form-control" required name="data">
					</div>
				</div>				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-outline-success">Atualizar</a>
			</form>
            </div>
        </div>
    </div>
</div>
