<?php
// funcao para criar um novo usuario
function criarUsuario($nome, $email, $senha) {
    global $conn;
    // verifica os dados de entrada
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);
    // Hash na senha para maior segurança
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    // insere os dados na tabela 'usuarios'
    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    return mysqli_query($conn, $query);
}

// funcao para buscar um usuário pelo ID
function buscarUsuario($id) {
    global $conn;
    // Sanitiza o ID de entrada
    $id = mysqli_real_escape_string($conn, $id);
    // Busca o usuário na tabela 'usuarios'
    $query = "SELECT * FROM usuarios WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

// Função para atualizar um usuário existente
function atualizarUsuario($id, $nome, $email, $senha) {
    global $conn;
    // Sanitiza os dados de entrada
    $id = mysqli_real_escape_string($conn, $id);
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);
    // Hash na senha para maior segurança
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    // Atualiza os dados do usuário na tabela 'usuarios'
    $query = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
    return mysqli_query($conn, $query);
}

// Função para excluir um usuário pelo ID
function excluirUsuario($id) {
    global $conn;
    // Sanitiza o ID de entrada
    $id = mysqli_real_escape_string($conn, $id);
    // Exclui o usuário da tabela 'usuarios'
    $query = "DELETE FROM usuarios WHERE id = $id";
    return mysqli_query($conn, $query);
}
?>