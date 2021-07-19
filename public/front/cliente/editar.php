<?php 
	$url = "http://".$_SERVER['HTTP_HOST']."/public/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body style="padding:10px">
    <div class="container">
        <div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom:10px">
        		<a href="<?php echo $url ?>/front/index.php" class="btn btn-info">Voltar</a>
        	</div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Listagem de Clientes</h3>
                    </div>
                    <div class="panel-body">
	                    <form id="formCliente">
	                    	<input type="hidden" name="csrf-token" id="csrf-token" value="">
	                    	<input type="hidden" name="id" id="id" value="">
		                    <div class="row">
		                    	<div class="col-md-12 col-sm-12 col-xs-12">
		                    		<h4>Dados do Cliente</h4>
		                    		<small>Campos com <b>*</b> são campos obrigatórios</small>
		                    	</div>
		                        <div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
									    <label for="nome">Nome *</label>
									    <input type="text" class="form-control" name="nome" id="nome"  placeholder="" required="">
									</div>
		                        </div>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
									    <label for="nome">Data de Nascimento *</label>
									    <input type="date" class="form-control" name="data_nascimento" id="data_nascimento"  placeholder="" required="">
									</div>
		                        </div>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
									    <label for="nome">Sexo *</label>
									    <select class="form-control" name="sexo" id="sexo" required="">
									    	<option class="">Selecione</option>
									    	<option class="m">Masculino</option>
									    	<option class="f">Feminino</option>
									    </select>
									</div>
		                        </div>
		                    </div>
		                    <hr/>
		                    <div class="row">
		                    	<div class="col-md-12 col-sm-12 col-xs-12">
		                    		<h4>Dados do Endereço</h4>
		                    	</div>
		                        <div class="col-md-3 col-sm-3 col-xs-12">
									<div class="form-group">
									    <label for="cep">CEP</label>
									    <input type="text" class="form-control" name="cep" id="cep"  placeholder="">
									</div>
		                        </div>
		                        <div class="col-md-9 col-sm-9 col-xs-12">
									<div class="form-group">
									    <label for="nome">Endereço</label>
									    <input type="text" class="form-control" name="endereco" id="endereco"  placeholder="">
									</div>
		                        </div>
		                        <div class="col-md-2 col-sm-2 col-xs-12">
									<div class="form-group">
									    <label for="nome">Número</label>
									    <input type="text" class="form-control" name="numero" id="numero"  placeholder="">
									</div>
		                        </div>
		                        <div class="col-md-2 col-sm-2 col-xs-12">
									<div class="form-group">
									    <label for="nome">Complemento</label>
									    <input type="text" class="form-control" name="complemento" id="complemento"  placeholder="">
									</div>
		                        </div>
	 							<div class="col-md-2 col-sm-2 col-xs-12">
									<div class="form-group">
									    <label for="nome">Bairro</label>
									    <input type="text" class="form-control" name="bairro" id="bairro"  placeholder="">
									</div>
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-12">
									<div class="form-group">
									    <label for="nome">Estado</label>
									    <input type="text" class="form-control" name="estado" id="estado"  placeholder="">
									</div>
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-12">
									<div class="form-group">
									    <label for="nome">Cidade</label>
									    <input type="text" class="form-control" name="cidade" id="cidade"  placeholder="">
									</div>
		                        </div>
		                    </div>
		                    <div class="row">
		                    	<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 10px; float: right;">
		                    		<button type="submit" class="btn btn-success">Salvar</button>
		                    		<button type="button" class="btn btn-danger btn-resetar">Cancelar</button>
		                    	</div>
		                    </div>
	                    </form>                    	
                    </div>
                </div>
            </div>      
        </div>
    </div> 
</body>
</html>
<script src="<?php echo $url ?>/front/js/loadingOverlay.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    	var spinHandle = loadingOverlay.activate();

    	// consulta token para post
		$.ajax({
			url: '<?php echo $url ?>/token/',
			type: 'GET'			
		})
		.done(function(retorno) {
			$('#csrf-token').val(retorno);
			loadingOverlay.cancel(spinHandle);
		});    	

		<?php if (isset($_GET['id']) && $_GET['id'] != null): ?>
			// função para popular o edit de dados.
	        $.ajax({
		        url: '<?php echo $url ?>/cliente_por_id/'+<?php echo $_GET['id'] ?>,
		        type: 'GET'         
	        })
	        .done(function(retorno) {
	        	$('#id').val(retorno.id);
				$('#nome').val(retorno.nome);
				data = retorno.data_nascimento.split(' ');
				$('#data_nascimento').val(data[0]);
				$('#sexo').val(retorno.sexo);
				$('#cep').val(retorno.cep);
				$('#endereco').val(retorno.endereco);
				$('#numero').val(retorno.numero);
				$('#complemento').val(retorno.complemento);
				$('#bairro').val(retorno.bairro);
				$('#cidade').val(retorno.cidade);
				$('#estado').val(retorno.estado);

				loadingOverlay.cancel(spinHandle);
	        }); 

		<?php endif ?>

    	// mascara para o cep
    	$('#cep').mask('99999-999');

    	// função para consulta no via cep os dados
    	$('#cep').on('change',function(){
    		cep = $(this).val();
    		if(cep.length == 9){
    			$.ajax({
    				url: 'https://viacep.com.br/ws/'+cep.replace('-','')+'/json/',
    				type: 'GET'
    			})
    			.done(function(retorno) {
    				$('#endereco').val(retorno['logradouro']);
    				$('#cidade').val(retorno['localidade']);
    				$('#estado').val(retorno['uf']);
    				$('#bairro').val(retorno['bairro']);
    				console.log(retorno);
    			});
    		}
    	});

    	$('.btn-resetar').on('click',function(){
    		$('#formCliente')[0].reset();
    	});

		$( "#formCliente" ).submit(function( event ) {
			// Stop form from submitting normally
			event.preventDefault();
			var form = $( "#formCliente"  ).serialize();

			$.ajax({
				url: '<?php echo $url ?>/cliente_salvar/',
				type: 'POST',
				headers: {
                    'X-CSRF-TOKEN': $('#csrf-token').val()
                },
				data : form
			})
			.done(function(retorno) {
				if(retorno['status'] == 1){
					Swal.fire(
					  'Sucesso',
					  retorno['msg'],
					  'success'
					)
					setTimeout(function(){
						window.location.href = "/front/index.php";
					},1500);
				}else{
					Swal.fire(
						'Error',
						retorno['msg'],
						'danger'
					)
				}
				
			});
		});

    });
</script>
