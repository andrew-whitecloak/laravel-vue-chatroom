@extends('layout')

@section('title')
  Chatroom
@endsection

@section('content')
<div class="container">
  <h1>Chatroom</h1>
  <div id="app">
    <chat-log :message="messageList"></chat-log>
    <chat-composer @messagesent="addMessage" />
  </div>
</div>
@stop
