<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Pessoa</title>
</head>
<body>
    <h1>Cadastro de Pessoa</h1>
    <form action="/pessoas" method="post">
        @csrf
        <input type="text" name="nome" id="" placeholder="Nome">
        <input type="text" name="telefone" id="" placeholder="Telefone">
        <input type="text" name="email" id="" placeholder="E-mail">
        <input type="submit" value="Salvar">
        <br>
        <a href="/pessoas">Voltar</a>
    </form>
</body>
</html>