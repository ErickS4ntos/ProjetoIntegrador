<!--Exibirá a lista de usuários e fornecerá links para adicionar, editar e excluir usuários.-->
<?php
include('config.php');

// Obtém a lista de usuários
$query = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $query);

// Exibe a lista de usuários
while ($usuario = mysqli_fetch_assoc($resultado)) {
  echo "ID: " . $usuario['id'] . "<br>";
  echo "Nome: " . $usuario['nome'] . "<br>";
  echo "E-mail: " . $usuario['email'] . "<br>";
  echo "ID do Curso: " . $usuario['id_curso'] . "<br>";
  echo "<a href='editar.php?id=" . $usuario['id'] . "'>Editar</a> ";
  echo "<a href='excluir.php?id=" . $usuario['id'] . "'>Excluir</a><br><br>";
}

// Link para adicionar novo usuário
echo "<a href='adicionar.php'>Adicionar Usuário</a>";

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
