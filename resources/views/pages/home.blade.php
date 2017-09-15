@extends('layout')

@section('title')
  Home
@endsection

@section('keywords')
  Chatroom
@endsection

@section('content')

<div class="container">
  <h3>Home blade php</h3>

  <div id="app">
    <example></example>
  </div>
</div>

  {!! Form::text('input', '' ,array(
    'class' => 'form-group',
     'placeholder' => 'placeholder text'
  )) !!}

<div i1d="root">
  <my-component></my-component>
</div>
@stop
