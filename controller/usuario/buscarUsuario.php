<?php
// Inclui o arquivo de conexão e as funções CRUD
require_once "conexao.php";
require_once "crudUsuario.php";

// Função para buscar um usuário pelo ID
function buscarUsuario($id) {
    global $conn;
    // Sanitiza o ID de entrada
    $id = mysqli_real_escape_string($conn, $id);
    // Busca o usuário na tabela 'usuarios'
    $query = "SELECT * FROM tb_usuarios WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Buscar usuário</title>
  </head>
  <body>
    <h1>Buscar usuário pelo ID</h1>
    <form action="buscar_usuario.php" method="GET">
      <label for="id">ID do usuário:</label>
      <input type="number" id="id" name="id">

      <button type="submit">Buscar</button>
    </form>
  </body>
</html>

