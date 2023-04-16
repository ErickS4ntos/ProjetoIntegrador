<?php
// Inclui o arquivo de conexão e as funções CRUD
require_once "conexao.php";
require_once "crudUsuario.php";

function atualizarUsuario($id, $nome, $email, $senha) {
    global $conn;
    // Sanitiza os dados de entrada
    $id = mysqli_real_escape_string($conn, $id);
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);
    // Hash na senha para maior segurança
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    // Atualiza os dados do usuário na tabela 'usuarios'
    $query = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
    return mysqli_query($conn, $query);
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Atualizar usuário</title>
  </head>
  <body>
    <h1>Atualizar usuário</h1>
    <form action="atualizar_usuario.php" method="POST">
      <label for="id">ID do usuário:</label>
      <input type="number" id="id" name="id" required>

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit">Atualizar</button>
    </form>
  </body>
</html>