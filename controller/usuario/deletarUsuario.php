<?php
// Inclui o arquivo de conexão e as funções CRUD
require_once "conexao.php";
require_once "crudUsuario.php";

// Função para excluir um usuário pelo ID
function excluirUsuario($id) {
    global $conn;
    // Sanitiza o ID de entrada
    $id = mysqli_real_escape_string($conn, $id);
    // Exclui o usuário da tabela 'usuarios'
    $query = "DELETE FROM usuarios WHERE id = $id";
    return mysqli_query($conn, $query);
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Excluir usuário</title>
  </head>
  <body>
    <h1>Excluir usuário</h1>
    <form action="excluir_usuario.php" method="POST">
      <label for="id">ID do usuário:</label>
      <input type="number" id="id" name="id" required>

      <button type="submit">Excluir</button>
    </form>
  </body>
</html>