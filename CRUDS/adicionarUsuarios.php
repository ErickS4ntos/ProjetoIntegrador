<!--Formulario para adicionar novo usuario-->
<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $id_curso = $_POST['id_curso'];

  // Insere os dados na tabela
  $query = "INSERT INTO usuarios (nome, email, senha, id_curso) VALUES ('$nome', '$email', '$senha', $id_curso)";
  mysqli_query($conexao, $query);

  // Redireciona para a página principal
  header('Location: index.php');
  exit();
}
?>

<h2>Adicionar Usuário</h2>
<form method="POST" action="">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" required><br>

  <label for="
