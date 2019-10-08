@extends('layouts.app')
@section('titulo', 'Buscar | upLexis')

{{-- SECTION QUE RECEBE O CONTEUDO DA PAGINA --}}
@section('conteudo')  
    
    <div class="container-fluid full-height bg-orange p-0">
        @include('layouts.includes.nav')
        <div class="container mt-5">
            <h2 class=" text-white font-weight-bold">
                BUSCAR ARTIGOS
                <img id="idLoanding" src="{{ asset('media/gif/Rolling-1.8s-200px.gif')}}" alt="loanding" class="loanding">
            </h2>  
            

            <div class="row">
                <span style="width:100%;border-top:3px solid #fff;"></span>
            </div> 
            
            <div class="row mt-5 ">
                <div class="col-md-8 box-search bg-white mx-auto">
                    <p ></p>
                    <div class="form-group mt-5">
                        <input class="form-control border-0 bg-gray" id="idBuscar" type="text" name="search" placeholder="Pesquisar">
                        <p id="aviso" class="message"></p>
                        
                    </div>
                    <button type="button" onclick="buscar()" class="btn btn-lg  d-block mx-auto background-button p-2 pl-4 mt-2 mb-5">Buscar <img src=" {{ asset('media/icon/baseline_send_white_18dp.png')}}" alt=""></button>
                </div>
            </div>
        </div>
        
    </div>
    <div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="idTitulo"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="idTexto">
            </div>
            <div class="modal-footer">
                <a class="btn bg-orange text-white " href="{{ route('admin.exibir') }}" role="button">Sim</a>
                <button type="button" class="btn bg-orange text-white" data-dismiss="modal">Não</button>
            </div>
            </div>
        </div>
    </div>
    <script>
        var teste = 0;
        function buscar(){
            var aviso = $('#aviso').text('');
            let busca = $('#idBuscar').val();
            var titulo = "";
            var link = "";
            var consultaQtd = ""
            if(busca == ""){
                $('#idBuscar').focus();
            }else{
                $.ajax({
                    url:`https://www.uplexis.com.br/blog/?s=${busca}`, 
                    beforeSend:function(){
                        $('#idLoanding').show()
                    },
                    success:function(consulta){ 
                        $('#idLoanding').hide()
                        consultaQtd = $(consulta).find('div .post').length;
                        if(consultaQtd == 0){
                            $(aviso).text(`Não foi encontrado nada com: ${busca}`)
                        }else{
                            // $('#idBuscar').val() = "";
                            for(let i = 0; i < $(consulta).find('div .post').length;i++){
                                classTitulo = $(consulta).find('div .post .title')[i];
                                titulo = $(classTitulo).text();
                                classLink = $(consulta).find('div .post a')[i];
                                link = $(classLink).attr('href');   
                                enviarDados(titulo, link, consultaQtd)
                            }
                        }
                    }
                });
            }                
        }
        function enviarDados(titulo, link, qtd){
            $.ajax({
                method: 'POST',
                url: ' {{ route("admin.salvarArtigo")}} ',
                data : {'titulo' : titulo, 'link' : link, 'fk_user' : {{ Auth::user()->id }}},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(callback){
                    teste = teste + 1;
                    if(teste == qtd){
                        $('#modalSucesso').modal('show');
                        $('#idTitulo').text('Artigos salvos com sucesso');
                        $('#idTexto').append('<p>Seus artigos foram salvos com sucesso!</p> <p>Deseja visializar seus artigos?</p>');
                    }
                }
            })
        }
    </script>
@endsection
