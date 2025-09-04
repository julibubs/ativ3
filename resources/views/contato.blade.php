<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
</head>
<body>
    <h1>Entre em Contato</h1>
    <form action="{{ route('contato.enviar') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
