$(document).ready(function(){
	buscar();
	//adicionar
	$('#adicionarFuncionario').click(function(){
		$('#modalAdicionar').modal('show');
	});
	$('#formFuncionario').submit(function(e){
		e.preventDefault();
		var formFuncionario = $(this).serialize();		
		$.ajax({
			type: 'POST',
			url: 'salvar.php',
			data: formFuncionario,
			dataType: 'json',
			success: function(resultado){
				$('#formFuncionario')[0].reset();
				$('#modalAdicionar').modal('hide');	
				alert(resultado.msg);								
				buscar();

			}

		});
	});

	//editar
	$(document).on('click', '.editarFuncionario', function(){
		var id = $(this).data('id');
		getId(id);
		$('#modalEditar').modal('show');
	});
	$('#formEdital').submit(function(e){
		e.preventDefault();
		var formEdital = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'editar.php',
			data: formEdital,
			dataType: 'json',
			success: function(resultado){
				buscar();
				alert(resultado.msg);
				$('#modalEditar').modal('hide');
			}
		});
	});	

	//excluir
	$(document).on('click', '.excluir', function(){
		var id = $(this).data('id');
		getId(id);
		$.ajax({
			type: 'POST', 
			url: 'apagar.php',
			data: {id:id},
			dataType: 'json',
			success: function(resultado){
				alert(resultado.msg);
				buscar();			
				
			}
		});
	});

	//listar
	function buscar(){
		$.ajax({
			type: 'POST',
			url: 'listar.php',
			success: function(resultado){
				$('#tbody').html(resultado);
			}
		});
	}

	//buscar
	 $("#busca").keyup(function(){
	        var busca = $("#busca").val();
	        $.ajax({
	        	type: 'POST', 
				url: 'listar.php',
				data: {busca: busca},
				success: function(resultado){				
					$('#tbody').html(resultado);
				}
	        });
	     });

	 //id
	function getId(id){
		$.ajax({
			type: 'POST',
			url: 'listar_linha.php',
			data: {id:id},
			dataType: 'json',
			success: function(resultado){
				
					$('#id').val(resultado.data.id);
					$('#nome').val(resultado.data.nome);
					$('#cargo').val(resultado.data.cargo);
					$('#salario').val(resultado.data.salario);
					$('#data').val(resultado.data.data);			
			}
		});
	}

});
 
  	function k(i) {
	var v = i.value.replace(/\D/g,'');
	v = (v/100).toFixed(2) + '';
	v = v.replace(".", ",");
	v = v.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");
	v = v.replace(/(\d)(\d{3}),/g, "$1.$2,");
	i.value = v;
}




