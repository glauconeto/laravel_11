@extends('admin.layouts.app')

@section('title', 'Criar usuário')

@section('content')
    <h1>Novo usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users.partials.form')
    </form>
@endsection