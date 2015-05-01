@extends('app')

@section('content')
 <h1>Escreva um novo artigo</h1>
  <hr/>

  {!! Form::open(['url'=> 'artigos']) !!}

    @include('artigos.form', ['btnSubmit' => 'Adicionar Artigo']);

  {!! Form::close() !!}


@stop