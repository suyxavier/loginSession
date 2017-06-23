<?php
    //verificar se está logado
    session_start();

    $existe = isset($_SESSION['esta_logado']);

    if($existe == false){
        //redirecionar
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="http://g.glbimg.com/og/gs/gsat3/f/thumbs/tag/2017/05/29/e250a240c9a6ef39edc4fe4be85f47ca.jpg" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>