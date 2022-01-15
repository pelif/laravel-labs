@extends('layouts.layout')
@section('content')
<h3>Cadastro de Cliente</h3>

@include('admin.clients.errors')

<form action="{{ route('clients.update', ['client' => $client->id]) }}" method="POST">     
    {{ method_field('PUT') }}
    @include('admin.clients._form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary col-md-12">Cadastrar</button>
    </div>
    

</form>
@endsection