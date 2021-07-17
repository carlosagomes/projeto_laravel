<?php 
    $url = "http://".$_SERVER['HTTP_HOST']."";
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
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:10px;margin-right: 5px;">
                <a href="<?php echo $url ?>/front/cliente/editar.php" class="btn btn-info" style="float: right;">Novo Cliente</a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Listagem de Clientes </h3>
                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Data de Nascimento</th>
                                        <th>Sexo</th>
                                        <th>CEP</th>
                                        <th>Endereço</th>
                                        <th>Número</th>
                                        <th>Complemento</th>
                                        <th>Bairro</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody class="listagem">
                                    <tr style="text-align: center;">
                                        <td colspan="11">Nenhum registro localizado no momento.</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>                       
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
        listarClientes();

        function listarClientes(){
            var spinHandle = loadingOverlay.activate();
            $.ajax({
                url: '<?php echo $url ?>/cliente_listar/',
                type: 'GET'         
            })
            .done(function(retorno) {
                html = "";
                if(retorno.length > 0){
                    $.each(retorno, function(index, val) {
                        html += "<tr>";
                            html += "<td>"+(val.nome)+"</td>";
                            html += "<td>"+(val.data_nascimento)+"</td>";
                            html += "<td>"+(val.sexo)+"</td>";
                            html += "<td>"+(val.cep                 == null ? '' : val.cep)+"</td>";
                            html += "<td>"+(val.endereco            == null ? '' : val.endereco)+"</td>";
                            html += "<td>"+(val.numero              == null ? '' : val.numero)+"</td>";
                            html += "<td>"+(val.complemento         == null ? '' : val.complemento)+"</td>";
                            html += "<td>"+(val.bairro              == null ? '' : val.bairro)+"</td>";
                            html += "<td>"+(val.cidade              == null ? '' : val.cidade)+"</td>";
                            html += "<td>"+(val.estado              == null ? '' : val.estado)+"</td>";
                            html += "<td><a style='margin-right:5px' href='<?php echo $url ?>/front/cliente/editar.php?id="+(val.id)+"' class='btn btn-info'><i class='glyphicon glyphicon-pencil'></i></a>"+
                                    "\<a data-id="+(val.id)+"' class='btn btn-danger btn-remover-cliente'><i class='glyphicon glyphicon-trash'></i></a></td>";
                        html += "</tr>";
                    });
                    setTimeout(function(){
                        loadingOverlay.cancel(spinHandle);
                    },2000);
                    
                }else{
                    html += "<tr>"; 
                        html += "<td colspan='11'>Nenhum registro localizado no momento.</td>";
                    html += "</tr>";
                    loadingOverlay.cancel(spinHandle);
                }
                $('.listagem').html(html);
            });             
        }
        


        $(document).on('click','.btn-remover-cliente',function(){
            id = $(this).attr('data-id');
            Swal.fire({
                title: 'Você realmente deseja remover esse cliente?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, pode remover!',
                cancelButtonText: 'Não'
            }).then((result) => {
                var spinHandle = loadingOverlay.activate();
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?php echo $url ?>/cliente_delete/'+id,
                        type: 'GET'         
                    })
                    .done(function(retorno) {
                        if(retorno['status'] == 1){
                            Swal.fire(
                              'Sucesso',
                              retorno['msg'],
                              'success'
                            )
                            listarClientes();
                        }else{
                            Swal.fire(
                                'Error',
                                retorno['msg'],
                                'danger'
                            )                            
                        }
                        loadingOverlay.cancel(spinHandle);
                    });                     
                } 

                loadingOverlay.cancel(spinHandle);
            })
        });
    });    
</script>