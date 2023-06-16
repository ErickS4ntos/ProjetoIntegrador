<!--Atualizar os campos host, usuarios, senha, banco. De acordo com as informações do banco-->
<?php
$host = "seu_host";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "seu_banco";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (mysqli_connect_errno()) {
  echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
  exit();
}
?>
