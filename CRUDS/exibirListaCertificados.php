<!--Exibirá a lista de usuários e fornecerá links para adicionar, editar e excluir usuários -->
<?php
include('config.php');

// Obtém a lista de certificados
$query = "SELECT * FROM certificado";
$resultado = mysqli_query($conexao, $query);

// Exibe a lista de certificados
while ($certificado = mysqli_fetch_assoc($resultado)) {
  echo "ID: " . $certificado['id'] . "<br>";
  echo "Nome do Usuário: " . $certificado['nomeUsuario'] . "<br>";
  echo "Nome do Curso: " . $certificado['nomeCurso'] . "<br>";
  echo "Data de Conclusão: " . $certificado['dataConclusao'] . "<br>";
  echo "Código de Autenticação: " . $certificado['codigoAutenticacao'] . "<br>";
  echo "ID Curso: " . $certificado['id_curso'] . "<br>";
  echo "<a href='editar.php?id=" . $certificado['id'] . "'>Editar</a> ";
  echo "<a href='excluir.php?id=" . $certificado['id'] . "'>Excluir</a><br><br>";
}

// Link para adicionar novo certificado
echo "<a href='adicionar.php'>Adicionar Certificado</a>";

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
