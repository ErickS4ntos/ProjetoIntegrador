<!--Exibirá a lista de usuários e fornecerá links para adicionar, editar e excluir usuários.-->
<?php
include('config.php');

// Obtém a lista de instrutores
$query = "SELECT * FROM instrutores";
$resultado = mysqli_query($conexao, $query);

// Exibe a lista de instrutores
while ($instrutor = mysqli_fetch_assoc($resultado)) {
  echo "ID: " . $instrutor['id'] . "<br>";
  echo "Nome: " . $instrutor['nome'] . "<br>";
  echo "Biografia: " . $instrutor['biografia'] . "<br>";
  echo "ID do Curso: " . $instrutor['id_curso'] . "<br>";
  echo "<a href='editar.php?id=" . $instrutor['id'] . "'>Editar</a> ";
  echo "<a href='excluir.php?id=" . $instrutor['id'] . "'>Excluir</a><br><br>";
}

// Link para adicionar novo instrutor
echo "<a href='adicionar.php'>Adicionar Instrutor</a>";

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
