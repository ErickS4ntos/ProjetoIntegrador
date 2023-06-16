<!--Exibirá a lista de usuários e fornecerá links para adicionar, editar e excluir usuários -->
<?php
include('config.php');

// Obtém a lista de cursos
$query = "SELECT * FROM curso";
$resultado = mysqli_query($conexao, $query);

// Exibe a lista de cursos
while ($curso = mysqli_fetch_assoc($resultado)) {
  echo "ID: " . $curso['id'] . "<br>";
  echo "Título: " . $curso['titulo'] . "<br>";
  echo "Descrição: " . $curso['descricao'] . "<br>";
  echo "Carga Horária: " . $curso['carga_horaria'] . "<br>";
  echo "ID Curso Usuário: " . $curso['id_curso_usuario'] . "<br>";
  echo "ID Instrutor: " . $curso['id_instrutor'] . "<br>";
  echo "ID Certificado: " . $curso['id_certificado'] . "<br>";
  echo "ID Categoria: " . $curso['id_categoria'] . "<br>";
  echo "<a href='editar.php?id=" . $curso['id'] . "'>Editar</a> ";
  echo "<a href='excluir.php?id=" . $curso['id'] . "'>Excluir</a><br><br>";
}

// Link para adicionar novo curso
echo "<a href='adicionar.php'>Adicionar Curso</a>";

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
