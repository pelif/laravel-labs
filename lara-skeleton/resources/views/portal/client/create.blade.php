<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Client</title>
</head>
<body>
    <h1>Criar Novo Cliente</h1>
    <form method="post" action="/portal/client/create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>