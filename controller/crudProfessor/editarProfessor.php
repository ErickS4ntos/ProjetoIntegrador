<h1>Editar Professor</h1>
<?php
    $sql = "SELECT * FROM tb_professor WHERE id=".$_REQUEST["id"];
    $res = $mysqli->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <!-- mandando dados de forma oculta -->
    <input type="hidden" name="acao" value="editar">
    <!-- mandando id oculto -->
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Senha</label>
        <!--Trocar value por required para exigir senha para editar-->
        <input type="password" name="senha" value="<?php print $row->nome; ?>" class="form-control">  
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>