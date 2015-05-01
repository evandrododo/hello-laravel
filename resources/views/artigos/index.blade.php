@extends('app')

@section('content')
    <h1>Artigos <a href="{{ action('ArtigosController@create') }}" title="Novo Artigo"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></h1>
    @foreach($artigos as $artigo)
        <article>
            <h2> 
              <a href="{{ action('ArtigosController@show', $artigo->id) }}">
                {{ $artigo->titulo }} 
              </a>

            </h2>
            <div>{{ $artigo->corpo }}</div>
        </article>
    @endforeach
@stop