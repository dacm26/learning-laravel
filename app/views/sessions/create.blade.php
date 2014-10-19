@extends('layouts.default')
@section('content')
  
  {{ Form::open(['route' => 'sessions.store']) }}
    <div>
      {{ Form::label('email','Email: ') }}
      {{ Form::email('email') }}
    </div>

    <div>
      {{ Form::label('password','Password: ') }}
      {{ Form::password('password') }}
    </div>
    <div>{{ Form::submit('login') }}</div>
  {{ Form::close() }}
@stop