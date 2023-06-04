<?php
// Dados da conexão com o banco de dados
$host = "localhost";
$user = "id18630512_host";
$password = "e|U41R[/Z0^o9u(l";
$database = "id18630512_projeto_integrador";

// Cria a conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>