@extends('layouts.app')
@section('titulo', 'Artigos | upLexis')

{{-- SECTION QUE RECEBE O CONTEUDO DA PAGINA --}}
@section('conteudo')  
    <div class="container-fluid full-height bg-orange p-0">
        @include('layouts.includes.nav')
        <div class="container mt-5">
            <h2 class="text-white font-weight-bold">
                ARTIGOS SALVOS 
            </h2>
            <div class="row">
                <span style="width:100%;border-top:3px solid #fff;"></span>
            </div> 
            <div class="row mt-5">
                <div class="col-md-12 mx-auto">
                    <table class="table table-light table-responsive-lg" >
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Titulo</th>
                                <th scope="col">link</th>
                                <th scope="col">Data</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!$articles->isEmpty())
                                @foreach ($articles as $article)
                                <tr>
                                    <th class="text-center">{{ $article->id_article}}</th>
                                    <td>{{ $article->titulo}}</td>
                                    <td><a target="_target" href="{{ $article->link}}" class="btn-uplexis orange">{{ $article->link}}</a></td>
                                    <td>{{ date('d/m/Y', strtotime($article->created_at)) }}</td>
                                    <td class="text-center" ><a title="remover" href="{{ route('admin.deleteArtigo', $article->id_article) }}"><i style="font-size:2.5rem;" class="material-icons">close</i></a></td>
                                </tr>
                                @endforeach  
                            @else
                                <h2 class="text-center text-white">Nenhum artigo foi encontrado!</h2>
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection
