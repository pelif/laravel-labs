@extends('layouts.layout')
@section('content')

<h3>Listagem de Clientes</h3>
<br><br>
<a href="{{ route('clients.create') }}" class="btn btn-default">Adicionar Cliente</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>CNPJ/CPF</th>
        <th>Data Nasc.</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Sexo</th>
        <th>Açao</th>
    </thead>

    <tbody>
    @forelse($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->document_number }}</td>
            <td>{{ $client->date_birth }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ strtoupper($client->sex) }}</td>
            <td>
                <a href="{{ route('clients.edit', ['client' => $client->id ]) }}" class="btn btn-link">Editar</a> | 
                <a href="{{ route('clients.show', ['client' => $client->id ]) }}" class="btn btn-link">Ver</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8">Não há registros a serem exibidos.</td>
        </tr>
    @endforelse
    </tbody>

</table>

@endsection