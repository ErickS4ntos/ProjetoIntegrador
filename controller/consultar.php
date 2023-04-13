<head><link href="consultar.css" rel="stylesheet"></head>
<body>
    <div class= "box">
        <form id='ifform' metod=get action='resultadoDaConsulta.php'>
            <fieldset> 
            <legend><b>Consultar clientes</b></legend>
            <br/> <br/>
                <div class="inputBox">
                    <input name='Nome' class="input" id="inp-nome" requirid>
                    <label for="nome" class="labelinput">Nome completo </label>
                </div>
                <br/><br/>
                <div class="inputBox">
                     <input name='CPF' class="input" id="inp-cpf">  
                     <label for="CPF" class="labelinput">CPF</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input name='Telefone' class="input" id="inp-telefone">
                     <label for="Telefone" class="labelinput">telefone</label>
                </div>
                <br/><br/>
                <div class="inputBox">
                    <input name='E-Mail' class="input" id="inp-email">
                     <label for="E-Mail" class="labelinput">E-mail</label>
                </div>
                <br/><br/>
 
            <input type=button value='Consultar' onclick='document.getElementById("ifform").submit();' />
            </fieldset>
        </form>
    <div/>