<?php
	$host = "localhost";
	$usuario = "sgl";
	$senha = "12345678";
	$banco = "sgl";


	$link = mysql_connect($host,$usuario,$senha);		/* Abre conexão */

	if(!$link){											/* Caso nao consiga conectar ele informa o erro */
		echo mysql_error();
		die();
	}

	if(!mysql_select_db($banco)){						/* Seleciona o banco de dados */
		echo mysql_error();								/* Erro ao selecionar o banco de dados */
		mysql_close($link);
		die();
	}
?>
