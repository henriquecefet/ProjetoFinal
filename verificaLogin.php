<?php
	include("conectaBanco.php");

	$resposta = mysql_query("select * from usuario");

	$linha = mysql_fetch_assoc($resposta);

	$email = $_REQUEST["email"];
	$senha = $_REQUEST["senha"];
	$confirmacao = 0;

	$token = sha1("$email$senha");

	if($resposta){

		while($linha){
			if(($linha['email'] == $email)&&($linha['token'] == $token)){
				$confirmacao=1;
				break;
			}
			$linha = mysql_fetch_assoc($resposta);
		}

	}
	mysql_close($link);

	session_start();

	if($confirmacao == 1){

		$_SESSION["email"] = $linha['email'];
		$_SESSION["usuario"]=$linha['idUser'];

		header("location:paginaUser.php");

	}
	else{
		header("location:index.php");

	}
?>
