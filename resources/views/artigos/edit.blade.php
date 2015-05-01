@extends('app')

@section('content')
  <h1>Edite o Artigo</h1>

  {!! Form::model($artigo, ['method' => 'PATCH', 'action' => ['ArtigosController@update', $artigo->id] ]) !!}

          @include('artigos.form', ['btnSubmit' => 'Atualizar Artigo']);

    {!! Form::close() !!}

    @include('errors.list')
@stop