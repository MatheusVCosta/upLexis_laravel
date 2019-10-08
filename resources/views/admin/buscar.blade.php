@extends('layouts.app')
@section('titulo', 'Buscar | upLexis')

{{-- SECTION QUE RECEBE O CONTEUDO DA PAGINA --}}
@section('conteudo')  
    
    <div class="container-fluid full-height bg-orange p-0">
        @include('layouts.includes.nav')
        <div class="container mt-5">
            <h2 class=" text-white font-weight-bold" id="este">
                BUSCAR ARTIGOS
            </h2>  
            <div class="row">
                <span style="width:100%;border-top:3px solid #fff;"></span>
            </div> 
            
            <div class="row mt-5 ">
                <div class="col-md-8 box-search bg-white mx-auto">
                    <p ></p>
                    <div class="form-group mt-5">
                        <input class="form-control border-0 bg-gray" id="idBuscar" type="text" name="search" placeholder="Pesquisar">
                    </div>
                    <button type="button" onclick="buscar()" class="btn btn-lg  d-block mx-auto background-button p-2 pl-4 mt-2 mb-5">Buscar <img src=" {{ asset('media/icon/baseline_send_white_18dp.png')}}" alt=""></button>
                </div>
            </div>
        </div>
    </div>

    <script>

        function buscar(){

            let site = $('#idBuscar').val();
            var titulo = "";
            var link = "";
            $.ajax({
                url:`https://www.uplexis.com.br/blog/?s=${site}`, 
                success:function(consulta){ 
                    console.log($(consulta).find('div .post').length);
                    if($(consulta).find('div .post').length == 0){
                        console.log('Vazio')
                    }else{
                        for(let i = 0; i < $(consulta).find('div .post').length;i++){
                            classTitulo = $(consulta).find('div .post .title')[i];
                            titulo = $(classTitulo).text();
                            
                            classLink = $(consulta).find('div .post a')[i];
                            link = $(classLink).attr('href');
                            
                            enviarDados(titulo, link)
                        }
                    }
                }
            });                
        }
        function enviarDados(titulo, link){
            
            $.ajax({
                method: 'POST',
                url: ' {{ route("admin.salvarArtigo")}} ',
                data : {'titulo' : titulo, 'link' : link, 'fk_user' : {{ Auth::user()->id }}},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(consulta){
                    console.log(consulta)
                }
            })
        }
    </script>
@endsection
