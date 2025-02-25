@extends('admin.layouts.app')

@section('title', 'Lista de usuário')

@section('content')    
    <h1>Usuários</h1>
    
    <a href="{{ route('users.create') }}">Novo</a>

    <x-alert />

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100">Nenhum usuário registrado</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
@endsection