<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "INSERT INTO tb_usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";
            // conexao com banco
            $res = $mysqli->query($sql);

            if($res==true){
                print"<script>alert('cadastrado com sucesso');</script>"; // exibi mensagem de sucesso
                print"<script>location.href='?page=listar';</script>"; // relocando pagina 
            } else {
                print"<script>alert('erro, cadastro não realizado');</script>"; // exibi mensagem de sucesso
                print"<script>location.href='?page=listar';</script>"; // relocando pagina 
            }
            break;
            
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "UPDATE tb_usuario SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id=".$_REQUEST["id"];

            // conexao com banco
            $res = $mysqli->query($sql);            

            if($res==true){
                print"<script>alert('editado com sucesso');</script>"; // exibi mensagem de sucesso
                print"<script>location.href='?page=listar';</script>"; // relocando pagina 
            } else {
                print"<script>alert('erro, não foi possivel editar');</script>"; // exibi mensagem de sucesso
                print"<script>location.href='?page=listar';</script>"; // relocando pagina 
            }
            break;

        case 'excluir':
            
            $sql = "DELETE FROM tb_usuario WHERE id=".$_REQUEST["id"] ;

            // conexao com banco
            $res = $mysqli->query($sql);   

            if($res==true){
                print"<script>alert('Excluido com sucesso');</script>"; // exibi mensagem de sucesso
                print"<script>location.href='?page=listar';</script>"; // relocando pagina 
            } else {
                print"<script>alert('erro, não foi possivel Excluir');</script>"; // exibi mensagem de sucesso
                print"<script>location.href='?page=listar';</script>"; // relocando pagina 
            }
            break;
    }