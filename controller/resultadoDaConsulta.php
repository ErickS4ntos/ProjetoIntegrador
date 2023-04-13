

<?php

	$nome = htmlspecialchars($_GET['nome']);

	$senha = htmlspecialchars($_GET['senha']);

	$email = htmlspecialchars($_GET['email']);



$host = "localhost"; 

$user = "id18630512_pi_ii"; 

$pass = "123456789A@h"; 

$dbname = "id18630512_bd_projeto_integrador_ii";

$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

//mysqli_select_db($connection,$dbname);



$query = " select nome, senha, email from tb_usuario";

// where nome='".$nome."' and senha='".$senha."' and email='".$email."'"

echo $query;



$resp= mysqli_query ($connection,$query) or die ('Erro ao salvar');



			//	$resp = mysqlexecuta($connection,$sqlp);

						while ($rowp = mysqli_fetch_array($resp)) {							

							

											//buscando do campo do banco de dados DT_DE_ALTERACAO.

											$nome = $rowp["nome"];

												echo "<br/>Nome";

											echo $nome;

						}









?>