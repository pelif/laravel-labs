@extends('layouts.layout')
@section('content')
    <h3>Ver Cliente</h3>
    <br><br>
    <a href="{{ route('clients.edit', ['client' => $client->id]) }}" class="btn btn-primary">Editar</a>
    <a 
        href="{{ route('clients.destroy', ['client' => $client->id]) }}" 
        class="btn btn-danger"
        onclick="event.preventDefault();document.getElementById('form-delete').submit();">Excluir</a>

    <form id="form-delete" style="display:: none" action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
    
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $client->id }}</td>
            </tr>
            <tr>
                <th scope="row">Nome</th>
                <td>{{ $client->name }}</td>
            </tr>
            <tr>
                <th scope="row">Documento</th>
                <td>{{ $client->document_number }}</td>
            </tr>
            <tr>
                <th scope="row">E-mail</th>
                <td>{{ $client->email }}</td>
            </tr>
            <tr>
                <th scope="row">Telefone</th>
                <td>{{ $client->phone }}</td>
            </tr>
            <tr>
                <th scope="row">Estado Civil</th>
                <td>
                    @switch($client->marital_status)
                        @case(1)
                            Solteiro
                            @break
                        @case(2)    
                            Casado
                            @break
                        @case(3)
                            Divorciado
                            @break
                    @endswitch
                </td>
            </tr>
            <tr>
                <th scope="row">Data Nasc.</th>
                <td>{{ $client->date_birth }}</td>
            </tr>
            <tr>
                <th scope="row">Sexo</th>
                <td>{{ in_array($client->sex, ['m','M']) ? 'Masculino' : 'Feminino' }}</td>
            </tr>
            <tr>
                <th scope="row">Defici??ncia F??sica</th>
                <td>{{ $client->physical_desability != null ? '?? deficiente F??sico' : 'N??o tem defici??ncia' }}</td>
            </tr>
            <tr>
                <th scope="row">Inadimplente</th>
                <td>{{ $client->defaulter != null ? '?? Inadimplente' : 'N??o ?? inadimplente' }}</td>
            </tr>
        </tbody>
    </table>
@endsection