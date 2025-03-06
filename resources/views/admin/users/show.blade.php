@extends('admin.layouts.app')

@section('title', 'Detlhes do usuário')

@section('content')
    <h1>Detalhes do {{ $user->name }}</h1>
    
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->name }}</li>
    </ul>

    <x-alert />

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delet</button>
    </form>
@endsection