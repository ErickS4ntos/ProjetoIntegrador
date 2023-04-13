
<?php
$nome = htmlspecialchars($_GET['nome']);

	$email = htmlspecialchars($_GET['email']);

	$senha = htmlspecialchars($_GET['senha']);



$host = "localhost"; 

$user = "id18630512_pi_ii"; 

$pass = "123456789A@h"; 

$dbname = "id18630512_bd_projeto_integrador_ii";

$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

//mysqli_select_db($connection,$dbname);



$query = "INSERT INTO `tb_usuario`(`nome`, `email`, `senha`)  VALUES ('".$nome."', '".$email."', '".$senha."')";



mysqli_query ($connection,$query) or die ('Erro ao salvar');

/*

    while($tarefa = mysqli_fetch_assoc($query)){

        echo $tarefas["nome"];

    }*/

echo " Salvo ".$nome." " .$email ;
?>