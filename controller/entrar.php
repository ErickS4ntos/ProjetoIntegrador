<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
   <link rel="icon" type="image/png" sizes="16x16" href="/img-icon/favicon-16x16.png">
  <link rel="stylesheet" href="/style/entrar.css">
  <link rel="stylesheet" href="/style/style.css">
  <title>Entrar</title>
</head>
<body>
    <header class="menu">
        <section class="menu-content main-content">
            <a href="/#"><img id="logo" src="/img-icon/LogoTigerFinal.png" alt="LOGO"></a>

            <nav class="menu-nav">
                <ul>
                    <li><button class="button"><a href="cadastrar.php">Cadastre-se</a></button></li> <!--Arrumar o botão e a ancoragem // Inverter a ordem-->
                </ul>
            </nav>
        </section>
    </header>
  <main class="blue-content">
    <section class="intro-content entrar">
        <div class="images">
            <img src="../img-section/image-intro.svg" alt="Start building">
        </div>
        <div class="black-bg form__group field" >
            <form action="validarLogin.php">
                <h4>Comece a programar hoje!</h4>
                <input type="text" placeholder="E-mail" class="form__field" name="email" id='email' required><br>
                <input type="password" placeholder="Senha" class="form__field" name="senha" id='senha' required><br><br>
                <button type="submit" class="button">Entrar</button>
            </form>
        </div>
    </section>
  </main>
</body>
</html>