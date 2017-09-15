<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        {!! Html::link('/', 'Header', array('class' => 'navbar-brand')) !!}
      </div>
      <ul class="nav navbar-nav pull-right">
        <li>{!! Html::link('/', 'Home') !!}</li>
        <li> {!! Html::link('chat', 'Chatroom') !!} </li>
      </ul>
      @extends('layouts.authlink')
    </div>
  </nav>
</header>
