<?php
include('../../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Insere os dados na tabela
  $query = "INSERT INTO tb_usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  mysqli_query($mysqli, $query);

  // Redireciona para a página principal
  header('Location: index.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="16x16" href="img-icon/favicon-16x16.png">
    <link rel="stylesheet" href="style/style.css">
    <title>TIGER</title>
</head>
<body>
    <header class="menu">
        <section class="menu-content main-content">
            <a href="../../index.html
            "><img id="logo" src="img-icon/LogoTigerFinal.png" alt="LOGO"></a>

            <nav class="menu-nav">
                <ul>
                    <li><a href="#footer">Fale conosco</a></li>
                    <li><a href="../../view/quemSomos.html">Quem somos</a></li>
                    <li><a href="view/entrar.html">Entrar</a></li>
                    <li><button class="button"><a href="controller/crudUsuario/criarUsuario.php">Cadastre-se</a></button></li> <!--Arrumar o botão e a ancoragem // Inverter a ordem-->
                </ul>
            </nav>
        </section>
    </header>

<h1>Novo Usuário</h1>

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

<a href="../crudProfessor/criarProfessor.php">Sou Professor</a>
</body>
</html>