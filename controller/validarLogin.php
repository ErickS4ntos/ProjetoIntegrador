

<?php


	$senha = htmlspecialchars($_GET['senha']);

	$email = htmlspecialchars($_GET['email']);



$host = "localhost"; 

$user = "id18630512_pi_ii"; 

$pass = "123456789A@h"; 

$dbname = "id18630512_bd_projeto_integrador_ii";

$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

//mysqli_select_db($connection,$dbname);



$query = " select nome, email, senha from tb_usuario

 where  senha='".$senha."' and email='".$email."'";

echo $query;



$resp= mysqli_query ($connection,$query) or die ('Erro ao salvar');


	$nome="";
			//	$resp = mysqlexecuta($connection,$sqlp);

						while ($rowp = mysqli_fetch_array($resp)) {							

							

											//buscando do campo do banco de dados DT_DE_ALTERACAO.

											$nome = $rowp["nome"];

												echo "<br/>Usuário logado com sucesso!";

						}




	


	if ($nome==""){
	    
	} else{?>
	<script>
	    window.location ='/controller/principal.php';
	</script>
	<?php
	}


?>