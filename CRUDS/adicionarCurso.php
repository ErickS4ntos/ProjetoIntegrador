<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os dados do formulário
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];
  $carga_horaria = $_POST['carga_horaria'];
  $id_curso_usuario = $_POST['id_curso_usuario'];
  $id_instrutor = $_POST['id_instrutor'];
  $id_certificado = $_POST['id_certificado'];
  $id_categoria = $_POST['id_categoria'];

  // Insere os dados na tabela
  $query = "INSERT INTO curso (titulo, descricao, carga_horaria, id_curso_usuario, id_instrutor, id_certificado, id_categoria) VALUES ('$titulo', '$descricao', $carga_horaria, $id_curso_usuario, $id_instrutor, $id_certificado, $id_categoria)";
  mysqli_query($conexao, $query);

}