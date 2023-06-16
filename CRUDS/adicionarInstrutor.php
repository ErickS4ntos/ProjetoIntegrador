<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os dados do formulário
  $nome = $_POST['nome'];
  $biografia = $_POST['biografia'];
  $id_curso = $_POST['id_curso'];

  // Insere os dados na tabela
  $query = "INSERT INTO instrutores (nome, biografia, id_curso) VALUES ('$nome', '$biografia', $id_curso)";
  mysqli_query($conexao, $query);

  // Redireciona para a página principal
  header('Location: index.php');
  exit();
}
?>

<h2>Adicionar Instrutor</h2>
<form method="POST" action="">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" required><br>

  <label for="biografia">Biografia:</label>
  <textarea name="biografia" required></textarea><br>

  <label for="id_curso">ID do Curso:</label>
  <input type="text" name="id_curso" required><br>

  <input type="submit" value="Adicionar">
</form>
