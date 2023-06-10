<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os dados do formulário
  $nomeUsuario = $_POST['nomeUsuario'];
  $nomeCurso = $_POST['nomeCurso'];
  $dataConclusao = $_POST['dataConclusao'];
  $codigoAutenticacao = $_POST['codigoAutenticacao'];
  $id_curso = $_POST['id_curso'];

  // Insere os dados na tabela
  $query = "INSERT INTO certificado (nomeUsuario, nomeCurso, dataConclusao, codigoAutenticacao, id_curso) VALUES ('$nomeUsuario', '$nomeCurso', '$dataConclusao', '$codigoAutenticacao', $id_curso)";
  mysqli_query($conexao, $query);

  // Redireciona para a página principal
  header('Location: index.php');
  exit();
}
?>

<h2>Adicionar Certificado</h2>
<form method="POST" action="">
  <label for="nomeUsuario">Nome do Usuário:</label>
  <input type="text" name="nomeUsuario" required><br>

  <label for="nomeCurso">Nome do Curso:</label>
  <input type="text" name="nomeCurso" required><br>

  <label for="dataConclusao">Data de Conclusão:</label>
  <input type="date" name="dataConclusao" required><br>

  <label for="codigoAutenticacao">Código de Autenticação:</label>
  <input type="text" name="codigoAutenticacao" required><br>

  <label for="
