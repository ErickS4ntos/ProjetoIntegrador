<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quem somos</title>
</head>
<body>
    
    <?php if($login != 'logado') { ?>
        <script>
            alert('Você nao esta logado');
            window.location = '/controller/incluir.php'
        </script>
    <?php } else { ?>
            <h1>Aloo</h1>
    <?php 
        $_SESSION['LOGADO']='SIM';
    } ?>
</body>