@extends('layouts.app')

@section('title','Detalhe Usuario')


@section('content')
<h1> Listagem do usuario {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    
</ul>
@endsection