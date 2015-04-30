@extends('app')

@section('content')
  <h1> {{ $artigo->titulo }} </h1>
  <span>Publicado em {{ $artigo->publicado_em }}</span>
  <article>
    {{ $artigo->corpo }}
  </article>
@stop