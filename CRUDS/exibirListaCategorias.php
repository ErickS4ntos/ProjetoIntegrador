<!--Exibirá a lista de usuários e fornecerá links para adicionar, editar e excluir usuários -->
<?php
include('config.php');

// Obtém a lista de categorias
$query = "SELECT * FROM categorias";
$resultado = mysqli_query($conexao, $query);

// Exibe a lista de categorias
while ($categoria = mysqli_fetch_assoc($resultado)) {
  echo "ID: " . $categoria['id'] . "<br>";
  echo "Nome: " . $categoria['nome'] . "<br>";
  echo "ID do
