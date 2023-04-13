<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img-icon/favicon-16x16.png">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/cadastrar.css">
<body>
    <header class="menu">
        <section class="menu-content main-content">
            <a href="/#"><img id="logo" src="/img-icon/LogoTigerFinal.png" alt="LOGO"></a>

            <nav class="menu-nav">
                <ul>
                    <li><a href="#footer">Fale conosco</a></li>
                    <li><a href="view/quemSomos.html">Quem somos</a></li>
                    <li><a href="/controller/entrar.php">Entrar</a></li>
                    <li><button class="button"><a href="controller/cadastrar.php">Cadastre-se</a></button></li> <!--Arrumar o botão e a ancoragem // Inverter a ordem-->
                </ul>
            </nav>
        </section>
    </header>
    <section class="blue-content min-height cadastrar">
        <div class="maior">
            <div class="menor1">
              <img src="/img-section/image-phone.svg" alt="imagem">
            </div>
            <div class='pre-form' id="menor2">
              <form id='ifform' metod=get action='salvar.php'>
                 <legend>Cadastre-se aqui:</legend>
                 <label>Nome</label>
                 <input type="text" name='nome' placeholder="Nome" class="input"><br><br>
                 <label>Email</label>
                 <input type="email" name='email' placeholder="E-mail" class="input"><br><br>
                 <label>Senha</label>
                 <input type="password" name='senha' placeholder="Senha" class="input"><br><br>
                 <input type=button value='Salvar' onclick='document.getElementById("form").submit();'/><br>
              </form>
        </div>
        </div>
    </section>
</body>
