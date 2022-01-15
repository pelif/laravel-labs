<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Clients</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <a href="/portal/client/new">Novo Cliente</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a href="/portal/client/edit/{{ $client->id }}">Editar</a> | 
                        <a 
                        href="/portal/client/delete/{{ $client->id }}"
                        onclick="event.preventDefault();if(confirm('Deseja Excluir este cliente?')){window.location.href='{{ "/portal/client/delete/$client->id" }}'}">Remover</a> | 

                    </td>
                </tr>
            @empty
                <tr><td colspan="3"><h3>Não há clientes cadastrados</h3></td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>