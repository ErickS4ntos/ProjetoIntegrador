<?php
// Inclui o arquivo de conexão e as funções CRUD
require_once "conexao.php";
require_once "crudUsuario.php";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Cria um novo usuário
    if (criarUsuario($nome, $email, $senha)) {
        echo "Usuário criado com sucesso!";
    } else {
        echo "Erro ao criar usuário!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
<form action="criar_usuario.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <button type="submit">Criar usuário</button>
</form>
</body>
</html>