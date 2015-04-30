@extends('app')

@section('content')
 <h1>Escreva um novo artigo</h1>
  <hr/>

{!! Form::open(['url' => 'artigos']) !!}

  <div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['placeholder'=>'Qual o título desse artigo?','class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('corpo', 'Corpo:') !!}
    {!! Form::textarea('corpo', null, ['placeholder'=>'Qual o título desse artigo?','class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('publicado_em', 'Publicar em:') !!}
    {!! Form::input('date', 'publicado_em', date('Y-m-d'), ['placeholder'=>'Qual o título desse artigo?','class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Adicionar Artigo', ['class'=>'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}

@stop