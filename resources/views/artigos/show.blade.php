@extends('app')

@section('content')
  <h1> {{ $artigo->titulo }} </h1>
  <article>
    {{ $artigo->corpo }}
  </article>
@stop