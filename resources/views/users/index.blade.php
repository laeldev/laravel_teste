@extends('layouts.app')

@section('title', 'Listagem dos Usuarios')

@section('content')
<h1> 
  listagem dos usuarios 
  (<a href="{{ route('users.create') }}">+</a>)
</h1>

<ul>
  @foreach ( $users as $user )
    <li>
      {{ $user->name }} -
      {{ $user->email }}
      |  <a href="{{ route('users.show', $user->id)}}">Detahes</a>
    </li>  
  @endforeach
</ul>
@endsection