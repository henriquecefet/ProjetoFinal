<?php
	include("conectaBanco.php");

	$nome = $_REQUEST['nome'];
	$dataNasc= $_REQUEST['dataNasc'];
	$senha = $_REQUEST['senha'];
	$confSenha = $_REQUEST['confSenha'];
	$email = $_REQUEST['email'];

	if($senha != $confSenha){
			$mgm = "Senhas diferentes!";
			header("index.php?mgm=$mgm");
	}

	$token = sha1("$email$senha");
	$sql = "insert into usuario (nome,email,token,dataNasc) values ('$nome','$email','$token','$dataNasc')";

	$resposta = mysql_query($sql);				/* Enviando a consulta para o banco de dados */

	if($resposta){
		header("location: index.php"); //. mysql_insert_id(); se quiser mostrar o id 		/* Deu Certo */
	}
	else{
		echo mysql_error();												/* Erro ao executar a consulta */
	}

	mysql_close($link);													/* Fecha a conexão */

?>
