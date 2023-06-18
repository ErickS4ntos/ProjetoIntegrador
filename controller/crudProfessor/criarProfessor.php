<?php
include('../../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Insere os dados na tabela
  $query = "INSERT INTO tb_professor (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  mysqli_query($mysqli, $query);

  // Redireciona para a página principal
  header('Location: index.php');
  exit();
}
?>


<h1>Novo Professor</h1>

<form action="?page=salvar" method="POST">
    <!-- mandando dados de forma oculta -->
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

<a href="">Sou Aluno</a>