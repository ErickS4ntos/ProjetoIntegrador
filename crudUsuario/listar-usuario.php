<h1>Listar Usuários</h1>

<?php
$sql = "SELECT * FROM tb_usuario";

//conexao ....
$res = $mysqli->query($sql);

$qtd = $res->num_rows; //quantidade de resultados

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";

        // botao de editar e excluir
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $row->id . "'\" class='btn btn-success'>Editar </button>    

                    <button onclick=\"if(confirm('tem certeza que deseja excluir?'))
                    {location.href='?page=salvar&acao=excluir&id=" . $row->id . "'}else{false}\" class='btn btn-danger'>Excluir </button>                 
                </td>";

        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>não encontrou resultados! </p>";
}
?>